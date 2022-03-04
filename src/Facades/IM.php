<?php

/*
 * This file is part of the tinymeng/tencentyun-im.
 *
 * (c) tinymeng<laravel_code@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace tinymeng\TenIm\Facades;

use Illuminate\Support\Facades\Facade;

/****
 * Class IM
 *
 * @package tinymeng\TenIm\Facades
 */
class IM extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor(): string
    {
        return 'im';
    }

    /**
     * Return the facade accessor.
     *
     * @return \tinymeng\TenIm\IM
     */
    public static function im(): \tinymeng\TenIm\IM
    {
        return app('im');
    }
}
