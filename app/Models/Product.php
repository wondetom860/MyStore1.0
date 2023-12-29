<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price'];

    public static function validate($request)
    {
        $request->validate([
            'name' => "required|max:255",
            'description' => "required",
            'price' => "required|numeric|gt:0",
            'image' => "image",
        ]);
    }

    public static function sumPriceByQuantities($products,$productsInSession){
        $total = 0;
        foreach($products as $product){
            $total += ($product->getPrice() * $productsInSession[$product->getId()]);
        }
        return $total;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getId(){
        return $this->id;
    }

    public function items(){
        return $this->hasMany(Item::class);
    }
}
