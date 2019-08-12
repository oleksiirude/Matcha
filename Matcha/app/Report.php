<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Report extends Model
    {
        protected $fillable = [
            'user',
            'reported',
            'date'
        ];

        public $timestamps = false;
    }
