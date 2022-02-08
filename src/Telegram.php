<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl;

/**
 * @see https://core.telegram.org/widgets/share#custom-buttons
 * @see https://telegram.org/tour/screenshots
 */
final class Telegram
{
    public function __construct(private string $url, private string $text)
    {
    }

    public function __toString(): string
    {
        return 'https://t.me/share/?url=' . urlencode($this->url) . '&text=' . urlencode($this->text);
    }
}