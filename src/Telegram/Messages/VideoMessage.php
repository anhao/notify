<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Telegram\Messages;

/**
 * @method self chatId($chatId)
 * @method self messageThreadId($messageThreadId)
 * @method self video($video)
 * @method self duration($duration)
 * @method self width($width)
 * @method self height($height)
 * @method self thumbnail($thumbnail)
 * @method self caption($caption)
 * @method self parseMode($parseMode)
 * @method self captionEntities($captionEntities)
 * @method self hasSpoiler($hasSpoiler)
 * @method self supportsStreaming($supportsStreaming)
 * @method self disableNotification($disableNotification)
 * @method self protectContent($protectContent)
 * @method self replyParameters($replyParameters)
 * @method self replyMarkup($replyMarkup)
 */
class VideoMessage extends Message
{
    protected array $defined = [
        'chat_id',
        'message_thread_id',
        'video',
        'duration',
        'width',
        'height',
        'thumbnail',
        'caption',
        'parse_mode',
        'caption_entities',
        'has_spoiler',
        'supports_streaming',
        'disable_notification',
        'protect_content',
        'reply_parameters',
        'reply_markup',
    ];

    protected array $options = [
        'caption_entities' => [],
    ];

    public function toHttpUri(): string
    {
        return 'bot{token}/sendVideo';
    }

    public function addCaptionEntity(array $captionEntity): self
    {
        $this->options['caption_entities'][] = $captionEntity;

        return $this;
    }
}
