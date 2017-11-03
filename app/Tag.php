<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['article_id', 'value'];

    /**
     * Creates tags with reference to article.
     *
     * @param $tags array of strings
     * @param Article
     */
    public static function addAll($tags, Article $article) {
        foreach (array_slice($tags, 0, 5) as $tag) {
            if (strlen($tag) < 3 || strlen($tag) > 24) {
                continue;
            }

            Tag::create([
                'value' => str_slug($tag),
                'article_id' => $article->id
            ]);
        }
    }

    /**
     * Specifies the belongs to relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }
}
