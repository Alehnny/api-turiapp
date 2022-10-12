<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'schedule';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tourist_place_id',
        'description',
        'value',
        'period',
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
  * The `tourist_places()` function returns the relationship between the `tourist_place` and
  * `tourist_place_image` models.
  * 
  * @return The relationship between the two models.
  */
    public function tourist_places()
    {
        return $this->belongsTo(tourist_place::class);
    }
}
