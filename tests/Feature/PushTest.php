<?php

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Tests\Feature;

use Guanguans\Notify\Factory;
use Guanguans\Notify\Tests\TestCase;

class PushTest extends TestCase
{
    public function testPush()
    {
        $this->expectException(\GuzzleHttp\Exception\ClientException::class);

        $this->markTestSkipped(__CLASS__.' is skipped.');

        Factory::push()
            ->setToken('5db80e8a-1f9b-4f98-929a-75892cedc')
            ->setMessage(
                new \Guanguans\Notify\Messages\PushMessage([
                    'title' => 'This is a title.',
                    'body' => 'This is a body.',
                    // 'link' => 'https://github.com/guanguans/notify',
                    // 'image' => 'https://www.nowpush.app/assets/img/welcome/welcome-mockup.png',
                ])
            )
            ->send();
    }
}
