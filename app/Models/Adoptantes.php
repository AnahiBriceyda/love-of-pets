<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Adoptantes extends Model
{
    use HasFactory;
    protected $table="adoptantes";
 

    public function adoptantes()
    
    {
        return $this->hasMany(Adoptantes::class);
    }
}
