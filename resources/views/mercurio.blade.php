<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercurio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!--Aqui esta la barra de navegacion-->
<nav class="navbar navbar-expand-lg navbar-light mt-3" style="background-color: #ecab0f">
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
      
<!--Informacion de la planeta-->
<div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#ecab0f, #b57c00, #f7d547);">
    <div class="row justify-content-between">
        <div class="col col-sm-3">
            <h1 class="display-4 text-white text-center">Mercurio</h1>
            <img src="{{ asset('img/mercurio1.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
            <hr class="w-100">
            <p>
                
            </p>
            <p class="text-justify">
                Mercurio es el planeta más pequeño de nuestro sistema solar. Simplemente, es un poco más grande que la Luna de la Tierra.
                 Es el planeta más cercano al Sol, pero no es realmente el más cálido. Venus es el más cálido.</p>
            </p>  
        </div>
        <div class="col col-sm-3 mt-4">
            <br>
            <p class="text-justify">
                Junto con Venus, la Tierra y Marte, Mercurio es uno de los planetas rocosos. Tiene una superficie sólida que está cubierta 
                de cráteres. Tiene una atmósfera delgada y no tiene ninguna luna. A Mercurio le gusta simplificar las cosas.</p>
              <br>
              <p>
                Este planeta pequeño da vueltas lentamente comparado con la Tierra, por lo tanto, un día dura un largo tiempo. 
                A Mercurio le lleva 59 días de la Tierra hacer una rotación completa. Un año en Mercurio pasa rápido. 
              </p> 
        </div>
        <div class="col col-sm-3 mt-3">
            <br>
            <br>
            <p class="text-justify">
                Un día en Mercurio no es como un día aquí en la Tierra. Para nosotros, el Sol sale y se pone todos los días. Debido a que
                 Mercurio gira lentamente y tiene un año corto, le lleva mucho tiempo al Sol salir y ponerse allí. 
            </p>
            <br>
            <br>
            <img src="{{ asset('img/mercurio2.png')}}" class="rounded mx-auto d-block" width="80"  alt="">
        </div>
    </div>
</div>

<!--Footer de redes sociales-->
<footer class=" container-fluid mt-5 text-center">
    <div class="row justify-content-center py-4" style="height: 250px; background: #f7d547">
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

<!--footer de final-->
<footer class="container-fluid">
    <div class="row" style="display: flex; justify-content: space-between; padding: 20px; background: #b57c00">
        <div class="copyringht" style="color: #FAFAFA; text-decoration: none; ">© 2021 Todos los Derechos Reservados | Magtimus </div>
        <div class="information" style="color:  #FAFAFA">Informacion Compañia | Privacidad de Politica | Terminos y condiciones</a></div>
    </div>
</footer>

</body>
</html>