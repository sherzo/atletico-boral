<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'functions_position';

    protected $guarded = [];

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $fillable = [
        'function',
    ];
}
