@extends('layouts.admin') 

@section('content')  
					<input type="hidden" id="headerdata" value="{{ __("Brands") }}">
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading">{{ __("Brands") }}</h4>
										<ul class="links">
											<li>
												<a href="{{ route('admin.dashboard') }}">{{ __("Dashboard") }} </a>
											</li>
											<li>
												<a href="{{ route('admin-prod-index') }}">{{ __("All Brands") }}</a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<div class="product-area">
							<div class="row">
								<div class="col-lg-12">
									<div class="mr-table allproduct">

                        @include('includes.admin.form-success')  

										<div class="table-responsiv">
												<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
									                        <th>{{ __("Name English") }}</th>
									                        <th>{{ __("Name Arabic") }}</th>
									                        <th>{{ __('Show Products') }}</th>
									                        <th></th>
														</tr>
													</thead>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

<div class="modal fade" id="addbrand" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

	<div class="modal-header d-block text-center">
		<h4 class="modal-title d-inline-block">{{ __("Update Information") }}</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
	</div>

    <form  action="{{ route('action_add_brand') }}"  method="POST" >
        {{ csrf_field() }}
         <!-- Modal body -->
        <div class="modal-body">
            <div class="row">
    			<div class="col-lg-12">
					<input type="text" name="name_en" placeholder="Name English" >
				</div>
				
				<div class="col-lg-12">
					<input type="text" name="name_ar" placeholder="Name Arabic" >
				</div>
    		</div>
		
									
        </div>

          <!-- Modal footer -->
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ __("Cancel") }}</button>
            <button type="submit" class="btn btn-success" >{{ __("Submit") }}</button>
        </div>
    </form>
     

    </div>
  </div>
</div>

{{-- DELETE MODAL --}}

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

	<div class="modal-header d-block text-center">
		<h4 class="modal-title d-inline-block">{{ __("Confirm Delete") }}</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
	</div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="text-center">{{ __("You are about to delete this Product.") }}</p>
            <p class="text-center">{{ __("Do you want to proceed?") }}</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ __("Cancel") }}</button>
            <a class="btn btn-danger btn-ok">{{ __("Delete") }}</a>
      </div>

    </div>
  </div>
</div>



@endsection    



@section('scripts')


{{-- DATA TABLE --}}

    <script type="text/javascript">

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '{{ route('admin-prod-datatables955') }}',
               columns: [
                        { data: 'name_en', name: 'name_en' },
                        { data: 'name_ar', name: 'name_ar' },
                        { data: 'productss', name: 'productss', searchable: false, orderable: false },
            			{ data: 'action', searchable: false, orderable: false }
                     ],
                language : {
                	processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
                },
				drawCallback : function( settings ) {
	    				$('.select').niceSelect();	
				}
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 table-contents">'+
        	'<a class="add-btn" href="#" data-toggle="modal" data-target="#addbrand">'+
          '<i class="fas fa-plus"></i> <span class="remove-mobile">{{ __("New Brand") }}<span>'+
          '</a>'+
          '</div>');
          
      });											
									


{{-- DATA TABLE ENDS--}}


</script>


<script type="text/javascript">
	



    $(document).on("click", ".set-gallery" , function(){
        var pid = $(this).find('input[type=hidden]').val();
        $('#pid').val(pid);
        $('.selected-image .row').html('');
            $.ajax({
                    type: "GET",
                    url:"{{ route('admin-gallery-show') }}",
                    data:{id:pid},
                    success:function(data){
                      if(data[0] == 0)
                      {
	                    $('.selected-image .row').addClass('justify-content-center');
	      				$('.selected-image .row').html('<h3>{{ __("No Images Found.") }}</h3>');
     				  }
                      else {
	                    $('.selected-image .row').removeClass('justify-content-center');
	      				$('.selected-image .row h3').remove();      
                          var arr = $.map(data[1], function(el) {
                          return el });

                          for(var k in arr)
                          {
        				$('.selected-image .row').append('<div class="col-sm-6">'+
                                        '<div class="img gallery-img">'+
                                            '<span class="remove-img"><i class="fas fa-times"></i>'+
                                            '<input type="hidden" value="'+arr[k]['id']+'">'+
                                            '</span>'+
                                            '<a href="'+'{{asset('assets/images/galleries').'/'}}'+arr[k]['photo']+'" target="_blank">'+
                                            '<img src="'+'{{asset('assets/images/galleries').'/'}}'+arr[k]['photo']+'" alt="gallery image">'+
                                            '</a>'+
                                        '</div>'+
                                  	'</div>');
                          }                         
                       }
 
                    }
                  });
      });


  $(document).on('click', '.remove-img' ,function() {
    var id = $(this).find('input[type=hidden]').val();
    $(this).parent().parent().remove();
	    $.ajax({
	        type: "GET",
	        url:"{{ route('admin-gallery-delete') }}",
	        data:{id:id}
	    });
  });

  $(document).on('click', '#prod_gallery' ,function() {
    $('#uploadgallery').click();
  });
                                        
                                
  $("#uploadgallery").change(function(){
    $("#form-gallery").submit();  
  });

  $(document).on('submit', '#form-gallery' ,function() {
		  $.ajax({
		   url:"{{ route('admin-gallery-store') }}",
		   method:"POST",
		   data:new FormData(this),
		   dataType:'JSON',
		   contentType: false,
		   cache: false,
		   processData: false,
		   success:function(data)
		   {
		    if(data != 0)
		    {
	                    $('.selected-image .row').removeClass('justify-content-center');
	      				$('.selected-image .row h3').remove();   
		        var arr = $.map(data, function(el) {
		        return el });
		        for(var k in arr)
		           {
        				$('.selected-image .row').append('<div class="col-sm-6">'+
                                        '<div class="img gallery-img">'+
                                            '<span class="remove-img"><i class="fas fa-times"></i>'+
                                            '<input type="hidden" value="'+arr[k]['id']+'">'+
                                            '</span>'+
                                            '<a href="'+'{{asset('assets/images/galleries').'/'}}'+arr[k]['photo']+'" target="_blank">'+
                                            '<img src="'+'{{asset('assets/images/galleries').'/'}}'+arr[k]['photo']+'" alt="gallery image">'+
                                            '</a>'+
                                        '</div>'+
                                  	'</div>');
		            }          
		    }
		                     
		                       }

		  });
		  return false;
 }); 


// Gallery Section Update Ends	

  
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#checkAll").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".checkbox").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".checkbox").each(function(){
         $(this).prop("checked",false);
       });
     }
   });
 
  // Changing state of CheckAll checkbox 
  $(".checkbox").click(function(){
 
    if($(".checkbox").length == $(".checkbox:checked").length) {
      $("#checkAll").prop("checked", true);
    } else {
      $("#checkAll").removeAttr("checked");
    }

  });
});

function ConfirmDelete(){
  var input = [] ;

  $(".checkbox:checked").each(function(){
    input.push($(this).val());
  });
    
  if(input.length == 0){
    alert('Please select some Products first ?') ;
    return false;
  }
  document.getElementById('inputArr2').value = input ;
  document.getElementById("action_form2").submit() ;

}


function ConfirmDeleteBulk(){
    var input = [] ;

  $(".checkbox:checked").each(function(){
    input.push($(this).val());
  });
    
  if(input.length == 0){
    alert('Please select some Products first ?') ;
    return false;
  }
  document.getElementById('inputArr1').value = input ;
  document.getElementById("action_form1").submit() ;
}


function ConfirmBrandMove(){
    var input = [] ;

  $(".checkbox:checked").each(function(){
    input.push($(this).val());
  });
    
  if(input.length == 0){
    alert('Please select some Products first ?') ;
    return false;
  }
  document.getElementById('inputArr').value = input ;
  document.getElementById("action_form").submit() ;
}
</script>




@endsection   