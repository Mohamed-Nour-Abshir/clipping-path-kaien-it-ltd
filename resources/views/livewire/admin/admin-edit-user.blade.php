<div id="scroll-top">
    <div class="container mb-3" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('admin.manageusers')}}" class="btn btn-primary text-light pull-start"><i class="fa-solid fa-arrow-left"></i></a>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-5">
                                <h4 class="pull-end">Edit User</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <form wire:submit.prevent="updateUser" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Name</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" wire:model="name">
                                            @error('name')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Email</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" wire:model="email">
                                            @error('email')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">Phone Number</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" wire:model="phone">
                                            @error('phone')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 control-label">User Type</label>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control input-md" wire:model="usertype">
                                            @error('usertype')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
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


