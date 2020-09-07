<?php
declare(strict_types=1);

namespace App\Services;

use App\Domain\Articles\Contract\ArticlesRepository;
use Illuminate\Pagination\AbstractPaginator;
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
    public function search(DataTransferObject $dto): AbstractPaginator
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

        $relation['search'] = $dto->search;

        return $this->repository->findAllWithRelations($filter, $relation);
    }
}
