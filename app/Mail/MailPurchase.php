<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Orders;
class MailPurchase extends Mailable
{
    use Queueable, SerializesModels;

    public $ordersMail;
    public $customer;
    public function __construct( $ordersMail,$customer)
    {
      $this->ordersMail = $ordersMail;
      $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.emails_purchase')->with([
          'ordersMail',$this->ordersMail,
          'customer',$this->customer
        ]);

    }
}
