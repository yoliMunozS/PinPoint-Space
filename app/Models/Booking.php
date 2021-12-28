<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Booking
 *
 * @property $id
 * @property $space_id
 * @property $user_id
 * @property $start
 * @property $end
 * @property $assistants
 * @property $created_at
 * @property $updated_at
 *
 * @property Space $space
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Booking extends Model
{
    // para cambiar el formato de fecha
    protected $casts = [
        'date' => 'date'
    ];

    static $rules = [
		'space_id' => 'required',
		'user_id' => 'required',
		'assistants' => 'required',
        
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['space_id','user_id','start','end','assistants', 'accepted'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function space()
    {
        return $this->hasOne('App\Models\Space', 'id', 'space_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
    
      
}
