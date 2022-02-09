<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl;

/**
 * @see https://faq.whatsapp.com/general/chats/how-to-use-click-to-chat
 * @see https://www.facebook.com/brand/resources/whatsapp/whatsapp-brand
 */
final class WhatsAppShareUrl
{
    public function __construct(private string $text)
    {
    }

    public function __toString(): string
    {
        return 'https://wa.me/?text=' . urlencode($this->text);
    }
}