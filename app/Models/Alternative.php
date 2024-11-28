<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    //
    use HasFactory;

    protected $fillable = ['project_id','name'];

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function values()
    {
        return $this->hasMany(Value::class,'alternative_id');
    }
}
