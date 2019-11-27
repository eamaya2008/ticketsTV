<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh" content="60">
    <meta charset="utf-8">
    <title>Soporte</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <header>
      <img src="img/LogoCase2017Navidad.png" alt="LogoCase" id="LogoCaseHeader">
    </header>
    <div class="main">
      <div class="row ticketCerrado">
        <div class="col-md-2">
          <img src="img/ItSupport.gif" alt="animed.gif" id="gif-sup">
        </div>
        <div class=" row ticketCerradoCounter col-md-10">
        <div class="ticketCerradosDia col-md-1.5">
          <div class="row">
            <div class="col-md-12">
              <h3>Hoy</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 tcd">Abiertos</div>
            <div class="col-md-6 tcd">Cerrados</div>
          </div>
          <div class="row">
            <div class="col-md-6 tcd">{{$tkA["tkAHoy"]}}</div>
            <div class="col-md-6 tcd">{{$tkA["tkCHoy"]}}</div>
          </div>
        </div>
        <div class="ticketCerradosUsu1 col-md-1.5">
          <div class="row">
            <div class="col-md-6 usu-name">Federico</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCFederico"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-6 usu-name">Pablo</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCPablo"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-6 usu-name">Matias</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCMatias"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-6 usu-name">Esteban</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCEsteban"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-6 usu-name">Sebastian</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCSebastian"]}}</div>
          </div>
        </div>
        <div class="ticketCerradosUsu2 col-md-1.5">
          <div class="row">
            <div class="col-md-6 usu-name">Juan</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCJuan"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-6 usu-name">Ivonne</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCIvonne"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-6 usu-name">Rosana</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCRosana"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-6 usu-name">Patricia</div>
            <div class="col-md-6 usu-counter">{{$tkA["tkCPatricia"]}}</div>
          </div>
        </div>
        <div class="ticketAbiertosMes col-md-3">
          <div class="row">
            <div class="col-md-12">
              <h3>Abiertos</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">Ayer</div>
            <div class="col-md-4">{{$tkA["tkAAyer"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-8">Ultimos 7 dias</div>
            <div class="col-md-4">{{$tkA["tkA7"]}}</div>
          </div>
          <div class="row">
            <div class="col-md-8">Total historico</div>
            <div class="col-md-4">{{$tkA["tkATotal"]}}</div>
          </div>
          </div>
          </div>
        </div>
    </div>
  </body>
</html>
