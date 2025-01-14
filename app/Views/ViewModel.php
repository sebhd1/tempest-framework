<?php

declare(strict_types=1);

namespace App\Views;

use Tempest\Interface\View;
use Tempest\View\BaseView;

final class ViewModel implements View
{
    use BaseView;

    public function __construct(
        public readonly string $name,
    ) {
        $this->path = 'Views/withViewModel.php';
    }

    public function currentDate(): string
    {
        return '2020-01-01';
    }
}
