<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'id_product';

    protected $fillable = ['id_category', 'tx_name', 'tx_url', 'vl_price', 'tx_description'];

    public function category(){
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

}
