@extends('site.master')

@section('title', 'Contato')

@section('content')
    <h1>Contato</h1>

    <div>
        <form action="#">
            @csrf
            <div>
            Nome:
                <input type="text" name="nome" placeholder="Nome">
            </div>
            <div>
                Email:
                <input type="text" name="email" placeholder="Email">
            </div>
            <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
            <input type="submit" value="Enviar">
        </form>

    </div>
@endsection
