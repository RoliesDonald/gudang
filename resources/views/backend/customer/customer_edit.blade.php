@extends('admin.admin_master') @section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Customer</h4>
                                <hr />
                                @if (count($errors))
                                    @foreach ($errors->all() as $errors)
                                        <p class="alert alert-danger alert-dismissable fade show">
                                            {{ $errors }}
                                        </p>
                                    @endforeach
                                @endif
                                <form method="post" action="{{ route('customer.update') }}" id="newCustomerForm"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $customer->id }}">
                                    <div class="row mb-4">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="form-group col-sm-10">
                                            <input name="name" class="form-control" type="text" id="name"
                                                value="{{ $customer->name }}" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="username" class="col-sm-2 col-form-label">User Name</label>
                                        <div class="form-group col-sm-10">
                                            <input name="username" class="form-control" type="text" id="username"
                                                value="{{ $customer->username }}" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <label for="profile_img" class="col-sm-2 col-form-label">Customer Profile
                                            Image</label>
                                        <div class="form-group col-sm-10">
                                            <input name="customer_img" class="form-control" type="file"
                                                id="customerImg" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <label for="customer_img" class="col-sm-2 col-form-label"></label>
                                            <img class="rounded avatar-lg" id="showImage"
                                                src="{{ asset($customer->customer_img) }}" alt="Uploaded Profile Image" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="phone_num" class="col-sm-2 col-form-label">Customer Phone</label>
                                        <div class="form-group col-sm-10">
                                            <input name="phone_num" class="form-control" type="number" id="name"
                                                value="{{ $customer->phone_num }}" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="email" class="col-sm-2 col-form-label">Customer Email</label>
                                        <div class="form-group col-sm-10">
                                            <input name="email" class="form-control" type="email"
                                                value="{{ $customer->email }}" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="address" class="col-sm-2 col-form-label">Customer Address</label>
                                        <div class="form-group col-sm-10">
                                            <input name="address" class="form-control" type="text"
                                                value="{{ $customer->address }}" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <input class="btn btn-info waves-effect waves-light" type="submit"
                                        value="Update Customer" name="" id="" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#newCustomerForm").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    phone_num: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Please Enter Supplier Name",
                    },
                    customer_img: {
                        required: "Please Upload Your Image",
                    },
                    phone_num: {
                        required: "Phone Number is Required",
                    },
                    email: {
                        required: "Active Email Required",
                    },
                    address: {
                        required: "Please Enter Customer Address",
                    },
                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    error.addClass("invalid-feedback");
                    element.closest(".form-group").append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass("is-invalid");
                },
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#customerImg").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#showImage").attr("src", e.target.result);
                };
                reader.readAsDataURL(e.target.files["0"]);
            });
        });
    </script>
@endsection
