<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ThanhToanHoaDonMail extends Mailable
{
    use Queueable, SerializesModels;

    public $bien_1;
    public $data;

    public function __construct($bien_1, $data)
    {
        $this->bien_1   = $bien_1;
        $this->data     = $data;
    }

    public function build()
    {
        return $this->subject("Thanh toán hóa đơn của Khách Sạn AAA")
            ->view('mail_thanh_toan_don_hang', ['bien_1' => $this->bien_1, 'data' => $this->data]);
    }
}
