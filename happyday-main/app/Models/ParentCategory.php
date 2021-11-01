<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    use HasFactory;
    protected $table="parent_category";
    protected $primaryKey="id";
    protected $fillable=[
        'name','category_id'
    ];
    public $timesptamps =false;
  
    
}
