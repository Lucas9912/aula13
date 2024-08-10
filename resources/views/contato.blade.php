@extends('layout')
@section('conteudo')

<h2 class="col-12 text-center">AGENDA</h2>

<p class="text-muted text-center">Para agendar informe seu nome e telefone</p>

<form action="" method="post" class="offset-md-3 col-md-6">
    <div class="mb-2 mx-3">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="nome">
    </div>
    <div class="mb-2 mx-3">
        <label class="form-label">Telefone</label>
        <input class="form-control" type="text" name="telefone">
    </div>

    <button type="submit" class="btn btn-success mx-3 mt-2">Agendar</button>
</form>

@endsection