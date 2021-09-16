<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Solar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<!--Aqui esta la barra de navegacion-->
<nav class="navbar navbar-expand-lg navbar-light mt-3" style="background-color: #86E3CE;">
    <div class="container">
        <div class="row mt-3">
          <a class="navbar-brand" href="/">SISTEMA SOLAR</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="/mercurio">Mercurio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/venus">Venus</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/tierra">Tierra</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/marte">Marte</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/jupiter">Jupiter</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/saturno">Saturno</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/urano">Urano</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/neptuno">Neptuno</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/pluton">Pluton</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/sol">Sol</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/luna">Luna</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/cometas">Cometas</a>
                  </li>
              </ul>
          </div>
        </div>
    </div>
  </nav>


  <!--Aqui esta el logo-->
<header class="container-fluid">
    <div class="row" style="height: 450px; background: -webkit-radial-gradient(pink, mediumaquamarine, violet);">
        <div class="col-12 align-self-center text-center">
            <img src="{{ asset('img/sistem.png')}}" class="img-fliud" width="150"  alt="">
                <h1 class="mt-4">"Un espacio implica la conciencia de las posibilidades de la luz"</h1>
                <h4>Men Backend</h4>
        </div>
    </div>
</header>

<!--Imagenes de los planetas ligadas a su informacion-->
<section class="container-flid">
    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center mt-5">
            <h2>Los Planetas</h2>   
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/mercurio"><img src="{{ asset('img/mercurio.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/venus"><img src="{{ asset('img/venus.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/tierra"><img src="{{ asset('img/tierra.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/marte"><img src="{{ asset('img/marte.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/jupiter"><img src="{{ asset('img/jupiter.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/saturno"><img src="{{ asset('img/saturno.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/urano"><img src="{{ asset('img/urano.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/neptuno"><img src="{{ asset('img/neptuno.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
        <div class="col-4 text-center mt-5">
            <a href="/pluton"><img src="{{ asset('img/pluton.jpg')}}" class="img-fliud" width="200"  alt=""></a>
        </div>
    </div>
</section>

<!--Informacion del sistema solar-->
<section class="container-fluid">
    <div class="row justify-content-center py-5" style="height: 400px; background: -webkit-radial-gradient(pink, mediumaquamarine, violet);">
        <div class="col-12 text-center mt-5 mb-4">
            <h2>El sistema solar</h2>
            <img src="{{ asset('img/sistema.png')}}" class="img-fliud" width="80"  alt="">
        </div>
        <div class="col-4">
            <p class="text-justify">El sistema solar​ es el sistema planetario que liga gravitacionalmente a un conjunto de objetos astronómicos que giran directa o indirectamente en una órbita alrededor de una única estrella conocida con el nombre de Sol.</p>
        </div>
        <div class="col-4">
            <p class="text-justify">Nuestro sistema solar consiste en una estrella mediana que llamamos el Sol y los planetas Mercurio, Venus, Tierra, Marte, Júpiter, Saturno, Urano, Neptuno, y Plutón. Incluye: los satélites de los planetas, numerosos cometas, asteroides, y meteoroides.</p>
        </div>
    </div>
</section>

<!--footer de redes sociales-->
<footer class=" container-fluid mt-5 text-center">
    <div class="row justify-content-center py-4" style="height: 250px; background: #6ddbd7">
        <div class="col">
            <h4>Mas informacion</h4>
            <p class="text-justify text-center">Esta pagina se dedica a la publicacion de informacion relevante hacerca del sistema solar, asi como de todo lo 
            que habita o más existe en el universo entero, en el poemos apreciar cosas tan bonitas como las estrellas y los
            y los cometas.</p>
        </div>
        <div class="col">
            <h4>Redes Sociales</h4>
            <div class="row mt-2 justify-content-center">
                <a href="https://instagram.com/sistema.solar_?utm_medium"><img src="{{ asset('img/insta.png')}}" class="img-fliud" width="30"  alt=""></a>
                <label style="margin-top: 10px; margin-left: 20px">Siguenos en Instagram</label>
            </div>
            <div class="row mt-2 justify-content-center">
                <a href="https://youtu.be/ZykXgSqet6A"><img src="{{ asset('img/you.png')}}" class="img-fliud" width="32"  alt=""></a>
                <label style="margin-top: 10px; margin-left: 20px">Siguenos en YouTube</label>
            </div>
            <div class="row mt-2 justify-content-center">
                <a href="https://twitter.com/search?q=%23SISTEMASOLAR"><img src="{{ asset('img/tui.png')}}" class="img-fliud" width="32"  alt=""></a>
                <label style="margin-top: 10px; margin-left: 20px"> Siguenos en Twitter</label>
            </div>
        </div>
        <div class="col">
            <h4>Informacion contacto</h4>
            <div class="row mt-2">
                <img src="{{ asset('img/ubicacion.png')}}" class="img-fliud" width="30"  alt="">
                <label style="margin-top: 10px; margin-left: 20px"> Cda. Acalopa, #23 Jeronimo Miacatlan CDMX</label>
            </div>
            <div class="row mt-2">
                <img src="{{ asset('img/telefo.png')}}" class="img-fliud" width="30"  alt="">
                <label style="margin-top: 10px; margin-left: 20px"> +52 5579770758</label>
            </div>
            <div class="row mt-2">
                <img src="{{ asset('img/correo.png')}}" class="img-fliud" width="30"  alt="">
                <label style="margin-top: 10px; margin-left: 20px"> sandyglz@gmail.com</label>
            </div>
        </div>
    </div>
</footer>

<!--footer de licencias-->
<footer class="container-fluid">
    <div class="row" style="display: flex; justify-content: space-between; padding: 20px; background: #3ab8b0">
        <div class="copyringht" style="color: #FAFAFA; text-decoration: none; ">© 2021 Todos los Derechos Reservados | Magtimus </div>
        <div class="information" style="color:  #FAFAFA">Informacion Compañia | Privacidad de Politica | Terminos y condiciones</a></div>
    </div>
</footer>
</body>
</html>