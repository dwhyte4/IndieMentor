<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    
    
    public function plans(){

        return $this->belongsToMany(Plan::class, 'plans');
    }
    
    use HasFactory;
}
