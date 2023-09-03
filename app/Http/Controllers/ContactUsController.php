<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddContactRequest;
use App\Models\ContactUs;
use Exception;
use Illuminate\Support\Facades\DB;
use App;

class ContactUsController extends Controller
{
    public function addcontact(AddContactRequest $request)
    {
        //   $validatedData = $request->validated();

        try {
            DB::beginTransaction();

            // Create a new user (patient)
            $patient = ContactUs::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);

            DB::commit();
            // Return the newly created patient
            $array=[
                'status' => 201,
                'data' => $patient,
                'message' => "Message added sussfully",
            ];
            return response($array,201);
            
        } catch (Exception $e) {
            DB::rollBack();
            $array=[
                'status' => 401,
                'data' => "",
                'message' => $e,
            ];
            return response($array,401);

        }
    }
}
