<!DOCTYPE html>
<html>
    <head>
        <title>PDF en PHP</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
          <link rel="icon" href="https://getbootstrap.com/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-material-design.min.css">
        <link href="css/carousel.css" rel="stylesheet">
    </head>
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
     <a class="navbar-brand" href="#">UNAM FESC-C4</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
    </header>
    <br>
    <body>
      <center>
        <div class="wrap">
            <header id="header_main">
                <div style="margin:0 auto; width:200px"></div>
                <h2>Reportes PDF</h2>
            </header>

            <section id="formulario">
                <form  method="post" action="php/pdf_blanco.php" target="_blank">
                        <div id="generar">
                            <p>Asunto:</p>
                            <input type="text" name="asunto">
                        </div>
                        <div id="generar">
                            <p>Profesor(a):</p>
                            <input type="text" name="asunto">
                        </div>
                        <div id="generar">
                            <p>Cargo:</p>
                            <input type="text" name="asunto">
                        </div>
                        <br>
                        <div class="form-group">
    <label for="exampleFormControlTextarea1">Redaccion de texto:</label>
    <br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 595px; height: 248px;"></textarea>
  </div>
                        <div id="fecha">
                        <p>México D.F. a</p>

                          <select name="dia" id="dia">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                          </select>

                          <p class="de">de</p>

                          <select name="mes" id="mes">
                            <option>Enero</option>
                            <option>Febrero</option>
                            <option>Marzo</option>
                            <option>Abril</option>
                            <option>Mayo</option>
                            <option>Junio</option>
                            <option>Julio</option>
                            <option>Agosto</option>
                            <option>Septiembre</option>
                            <option>Octubre</option>
                            <option>Noviembre</option>
                            <option>Diciembre</option>
                          </select>

                          <p class="de">del</p>

                          <select name="anio" id="anio">
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                            <option>2030</option>
                            <option>2031</option>
                            <option>2032</option>
                            <option>2033</option>
                            <option>2034</option>
                            <option>2035</option>
                          </select>
                    </div>
<br>
                        <input name="buscar" type="submit" class="generarBorrar" value="Generar PDF" >
                        <input type="reset" value="Borrar" class="generarBorrar">

                </form>
            </section>
        </div>
    </body>
    <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.3.1.slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-material-design.min.js"></script>
</html>
