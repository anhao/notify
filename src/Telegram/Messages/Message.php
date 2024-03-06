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

use Guanguans\Notify\Foundation\Concerns\AsMultipart;

abstract class Message extends \Guanguans\Notify\Foundation\Message
{
    use AsMultipart;
}
