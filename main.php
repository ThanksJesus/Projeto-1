<?php
include 'menu.php';
?>

<style>
    #header ul li a {
        color: white;
        text-decoration: none;
        /* tira os sublinhados */
    }

    #header.rolagem {
        background-color: #7d8082;
        padding: 0px 4%;
        /*  rgb(95, 90, 90); */
    }

    #header.rolagem a {
        color: white;
    }
</style>

<section class="foto">
    <h1 id="primeiro"> Welcome the your <span> best store </span> <br>
        <p id="segundo"> Nice to meet you </p>
    </h1>
</section>

<!-- <section class="foto"> <h1 id="primeiro"> Welcome the your <span> best store </span> <br> <p id="segundo"> Nice to meet you </p> </h1></section> -->



<!--  3306 <img src="img/Black T-shirt with text Freedom (2).png" alt="Logo" width="100" height="120" class="d-inline-block align-text-top"> -->
<div class="container-fluid-5">
    <div class = "row">
        
        <div class="inline-block" id="texts">

            <div class="main">

                <h1> <b> Principles </b><br>
                    <p> our principles</p>
                </h1>

            </div>

            <div class="d-flex text-center">
                <div class="col-sm-4">
                    <div class="img-1">
                        <img src="img/3-removebg-preview.png" alt="">
                    </div>

                    <div class="text_1">
                        <p>Quando as pessoas trabalham juntas,
                            elas podem compartilhar ideias,
                            habilidades e conhecimentos
                            para alcançar um objetivo comum.
                            E esse é o nosso principal principio
                            na loja.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="img-2">
                        <img src="img/2-removebg-preview.png" alt="">
                    </div>

                    <div class="text_1">
                        <p>A programação é uma habilidade valiosa
                            e cada vez mais importante no mundo moderno.
                            Então, nós prezamos por estar sempre ligados
                            aos avanços, para que a nossa loja acompanhe
                            a maioria das mais novas tendências. </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="img-3">
                        <img src="img/1-removebg-preview.png" alt="">
                    </div>
                    <div class="text_1">
                        <p> A arte.
                            Como não falar do nosso maior amor,
                            que é fotografar e capturar momentos
                            inexplicaveis. Então, aqui na loja o uso de telefone
                            para esses momentos é totalmente permissivel e autorizado.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="descer"></div>

    <?php

include "footer.php";

?>