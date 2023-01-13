<x-mail::message>
# Hello {{$user->name}}

_You've just being registered_
{{$user->voter_id}}
{{$user->password}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
