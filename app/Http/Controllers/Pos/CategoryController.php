<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function CategoryAll()
    {
        $categories = Category::latest()->get();
        return view('backend.category.category_all', compact('categories'));
    }

    public function CategoryAdd()
    {
        return view('backend.category.category_add');
    }

    public function CategoryStore(Request $request)
    {
        Category::insert([
            'categoryname' => $request->categoryname,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
        $toastrnotif = array(
            'message' => 'New Category Successfully Added',
            'alert-type' => 'success'
        );

        return redirect()->route('category.all')->with($toastrnotif);
    }

    public function CategoryEdit($id)
    {
        $categories = Category::findOrFail($id);
        return view('backend.category.category_edit', compact('categories'));
    } // end

    public function CategoryUpdate(Request $request)
    {
        $category_id = $request->id;

        Category::findOrFail($category_id)->update([
            'categoryname' => $request->categoryname,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $toastrnotif = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('category.all')->with($toastrnotif);
    }

    public function CategoryDelete($id)
    {
        Category::findOrFail($id)->delete();

        $toastrnotif = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($toastrnotif);
    }
}
