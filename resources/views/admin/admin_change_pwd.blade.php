@extends('admin.admin_master') @section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Change Password</h4>
                                <hr>
                                @if (count($errors))
                                    @foreach ($errors->all() as $errors)
                                        <p class="alert alert-danger alert-dismissable fade show">{{ $errors }}</p>
                                    @endforeach
                                @endif
                                <form method="post" action="{{ route('update.pwd') }}">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="oldpassword" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input name="oldpassword" class="form-control" type="password"
                                                id="oldpassword" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="newpassword" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input name="newpassword" class="form-control" type="password"
                                                id="newpassword" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="conf_password" class="col-sm-2 col-form-label">Confirm
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input name="conf_password" class="form-control" type="password"
                                                id="conf_password" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <input class="btn btn-info waves-effect waves-light" type="submit"
                                        value="Change Password" name="" id="" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
