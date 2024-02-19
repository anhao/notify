<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Pushover;

use Guanguans\Notify\Foundation\Authenticators\PayloadAuthenticator;
use GuzzleHttp\RequestOptions;

class Authenticator extends PayloadAuthenticator
{
    public function __construct(string $user, string $token)
    {
        parent::__construct(['user' => $user, 'token' => $token], RequestOptions::QUERY);
    }
}
