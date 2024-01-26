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
 * @method \Guanguans\Notify\LarkGroupBot\Messages\PostMessage post($post)
 */
class PostMessage extends Message
{
    protected array $defined = [
        'post',
    ];

    protected array $allowedTypes = [
        'post' => 'array',
    ];

    /**
     * PostMessage constructor.
     */
    public function __construct(array $post)
    {
        parent::__construct(['post' => $post]);
    }

    protected function type(): string
    {
        return 'post';
    }
}
