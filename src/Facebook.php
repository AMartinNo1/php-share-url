<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl;

final class Facebook
{
    public function __construct(private string $url)
    {
    }

    public function __toString(): string
    {
        return 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($this->url);
    }
}