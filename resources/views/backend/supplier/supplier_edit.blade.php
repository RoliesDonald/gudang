@extends('admin.admin_master') @section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add New Supplier Page</h4>
                                <hr />
                                @if (count($errors))
                                    @foreach ($errors->all() as $errors)
                                        <p class="alert alert-danger alert-dismissable fade show">
                                            {{ $errors }}
                                        </p>
                                    @endforeach
                                @endif
                                <form method="post" action="{{ route('supplier.update') }}" id="newSupplierForm">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $supplier->id }}" />
                                    <div class="row mb-4">
                                        <label for="name" class="col-sm-2 col-form-label">Supplier Name</label>
                                        <div class="form-group col-sm-10">
                                            <input name="name" class="form-control" value="{{ $supplier->name }}"
                                                type="text" id="name" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="phone_num" class="col-sm-2 col-form-label">Supplier Phone</label>
                                        <div class="form-group col-sm-10">
                                            <input name="phone_num" class="form-control" value="{{ $supplier->phone_num }}"
                                                type="number" id="name" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="email" class="col-sm-2 col-form-label">Supplier Email</label>
                                        <div class="form-group col-sm-10">
                                            <input name="email" class="form-control" value="{{ $supplier->email }}"
                                                type="email" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-4">
                                        <label for="address" class="col-sm-2 col-form-label">Supplier Address</label>
                                        <div class="form-group col-sm-10">
                                            <input name="address" value="{{ $supplier->address }}" class="form-control"
                                                type="text" />
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <input class="btn btn-info waves-effect waves-light" type="submit"
                                        value="Upadte Supplier Info" name="" id="" />
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
            $("#newSupplierForm").validate({
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
                    phone_num: {
                        required: "Phone Number is Required",
                    },
                    email: {
                        required: "Active Email Required",
                    },
                    address: {
                        required: "Please Enter Supplier Address",
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
@endsection
