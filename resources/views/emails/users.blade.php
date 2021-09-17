@component('mail::message')
# {{$user->name}}

به سایت ما خوش آمدید
جهت ورود به سایت دکمه زیر را کلیک کنید.

@component('mail::button', ['url' => route('auth.form.login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
