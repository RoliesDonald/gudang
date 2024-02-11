@extends('admin.admin_master') @section('admin')
    <div>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <br /><br />
                            <center>
                                <img class="img-thumbnail rounded-circle avatar-xl"
                                    src="{{ !empty($adminData->profile_image) ? url('upload/admin_img/' . $adminData->profile_image) : url('upload/no_image.jpg') }}"
                                    alt="Card image cap" />
                            </center>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="h5 text-muted">
                                            Full Name
                                        </p>
                                        <hr />
                                        <p class="h5 text-muted">
                                            User Name
                                        </p>
                                        <hr />
                                        <p class="h5 text-muted">
                                            email
                                        </p>
                                        <hr />
                                        <p class="h5 text-muted card-text">Jabatan</p>
                                        <hr />
                                    </div>
                                    <div class="col-8">
                                        <p class="h5 text-muted">: {{ $adminData->name }}</p>
                                        <hr>
                                        <p class="h5 text-muted">: {{ $adminData->username }}</p>
                                        <hr>
                                        <p class="h5 text-muted">: {{ $adminData->email }}</p>
                                        <hr>
                                        <p class="h5 text-muted">: </p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <a class="btn btn-primary btn-lg w-100 btn-rounded waves-effect waves-light"
                                        href="{{ route('edit.profile') }}">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
