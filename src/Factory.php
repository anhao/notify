<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify;

use Guanguans\Notify\Clients\Client;
use Guanguans\Notify\Support\Str;

/**
 * Class Factory.
 *
 * @method static \Guanguans\Notify\Clients\BarkClient           bark(array $options = [])
 * @method static \Guanguans\Notify\Clients\ChanifyClient        chanify(array $options = [])
 * @method static \Guanguans\Notify\Clients\DingTalkClient       dingTalk(array $options = [])
 * @method static \Guanguans\Notify\Clients\DiscordClient        discord(array $options = [])
 * @method static \Guanguans\Notify\Clients\FeiShuClient         feiShu(array $options = [])
 * @method static \Guanguans\Notify\Clients\GitterClient         gitter(array $options = [])
 * @method static \Guanguans\Notify\Clients\GoogleChatClient     googleChat(array $options = [])
 * @method static \Guanguans\Notify\Clients\IGotClient           iGot(array $options = [])
 * @method static \Guanguans\Notify\Clients\LoggerClient         logger(array $options = [])
 * @method static \Guanguans\Notify\Clients\MailerClient         mailer(array $options = [])
 * @method static \Guanguans\Notify\Clients\MattermostClient     mattermost(array $options = [])
 * @method static \Guanguans\Notify\Clients\MicrosoftTeamsClient microsoftTeams(array $options = [])
 * @method static \Guanguans\Notify\Clients\NowPushClient        nowPush(array $options = [])
 * @method static \Guanguans\Notify\Clients\NtfyClient           ntfy(array $options = [])
 * @method static \Guanguans\Notify\Clients\PushBackClient       pushBack(array $options = [])
 * @method static \Guanguans\Notify\Clients\PushClient           push(array $options = [])
 * @method static \Guanguans\Notify\Clients\PushDeerClient       pushDeer(array $options = [])
 * @method static \Guanguans\Notify\Clients\PushoverClient       pushover(array $options = [])
 * @method static \Guanguans\Notify\Clients\PushPlusClient       pushPlus(array $options = [])
 * @method static \Guanguans\Notify\Clients\QqChannelBotClient   qqChannelBot(array $options = [])
 * @method static \Guanguans\Notify\Clients\RocketChatClient     rocketChat(array $options = [])
 * @method static \Guanguans\Notify\Clients\ServerChanClient     serverChan(array $options = [])
 * @method static \Guanguans\Notify\Clients\ShowdocPushClient    showdocPush(array $options = [])
 * @method static \Guanguans\Notify\Clients\TelegramClient       telegram(array $options = [])
 * @method static \Guanguans\Notify\Clients\SlackClient          slack(array $options = [])
 * @method static \Guanguans\Notify\Clients\WebhookClient        webhook(array $options = [])
 * @method static \Guanguans\Notify\Clients\WeWorkClient         weWork(array $options = [])
 * @method static \Guanguans\Notify\Clients\XiZhiClient          xiZhi(array $options = [])
 * @method static \Guanguans\Notify\Clients\YiFengChuanHuaClient yiFengChuanHua(array $options = [])
 * @method static \Guanguans\Notify\Clients\ZulipClient          zulip(array $options = [])
 */
class Factory
{
    public static function make(string $name, array $options = []): Client
    {
        $client = sprintf('\\Guanguans\\Notify\\Clients\\%sClient', Str::studly($name));

        return new $client($options);
    }

    /**
     * @return Client
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
