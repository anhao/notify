<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\NotifyTests\Feature;

use Guanguans\Notify\Factory;
use Guanguans\Notify\Messages\Telegram\TextMessage;
use Guanguans\NotifyTests\TestCase;
use GuzzleHttp\Exception\ClientException;

/**
 * @internal
 *
 * @small
 */
class TelegramTest extends TestCase
{
    public function testgetUpdates(): void
    {
        $this->markTestSkipped(self::class.' is skipped.');

        $this->expectException(ClientException::class);

        Factory::telegram()
            ->setToken('5146570:AAF-Pi1MBPa46wdyobfZZdZL1-PlDfrZ')
            ->getUpdates();
    }

    public function testText(): void
    {
        $this->markTestSkipped(self::class.' is skipped.');

        $textMessage = TextMessage::create([
            'chat_id' => 5044341,
            'text' => '*This is text*',
            'parse_mode' => 'MarkdownV2',
            'entities' => [],
            'disable_web_page_preview' => true,
            'disable_notification' => true,
            'protect_content' => true,
            'reply_to_message_id' => 5,
            'allow_sending_without_reply' => true,
            'reply_markup' => [],
        ]);

        $this->expectException(ClientException::class);

        Factory::telegram()
            ->setToken('5146570:AAF-Pi1MBPa46wdyobfZZdZL1-PlDfrZ')
            ->setMessage($textMessage)
            ->send();
    }
}
