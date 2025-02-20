<?php

namespace App\Http\Controllers;
use App\Models\User; // Import the correct User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Shift;
use App\Models\Doctor;

use App\Models\Appointment;
use Exception; // Import Exception class



class DoctorController extends Controller {
      public function register()
      {
        $shifts = Shift::get();
        return view('register',compact('shifts'));
      }
      public function register_user(Request $request)
      {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:10',
            'shift' => 'required',
            'qualification' => 'string',
             // Ensure the date is today or later
        ]);

        try {
           
            Doctor::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'qualification' => $validatedData['qualification'],
                'shift_id' => $validatedData['shift'], // Ensure correct column name
            ]);

            return redirect()->route('index')->with('success', 'Appointment booked successfully.');
        } 
        catch (Exception $e) {
            \Log::error('Appointment Booking Error: ' . $e->getMessage()); // Log the error
            return redirect()->route('index')->with('error', 'Some error occurred.');
        }
    }
    public function login_user(Request $request)
    {
        try {
           
            $check=Doctor::where('email',$request->email)->where('password',Hash::make($request->password))->count();// Ensure correct column name
            // echo $check;die;
            if($check>0)
            {
                return redirect()->route('dashboard')->with('success', 'Login successfully.');
            }
            else{
            return redirect()->route('dashboard')->with('success', 'Appointment booked successfully.');
        } }
        catch (Exception $e) {
         
            return redirect()->back()->with('error', 'Some error occurred.');
        }
    }

    public function setLocale(Request $req) {
        session()->put('locale', $req->locale );
        return session()->get('locale');
    }

}

        

    

