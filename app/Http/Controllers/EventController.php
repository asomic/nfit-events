<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Misc\Country;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function landing($event)
    {
        $countries = Country::list();
        return view('events.'.$event, compact('countries'));
    }

    public function form($event, Request $request)
    {
        $request->validate([
            'event' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'box_center_name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'students' => 'required',
            'prefix' => 'required',
        ], [
            'event.required' => 'El evento es requerido',
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico no es válido',
            'phone.required' => 'El teléfono es requerido',
            'box_center_name.required' => 'El nombre del centro es requerido',
            'country.required' => 'El país es requerido',
            'city.required' => 'La ciudad es requerida',
            'students.required' => 'El número de estudiantes es requerido',
            'prefix.required' => 'El prefijo es requerido',
        ]);

        $country = \App\Models\System\Misc\Country::getCountryBycode($request->get('country'));

        // Send email with the information of the contact form
        Mail::to('lab@asomic.com')->send(new \App\Mail\System\Clients\EventForm($request, $country));

        // send slack notification
        // $message = 'Nuevo contacto desde evento ' . $request->event . ': ' . $request->name . ' - ' . $request->email;
        // Log::channel('web-contact-form')->info($message);

        return redirect()->route('web.events.landing', ['event' => $request->event])
                ->with('success', 'Gracias por tu interés, nos pondremos en contacto contigo a la brevedad.');
    }
}
