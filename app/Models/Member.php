<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'idMember';
    protected $fillable = ['phone', 'positionTitle'];

    public function position()
    {
        return $this->belongsTo(Position::class, 'positionTitle', 'idPosition');
    }
    
}
