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
use Guanguans\NotifyTests\TestCase;
use GuzzleHttp\Exception\ClientException;

/**
 * @internal
 *
 * @small
 */
class ZulipTest extends TestCase
{
    public function testPrivate(): void
    {
        $this->expectException(ClientException::class);

        Factory::zulip()
            ->setToken('Mc0b7YBmibOVjLdk7KKSpT9SJLi1h')
            ->setEmail('798314049@qq.com')
            ->setBaseUri('https://coole.zulipchat.com')
            ->setMessage(new \Guanguans\Notify\Messages\Zulip\PrivateMessage('798314049@qq.com', 'This is testing.'))
            ->send();
    }

    public function testStream(): void
    {
        $this->expectException(ClientException::class);

        Factory::zulip()
            ->setToken('Mc0b7YBmibOVjLdk7KKSpT9SJLi1h')
            ->setEmail('798314049@qq.com')
            ->setBaseUri('https://coole.zulipchat.com')
            ->setMessage(new \Guanguans\Notify\Messages\Zulip\StreamMessage([
                'to' => 'coole',
                'content' => 'This is testing.',
                'topic' => 'bug',
                'queue_id' => '1593114627:0',
                'local_id' => '100.01',
            ]))
            ->send();
    }
}
