<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class menu extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $table = 'menus';
    protected $fillable = ['name','parent_id','slug'];
}
