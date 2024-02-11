<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\supplier;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function PurchaseAll()
    {
        $allData = Purchase::orderBy('date', 'desc')->orderBy('id', 'desc')->get();
        return view('backend.purchase.purchase_all', compact('allData'));
    } // end PurchaseAll

    public function PurchaseAdd()
    {
        $supplier = supplier::all();
        $unit = Unit::all();
        $category = Category::all();
        return view('backend.purchase.purchase_add', compact('supplier', 'unit', 'category'));
    } // end PurchaseAdd

    public function PurchaseStore(Request $request)
    {

        if ($request->category_id == null) {

            $toastrnotif = array(
                'message' => 'Sorry you do not select any item',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($toastrnotif);
        } else {
            $count_category = count([$request->category_id]);
            for ($i = 0; $i < $count_category; $i++) {
                $purchase = new Purchase();
                $purchase->date = date('Y-m-d', strtotime($request->date[$i]));
                $purchase->purchase_no = $request->purchase_no[$i];
                $purchase->supplier_id = $request->supplier_id[$i];
                $purchase->category_id = $request->category_id[$i];

                $purchase->product_id = $request->product_id[$i];
                $purchase->buying_qty = $request->buying_qty[$i];
                $purchase->unit_price = $request->unit_price[$i];
                $purchase->buying_price = $request->buying_price[$i];
                $purchase->description = $request->description[$i];

                $purchase->created_by = Auth::user()->id;
                $purchase->status = '0';
                $purchase->save();
            } // end foreach
        } // end else

        $toastrnotif = array(
            'message' => 'Purchase Successfully Saved',
            'alert-type' => 'success'
        );
        return redirect()->route('purchase.all')->with($toastrnotif);
    } //end PurchaseStore

    public function PurchaseDelete($id)
    {
        Purchase::findOrFail($id)->delete();

        $toastrnotif = array(
            'message' => 'Purchase Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($toastrnotif);
    } //end PurchaseDelete

    public function PurchasePending()
    {
        $allData = Purchase::orderBy('date', 'desc')->orderBy('id', 'desc')->where('status', '0')->get();
        return view('backend.purchase.purchase_pending', compact('allData'));
    } // end PurchasePending

    public function PurchaseApprove($id)
    {
        $approvepurchase = Purchase::findOrFail($id);
        $product = Product::where('id', $approvepurchase->product_id)->first();
        $purchase_qty = ((float)($approvepurchase->buying_qty)) + ((float)($product->quantity));
        $product->quantity = $purchase_qty;
        if ($product->save()) {
            Purchase::findOrFail($id)->update([
                'status' => '1',
            ]);
            $toastrnotif = array(
                'message' => 'Status Approved Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('purchase.all')->with($toastrnotif);
        }
    } // end PurchaseApprove
}
