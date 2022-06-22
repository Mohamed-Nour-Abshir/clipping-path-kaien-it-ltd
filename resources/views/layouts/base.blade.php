<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaizen It Ltd</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/kaizen-01.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle&family=Nunito:wght@200;300;400;500;700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <!---Light box-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body>
    <!--Main Navigation-->
    <header>
      <!-- nvabar for mobiles  -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
          <a href="/"><img src="{{asset('assets/images/kaizen-logo.png')}}" alt="logo" style="text-align: center; height: 50px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-align-justify"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-1 {{ request()->is('*/*') ? 'active' : '' }}">
                  <a href="/" class="nav-link"><i class="fa-solid fa-house-chimney fa-fw"></i> Home</a>
              </li>
              <li class="nav-item py-1">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Our Services </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li class="dropdown-item">
                        <a href="/clipping-path-service"><i class="fas fa-pen-nib text-primary"></i> Clipping Path Service</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/color-correction-service"><i class="fa-solid fa-paintbrush"></i> Color Correction Service</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/ecommerce-photo-editing-service"><i class="fa-solid fa-store"></i> Ecommerce Photo Editing</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/photo-routching-service"><i class="fa-solid fa-photo-film"></i> Photo Retouching Service</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/image-masking-service"><i class="fa-solid fa-file-image"></i> Image Masking Service</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/banner-design-service"><i class="fa-solid fa-panorama"></i> Banner Design</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/background-removal-service"><i class="fa-solid fa-images"></i> Background Removal Service</a>
                    </li>
                </ul>
                </div>
              </li>
              <li class="nav-item py-1 {{ request()->is('*prtofolio*') ? 'active' : '' }}">
                <a href="/prtofolio" class="nav-link"><i class="fa-brands fa-servicestack"></i> Portofolio</a>
              </li>
              <li class="nav-item py-1">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bag-shopping"></i> Buy Our Services </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li class="dropdown-item">
                        <a href="/photo-editing-service"><i class="fa-solid fa-photo-film text-primary"></i> Photo Editing</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/grphic-design-service"><i class="fa-solid fa-gauge text-primary"></i> Graphics Design</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="/degital-marketing"> <i class="fa-solid fa-bullhorn text-primary"></i> Digital Marketing</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#"><i class="fa-solid fa-video text-primary"></i> Video Editing</a>
                    </li>
                </ul>
                </div>
              </li>
              <li class="nav-item py-1 {{ request()->is('*news*') ? 'active' : '' }}">
                <a href="/news" class="nav-link"><i class="fa-solid fa-blog"></i> News</a>
              </li>
              <li class="nav-item py-1 {{ request()->is('*pricing*') ? 'active' : '' }}">
                <a href="/pricing" class="nav-link"><i class="fa-solid fa-tag"></i> Pricing</a>
              </li>
              <li class="nav-item py-1 {{ request()->is('*about*') ? 'active' : '' }}">
                <a href="/about" class="nav-link"><i class="fa-solid fa-address-card"></i> About</a>
              </li>
              <li class="nav-item py-1 {{ request()->is('*contact*') ? 'active' : '' }}">
                <a href="/contact" class="nav-link"><i class="fa-solid fa-phone"></i> Contact</a>
              </li>

                @if (Route::has('login'))
                  @auth
                    @if (Auth::user()->usertype === '1')
                        <li class="nav-item py-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="{{route('admin.dashboard')}}" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                My Account
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Logout</a>
                                    </li>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>
                    @else
                        <li class="list-group-item py-1">
                            <div class="dropdown">
                                <a class=" dropdown-toggle" href="" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                My Account
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{route('profile.show')}}"> <i class="fas fa-user fa-sm fa-fw mr-2"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Logout</a>
                                    </li>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>
                    @endif
                    @else
                        <li class="nav-item py-1">
                            <a href="/login" class="nav-link"><i class="fa-solid fa-user"></i> Login/Register</a>
                        </li>
                    @endif
             @endif
            </ul>
          </div>
        </div>
      </nav>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
            <a href="/"><img src="{{asset('assets/images/kaizen-logo.png')}}" alt="logo" style="text-align: center; width: 100%; height:180px;"></a>
            <div class="position-sticky" style="width: 280px; margin-left:-30px; text-align:center;">
              <div class="list-group list-group-flush mx-3 ">
                <ul id="collapseExample1" class="collapse show list-group list-group-flush menu-active">
                  <li class="list-group-item py-1 {{ request()->is('*/*') ? 'active' : '' }}">
                    <a href="/" class=""><i class="fa-solid fa-house-chimney fa-fw me-3 text-center text-primary"></i></a>
                  </li>
                  <li class="list-group-item py-1">
                    <a href="#" class="">Our Services</a>
                    <ul class="service-ul">
                        <li class="service-li">
                            <a href="/clipping-path-service"><i class="fas fa-pen-nib text-primary"></i> Clipping Path Service</a>
                        </li>
                        <li class="service-li">
                            <a href="/color-correction-service"><i class="fa-solid fa-paintbrush"></i> Color Correction Service</a>
                        </li>
                        <li class="service-li">
                            <a href="/ecommerce-photo-editing-service"><i class="fa-solid fa-store"></i> Ecommerce Photo Editing</a>
                        </li>
                        <li class="service-li">
                            <a href="/photo-routching-service"><i class="fa-solid fa-photo-film"></i> Photo Retouching Service</a>
                        </li>
                        <li class="service-li">
                            <a href="/image-masking-service"><i class="fa-solid fa-file-image"></i> Image Masking Service</a>
                        </li>
                        <li class="service-li">
                            <a href="/banner-design-service"><i class="fa-solid fa-panorama"></i> Banner Design</a>
                        </li>
                        <li>
                            <a href="/background-removal-service"><i class="fa-solid fa-images"></i> Background Removal Service</a>
                        </li>
                    </ul>
                  </li>
                  <li class="list-group-item py-1 {{ request()->is('*prtofolio*') ? 'active' : '' }}">
                    <a href="/prtofolio" class=""><i class="fa-brands fa-servicestack"></i> Portofolio</a>
                  </li>
                  <li class="list-group-item py-1">
                    <a href="#" class=""><i class="fa-solid fa-bag-shopping"></i> Buy Our Services</a>
                    <ul class="buy-our-services-ul">
                        <li class="buy-our-services-li">
                            <a href="/photo-editing-service"><i class="fa-solid fa-photo-film text-primary"></i> Photo Editing</a>
                        </li>
                        <li class="buy-our-services-li">
                            <a href="/grphic-design-service"><i class="fa-solid fa-gauge text-primary"></i> Graphics Design</a>
                        </li>
                        <li class="buy-our-services-li">
                            <a href="/degital-marketing"> <i class="fa-solid fa-bullhorn text-primary"></i> Digital Marketing</a>
                        </li>
                        <li class="buy-our-services-li">
                            <a href="#"><i class="fa-solid fa-video text-primary"></i> Video Editing</a>
                        </li>

                    </ul>
                  </li>

                  <li class="list-group-item py-1 {{ request()->is('*news*') ? 'active' : '' }}">
                    <a href="/news" class=""><i class="fa-solid fa-blog"></i> News</a>
                  </li>
                  <li class="list-group-item py-1 {{ request()->is('*pricing*') ? 'active' : '' }}">
                    <a href="/pricing" class=""><i class="fa-solid fa-tag"></i> Pricing</a>
                  </li>
                  <li class="list-group-item py-1 {{ request()->is('*about*') ? 'active' : '' }}">
                    <a href="/about" class=""><i class="fa-solid fa-address-card"></i> About</a>
                  </li>
                  <li class="list-group-item py-1 {{ request()->is('*contact*') ? 'active' : '' }}">
                    <a href="/contact" class=""><i class="fa-solid fa-phone"></i> Contact</a>
                  </li>

                  @if (Route::has('login'))
                      @auth
                        @if (Auth::user()->usertype === '1')
                            <li class="list-group-item py-1">
                                <div class="">
                                    <a class="" href="{{route('admin.dashboard')}}" role="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                    My Account <i class="fa-solid fa-chevron-down" style="margin-left: 5px;"></i>
                                    </a>
                                </div>
                                    <ul class="collapse collapse-horizontal admin-ul" id="collapseWidthExample" style="list-style: none">
                                        <li class="admin-li">
                                            <a class="" href="{{route('admin.dashboard')}}"> <i class="fa-solid fa-gauge fa-sm fa-fw mr-2"></i> Dashboard</a>
                                        </li>
                                        <li class="admin-li">
                                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Logout</a>
                                        </li>
                                        <form id="logout-form" action="{{route('logout')}}" method="POST">
                                            @csrf
                                        </form>
                                    </ul>
                            </li>
                        @else
                            <li class="list-group-item py-1">
                                <div class="">
                                    <a class="" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                    My Account <i class="fa-solid fa-chevron-down" style="margin-left: 5px;"></i>
                                    </a>
                                 </div>
                                    <ul class="collapse collapse-horizontal" id="collapseWidthExample" style="list-style: none">
                                        <li>
                                            <a class="" href="{{route('profile.show')}}"> <i class="fas fa-user fa-sm fa-fw mr-2"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Logout</a>
                                        </li>
                                        <form id="logout-form" action="{{route('logout')}}" method="POST">
                                            @csrf
                                        </form>
                                    </ul>
                            </li>
                        @endif
                          @else
                            <li class="list-group-item py-1 {{ request()->is('*login*') ? 'active' : '' }}">
                                <a href="/login" class=""><i class="fa-solid fa-user"></i> Login/Register</a>
                            </li>
                           @endif
                  @endif
                </ul>
              </div>

            </div>
          </div>
        </nav>
        <!-- Sidebar -->
      </header>
      <!--Main Navigation-->

      <!-- Mainlayout -->
      <main>

      {{$slot}}

   <footer>
       <!-- featured image  -->
      <section id="footer">
        <div class="featured-image text-center">
          <p class="featured-image-p">We are featured on:</p>
          <img src="{{asset('assets/images/services/Featured-logo.webp')}}" alt="" class="featured-img">
        </div>
      </section>

      <!-- End featured image  -->
        <section id="links">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <p class="links-p">Our Services</p>
                <div class="list-group">
                  <a href="#" class="mb-1">Clipping Path Service</a>
                  <a href="#" class="mb-1">Multi Clipping Path Service</a>
                  <a href="#" class="mb-1">Background Removal Service</a>
                  <a href="#" class="mb-1">Color Correction service</a>
                  <a href="#" class="mb-1">Image Masking Service</a>
                  <a href="#" class="mb-1">Ghost Mannequin Service</a>
                  <a href="#" class="mb-1">Photo Retouching Service</a>
                  <a href="#" class="mb-1">Drop Shadow Service</a>
                  <a href="#" class="mb-1">Car Image Editing</a>
                  <a href="#" class="mb-1">E-commerce Photo Editing</a>
                  <a href="#" class="mb-1">Banner Design</a>
                  <a href="#" class="mb-1">Business Card Design</a>
                  <a href="#" class="mb-1">Vector Conversion Service</a>
                  <a href="#" class="mb-1">Jewelry Photo Editing Services</a>
                </div>
              </div>

              <div class="col-md-4">
                <p class="links-p">Useful Links</p>
                <div class="list-group">
                  <a href="#" class="mb-1">About Us</a>
                  <a href="#" class="mb-1">Contact Us</a>
                  <a href="#" class="mb-1">My Account</a>
                  <a href="#" class="mb-1">File Uploads</a>
                  <a href="#" class="mb-1">Faqs</a>
                  <a href="#" class="mb-1">Privacy Policy</a>
                  <a href="#" class="mb-1">Terms and Conditions</a>
                  <a href="#" class="mb-1">Affiliate Disclosure</a>
                  <a href="#" class="mb-1">Write For Us</a>
                  <a href="#" class="mb-1">Clipping Path Creative Reviews</a>
                  <img src="assets/images/services/stripe-badge-white.webp" alt="">
                </div>
              </div>

              <div class="col-md-4">
                <p class="links-p">Recent posts</p>
                <div class="list-group list-group-2">
                  <a href="#" class="mb-1">Amazon Product Photography Tips Basic to Advanced
                    <hr>
                    <i class="fa-solid fa-clock text-primary"></i> <span class="text-primary">March 2, 2022</span>
                  </a>
                  <a href="#" class="mb-1">What is Corporate photography?
                    <hr>
                    <i class="fa-solid fa-clock text-primary"></i> <span class="text-primary">March 2, 2022</span>
                  </a>
                  <a href="#" class="mb-1">Most Beautiful Places To Take Photographs in Dubai
                    <hr>
                    <i class="fa-solid fa-clock text-primary"></i> <span class="text-primary">March 2, 2022</span>
                  </a>
                  <a href="#" class="mb-1">Top 6 Wedding Photography Themes For WordPress 2021
                    <hr>
                    <i class="fa-solid fa-clock text-primary"></i> <span class="text-primary">March 2, 2022</span>
                  </a>
                  <a href="#" class="mb-1">How To Capture Eye-Catching Corporate Shots
                    <hr>
                    <i class="fa-solid fa-clock text-primary"></i> <span class="text-primary">March 2, 2022</span>
                  </a>
                  <a href="#" class="mb-1">Outdoor Flash Photography Tips with Pets
                    <hr>
                    <i class="fa-solid fa-clock text-primary"></i> <span class="text-primary">March 2, 2022</span>
                  </a>
                  <a href="#" class="mb-1">Photo Editing Tips for Shutterbugs to Make their Photographs Stunning
                    <hr>
                    <i class="fa-solid fa-clock text-primary"></i> <span class="text-primary">March 2, 2022</span>
                  </a>

                </div>
              </div>
            </div>
            <hr style="height: 1px; background:grey;">
            <p class="text-center text-light" style="font-size: 20px;">&copy; 2022 All Right Reserved by <a href="/" class="text-primary"> Kaizen It LTD. </a></p>
            <div class="template-demo text-center">
              <a href="" type="button" class="btn btn-social-icon btn-rounded"><i class="fa-brands fa-facebook"></i></a>
              <a href="" type="button" class="btn btn-social-icon btn-rounded"><i class="fa-brands fa-youtube"></i></a>
              <a href="" type="button" class="btn btn-social-icon btn-rounded"><i class="fa-brands fa-twitter"></i></a>
              <a href="" type="button" class="btn btn-social-icon btn-rounded"><i class="fa-brands fa-dribbble"></i></a>
              <a href="" type="button" class="btn btn-social-icon btn-rounded"><i class="fa-brands fa-linkedin"></i></a>
              <a href="" type="button" class="btn btn-social-icon btn-rounded"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="#scroll-top" class="position-fixed bottom-0 end-0 text-warning p-5 scroll">
              <i class="fa-solid fa-chevron-up"></i>
          </a>
          </div>
        </section>
    </footer>
    </main>

  <!--Main layout-->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- owl-carousel js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- filter data using iostope js cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  {{-- custom script  --}}
  <script src="{{asset('assets/js/main.js')}}"></script>
@livewireScripts
</body>
</html>
