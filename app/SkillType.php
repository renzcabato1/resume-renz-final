<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillType extends Model
{
    //
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
  
}
