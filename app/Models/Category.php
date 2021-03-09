<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['tx_title', 'tx_url', 'tx_description'];

    public function getProdutos(){
        return $this->hasMany(Produto::class);
    }
}
