<?php
declare(strict_types=1);

namespace App\Domain\Articles;

use App\Domain\Categories\Categories;
use App\Domain\Model;
use App\Domain\Tags\Tags;

class Articles extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(
            Tags::class,
            'articles_tags',
            'tag_id',
            'article_id'
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
