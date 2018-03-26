@component('mail::message')


Contacto por Sitio Web High Power Brake

Se ha contactado la persona: {{ $request->name}} {{ $request->lastName}}<br>
Ciudad: {{$request->city}}<br>
Correo electrónico: {{$request->email}}<br>
Teléfono: {{$request->phone}}<br>
Mensaje: {{$request->message}}

@endcomponent