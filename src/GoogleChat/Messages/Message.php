<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\GoogleChat\Messages;

use Guanguans\Notify\Foundation\Concerns\AsJson;
use Guanguans\Notify\Foundation\Concerns\AsPost;

/**
 * @method \Guanguans\Notify\GoogleChat\Messages\Message text($text)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message cards(array $cards)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message name($name)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message sender(array $sender)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message createTime($createTime)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message lastUpdateTime($lastUpdateTime)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message previewText($previewText)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message annotations(array $annotations)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message thread(array $thread)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message space(array $space)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message fallbackText($fallbackText)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message actionResponse(array $actionResponse)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message argumentText($argumentText)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message slashCommand(array $slashCommand)
 * @method \Guanguans\Notify\GoogleChat\Messages\Message attachment(array $attachment)
 */
class Message extends \Guanguans\Notify\Foundation\Message
{
    use AsJson;
    use AsPost;

    protected array $defined = [
        'text',
        'cards',
        'name',
        'sender',
        'createTime',
        'lastUpdateTime',
        'previewText',
        'annotations',
        'thread',
        'space',
        'fallbackText',
        'actionResponse',
        'argumentText',
        'slashCommand',
        'attachment',
    ];

    protected array $allowedTypes = [
        'cards' => 'array',
        'sender' => 'array',
        'annotations' => 'array',
        'thread' => 'array',
        'space' => 'array',
        'actionResponse' => 'array',
        'slashCommand' => 'array',
        'attachment' => 'array',
    ];

    public function toHttpUri(): string
    {
        return 'https://chat.googleapis.com/v1/spaces/{spaceId}/messages';
    }
}
