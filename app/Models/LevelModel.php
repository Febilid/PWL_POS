<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $table = 'level_models';

    public function user()
    {
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}
