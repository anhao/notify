<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\LarkGroupBot\Messages;

/**
 * @method \Guanguans\Notify\LarkGroupBot\Messages\TextMessage text($text)
 */
class TextMessage extends Message
{
    protected array $defined = [
        'text',
    ];

    protected function type(): string
    {
        return 'text';
    }
}
