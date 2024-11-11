<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    protected $table = 'generaldata, generalimage, banners, footer, product, product_category';
}
