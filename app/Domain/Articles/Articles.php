<?php
declare(strict_types=1);

namespace App\Domain\Articles;

use App\Domain\Categories\Categories;
use App\Domain\Model;
use App\Domain\Tags\Tags;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Articles extends Model
{
    use QueryCacheable;

    protected int $cacheFor = 360; //6 minutes

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
