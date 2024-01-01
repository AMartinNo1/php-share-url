<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl\Tests;

use Nostadt\ShareUrl\XShareUrl;
use PHPUnit\Framework\TestCase;

class XShareUrlTest extends TestCase
{
    /**
     * @covers \Nostadt\ShareUrl\XShareUrl
     * @dataProvider objectProvider
     */
    public function testClass(XShareUrl $subject, string $expectation): void
    {
        self::assertSame($expectation, $subject->__toString());
    }

    public static function objectProvider(): \Generator
    {
        yield 'url' => [
            'subject' => new XShareUrl(
                url: 'https://localhost?unit=test'
            ),
            'expectation' => 'https://twitter.com/share?url=https%3A%2F%2Flocalhost%3Funit%3Dtest',
        ];

        yield 'url and text' => [
            new XShareUrl(
                url: 'https://localhost?unit=test',
                text: 'some text'
            ),
            'expectation' => 'https://twitter.com/share?url=https%3A%2F%2Flocalhost%3Funit%3Dtest&text=some+text',
        ];

        yield 'text' => [
            new XShareUrl(
                text: 'some text'
            ),
            'expectation' => 'https://twitter.com/share?text=some+text',
        ];

        yield 'url and text and hashtags' => [
            new XShareUrl(
                url: 'https://localhost?unit=test',
                text: 'some text',
                hashtags: ['foo', 'bar']
            ),
            'expectation' => 'https://twitter.com/share?url=https%3A%2F%2Flocalhost%3Funit%3Dtest&text=some+text&hashtags=foo%2Cbar',
        ];
    }
}
