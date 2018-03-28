@component('mail::message')
# Introduction

Welcome

@component('mail::button', ['url' => 'https://laracast.com'])
Start
@endcomponent

@component('mail::panel', ['url' => ''])
    Lorem ipsum dolar 100
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
