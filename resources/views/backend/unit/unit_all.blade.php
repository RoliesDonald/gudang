@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Unit</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">All Unit Data </h4>
                            <a href="{{ route('unit.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" ">Add New Unit</a></div><br>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th width="5%">Sl</th>
                                        <th>Unit Name</th>
                                        <th width="18%">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($units as $key=> $item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td> {{ $item->unitname }} </td>
                                        <td>
                                            <a href="{{ route('unit.edit', $item->id) }}" class="btn btn-info sm"
                                                title="Edit Data"> <i class="fas fa-edit"></i></a>
                                            <a href="{{ route('unit.delete', $item->id) }}" class="btn btn-danger sm"
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

        </div> <!-- container-fluid -->
    </div>
    @endsection
