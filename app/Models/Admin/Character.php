<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

use App\Models\Admin\Actor;
use App\Models\Admin\Serie;

class Character extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Gets the actor of the character     
     */
    public function actor() {
        return $this->belongsTo(Actor::class);
    }

    /**
     * Gets the serie the characters belongs to
     */
    public function serie() {
        return $this->belongsTo(Serie::class);
    }
}
