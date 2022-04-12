@component('mail::message')
Olá, Você recebeu um novo contato a partir do seu site!

Nome: <b>{{$reply_name}}</b>

Email: {{$reply_email}}

Telefone: {{$telefone}}

Sobre: {{$subject}}


@component('mail::panel')
Mensagem: {{$mensage}}
@endcomponent

@endcomponent