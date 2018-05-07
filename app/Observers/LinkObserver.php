<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/7
 * Time: 11:00
 */

namespace App\Observers;


use App\Models\Link;
use Illuminate\Support\Facades\Cache;

class LinkObserver
{
    // 在保存时清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}