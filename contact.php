<?php

include "menu.php";

?>

<section class="foto-4"></section>

<style>

#body-comum {
    background-color: #B7967A ;
}
#header ul li a{
    color:white;
    text-decoration: none; /* tira os sublinhados */
}

#header.rolagem {
    background-color: #4c3335ad;
    padding: 0px 4%;
    /*  rgb(95, 90, 90); */
}

#header.rolagem a {
   color: rgb(255, 255, 255);
}


</style>
<div class="contact">

<section class="page-section" id="contact">

            <div class="container-fluid-4">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted"> Nos envie uma mensagem ! </h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="banco_contato.php" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="nome" name="nome" type="text" placeholder="Your Name *" data-sb-validations="required" required />
                                <div class="invalid-feedback" data-sb-feedback="nome:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" required />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="telefone" name="telefone" type="tel" placeholder="Your Phone *" data-sb-validations="required" required />
                                <div class="invalid-feedback" data-sb-feedback="telefone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Your Message *" data-sb-validations="required" required ></textarea>
                                <div class="invalid-feedback" data-sb-feedback="mensagem:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit Button-->

                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit">Send Message</button></div>
                </form>
                
            </div>
        </section>
</div>

<script src="js/scripts2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/style.css">

<?php

include "footer.php";

?>