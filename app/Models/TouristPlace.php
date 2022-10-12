<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristPlace extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tourist_place';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'department_id',
        'town_id',
        'tourist_place_name',
        'description',
        'address',
        'is_active',
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
        'is_active' => 'boolean'
    ];

    /**
     * The users() function returns the relationship between the User model and the Post model
     * 
     * @return The relationship between the user and the post.
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

   /**
    * The function departaments() returns the department that belongs to the user.
    * 
    * @return The relationship between the two models.
    */
    public function departaments()
    {
        return $this->belongsTo(Department::class);
    }

   /**
    * The towns() function returns the relationship between the Town model and the User model.
    * 
    * @return A collection of all the towns that belong to the user.
    */
    public function towns()
    {
        return $this->belongsTo(Town::class);
    }

    /**
     * This function returns all the comments that belong to this post.
     * 
     * @return A collection of comments.
     */
    public function comments()
    {
        return $this->hasMany(comment::class);
    }

   /**
    * The price() function returns a collection of Price objects that are related to the Product
    * object.
    * 
    * @return A collection of Price models.
    */
    public function price()
    {
        return $this->hasMany(Price::class);
    }

   /**
    * This function returns a collection of Schedule objects that are related to the current object.
    * 
    * @return A collection of Schedule models.
    */
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }

    /**
     * This function returns a collection of TouristPlacePic objects that are related to this
     * TouristPlace object.
     * 
     * @return A collection of TouristPlacePic objects.
     */
    public function tourist_place_pic()
    {
        return $this->hasMany(TouristPlacePic::class);
    }

    /**
     * A user can have many places visited.
     * 
     * @return A collection of PlaceVisited objects.
     */
    public function place_visited()
    {
        return $this->hasMany(PlaceVisited::class);
    }

    /**
     * The function favorite_place() returns a collection of Tag objects that are related to the
     * TouristPlace object that the function is called on
     * 
     * @return The relationship between the two models.
     */
    public function favorite_place()
    {
        return $this->belongsToMany(Tag::class, 'favorite_place', 'tourist_place_id', 'user_id');
    }


}
