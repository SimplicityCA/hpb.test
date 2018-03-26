@component('mail::message')


Conviértete en Cliente High Power Brake

Se ha contactado la persona: {{ $request->name}} {{ $request->lastName}}<br>
CI o Ruc: {{$request->ruc}}<br>
@if($request->storeName)
Nombre del Almacén: {{$request->storeName}}<br>
@endif
Ciudad: {{$request->city}}<br>
Dirección: {{$request->address}}<br>
Correo electrónico: {{$request->email}}<br>
Teléfono: {{$request->phone}}<br>
Mensaje: {{$request->message}}

@endcomponent