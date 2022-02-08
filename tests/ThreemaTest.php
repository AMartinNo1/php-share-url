<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\Threema;
use PHPUnit\Framework\TestCase;

class ThreemaTest extends TestCase
{
    /**
     * @return void
     * @covers \Nostadt\ShareUrl\Threema
     */
    public function testClass(): void
    {
        self::assertSame(
            'https://threema.id/compose?text=Check+this+out%3A+https%3A%2F%2Flocalhost%3Funit%3Dtest',
            (string)(new Threema('Check this out: https://localhost?unit=test'))
        );
    }
}
