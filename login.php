<link rel="stylesheet" href="../Projeto-Final/css/style.css">
<!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<section class="vh-100">
  <div class="container-fluid-5">
    <div class="row">
      <div class="col-sm-6 text-black" id="body">
        <!--
        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0" id="img"><a href="login.php"><img src="img/logo-removebg-preview.png" alt="Logo" width="200" height="220" style="margin-left:35px;" disabled></a></span>
        </div> -->

        <div class="d-flex align-items-center " id="login">

          <form style="width: 23rem; margin-top:70px;" action="banco_login.php" method="POST">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;" id="letra"> <b> Log in </b> </h3>

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example18" id="letra">Email address</label>
              <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" />
              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example28" id="letra">Password</label>
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="senha" />
              
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-light" type="submit">Login</button>
            </div>

          </form>
          
        </div>

        <div class="linha"></div>
        <p>Don't have an account? <a href="cadastro.php" class="link-cadastro" style=" color: black; ">Register here</a></p>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block ">
        <img src="img/casal-lateral.jpg" class="w-100 vh-100" style="object-fit: cover; object-position: right; ">
      </div>

    </div>
  </div>
</section>


<div class="col-4"></div>

