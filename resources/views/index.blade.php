@extends('layouts.main')

@section('content')
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->


			<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover hero-banner" style="background:url(assets/img/bg.jpg) no-repeat;">
				<div class="container">
					<!-- <div class="hero-search-wrap">
						<div class="hero-search">
							<h1>Find Your Dream</h1>
						</div>
						<div class="hero-search-content">

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Neighborhood">
											<i class="ti-search"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Minimum">
											<i class="ti-money"></i>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Maximum">
											<i class="ti-money"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<div class="input-with-icon">
											<select id="bedrooms" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
											<i class="fas fa-bed"></i>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<div class="input-with-icon">
											<select id="bathrooms" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
											<i class="fas fa-bath"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<div class="input-with-icon">
											<select id="cities" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">Los Angeles, CA</option>
												<option value="2">New York City, NY</option>
												<option value="3">Chicago, IL</option>
												<option value="4">Houston, TX</option>
												<option value="5">Philadelphia, PA</option>
												<option value="6">San Antonio, TX</option>
												<option value="7">San Jose, CA</option>
											</select>
											<i class="ti-briefcase"></i>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="hero-search-action">
							<a href="#" class="btn search-btn">Search Result</a>
						</div>
					</div> -->
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->

			<!-- ============================ Slide Property Start ================================== -->
			<section>
				<div class="container">

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>New & featured Property</h2>
								<p>Find new & featured property for you.</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="property-slide">

								<!-- Single Property -->
								<div class="single-items">
									<div class="property-listing property-2">

										<div class="listing-img-wrapper">
											<div class="list-img-slide">
												<div class="click">
													<div><a href="twin_est.php"><img src="assets/img/real.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="twin_est.php"><img src="assets/img/1a.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="twin_est.php"><img src="assets/img/real.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
											<span class="property-type">For Sale</span>
										</div>

										<div class="listing-detail-wrapper pb-0">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="twin_est.php">Twin</a><i class="list-status ti-check"></i></h4>
											</div>
										</div>

										<div class="price-features-wrapper">
											<div class="listing-price-fx">
												<h6 class="listing-card-info-price ">100 million</h6>
											</div>
											<div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bed">4 Beds</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bath">4 Bath</span>
												</div>
											</div>
										</div>

									</div>
								</div>

								<!-- Single Property -->
								<div class="single-items">
									<div class="property-listing property-2">

										<div class="listing-img-wrapper">
											<div class="list-img-slide">
												<div class="click">
													<div><a href="deed.php"><img src="assets/img/2.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="deed.php"><img src="assets/img/2a.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="deed.php"><img src="assets/img/2b.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
											<div class="listing-price">
												<h4 class="list-pr">23 million</h4>
											</div>
											<span class="property-type">For Sale</span>
										</div>

										<div class="listing-detail-wrapper pb-0">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="deed.php">Deed of Conveyance</a><i class="list-status ti-check"></i></h4>
											</div>
										</div>

										<div class="price-features-wrapper">
											<div class="listing-price-fx">
												<h6 class="listing-card-info-price ">23 million</h6>
											</div>
											<div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bed">4 Beds</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bath">4 Bath</span>
												</div>
											</div>
										</div>

									</div>
								</div>

								<!-- Single Property -->
								<div class="single-items">
									<div class="property-listing property-2">

										<div class="listing-img-wrapper">
											<div class="list-img-slide">
												<div class="click">
													<div><a href="owl.php"><img src="assets/img/3.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="owl.php"><img src="assets/img/3.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="owl.php"><img src="assets/img/3.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
											<span class="property-type">For Sale</span>
										</div>

										<div class="listing-detail-wrapper pb-0">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="owl.php">Deeds</a><i class="list-status ti-check"></i></h4>
											</div>
										</div>

										<div class="price-features-wrapper">
											<div class="listing-price-fx">
												<h6 class="listing-card-info-price ">50 million</h6>
											</div>
											<div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bed">4 Beds</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bath">4 Bath</span>
												</div>
											</div>
										</div>

									</div>
								</div>

								<!-- Single Property -->
								<div class="single-items">
									<div class="property-listing property-2">

										<div class="listing-img-wrapper">
											<div class="list-img-slide">
												<div class="click">
													<div><a href="gam.php"><img src="assets/img/1.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="gam.php"><img src="assets/img/1n.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="gam.php"><img src="assets/img/1n1.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
											<span class="property-type">For Sale</span>
										</div>

										<div class="listing-detail-wrapper pb-0">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="gam.php">Gam Opportunity</a><i class="list-status ti-check"></i></h4>
											</div>
										</div>

										<div class="price-features-wrapper">
											<div class="listing-price-fx">
												<h6 class="listing-card-info-price ">10.5 million</h6>
											</div>
											<div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bed">3 Beds</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bath">3 Bath</span>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- Single Property -->
								<div class="single-items">
									<div class="property-listing property-2">

										<div class="listing-img-wrapper">
											<div class="list-img-slide">
												<div class="click">
													<div><a href="#"><img src="assets/img/p-13.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="#"><img src="assets/img/p-14.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="#"><img src="assets/img/p-15.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
											<span class="property-type">For Sale</span>
										</div>

										<div class="listing-detail-wrapper pb-0">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="#">Office Space New York</a><i class="list-status ti-check"></i></h4>
											</div>
										</div>

										<div class="price-features-wrapper">
											<div class="listing-price-fx">
												<h6 class="listing-card-info-price ">187,895</h6>
											</div>
											<div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bed">3 Beds</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bath">2 Bath</span>
												</div>
											</div>
										</div>

									</div>
								</div>

								<!-- Single Property -->
								<div class="single-items">
									<div class="property-listing property-2">

										<div class="listing-img-wrapper">
											<div class="list-img-slide">
												<div class="click">
													<div><a href="#"><img src="assets/img/p-16.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="#"><img src="assets/img/p-17.jpg" class="img-fluid mx-auto" alt="" /></a></div>
													<div><a href="#"><img src="assets/img/p-18.jpg" class="img-fluid mx-auto" alt="" /></a></div>
												</div>
											</div>
											<span class="property-type">For Rent</span>
										</div>

										<div class="listing-detail-wrapper pb-0">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="#">Apartment to rent in Queens</a><i class="list-status ti-check"></i></h4>
											</div>
										</div>

										<div class="price-features-wrapper">
											<div class="listing-price-fx">
												<h6 class="listing-card-info-price ">9,587<span class="price-suffix">/mo</span></h6>
											</div>
											<div class="list-fx-features">
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bed">3 Beds</span>
												</div>
												<div class="listing-card-info-icon">
													<span class="inc-fleat inc-bath">2 Bath</span>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="text-center mt-4">
								<a href="listing.php" class="btn btn-theme-2">Browse More Property</a>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- ============================ Slide Property End ================================== -->

			<!-- ============================ Agent Start ================================== -->
			<section class="gray-bg">
				<div class="container">

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Our Featured Agent</h2>
								<p>Find new & featured property for you.</p>
							</div>
						</div>
					</div>

					<div class="row">

						<!-- Single Agent -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="agents-grid">

								<div class="jb-bookmark"><a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Bookmark"><i class="ti-bookmark"></i></a></div>
								<div class="agent-call"><a href="#"><i class="lni-phone-handset"></i></a></div>
								<div class="agents-grid-wrap">

									<div class="fr-grid-thumb">
										<a href="#">
											<div class="overall-rate">4.4</div>
											<img src="assets/img/user-1.jpg" class="img-fluid mx-auto" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil">
										<h5 class="fr-can-name"><a href="#">Venture propertie</a></h5>
										<span class="fr-position"><i class="lni-map-marker"></i>port harcourt</span>
										<div class="fr-can-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
									</div>

								</div>

								<div class="fr-grid-info">
									<ul>
										<li>Property<span>4</span></li>
										<li>Email<span><a href="https://codeminifier.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94f7fbf8fdfad4f3f9f5fdf8baf7fbf9">[email&#160;protected]</a></span></li>
										<!-- <li>Phone<span>91 123 456 7859</span></li> -->
									</ul>
								</div>

								<div class="fr-grid-footer">
									<a href="tel:09026190497" class="btn btn-outline-theme full-width">Call Now<i class="ti-arrow-right ml-1"></i></a>
								</div>

							</div>
						</div>

						<!-- Single Agent -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="agents-grid">

								<div class="jb-bookmark"><a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Bookmark"><i class="ti-bookmark"></i></a></div>
								<div class="agent-call"><a href="#"><i class="lni-phone-handset"></i></a></div>
								<div class="agents-grid-wrap">

									<div class="fr-grid-thumb">
										<a href="#">
											<div class="overall-rate">4.3</div>
											<img src="assets/img/user-2.jpg" class="img-fluid mx-auto" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil">
										<h5 class="fr-can-name"><a href="#">Attach apisa & company</a></h5>
										<span class="fr-position"><i class="lni-map-marker"></i>port harcourt</span>
										<div class="fr-can-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
									</div>

								</div>

								<div class="fr-grid-info">
									<ul>
										<li>Property<span>2</span></li>
										<!-- <li>Phone<span>91 123 456 7859</span></li> -->
										<li>Email<span><a href="#" class="__cf_email__" data-cfemail="074d666a6274323f47606a666e6b2964686a">[email&#160;protected]</a></span></li>
									</ul>
								</div>

								<div class="fr-grid-footer">
									<a href="tel:09026190497" class="btn btn-outline-theme full-width">Call now<i class="ti-arrow-right ml-1"></i></a>
								</div>

							</div>
						</div>

						<!-- Single Agent -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="agents-grid">

								<div class="jb-bookmark"><a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Bookmark"><i class="ti-bookmark"></i></a></div>
								<div class="agent-call"><a href="#"><i class="lni-phone-handset"></i></a></div>
								<div class="agents-grid-wrap">

									<div class="fr-grid-thumb">
										<a href="#">
											<div class="overall-rate">4.5</div>
											<img src="assets/img/user-3.jpg" class="img-fluid mx-auto" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil">
										<h5 class="fr-can-name"><a href="#">Colin H. Renda</a></h5>
										<span class="fr-position"><i class="lni-map-marker"></i>port harcourt</span>
										<div class="fr-can-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
									</div>

								</div>

								<div class="fr-grid-info">
									<ul>
										<li>Property<span>306</span></li>
										<li>Email<span><a href="#" class="__cf_email__" data-cfemail="72111d1e1b1c32151f131b1e5c111d1f">[email&#160;protected]</a></span></li>
										<!-- <li>Phone<span>91 123 456 7859</span></li> -->
									</ul>
								</div>

								<div class="fr-grid-footer">
									<a href="tel:09026190497" class="btn btn-outline-theme full-width">Call now<i class="ti-arrow-right ml-1"></i></a>
								</div>

							</div>
						</div>

					</div>

				</div>
			</section>
			<!-- ============================ Agent End ================================== -->

			<!-- ============================ Step How To Use Start ================================== -->
			<section>
				<div class="container">

					<div class="row">
						<div class="col text-center">
							<div class="sec-heading center">
								<h2>How It Works?</h2>
								<p>How to start work with us and working process</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features">
								<div class="middle-icon-features-item">
									<div class="middle-icon-large-features-box"><i class="ti-user text-danger"></i><span class="steps bg-danger">01</span></div>
									<div class="middle-icon-features-content">
										<h4>Create An Account</h4>
										<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p> -->
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features">
								<div class="middle-icon-features-item">
									<div class="middle-icon-large-features-box"><i class="ti-search text-success"></i><span class="steps bg-success">02</span></div>
									<div class="middle-icon-features-content">
										<h4>Find & Search Property</h4>
										<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p> -->
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="middle-icon-features">
								<div class="middle-icon-features-item">
									<div class="middle-icon-large-features-box"><i class="ti-location-arrow text-warning"></i><span class="steps bg-warning">03</span></div>
									<div class="middle-icon-features-content">
										<h4>Book your Property</h4>
										<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Step How To Use End ================================== -->

			<!-- ============================ Browse Place ================================== -->
			<section class="image-cover" style="background:url(assets/img/bg-1.jpg) no-repeat;" data-overlay="6">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-lg-9 col-md-10">

							<div class="sec-heading center light">
								<h2>Find Your New Home on fibiachome</h2>
								<p>Find the home you’ve been looking for on fibiachome, the top online real estate search portal.
									fibiachome is a premier online resource for finding homes for sale and rentals in the Nigeria. With millions of real estate listings, including home foreclosures and rent to own homes, fibiachome will bring the real estate market to your fingertips.</p>
								<a href="listing.php" class="btn btn-theme-2 mt-3">Browse Top Property Places</a>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Browse Place End ================================== -->

			<!-- ============================ Testimonials ================================== -->
			<section>
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-5 col-md-5">

							<div class="sec-heading">
								<h2>What People Saying?</h2>
								<p>Working together as the fibiachome Real Estate Team, we are very thankful for our loyal clients.  Our business is one of close relationships and we are very fortunate to be able to share so many positive real estate experiences with our clients.  Your satisfaction is the ultimate reward for our work and it is why we strive to be Your Real Estate Experts!</p>
								<a href="#" class="btn btn-theme-2 mt-3">Thank you</a>
							</div>

						</div>

						<div class="col-lg-7 col-md-7">
							<div class="testi-slide item-slide">

								<!-- Single Testimonial -->
								<div class="single-items">
									<div class="testimonial-wrap">

										<div class="client-thumb-box">
											<div class="client-thumb-content">
												<div class="client-thumb">
													<img src="assets/img/user-5.jpg" class="img-responsive img-circle" alt="">
												</div>
												<div class="client-info">
													<h5 class="mb-0">Adam Gillworm</h5>
													<span class="small-font">Founder Of Apple</span>
												</div>
											</div>
										</div>

										<p>The fibiachome Real Estate Team stood out as the best Louisville has to offer: their organic rankings are excellent (meaning people find listings on his site easily), their social media presence was strong, and I could tell they put a lot of work into their listings.</p>

									</div>
								</div>

								<!-- Single Testimonial -->
								<div class="single-items">
									<div class="testimonial-wrap">

										<div class="client-thumb-box">
											<div class="client-thumb-content">
												<div class="client-thumb">
													<img src="assets/img/user-1.jpg" class="img-responsive img-circle" alt="">
												</div>
												<div class="client-info">
													<h5 class="mb-0">Sweb Gillworm</h5>
													<span class="small-font">Founder Of Google</span>
												</div>
											</div>
										</div>

										<p>We were so fortunate to have found fibiachome when we moved to Port Harcourt. As our Realtor, they helped us find the right house in the right neighborhood for the right price. they were patient as we traveled from lagos to look at homes over several months and cautioned us about making unreasonable offers when we fell too quickly for overpriced homes.</p>

									</div>
								</div>

								<!-- Single Testimonial -->
								<div class="single-items">
									<div class="testimonial-wrap">

										<div class="client-thumb-box">
											<div class="client-thumb-content">
												<div class="client-thumb">
													<img src="assets/img/user-2.jpg" class="img-responsive img-circle" alt="">
												</div>
												<div class="client-info">
													<h5 class="mb-0">Rial Swittre Gillworm</h5>
													<span class="small-font">Founder Of Amazone</span>
												</div>
											</div>
										</div>

										<p>Throughout the past several months,fibiachome has been there every step of the way. They have always answered every call or email no matter what time of day or night it was. Their professionalism, mentorship, knowledge, honesty, and hard work ethic are much respected and appreciated.</p>

									</div>
								</div>

								<!-- Single Testimonial -->
								<div class="single-items">
									<div class="testimonial-wrap">

										<div class="client-thumb-box">
											<div class="client-thumb-content">
												<div class="client-thumb">
													<img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="">
												</div>
												<div class="client-info">
													<h5 class="mb-0">Adam Gillworm</h5>
													<span class="small-font">Founder Of Apple</span>
												</div>
											</div>
										</div>

										<p>I now consider fibiachome a friend and would highly recommend them to anyone that is searching for a new home. Thanks again to fibiachome and the fibiachome Real Estate Team for being such a pleasure to work with.</p>

									</div>
								</div>

								<!-- Single Testimonial -->
								<div class="single-items">
									<div class="testimonial-wrap">

										<div class="client-thumb-box">
											<div class="client-thumb-content">
												<div class="client-thumb">
													<img src="assets/img/user-4.jpg" class="img-responsive img-circle" alt="">
												</div>
												<div class="client-info">
													<h5 class="mb-0">Adam Hirasat</h5>
													<span class="small-font">Founder Of Jior</span>
												</div>
											</div>
										</div>

										<p>I had the pleasure for working with fibiachome. From start to finish they were very responsive, kind, and a constant professional. I look forward to the opportunity to work with them and the fibiachome Real Estate Team again.</p>

									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- ============================ Testimonials End ================================== -->


			<!-- ============================ Footer Start ================================== -->
@endsection