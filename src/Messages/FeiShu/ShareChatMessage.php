<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Messages\FeiShu;

use Guanguans\Notify\Messages\Message;

class ShareChatMessage extends Message
{
    protected string $type = 'share_chat';

    /**
     * @var array<string>
     */
    protected array $defined = [
        'share_chat_id',
    ];

    public function __construct(string $shareChatId)
    {
        parent::__construct([
            'share_chat_id' => $shareChatId,
        ]);
    }

    /**
     * @return array{msg_type: mixed, content: array<mixed>}
     */
    public function transformToRequestParams(): array
    {
        return [
            'msg_type' => $this->type,
            'content' => $this->getOptions(),
        ];
    }
}
