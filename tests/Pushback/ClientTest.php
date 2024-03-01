<?php

/** @noinspection StaticClosureCanBeUsedInspection */
/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\NotifyTests\Pushback;

use Guanguans\Notify\Pushback\Authenticator;
use Guanguans\Notify\Pushback\Client;
use Guanguans\Notify\Pushback\Messages\Message;
use Guanguans\Notify\Pushback\Messages\SyncMessage;

beforeEach(function (): void {
    $authenticator = new Authenticator('at_b33c2bFrKAPmQr5-BaG');
    $this->client = (new Client($authenticator))->mock([
        create_response('0'),
        create_response('This is reply message.'),
        create_response(
            <<<'error'
                {
                  "errors": [
                    {
                      "message": "Unauthorized: Invalid access token"
                    }
                  ]
                }
                error
            ,
            401
        ),
    ]);
});

it('can send message', function (): void {
    $message = Message::make([
        'id' => 'User_1730',
        'title' => 'This is title.',
        'body' => 'This is body.',
        'action1' => 'This is action1.',
        'action2' => 'This is action2.',
        'reply' => 'This is reply.',
    ]);

    expect($this->client)->assertCanSendMessage($message);
})->group(__DIR__, __FILE__);

it('can send sync message', function (): void {
    $syncMessage = SyncMessage::make([
        'id' => 'User_1730',
        'title' => 'This is title.',
        'body' => 'This is body.',
        'action1' => 'This is action1.',
        'action2' => 'This is action2.',
        'reply' => 'Please reply me.',
    ]);

    expect($this->client)->assertCanSendMessage($syncMessage);
})->group(__DIR__, __FILE__);
