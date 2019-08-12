<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class ChatHistory extends Model {
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'sender',
            'recipient',
            'message',
            'date'
        ];
    
        public $timestamps = false;
    }
