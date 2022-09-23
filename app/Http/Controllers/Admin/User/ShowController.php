<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(User $user): View
    {
        $count = 0;
        foreach ($user->tasks as $task){
            if ($task->order->status_id == 3){
                $count += $task->order->book->outputInformation->publishing_sheets;
            }
        }
        return view('admin.user.show', compact('user', 'count'));
    }

}
