<?php

namespace App\Models;
use App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alfad extends Model
{
    use HasFactory;

    protected $fillable = ['name','body'];

}
