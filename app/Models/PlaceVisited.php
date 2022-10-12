<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceVisited extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'place_visited';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'tourist_place_id',
        'visit_date',
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
        'visit_date' => 'date'
    ];

    /**
     * The users() function returns the relationship between the User model and the Post model.
     * 
     * @return The relationship between the user and the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The function tourist_places() returns the tourist_place that belongs to the current user.
     * 
     * @return The relationship between the two models.
     */
    public function tourist_place()
    {
        return $this->belongsTo(tourist_place::class);
    }
}
