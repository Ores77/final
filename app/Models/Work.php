<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $table = 'works';

    protected $primaryKey = 'id';

    protected $fillable = ['vardas','pavarde','servisas','miestas','image'];
}
