<?php
declare(strict_types=1);

namespace App\Domain\Categories;

use App\Domain\Repository;
use App\Domain\Categories\Contract\CategoriesRepository as BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class CategoriesRepository extends Repository implements BaseRepository
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
