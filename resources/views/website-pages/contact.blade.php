<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ديلوكس تكنولوجي / Delux Teknoloji </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/media.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/defalut_Theme.css" type="text/css" />
    <link rel="stylesheet" href="css/hover.css" media="all" />
    <link rel="stylesheet" href="{{asset('css/contact_style.css')}}"  />
   

    <!-- هذا الرابط خاص بمكتبة خطوط جوجل -->

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
   <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <!--[endif]-->
    @stack('styles')  <!-- Place for styles -->
</head>

<body>
    <!-- Navbar -->
    <div class="main">
        @include('layouts.navbar')
    </div>

<section class="section-bg" style="background-image: url(image/background.png);"  data-scroll-index="7">
          <div class="overlay pt-100 pb-100 ">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="contact-info">

                            <h2 class="contact-title">Have Any Questions?</h2>
                            <p>Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. The lorem ipsum text is usually a section of a Latin text by Cicero with words altered, added and removed to make it nonsensical.</p>
                            <div class="cot">
                            <ul class="contact-info">
                                <li>
                                  <div class="info-left">
                                  <i class="bi bi-phone"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>+11223344550</h4>
                                  </div>
                                </li>
                                <li>
                                <div class="info-left">
                                <i class="bi bi-send-check"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>info@example.com</h4>
                                  </div>
                                </li>
                                <li>
                                  <div class="info-left">
                                  <i class="bi bi-geo-alt"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>yeditape/Gaziantep</h4>
                                  </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                            <div class="contact-form">
                                        <!--Contact Form-->
                                        <form id='contact-form' method='POST'><input type='hidden' name='form-name' value='contactForm' />
                                            <div class="row">
                                               <div class="col-md-12">
                                                  <div class="form-group">
                                                     <input type="text" name="name" class="form-control" id="first-name" placeholder="Enter Your Name *" required="required">
                                                  </div>
                                               </div>
                                               <div class="col-md-12">
                                                  <div class="form-group">
                                                     <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email *" required="required">
                                                  </div>
                                               </div>

                                               <div class="col-md-12">
                                                  <div class="form-group">
                                                       <textarea rows="4" name="message" class="form-control" id="description" placeholder="Enter Your Message *" required="required"></textarea>
                                                  </div>
                                               </div>
                                                <div class="col-md-12">
                                                    <!--contact button-->
                                                    <button  class="btn-big btn btn-bg">
                                                        Send Us <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                    </div>
               </div>
           </div>
              </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
  

    @stack('scripts')  <!-- Place for scripts -->
</body>

</html>

   
