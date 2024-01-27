<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Clients;

/**
 * @see https://api.slack.com/messaging/webhooks
 *
 * ```
 * curl --location --request POST 'https://hooks.slack.com/services/TPU9A9/B038KNUC/6pKH3vfa3mjlUP' \
 * --header 'Content-Type: application/x-www-form-urlencoded' \
 * --data-urlencode 'payload={"text": "This is  text"}'
 * ```
 */
class SlackClient extends Client
{
    protected string $requestMethod = 'postJson';

    /**
     * @var array<string>
     */
    protected array $defined = [
        'webhook_url',
        'message',
    ];

    public function getRequestUrl(): string
    {
        return $this->getWebhookUrl();
    }

    public function setWebhookUrl(string $webhookUrl): self
    {
        $this->setOption('webhook_url', $webhookUrl);

        return $this;
    }

    public function getWebhookUrl(): string
    {
        return $this->getOption('webhook_url');
    }
}
