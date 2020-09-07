<?php
declare(strict_types=1);

namespace App\Services\View;

use App\Services\View\Contract\Utils;
use Illuminate\Support\Str;

class TextLimit implements Utils
{
    /**
     * @var int
     */
    const LIMIT = 120;

    /**
     * @var string
     */
    const END_SYMBOLS = '...';

    /**
     * @param string $data
     * @return string
     */
    public function render(string $data): string
    {
        return Str::limit($data, static::LIMIT, static::END_SYMBOLS);
    }
}
