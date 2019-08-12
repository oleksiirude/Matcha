<?php
    
    namespace App\Mail;
    
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Contracts\Queue\ShouldQueue;
    
    class EmailNotification extends Mailable implements ShouldQueue
    {
        use Queueable, SerializesModels;
        
        public $text;
        
        /**
         * Create a new message instance.
         *
         * @return void
         */
        public function __construct($text) {
            $this->text = $text;
        }
        
        /**
         * Build the message.
         *
         * @return $this
         */
        public function build() {
            return $this->markdown('vendor.notifications.notification')
                ->with(['text' => $this->text]);
        }
    }