<?php
declare(strict_types=1);

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Services\CategoryReadService;
use App\Services\SearchFilterService;
use App\Services\TagReadService;

class SearchController extends Controller
{
    private SearchFilterService $service;

    private CategoryReadService $categoryService;

    private TagReadService $tagService;

    /**
     * SearchController constructor.
     * @param SearchFilterService $service
     * @param CategoryReadService $categoryService
     * @param TagReadService $tagService
     */
    public function __construct(
        SearchFilterService $service,
        CategoryReadService $categoryService,
        TagReadService $tagService
    ) {
        $this->service = $service;

        $this->categoryService = $categoryService;

        $this->tagService = $tagService;
    }

    /**
     * method {GET}
     *
     * @param SearchRequest $request
     * @return \Illuminate\View\View
     */
    public function find(SearchRequest $request)
    {
        $collection = $this->service->search($request->getDTO());

        return view('search', [
            'article' => $request->get('article'),
            'categories' => $this->categoryService->availableCategories(),
            'tags' => $this->tagService->availableTags(),
            'collection' => $collection,
        ]);
    }
}
