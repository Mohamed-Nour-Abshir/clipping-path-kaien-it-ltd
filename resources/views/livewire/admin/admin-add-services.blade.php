<div id="scroll-top">
    <div class="container mb-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('admin.manageservices')}}" class="btn btn-primary text-light pull-start"><i class="fa-solid fa-arrow-left"></i></a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="text-center">Add Service</h4>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <form wire:submit.prevent="storeService" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Name</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" placeholder="Name of the Service" wire:model="service_name">
                                            @error('service_name')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Description</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" placeholder="Description of the Service" wire:model="service_content">
                                            @error('service_content')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Image</label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control input-md" wire:model="service_image">
                                            <div wire:loading wire:target="service_image">Uploading...</div>
                                        @if ($service_image)
                                            <img src="{{ $service_image->temporaryUrl() }}" width="120">
                                        @endif
                                            @error('service_image')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label"></label>
                                        <div class="col-md-6 mb-3">
                                            <button class="btn btn-primary">Add</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
