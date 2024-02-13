<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\FacebookShareUrl;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(FacebookShareUrl::class)]
class FacebookShareUrlTest extends TestCase
{
    public function testClass(): void
    {
        self::assertSame(
            'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flocalhost%3Funit%3Dtest',
            (string)(new FacebookShareUrl('https://localhost?unit=test'))
        );
    }
}
