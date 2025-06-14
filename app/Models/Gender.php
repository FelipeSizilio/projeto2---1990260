<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'genders';
    protected $fillable = ['name'];

    public function books(){
        return $this->hasMany(Book::class, 'gender_id', 'id');
    }
}
