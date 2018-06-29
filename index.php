<?php include 'assets/includes/header.php';?>
<!-- <div class="parallax" data-parallax="scroll" data-image-src="assets/images/banner.jpg"></div> -->
<!-- banner section starts here -->
<div class="banner-caption" >
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="banner-contents">
					<h1>Find Your Dream Home</h1>
					<p>More than 10k  listings across hundreds of categories</p>
					<form class="banner-form">
						<div class="gs-main-search">
							<div class="row">
								<div class="col-md-2">
									<select class="form-control">
										<option value="rent">For Rent</option>
										<option value="sale">For Sale</option>
										<option value="new-home">New Home</option>
									</select>
								</div>
								<div class="col-md-9">
									<div class="mt-search-bar">
										<div class="form-field primary">
											<input class="form-control" type="text" placeholder="Search by locations">
										</div>
										<!-- location search ends here -->
										<div class="form-field secondary">
											<input class="form-control" type="text" placeholder="Flat">
											<div class="propertype">
												<div class="col1 columnCommon">
													<ul>
														<li class="propertyHeading"> RESIDENTIAL</li>
														<li>
															<span class="checkBox" title="Flat" >
																<input type="checkbox">
															</span>
															<label>Flat</label>
														</li>
														<li>
															<span class="checkBox">
																<input type="checkbox" title="House/Villa">
															</span>
															<label>House/Villa</label>
														</li>
														<li>
															<span class="checkBox">
																<input type="checkbox" title="Plot/Land">
															</span>
															<label>Plot/Land</label>
														</li>
													</ul>
													<div class="clearAll"></div>
													
												</div>
												<div class="col2 columnCommon">
													<ul>
														<li class="propertyHeading"> COMMERCIAL</li>
														<li>
															<span class="checkBox">
																<input type="checkbox" title="Office Space">
															</span>
															<label>Office Space</label>
														</li>
														<li>
															<span class="checkBox" >
																<input type="checkbox" title="Shop/Showroom">
															</span>
															<label>Shop/Showroom</label>
														</li>
														<li>
															<span class="checkBox">
																<input type="checkbox" title='Commercial Land'>
															</span>
															<label >Commercial Land</label>
														</li>
														<li>
															<span class="checkBox" >
																<input type="checkbox" title="Warehouse">
															</span>
															<label>Warehouse</label>
														</li>
														<li>
															<span class="checkBox">
																<input type="checkbox" title="Industrial Building">
															</span>
															<label>Industrial Building</label>
														</li>
														<li>
															<span class="checkBox">
																<input type="checkbox" title="Industrial Shed">
															</span>
															<label>Industrial Shed</label>
														</li>
													</ul>
													<div class="clearAll"></div>
													
												</div>
												<div class="col3 columnCommon">
													<ul>
														<li class="propertyHeading">OTHERS</li>
														<li>
															<span class="checkBox">
																<input type="checkbox" title="Agricultural Land">
															</span>
															<label>Agricultural Land</label>
														</li>
														<li>
															<span class="checkBox">
																<input type="checkbox" title="Farm House">
															</span>
															<label>Farm House</label>
														</li>
													</ul>
													<div class="clearAll"></div>
												</div>
											</div>
										</div>
										<!-- flat section ends here -->
										<div class="form-field secondary">
											<input class="form-control" type="text" placeholder="Price Range">
											<div class="priceRange">
												<div class="rangeOption">
													<input maxlength="10" class="rangeLink minrange" type="text" placeholder="Min" value="" text="">
													<span class="dividerH"></span>
													<input maxlength="11" class="rangeLink maxrange" type="text" placeholder="Max"  value="" text="">
													<div class="clearAll"></div>
												</div>
												<div class="range rangeMin">
													<ul>
														<li>Min</li>
														<li actualval="500000"  value="500000">Rs. 5 Lac</li>
														<li actualval="1000000"  value="1000000">Rs. 10 Lac</li>
														<li actualval="2000000"  value="2000000">Rs. 20 Lac</li>
														<li actualval="3000000"  value="3000000">Rs. 30 Lac</li>
														<li actualval="4000000"  value="4000000">Rs. 40 Lac</li>
														<li actualval="5000000"  value="5000000">Rs. 50 Lac</li>
														<li actualval="6000000"  value="6000000">Rs. 60 Lac</li>
														<li actualval="7000000"  value="7000000">Rs. 70 Lac</li>
														<li actualval="8000000"  value="8000000">Rs. 80 Lac</li>
														<li actualval="9000000"  value="9000000">Rs. 90 Lac</li>
														<li actualval="10000000"  value="10000000">Rs. 1 Cr</li>
														<li actualval="12000000"  value="12000000">Rs. 1.2 Cr</li>
														
													</ul>
												</div>
												<div class="range rangeMax">
													<ul>
														<li> Max</li>
														<li actualval="500000" value="500000">Rs. 5 Lac</li>
														<li actualval="1000000" value="1000000">Rs. 10 Lac</li>
														<li actualval="2000000" value="2000000">Rs. 20 Lac</li>
														<li actualval="3000000" value="3000000">Rs. 30 Lac</li>
														<li actualval="4000000" value="4000000">Rs. 40 Lac</li>
														<li actualval="5000000" value="5000000">Rs. 50 Lac</li>
														<li actualval="6000000" value="6000000">Rs. 60 Lac</li>
														<li actualval="7000000" value="7000000">Rs. 70 Lac</li>
														<li actualval="8000000" value="8000000">Rs. 80 Lac</li>
														<li actualval="9000000" value="9000000">Rs. 90 Lac</li>
														<li actualval="10000000" value="10000000">Rs. 1 Cr</li>
														
													</ul>
												</div>
											</div>
											
										</div>
										<!-- budget section ends here -->
									</div>
								</div>
								<div class="col-md-1">
									<button class="gs-submit"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
						<!-- <div class="gs-extra-form">
							<div class="row">
								
								<div class="col-sm-9 form-inline search-primary-options">
									<div class="radio">
										<label>
											<input name="type" value="1" checked="checked" type="radio"> &nbsp;Homes
										</label>
									</div>
									
									<div class="radio">
										<label>
											<input name="type" value="6" type="radio"> &nbsp;Land
										</label>
									</div>
									
								</div>
								<div class="col-sm-3 text-right">
										<a class="gs-more" href="#">More Options <i class="fa fa-caret-down"></i></a>
								</div> -->
								
							</div>
							<!-- <div class="gs-refinements">
									<div class="row">
											<div class="col-md-7">
													<div class="form-group">
															<label>Budget Range</label>
															<select class="form-control">
																	<option>From</option>
																	<option>sfsfdsd</option>
															</select>
															<select class="form-control">
																	<option>To</option>
																	<option>sfsfdsd</option>
																	
															</select>
													</div>
													<div class="form-group">
															<label>Rate per aana<br>(on KTM)</label>
															<select class="form-control">
																	<option>From</option>
																	<option>sfsfdsd</option>
															</select>
															<select class="form-control">
																	<option>To</option>
																	<option>sfsfdsd</option>
																	
															</select>
													</div>
													<div class="form-group">
															<label>Land per aana</label>
															<select class="form-control">
																	<option>From</option>
																	<option>sfsfdsd</option>
															</select>
															<select class="form-control">
																	<option>To</option>
																	<option>sfsfdsd</option>
																	
															</select>
													</div>
											</div>
									-->									<!-- col-md-6 ends here -->
									<!-- <div class="col-md-5">
											<div class="form-group">
													<label>Furnished</label>
													<div class="radio">
															<label>
																	<input name="type" value="1" checked="checked" type="radio"> &nbsp;Yes
															</label>
													</div>
													<div class="radio">
															<label>
																	<input name="type" value="4" type="radio">
																	&nbsp;No
															</label>
													</div>
											</div>
											<div class="form-group">
													<label>Parking</label>
													<div class="radio">
															<label>
																	<input name="type" value="1" checked="checked" type="radio"> &nbsp;Yes
															</label>
													</div>
													<div class="radio">
															<label>
																	<input name="type" value="4" type="radio">
																	&nbsp;No
															</label>
													</div>
											</div>
											<div class="form-group">
													<label>Cooking System</label>
													<div class="radio">
															<label>
																	<input name="type" value="1" checked="checked" type="radio"> &nbsp;Yes
															</label>
													</div>
													<div class="radio">
															<label>
																	<input name="type" value="4" type="radio">
																	&nbsp;No
															</label>
													</div>
											</div>
											<div class="form-group">
													<label>Swimming Pool</label>
													<div class="radio">
															<label>
																	<input name="type" value="1" checked="checked" type="radio"> &nbsp;Yes
															</label>
													</div>
													<div class="radio">
															<label>
																	<input name="type" value="4" type="radio">
																	&nbsp;No
															</label>
													</div>
											</div>
									</div>
								</div> 
								
							</div>-->
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>
</div>
<!-- intro section starts here  -->
<section id="intro-section">
<div class="gs-sm-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<!-- 3 features sections -->
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="gs-features">
							<div class="gs-icons">
								<img src="assets/images/wallet.svg" alt="">
							</div>
							<div class="gs-feat-contents">
								<h4>Sell</h4>
								<p>Thinking of selling? Ghar Sansar can help</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="gs-features">
							<div class="gs-icons">
								<img src="assets/images/key.svg" alt="">
							</div>
							<div class="gs-feat-contents">
								<h4>Buy</h4>
								<p>Thinking of selling? Ghar Sansar can help</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="gs-features">
							<div class="gs-icons">
								<img src="assets/images/real-estate.svg" alt="">
							</div>
							<div class="gs-feat-contents">
								<h4>Rent</h4>
								<p>Thinking of selling? Ghar Sansar can help</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- featured homes -->
<section id="property-section">
<div class="ta-sm-padding">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="ta-heading">
				<h2 class="ta-title">Featured Properties</h2>
			</div>
		</div>
	</div>
	<div id="property-slider" class="owl-carousel">
		<div class="slider-item">
			<div class="gs-properties">
				<div class="gs-image">
					<figure>
						<a href="property_detail.php"><img src="assets/images/image.png" alt="property-image"></a>
						<figcaption>
						<h4 class="js-price">Rs. 1,00,00,000</h4>
						</figcaption>
					</figure>
					<div class="gs-tag">
						<h6>For Sell</h6>
					</div>
				</div>
				<div class="gs-descriptions">
					<div class="gs-desc-left">
						<h5 class="gs-location"><a href="property_detail.php">1234 Street, Kathmandu</a></h5>
						<ul class="gs-prop-lists">
							<li><img src="assets/images/area.jpg">320sq.ft</li>
							<li><img src="assets/images/bed.png">Beds</li>
							<li><img src="assets/images/bath.png">Bath</li>
						</ul>
					</div>
					<div class="gs-like">
						<a href="#"><i class="fa fa-heart-o"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item">
			<div class="gs-properties">
				<div class="gs-image">
					<figure>
						<a href="property_detail.php"><img src="assets/images/image2.png" alt="property-image"></a>
						<figcaption>
						<h4 class="js-price">Rs. 1,00,00,000</h4>
						</figcaption>
					</figure>
					<div class="gs-tag">
						<h6>For Sell</h6>
					</div>
				</div>
				<div class="gs-descriptions">
					<div class="gs-desc-left">
						<h5 class="gs-location"><a href="property_detail.php">1234 Street, Kathmandu</a></h5>
						<ul class="gs-prop-lists">
							<li><img src="assets/images/area.jpg">320sq.ft</li>
							<li><img src="assets/images/bed.png">Beds</li>
							<li><img src="assets/images/bath.png">Bath</li>
						</ul>
					</div>
					<div class="gs-like">
						<a href="#"><i class="fa fa-heart-o"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item">
			<div class="gs-properties">
				<div class="gs-image">
					<figure>
						<a href="property_detail.php"><img src="assets/images/image3.png" alt="property-image"></a>
						<figcaption>
						<h4 class="js-price">Rs. 1,00,00,000</h4>
						</figcaption>
					</figure>
					<div class="gs-tag">
						<h6>For Sell</h6>
					</div>
				</div>
				<div class="gs-descriptions">
					<div class="gs-desc-left">
						<h5 class="gs-location"><a href="property_detail.php">1234 Street, Kathmandu</a></h5>
						<ul class="gs-prop-lists">
							<li><img src="assets/images/area.jpg">320sq.ft</li>
							<li><img src="assets/images/bed.png">Beds</li>
							<li><img src="assets/images/bath.png">Bath</li>
						</ul>
					</div>
					<div class="gs-like">
						<a href="#"><i class="fa fa-heart-o"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item">
			<div class="gs-properties">
				<div class="gs-image">
					<figure>
						<a href="property_detail.php"><img src="assets/images/image4.png" alt="property-image"></a>
						<figcaption>
						<h4 class="js-price">Rs. 1,00,00,000</h4>
						</figcaption>
					</figure>
					<div class="gs-tag">
						<h6>For Sell</h6>
					</div>
				</div>
				<div class="gs-descriptions">
					<div class="gs-desc-left">
						<h5 class="gs-location"><a href="property_detail.php">1234 Street, Kathmandu</a></h5>
						<ul class="gs-prop-lists">
							<li><img src="assets/images/area.jpg">320sq.ft</li>
							<li><img src="assets/images/bed.png">Beds</li>
							<li><img src="assets/images/bath.png">Bath</li>
						</ul>
					</div>
					<div class="gs-like">
						<a href="#"><i class="fa fa-heart-o"></i></a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="gs-btn">
		<a  href="#">View All Properties</a>
	</div>
</div>
</section>
<!-- featured lands -->
<section id="land-section">
<div class="ta-sm-padding">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="ta-heading">
				<h2 class="ta-title">Lands On Sale</h2>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
			</div>
		</div>
	</div>
	<div id="land-slider" class="owl-carousel">
		<div class="slider-item">
			<div class="gs-properties">
				<div class="gs-image">
					<figure>
						<a href="property_detail.php"><img src="assets/images/land1.png" alt="property-image"></a>
						<figcaption>
						<h4 class="js-price">Rs. 1,00,00,000</h4>
						</figcaption>
					</figure>
					<div class="gs-tag">
						<h6>For Sell</h6>
					</div>
				</div>
				<div class="gs-descriptions">
					<div class="gs-desc-left">
						<h5 class="gs-location"><a href="property_detail.php">1234 Street, Kathmandu</a></h5>
						<ul class="gs-prop-lists">
							<li><img src="assets/images/area.jpg">320sq.ft</li>
							<li><img src="assets/images/bed.png">Beds</li>
							<li><img src="assets/images/bath.png">Bath</li>
						</ul>
					</div>
					<div class="gs-like">
						<a href="#"><i class="fa fa-heart-o"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item">
			<div class="gs-properties">
				<div class="gs-image">
					<figure>
						<a href="property_detail.php"><img src="assets/images/land2.png" alt="property-image"></a>
						<figcaption>
						<h4 class="js-price">Rs. 1,00,00,000</h4>
						</figcaption>
					</figure>
					<div class="gs-tag">
						<h6>For Sell</h6>
					</div>
				</div>
				<div class="gs-descriptions">
					<div class="gs-desc-left">
						<h5 class="gs-location"><a href="property_detail.php">1234 Street, Kathmandu</a></h5>
						<ul class="gs-prop-lists">
							<li><img src="assets/images/area.jpg">320sq.ft</li>
							<li><img src="assets/images/bed.png">Beds</li>
							<li><img src="assets/images/bath.png">Bath</li>
						</ul>
					</div>
					<div class="gs-like">
						<a href="#"><i class="fa fa-heart-o"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item">
			<div class="gs-properties">
				<div class="gs-image">
					<figure>
						<a href="property_detail.php"><img src="assets/images/land3.png" alt="property-image"></a>
						<figcaption>
						<h4 class="js-price">Rs. 1,00,00,000</h4>
						</figcaption>
					</figure>
					<div class="gs-tag">
						<h6>For Sell</h6>
					</div>
				</div>
				<div class="gs-descriptions">
					<div class="gs-desc-left">
						<h5 class="gs-location"><a href="property_detail.php">1234 Street, Kathmandu</a></h5>
						<ul class="gs-prop-lists">
							<li><img src="assets/images/area.jpg">320sq.ft</li>
							<li><img src="assets/images/bed.png">Beds</li>
							<li><img src="assets/images/bath.png">Bath</li>
						</ul>
					</div>
					<div class="gs-like">
						<a href="#"><i class="fa fa-heart-o"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item">
			<div class="gs-properties">
				<div class="gs-image">
					<figure>
						<a href="property_detail.php"><img src="assets/images/land4.png" alt="property-image"></a>
						<figcaption>
						<h4 class="js-price">Rs. 1,00,00,000</h4>
						</figcaption>
					</figure>
					<div class="gs-tag">
						<h6>For Sell</h6>
					</div>
				</div>
				<div class="gs-descriptions">
					<div class="gs-desc-left">
						<h5 class="gs-location"><a href="property_detail.php">1234 Street, Kathmandu</a></h5>
						<ul class="gs-prop-lists">
							<li><img src="assets/images/area.jpg">320sq.ft</li>
							<li><img src="assets/images/bed.png">Beds</li>
							<li><img src="assets/images/bath.png">Bath</li>
						</ul>
					</div>
					<div class="gs-like">
						<a href="#"><i class="fa fa-heart-o"></i></a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="gs-btn">
		<a  href="#">View All Lands</a>
	</div>
</div>
</section>
<!-- more on gharsansar -->
<section id="more-lists">
<div class="container">
	<div class="ta-lg-padding">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="ta-heading">
					<h2 class="ta-title">More On Ghar Sansar</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="co-md-12">
				<div class="gs-more-lists">
					<ul>
						<li><a href="#">
							<div class="gs-icons">
								<img src="assets/images/sm-img1.png" alt="">
							</div>
							<div class="gs-feat-contents">
								<h5>House On Tikathali</h5>
								<p class="gs-details">Commercial House on sale at Putalisadak; near ShankharDev Campus made in an area of 1 aana 3 paisa having </p>
								<p class="gs-price">Rs. 1,00,00,000</p>
							</div></a>
						</li>
						<li><a href="#">
							<div class="gs-icons">
								<img src="assets/images/sm-img1.png" alt="">
							</div>
							<div class="gs-feat-contents">
								<h5>House On Tikathali</h5>
								<p class="gs-details">Commercial House on sale at Putalisadak; near ShankharDev Campus made in an area of 1 aana 3 paisa having </p>
								<p class="gs-price">Rs. 1,00,00,000</p>
							</div></a>
						</li>
						<li><a href="#">
							<div class="gs-icons">
								<img src="assets/images/sm-img1.png" alt="">
							</div>
							<div class="gs-feat-contents">
								<h5>House On Tikathali</h5>
								<p class="gs-details">Commercial House on sale at Putalisadak; near ShankharDev Campus made in an area of 1 aana 3 paisa having </p>
								<p class="gs-price">Rs. 1,00,00,000</p>
							</div></a>
						</li>
						<li><a href="#">
							<div class="gs-icons">
								<img src="assets/images/sm-img1.png" alt="">
							</div>
							<div class="gs-feat-contents">
								<h5>House On Tikathali</h5>
								<p class="gs-details">Commercial House on sale at Putalisadak; near ShankharDev Campus made in an area of 1 aana 3 paisa having </p>
								<p class="gs-price">Rs. 1,00,00,000</p>
							</div></a>
						</li>
						<li><a href="#">
							<div class="gs-icons">
								<img src="assets/images/sm-img1.png" alt="">
							</div>
							<div class="gs-feat-contents">
								<h5>House On Tikathali</h5>
								<p class="gs-details">Commercial House on sale at Putalisadak; near ShankharDev Campus made in an area of 1 aana 3 paisa having </p>
								<p class="gs-price">Rs. 1,00,00,000</p>
							</div></a>
						</li>
						<li><a href="#">
							<div class="gs-icons">
								<img src="assets/images/sm-img1.png" alt="">
							</div>
							<div class="gs-feat-contents">
								<h5>House On Tikathali</h5>
								<p class="gs-details">Commercial House on sale at Putalisadak; near ShankharDev Campus made in an area of 1 aana 3 paisa having </p>
								<p class="gs-price">Rs. 1,00,00,000</p>
							</div></a>
						</li>
						<li><a href="#">
							<div class="gs-icons">
								<img src="assets/images/sm-img1.png" alt="">
							</div>
							<div class="gs-feat-contents">
								<h5>House On Tikathali</h5>
								<p class="gs-details">Commercial House on sale at Putalisadak; near ShankharDev Campus made in an area of 1 aana 3 paisa having </p>
								<p class="gs-price">Rs. 1,00,00,000</p>
							</div></a>
						</li>
						<li><a href="#">
							<div class="gs-icons">
								<img src="assets/images/sm-img1.png" alt="">
							</div>
							<div class="gs-feat-contents">
								<h5>House On Tikathali</h5>
								<p class="gs-details">Commercial House on sale at Putalisadak; near ShankharDev Campus made in an area of 1 aana 3 paisa having </p>
								<p class="gs-price">Rs. 1,00,00,000</p>
							</div></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- subscribe section starts here-->
<section id="subscribe-container">
<div class="subscribe-parallax" data-parallax="scroll" data-image-src="assets/images/subscribe-bg.jpg">			<div class="container">
	<div class="ta-xl-padding">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="subscribe-section">
					<div class="ta-heading">
						<h3>Subscribe Newsletter</h3>
						<p>Important property news and handpicked listings in your inbox each week.</p>
					</div>
					<form class="gs-subscribe">
						<input class="form-group" type="text" placeholder="Email Address">
						<button class="gs-submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<?php include 'assets/includes/footer.php';?>