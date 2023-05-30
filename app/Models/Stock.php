<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table="stocks";
    protected $fillable=["product_id","product_quantity","product_in_stock","type"];

    // public function product()
    // {
    //     return $this->hasMany(Product::class);
    // }

}
