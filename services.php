<?php
include 'menu.php';
?>

<style>
    body {
        background-color: #d8d4d2dd;
    }

    #header ul li a {
        color: white;
        text-decoration: none;
        /* tira os sublinhados */
    }

    #header.rolagem {
        background-color: #a1795d;
        padding: 0px 4%;
        /*  rgb(95, 90, 90); */
    }

    #header.rolagem a {
        color: white;
    }
</style>


<section class="foto-2">
    <h1 id="primeiro-2">
        <p id="segundo-2"> <b></b> </p>
    </h1>
</section>
<div class="container-fluid-2-2">
    <form>
        <div class="inline-block">

            <div class="service">

                <h1> <b> Services </b><br>
                    <p> new t-shirt </p>
                </h1>

            </div>
            <!-- Para fazer a imagem rodar : https://cursos.alura.com.br/forum/topico-com-fazer-uma-imagem-girar-com-o-css-147027 -->
            <!-- Usando modal, podemos fazer o efeito melhor e de uma forma mais fácil https://getbootstrap.com/docs/5.3/components/modal/#how-it-works -->
            <!-- Tenta depois com esse tmb: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_overlay_text -->
            <!-- Para fazer um bloco de apresentação: https://www.w3schools.com/howto/howto_css_profile_card.asp -->




            <!-- cards da parte de cima da página service -->


            <section class="d-flex" id="cards">

                <div class="card" id="card-1" style="width: 20rem;">
                    <div class="image-container">

                        <!-- imagem que fica na capa -->

                        <img src="img/blusas/girrasol.webp" class="card-img-top" id="img-x" alt="...">

                        <div class="card-body">
                            <h4 class="card-text" id="new"> <b> New ! </b> <br>
                                <p> new t-shirt </p>
                            </h4>
                            <div class="overlay">
                                <button type="button" class="btn btn-none" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" style="width: 30rem;">
                                    <!-- p que faz o overlay ou melhor, o modal -->
                                    <p> <b> Sunflower </b> </p>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog " style="height:40rem;">
                        <div class="modal-content">

                            <div class="modal-body p-3">
                                <!-- Carrousel do card1 -->



                                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/blusas/gira..defrente.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/blusas/gira..sozin.webp" class="d-block w-100" alt="...">
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>


                                    <h1 class="descricao"> Blusa Oversized " Sunflower " </h1>

                                    <h1 class="precos"> R$ 50,00 - A vista </h1>

                                    <center><button class="btn btn-primary" id="botao" name="comprar" type="submit"
                                            onclick="myFunction()"> COMPRAR </button></center>

                                           
                                    <script>

                                        function myFunction() {

                                            var count = 0;
                                            count += 1;
                                            alert("+" + count)

                                        }

                                    </script>


                                    <!-- <h1 class="descricao-2"> Descrição: Fabricada no Brasil <br> Tamanhos: G - GG - P - M </h1>-->



                                </div>


                            </div>

                        </div>
                    </div>
                </div>


                <!-- Modal do card 1, acima -->




                <div class="card" id="card-2" style="width: 20rem;">
                    <div class="image-container">

                        <!-- imagem que fica na capa -->

                        <img src="img/blusas/mamaco-defrente.webp" class="card-img-top" id="img-x" alt="...">

                        <div class="card-body">
                            <h4 class="card-text"> <b> New ! </b> <br>
                                <p> new t-shirt </p>
                            </h4>
                            <div class="overlay">
                                <button type="button" class="btn btn-none" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2" style="width: 30rem;">
                                    <!-- img que faz o overlay ou melhor, o modal -->
                                    <p> <b> Monkey </b> </p>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal -->

                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog " style="height:40rem;">
                        <div class="modal-content">

                            <div class="modal-body p-3">
                                <!-- Carrousel do card1 -->



                                <div id="carouselExampleFade2" class="carousel slide carousel-fade">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/blusas/mamaco-defrente.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/blusas/mamaco-marca.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/blusas/mamaco-partedetras.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/blusas/mamaco-fimdablusa.webp" class="d-block w-100" alt="...">
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>


                                    <h1 class="descricao"> Blusa oversized " This Monkey " </h1>

                                    <h1 class="precos"> R$ 50,00 - A vista </h1>

                                    <center><button class="btn btn-primary" id="botao" name="comprar" type="submit"
                                            onclick="myFunction()">COMPRAR</button></center>

                                    <script>

                                        var count = 0;
                                        function myFunction() {
                                            count += 1;
                                            alert("+" + count);
                                        }

                                    </script>

                                    <!-- <h1 class="descricao-2"> Descrição: Fabricada no Brasil <br> Tamanhos: G - GG - P - M </h1> -->


                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modal do card2, acima -->


                <div class="card" id="card-3" style="width: 20rem;">
                    <div class="image-container">

                        <!-- imagem que fica na capa -->

                        <img src="img/blusas/borboleta-frente.webp" class="card-img-top" id="img-x" alt="...">

                        <div class="card-body">
                            <h4 class="card-text"> <b> New ! </b> <br>
                                <p> my t-shirt </p>
                            </h4>
                            <div class="overlay">
                                <button type="button" class="btn btn-none" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3" style="width: 30rem;">
                                    <!-- img que faz o overlay ou melhor, o modal -->
                                    <p> <b> Butterfly </b> </p>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog " style="height:40rem;">
                        <div class="modal-content">

                            <div class="modal-body p-3">
                                <!-- Carrousel do card1 -->



                                <div id="carouselExampleFade3" class="carousel slide carousel-fade">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/blusas/borboleta-frente.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="img/blusas/borboleta-gola.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="img/blusas/borboleta-detras.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="img/blusas/borboleta-atras.webp" class="d-block w-100" alt="...">
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleFade3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>


                                    <h1 class="descricao"> Blusa oversized "Beautiful Wordl". </h1>

                                    <h1 class="precos"> R$ 80,00 - A vista </h1>

                                    <center><button class="btn btn-primary" id="botao" name="comprar" type="submit"
                                            onclick="myFunction()">COMPRAR</button></center>

                                    <script>

                                        var count = 0;
                                        function myFunction() {
                                            count += 1;
                                            alert("+" + count);
                                        }

                                    </script>
                                    <!-- <h1 class="descricao-2"> Descrição: Fabricada no Brasil <br> Tamanhos: G - GG - P - M </h1> -->


                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modal do card3, acima -->

            </section>





                <!-- cards da parte de baixo da página service -->

                <div class="debaixo">
                    <section class="d-flex" id="cards-2">

                        <div class="card" id="card-4" style="width: 20rem;">
                            <div class="image-container">

                                <!-- imagem que fica na capa -->

                                <img src="img/blusas/marrom-frente.webp" class="card-img-top" id="img-x" alt="...">

                                <div class="card-body">
                                    <h4 class="card-text"> <b> New ! </b> <br>
                                        <p> new t-shirt </p>
                                    </h4>
                                    <div class="overlay">
                                        <button type="button" class="btn btn-none" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal4" style="width: 30rem;">
                                            <!-- img que faz o overlay ou melhor, o modal -->
                                            <p> <b> Brown </b> </p>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog " style="height:40rem;">
                                <div class="modal-content">

                                    <div class="modal-body p-3">
                                        <!-- Carrousel do card1 -->



                                        <div id="carouselExampleFade4" class="carousel slide carousel-fade">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/marrom-frente.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/marrom-frentetmb.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/marrom-manga.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/marrom-detras.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>


                                            <h1 class="descricao"> Blusa oversized " Desert Adventure " </h1>

                                            <h1 class="precos"> R$ 80,00 - A vista </h1>

                                            <center><button class="btn btn-primary" id="botao" name="comprar"
                                                    type="submit" onclick="myFunction()">COMPRAR</button></center>

                                            <script>

                                                var count = 0;
                                                function myFunction() {
                                                    count += 1;
                                                    alert("+" + count);
                                                }

                                            </script>

                                            <!-- <h1 class="descricao-2"> Descrição: Fabricada no Brasil <br> Tamanhos: G - GG - P - M </h1> -->

                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Modal do card4, acima -->


                        <div class="card" id="card-5" style="width: 20rem;">
                            <div class="image-container">

                                <!-- imagem que fica na capa -->

                                <img src="img/blusas/sunshine-frente.webp" class="card-img-top" id="img-x" alt="...">

                                <div class="card-body">
                                    <h4 class="card-text"> <b> New ! </b> <br>
                                        <p> new t-shirt </p>
                                    </h4>
                                    <div class="overlay">
                                        <button type="button" class="btn btn-none" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal5" style="width: 30rem;">
                                            <!-- img que faz o overlay ou melhor, o modal -->
                                            <p> <b> Sunshine </b> </p>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->

                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog " style="height:40rem;">
                                <div class="modal-content">

                                    <div class="modal-body p-3">
                                        <!-- Carrousel do card1 -->



                                        <div id="carouselExampleFade5" class="carousel slide carousel-fade">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/sunshine-frente.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/sunshine-corpo.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/sunshine-manga.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/sunshine-atras2.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>

                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade5" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade5" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>


                                            <h1 class="descricao"> Blusa Oversized Sunshine </h1>

                                            <h1 class="precos"> R$ 80,00 - A vista </h1>

                                            <center><button class="btn btn-primary" id="botao" name="comprar"
                                                    type="submit" onclick="myFunction()">COMPRAR</button></center>

                                            <script>

                                                var count = 0;
                                                function myFunction() {
                                                    count += 1;
                                                    alert("+" + count);
                                                }

                                            </script>
                                            <!-- <h1 class="descricao-2"> Descrição: Fabricada no Brasil <br> Tamanhos: G - GG - P - M  </h1> -->




                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Modal do card5, acima -->

                        <div class="card" id="card-6" style="width: 20rem;">
                            <div class="image-container">

                                <!-- imagem que fica na capa -->

                                <img src="img/blusas/polo-frente.webp" class="card-img-top" id="img-x" alt="...">

                                <div class="card-body">
                                    <h4 class="card-text"> <b> New ! </b> <br>
                                        <p> new t-shirt </p>
                                    </h4>
                                    <div class="overlay">
                                        <button type="button" class="btn btn-none" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal6" style="width: 30rem;">
                                            <!-- img que faz o overlay ou melhor, o modal -->
                                            <p> <b> Pole </b> </p>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog " style="height:40rem;">
                                <div class="modal-content">

                                    <div class="modal-body p-3">
                                        <!-- Carrousel do card1 -->



                                        <div id="carouselExampleFade6" class="carousel slide carousel-fade">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/polo-frente.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/polo-gola.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img src="img/blusas/polo-detras.webp" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade6" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade6" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>


                                            <h1 class="descricao"> Blusa Oversized Forward </h1>

                                            <h1 class="precos"> R$ 80,00 - A vista </h1>

                                            <center><button class="btn btn-primary" id="botao" name="comprar"
                                                    type="submit" onclick="myFunction()">COMPRAR</button></center>

                                            <script>

                                                var count = 0;
                                                function myFunction() {
                                                    count += 1;
                                                    alert("+" + count);
                                                }

                                            </script>

                                            <!-- <h1 class="descricao-2"> Descrição: Fabricada no Brasil <br> Tamanhos: G - GG - P - M  </h1> -->



                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Modal do card6, acima -->

                    </section>

                </div>
            </div>
        </div>
    </form>
</div>


<?php
    include 'footer.php';
?>
