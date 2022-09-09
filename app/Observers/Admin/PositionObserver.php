<?php

namespace App\Observers\Admin;

use App\Models\Position;
use Illuminate\Support\Facades\Cache;

class PositionObserver
{
    /**
     * Handle the Position "created" event.
     *
     * @param  \App\Models\Position  $position
     * @return void
     */
    public function created(Position $position)
    {
        Cache::forget('positions');
    }

    /**
     * Handle the Position "updated" event.
     *
     * @param  \App\Models\Position  $position
     * @return void
     */
    public function updated(Position $position)
    {
        Cache::forget('positions');
    }

    /**
     * Handle the Position "deleted" event.
     *
     * @param  \App\Models\Position  $position
     * @return void
     */
    public function deleted(Position $position)
    {
        Cache::forget('positions');
    }

    /**
     * Handle the Position "restored" event.
     *
     * @param  \App\Models\Position  $position
     * @return void
     */
    public function restored(Position $position)
    {
        Cache::forget('positions');
    }

    /**
     * Handle the Position "force deleted" event.
     *
     * @param  \App\Models\Position  $position
     * @return void
     */
    public function forceDeleted(Position $position)
    {
        Cache::forget('positions');
    }
}
