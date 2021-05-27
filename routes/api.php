<?php

use App\Http\Resources\UpcomingTaskResource;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// ** UPCOMING TASK **//


//Get all the upcoming task
Route::get("/upcoming", function(){

        $upcoming = Upcoming::all();

        return UpcomingTaskResource::collection($upcoming);
});


//Add a new task

Route::post('/upcoming', function (Request $request) {


        return Upcoming::create([


            'title' =>  $request->title,
            'taskID' => $request->taskID,
            'waiting' => $request->waiting

        ]);    
    
});

//Delete upcoming task

Route::delete('/upcoming/{taskID}', function($taskID){


            DB::table('upcomings')->where('taskID', $taskID)->delete();

            return 204;

});



// ** Today Task ** //








