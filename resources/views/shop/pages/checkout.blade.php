@extends('shop.layouts.master')
@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--ys pull-left">
			<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>					
			<li><a href="#">Women’s</a></li>
			<li class="active">Dresses</li>
		</ol>
	</div>
</div>
<!-- /breadcrumbs --> 
<!-- CONTENT section -->
<div id="pageContent">
	<div class="container">				
		<!-- title -->
		<div class="title-box">
			<h1 class="text-center text-uppercase title-under">Checkout</h1>
		</div>
		<!-- /title -->
		<div class="row">
			<section class="col-md-8 col-lg-8">
				<!-- checkout-step -->
				<div class="panel-group" id="checkout">
					<div class="panel panel-checkout" role="tablist">
						<!-- panel heading -->
						<div class="panel-heading active" role="tab">
							<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseOne">ESTIMATE SHIPPING AND TAX</a> </h4>
							<div class="panel-heading__number">1</div>
						</div>
						<!-- /panel heading -->
						<!-- panel body -->
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
							<div class="panel-body">
								<form action="checkout-step_submit" >
									<a class="pull-right link-functional" href="#">
										<span class="icon icon-create"></span>Edit
									</a>
									<div class="form-group">
										<label for="checkoutFormFirstName">First Name  <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormFirstName">
									</div>
									<div class="form-group">
										<label for="checkoutFormLastName">Last Name <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormLastName">
									</div>
									<div class="form-group">
										<label for="checkoutFormCompany">Company</label>
										<input type="text" class="form-control" id="checkoutFormCompany">
									</div>
									<div class="form-group">
										<label for="checkoutFormEmailAddress">Email Address  <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormEmailAddress">
									</div>
									<div class="form-group">
										<label for="checkoutFormAddress1">Address 1  <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormAddress1">
									</div>
									<div class="form-group">
										<label for="checkoutFormAddress2">Address 2 </label>
										<input type="text" class="form-control" id="checkoutFormAddress2">
									</div>
									<div class="form-group">
										<label for="checkoutFormCity">City <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormCity">
									</div>
									<div class="form-group">
										<label  for="checkoutFormState">State/Province <sup>*</sup></label>
										<select  id="checkoutFormState" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">
											<option>State/Province</option>
											<option>Austria </option>
											<option>Belgium</option>
											<option>Cyprus </option>
											<option>Croatia </option>
											<option>Czech Republic </option>
											<option>Denmark </option>
											<option>Finland </option>
											<option>France </option>
											<option>Germany </option>
											<option>Greece </option>
											<option>Hungary </option>
											<option>Ireland </option>
											<option>France </option>
											<option>Italy </option>
											<option>Luxembourg </option>
											<option>Netherlands </option>
											<option>Poland </option>
											<option>Portugal </option>
											<option>Slovakia </option>
											<option>Slovenia </option>
											<option>Spain </option>
											<option>United Kingdom </option>
										</select>
									</div>
									<div class="form-group">
										<label  for="checkoutFormCountry">Country <sup>*</sup></label>
										<select  id="checkoutFormCountry" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">					                   
											<option>Austria </option>
											<option>Belgium</option>
											<option>Cyprus </option>
											<option>Croatia </option>
											<option>Czech Republic </option>
											<option>Denmark </option>
											<option>Finland </option>
											<option>France </option>
											<option>Germany </option>
											<option>Greece </option>
											<option>Hungary </option>
											<option>Ireland </option>
											<option>France </option>
											<option>Italy </option>
											<option>Luxembourg </option>
											<option>Netherlands </option>
											<option>Poland </option>
											<option>Portugal </option>
											<option>Slovakia </option>
											<option>Slovenia </option>
											<option>Spain </option>
											<option>United Kingdom </option>
										</select>									
									</div>									    
									<div class="form-group">
										<label for="checkoutFormZip">Zip/Postal Code  <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormZip">
									</div>
									<div class="form-group">
										<label for="checkoutFormTelephone">Telephone  <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormTelephone">
									</div>
									<div class="form-group">
										<label for="checkoutFormFax">Fax</label>
										<input type="text" class="form-control" id="checkoutFormFax">
									</div>

									<span class="note pull-right">* Required Fields</span>	

									<div class="form-group form-group-top clearfix">
										<label class="radio">
											<input id="radio1" type="radio" name="radios">
											<span class="outer">
												<span class="inner"></span>
											</span>
											Ship to this address
										</label>
									</div>
									<div class="form-group clearfix">								      	  						      
										<label class="radio">
											<input id="radio2" type="radio" name="radios" checked>
											<span class="outer">
												<span class="inner"></span>
											</span>
											Ship to different address
										</label>
									</div>
									<p class="btn-top">
										<a class="pull-right link-functional" href="#">
											<span class="icon icon-keyboard_arrow_left"></span>back
										</a>
										<button class="btn btn--ys" type="submit">CONTINUE</button>
									</p>	
								</form>
							</div>
						</div>
						<!-- /panel body -->
					</div>
					<div class="panel panel-checkout" role="tablist">
						<!-- panel heading -->
						<div class="panel-heading" role="tab">
							<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseTwo">SHIPPING INFORMATION</a></h4>
							<div class="panel-heading__number">2</div>
						</div>
						<!-- /panel heading -->
						<!-- panel body -->
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
							<div class="panel-body">
								<p>Ad tota labores appellantur vim. Ex erat aeterno diceret mel, at viderer euripidis sea. Autem scripserit vim ne, mel aliquip percipitur ad. Id vix rebum mnesarchum. Duis bonorum ne pro, ex pri quis nonumes voluptua.</p>
								<p>Populo concludaturque sit cu, his erat viderer ea. Eum ea enim malorum verterem, enim perfecto platonem cum no. Hinc corpora id quo, has justo electram consequuntur ex. Mei detraxit recteque scriptorem in, mei populo tractatos cu, et mei idque quidam expetenda. Eripuit persequeris ut cum. Ei novum inciderint his, ex insolens suavitate per. Habemus fuisset quaestio ius cu.</p>
							</div>
						</div>
						<!-- /panel body -->
					</div>
					<div class="panel panel-checkout" role="tablist">
						<!-- panel heading -->
						<div class="panel-heading" role="tab">
							<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseThree">SHIPPING METHOD</a> </h4>
							<div class="panel-heading__number">3</div>
						</div>
						<!-- /panel heading -->
						<!-- panel body -->
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
							<div class="panel-body">			                  	
								<p class="clearfix">
									<a class="pull-right link-functional" href="#">
										<span class="icon icon-create"></span>Edit
									</a>
									<b class="text-uppercase">
										<span class="color-dark">Flat Rate:</span>
										<span class="color">Fixed $15.00</span>
									</b>
								</p>
								<p class="clearfix">
									<a class="pull-right link-functional btn-top " href="#">
										<span class="icon icon-keyboard_arrow_left"></span>back
									</a>
									<button class="btn btn--ys btn-top " type="submit">CONTINUE</button>
								</p>	
							</div>
						</div>
						<!-- /panel body -->
					</div>
					<div class="panel panel-checkout" role="tablist">
						<!-- panel heading -->
						<div class="panel-heading" role="tab">
							<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseFour">SHIPPING METHOD</a> </h4>
							<div class="panel-heading__number">4</div>
						</div>
						<!-- /panel heading -->
						<!-- panel body -->
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
							<div class="panel-body">
								<form action="checkout-step_submit" >
									<a class="pull-right link-functional" href="#">
										<span class="icon icon-create"></span>Edit
									</a>			                    	
									<div class="form-group form-group-top clearfix">
										<label class="radio">
											<input id="radio3" type="radio" name="radios" checked>
											<span class="outer">
												<span class="inner"></span>
											</span>
											Check / Money order
										</label>
									</div>
									<div class="form-group clearfix">								      	  						      
										<label class="radio">
											<input id="radio4" type="radio" name="radios">
											<span class="outer">
												<span class="inner"></span>
											</span>
											Credit Card (saved)
										</label>
									</div>
									<div class="form-group">
										<label for="checkoutFormNameCard">Name on Card   <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormNameCard">
									</div>
									<div class="form-group">
										<label  for="checkoutFormCreditCartType">Credit Card Type <sup>*</sup></label>
										<select  id="checkoutFormCreditCartType" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">        
											<option>text</option>					                   
										</select>									
									</div>		
									<div class="form-group">
										<label for="checkoutFormCreditCartNumber">Credit Card Number    <sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormCreditCartNumber">
									</div>
									<div class="form-group">
										<label >Expiration Date  <sup>*</sup></label>
										<div class="row">
											<div class="col-sm-3 col-xs-7">
												<select  id="checkoutFormExpirationDateM" class="form-control selectpicker "  data-style="select--ys"  data-width="100%"> 
													<option>Mounth</option>					                   
												</select>
												<div class="divider--md visible-xs"></div>	
											</div>
											<div class="col-sm-3 col-xs-7">
												<select  id="checkoutFormExpirationDateY" class="form-control selectpicker "  data-style="select--ys"  data-width="100%"> 
													<option>Year</option>					                   
												</select>	
											</div>
										</div>
									</div>

									<p class="clearfix">
										<span class="note pull-right">* Required Fields</span>	
										<a href="#" class="color link-underline">What is this?</a>
									</p>							    

									<p>
										<a class="pull-right link-functional btn-top" href="#">
											<span class="icon icon-keyboard_arrow_left"></span>back
										</a>
										<button class="btn btn--ys btn-top" type="submit">CONTINUE</button>
									</p>	

								</form>
							</div>
						</div>
						<!-- /panel body -->
					</div>
					<div class="panel panel-checkout" role="tablist">
						<!-- panel heading -->
						<div class="panel-heading" role="tab">
							<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseFive">ORDER REVIEW</a> </h4>
							<div class="panel-heading__number">5</div>
						</div>
						<!-- /panel heading -->
						<!-- panel body -->
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
							<div class="panel-body">
								<p class="clearfix">
									<a class="pull-right link-functional link-functional-bottom" href="#">
										<span class="icon icon-create"></span>Edit
									</a>
								</p>
								<div class="clearfix"></div>
								<div class="btn-top">
									<!-- order-review-table -->
									<table class="order-review-table">
										<thead>
											<tr>
												<th>Product</th>												
												<th>Unit Price</th>
												<th>Qty</th>
												<th>Subtotal</th>												
											</tr>
										</thead>
										<tbody>
											<tr>												
												<td>
													<h5 class="order-review-table__product-name text-left text-uppercase">
														<a href="product.html">Mauris lacinia lectus</a>
													</h5>
													<ul class="order-review-table__list-parameters">
														<li>
															<span>Color:</span> Purple
														</li>
														<li>
															<span>Quantity:</span> 200
														</li>
														<li>
															<span>Image:</span> No
														</li>
														<li>
															<span>Paper:</span> Type Linen 
														</li>
														<li>
															<span>Size:</span> 4"x3.5"
														</li>
														<li class="visible-xs">
															<span>Price:</span>
															<span class="price-mobile">$28.00</span>
														</li>
														<li class="visible-xs">
															<span>Qty:</span>
															<span>1</span>
														</li>
													</ul>																				
												</td>												
												<td>
													<div class="order-review-table__product-price unit-price">
														$28.00
													</div>
												</td>
												<td>
													<span class="color">1</span>
												</td>
												<td>
													<div class="order-review-table__product-price subtotal">
														$28.00
													</div>
												</td>												
											</tr>																			
											<tr>												
												<td>
													<h5 class="order-review-table__product-name text-left text-uppercase">
														<a href="product.html">Mauris lacinia lectus</a>
													</h5>
													<ul class="order-review-table__list-parameters">
														<li>
															<span>Color:</span> Purple
														</li>
														<li>
															<span>Quantity:</span> 200
														</li>
														<li>
															<span>Image:</span> No
														</li>
														<li>
															<span>Paper:</span> Type Linen 
														</li>
														<li>
															<span>Size:</span> 4"x3.5"
														</li>
														<li class="visible-xs">
															<span>Price:</span>
															<span class="price-mobile">$28.00</span>
														</li>
														<li class="visible-xs">
															<span>Qty:</span>
															<span>1</span>
														</li>
													</ul>																				
												</td>												
												<td>
													<div class="order-review-table__product-price unit-price">
														$28.00
													</div>
												</td>
												<td>
													<span class="color">1</span>
												</td>
												<td>
													<div class="order-review-table__product-price subtotal">
														$28.00
													</div>
												</td>												
											</tr>
										</tbody>
									</table>
									<!-- /order-review-table -->
									<!-- order-review-total -->
									<div class="row clearfix">
										<div class="pull-right col-xl-6 col-lg-9 col-md-9 col-xs-12 btn-top">
											<div class="order-review-total">
												<table class="table-total">
													<tbody>
														<tr>
															<th class="text-left">Subtotal:</th>
															<td class="text-right">$28.00</td>
														</tr>
														<tr>
															<th class="text-left">Tax:</th>
															<td class="text-right">$28.00</td>
														</tr>
													</tbody>
													<tfoot>
														<tr>
															<th>GRAND TOTAL:</th>
															<td>$56.00</td>
														</tr>
													</tfoot>
												</table>
												<p class="clearfix text-right">
													<a href="#" class="btn btn--ys btn--xl">PLACE ORDER <span class="icon icon--flippedX icon-reply"></span></a>
												</p>
												<div class="text-right link-top">
													<span class="color-dark">Forgot an Item?</span> <a class="link-underline" href="#">Edit Your Cart</a>
												</div>
											</div>
										</div>
									</div>
									<!-- /order-review-total -->
								</div>
							</div>
						</div>
						<!-- /panel body -->
					</div>			              
				</div>
				<!-- /checkout-step -->
			</section>
			<aside class="col-md-4 col-lg-4 shopping_cart-aside">
				<!--  -->
				<div class="box-border box-border--padding fill-bg">							
					<h4 class="mega title-bottom1">YOUR CHECKOUT PROGRESS</h4>
					<!--  -->
					<div class="block-underline-top">
						<a class="pull-right link-functional" href="#">Change</a>
						<h6 class="small">BILLING ADDRESS</h6>
						<ul class="categories-list">
							<li><a href="#">Lorem ipsum dolor sit amet </a></li>
							<li><a href="#">Conse ctetur adipisicing </a></li>
							<li><a href="#">Elit sed do eiusmod tempor</a></li>
							<li><a href="#">Incididunt ut labore </a></li>
							<li><a href="#">Et dolore magna aliqua</a></li>
						</ul>
					</div>						
					<!-- / -->
					<!--  -->
					<div class="block-underline-top">
						<a class="pull-right link-functional" href="#">Change</a>
						<h6 class="small">SHIPPING ADDRESS</h6>
						<ul class="categories-list">
							<li><a href="#">Lorem ipsum dolor sit amet </a></li>
							<li><a href="#">Conse ctetur adipisicing </a></li>
							<li><a href="#">Elit sed do eiusmod tempor</a></li>
							<li><a href="#">Incididunt ut labore </a></li>
							<li><a href="#">Et dolore magna aliqua</a></li>
						</ul>
					</div>						
					<!-- / -->
					<!--  -->
					<div class="block-underline-top">
						<a class="pull-right link-functional" href="#">Change</a>
						<h6 class="small">SHIPPING METHOD</h6>
						<ul class="categories-list">
							<li><a href="#">Lorem ipsum dolor sit amet </a></li>									
						</ul>
					</div>						
					<!-- / -->
					<!--  -->
					<div class="block-underline-top">
						<a class="pull-right link-functional" href="#">Change</a>
						<h6 class="small">PAYMENT METHOD</h6>
						<ul class="categories-list">
							<li><a href="#">Lorem ipsum dolor sit amet </a></li>									
						</ul>
					</div>						
					<!-- / -->
				</div>


			</aside>
		</div>		
	</div>
</div>
<!-- End CONTENT section --> 
@endsection