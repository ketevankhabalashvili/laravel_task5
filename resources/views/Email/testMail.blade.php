@component('mail::message')
    {{ $mailInfo['title'] }}

    This is test mail!

    @component('mail::button', ['url' => $mailInfo['url']])
        Click!
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent