<?php

/*
 * This file is part of the Tinymeng/tencentyun-im.
 *
 * (c) Tinymeng<laravel_code@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tinymeng\Im\Facades;

use Illuminate\Support\Facades\Facade;

/****
 * Class IM
 *
 * @package Tinymeng\Im\Facades
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
     * @return \Tinymeng\Im\IM
     */
    public static function im(): \Tinymeng\Im\IM
    {
        return app('im');
    }
}
