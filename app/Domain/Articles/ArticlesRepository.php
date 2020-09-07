<?php
declare(strict_types=1);

namespace App\Domain\Articles;

use App\Domain\Repository;
use App\Domain\Articles\Contract\ArticlesRepository as BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Pagination\Paginator;

class ArticlesRepository extends Repository implements BaseRepository
{
    /**
     * @var int
     */
    const LIMIT = 6;

    /**
     * @param array $filter
     * @return Collection
     */
    public function findAll(array $filter = []): Collection
    {
        return $this->model->where($filter)->get();
    }

    /**
     * @param array $filter
     * @param array $relation
     * @return AbstractPaginator
     */
    public function findAllWithRelations(array $filter = [], array $relation = []): AbstractPaginator
    {
        if (empty($relation['search'])) {
            return new Paginator([], 0);
        }

        $query = $this->model->where($filter);

        if (!empty($relation['category'])) {
           $query->whereIn('category_id', $relation['category']);
        }

        if (!empty($relation['tags'])) {
           $tags = $relation['tags'];
           $query->whereHas('tags', function ($q) use ($tags) {
               $q->whereIn('tag_id', $tags);
           });
        }

        return $query->cacheFor(now()->addHours(24))->paginate(self::LIMIT);
    }
}
