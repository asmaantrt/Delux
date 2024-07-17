@extends('layouts.index')
@section('content')

 <!-- Start slider -->
 <div class="slider">

  <div id="main-slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
           <!-- <h1> We are an agency <br>selling<span> fabrics</span> of <br>all kinds</h1> -->
          <div class="overlay"></div>
          <div class="carousel-item carousel-one active"> </div>
          <div class="carousel-item carousel-two"> </div>
          <div class="carousel-item carousel-three"> </div>
      </div>

  </div>

</div>

 <!-- End Caroysel -->
  <!-- Start Section About -->
  <section class="About text-center">
    <!-- لمسك كامل المحتوى و منعه من اخذ كامل الشاشة -->
    <div class="container">
      <!-- <h1><span>DELUX</span>ديلوكس تكنلوني تسوق وبيع بالتجزئة</h1> -->
      <h1>Delux Technology Shopping & Retail<span>.Tr</span></h1>

      <p class="lead">Welcome to our company <strong> Delux </strong>
        We offer you the best service at the best price</p>
    </div>
  </section>



  <!-- Start Section Testimonials  اراء العملاء-->
  <section class="Testimonials text-center">
    <div class="container">
      <h2 class="h1">What Our Customers say ? </h2>
      <!-- Start Testimonials Caroysel -->
      <div id="carousel_testimonials" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <p class="lead">"Excellent maintenance service and quick work"</p>
            <span>Ahmat Ahmat</span>

            <!-- اخفاء من الشاشة الxs -->
          </div>
          <div class="carousel-item">

            <p class="lead">"Excellent offers and very good service. Excellent staff and very high-level treatment. Best wishes for success and progress, God willing."</p>
            <span>Farag Amaar</span>
          </div>
          <div class="carousel-item">

            <p class="lead">"Outstanding service and excellent prices"</p>
            <span>Muhles Mahmud</span>
          </div>

        </div>
        <ol class="carousel-indicators">
          <li data-target="#carousel_testimonials" data-slide-to="0" class="active">
            <img src="image/costomers/p1.jpg" />
          </li>

          <li data-target="#carousel_testimonials" data-slide-to="1">
            <img src="image/costomers/p4.jpg" />
          </li>

          <li data-target="#carousel_testimonials" data-slide-to="2">
            <img src="image/costomers/p3.jpg" />
          </li>
        </ol>
      </div>
      <!--End carousel Testimonials  -->
    </div>
  </section>

  <!--End Section Testimonials  -->
  <!-- Start Sction Our Clients -->

  <section class="our-clients">
    <div class="container">

      <ul class="list-unstyled">
        <div class="row">
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_5315_-_Apple_1314162.png" alt="Apple">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_acer_294702.png" alt="acer">
          </li>
          <li class="col-lg-1  col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_asus_294699.png" alt="asus">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_hp_294682.png" alt="hp">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/صورة2.png" alt="WSJ">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_lg_294672.png" alt="lg">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_samsung_4691268.png" alt="samsung">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_lenovo_294673.png" alt="lenovo">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_dell_4691411.png" alt="dell">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_sony_294644.png" alt="sony">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_htc_294681.png" alt="htc">
          </li>
          <li class="col-lg-1 col-md-2 col-sm-3">
            <img class="img-fluid d-block mx-auto" src="image/clines/iconfinder_huawei_4691391.png" alt="huawei">
          </li>
        </div>
      </ul>

      <!-- <ul class="list-unstyled">
        <div class="row">
            <li class="col-md-6 col-xs-4">
                <img class="img-fluid d-block mx-auto" src="image/clines/clines_processor/iconfinder_intel_294676.png" alt="Apple">
            </li>
            <li class="col-md-6 col-xs-4">
                <img class="img-fluid d-block mx-auto" src="image/clines/clines_processor/iconfinder_15_Amd_logo_logos_4373296.png" alt="Apple">
            </li>           
        </div>
    </ul> -->
    </div>
  </section>
  <!-- End Sction Our Clients -->

  @endsection