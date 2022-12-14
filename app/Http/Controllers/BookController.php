<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Books;
use Illuminate\Support\facades\DB;


class BookController extends Controller
{
    public function Books(){

        $categories = Category::all();
        $books = Db::table('books')->join('categories' , 'categories.cat_id' , '=' , 'books.cat_id')->orderBy('book_id', 'desc')->paginate(40);
        // $books = Books::join('categories' , 'categories.cat_id' , '=' , 'books.cat_id')->latest()->paginate(40);
        $data = [
            'categories' => $categories,
            'books' => $books
        ];
        return view('dashboards.admins.BookPage' , compact('data'));
    }

    public function AdminStoreBook(Request $request){
        $request->validate([
            "BookName" => "required|min:3|max:128|string",
            "NOPage" => "required|min:3|max:10000|numeric",
            "BookLanguage" => "required|min:3|max:128|string",
            "Author1" => "required|min:3|max:128|string",
            "BookPlace" => "required|min:1|max:2|string",
            // "BookNumberImage"  => "required|image|mimes:jpeg,png,jpg,gif,svg|max:4096",
            
    ]);

        $books = new Books();        
        $books->cat_id = request('cat_id');
        $books->BookName = request('BookName');  
        $books->NOPage = request('NOPage');
        $books->BookLanguage = request('BookLanguage');  
        $books->Author1 = request('Author1');
        $books->Author3 = request('Author3');  
        $books->BookQuantity = request('BookQuantity');
        $books->Jeld = request('Jeld');  
        $books->Print_Year = request('Print_Year');
        $books->BookTranslator = request('BookTranslator');
        $books->BookPlace = request('BookPlace');  
        $books->BookNumberAsPlace = request('BookNumberAsPlace');
        $books->save();
        return redirect()->back()->with('status' , 'کتاب  مورد نظر در سیستم اضافه شد');
    }


    public function destroyBook($book_id){
        $books = Books::find($book_id);
        // dd($book);
        $books->delete();
        $books = Books::join('categories' , 'categories.cat_id' , '=' , 'books.cat_id')->get();
        return redirect()->back();
    }
    public function edit($book_id){
        $books = DB::table('books')->where('book_id' , '=' , $book_id)->first();
        $categories = DB::table('categories')->get();
        $data = [
            'books' => $books,
            'categories' => $categories
        ];
      return view('dashboards.admins.editBooks', compact('data'));
    }

    public function UpdateAnyOtherBook(Request $request){

        $book_id  = request('book_id');
        $BookName = request('BookName');
        $cat_id  = request('cat_id');
        $NOPage = request('NOPage');
        $BookLanguage = request('BookLanguage');
        $Author1 = request('Author1');
        $Author2 = request('Author2');
        $Author3 = request('Author3');
        $BookQuantity = request('BookQuantity');
        $Jeld = request('Jeld');
        $Print_Year = request('Print_Year');
        $BookTranslator = request('BookTranslator');
        $BookPlace = request('BookPlace');
        $BookNumberAsPlace = request('BookNumberAsPlace');

        // $fac_id = request('fac_id');
        DB::update("update books set
        BookName = '$BookName' ,
        cat_id = '$cat_id' ,
        NOPage  = '$NOPage' ,
        BookLanguage = '$BookLanguage' ,
        Author1 = '$Author1' ,
        Author2  = '$Author2' , 
        Author3 = '$Author3' ,
        BookQuantity = '$BookQuantity' ,
        Jeld  = '$Jeld' ,
        Print_Year  = '$Print_Year' ,
        BookTranslator  = '$BookTranslator' ,
        BookPlace  = '$BookPlace' ,
        BookNumberAsPlace  = '$BookNumberAsPlace' 
                where book_id = '$book_id'");

                return redirect(route('admin.Books', array('book_id' => $book_id)));
    }

}
