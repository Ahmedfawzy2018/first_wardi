
@if(Auth::check())
	@foreach (DB::table('countries')->where('id','191')->get() as $data)
	<option value="{{ $data->country_name }}" {{ Auth::user()->country == $data->country_name ? 'selected' : '' }}>@if(Session::get('language') == '2') السعوديه  @else {{ $data->country_name }} @endif</option>		
	@endforeach
@else
	@foreach (DB::table('countries')->where('id','191')->get() as $data)
	<option value="{{ $data->country_name }}">>@if(Session::get('language') == '2') السعوديه  @else {{ $data->country_name }} @endif</option>		
	@endforeach
@endif