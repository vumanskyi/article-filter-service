<?php
declare(strict_types=1);

namespace App\Services\View\Contract;

interface Utils
{
    /**
     * @param string $data
     * @return string
     */
    public function render(string $data): string;
}
