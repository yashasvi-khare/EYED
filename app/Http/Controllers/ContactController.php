<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Store a new contact and send WhatsApp message.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
            'apointment_date' => 'required|date',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $contact = Contact::create($request->all());
        return $this->sendWhatsAppMessage($contact);
    }

    /**
     * Send WhatsApp message with appointment details.
     */
    private function sendWhatsAppMessage($contact)
    {
        $whatsappNumber = $contact->mobile_number;
        $message = urlencode("Hello {$contact->name}, your appointment is scheduled for {$contact->apointment_date}. Thank you!");
        // Using WhatsApp API (Click to Chat)
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$message}";
        return redirect()->away($whatsappUrl);
    }
}
