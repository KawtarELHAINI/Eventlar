<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
        use HasFactory;
        protected $guarded = [];

        public function category()
        {
            return $this->hasMany(category::class, 'category_id');
        }
        
        public function Organisateur()
        {
            return $this->hasMany(organisateur::class, 'organisateur_id');
        }
    }
    
    