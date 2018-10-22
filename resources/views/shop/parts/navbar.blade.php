<style type="text/css" media="screen">
	.parent_category{
		margin-top: 25px;
	}
</style>
<ul class="nav navbar-nav">
	<li class="dl-close"><a href="#"><span class="icon icon-close"></span>Đóng</a></li>

	@if (isset($categories))
	<li class="dropdown dropdown-mega-menu dropdown-two-col">
		<span class="dropdown-toggle extra-arrow"></span>
		<a href="about.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">DANH MỤC</span></a>
		<ul class="dropdown-menu multicolumn two-col" role="menu">
			@foreach ($categories  as $key => $category)
				<h3 class="parent_category"><a href="" data-id="{{$category[key($category)]->parent_id}}" title="">{{$key}}</a></h3>
				@foreach ($category as $key2 => $child)
					<li><a href="#" data-id="{{$child->id}}">{{$key2}}</a></li>
				@endforeach
				<div style="clear: both;"></div>
			@endforeach
		</ul>
	</li>
	@endif

	@if (isset($brands))
	<li class="dropdown dropdown-mega-menu dropdown-two-col">
		<span class="dropdown-toggle extra-arrow"></span>
		<a href="about.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">HÃNG</span></a>
		<ul class="dropdown-menu multicolumn two-col" role="menu">
			@foreach ($brands  as $brand)
				<li><a href="#" data-id="{{$brand->id}}">{{$brand->name}}</a></li>
			@endforeach
		</ul>
	</li>
	@endif	
	<li class="dropdown dropdown-mega-menu">
		<span class="dropdown-toggle extra-arrow"></span>
		<a href="{{ asset('shop/guarantee') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">BẢO HÀNH</span></a>
	</li>
	<li class="dropdown dropdown-mega-menu dropdown-two-col">
		<span class="dropdown-toggle extra-arrow"></span>
		<a href="{{ asset('shop/about') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">LIÊN HỆ</span></a>
	</li>											
	<li class="dropdown dropdown-mega-menu">
		<span class="dropdown-toggle extra-arrow"></span>
		<a href="{{ asset('shop/listing') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">SẢN PHẨM<span class="badge badge--menu badge--color">SALE</span></span></a>
	</li>
</ul>