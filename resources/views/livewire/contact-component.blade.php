<div id="scroll-top">
    <section id="contact-us">
        <div class="container">
            <div class="jumbotron">
                <h2 class="about-content"> FIND THE SUPPORT YOU NEED.  </h2>
                <h3 class="about-content-h fs-4">Are you looking for an instant reply for your any inquiry? <br>
                So it is so simple. Fill the form below and submit it.</h3>
                <p class="about-content-p">get an instant reply. We are open 24/7, We have No holiday.</p>
            </div>
                <h2 class="about-us-head text-dark mt-1"> Contact Us </h2>
                <div class="row">
                <div class="col-md-6">
                    <h5 class="text-danger mb-3">Leave us your message here</h5>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form action="" class="mb-4" wire:submit.prevent="ContactUs">
                        <div class="form-group">
                            <label for="name">Your Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control mb-3" wire:model="name">
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Your Email<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control mb-3" wire:model="email">
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Subject<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control mb-3" wire:model="subject">
                            @error('subject') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Message<span class="text-danger">*</span></label>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control mb-3" wire:model="message"></textarea>
                            @error('message') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29210.539244559728!2d90.37797873185238!3d23.771709063032255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skaizen%20it%20ltd!5e0!3m2!1sen!2sbd!4v1654596747067!5m2!1sen!2sbd" width="470" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <h2 class="box-title">Contact Detail</h2>
                <div class="wrap-icon-box">

                    <div class="icon-box-item">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <div class="right-info">
                        <b>Email</b>
                        <p>info@kaizenitbd.com</p>
                    </div>
                    </div>

                    <div class="icon-box-item">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div class="right-info">
                        <b>Phone</b>
                        <p><span style="font-size: 10px;">For Training:</span> +8801934453979,+8801965501219 <br>
                        <span style="font-size: 10px;">For Software Services:</span> +8801934453979,+8801965501219 </p>
                    </div>
                    </div>

                    <div class="icon-box-item">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="right-info">
                        <b>Location</b>
                        <p>151/6, 2nd floor, Gazi Tower, Panthapath Dhaka-1205</p>
                    </div>
                    </div>
                </div>
                </div>

            </div>

        </div>
    </section>
</div>
