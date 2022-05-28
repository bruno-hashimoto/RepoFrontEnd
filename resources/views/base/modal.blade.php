 <!-- Portfolio Modal 1-->
 <div class="portfolio-modal modal fade" id="layoutModal{{ $layout['id'] }}" tabindex="-1"
     aria-labelledby="portfolioModal1" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                     aria-label="Close"></button></div>
             <div class="modal-body text-center pb-5">
                 <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-lg-8">
                             <!-- Portfolio Modal - Title-->
                             <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                 {{ $layout['titulo'] }}
                             </h2>

                             <!-- Icon Divider-->
                             <div class="divider-custom">
                                 <div class="divider-custom-line"></div>
                                 <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                 <div class="divider-custom-line"></div>
                             </div>

                             <div class="row">
                                 <div class="col-md-12 mb-3">
                                     <img class="img-fluid"
                                         src="{{ asset('assets/images/' . $layout['imagem']) }}" alt="..." />
                                 </div>
                                 <div class="col-md-12">
                                     <code>
                                         {{ $layout['codigo'] }}
                                     </code>
                                 </div>
                             </div>
                             <code>
                             </code>

                             <br>
                             <br>

                             <button class="btn btn-primary" data-bs-dismiss="modal">
                                 <i class="fas fa-xmark fa-fw"></i>
                                 Fechar janela
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
