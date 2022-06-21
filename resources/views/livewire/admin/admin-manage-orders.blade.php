<div id="scroll-top">
    <div class="container mb-3 mt-2">
        <style>
            nav svg {
                height: 20px;
            }

            svg {
                overflow: hidden;
                vertical-align: middle;
            }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-3">
                                <h4 class="pull-start">All Orders</h4>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3">
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
                                    <th>Customer Name</th>
                                    <th style="width: 30px !important;">Customer Email</th>
                                    <th>Customer Country</th>
                                    <th>Phone Number</th>
                                    <th>Service Name</th>
                                    <th>No. of Images</th>
                                    <th>Need Images resized</th>
                                    <th>Customer's Instructions</th>
                                    <th class="w-50">Images</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->firstname}} {{$order->lastname}}</td>
                                        <td class="w-10 text-danger">{{$order->email}}</td>
                                        <td>{{$order->country}}</td>
                                        <td class="text-danger">{{$order->phone}}</td>
                                        <td>{{$order->servicetype}}</td>
                                        <td>{{$order->imagesno}}</td>
                                        <td>{{$order->needresized}}</td>
                                        <td>{{$order->instruction}}</td>
                                        <td>
                                            <a href="{{route('admin.download',['id'=>$order->id])}}" class="btn btn-primary" wire:click.prevent="download({{$order->id}})">Download Images</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {{$orders->links()}}

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




