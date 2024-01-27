<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Messages\WeWork;

use Guanguans\Notify\Messages\Message;

class MarkdownMessage extends Message
{
    protected string $type = 'markdown';

    /**
     * @var array<string>
     */
    protected array $defined = [
        'content',
    ];

    public function __construct(string $content)
    {
        parent::__construct([
            'content' => $content,
        ]);
    }

    /**
     * @return array<int|string, mixed>
     */
    public function transformToRequestParams(): array
    {
        return [
            'msgtype' => $this->type,
            $this->type => $this->getOptions(),
        ];
    }
}
