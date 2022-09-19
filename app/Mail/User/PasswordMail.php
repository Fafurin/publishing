<?php

namespace App\Mail\User;

use Illuminate\Mail\Mailable;

class PasswordMail extends Mailable
{
    private $password;

    public function __construct($password)
    {
        $this->password = $password;
    }

    public function build()
    {
        $password = $this->password;
        return $this->markdown('mail.user.password', compact('password'));
    }
}
