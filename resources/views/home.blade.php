@extends('layouts.site')
@section('titulo', 'Vagas')

@section('conteudo')
    <header class="bg-primary text-white py-5 mb-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Construa o Futuro</h1>
            <p class="lead">Confira nossas oportunidades e venha fazer parte do time.</p>
        </div>
    </header>

    <div class="container mb-5">
        <h2 class="mb-4 border-start border-4 border-primary ps-3">Vagas Abertas</h2>
        
        <div class="row g-4">
            @forelse($vagas as $vaga)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $vaga->titulo }}</h5>
                            <div class="mb-2">
                                <span class="badge bg-light text-dark border">{{ $vaga->tipo }}</span>
                            </div>
                            <p class="text-muted small flex-grow-1">
                                {{ Str::limit($vaga->descricao, 100) }}
                            </p>
                            <a href="{{ route('vaga.show', $vaga->id) }}" class="btn btn-outline-primary w-100 mt-3">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted">Nenhuma vaga encontrada.</div>
            @endforelse
        </div>
    </div>
@endsection