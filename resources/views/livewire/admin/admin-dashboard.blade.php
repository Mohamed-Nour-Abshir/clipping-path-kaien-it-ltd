<div class="container-fluid">

    <style>
        nav svg {
            height: 20px;
        }

        svg {
            overflow: hidden;
            vertical-align: middle;
        }
    </style>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-12 mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                All Latest Orders</div>
                            <div class="mb-0 text-dark">
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

    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                All Latest Services Added are here</div>
                            <div class="mb-0">
                                <table class="table table-bordered table-responsive text-dark">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Service Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                            <tr>
                                                <td><img src="{{asset('assets/images/Service_Images')}}/{{$service->service_image}}" alt="Services" width="60"></td></td>
                                                <td>{{$service->service_name}}</td>
                                                <td>{{$service->service_content}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
