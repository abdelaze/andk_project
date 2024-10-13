<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessagesController extends Controller
{
    public function index()
    {
        $datas   = ContactMessage::orderBy('id' , 'desc')->get();
        return view('admin.messages.index', compact('datas'));
    }
    public function toggleSeen($id)
    {
        $message = ContactMessage::find($id);

        if ($message->seen == 1){

            $message->seen = 0;
        }else{
            $message->seen = 1;
        }
        $message->save();

        $response = [
            'message' => __('message_done'),
            'status' => true,
        ];
        return $response;
    }
}
