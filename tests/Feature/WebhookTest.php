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
use Guanguans\Notify\Messages\WebhookMessage;
use Guanguans\NotifyTests\TestCase;
use GuzzleHttp\Exception\ClientException;

class WebhookTest extends TestCase
{
    public function testWebhook(): void
    {
        $this->markTestSkipped(self::class.' is skipped.');

        $webhookMessage = WebhookMessage::create([
            'content' => 'This is content.',
            'username' => 'notify bot.',
        ])
            // ->setHeaders(['Accept' => '*/*'])
            // ->setQuery([['foo' => 'bar']])
            ->setVerify(false);

        $this->expectException(ClientException::class);

        Factory::webhook()
            ->setUrl('https://discord.com/api/webhooks/955407924304425000/o7RfCGxek_o8kfR6Q9iGKtTdRJ')
            // ->setRequestMethod('postJson')
            ->setMessage($webhookMessage)
            ->send();
    }
}
