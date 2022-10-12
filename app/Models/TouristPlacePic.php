<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristPlacePic extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tourist_place_pic';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tourist_place_id',
        'url',
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
    * The `tourist_places()` function returns the `tourist_place` model that is associated with the
    * `tourist_place_image` model.
    * 
    * @return The relationship between the two models.
    */
    public function tourist_places()
    {
        return $this->belongsTo(tourist_place::class);
    }
}
