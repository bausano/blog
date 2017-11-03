<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'subtitle', 'description', 'user_id', 'body'
    ];

    /**
     * Specifies the belongs to relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    /**
     * Specifies the has many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
