<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Article extends Model
{
    /**
     * Specifies the belongs to relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
