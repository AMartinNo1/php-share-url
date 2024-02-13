<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\TelegramShareUrl;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(TelegramShareUrl::class)]
class TelegramShareUrlTest extends TestCase
{
    public function testClass(): void
    {
        self::assertSame(
            'https://t.me/share/?url=https%3A%2F%2Flocalhost%3Funit%3Dtest&text=some+text',
            (string)(new TelegramShareUrl('https://localhost?unit=test', 'some text'))
        );
    }
}
