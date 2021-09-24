<?php

namespace App\Observers;

use App\Jobs\TaskReminder;
use App\Mail\TaskCreatedMail;
use App\Models\Task;
use App\Notifications\SampleNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PharIo\Manifest\Email;

class TaskObserver
{

    public function creating(Task $task)
    {
        info("creating: " . $task->id);
        $task->title = $task->title . " " . "creating";
    }

    public function created(Task $task)
    {

        //$task->notify(new SampleNotification($task));
        dispatch(new TaskReminder($task));

//         $newdate = Carbon::parse($task->reminder);
//         $current = Carbon::now();
        $delay = $newdate->diffindays($current);
        $task->notify((new SampleNotification($task))->delay(now()->addDays($delay)));
        $task->notify((new SampleNotification($task))->delay(now()->addDays($delay -1)));
//        dispatch(new TaskReminder($task))
//            ->delay(now()->addWeek());


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

    public function forceDeleted(Task $task) {
        //info("forceDeleted " . $task);
        Storage::disk('s3')->delete($task->image);
    }
}
