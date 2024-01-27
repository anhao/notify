<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Messages\Chanify;

use Guanguans\Notify\Messages\Message;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TextMessage extends Message
{
    /**
     * @var array<string>
     */
    protected array $defined = [
        'title',
        'text',
        'copy',
        'actions',
        'autocopy',
        'sound',
        'priority',
    ];

    /**
     * @var array<array<\string>>
     */
    protected array $allowedTypes = [
        'actions' => ['string', 'array'],
    ];

    /**
     * @var array<mixed>
     */
    protected array $options = [
        'autocopy' => 0,
        'sound' => 0,
        'priority' => 10,
    ];

    protected function configureOptionsResolver(OptionsResolver $optionsResolver): OptionsResolver
    {
        return tap(parent::configureOptionsResolver($optionsResolver), static function (OptionsResolver $optionsResolver): void {
            $optionsResolver->setNormalizer('actions', static fn (OptionsResolver $optionsResolver, $value): array => (array) $value);
        });
    }
}
