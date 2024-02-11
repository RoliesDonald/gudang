@extends('admin.admin_master') @section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Profile</h4>
                                <form method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input name="name" class="form-control" type="text"
                                                id="example-text-input" value="{{ $editData->name }}">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input name="username" class="form-control" type="text"
                                                id="example-text-input" value="{{ $editData->username }}">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input name="email" class="form-control" type="text"
                                                id="example-text-input" value="{{ $editData->email }}">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile
                                            Image</label>
                                        <div class="col-sm-10">
                                            <input name="profile_img" class="form-control" type="file"
                                                id="profileImages">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                            <img class="rounded avatar-lg" id="showImage"
                                                src="{{ !empty($editData->profile_image) ? url('upload/admin_img/' . $editData->profile_image) : url('upload/no_image.jpg') }}"
                                                alt="Uploaded Image" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Select Role</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Cashier</option>
                                                <option value="3">Warehouse Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <input class="btn btn-info waves-effect waves-light " type="submit"
                                        value="Update Profile" name="" id="">
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#profileImages').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
