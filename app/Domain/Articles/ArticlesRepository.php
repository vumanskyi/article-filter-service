<?php
declare(strict_types=1);

namespace App\Domain\Articles;

use App\Domain\Repository;
use App\Domain\Articles\Contract\ArticlesRepository as BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class ArticlesRepository extends Repository implements BaseRepository
{
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
     * @return Collection
     */
    public function findAllWithRelations(array $filter = [], array $relation = []): Collection
    {
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

       return $query->get();
    }
}
