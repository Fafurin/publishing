<?php

namespace App\Observers\Admin;

use App\Models\Format;
use Illuminate\Support\Facades\Cache;

class FormatObserver
{
    /**
     * Handle the Format "created" event.
     *
     * @param  \App\Models\Format  $format
     * @return void
     */
    public function created(Format $format)
    {
        Cache::forget('formats');
    }

    /**
     * Handle the Format "updated" event.
     *
     * @param  \App\Models\Format  $format
     * @return void
     */
    public function updated(Format $format)
    {
        Cache::forget('formats');
    }

    /**
     * Handle the Format "deleted" event.
     *
     * @param  \App\Models\Format  $format
     * @return void
     */
    public function deleted(Format $format)
    {
        Cache::forget('formats');
    }

    /**
     * Handle the Format "restored" event.
     *
     * @param  \App\Models\Format  $format
     * @return void
     */
    public function restored(Format $format)
    {
        Cache::forget('formats');
    }

    /**
     * Handle the Format "force deleted" event.
     *
     * @param  \App\Models\Format  $format
     * @return void
     */
    public function forceDeleted(Format $format)
    {
        Cache::forget('formats');
    }
}
