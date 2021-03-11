@foreach($prods as $prod)
	<div class="docname">
		<a href="{{ route('front.product', $prod->slug) }}">
			<img src="{{ asset('assets/images/thumbnails/'.$prod->thumbnail) }}" alt="">
			<div class="search-content">
				<p>{!! mb_strlen($prod->nameLang(),'utf-8') > 66 ? str_replace($slug,'<b>'.$slug.'</b>',mb_substr($prod->nameLang(),0,66,'utf-8')).'...' : str_replace($slug,'<b>'.$slug.'</b>',$prod->nameLang())  !!} </p>
				<span style="font-size: 14px; font-weight:600; display:block;">{{ $prod->showPrice() }}</span>
			</div>
		</a>
	</div> 
@endforeach