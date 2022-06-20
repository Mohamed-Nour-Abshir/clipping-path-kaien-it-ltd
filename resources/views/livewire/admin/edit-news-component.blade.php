<div id="scroll-top">
    <div class="container mb-3 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="pull-start">Edit News & Events</h4>
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
                                    <th>Edit</th>
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
                                            <a href="{{route('admin.editnews',['news_id'=>$news_events->id])}}"><i class="fa fa-edit fa-2x"></i></a>
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


