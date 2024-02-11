@extends('admin.admin_master') @section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Unit</h4>
                            <hr />
                            @if (count($errors)) @foreach ($errors->all() as $errors)
                            <p class="alert alert-danger alert-dismissable fade show">
                                {{ $errors }}
                            </p>
                            @endforeach @endif
                            <form method="post" action="{{ route('unit.store') }}" id="newUnitForm">
                                @csrf
                                <div class="row mb-4">
                                    <label for="unitname" class="col-sm-2 col-form-label">Unit Name</label>
                                    <div class="form-group col-sm-10">
                                        <input name="unitname" class="form-control" type="text" id="name" />
                                    </div>
                                </div>
                                <!-- end row -->
                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Add New Unit"
                                    name="" id="" />
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
        $("#newUnitForm").validate({
            rules: {
                unitname: {
                    required: true,
                },
            },
            messages: {
                unitname: {
                    required: "Please Enter Unit Name",
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