<?php

namespace App\Http\Controllers;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class ContactMail extends Mailable
{
use Queueable, SerializesModels;
public $details;
/*
@return void
*/
public function _construct($details)
{
    $this->details=$details;
}
/**
*@return $this
*/
public function build()
{
    return $this->subject('Contact Message')->view('email.contactMail');
}
}
