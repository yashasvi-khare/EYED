<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Exception; // Import Exception class

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_number' => 'required|string|max:10',
            'doctor_name' => 'required|string|max:255',
            'message' => 'nullable|string',
            'appointment_date' => 'required|date', // Ensure the date is today or later
        ]);

        try {
            // Convert date format
            $appointmentDate = date('Y-m-d', strtotime($validatedData['appointment_date']));

            // Insert data into database
            Appointment::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'mobile_number' => $validatedData['mobile_number'],
                'doctor_name' => $validatedData['doctor_name'],
                'message' => $validatedData['message'] ?? null, // Handle null case
                'apointment_date' => $appointmentDate, // Ensure correct column name
            ]);

            return redirect()->route('index')->with('success', 'Appointment booked successfully.');
        } 
        catch (Exception $e) {
            \Log::error('Appointment Booking Error: ' . $e->getMessage()); // Log the error
            return redirect()->route('index')->with('error', 'Some error occurred.');
        }
    }
}
