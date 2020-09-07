<?php
declare(strict_types=1);

namespace App\Services;

use App\Domain\Categories\Contract\CategoriesRepository;
use Illuminate\Database\Eloquent\Collection;

final class CategoryReadService
{
    private CategoriesRepository $repository;

    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Collection
     */
    public function availableCategories()
    {
        $filter = [
            ['categories.active', '=', 1]
        ];

        return $this->repository->findAll($filter);
    }
}
