<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\user;
use Illuminate\Support\Facades\DB;
class Brand extends Model
{
    protected $guarded = ['id'];
   protected $table='brands';
}
