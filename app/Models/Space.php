<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Space
 *
 * @property $id
 * @property $name
 * @property $user_id
 * @property $capacity
 *
 * @property Booking[] $bookings
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Space extends Model
{
    
    static $rules = [
		'name' => 'required',
		'user_id' => 'required',
		'capacity' => 'required',
    ];

    public $timestamps = false;
    
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','user_id','capacity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking', 'space_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
