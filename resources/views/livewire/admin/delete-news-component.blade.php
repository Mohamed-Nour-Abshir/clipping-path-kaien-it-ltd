<div id="scroll-top">
    <div class="container mb-3 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="pull-start">Delete News & Events</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>short_description</th>
                                    <th>Description</th>
                                    <th>Added Date</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $news_events)
                                    <tr>
                                        <td>
                                            <img src="{{asset('assets/images/News')}}/{{$news_events->image}}" alt="Services" width="60"></td>
                                        </td>
                                        <td class="w-30">{{$news_events->name}}</td>
                                        <td class="w-30">{{$news_events->short_description}}</td>
                                        <td class="w-40">{{$news_events->description}}</td>
                                        <td>{{$news_events->expiry_date}}</td>
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure to Delete this News?') || event.stopImmediatePropagation()" wire:click.prevent="deleteNews({{$news_events->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$news->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

