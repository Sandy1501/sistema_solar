<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sol</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Aqui esta la barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light mt-3" style="background-color: #a68562">
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
    <div class="container-fluid mt-4" style="background: -webkit-radial-gradient(#e8c39e, #a68562, #f5e1ce);">
          <div class="row justify-content-between">
              <div class="col col-sm-3">
                  <h1 class="display-4 text-white text-center">Sol</h1>
                  <img src="{{ asset('img/sol.png')}}" class="rounded mx-auto d-block" width="150"  alt="">
                  <hr class="w-100">
                  <p>
                      
                  </p>
                  <p class="text-justify">
                    Lo vemos todos los días en el cielo. Nuestro sol es una bola en llamas de gases sobrecalentados. 
                    Aunque está a 93 millones de millas (149.6 millones de kilómetros), podemos sentir su calor y luz 
                    sobre la Tierra.</p>
                  </p>  
              </div>
              <div class="col col-sm-3 mt-4">
                  <br>
                  <br>
                  <br>
                  <br>
                  <p class="text-justify">
                    El Sol envía distintos tipos de energía a la Tierra. Hay rayos infrarrojos, que son los que producen calor. 
                    La luz visible, que es la que ven nuestros ojos, y la luz ultravioleta, que no vemos, pero que nos puede quemar l
                    a piel.
                  </p>
              </div>
              <div class="col col-sm-3 mt-3">
                  <br>
                  <br>
                  <p class="text-justify">
                    Está constituida en sus tres cuartas partes de hidrógeno y helio, que son los elementos más abundantes de su masa; 
                    y de oxígeno, carbón, neón y hierro; que tienen menos protagonismo pues sus cantidades son más reducidas.
                  </p>
                  <br>
                  <br>
                  <img src="{{ asset('img/sol1.png')}}" class="rounded mx-auto d-block" width="100"  alt="">
              </div>
          </div>
    </div>

    <!--Footer de redes sociales-->
    <footer class=" container-fluid mt-5 text-center">
        <div class="row justify-content-center py-4" style="height: 250px; background: #f5e1ce">
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
        <div class="row" style="display: flex; justify-content: space-between; padding: 20px; background: #a68562">
            <div class="copyringht" style="color: #FAFAFA; text-decoration: none; ">© 2021 Todos los Derechos Reservados | Magtimus </div>
            <div class="information" style="color:  #FAFAFA">Informacion Compañia | Privacidad de Politica | Terminos y condiciones</a></div>
        </div>
    </footer>

</body>
</html>