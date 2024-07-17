@extends('layouts.index')
@section('content')

    <!-- Start Section about Us -->
     <div class="content">
    
          
    <section class="about_us">
        <div class="ab">
            <div class="container">
                <h5>who are we</h5>
                <div class="con_who_we ">
                    <div class="container">
                        <p class="lead"> 
                        A sales center for the latest mobile and computer devices</p>
                        <p class="lead"> Authorized sales center for Turkcell, Turk Telekom, and Vodafone lines</p>
                        <p class="lead">Advanced maintenance lab (hardware - software) with a special section for computer repairs</p>
                        <p class="lead">The latest collection of unique accessories for mobile phones and computers. Original chargers and batteries with warranties.
                         </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section about Us -->


    <!-- Start Section Featuers -->
    <section class="Featuers">
        <div class="container text-center">
            <h1>Featuers</h1>
            <hr>
            <div class="row d1">

                <div class="col-sm-4">

                    <div class="feat wow slideInLeft ">
                        <i class="fa fa-usd fa-2x" aria-hidden="true"></i>
                        <h4>Competitive prices</h4>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="feat wow slideInUp  ">
                        <i class="fa fa-safari fa-2x" aria-hidden="true"></i>
                        <h4>Fast service </h4>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="feat wow slideInRight ">
                        <i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
                        <h4>Quick response</h4>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Section Featuers -->

    <section class="who_we text-center">
        <!-- <div class="con_who_we ">
            <div class="container">
                <p class="lead"> مركز بيع لأحدث اجهزة الموبايل والكمبيوتر</p>
                <p class="lead"> turkcell-turktelekom-vodafone مركز بيع معتمد لخطوط </p>
                <p class="lead">مخبر صيانة متطور (هارد وير - سوفت وير) قسم خاص لصيانة أجهزة الكمبيوتر</p>
                <p class="lead">أحدث تشكيلة أكسوارات مميزه للموبايل والكومبيوتر شواحن وبطاريات اصلية بكفالات حقيقية </p>
            </div>
        </div> -->
    </section>
 </div>
@endsection

@push('styles')
  
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="css/animate.css">
@endpush
@push('scripts')
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
@endpush