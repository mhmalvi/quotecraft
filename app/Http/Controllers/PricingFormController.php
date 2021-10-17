<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetPricingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GetPricingMail;

class PricingFormController extends Controller
{
    public function GetPricing(GetPricingRequest $request)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'business_name' => $request->business_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'services' => $request->services,
            'outsourcing' => $request->outsourcing,
            'contact' => $request->contact,
            'info' => $request->info
        ];


        try {
            Mail::to('info@quadque.tech')->send(new GetPricingMail($data));

            return response()->json(['message' => 'success'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong. Please try again leter'], 503);
        }
    }
}
