@component('mail::message')

{{-- Greeting --}}
# @lang('Hello!')

You have new action!

<b>{{ $text }}</b>

@lang('Regards'),<br>{{ config('app.name') }} team

@endcomponent