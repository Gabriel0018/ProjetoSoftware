@extends('layouts.main_login')

@section('title', 'Bem Doces')

@section('content')
    <div class="container">
        <h1>Minha Conta</h1>
        <div class="row gx-3">
            <div class="col-4">
                <div class="list-group">
                    <a href="/cliente_dados.html" class="list-group-item list-group-item-action bg-danger text-light">
                        <i class="bi-person fs-6"></i> Dados Pessoais
                    </a>
                    <a href="/cliente_contatos.html" class="list-group-item list-group-item-action">
                        <i class="bi-mailbox fs-6"></i> Contatos
                    </a>
                    <a href="/cliente_endereco.html" class="list-group-item list-group-item-action">
                        <i class="bi-house-door fs-6"></i> Endereço
                    </a>
                    <a href="/cliente_pedidos.html" class="list-group-item list-group-item-action">
                        <i class="bi-truck fs-6"></i> Pedidos
                    </a>
                    <a href="/cliente_favoritos.html" class="list-group-item list-group-item-action">
                        <i class="bi-heart fs-6"></i> Favoritos
                    </a>
                    <a href="/cliente_senha.html" class="list-group-item list-group-item-action">
                        <i class="bi-lock fs-6"></i> Alterar Senha
                    </a>
                    <a href="/index.html" class="list-group-item list-group-item-action">
                        <i class="bi-door-open fs-6"></i> Sair
                    </a>
                </div>
            </div>
            <div class="col-8">
                <div class="form-floating mb-3">
                    <i class="bi-person fs-6"></i> Nome: <p id="nome"> </p>
                </div>
                <div class="form-floating mb-3 col-md-6 col-xl-4">
                    <i class="bi bi-file-text"></i> CPF: <p id="cpf"> </p>
                </div>
                <div class="form-floating mb-3 col-md-6 col-xl-4">
                    <i class="bi bi-calendar-week"></i> Data de Nascimento: <p id="dataNasc"> </p>
                </div>
            </div>
        </div>
    </div>
@endsection