<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\user;
use Eloquent; // ******** This Line *********
use Illuminate\Support\Facades\DB;
class Blogscat extends Eloquent
{
   protected $table='blogscat';
}