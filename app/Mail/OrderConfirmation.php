<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use SerializesModels;

    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->view('user/order_confirmation')
            ->with([
                'professeur' => $this->order->professeur,
                'impression_type' => $this->order->impression_type,
                'filiere' => $this->order->filiere,
                'ncopies' => $this->order->ncopies,
                'format' => $this->order->format,
                'print_type' => $this->order->print_type,
                'color' => $this->order->color,
                'print_style' => $this->order->print_style,
                'datetime' => $this->order->datetime,
                'pdf_path' => $this->order->pdf_path,
                'original_pdf_name' => $this->order->original_pdf_name,
            ]);
    }
}
