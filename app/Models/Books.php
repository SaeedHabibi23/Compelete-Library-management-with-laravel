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

   
}
