<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name','description'];

    public function criteria()
    {
        return $this->hasMany(Criteria::class,'criterias_id');
    }

    public function alternatives()
    {
        return $this->hasMany(Alternative::class);
    }
}
