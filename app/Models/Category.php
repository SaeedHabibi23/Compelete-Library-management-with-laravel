<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\DB;


class Category extends Model
{
    protected $table = ('categories');
    protected $primaryKey = 'cat_id';



    // public static function getCategory(){
    //     $records = DB::table('categories')->select(
    //         'CategoryName' , 
    //         'CategoryDescription' , 
    //     )->get()->toArray();

    //     return $records;
    // }
}
