<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addproduct extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','description','category','units','price'
    ];

    public function Productimage(){
        return $this->belongsTo(Productimage::class,'id','product_id');
    } 
    public function category(){
        return $this->belongsTo(Category::class,'category','id');
    } 
}
