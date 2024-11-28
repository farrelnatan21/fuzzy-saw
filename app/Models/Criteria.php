<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    //
    use HasFactory;

    protected $fillable = ['project_id','name', 'type', 'weight'];

    public function project()
    {
        return $this->belongsTo(project::class);
    }

    public function values()
    {
        return $this->hasMany(Value::class, 'foreign_key','local_key');
    }
}
