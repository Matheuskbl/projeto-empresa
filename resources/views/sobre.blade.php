@extends('layouts.site')
@section('titulo', 'Sobre Nós')

@section('conteudo')
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Nossa História</h1>
            <p class="lead text-muted">Conheça os bastidores da TechCorp.</p>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h2 class="fw-bold text-primary">Inovação Constante</h2>
                <p class="text-muted">Desde 2020, trabalhamos com as stacks mais modernas como Laravel e Angular para entregar performance.</p>
            </div>
            <div class="col-lg-6">
                <img src="https://picsum.photos/600/250?random={{ rand(1, 1000) }}" class="rounded shadow-sm w-100" alt="Imagem Aleatória"style="height: 250px; object-fit: cover;">
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <img src="https://picsum.photos/600/250?random={{ rand(1, 1000) }}" class="rounded shadow-sm w-100" alt="Imagem Aleatória"style="height: 250px; object-fit: cover;">
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <h2 class="fw-bold text-primary">Cultura e Pessoas</h2>
                <p class="text-muted">Valorizamos o equilíbrio vida-trabalho e oferecemos plano de carreira transparente.</p>
            </div>
        </div>
    </div>
@endsection