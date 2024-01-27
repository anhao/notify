<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Messages;

class PushDeerMessage extends Message
{
    /**
     * @var array<string>
     */
    protected array $defined = [
        'text',
        'desp',
        'type',
    ];

    /**
     * @var array<string>
     */
    protected array $required = [
        'text',
    ];

    public function __construct(string $text, string $desp = '', string $type = '')
    {
        parent::__construct([
            'text' => $text,
            'desp' => $desp,
            'type' => $type,
        ]);
    }
}
