<?php

namespace App\Http\Controllers;

use App\Http\Requests\Front\ContactUs\StoreRequest;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessagesController extends Controller
{
    public function store(StoreRequest $request) {

        ContactMessage::create([
            'full_name'       => $request->full_name,
            'mobile_number'   => $request->mobile_number,
            'email'           => $request->email,
            'identity_number' => $request->identity_number,
            'bank_iban'       => $request->bank_iban,
            'bank_name'       => $request->bank_name,
            'city'            => $request->city,
            'stocks'          => $request->stocks,
            'notes'           => $request->notes,
        ]);

        return redirect()->back()->with('success', 'تم إرسال طلبك بنجاح');
    }
}
