<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\WhatsApp;
use PHPUnit\Framework\TestCase;

class WhatsAppTest extends TestCase
{
    /**
     * @return void
     * @covers \Nostadt\ShareUrl\WhatsApp
     */
    public function testClass(): void
    {
        self::assertSame(
            'https://wa.me/?text=https%3A%2F%2Flocalhost%3Funit%3Dtest',
            (string)(new WhatsApp('https://localhost?unit=test'))
        );
    }
}
