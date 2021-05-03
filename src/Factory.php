<?php

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify;

use Guanguans\Notify\Support\Str;

/**
 * Class Factory.
 *
 * @method static \Guanguans\Notify\Clients\ChanifyClient       chanify(array $config = [])
 * @method static \Guanguans\Notify\Clients\XiZhiClient         xiZhi(array $config = [])
 * @method static \Guanguans\Notify\Clients\ServerChanClient    serverChan(array $config = [])
 * @method static \Guanguans\Notify\Clients\BarkClient          bark(array $config = [])
 * @method static \Guanguans\Notify\Clients\DingTalkClient      dingTalk(array $config = [])
 * @method static \Guanguans\Notify\Clients\WeWorkClient        weWork(array $config = [])
 */
class Factory
{
    /**
     * @param $name
     *
     * @return mixed
     */
    public static function make($name, array $config = [])
    {
        $gateway = sprintf('\\Guanguans\\Notify\\Clients\\%sClient', Str::studly($name));

        return new $gateway($config);
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
