<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tourist_place_id',
        'user_id',
        'description',
        'valoration',
        'show',
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
    protected $casts = [
        'show' => 'boolean'
    ];

     /**
     * This function returns the user that owns the post.
     * 
     * @return A collection of all the comments that belong to the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The `tourist_place()` function returns the `TouristPlace` model that is associated with the
     * `TouristPlaceImage` model.
     * 
     * @return The relationship between the two models.
     */
    public function tourist_place()
    {
        return $this->belongsTo(TouristPlace::class);
    }

}
