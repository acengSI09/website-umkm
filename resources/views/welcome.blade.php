<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>UMKM AFI</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('assets/images/fevicon.png')}}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="{{asset('assets/images/M.png')}}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#umkm">UMKM</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#pembina">Pembina</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#kontak">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="{{ route('login') }}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                        </ul>
                     </div>
                  </form>
                  <form class="form-inline my-2 my-lg-0">
                    <div class="login_bt">
                       <ul>
                          <li><a href="{{ route('register') }}"><span class="user_icon"><i class="fa fa-users" aria-hidden="true"></i></span>Register</a></li>
                       </ul>
                    </div>
                 </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">UMKM <br>AFI</h1>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">UMKM <br>AFI</h1>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">UMKM <br>AFI</h1>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>

      
      <!-- header section end -->
      <!-- about section start -->
      <div id="about" class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6"> 
                    <div class="about_taital_box">
                        <h1 class="about_taital" href="#">About Our UMKM</h1>
                        <h1 class="about_taital_1"></h1>
                        <p class="about_text">UMKM (Usaha Mikro, Kecil, dan Menengah) adalah tulang punggung perekonomian di banyak negara, termasuk Indonesia. UMKM mencakup berbagai jenis usaha mulai dari usaha mikro dengan jumlah pekerja yang sedikit hingga usaha menengah yang memiliki skala operasional lebih besar namun tetap di bawah perusahaan besar.</p>
                        <div class="readmore_btn"><a href="#">Read More</a></div>
                    </div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="image_iman"><img src="{{asset('assets/images/about-img.png')}}" class="about_img"></div>
                  </div>
               </div>
            </div>
         </div>
        </div>
      <!-- about section end -->
      <!-- coffee section start -->
      <div id="umkm" class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="coffee_taital">UMKM PHOTO LIST</h1>
               </div>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{asset('assets/images/dimsum.jpg   ')}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">DIMSUM PERTAMA</h3>
                                 <p class="looking_text">Depok</p>
                                 <p class="looking_text">Mas Sekop</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{asset('assets/images/pentol.jpg')}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">PENTOL HOT POLL</h3>
                                 <p class="looking_text">Bogor</p>
                                 <p class="looking_text">Marija</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{asset('assets/images/baso.jpg')}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">BASKO MAS PARDI</h3>
                                 <p class="looking_text">Depok</p>
                                 <p class="looking_text">Mas Pardi</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{asset('assets/images/siomay.jpg')}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">SIOMAY GACOR</h3>
                                 <p class="looking_text">Jakarta</p>
                                 <p class="looking_text">Bang Ijal</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{asset('assets/images/dimsum.jpg   ')}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">DIMSUM PERTAMA</h3>
                                 <p class="looking_text">Depok</p>
                                 <p class="looking_text">Mas Sekop</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{asset('assets/images/pentol.jpg')}}"></div>
                            <div class="coffee_box">
                               <h3 class="types_text">PENTOL HOT POLL</h3>
                               <p class="looking_text">Bogor</p>
                               <p class="looking_text">Marija</p>
                               <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{asset('assets/images/baso.jpg')}}"></div>
                            <div class="coffee_box">
                               <h3 class="types_text">BASKO MAS PARDI</h3>
                               <p class="looking_text">Depok</p>
                               <p class="looking_text">Mas Pardi</p>
                               <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <div class="coffee_img"><img src="{{asset('assets/images/siomay.jpg')}}"></div>
                            <div class="coffee_box">
                               <h3 class="types_text">SIOMAY GACOR</h3>
                               <p class="looking_text">Jakarta</p>
                               <p class="looking_text">Bang Ijal</p>
                               <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                         </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{asset('assets/images/dimsum.jpg   ')}}"></div>
                                <div class="coffee_box">
                                   <h3 class="types_text">DIMSUM PERTAMA</h3>
                                   <p class="looking_text">Depok</p>
                                   <p class="looking_text">Mas Sekop</p>
                                   <div class="read_bt"><a href="#">Read More</a></div>
                                </div>
                             </div>
                             <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{asset('assets/images/pentol.jpg')}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">PENTOL HOT POLL</h3>
                                 <p class="looking_text">Bogor</p>
                                 <p class="looking_text">Marija</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{asset('assets/images/baso.jpg')}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">BASKO MAS PARDI</h3>
                                 <p class="looking_text">Depok</p>
                                 <p class="looking_text">Mas Pardi</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{asset('assets/images/siomay.jpg')}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">SIOMAY GACOR</h3>
                                 <p class="looking_text">Jakarta</p>
                                 <p class="looking_text">Bang Ijal</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- coffee section end -->
      <!-- client section start -->
      <div id="pembina" class="client_section layout_padding">
         <div class="container">
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">PEMBINA UMKM</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{asset('assets/images/client-img1.png')}}"></div>
                           </div>
                           <div class="client_right">
                              <h2 class="moark_text">Pak Ijo Scarlet</h2>
                              <h3 class="client_text">Tasik</h3>
                              <br>
                                 <p class="client_text">Sebagai Spesialis Makanan Ringan</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">PEMBINA UMKM</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{asset('assets/images/client-img2.png')}}"></div>
                           </div>
                           <div class="client_right">
                              <h2 class="moark_text">Ramos Sleding</h2>
                              <h3 class="client_text">Bojong Gede</h3>
                              <br>
                              <p class="client_text">Menejemen Waktu</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                       <div class="col-md-12">
                          <h1 class="about_taital">PEMBINA UMKM</h1>
                       </div>
                    </div>
                    <div class="client_section_2">
                       <div class="client_taital_main">
                          <div class="client_left">
                             <div class="client_img"><img src="{{asset('assets/images/client-img3.png')}}"></div>
                          </div>
                          <div class="client_right">
                             <h2 class="moark_text">Mika Resso</h2>
                             <h3 class="client_text">Jakarta Barat</h3>
                             <br>
                             <p class="client_text">Public Speaking</p>
                          </div>
                       </div>
                    </div>
                 </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">PEMBINA UMKM</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{asset('assets/images/client-img3.png')}}"></div>
                           </div>
                           <div class="client_right">
                              <h2 class="moark_text">Bika Curry</h2>
                              <h2 class="client_text">Ciledug</h2>
                              <br>
                              <p class="client_text">Masak</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div id="kontak" class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Get In Touch</h1>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">Send</a></div>
                     </div>
                  </div>
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a>
                     Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/popper.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('assets/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('assets/js/custom.js')}}"></script>
   </body>
</html>