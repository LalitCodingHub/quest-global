<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','prod_id','prod_qty'];
    
    public function productDetail(){
        return $this->belongsTo(Addproduct::class,'prod_id','id');
            
    
    }
    public function userDetail(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
