<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $layouts = [
            [
                'id' => 1,
                'titulo' => 'Bootstrap 4 + CSS',
                'descricao' => 'descricao',
                'codigo' => '
                <section class="chamada-sobre">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                                <div class="content">
                                    <small>
                                        TRABALHE DO SEU JEITO
                                    </small>

                                    <h2>
                                        O lugar onde você passa o dia deve ser um local inspirador!
                                    </h2>

                                    <div class="line"></div>

                                    <p>Ut consectetur! Elementum commodo quasi dignissim quam massa sed quae odit</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="./assets/images/chamada-home.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                .chamada-sobre {
                    padding: 40px 0;
                    padding-left: 30px;
                    position: relative;
                    z-index: 99999;
                  }
                  
                  .chamada-sobre img {
                    margin-top: -100px;
                  }
                  
                  @media (max-width: 992px) {
                    .chamada-sobre img {
                      margin-top: 30px;
                    }
                  }
                  
                  .chamada-sobre .content {
                    padding-right: 60px;
                    width: 550px;
                    /* .line {
                              background-color: #e1963e;
                              width: 50px;
                              height: 6px;
                              margin: 20px 0;
                              margin-left: -10px;
                              @media (max-width: 992px) {
                                  height: 3px;
                              }
                          } */
                  }
                  
                  @media (max-width: 992px) {
                    .chamada-sobre .content {
                      width: 100%;
                    }
                  }
                  
                  .chamada-sobre .content small {
                    text-transform: uppercase;
                    font-weight: 100;
                    font-size: 13px;
                  }
                  
                  .chamada-sobre .content h2 {
                    color: #271f1f;
                    font-size: 50px;
                  }
                  
                  .chamada-sobre .content p {
                    font-size: 15px;
                    font-weight: 300;
                  }
                ',
                'imagem' => 'modelo.png'
            ],
            [
                'id' => 2,
                'titulo' => 'Footer Bootstrap 4 + SASS',
                'descricao' => 'descricao',
                'codigo' => '
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <img src="./assets/images/logo.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-9 col-10">
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <strong>
                                            Sobre
                                        </strong>

                                        <ul>
                                            <li>
                                                <a href="sobre">
                                                    Conheça a inOffice
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contato">
                                                    Contato
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <strong>
                                            Planos
                                        </strong>

                                        <div class="d-flex">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        Ação
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Ideias
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Foco
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Empresarial
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        Ação
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Ideias
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Foco
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        Empresarial
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <strong>
                                            Unidades
                                        </strong>

                                        <ul>
                                            <li>
                                                <strong>Unidade Santa fé</strong> - R. Itiquira, 458 - Santa Fe <br>
                                                <strong>Unidade Santa fé</strong> - R. Itiquira, 458 - Santa Fe <br>
                                                <strong>Unidade Santa fé</strong> - R. Itiquira, 458 - Santa Fe
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 col-2">
                                <div class="redes">
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>

                                    <a href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>

                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <div class="line-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <h5>
                                    Será um prazer te conhecer!
                                </h5>

                                <a href="" class="btn-custom ml-4">
                                    Agende uma visita
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                footer {
                    margin-top: 30px;
                    background-color: #161918;
                    padding: 40px 0;
                    strong {
                        color: #e1963e;
                    }
                    ul {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                        padding-top: 10px;
                        color: white;
                        padding-right: 30px;
                        font-size: 14px;
                        li {
                            strong {
                                color: white;
                            }
                            a {
                                color: white;
                                font-size: 14px;
                                transition: 1s;
                                &:hover {
                                    color: #e1963e;
                                    text-decoration: none;
                                }
                            }
                        }
                    }
                    .redes {
                        display: flex;
                        flex-direction: column;
                        background-color: #111313;
                        width: 40px;
                        align-items: center;
                        padding: 10px 20px;
                        a {
                            font-size: 13px;
                            padding: 5px;
                            color: white;
                            transition: 1s;
                            &:hover {
                                color: #e1963e;
                            }
                        }
                    }
                }
                
                .line-end {
                    background-color: #0c0e0d;
                    padding: 35px 0;
                    h5 {
                        color: white;
                    }
                }
                
                .card {
                    border: 0;
                    background-color: transparent;
                    img {
                        margin: 0;
                        @media (max-width: 992px) {
                            width: 40px;
                        }
                    }
                    strong {
                        font-weight: bold;
                        font-size: 14px;
                    }
                    p {
                        font-size: 11px;
                    }
                }
                ',
                'imagem' => 'footer.png'
            ],
            [
                'id' => 3,
                'titulo' => 'Owl Carousel 2 + Sass',
                'descricao' => 'descricao',
                'codigo' => '
                <div class="espacos">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-12 d-flex justify-content-center">
                               <ul class="cabecalho-title">
                                   <li class="title">
                                       <h2>
                                           Nossos espaços
                                       </h2>
                                       <div class="line"></div>
                                   </li>
                            
                                   <li>
                                       <p>
                                           Ut consectetur! Elementum commodo quasi dignissim <br> quam massa sed quae odit voluptatum
                                           nibh
                                           aliquet
                                       </p>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
                            
                   <section class="slide-espacos">
                       <div class="container-fluid">
                            
                           <div class="part-orange-right">
                               <img src="./assets/images/right.png" alt="">
                           </div>
                           <div class="part-orange-left">
                               <img src="./assets/images/left.png" alt="">
                           </div>
                           <div class="container">
                               <div class="row">
                                   <div class="owl-theme owl-carousel" id="slide-espaco">
                                       <div class="item">
                                           <div class="content">
                                               <img src="./assets/images/espacos-saobento.png" class="img-fluid" alt="">
                                               <div class="text">
                                                   <h2>
                                                       São Bento
                                                   </h2>
                            
                                                   <small>CAMPO GRANDE - UNIDADE 01</small>
                                               </div>
                                           </div>
                                       </div>
                            
                                       <div class="item">
                                           <div class="content">
                                               <img src="./assets/images/espaco-2.png" class="img-fluid" alt="">
                                               <div class="text">
                                                   <h2>
                                                       Carandá Bosque
                                                   </h2>
                            
                                                   <small>CAMPO GRANDE - UNIDADE 02</small>
                                               </div>
                                           </div>
                                       </div>
                            
                                       <div class="item">
                                           <div class="content">
                                               <img src="./assets/images/espaco-2.png" class="img-fluid" alt="">
                                               <div class="text">
                                                   <h2>
                                                       Spaces
                                                   </h2>
                            
                                                   <small>CAMPO GRANDE - UNIDADE 03</small>
                                               </div>
                                           </div>
                                       </div>
                            
                                       <div class="item">
                                           <div class="content">
                                               <img src="./assets/images/espaco-2.png" class="img-fluid" alt="">
                                               <div class="text">
                                                   <h2>
                                                       Spaces
                                                   </h2>
                            
                                                   <small>CAMPO GRANDE - UNIDADE 03</small>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </section>
                </div>
                .espacos {
                    .slide-espacos {
                        position: relative;
                        .part-orange-right {
                            position: absolute;
                            right: 0;
                        }
                        .part-orange-left {
                            position: absolute;
                            left: 0;
                        }
                        .active {
                        }
                        .content {
                            position: relative;
                            display: flex;
                            //justify-content: center;
                            .text {
                                position: absolute;
                                bottom: 30px;
                                left: 30px;
                                color: white;
                                h2 {
                                    margin: 0;
                                    padding: 0;
                                }
                                small {
                                    font-size: 12px;
                                    font-weight: 100;
                                }
                            }
                        }
                    }
                }
                .owl-theme .owl-dots .owl-dot span {
                    background: #f0ede9;
                    height: 10px;
                    width: 10px;
                }
                
                .owl-theme .owl-dots .owl-dot.active span,
                .owl-theme .owl-dots .owl-dot:hover span {
                    background: #f4852e;
                    height: 10px;
                    width: 10px;
                }
                
                .cabecalho-title {
                    padding: 30px 0;
                    margin: 0;
                    list-style: none;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    @media (max-width: 992px) {
                        flex-direction: column;
                        margin: 0;
                        padding: 0;
                    }
                    li {
                        display: flex;
                        p {
                            font-size: 13px;
                            font-weight: 300;
                            padding-left: 10px;
                            @media (max-width: 992px) {
                                padding: 10px;
                            }
                        }
                    }
                
                    .title {
                        @media (max-width: 992px) {
                            display: flex;
                            flex-direction: column;
                        }
                        .line {
                            margin-top: 50px;
                            margin-left: -30px;
                            @media (max-width: 992px) {
                                margin-top: 0;
                                margin-left: auto;
                                display: flex;
                            }
                        }
                        h2 {
                            font-weight: bold;
                        }
                    }
                }
                ',
                'imagem' => 'carousel.png'
            ]
        ];

        return view('home')
        ->with('layouts', $layouts);
    }

}
