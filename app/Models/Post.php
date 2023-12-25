<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $table = "posts";
    // protected $primaryKey = "id";
    // public $incrementing = false;
    // protected $keyType = "string";
    protected $dates = ['deleted_at'];

    public function sealData(){
        $this->sig_data = md5(serialize((object)$this));
    }
}
