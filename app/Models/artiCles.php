<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artiCles extends Model
{
	protected $fillable = ['Title', 'Description','Category', 'img', 'user_id'];
    use HasFactory;
}
