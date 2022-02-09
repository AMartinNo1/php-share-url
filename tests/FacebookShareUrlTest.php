<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\FacebookShareUrl;
use PHPUnit\Framework\TestCase;

class FacebookShareUrlTest extends TestCase
{
    /**
     * @return void
     * @covers \Nostadt\ShareUrl\FacebookShareUrl
     */
    public function testClass(): void
    {
        self::assertSame(
            'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flocalhost%3Funit%3Dtest',
            (string)(new FacebookShareUrl('https://localhost?unit=test'))
        );
    }
}
