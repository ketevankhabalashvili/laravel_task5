@component('mail::message')
    {{ $mail['title'] }}

    This is test mail!

    @component('mail::button', ['url' => $mail['url']])
        Click!
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
