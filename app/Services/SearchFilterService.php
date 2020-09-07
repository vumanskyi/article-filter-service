<?php
declare(strict_types=1);

namespace App\Services;

use App\Domain\Articles\Contract\ArticlesRepository;
use Illuminate\Database\Eloquent\Collection;
use Spatie\DataTransferObject\DataTransferObject;

final class SearchFilterService extends Filter
{
    private ArticlesRepository $repository;

    /**
     * SearchFilterService constructor.
     * @param ArticlesRepository $repository
     */
    public function __construct(ArticlesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @inheritDoc
     */
    public function search(DataTransferObject $dto): Collection
    {
        $relation = [];
        $filter = [
            ['articles.active', '=', 1]
        ];

        if (!empty($dto->articleName)) {
            $filter[] = ['articles.name', 'like', $dto->articleName . '%'];
        }

        if (!empty($dto->categories)) {
            $relation['category'] = $dto->categories;
        }

        if (!empty($dto->tags)) {
            $relation['tags'] = $dto->tags;
        }

        return $this->repository->findAllWithRelations($filter, $relation);
    }
}
