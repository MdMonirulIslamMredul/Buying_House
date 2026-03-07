<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        return view('admin.contact_message.index', [
            'messages' => ContactMessage::latest()->get(),
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1',
        ]);

        $message = ContactMessage::findOrFail($id);

        if ((int) $request->status === ContactMessage::STATUS_READ) {
            $message->markAsRead();
        } else {
            $message->markAsUnread();
        }

        return back()->with('message', 'Message status updated successfully');
    }
}
