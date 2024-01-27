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

class BarkMessage extends Message
{
    /**
     * @var array<string>
     */
    protected array $defined = [
        'title',
        'body',
        'copy',
        'url',
        'sound',
        'icon',
        'group',
        'level',
        'badge',
        'isArchive',
        'autoCopy',
        'automaticallyCopy',
    ];

    /**
     * @var array<string>
     */
    protected array $allowedTypes = [
        'badge' => 'int',
        'isArchive' => 'int',
        'autoCopy' => 'int',
        'automaticallyCopy' => 'int',
    ];

    /**
     * @var array<array<\string>>
     */
    protected array $allowedValues = [
        'level' => ['active', 'timeSensitive', 'passive'],
    ];

    protected array $options = [
        // 'sound' => 'bell',
        // 'isArchive' => 1,
        // 'autoCopy' => 1,
        // 'automaticallyCopy' => 1,
    ];

    /**
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->setOption('title', $title);

        return $this;
    }

    /**
     * @return $this
     */
    public function setText(string $text): self
    {
        $this->setOption('text', $text);

        return $this;
    }

    /**
     * @return $this
     */
    public function setCopy(string $copy): self
    {
        $this->setOption('copy', $copy);

        return $this;
    }

    /**
     * @return $this
     */
    public function setUrl(string $url): self
    {
        $this->setOption('url', $url);

        return $this;
    }

    /**
     * @return $this
     */
    public function setSound(string $sound): self
    {
        $this->setOption('sound', $sound);

        return $this;
    }

    /**
     * @return $this
     */
    public function setIsArchive(int $isArchive): self
    {
        $this->setOption('isArchive', $isArchive);

        return $this;
    }

    /**
     * @return $this
     */
    public function setAutomaticallyCopy(int $automaticallyCopy): self
    {
        $this->setOption('automaticallyCopy', $automaticallyCopy);

        return $this;
    }
}
