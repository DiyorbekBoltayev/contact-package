<x-mail::message>
# New Message
    From: {{$name}}
Message:
{{$message}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
