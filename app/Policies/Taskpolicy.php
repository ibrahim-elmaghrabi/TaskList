<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Taskpolicy
{
    use HandlesAuthorization;

     public function destroy(User $user , Task $task){
        return $user->id === $task->user_id ;
     }
}
