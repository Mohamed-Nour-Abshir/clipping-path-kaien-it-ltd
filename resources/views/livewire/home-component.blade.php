<div id="scroll-top">
    <section id="header" class="bg-image">
        <div class="container pt-4">
        <div class="header-content">
            <i class="fas fa-pen-nib text-primary mb-5" style="font-size: 70px;"></i>
            <h3>Outsource Photo Editing Company</h3>
            <h3>eCommerce, Vehicle and Product photo editing specializing</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
            <a href="/buy-our-services"><i class="fa-solid fa-share"></i> Free Trail 2 images</a>
            </div>
            <div class="col-md-4">
            <a href="/buy-our-services"><i class="fa-solid fa-share"></i> Get Free Quote</a>
            </div>
            <div class="col-md-4">
            <a href="/buy-our-services"><i class="fa-solid fa-cart-shopping"></i> Buy our Services</a>
            </div>
        </div>
        </div>
    </section>
    <!----End Hero section---->
    <section id="about">
    <div class="row">
        <div class="col-md-3">
        <div class="wrap-icons">
            <i class="fa-solid fa-star"></i>
        </div>
        <h4>Great Quality</h4>
        <p>We provide 100% handmade photo editing services to use Photoshop.
            So you will get great quality services.</p>
        </div>
        <div class="col-md-3">
        <div class="wrap-icons">
            <i class="fa-solid fa-clock"></i>
        </div>
        <h4>24 Hours Delivery</h4>
        <p>We always try to deliver your order within 24 hours or less. Also,
            we provide express delivery like 2 hours.</p>
        </div>
        <div class="col-md-3">
        <div class="wrap-icons">
            <i class="fa-solid fa-dollar"></i>
        </div>
        <h4>No Buyer Fees</h4>
        <p>If you purchase our services then we will not charge buyer fees like Fiverr,
            Upwork.</p>
        </div>
        <div class="col-md-3">
        <div class="icons">
            <div class="wrap-icons">
            <i class="fa-solid fa-rotate-left"></i>
            </div>
        </div>
        <h4>Money Back Guarantee</h4>
        <p>If we are unable to edit your images then you will get 100%
            hassle free money back guarantee.</p>
        </div>
    </div>
    </section>
    <!--End about section-->
    <section id="services">
    <div class="container">
        <h3> <i class="fa-solid fa-caret-right"></i> How We Work <i class="fa-solid fa-caret-left"></i></h3>
        <div class="row">
        <div class="col-md-3">
            <div class="image-icon1 position-relative">
            <img src="assets/images/images.png" alt=""><br>

            </div>
            <p class="text-primary text-center">Request a quote</p>
            <p>You can send us your photos with brief instructions to submit the request a quote form and
            we will confirm the quotation and delivery time within 30 minutes.</p>
        </div>
        <div class="col-md-3">
            <div class="image-icon2 position-relative">
            <img src="assets/images/invoice.webp" alt=""><br>
            </div>
            <p class="text-primary text-center">Pay our invoice</p>
            <p>Once you agreed with our price and delivery time, our term will send you an
            invoice to pay us.</p>
        </div>
        <div class="col-md-3">
            <div class="image-icon3 position-relative">
            <img src="assets/images/downloads.webp" alt=""><br>
            </div>
            <p class="text-primary text-center">Download Your Photos</p>
            <p>Our team has completed your task to follow your requirements; your files are ready to be download.
            Our term will send you an email with Download information .</p>
        </div>
        <div class="col-md-3">
            <div class="image-icon4 position-relative">
            <img src="assets/images/home_store_list_icon_3.png" alt=""><br>
            </div>
            <p class="text-primary text-center">Gurantee of Satisfaction</p>
            <p>Our main aim is client satisfactions.If you aren't satisfy with our final work then
            we will provide you unlimited modifications.We are not satisfy until you are satisfied.</p>
        </div>
        </div>

        <hr>

        <div class="row mt-5">
        <h3> <i class="fa-solid fa-caret-right"></i> Our Services <i class="fa-solid fa-caret-left"></i></h3>
        @foreach ($services as $service)
            <div class="col-md-3 mb-5">
                <img src="{{asset('assets/images/Service_Images')}}/{{$service->service_image}}" alt="Services" class="rounded-circle" style="width: 200px;"><br>
                <a href="" class="text-primary text-center">{{$service->service_name}}</a>
                <p class="text-right" style="margin-left: 20px;">{{$service->service_content}}</p>
            </div>
        @endforeach
        </div>
    </div>
    </section>
    <!--End services-->

    <section id="clipping-path-ltd">
    <div class="container">
        <div class="row">
        <div class="col-md-9">
            <h2 class="clipping-header text-center">Clipping Path Kaizen IT LTD</h2>
            <hr>
            <p style="font-size:large;">
            <b style="font-weight:700">Clipping Path Kaizen IT LTD</b> is an image editing firm with more
            than 100+ highly dedicated employees offering any kind of photo
            editing services worldwide. Our number one objective is customer
            satisfaction. We provide all types of photo editing services manually
            using <a href="#" style="color: #fff !important; text-decoration: underline !important;">Adobe Photoshop</a>
            software. So we assure you, you will not be
            disappointed with our services. We provide professional and high-quality
                image editing services like Clipping Path, Background removal, Color
                Correction, Neck joint, image masking service at affordable prices.
                Our dedicated team works 3 shifts of
            24 hours daily. when you send us a request, we will
            send you a reply in a short time frame, whether you form
            Australia, <a href="#" style="color: #fff !important; text-decoration: underline !important;">USA</a>, UK, Canada,
            Denmark, Germany, India,
            Hong Kong or anywhere in the world it doesn’t matter.
            So we suggest you take action now. if you have any doubt please kindly
                send us a couple of images as a trial, we will get those images done
                for free. so you can judge the quality of our work. we assure you,
                You will be amazed. After you have judged the quality of our services.
                if you find it okay please kindly place your order with us.
                You don’t have to worry we will guide you through the whole process.
                we are not satisfied until you are. So take action now and get these
                amazing services at very affordable prices, we help you save your money.
            </p>
            <p>Thanks by, M A Momin Cse (CEO).</p>

            <div class="row mt-5">
            <div class="col-md-4">
                <i class="fa-solid fa-user-group" style="font-size: 40px; color:#000;"></i>
                <span style="font-size:70px;">100</span>
                <span style="font-size:30px; color: #000;">+</span> <p>Designers</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-wifi" style="font-size: 40px; color:#000;"></i>
                <span style="font-size:70px">10k</span>
                <span style="font-size:30px; color: #000;">+</span> <p>Projects</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-thumbs-up" style="font-size: 40px; color:#000;"></i>
                <span style="font-size:70px">10k</span>
                <span style="font-size:30px; color: #000;">+</span> <p>SATISFIED CUSTOMERS</p>
            </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-top:70px;">
            <div class="group">
            <h5 class="text-center p-3">Our Partenrs</h5>
            <div class="row">
                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>

                    <div class="col-md-10">
                    <p style="font-size:15px;">Photographer</p>
                    </div>

                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;">Wholesale</p>
                    </div>
                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;">Retailer</p>
                    </div>

                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;">  Store owner</p>
                    </div>

                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;"> Graphics Design Agency</p>
                    </div>

                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;"> Manufacturer </p>
                    </div>

                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;"> Business Owner</p>
                    </div>

                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;"> Ads Agency</p>
                    </div>

                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;"> Automotive Dealer</p>
                    </div>

                    <div class="col-md-2">
                    <i class="fa-solid fa-check text-dark fa-3x text-success" style="font-size: 20px; font-weight: bold; color:rgb(30, 24, 24)"></i>
                    <hr style="height: 1px; color:gray;">
                    </div>
                    <div class="col-md-10">
                    <p style="font-size:15px;"></p> Media Company</li>
                    </div>

                </div>

            </ul>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!--End Of Overs-->
    <section id="How-Clipping-can-help">
    <div class="container">
        <!-- row 1  -->
        <div class="row">
        <div class="col-md-4">
            <img src="assets/images/Ecommerce-photo-editing.webp" alt="" class="hel-img">
        </div>
        <div class="col-md-8">
            <p class="help-header mt-5">How clipping path company grow your ecommerce business?</p>
            <hr>
            <p class="help-content">It is worth noting that technology and all it offers is a gift to us all.
            Its advancement in almost every sector has not only made things easier
            but also better. Ecommerce has however not been behind all through
            the transition process. You can now easily access any product you wish with just
                a click on your smartphone across the world, at affordable fees.
                It's like walking with an entire market in your pocket,
                saving you all the hustle of the long boring trips
                to the rowdy shopping centers.
            Nonetheless, with e-commerce, the image of your product
            is the most essential tool for marketing what you have.
            A more appealing image will attract more customers whereas a
            basic one will attract less.
            If this makes you worried about your "regular"
            images then have your peace because this is where
            the best clipping path company got you covered.
            </p>
            <span style="color: #1D7ABC; font-size: 30px;">What is a clipping path?</span>
            <p class="help-content">
            A clipping path is referred to as an enclosed vector path used in the selection and cutting of portions from an image.
            Portions outside this region get excluded. Any product image that undergoes the clipping path process comes out better
            for presentability.
            Need more information about clipping path,
            <a href="/clipping-path-service" style="color: #1D7ABC; font-size: 30px; text-decoration: underline;"> click here</a>
            </p>
            <p class="help-content">
            <b>With the right clipping Path Company by your side,
                your e-commerce business is on the right track.
                Below are some of the reasons why.</b>
            </p>
            <span style="color: #1D7ABC; font-size: 20px;">Ways Clipping Path Company grows your e-commerce business</span>
            <b class="mt-3">Improved Visual</b>
            <p class="help-content mt-4">Most clients will judge the product by their first view. With a good clipping path company,
            your product images will be the best thing any client would view.
            </p>
            <b class="mt-3">Boost sales</b>
            <p class="help-content mt-4">With improved visual, comes a boost in sales. A more appealing image will have more sales
            than just any other image. This will also skyrocket profitability.
            </p>
            <b class="mt-3">Building Brand</b>
            <p class="help-content mt-4">A good brand is created by a good reputation. A good reputation is created by a good product image. Creating
            a strong brand that would direct clients to your business is essential.
            </p>
            <b class="mt-3">Outshining rivals</b>
            <p class="help-content mt-4">With good images on your websites, you would have outshined a major challenge in business, which is competition.
                Good images would place you on top of your competitors.
            </p>
            <div class="get-free-qoute-btn">
                <a href="/buy-our-services" class="btn btn-primary text-light"><i class="fa-solid fa-share"></i> Get Free Quote</a>
            </div>
        </div>
        </div>
        </div>
        <!-- End Row 1  -->
        <!-- Row 2  -->
        <div class="container container-2">
        <div class="row row-2">
        <div class="col-md-8">
            <p class="help-header mt-5">Why Hire a Clipping Path Service Provider?</p>
            <hr>
            <p class="help-content">Suppose, you own e-commerce, and you want to
            typically furnish your products, offering attractive images to your customers.
            In that case, the only ideal option is to hire a clipping path service supplier. These services are becoming popular day after another in today's
            technology since they are accessible, beneficial, and affordable.
            </p>
            <p class="help-content" style="font-weight: 800;"><b>Without further ado, allow me to take you through the
            valuable benefits of hiring a clipping path service provider.
            </b></p>
            <span style="color: #1D7ABC; font-size: 20px;">1. Fastest delivery</span>
            <p class="help-content mt-4">
            This process is time-efficient and quickest, and we all know
            that time is essential in every business. This service offers
            faster yet helpful services. For example, in many e-commerce websites,
            it is a must to portray the products on a white background.
            <p class="help-content">
                However, to enhance the product images quality,
                most vendors would be utilizing various backgrounds
                for their product photography. Thus, most vendors targeting
                to sell their specific products
                via the internet will appoint this clipping path
                service provider to eventually
                <a href="#" style="color: #1D7ABC; text-decoration: underline;">change the background</a>
            effectively and faster.
            </p>
            </p>
            <span style="color: #1D7ABC; font-size: 20px;">2. Qualitative task</span>
            <p class="help-content mt-4">Generally, this team is
            professionals in photo editing. It is a company with trained,
            skilled, and certified employees who will eventually provide the
            standard and reliable qualitative task.
            The results are perfect and beneficial.
            </p>
            <span style="color: #1D7ABC; font-size: 20px;">3. Increase online sales</span>
            <p class="help-content mt-4">When your product image appeals to the purchaser's
            requisites and needs, visually attractive, then it a win-win. Your sales
            will automatically increase. As per many and different surveys, when your product
            images are stunning, the clients can even purchase them at a little higher price.
            </p>
            <span style="color: #1D7ABC; font-size: 20px;">4. Quick customer support</span>
            <p class="help-content mt-4">Any business needs to be trustful,
            efficient, and quicker to their clients. In most cases,
            this is easier to be claimed than done, but clipping path
            service suppliers offer fast, helpful, and affordable customer support.
            They can never let you down; they will eventually aid you in
            putting your superlative foot forward via providing top-quality services.
            </p>
            <p class="help-content">Look no further than clipping path service
            suppliers when it comes to image editing in your business; they
            offer faster, reliable, and beneficial services.
            You now have the valuable benefits you will get from hiring
            <b> Clipping Path Kaizen It LTD</b>. They will never disappoint.
            </p>
            <div class="get-free-trail-btn">
                <a href="/buy-our-services" class="btn btn-primary text-light"><i class="fa-solid fa-share"></i> Free Trail 2 Images</a>
            </div>
        </div>
        <div class="col-md-4">
            <img src="assets/images/Why-hire-outsource-photo-editing-company.webp" alt="" class="hel-img" id="hire-image">
        </div>
        </div>
        <!-- End Row 2  -->
    </div>
    </section>

    <!-- best selling section start  -->
    <section class="pt-5 pb-5" id="best-services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="mb-3 float-start" style="color: rgba(7, 74, 151, 0.888); margin-left: 20px; font-size: 20px;">Best Selling Services </p>
                <div class="wrap-carousel-icons float-end">
                    <a class="btn btn-primary text-light mb-3 mr-1" href="" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                    <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <a class="btn btn-primary text-light mb-3" href="" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                    <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach ($bestServices as $bestService)
                                <div class="col-md-4 sm-6 mb-3">
                                    <div class="carousel-image">
                                        <img class="img-fluid" alt="100%x280" src="{{asset('assets/images/BestServices')}}/{{$bestService->image}}" alt="Best Services">
                                        <div class="">
                                            <p class="carousel-a text-primary text-center mb-0" style="font-weight: bold;">{{$bestService->name}}</p>
                                            <p class="carousel-p text-primary text-center" style="font-weight: bold;">{{$bestService->description}} per image</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </section>
    <!-- End best seller  -->

    <!-- ratings info  -->
    <section id="ratings">
    <div class="container">
        <h4 class="text-center text-light mb-3">We are trusted by over 1000+ photographers and media companies</h4>
        <div class="rating-icons">
        <span style="font-size:24px !important; margin-right: 20px;">4.9</span>
        <span style="font-size:30px !important;">★★★★★</span>
        <span style="font-size:14px !important; margin-left: 20px;">117 reviews</span>
        </div>
        <div class="row">
        <div class="col-md-6 mt-5">
            <div class="rating-content">
            Amazing Ecommerce photo editing supplier.
            Highly recommend for background removal.
            </div>

            <div class="rating-icons">
            <a href="#" class="rater-name mt-2">Liviu Leonov</a><br>
            <span style="font-size:20px !important; margin-left: 30px;">★★★★★</span>
            <span style="font-size:14px !important; margin-left: 20px;"> 2 years ago</span>
            </div>

        </div>

        <div class="col-md-6 mt-5">
            <div class="rating-content">
            Amazing and Best clipping path supplier. All paths was very good and smooth edge.
            I will use your services again and again
            </div>

            <div class="rating-icons">
            <a href="#" class="rater-name mt-2">Kimmoy Matthews</a><br>
            <span style="font-size:20px !important; margin-left: 30px;">★★★★★</span>
            <span style="font-size:14px !important; margin-left: 20px;"> 2 years ago</span>
            </div>

        </div>

        <div class="col-md-6 mt-5">
            <div class="rating-content">
            Best Background remover Supplier in the world.
            Highly recommend for Clipping path Services. Max star
            </div>

            <div class="rating-icons">
            <a href="#" class="rater-name mt-2">Haris q</a><br>
            <span style="font-size:20px !important; margin-left: 30px;">★★★★★</span>
            <span style="font-size:14px !important; margin-left: 20px;"> 2 years ago</span>
            </div>

        </div>

        <div class="col-md-6 mt-5">
            <div class="rating-content">
            Great work ! Will use your clipping path services again and again
            </div>

            <div class="rating-icons">
            <a href="#" class="rater-name mt-2">MohamedNur</a><br>
            <span style="font-size:20px !important; margin-left: 30px;">★★★★★</span>
            <span style="font-size:14px !important; margin-left: 20px;"> 2 years ago</span>
            </div>

        </div>
        </div>
        <p class="powered">Powered By <span style="color: blue !important;">G</span><span style="color: red !important;">o</span style="color: red !important;"><span style="color: yellow !important;">o</span><span style="color: blue !important;">g</span><span style="color: green !important;">l</span><span style="color: red !important;">e</span></p>
    </div>
    </section>
        <!-- End ratings info  -->
</div>
