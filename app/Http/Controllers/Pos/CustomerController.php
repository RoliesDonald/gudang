<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CustomerController extends Controller
{
    public function CustomerAll()
    {
        $customers = Customer::latest()->get();
        return view('backend.customer.customer_all', compact('customers'));
    } // end

    public function CustomerAdd()
    {
        return view('backend.customer.customer_add');
    } // end

    public function CustomerStore(Request $request)
    {
        $img = $request->file('customer_img');
        $gen_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        Image::make($img)->resize(200, 200)->save('upload/customer_img/' . $gen_name);
        $save_url = 'upload/customer_img/' . $gen_name;

        Customer::insert([
            'name' => $request->name,
            'username' => $request->username,
            'customer_img' => $save_url,
            'phone_num' => $request->phone_num,
            'email' => $request->email,
            'address' => $request->address,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
        $toastrnotif = array(
            'message' => 'Successfully Create Customer',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.all')->with($toastrnotif);
    } // end

    public function CustomerEdit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('backend.customer.customer_edit', compact('customer'));
    } // end

    public function CustomerUpdate(Request $request)
    {
        $customer_id = $request->id;
        if ($request->file('customer_img')) {
            $img = $request->file('customer_img');
            $gen_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(200, 200)->save('upload/customer_img/' . $gen_name);
            $save_url = 'upload/customer_img/' . $gen_name;

            Customer::findOrFail($customer_id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'customer_img' => $save_url,
                'phone_num' => $request->phone_num,
                'email' => $request->email,
                'address' => $request->address,
                'created_by' => Auth::user()->id,
                'updated_by' => Carbon::now(),
            ]);
            $toastrnotif = array(
                'message' => 'Customer Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('customer.all')->with($toastrnotif);
        } else {
            Customer::findOrFail($customer_id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'phone_num' => $request->phone_num,
                'email' => $request->email,
                'address' => $request->address,
                'created_by' => Auth::user()->id,
                'updated_at' => Carbon::now(),
            ]);
            $toastrnotif = array(
                'message' => 'Customer Updated without Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('customer.all')->with($toastrnotif);
        } // end else
    } //end

    public function CustomerDelete($id)
    {
        $customer = Customer::findOrFail($id);
        $img = $customer->customer_img;
        unlink($img);

        Customer::findOrFail($id)->delete();

        $toastrnotif = array(
            'message' => 'Customer Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($toastrnotif);
    } // end Customer delete
}
