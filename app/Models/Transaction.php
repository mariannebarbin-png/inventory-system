<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactpry;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
    {
        use HasFactory;

        protected $fillable =[
            'user_id',
            'item_id',
            'quantity',
        ];
    }
