@extends('layouts.main') {{-- Chama o Layout criado no caso o main --}}
@section('title', 'Etiqueta Livre') {{-- Define o Titulo da Pagina --}}
@section('content') {{-- Define o conteudo da pagina --}}


    <style>
        /* Adicione estilos conforme necessário para as setas */
        .arrow {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: white;
            background-color: black;
            padding: 10px;
            border-radius: 50%;
            z-index: 2;
        }

        .arrow-left {
            left: 10px;
        }

        .arrow-right {
            right: 10px;
        }
    </style>

    <div class="descontos">
        <p>
        <h1>DESCONTOS DO DIA</h1>
        </p>
        <p><span style="font-size: 35px;">Tempo de Oferta:</span><span id="timer" style="font-size: 30px;">30:00</span></p>
    </div>

    <div class="container">
        <input type="radio" name="slider" class="d-none" id="s1" checked>
        <input type="radio" name="slider" class="d-none" id="s2">
        <input type="radio" name="slider" class="d-none" id="s3">
        <input type="radio" name="slider" class="d-none" id="s4">
        <input type="radio" name="slider" class="d-none" id="s5">
        <input type="radio" name="slider" class="d-none" id="s6">
        <input type="radio" name="slider" class="d-none" id="s7">

        <div class="cards">
            <label for="s1" id="slide1">
                <div class="card">
                    <div class="image">
                        <img src="/img/AFelicidadeComeçaComVoce.png" alt="">
                        <div class="dots">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <a class="btn-contact" id="buyButton" href="/contacts">Comprar</a>
                    <div class="socials">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </label>

            <label for="s2" id="slide2">
                <div class="card">
                    <div class="image">
                        <img src="img/YouTube.jpg" alt="">
                        <div class="dots">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                        </div>
                    </div>
                    <a class="btn-contact" id="buyButton" href="/contacts">Comprar</a>
                    <div class="socials">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </label>

            <label for="s3" id="slide3">
                <div class="card">
                    <div class="image">
                        <img src="img/jpg.jpg" alt="">
                        <div class="dots">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                        </div>
                    </div>
                    <a class="btn-contact" id="buyButton" href="/contacts">Comprar</a>
                    <div class="socials">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </label>

            <label for="s4" id="slide4">
                <div class="card">
                    <div class="image">
                        <img src="img/na sua vida.jpg" alt="">
                        <div class="dots">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                        </div>
                    </div>
                    <a class="btn-contact" id="buyButton" href="/contacts">Comprar</a>
                    <div class="socials">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </label>

            <label for="s5" id="slide5">
                <div class="card">
                    <div class="image">
                        <img src="img/Segredos.jpg" alt="">
                        <div class="dots">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                        </div>
                    </div>

                    <a class="btn-contact" id="buyButton" href="/contacts">Comprar</a>
                    <div class="socials">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </label>
            <label for="s6" id="slide6">
                <div class="card">
                    <div class="image">
                        <img src="img/Zero.jpg" alt="">
                        <div class="dots">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                        </div>
                    </div>

                    <a class="btn-contact" id="buyButton" href="/contacts">Comprar</a>
                    <div class="socials">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </label>
            <label for="s7" id="slide7">
                <div class="card">
                    <div class="image">
                        <img src="img/Ansiedade.jpg" alt="">
                        <div class="dots">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                        </div>
                    </div>

                    <a class="btn-contact" id="buyButton" href="/contacts">Comprar</a>
                    <div class="socials">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                </div>
            </label>
        </div>


    </div>

    <!-- Adicione a biblioteca jQuery -->





    <div class="relative">

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/AFelicidadeComeçaComVoce.png" alt=""></div>
                <div class="swiper-slide"><img src="./img/alimentacao.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/vida simplificada.png" alt=""></div>
                <div class="swiper-slide"><img src="./img/autoridade youtube.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/compreendendo autismo.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/copywriter.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/detox.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/do zero.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/falar em palco.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/insta ads.jpg" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
       <br>
    <div class="relative">

      <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./img/marketing atracao.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/marketing digital.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/marketing starter.png" alt=""></div>
            <div class="swiper-slide"><img src="./img/na sua vida.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/objetivos em realidade.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/persuasao.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/produtividade.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/segredos atracao.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/Segredos.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/sucesso online.jpg" alt=""></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
      </div>

  </div>





    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="path-to-the-file/splide.min.js"></script>
    <link rel="stylesheet" href="url-to-cdn/splide.min.css">
    <script src="{{ asset('js/java.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>




        <div class="pacote">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title neon-text-basico">Pacote Basico</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="https://mpago.la/11fwdsi" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title neon-text-vip">Pacote VIP</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card bg-dark" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title neon-text-premium">Pacote Premium</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>


@endsection {{-- Determina o fim da Section de Conteudo da Pagina --}}
