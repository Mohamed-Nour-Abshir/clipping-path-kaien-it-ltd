<div id="scroll-top">
    <div class="container mb-3 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="pull-start">Edit all Prices of Your Services</h4>
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
                                    <th>Service Name</th>
                                    <th>Service Price</th>
                                    <th>Service duration Time</th>
                                    <th>Tags</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prices as $price)
                                    <tr>
                                        <td>{{$price->name}}</td>
                                        <td>{{$price->price}}</td>
                                        <td>{{$price->duration}}</td>
                                        <td>{{$price->tags}}</td>
                                        <td>
                                            <a href="{{route('admin.editpricing',['pricing_id'=>$price->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$prices->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


