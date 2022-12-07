<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
// use App\Models\LendingBooks;
use Illuminate\Support\facades\DB;


class Books extends Model
{
    protected $table = ('books');
    protected $primaryKey = 'book_id';

    protected $fillable = ['BookName' , 'cat_id' , 'NOPage' , 'BookLanguage' , 'Author1' , 
         'Author2' , 'Author3' , 'BookQuantity' , 'Jeld' , 'Print_Year' , 'BookTranslator',
        'BookPlace' , 'BookNumberAsPlace'];

    public static function getBooks(){
        $records = DB::table('books')->join
        ('categories','categories.cat_id','=' , 'books.cat_id')->select(
            'book_id' , 
            'BookNumberImage' , 
            'BookName' , 
            'CategoryName' , 
            'NOPage' , 
            'BookLanguage' , 
            'Author1' , 
            'Author2' , 
            'Author3' , 
            'BookQuantity' , 
            'Jeld' ,
            'Print_Year' , 
            'BookTranslator' , 
            'BookPlace' , 
            'BookNumberAsPlace'
        )->get()->toArray();

        return $records;
    }
}
