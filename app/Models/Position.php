<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $primaryKey = 'idPosition';
    protected $fillable = ['position'];

    public function members()
    {
        return $this->hasMany(Member::class, 'positionTitle', 'idPosition');
    }
}
