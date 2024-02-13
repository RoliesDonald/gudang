@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Product Data</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Product All Data </h4>
                            <a href="{{ route('product.add') }}"
                                class="btn btn-dark btn-rounded waves-effect waves-light" ">Add New Product</a></div><br>
                                <table id=" datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Product Name</th>
                                        <th>Supplier Name</th>
                                        <th>Unit</th>
                                        <th>Category</th>

                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key=>$item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td> {{ $item->productname }} </td>
                                        <td> {{ $item['supplier']['name'] }} </td>
                                        <td> {{ $item['unit']['unitname'] }} </td>
                                        <td> {{ $item['category']['categoryname'] }} </td>

                                        <td>
                                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-info sm"
                                                title="Edit Data"> <i class="fas fa-edit"></i></a>
                                            <a href="{{ route('product.delete', $item->id) }}" class="btn btn-danger sm"
                                                title="Delete Data" id="delete">
                                                <i class="fas fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Datatable Editable</h4>

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits"
                                    id="datatable">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th>Sl</th>
                                            <th>Category</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td data-field="id" style="width: 80px"> {{ $key + 1 }} </td>
                                            <td data-field="name" style="width: 634.35px;"> {{ $item->productname }}
                                            </td>
                                            <td data-field="age" style="width: 260.133px;"> {{ $item['supplier']['name']
                                                }} </td>
                                            <tddata-field="gender" style="width: 369.517px;"> {{
                                                $item['unit']['unitname'] }} </td>
                                                <td> {{ $item['category']['categoryname'] }} </td>

                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt" title="Edit"></i>
                                                    </a>
                                                </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div> <!-- container-fluid -->

    </div>


    @endsection
