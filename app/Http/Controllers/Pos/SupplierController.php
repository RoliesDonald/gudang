<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    public function SupplierAll()
    {
        // $supplier = supplier::all();
        $supplier = supplier::latest()->get();
        return view('backend.supplier.supplier_all', compact('supplier'));
    } // end

    public function SupplierAdd()
    {
        return view('backend.supplier.supplier_add');
    } // end

    public function SupplierStore(Request $request)
    {
        supplier::insert([
            'name' => $request->name,
            'phone_num' => $request->phone_num,
            'email' => $request->email,
            'address' => $request->address,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
        $toastrnotif = array(
            'message' => 'New Supplier Successfully Added',
            'alert-type' => 'success'
        );

        return redirect()->route('supplier.all')->with($toastrnotif);
    }

    public function SupplierEdit($id)
    {
        $supplier = supplier::findOrFail($id);
        return view('backend.supplier.supplier_edit', compact('supplier'));
    } // end

    public function SupplierUpdate(Request $request)
    {
        $supplier_id = $request->id;

        supplier::findOrFail($supplier_id)->update([
            'name' => $request->name,
            'phone_num' => $request->phone_num,
            'email' => $request->email,
            'address' => $request->address,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);
        $toastrnotif = array(
            'message' => 'Supplier Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('supplier.all')->with($toastrnotif);
    }

    public function SupplierDelete($id)
    {
        supplier::findOrFail($id)->delete();

        $toastrnotif = array(
            'message' => 'Supplier Delete Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($toastrnotif);
    }
}
