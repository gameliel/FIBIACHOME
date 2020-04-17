@extends('layouts.main')

@section('content')

		<!-- End Navigation -->
        <div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

			<!-- ============================ Hero Banner  Start================================== -->

			<!-- ============================ Hero Banner End ================================== -->
			<div class="search-header-banner">
				<div class="container">
					
			<!-- =========================== All Property =============================== -->
			<section>

				<div class="container">

					<!-- <div class="row">
						<div class="col-md-12 col-sm-12">
							<h4>Total Property Find is: <span class="theme-cl">207</span></h4>
						</div>
					</div> -->

					<div class="row">
					@foreach($submits as $submit)
						<div class="col-lg-4 col-md-6">
							<div class="property_item classical-list">
                            
								<div class="image">
									<a href="twin_est.php">
										<img src="{{ $submit->gallery}}" alt="latest property" style="height: 278px;" class="img-fluid">
									</a>
									<div class="sb-date">
										<span class="tag"><i></i>APPROVED</span>
									</div>
									<span class="tag_t">{{$submit->status}}</span>
								</div>
								<div class="proerty_content">
									<div class="proerty_text">
									  <h3 class="captlize"><a href="#">{{$submit->title}}</a></h3>
									  <p class="proerty_price">{{$submit->price}}</p>
									</div>
									<p class="property_add">{{ $submit->address}}</p>
									<div class="property_meta">
									  <div class="list-fx-features">
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bed">{{ $submit->bedroom }}</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-type">{{$submit->type}}</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-area">{{$submit->area}}</span>
											</div>
											<div class="listing-card-info-icon">
												<span class="inc-fleat inc-bath">{{$submit->bathroom}}</span>
											</div>
										</div>
									</div>
                            
									<div class="property_links">
										<a href="tel:09026190497" class="btn btn-theme" data-tracked-action="call-us">Call Now</a>
										<a href="mailto:info@fibiac.com" data-tracked-action="mail-us" class="btn btn-theme-light">Mail now</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
                        </div>
			</div>
			{{ $submits->links() }}
	</div>
	</div>

</section>
<!-- =========================== All Property =============================== -->

<!-- ============================ Footer Start ================================== -->
@endsection