@extends('layouts.app')
@section('content')
<section id="home-section" class="hero">
	<div class="home-slider  owl-carousel">
		<div class="slider-item ">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
					<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_1.png);">
						<div class="overlay"></div>
					</div>
					<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<span class="subheading">Halo!</span>
							<h1 class="mb-4 mt-3"> Nama Saya <span>Syarif Syarifuddin</span></h1>
							<h2 class="mb-4">Web Developer</h2>
							<div class="badge bg-gradient-primary-to-secondary text-white mb-4">
								<div class="text-uppercase">PHP · Laravel · Hosting . MYSQL</div>
							</div>
							<p>
								<a href="#contact-section" class="btn btn-primary py-3 px-4">Rekrut Saya</a>
								<a href="#" class="btn btn-white btn-outline-white py-3 px-4">Pekerjaan Saya</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 col-lg-5 d-flex">
				<!-- Foto Start -->
				<div class="col-xxl-7">
					<!-- Header profile picture-->
					<div class="d-flex justify-content-center mt-5 mt-xxl-0">
						<div class="profile bg-gradient-primary-to-secondary">
							<!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
							<!-- Watch a tutorial on how to do this on YouTube (link)-->
							<img class="profile-img" src="{{asset('assets/foto/aku3.png')}}" alt="...">
							<div class="dots-1">
								<!-- SVG Dots-->
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
									<g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
										<path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
										<path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
										<path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
										<path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
										<path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
										<path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
										<path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
										<path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
										<path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
										<path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
										<path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
										<path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
										<path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
										<path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
										<path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
										<path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
										<path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
										<path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
										<path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
										<path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
									</g>
								</svg>
								<!-- END of SVG dots-->
							</div>
							<div class="dots-2">
								<!-- SVG Dots-->
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
									<g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
										<path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
										<path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
										<path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
										<path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
										<path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
										<path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
										<path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
										<path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
										<path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
										<path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
										<path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
										<path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
										<path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
										<path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
										<path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
										<path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
										<path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
										<path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
										<path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
										<path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
									</g>
								</svg>
								<!-- END of SVG dots-->
							</div>
							<div class="dots-3">
								<!-- SVG Dots-->
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
									<g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
										<path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
										<path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
										<path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
										<path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
										<path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
										<path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
										<path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
										<path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
										<path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
										<path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
										<path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
										<path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
										<path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
										<path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
										<path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
										<path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
										<path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
										<path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
										<path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
										<path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
									</g>
								</svg>
								<!-- END of SVG dots-->
							</div>
							<div class="dots-4">
								<!-- SVG Dots-->
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
									<g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
										<path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
										<path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
										<path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
										<path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
										<path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
										<path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
										<path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
										<path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
										<path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
										<path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
										<path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
										<path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
										<path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
										<path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
										<path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
										<path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
										<path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
										<path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
										<path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
										<path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
									</g>
								</svg>
								<!-- END of SVG dots-->
							</div>
						</div>
					</div>
				</div>
				<!-- Foto End -->
			</div>
			<div class="col-md-6 col-lg-7 pl-lg-5">
				<div class="row justify-content-start">
					<div class="col-md-12 heading-section ftco-animate">
						<h1 class="big">Tentang</h1>
						<h2 class="mb-4">Tentang Saya</h2>
						<p></p>
						<ul class="about-info px-md-0 px-2">
							<li class="d-flex"><span>Nama:</span> <span>{{$tentang->nama}}</span></li>
							<li class="d-flex"><span>Umur:</span> <span>{{$tentang->umur}}</span></li>
							<li class="d-flex"><span>Alamat:</span> <span>{{$tentang->alamat}}</span></li>
							<li class="d-flex"><span>Email:</span> <span>{{$tentang->email}}</span></li>
							<li class="d-flex"><span>Status:</span> <span>{{$tentang->status}}</span></li>
							<li class="d-flex"><span>Deskripsi:</span> <span>{{$tentang->deskripsi}}</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb" id="resume-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<h1 class="big big-2">Pendidikan</h1>
				<h2 class="mb-4">Pendidikan</h2>
			</div>
		</div>
		<div class="row">
			@foreach($pendidikan as $pend)
			<div class="col-md-3 mb-3">
				<div class="card">
					@if($pend->nama=="Universitas Teknologi Yogyakarta")
					<div class="text-center">
						<img class="card-img-top justify-content-center" src="{{asset('assets/foto/uty.png')}}" alt="Card image cap">
					</div>
					@elseif($pend->nama=="SMK Negeri 3 Metro")
					<div class="text-center">
						<img class="card-img-top justify-content-center" src="{{asset('assets/foto/smk3.png')}}" style="height: 57px; width:253px" alt="Card image cap">
					</div>
					@endif
					<small class="text-muted d-flex justify-content-center">{{$pend->tahun}}</small>
					<div class="card-body">
						<h5 class="card-title">{{$pend->nama}}</h5>
						<p class="card-text">{{$pend->jurusan}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-md-6 text-center ftco-animate">
				<p><a href="{{asset('storage/public/'.$tentang->cv)}}" class="btn btn-primary py-4 px-5" target="_blank">Download CV</a></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section" id="skills-section">
	<div class="container">
		<div class="row justify-content-center pb-2">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Keahlian</h1>
				<h2 class="mb-4">Keahlian</h2>
			</div>
		</div>

		<div class="row col-lg-4">
			@foreach($keahlian as $skill)
			<div class="card ">
				<div class="text-center">
					<img class="card-img-top justify-content-center" src="{{asset('assets/foto/webdev.png')}}" alt="Keahlian">
				</div>
				<div class="card-body">
					<h5 class="card-title">{{$skill->nama}}</h5>
					<p class="card-text">{{$skill->deskripsi}}</p>
				</div>
				<div class="card-footer">
					<a class="btn btn-success">PHP | Laravel | MYSQL</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-project" id="projects-section">
	<div class="container">
		<div class="row justify-content-center pb-2">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Proyek</h1>
				<h2 class="mb-4">Proyek</h2>
			</div>
		</div>
		<div class="row ">
			@foreach($proyek as $project)
			<div class="col-md-4 d-flex ftco-animate">
				<div class="card">
					<img class="card-img-top" src="{{asset('storage/public/'.$project->foto)}}" alt="Card image cap">
					<small class="text-muted text-center">{{$project->jenis}} </small>
					<div class="card-body">
						<h5 class="card-title">{{$project->nama}}</h5>
						<p class="card-text">{!!$project->deskripsi!!}</p>
					</div>
					<div class="card-footer text-center">
						<a href="{{$project->web}}" class="btn btn-success text-center" target="_blank">Lihat</a> <a href="{{$project->github}}" class="btn btn-primary text-center" target="_blank">Github</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<section class="ftco-section" id="blog-section">
	<div class="container">
		<div class="row justify-content-center mb-2">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h1 class="big big-2">Blog</h1>
				<h2 class="mb-4">Blog</h2>
			</div>
		</div>

		<div class="row">
			@forelse($blog as $post)
			<div class="col-md-4 d-flex ftco-animate">
				<div class="card">
					<img class="card-img-top" src="{{asset('storage/public/'.$post->foto)}}" alt="Card image cap">
					<small class="text-muted">{{$post->updated_at}} </small>
					<div class="card-body">
						<h5 class="card-title">{{$post->judul}}</h5>
						<p class="card-text">{{$post->kutipan}}</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-success">Selengkapnya</a>
					</div>
				</div>
				@empty
				<div class="justify-content-center ftco-animate typewriter">
					<h2 class="mb-4 justify-content-center">Belum Ada Postingan...</h2>
				</div>
				@endforelse
			</div>
		</div>
</section>

<section class="ftco-section" id="jasa">
	<div class="container">
		<div class="row justify-content-center py-5 mt-2">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Jasa Webdev</h1>
				<h2 class="mb-4">Jasa</h2>
				<p>Melayani Jasa Pembuatan Website Skripsi SI/TI & Company Profile</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-web-design"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Website Skripsi SI/TI</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="flaticon-web-design"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Website Company Profile</h3>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
	<div class="container">
		<div class="row d-md-flex align-items-center">
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 col-lg-4">
					<div class="text">
						<strong class="number" data-number="{!!$pc!!}">0</strong>
						<span>Proyek Diselesaikan</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 ftco-animate text-center">
				<h2>Saya Siap Bekerja Full Time/Part Time Sebagai Web Developer</h2>
				<p class="mb-0"><a href="#contact-section" class="btn btn-primary py-3 px-5">Rekrut Saya</a></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
	<div class="container">
		<div class="row justify-content-center mb-2 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h1 class="big big-2">Kontak</h1>
				<h2 class="mb-4">Kontak Saya</h2>
			</div>
		</div>

		<div class="row d-flex contact-info mb-5">
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-map-signs"></span>
					</div>
					<h3 class="mb-4">Alamat</h3>
					<p>{{$tentang->alamat}}</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-phone2"></span>
					</div>
					<h3 class="mb-4">Kontak</h3>
					<p><a href="tel:">{{$tentang->no_hp}}</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-paper-plane"></span>
					</div>
					<h3 class="mb-4">Email:</h3>
					<p><a href="mailto:syarifsoden22@gmail.com">{{$tentang->email}}</a></p>
					<p><a href="mailto:info@syarifsoden.my.id">{{$tentang->email1}}</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-globe"></span>
					</div>
					<h3 class="mb-4">Website</h3>
					<p><a href="#">syarifsoden.my.id</a></p>
				</div>
			</div>
		</div>

		<div class="row no-gutters block-9 email-section" id="email-section">
			<div class="col-md-6 order-md-last d-flex">
				<form action="{{route('kirim-pesan')}}" method="post" class="bg-ctf p-4 p-md-5 contact-form">
					@if(Session::has('success'))
					<div class="alert alert-success">
						{{ Session::get('success') }}
					</div>
					@endif
					@csrf
					@method("POST")
					<div class="form-group">
						<input name="nama" type="text" class="form-control" placeholder="Nama Anda">
					</div>
					<div class="form-group">
						<input name="email" type="text" class="form-control" placeholder="Email Anda">
					</div>
					<div class="form-group">
						<input name="subjek" type="text" class="form-control" placeholder="Subjek">
					</div>
					<div class="form-group">
						<textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
					</div>
				</form>

			</div>

			<div class="col-md-6 d-flex">
				<div class="img" style="background-image: url(images/about.jpg);"></div>
			</div>
		</div>
	</div>
</section>
@endsection