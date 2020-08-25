@include('header')
	  
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php  echo url('/') ?>/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Property Details</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

@foreach ($details as $detail)
<section class="ftco-section ftco-services-2">
<div class="container">
<div class="row">
<div class="col-md-12 property-wrap mb-5">
<div class="row">
<div class="col-md-6 d-flex ftco-animate">
<div class="img align-self-stretch" style="background-image: url(<?php  echo url('/') ?>/images/work-6.jpg);"></div>
</div>
<div class="col-md-6 ftco-animate py-5">
<div class="text py-5 pl-md-5">
<div class="d-flex">
<div>
<h3><a href="properties-single.html">{{ $detail->name }}</a></h3>
</div>
<div class="pl-md-4">
<h4 class="price">{{ $detail->price }}</h4>
</div>
</div>
<p>{{ $detail->others }}</p>
</div>
</div>
</div>
</div>
<div class="col-md-12 tour-wrap">
<table class="table">
<tbody>
<tr>
<th scope="row">Lot area</th>
<td>
<p>{{ $detail->lotarea }}</p>
</td>
<td></td>
</tr><!-- END TR-->

<tr>
<th scope="row">Floor Area</th>
<td>
<p>{{ $detail->floorarea }}</p>
</td>
<td></td>
</tr><!-- END TR-->

<tr>
<th scope="row">Bedroom</th>
<td>
<p>{{ $detail->bedroom }}</p>
</td>
<td></td>
</tr><!-- END TR-->

<tr>
<th scope="row">Bathroom</th>
<td>
<p>{{ $detail->bathroom }}</p>
</td>
<td></td>
</tr><!-- END TR-->

<tr>
<th scope="row">Garage</th>
<td>
<p>{{ $detail->garage }}</p>
</td>
<td></td>
</tr><!-- END TR-->

<tr>
<th scope="row">Maps</th>
<td>
<div id="map"></div>
</td>
</tr><!-- END TR-->

<tr>
<th scope="row">Take A Tour</th>
<td>
<!-- <div id="map"></div> -->
<div class="block-16">
<figure>
<div class="img" style="background-image: url(<?php  echo url('/') ?>/images/work-5.jpg);"></div>
<a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
</figure>
</div>
</td>
</tr><!-- END TR-->
</tbody>
</table>
</div>

@endforeach


  @include('footer')