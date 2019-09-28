<?php

namespace App\Observers;

use App\Complaint;

class ComplaintObserver
{
    /**
     * Handle the complaint "created" event.
     *
     * @param  \App\Complaint  $complaint
     * @return void
     */
    public function created(Complaint $complaint)
    {
        //
    }

    /**
     * Handle the complaint "updated" event.
     *
     * @param  \App\Complaint  $complaint
     * @return void
     */
    public function updated(Complaint $complaint)
    {
        $author = $item->user;
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new NewItem($comlaint,$author));
        }
    }

    /**
     * Handle the complaint "deleted" event.
     *
     * @param  \App\Complaint  $complaint
     * @return void
     */
    public function deleted(Complaint $complaint)
    {
        //
    }

    /**
     * Handle the complaint "restored" event.
     *
     * @param  \App\Complaint  $complaint
     * @return void
     */
    public function restored(Complaint $complaint)
    {
        //
    }

    /**
     * Handle the complaint "force deleted" event.
     *
     * @param  \App\Complaint  $complaint
     * @return void
     */
    public function forceDeleted(Complaint $complaint)
    {
        //
    }
}
