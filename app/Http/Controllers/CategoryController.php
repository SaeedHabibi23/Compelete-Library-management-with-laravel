<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\facades\DB;
use App\Exports\CategoriesExport;
// use Excel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    // This function to give all of category from database
    public function CategoryPage(){
        $categories = Category::paginate(40);
        return view('dashboards.admins.CategoryPage' , compact('categories'));
    }
    // This function is to save our information into databes via form
    public function AdminStoreCategoryBook(Request $request){
        $request->validate([
            "CategoryName" => "required|min:3|max:128|string",
            
    ]);
        $categories = new Category();        
        $categories->CategoryName = request('CategoryName');  
        $categories->CategoryDescription = request('CategoryDescription');
        $categories->save();
        return redirect()->back()->with('status' , 'کتگوری  مورد نظر در سیستم اضافه شد');
    }

    // This function is to destroy any row that we want to delete it from database
    public function destroyCategory($cat_id){
        $categories = Category::find($cat_id);
        // dd($book);
        $categories->delete();
        $categories = Category::all();
        return redirect()->back();
    }

    // This function is to move the ID of category to edit information of the row
    public function edit($cat_id){
        $category = DB::table('categories')->where('cat_id' , '=' , $cat_id)->first();
        return view('dashboards.admins.EditCategory' , compact('category'));
    }
    // This function is to update row where we gave from edit page
    public function update(Request $request){
        $cat_id  = request('cat_id');
        $CategoryName  = request('CategoryName');
        $CategoryDescription = request('CategoryDescription');
        DB::update("update categories set
        CategoryName = '$CategoryName',
        CategoryDescription  = '$CategoryDescription'
                where cat_id = '$cat_id'");
                return redirect(route('admin.CategoryPage', array('cat_id' => $cat_id)));
    }

 

}
