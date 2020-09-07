<?php

namespace App\Http\Requests;


use App\Http\DTO\SearchDTO;
use Spatie\DataTransferObject\DataTransferObject;

class SearchRequest extends AbstractFormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

        ];
    }

    /**
     * @inheritDoc
     */
    public function getDTO(): DataTransferObject
    {
        return new SearchDTO([
            'articleName' => $this->get('article') ?? '',
            'categories' => $this->get('categories') ?? [],
            'tags' => $this->get('tags') ?? [],
        ]);
    }
}
