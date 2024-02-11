@extends('admin.admin_master') @section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Product Page</h4>
                            <hr />
                            @if (count($errors)) @foreach ($errors->all() as $errors)

                            <p class="alert alert-danger alert-dismissable fade show">
                                {{ $errors }}
                            </p>
                            @endforeach @endif
                            <form method="post" action="{{ route('product.store') }}" id="newSupplierForm">
                                @csrf
                                <div class="row mb-4">
                                    <label for="productname" class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="form-group col-sm-10">
                                        <input name="productname" class="form-control" type="text" id="name" />
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="supplier_id" class="col-sm-2 col-form-label">Supplier Name</label>
                                    <div class="col-sm-10">
                                        <select name="supplier_id" id="" class="form-select"
                                            aria-label="Select Product Category">
                                            <option selected="">Select Supplier</option>
                                            @foreach ( $supplier as $suppl )
                                            <option value="{{ $suppl->id }}">{{ $suppl->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="category_id" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" id="" class="form-select"
                                            aria-label="Select Product Category">
                                            <option selected="">Select Category</option>
                                            @foreach ( $categories as $categ )
                                            <option value="{{ $categ->id }}">{{ $categ->categoryname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="unit_id" class="col-sm-2 col-form-label">Unit</label>
                                    <div class="col-sm-10">
                                        <select name="unit_id" id="" class="form-select"
                                            aria-label="Select Product Category">
                                            <option selected="">Select Unit</option>
                                            @foreach ( $unit as $uni )
                                            <option value="{{ $uni->id }}">{{ $uni->unitname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->
                                <input class="btn btn-info waves-effect waves-light" type="submit"
                                    value="Add New Product" name="" id="" />
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
    $(document).ready(function () {
        $("#newSupplierForm").validate({
            rules: {
                productname: {
                    required: true,
                },
                supplier_id: {
                    required: true,
                },
                category_id: {
                    required: true,
                },
                unit_id: {
                    required: true,
                },
            },
            messages: {
                productname: {
                    required: "Please Enter Product Name",
                },
                supplier_id: {
                    required: "Supplier Name is Required",
                },
                category_id: {
                    required: "Category is Required",
                },
                unit_id: {
                    required: "Please select the Unit",
                },
            },
            errorElement: "span",
            errorPlacement: function (error, element) {
                error.addClass("invalid-feedback");
                element.closest(".form-group").append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass("is-invalid");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass("is-invalid");
            },
        });
    });
</script>
@endsection