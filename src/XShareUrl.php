<?php

declare(strict_types=1);

namespace Nostadt\ShareUrl;


/**
 * X a.k.a. Twitter.
 *
 * @see https://twitter.com/
 */
final class XShareUrl implements \Stringable
{
    /**
     * @var array<string>
     */
    private array $hashTags = [];

    /**
     * @param array<string> $hashtags
     */
    public function __construct(
        private readonly string $url = '',
        private readonly string $text = '',
        array $hashtags = []
    ) {
        foreach ($hashtags as $hashtag)
        {
            if (!is_string($hashtag)) {
                throw new \InvalidArgumentException(\sprintf('Hashtag must be of type string. Got type: "%s"', $hashtag));
            }
            $this->hashTags[] = $hashtag;
        }
    }

    public function __toString(): string
    {
        $args = [];
        if ($this->url !== '') {
            $args['url'] = $this->url;
        }
        if ($this->text !== '') {
            $args['text'] = $this->text;
        }
        if (count($this->hashTags) > 0) {
            $args['hashtags'] = implode(',', $this->hashTags);
        }

        return 'https://twitter.com/share?' . http_build_query($args);
    }
}