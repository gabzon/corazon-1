@component('mail::message')

# Great news! Someone just registered to your {{ $registrable->type }}:
# {{ $registrable->name }}, on {{ $registrable->start_date->format('D d F Y') }}

Here is the information
- Name: {{ $user->name }}
- Gender: {{ $user->gender }}
- Email: {{ $user->email }}
- Phone: {{ $user->mobile }}


@component('mail::button',['url' => $url])
View registrations
@endcomponent

@endcomponent