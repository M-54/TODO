@component('mail::message')
# dear {{$user->name}}
thank you for register

@component('mail::button', ['url' => route('user.index', $user), 'color' => 'success'])
see users
@endcomponent

@component('mail::panel')
    This is the panel content.
@endcomponent


thank you,<br>
{{ config('app.name') }}
@endcomponent
