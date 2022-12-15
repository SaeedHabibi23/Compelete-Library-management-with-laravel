<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

use App\Models\LendingBooks;

use Illuminate\Support\facades\DB;


class LendingBookController extends Controller
{
    public function deliveryBook(){
        $lendingBooks = LendingBooks::join('books' , 'books.book_id' , '=' , 'lending_books.book_id')
        ->where('status' , '=' , '0')->paginate(18);
        $lendingBooksTable = LendingBooks::join('books' , 'books.book_id' , '=' , 'lending_books.book_id')
        ->where('status' , '=' , '1')->paginate(40);
      
        return view('dashboards.admins.deliveryBook' , compact('lendingBooks' , 'lendingBooksTable'));
     
    }


    public function rollUpdate($lending_id){
        $lendingBooks = DB::table('lending_books')->select('status')->where('lending_id' , '=' , $lending_id)->first();
        if($lendingBooks->status == 0){
            $status = 1;
        }

        $values = array('status' => $status);
        DB::table('lending_books')->where('lending_id' , $lending_id)->update($values);
        return redirect()->back();


    }



    public function destroyLending($lending_id){
        $lendingBooks = LendingBooks::find($lending_id);
        // dd($book);
        $lendingBooks->delete();
        return redirect()->back();
    }


   public function updateUserRole(Request $request){
        $lending_id = request('lending_id');
        $status = 2;
        DB::update("update lending_books set status = '$status'
                where id = '$id'");
                $lendingBooks = DB::table('lending_books')->where('status' , '=' , '0')->get();
                return view('dashboards.admins.deliveryBook'  , compact ('lendingBooks'));
    }


 public function giveDeliverBook(){
        $lendingBooks = LendingBooks::all();
        $books = Books::join('categories' , 'categories.cat_id' , '=' , 'books.cat_id')->get();
        $data = [
            'lendingBooks' => $lendingBooks,
            'books' => $books
        ];
        return view('dashboards.admins.giveDeliverBook' , compact('data'));
    }

    public function giveDeliverToPerson(Request $request){
        $request->validate([
            "personName" => "required|min:3|max:128|string",
            "MountMoney" => "required|min:3|max:10000|integer",
            "date_lend" => "required",
            "date_delivery" => "required",
        ]);
        $lending = new LendingBooks();

        $lending->personName = request('personName');
        $lending->book_id  = request('book_id');
        $lending->MountMoney = request('MountMoney');
        $lending->date_lend = request('date_lend');
        $lending->date_delivery = request('date_delivery');
        $lending->lend_description = request('lend_description');
        

        $lending->save();

        return redirect()->back()->with('status' , 'کتاب  مورد نظر به امانت داده شد');
        
    }

    public function updateDeliverBook($lending_id){
        $lendingBooks = DB::table('lending_books')->where('lending_id' , '=' , $lending_id)->first();
        $books = Books::all();
        $data = [
            'lendingBooks' => $lendingBooks,
            'books' => $books
        ];
        return view('dashboards.admins.updateBookDeliver' , compact('data'));
    }
 public function updateDeliverToPerson(Request $request){
        $lending_id   = request('lending_id');
        $personName = request('personName');
        $book_id   = request('book_id');
        $MountMoney = request('MountMoney');
        $date_lend = request('date_lend');
        $date_delivery = request('date_delivery');
        $lend_description = request('lend_description');

        // $fac_id = request('fac_id');
        DB::update("update lending_books set
        personName = '$personName' ,
        book_id = '$book_id' ,
        MountMoney  = '$MountMoney' ,
        date_lend  = '$date_lend' ,
        date_delivery  = '$date_delivery' ,
        lend_description  = '$lend_description' 
                where lending_id = '$lending_id'");

                return redirect(route('admin.deliveryBook', array('lending_id' => $lending_id)));
    }

}
