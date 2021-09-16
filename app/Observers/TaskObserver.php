<?php

namespace App\Observers;

use App\Jobs\TaskReminder;
use App\Mail\TaskCreatedMail;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class TaskObserver
{

    public function creating(Task $task)
    {
        info("creating: " . $task->id);
        $task->title = $task->title . " " . "creating";
    }

    public function created(Task $task)
    {
        dispatch(new TaskReminder($task))
            ->delay(now()->addWeek());

//        $task->reminder_date->subDays(2);
//        $task->created_at->addDays(2);

//        Mail::to($task->user->email)
//            ->send(new TaskCreatedMail($task));

//        dispatch(new TaskReminder($task))
//            ->delay($task->due);

//        info("created: " . $task->id);
//        $task->update([
//            'title' => $task->title . " " . "created"
//        ]);
    }

//    public function created(Task $task) {
//        // $task->user->sendEmail("تسک ساخته شد."); # این روش تستی بود.
//    }
//
//    public function retrieved(Task $task) {
//        info("retrieved task id: " . $task->id);
//    }
}
