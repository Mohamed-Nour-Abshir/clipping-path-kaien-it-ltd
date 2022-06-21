<div id="scroll-top">
    <div class="container mb-3 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="pull-start">Edit Best Services</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Service Name</th>
                                    <th>Service Description</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bestServices as $bestService)
                                    <tr>
                                        <td>
                                            <img src="{{asset('assets/images/BestServices')}}/{{$bestService->image}}" alt="Best Services" width="60"></td>
                                        </td>
                                        <td class="w-30">{{$bestService->name}}</td>
                                        <td class="w-50">{{$bestService->description}}</td>
                                        <td>
                                            <a href="{{route('admin.editbestservice',['bestservice_id'=>$bestService->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$bestServices->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

