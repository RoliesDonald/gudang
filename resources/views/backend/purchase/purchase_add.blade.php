@extends('admin.admin_master') @section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="title mb-12">New Purchase Order Page</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <!-- -------------------- New Card Body --------------------------- -->
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                Add the Products that you want to order
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 md-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input name="date" class="form-control example-date-input" type="date"
                                            id="date">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 md-3">
                                        <label for="purchase_no" class="form-label">Purchase No</label>
                                        <input name="purchase_no" class="form-control example-date-input" type="text"
                                            value="" id="purchase_no">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 md-3">
                                        <label for="supplier_id" class="form-label">Supplier</label>
                                        <select name="supplier_id" id="supplier_id" class="form-select select2"
                                            aria-label="Select Product Category">
                                            <option selected="">Supplier Name</option>
                                            @foreach ( $supplier as $suppl )
                                            <option value="{{ $suppl->id }}">{{ $suppl->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 md-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select name="category_id" id="category_id" class="form-select select2"
                                            aria-label="Select Product Category">
                                            <option selected="">Category Name</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 md-3">
                                        <label for="product_id" class="form-label">Product</label>
                                        <select name="product_id" id="product_id" class="form-select select2"
                                            aria-label="Select Product Category">
                                            <option selected="">Product Name</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column my-auto">
                                        <label for="product_id" class="form-label" style="margin-top:20px;"> </label>
                                        <i
                                            class="btn btn-secondary btn-rounded waves-effect waves-light ri-add-circle-line addmoreevent">
                                            Add More</i>
                                    </div>
                                </div>
                            </div> <!-- end Row -->
                        </div>
                        <!-- end card-body -->
                        <!-- -------------------- New Card Body --------------------------- -->
                        <div class="card-body">
                            <form method="post" action="{{ route('purchase.store') }}">
                                @csrf
                                <table class="table-sm table-bordered" width="100%" style="border-color:#ddd;">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Product Name</th>
                                            <th>Unit</th>
                                            <th>Unit Price</th>
                                            <th>Description</th>
                                            <th>Total Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="addRow" class="addRow">

                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td>
                                                <input type="text" name="estimate_amount" id="estimate_amount"
                                                    class="form-control estimate_amount" value="0" readonly
                                                    style="background-color: #ddd;">
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div class="form-group"><button type="submint" class="btn btn-info" id="storeBtn">Create
                                        Purchase Order</button></div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
</div>



<script type="text/x-handlebars-template" id="document-template">
    <tr class="delete_add_more_item" id="delete_add_more_item">
        <input type="hidden" name="date[]" value="@{{ date }}">
        <input type="hidden" name="purchase_no[]" value="@{{ purchase_no }}">
        <input type="hidden" name="supplier_id[]" value="@{{ supplier_id }}">
        <td>
            <input type="hidden" name="category_id" value="@{{ category_id }}">
            @{{ category_name }}
        </td>
        <td>
            <input type="hidden" name="product_id" value="@{{ product_id }}">
            @{{ product_name }}
        </td>
        <td>
            <input type="number" min="1" class="form-control buying_qty text-right" name="buying_qty[]" value="">
        </td>
        <td>
            <input type="number" min="1" class="form-control unit_price text-right" name="unit_price[]" value="">
        </td>
        <td>
            <input type="text" min="1" class="form-control" name="description[]">
        </td>
        <td>
            <input type="number" min="1" class="form-control buying_price text-right" name="buying_price[]" value="0"
                readonly>
        </td>
        <td><i class="btn btn-danger btn-sm ri-close-circle-line removemoreevent"></i></td>
    </tr>
</script>

<script type="text/javascript">
    $(document).ready(function(){
    $(document).on("click",".addmoreevent",function(){
        var date = $('#date').val();
        var purchase_no = $('#purchase_no').val();
        var supplier_id = $('#supplier_id').val();
        var category_id = $('#category_id').val();
        var category_name = $('#category_id').find('option:selected').text();
        var product_id = $('#product_id').val();
        var product_name = $('#product_id').find('option:selected').text();

        // Validation

        if(date == ''){
            $.notify("Date is Required", {globalPosition:'top right', className:'error'});
            return false;
        }
        if(purchase_no == ''){
            $.notify("Purchase No is Required", {globalPosition:'top right', className:'error'});
            return false;
        }
        if(supplier_id == ''){
            $.notify("Supplier is Required", {globalPosition:'top right', className:'error'});
            return false;
        }
        if(category_id == ''){
            $.notify("Category is Required", {globalPosition:'top right', className:'error'});
            return false;
        }
        if(product_id == ''){
            $.notify("Product is Required", {globalPosition:'top right', className:'error'});
            return false;
        }

        var source = $("#document-template").html();
        var template = Handlebars.compile(source);
        var data = {
            date:date,
            purchase_no:purchase_no,
            supplier_id:supplier_id,
            category_id:category_id,
            category_name:category_name,
            product_id:product_id,
            product_name:product_name,
        };
        var html = template(data);
        $("#addRow").append(html);
    });

    $(document).on("click",".removemoreevent", function(event){
        $(this).closest(".delete_add_more_item").remove();
        totalAmountPrice();
    });

    // ------ calculate price per item * qty
    $(document).on('keyup click','.unit_price,.buying_qty', function(){
        var unit_price = $(this).closest("tr").find("input.unit_price").val();
        var qty = $(this).closest("tr").find("input.buying_qty").val();
        var total = unit_price * qty;
        $(this).closest("tr").find("input.buying_price").val(total);
        totalAmountPrice();
    });

    // calculate summary of all purchased order
    function totalAmountPrice(){
        var sum = 0;
        $(".buying_price").each(function(){
            var value = $(this).val();
            if(!isNaN(value)&& value.length !=0){
                sum += parseFloat(value);
            }
        });
        $('#estimate_amount').val(sum);
    }
});
</script>

<script type="text/javascript">
    $(function(){
        $(document).on('change','#supplier_id', function(){
            var supplier_id = $(this).val();
            $.ajax({
                url:"{{ route('get-category') }}",
                type: "GET",
                data:{supplier_id:supplier_id},
                success:function(data){
                    var html ='<option value="">Select Category</option>';
                    $.each(data,function(key, v){
                        html += '<option value=" '+v.category_id+' "> '+v.category.categoryname+'</option>';
                    });
                    $('#category_id').html(html);
                }
            })
        });
    });
</script>

<script type="text/javascript">
    $(function(){
        $(document).on('change','#category_id', function(){
            var category_id = $(this).val();
            $.ajax({
                url:"{{ route('get-product') }}",
                type: "GET",
                data:{category_id:category_id},
                success:function(data){
                    var html ='<option value="">Select Product</option>';
                    $.each(data,function(key, v){
                        html += '<option value=" '+v.id+' "> '+v.productname+'</option>';
                    });
                    $('#product_id').html(html);
                }
            })
        });
    });
</script>

@endsection