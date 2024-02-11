@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Pending Purchase </h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">All Pending Purchase </h4>
                            <a href="{{ route('purchase.add') }}"
                                class="btn btn-dark btn-rounded waves-effect waves-light" ">Create New Purchase</a></div><br>
                                                <table id=" datatable"
                                class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Purchase No</th>
                                        <th>Date</th>
                                        <th>Supplier</th>
                                        <th>Category</th>
                                        <th>Product Name</th>
                                        <th>Qty</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $key=>$item)
                                    <tr>
                                        <td> {{ $key+1 }} </td>
                                        <td> {{ $item->purchase_no }} </td>
                                        <td> {{ date('d-m-Y',strtotime($item->date )) }} </td>
                                        <td> {{ $item['supplier']['name'] }} </td>
                                        <td> {{ $item['category']['categoryname'] }} </td>
                                        <td> {{ $item['product']['productname'] }} </td>
                                        <td> {{ $item->buying_qty }} </td>
                                        <td>
                                            @if($item->status == '0')
                                            <span class="btn btn-warning">Pending</span>
                                            @elseif($item->status =='1')
                                            <span class="btn btn-success">Approved</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('product.edit', $item->id) }}"
                                                class="btn btn-info sm" title="Edit Data"> <i
                                                    class="fas fa-edit"></i></a> --}}
                                            @if($item->status == '0')
                                            <a href="{{ route('purchase.approve', $item->id) }}"
                                                class="btn btn-success sm" title="Approve" id="approvebtn">
                                                <i class="fas fa-check-circle"></i> </a>
                                            @endif
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