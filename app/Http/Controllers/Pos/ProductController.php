<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\supplier;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function ProductAll()
    {
        $products = Product::latest()->get();
        return view('backend.products.product_all', compact('products'));
    } // end ProductAll

    public function ProductAdd()
    {
        $supplier = supplier::all();
        $categories = Category::all();
        $unit = Unit::all();
        return view('backend.products.product_add', compact('supplier', 'categories', 'unit'));
    } // end ProductAdd

    public function ProductStore(Request $request)
    {
        Product::insert([
            'productname' => $request->productname,
            'supplier_id' => $request->supplier_id,
            'category_id' => $request->category_id,
            'unit_id' => $request->unit_id,
            'quantity' => '0',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
        $toastrnotif = array(
            'message' => 'New Product successfully created',
            'alert-type' => 'success'
        );
        return redirect()->route('product.all')->with($toastrnotif);
    } // end ProductStore

    public function ProductEdit($id)
    {
        $supplier = supplier::all();
        $categories = Category::all();
        $unit = Unit::all();
        $products = Product::findOrFail($id);
        return view('backend.products.product_edit', compact('products', 'supplier', 'categories', 'unit'));
    } //end ProductEdit

    public function ProductUpdate(Request $request)
    {
        $products_id = $request->id;

        Product::findOrFail($products_id)->update([
            'productname' => $request->productname,
            'supplier_id' => $request->supplier_id,
            'category_id' => $request->category_id,
            'unit_id' => $request->unit_id,
            'quantity' => '0',
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);
        $toastrnotif = array(
            'message' => 'Product successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('product.all')->with($toastrnotif);
    } //end ProductUpdate

    public function ProductDelete($id)
    {
        Product::findOrFail($id)->delete();
        $toastrnotif = array(
            'message' => 'Product Deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($toastrnotif);
    } // end ProductDelete
}
