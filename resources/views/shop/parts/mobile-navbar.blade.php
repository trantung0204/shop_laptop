<nav id="off-canvas-menu">				
	<ul class="expander-list">
	@if (isset($categories))
		<li>
			<span class="name">
				<span class="expander">-</span>
				<a href="listing.html"><span class="act-underline">DANH SÁCH</span></a>
			</span>
			<ul class="multicolumn-level">
				@foreach ($categories  as $key => $category)
				<li>
					<span class="name">
						<span class="expander">-</span>
						<a class="megamenu__subtitle" href="listing-layout11.html">	
							<span>{{$key}}</span>
						</a>
					</span>
					<ul class="image-links-level-3 megamenu__submenu">
						@foreach ($category as $key2 => $child)
						<li class="level3"><a href="#" data-id="{{$child->id}}">{{$key2}}</a></li>
						@endforeach									
					</ul>
				</li>
				@endforeach
			</ul>
		</li>
	@endif
	@if (isset($brands))					
		<li>
			<span class="name">
				<span class="expander">-</span>
				<a href="listing.html"><span class="act-underline">HÃNG</span></a>
			</span>	
			<ul class="multicolumn-level">
				@foreach ($brands  as $brand)
					<li><a href="#" data-id="{{$brand->id}}">{{$brand->name}}</a></li>
				@endforeach
			</ul>					
		</li>
	@endif
		<li>
			<span class="name">
				<span class="expander">-</span>
				<a href="{{ asset('shop/guarantee') }}"><span class="act-underline"><span class="act-underline">BẢO HÀNH</span></span></a>
			</span>
		</li>
		<li>
			<span class="name">
				<span class="expander">-</span>
				<a href="{{ asset('shop/about') }}"><span class="act-underline">LIÊN HỆ</span></a>
			</span>
		</li>								
		<li>
			<span class="name">
				<span class="expander">-</span>
				<a href="{{ asset('shop/listing') }}"><span class="act-underline">SẢN PHẨM<span class="badge badge--menu badge--color">SALE</span></span></a>
			</span>
		</li>
	</ul>
</nav>