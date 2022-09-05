<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mi préstamo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
                src="img/Grupo 24.png"
                width="150"
                class=""
                style="margin-left: 20px; margin-top: 20px; margin-bottom: 20px;"
            />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 100px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="miPrestamo.html">
                    <img class="m-1"  src="img/Grupo 946.png" alt="">
                    <!-- <img class="ms-3 me-2"  src="img/Grupo 946.png" alt=""> -->
                    &nbsp;Mi préstamo
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="clienteNotificaciones.html">
                    <img class="m-1" src="img/Grupo 262.png" alt=""> 
                    &nbsp;&nbsp;&nbsp;Notificaciones
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="clienteSoliNueva.html">
                    <img class="m-1" src="img/Grupo 264.png" alt="">
                    Solicitud de nuevo crédito
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="clienteDocuInfor.html">
                    <img class="m-1" src="img/ICONO_DOC E INF_ GRIS.svg" alt=""> 
                    &nbsp;&nbsp;&nbsp;Documentación e información
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="m-1" src="img/Grupo 397.png" alt=""> 
                    &nbsp;&nbsp;Ajustes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                  <li><a class="dropdown-item" href="#">Contacto</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        <br>
        <h1 class=" font-bold text-center" style="color: #4A9D22;">Mi préstamo</h1>
        <br />
        <h1 class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733;">
            Datos generales de crédito
        </h1>
        <br>
        <center>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="border text-center" scope="col">Número de cliente</th>
                        <th class="border text-center" scope="col">Número de crédito</th>
                        <td class="" style="border: none;">
                            <button type="button" class="btn btn-success text-center" style="background: #4A9D22; ">Adelantar pagos</button>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- <th scope="row">1</th> -->
                        <td class="border text-center">23987</td>
                        <td class="border text-center">10987654321</td>
                    </tr>
                    <tr>
                        <th class="border text-center" scope="col">Monto autorizado</th>
                        <th class="border text-center" scope="col">Fecha de inicio del crédito</th>
                    </tr>
                    <tr>
                        <td class="border text-center">$ 800.00</td>
                        <td class="border text-center">12/05/2022</td>
                    </tr>
                    <tr>
                        <th class="border text-center" scope="col">Número de pagos</th>
                        <th class="border text-center" scope="col">Fecha de término del crédito</th>
                    </tr>
                    <tr>
                        <td class="border text-center">5</td>
                        <td class="border text-center">12/08/2022</td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>

    <div class="container">
        <br />
        <h1 class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733;">
            Tabla de pagos
        </h1>
        <br>
        <div class="d-flex justify-content-center">
            <div class="row g-3 ">
                <div class="col-auto">
                  <label for="inputPassword6" class="col-form-label fw-bold">De</label>
                </div>
                <div class="col-auto">
                  <input  type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <img src="img/Grupo 166.png" alt="">
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">a</label>
                </div>
                <div class="col-auto">
                    <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                      <img src="img/Grupo 166.png" alt="">
                </div>
                <div class="col-auto">
                    <div class="input-group w-60">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-success" style="background: #4A9D22;">Buscar</button>
                </div>
              </div>
          </div>
        <br />
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="border text-center" scope="col">Pago número</th>
                    <th class="border text-center" scope="col">Fecha de pago</th>
                    <th class="border text-center" scope="col">Monto de pago</th>
                    <th class="border text-center" scope="col">Saldo insoluto</th>
                    <th class="border text-center" scope="col"># pagos restantes</th>
                    <th class="border text-center" scope="col">Resta por pagar</th>
                    <!-- <td class="" style="border: none;">
                    </td> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                </tr>
                <tr>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <!-- <th class="border" scope="col">Datos</th>
                    <th class="border" scope="col">Datos</th> -->
                </tr>
                <tr>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                </tr>
            </tbody>
        </table>
        <div class="row">

        </div>
    </div>

    <div class="container d-flex flex-row-reverse">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">< Anterior </a></li>
              <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">1</a></li>
              <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">2</a></li>
              <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">3</a></li>
              <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">4</a></li>
              <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">Siguiente > </a></li>
            </ul>
        </nav>
    </div>
    
    <div class="container">
        <br />
        <h1 class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733;">
            Tabla de amortización
        </h1>
        <br>
        <div class="d-flex justify-content-center">
            <div class="row g-3 ">
                <div class="col-auto">
                  <label for="inputPassword6" class="col-form-label fw-bold">De</label>
                </div>
                <div class="col-auto">
                  <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <img src="img/Grupo 166.png" alt="">
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">a</label>
                </div>
                <div class="col-auto">
                    <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                      <img src="img/Grupo 166.png" alt="">
                </div>
                <div class="col-auto">
                    <div class="input-group w-60">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-success" style="background: #4A9D22;">Buscar</button>
                </div>
              </div>
          </div>
        <br />
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="border text-center" scope="col"> Numero de crédito </th>
                    <th class="border text-center" scope="col"> # de pagos</th>
                    <th class="border text-center" scope="col"> Próximo pago</th>
                    <th class="border text-center" scope="col"> Interés</th>
                    <th class="border text-center" scope="col"> Anual (CAT sin IVA)</th>
                    <th class="border text-center" scope="col"> Pago a capital </th>
                    <th class="border text-center" scope="col"> Intereses ordinarios</th>
                    <th class="border text-center" scope="col"> Pago a capital</th>
                    <th class="border text-center" scope="col"> Intereses ord</th>
                    <th class="border text-center" scope="col"> IVA intereses</th>
                    <th class="border text-center" scope="col"> Comisiones</th>
                    <th class="border text-center" scope="col"> Pago total men</th>
                    
                    <!-- <td class="" style="border: none;">
                        <button type="button" class="btn btn-success" style="background: #4A9D22;">Adelantar pagos</button>
                    </td> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    
                </tr>
                <tr>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    
                </tr>
                <tr>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    <td class="border text-center">Datos</td>
                    
                </tr>
            </tbody>
        </table>
        <div class="row">

        </div>
    </div>

    <div class="container d-flex flex-row-reverse">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">< Anterior </a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">1</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">2</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">3</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">4</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">Siguiente > </a></li>
            </ul>
        </nav>
    </div>
    
    <div class="container d-flex flex-row-reverse">
        <p style="font-size: 25px;">La tabla de amortización se genera al momento de iniciar su crédito. En caso de actualizarse por pagos adelantados a capital o
            por retraso, deberá solicitar la nueva tabla de amortización enviando un mensaje al área de cobranza. Dicha tabla se enviará
            en formato excel por correo electrónico.</p>
    </div>
    
    <!-- <div class="container" style="background-color: #F27C00;"> -->
        <footer class="py-5" style="background-color: #F27C00;">
          <div class="row">
            <div class="col-auto">
                
            </div>
            <div class="col-auto">
              <h5 style="color: #4A9D22;">Información legal</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Términos y condiciones 20</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Política y aviso de privacidad</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">¿Te gusto la página?</a></li>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="img/dislike.svg" alt="" srcset=""></a></li>
                        </div>
                        <div class="col">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="img/like.svg" alt="" srcset=""></a></li>
                        </div>
                    </div>
                </div>
              </ul>
            </div>
            <div class="col-auto">
                
            </div>
            <div class="col-auto">
                
            </div>
            <div class="col-auto">
              <h5 style="color: #4A9D22;">Atención al cliente</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Preguntas Frecuentes</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">¿Quiénes somos?</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Acerca de nosotros</a></li>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <li class="nav-item mb-1"><a href="#" class="nav-link p-0 text-muted"><img src="img/facebook.svg" alt="" srcset=""></a></li>
                        </div>
                        <div class="col">
                            <li class="nav-item mb-1"><a href="#" class="nav-link p-0 text-muted"><img src="img/instagram.svg" alt="" srcset=""></a></li>
                        </div>
                    </div>
                </div>
              </ul>
            </div>

            <div class="col-auto">
                
            </div>

            <div class="col-auto">
                
            </div>

            <div class="col-auto">
              <form>
                <h5 style="color: #4A9D22;">Contactanos</h5>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Contactanos</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email">
                  <input id="newsletter1" type="text" class="form-control" placeholder="Comentarios">
                  <button class="btn btn-primary" type="button">Enviar</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex justify-content-center py-4 my-4">
            <p>&copy;2022 Dinero inmediato | Todos los derechos reservados.</p>
          </div>
        </footer>
      <!-- </div> -->
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>