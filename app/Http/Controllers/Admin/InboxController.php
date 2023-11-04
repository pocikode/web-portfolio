<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inbox;

class InboxController extends Controller
{
    public function index()
    {
        $messages = Inbox::orderBy('id', 'desc')->paginate(15);
        return view('admin.inbox', compact('messages'));
    }

    public function show($id)
    {
        $message = Inbox::findOrFail($id);
        if (!$message->is_read) {
//            dd($message);
            $message->update(['is_read' => 1]);
        }

        return view('admin.inbox_show', compact('message'));
    }
}
