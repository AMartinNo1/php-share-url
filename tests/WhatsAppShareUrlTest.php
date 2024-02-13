<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\WhatsAppShareUrl;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(WhatsAppShareUrl::class)]
class WhatsAppShareUrlTest extends TestCase
{
    public function testClass(): void
    {
        self::assertSame(
            'https://wa.me/?text=https%3A%2F%2Flocalhost%3Funit%3Dtest',
            (string)(new WhatsAppShareUrl('https://localhost?unit=test'))
        );
    }
}
