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
 * @method self text($text)
 * @method self parseMode($parseMode)
 * @method self entities(array $entities)
 * @method self disableWebPagePreview(bool $disableWebPagePreview)
 * @method self disableNotification(bool $disableNotification)
 * @method self protectContent(bool $protectContent)
 * @method self replyToMessageId($replyToMessageId)
 * @method self allowSendingWithoutReply(bool $allowSendingWithoutReply)
 * @method self replyMarkup(array $replyMarkup)
 */
class TextMessage extends Message
{
    protected array $defined = [
        'chat_id',
        'text',
        'parse_mode',
        'entities',
        'disable_web_page_preview',
        'disable_notification',
        'protect_content',
        'reply_to_message_id',
        'allow_sending_without_reply',
        'reply_markup',
    ];

    /**
     * @var array<array<\string>>
     */
    protected array $allowedValues = [
        'parse_mode' => ['HTML', 'Markdown', 'MarkdownV2'],
    ];

    protected array $allowedTypes = [
        'entities' => 'array',
        'disable_web_page_preview' => 'bool',
        'disable_notification' => 'bool',
        'protect_content' => 'bool',
        'allow_sending_without_reply' => 'bool',
        'reply_markup' => 'array',
    ];
}
