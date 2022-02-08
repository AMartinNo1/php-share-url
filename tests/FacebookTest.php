<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\Facebook;
use PHPUnit\Framework\TestCase;

class FacebookTest extends TestCase
{
    /**
     * @return void
     * @covers \Nostadt\ShareUrl\Facebook
     */
    public function testClass(): void
    {
        self::assertSame(
            'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flocalhost%3Funit%3Dtest',
            (string)(new Facebook('https://localhost?unit=test'))
        );
    }
}
