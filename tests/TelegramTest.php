<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\Telegram;
use PHPUnit\Framework\TestCase;

class TelegramTest extends TestCase
{
    /**
     * @return void
     * @covers \Nostadt\ShareUrl\Telegram
     */
    public function testClass(): void
    {
        self::assertSame(
            'https://t.me/share/?url=https%3A%2F%2Flocalhost%3Funit%3Dtest&text=some+text',
            (string)(new Telegram('https://localhost?unit=test', 'some text'))
        );
    }
}
