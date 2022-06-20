<div id="scroll-top">
    <div class="container mb-3 mt-2">
        <div class="row">
            <style>
                nav svg {
                    height: 20px;
                }

                svg {
                    overflow: hidden;
                    vertical-align: middle;
                }
            </style>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="pull-start">All Prices of Your Services</h4>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <a href="{{route('admin.addpricing')}}" class="btn btn-primary text-light pull-end">Add Pricing</a>
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
                                    <th>Action</th>
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
                                            <a href="#" onclick="confirm('Are you sure to Delete this Pricing?') || event.stopImmediatePropagation()" wire:click.prevent="deletePricing({{$price->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
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

