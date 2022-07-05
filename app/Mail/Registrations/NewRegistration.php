<?php

namespace App\Mail\Registrations;

use App\Contracts\Registrable;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRegistration extends Mailable
{
    use Queueable, SerializesModels;
    public User $user;
    public Registrable $registrable;
    public String $basename;
    public String $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Registrable $registrable)
    {
        $this->user = $user;
        $this->registrable = $registrable;
        $this->basename = strtolower(class_basename($registrable));
        $this->url = route($this->basename . '.dashboard', $this->registrable);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.new-registration');
    }
}
