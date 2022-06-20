<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                            @php
                                              $images = explode(",",$order->images);
                                            @endphp
                                            @foreach ($images as $image)
                                                @if ($image)
                                                    <img src="{{asset('assets/images/BuyServices')}}/{{$image}}" alt="Orders" width="60"><br>
                                                @endif
                                            @endforeach
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




