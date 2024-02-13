<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\ThreemaShareUrl;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ThreemaShareUrl::class)]
final class ThreemaShareUrlTest extends TestCase
{
    public function testClass(): void
    {
        self::assertSame(
            'https://threema.id/compose?text=Check+this+out%3A+https%3A%2F%2Flocalhost%3Funit%3Dtest',
            (string)(new ThreemaShareUrl('Check this out: https://localhost?unit=test'))
        );
    }
}
