@component('mail::message')


Contacto por Sitio Web Importadora Dávila

Se ha contactado la persona: {{ $request->name}} {{ $request->lastName}}<br>
Correo electrónico: {{$request->email}}<br>
Teléfono: {{$request->phone}}<br>
Mensaje: {{$request->message}}

@endcomponent