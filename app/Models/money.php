<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\DB;


class money extends Model
{
    protected $table = ('money');
    protected $primaryKey = 'money_id';

    public static function getmoney(){
        $records = DB::table('money')->select(
            'Date' , 
            'NumberOfHelper' , 
            'Earnings' , 
            'Spends' , 
            'Remaining')->get()->toArray();

        return $records;
    }


}
