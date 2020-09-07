<?php
declare(strict_types=1);

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\DataTransferObject\DataTransferObject;

abstract class AbstractFormRequest extends FormRequest
{
    /**
     * @return DataTransferObject
     */
    abstract public function getDTO(): DataTransferObject;
}
