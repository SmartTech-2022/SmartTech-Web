<x-mail::message>
# Hello {{$user->name}}

_You've just being registered_ <br>
<h5>Voter's ID:</h5> {{$user->voter_id}}<br>
<h5>Password:</h5> {{$valid['password']}}

<x-mail::button :url="'https://smarttech.ictyepprojects.com/'">
Download Mobile App
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
