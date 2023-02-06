<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl;

/**
 * @see https://www.facebook.com/brand/resources/facebookapp/logo
 */
final class FacebookShareUrl implements \Stringable
{
    public function __construct(private string $url)
    {
    }

    public function __toString(): string
    {
        return 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($this->url);
    }
}