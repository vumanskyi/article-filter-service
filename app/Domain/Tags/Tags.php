<?php
declare(strict_types=1);

namespace App\Domain\Tags;

use App\Domain\Articles\Articles;
use App\Domain\Model;

class Tags extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany(
            Articles::class,
            'articles_tags',
            'article_id',
            'tag_id'
        );
    }
}
