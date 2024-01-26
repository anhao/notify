<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\WeWorkGroupBot\Messages;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @method \Guanguans\Notify\WeWorkGroupBot\Messages\NewsMessage articles($articles)
 */
class NewsMessage extends Message
{
    /**
     * @var string[]
     */
    protected $defined = [
        'articles',
    ];

    /**
     * @var array<string, string>
     */
    protected $allowedTypes = [
        'articles' => 'array',
    ];

    /**
     * @var array[]
     */
    protected array $options = [
        'articles' => [],
    ];

    public function __construct(array $articles = [])
    {
        parent::__construct([
            'articles' => $articles,
        ]);
    }

    protected function configureOptionsResolver(OptionsResolver $optionsResolver): OptionsResolver
    {
        return tap(parent::configureOptionsResolver($optionsResolver), static function (OptionsResolver $resolver): void {
            $resolver->setNormalizer('articles', static function (OptionsResolver $optionsResolver, array $value): array {
                return isset($value[0]) ? $value : [$value];
            });
        });
    }

    public function setArticles(array $articles): self
    {
        return $this->addArticles($articles);
    }

    public function addArticles(array $articles): self
    {
        foreach ($articles as $article) {
            $this->addArticle($article);
        }

        return $this;
    }

    public function setArticle(array $article): self
    {
        return $this->addArticle($article);
    }

    public function addArticle(array $article): self
    {
        $this->options['articles'][] = configure_options($article, static function (OptionsResolver $optionsResolver): void {
            $optionsResolver->setDefined([
                'title',
                'description',
                'url',
                'picurl',
            ]);
        });

        return $this;
    }

    protected function type(): string
    {
        return 'news';
    }
}
