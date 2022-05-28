@extends('base.index')

@section('title', 'Home')

@section('content')

    <section class="page-section portfolio" id="portfolio">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Novos</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row justify-content-center">
                @forelse ($layouts as $layout)
                
                    <div class="col-md-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#layoutModal{{ $layout['id'] }}">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/images/' . $layout['imagem']) }}" alt="..." />
                        </div>
                    </div>

                    @include('base.modal')
                @empty
                <p> nenhum layout encontrado. </p>
                @endforelse

            </div>
        </div>
    </section>

    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            
            <h2 class="page-section-heading text-center text-uppercase text-white">VIP</h2>
            
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead"></p>
                </div>
            </div>
        </div>
    </section>

@stop


