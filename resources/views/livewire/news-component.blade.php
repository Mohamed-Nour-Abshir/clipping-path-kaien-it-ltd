<div id="scroll-top">
    <section id="about-us">
        <div class="container">
            <div class="jumbotron">
                <h2 class="about-content">Kaizen It LTD.  </h2>
                <h3 class="about-content-h">Here You will get Our News and Events.</h3>
                <p class="about-content-p">Get High Quality Education and High Quality Services</p>
            </div>
                <h2 class="about-us-head text-dark mt-1"> News & Events </h2>
                <div class="row mb-3">
                    @foreach ($news as $news_events)
                        <div class="col-md-4">
                            <div class="card mb-3">
                            <img src="{{asset('assets/images/News')}}/{{$news_events->image}}" alt="News">
                            <div class="card-header">
                                <h5>{{$news_events->name}}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$news_events->short_description}} <small style="font-size: 12px;">before {{$news_events->expiry_date}}</small></p>
                                <div id="collapse-{{$news_events->id}}" style="display:none">
                                <p>{{$news_events->description}}</p>
                                </div>
                                <a href="#collapse-{{$news_events->id}}" class="btn btn-success text-light nav-toggle">Read more</a>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

