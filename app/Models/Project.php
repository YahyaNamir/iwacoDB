<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'idProject';
    protected $fillable = ['projectName', 'projectDesc', 'projectObj', 'budget', 'projectManager', 'projectTimeLine', 'projectTeam', 'projectState', 'projectPlannification'];

    public function manager()
    {
        return $this->belongsTo(Manager::class, 'projectManager', 'idManager');
    }

    public function timeline()
    {
        return $this->belongsTo(Time::class, 'projectTimeLine', 'idTime');
    }

    public function team()
    {
        return $this->belongsTo(Member::class, 'projectTeam', 'idMember');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'projectState', 'idState');
    }

    public function planning()
    {
        return $this->belongsTo(Planning::class, 'projectPlannification', 'idTask');
    }

    public function risks()
    {
        return $this->hasMany(Risk::class, 'riskProject', 'idProject');
    }
}
