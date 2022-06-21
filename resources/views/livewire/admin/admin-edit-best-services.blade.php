<div id="scroll-top">
    <div class="container mb-3" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('admin.bestservices')}}" class="btn btn-primary text-light pull-start"><i class="fa-solid fa-arrow-left"></i></a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="text-center">Edit Best Services</h4>
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
                                <form wire:submit.prevent="updatebestServices" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Name</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" placeholder="Name of the Service" wire:model="name">
                                            @error('name')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Price</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" placeholder="Add price from to like this: $1.50 - $2.00" wire:model="description">
                                            @error('description')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Image</label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control input-md" wire:model="newimage">
                                            <div wire:loading wire:target="newimage">Uploading...</div>
                                        @if ($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" width="120">
                                        @else
                                            <img src="{{asset('assets/images/BestServices')}}/{{$image}}" width="120">
                                        @endif
                                            @error('newimage')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label"></label>
                                        <div class="col-md-6 mb-3">
                                            <button class="btn btn-success">Update</button>
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

