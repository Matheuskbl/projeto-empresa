@extends('layouts.site')
@section('titulo', $vaga->titulo)

@section('conteudo')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        <strong>Sucesso!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <a href="{{ route('home') }}" class="text-decoration-none text-muted">&larr; Voltar</a>
                <h1 class="fw-bold mt-2">{{ $vaga->titulo }}</h1>
                <span class="badge bg-primary mb-4">{{ $vaga->tipo }}</span>
                
                <div class="py-4 border-top">
                    <h4>Descrição</h4>
                    <p class="text-muted">{!! nl2br(e($vaga->descricao)) !!}</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm border-0 sticky-top" style="top: 20px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Candidatar-se</h5>
                        
                        <form action="{{ route('vagas.candidatar', $vaga->id) }}" method="POST">
                          @csrf  <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                                <label for="nome">Nome Completo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="descricao">
                                <label for="descricao">Descreva sua experiência profissional</label>
                            </div>
                            <button class="btn btn-primary w-100 fw-bold">Enviar Currículo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection