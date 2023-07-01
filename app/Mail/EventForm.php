<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class EventForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Get the modal contact data to send via email
     *
     * @var Illuminate\Http\Request
     */
    protected $request;

    protected $country;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $country)
    {
        $this->request = $data;
        $this->country = $country;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contacto@nfit.app')
                    ->view('web.emails.contact')
                    ->with([
                        'event' => $this->request->event,
                        'name' => $this->request->name,
                        'email' => $this->request->email,
                        'box_center_name' => $this->request->box_center_name,
                        'city' => $this->request->city,
                        'students' => $this->request->students,
                        'phone' => $this->request->phone,
                        'country' => $this->country,
                    ]);
    }
}
