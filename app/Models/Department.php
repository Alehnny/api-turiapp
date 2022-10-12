<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'department';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'department_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    /**
     * This model has many tourist places.
     * 
     * @return The relationship between the two models.
     */
    public function tourist_places()
    {
        return $this->hasMany(TouristPlace::class);
    }

   /**
    * A county has many towns
    * 
    * @return A collection of towns.
    */
    public function towns()
    {
        return $this->hasMany(Town::class);
    }
}
