<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousekeepingController extends Controller
{
    /**
     * TODO: List housekeeping tasks with filters by status, room, and assignee.
     */
    public function index(Request $request)
    {
        // TODO: Query housekeeping tasks and return JSON.
    }

    /**
     * TODO: Create a housekeeping task for a room.
     */
    public function store(Request $request)
    {
        // TODO: Validate task details and create the task.
    }

    /**
     * TODO: Update housekeeping task status.
     */
    public function update(Request $request, $id)
    {
        // TODO: Validate status change and update the task.
    }
}
