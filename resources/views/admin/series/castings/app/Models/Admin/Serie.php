<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

use App\Models\Admin\Character;
use App\Models\Admin\Actor;

class Serie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Gets the actor the serie's characters     
     */
    public function characters() {
        return $this->hasMany(Character::class);
    }

    /**
     * Gets all actors of the serie
     */
    public function actors() {
        return $this->belongsToMany(Actor::class, Character::class, 'serie_id', 'actor_id');
    }
}
