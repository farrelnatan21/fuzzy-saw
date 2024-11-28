<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    //
    use HasFactory;

    protected $table = 'criteria_values';

    protected $fillable=['alternative_id','criterias_id','value'];

    public function alternative()
    {
        return $this->belongsTo(Alternative::class,'alternative_id');
    }

    public function criterias()
    {
        return $this->belongsTo(Criteria::class,'criterias_id');
    }
}
