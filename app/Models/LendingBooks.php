<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\DB;


class LendingBooks extends Model
{
    protected $table = ('lending_books');
    protected $primaryKey = 'lending_id';

    public static function getLendingBooks(){
        $records = DB::table('lending_books')->join
        ('books','books.book_id','=' , 'lending_books.book_id')->select(
            'lending_id' , 
            'personName' , 
            'BookName' , 
            'MountMoney' , 
            'date_lend' , 
            'date_delivery' , 
            'lend_description' , 
        )->where('status' , '=' , '0')->get()->toArray();

        return $records;
    }
    

}
