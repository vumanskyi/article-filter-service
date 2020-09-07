<?php
declare(strict_types=1);

namespace App\Domain\Tags;

use App\Domain\Repository;
use App\Domain\Tags\Contract\TagsRepository as BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class TagsRepository extends Repository implements BaseRepository
{
    /**
     * @param array $filter
     * @return Collection
     */
    public function findAll(array $filter = []): Collection
    {
        return $this->model->where($filter)->get();
    }
}
