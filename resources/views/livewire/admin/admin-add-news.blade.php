<div id="scroll-top">
    <div class="container mb-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('admin.managenews')}}" class="btn btn-primary text-light pull-start"><i class="fa-solid fa-arrow-left"></i></a>
                            </div>
                            <div class="col-md-4">
                                <h4 class="text-center">Add News</h4>
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
                                <form wire:submit.prevent="storeNews" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Title</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" placeholder="Title Of the News" wire:model="name">
                                            @error('name')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Short Description</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" placeholder="Short Description of the News" wire:model="short_description">
                                            @error('short_description')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Description</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" placeholder="Description of the News" wire:model="description">
                                            @error('description')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Expiry Date</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" placeholder="Add Expiry date for this News" wire:model="expiry_date">
                                            @error('expiry_date')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Image</label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control input-md" wire:model="image">
                                            <div wire:loading wire:target="image">Uploading...</div>
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120">
                                        @endif
                                            @error('image')<span class="text-danger">{{$message}}</span> @enderror
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


