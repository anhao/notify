<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Discord;

use Guanguans\Notify\Foundation\Credentials\UriTemplateCredential;

class Credential extends UriTemplateCredential
{
    public function __construct(string $threadId, string $token)
    {
        parent::__construct(['threadId' => $threadId, 'token' => $token]);
    }
}
