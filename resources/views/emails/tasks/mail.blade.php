@component('mail::message')
# {{$task->title}}

{{$task->description}}

@component('mail::button', ['url' => route('tasks.show', $task), 'color' => 'success'])
مشاهده تسک
@endcomponent

@component('mail::panel')
    This is the panel content.
@endcomponent

@component('mail::subcopy')
    این یک متن در ساب کپی است.
@endcomponent

@component('mail::table')
    | Laravel       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent

مرسی,<br>
{{ config('app.name') }}
@endcomponent
