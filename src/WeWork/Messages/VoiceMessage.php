<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\WeWork\Messages;

/**
 * @method self mediaId($mediaId)
 */
class VoiceMessage extends Message
{
    protected array $defined = [
        'media_id',
    ];

    protected function type(): string
    {
        return 'voice';
    }
}
