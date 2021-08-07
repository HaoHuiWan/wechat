<?php

/*
 * This file is part of the zongu/laravel-wechat.
 *
 * (c) zongu <i@zongu.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Zongu\LaravelWeChat\Events\OpenPlatform;

/**
 * @method string getAppId()
 * @method string getCreateTime()
 * @method string getInfoType()
 * @method string getAuthorizerAppid()
 * @method string getAuthorizationCode()
 * @method string getAuthorizationCodeExpiredTime()
 * @method string getPreAuthCode()
 */
class UpdateAuthorized extends OpenPlatformEvent
{
}
