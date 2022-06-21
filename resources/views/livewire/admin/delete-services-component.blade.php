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
                            <div class="col-md-12">
                                <h4 class="pull-start">Delete Services</h4>
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
                                    <th>Name</th>
                                    <th style="width: 30px !important;">Content</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>
                                            <img src="{{asset('assets/images/Service_Images')}}/{{$service->service_image}}" alt="Services" width="60"></td>
                                        </td>
                                        <td class="w-30">{{$service->service_name}}</td>
                                        <td class="w-50">{{$service->service_content}}</td>
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure to Delete this Service?') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{$service->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$services->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

