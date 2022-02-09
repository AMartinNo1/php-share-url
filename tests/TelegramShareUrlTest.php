<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\TelegramShareUrl;
use PHPUnit\Framework\TestCase;

class TelegramShareUrlTest extends TestCase
{
    /**
     * @return void
     * @covers \Nostadt\ShareUrl\TelegramShareUrl
     */
    public function testClass(): void
    {
        self::assertSame(
            'https://t.me/share/?url=https%3A%2F%2Flocalhost%3Funit%3Dtest&text=some+text',
            (string)(new TelegramShareUrl('https://localhost?unit=test', 'some text'))
        );
    }
}
