<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Foundation\Credentials;

class TokenUriTemplateCredential extends UriTemplateCredential
{
    public const TEMPLATE = 'token';

    public function __construct(string $token)
    {
        parent::__construct([self::TEMPLATE => $token]);
    }
}
