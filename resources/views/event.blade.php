@extends('componenet.master')
@section('content') 
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sample Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Sample Inner Page</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->
 
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
            <h2>Events</h2>
            <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
                <h3>Custom Parties</h3>
                <div class="price align-self-start">$99</div>
                <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
                </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
                <h3>Private Parties</h3>
                <div class="price align-self-start">$289</div>
                <p class="description">
                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
                </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
                <h3>Birthday Parties</h3>
                <div class="price align-self-start">$499</div>
                <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
                </p>
            </div><!-- End Event item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>
    </section><!-- End Events Section -->
    
    <section class="sample-page">
        <div class="container" data-aos="fade-up">

            <p>
            You can duplicate this sample page and create any number of inner pages you like!
            </p>

        </div>
    </section>
</main><!-- End #main -->


@endsection