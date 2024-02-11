<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class UnitController extends Controller
{
    public function UnitAll()
    {
        $units = Unit::latest()->get();
        return view('backend.unit.unit_all', compact('units'));
    }

    public function UnitAdd()
    {
        return view('backend.unit.unit_add');
    }

    public function UnitStore(Request $request)
    {
        Unit::insert([
            'unitname' => $request->unitname,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
        $toastrnotif = array(
            'message' => 'New Unit Successfully Added',
            'alert-type' => 'success'
        );

        return redirect()->route('unit.all')->with($toastrnotif);
    }

    public function UnitEdit($id)
    {
        $units = Unit::findOrFail($id);
        return view('backend.unit.unit_edit', compact('units'));
    } // end

    public function UnitUpdate(Request $request)
    {
        $unit_id = $request->id;

        Unit::findOrFail($unit_id)->update([
            'unitname' => $request->unitname,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $toastrnotif = array(
            'message' => 'Unit Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('unit.all')->with($toastrnotif);
    }

    public function UnitDelete($id)
    {
        Unit::findOrFail($id)->delete();

        $toastrnotif = array(
            'message' => 'Unit Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($toastrnotif);
    }
}
