<!doctype html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Regiones</h1>
        <ul class="nav nav-tabs nav-underline justify-content-center">
  <li class="nav-item">
    <a class="nav-link text-dark bg-success" href="ver_niveles">Niveles Academicos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark bg-warning" href="ver_municipios">Municipios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark bg-success" href="ver_departamentos">Departamentos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark bg-warning" href="ver_regiones">Regiones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark bg-success" href="ver_ciudadanos">Ciudadanos</a>
  </li>
</ul> 
        <table class="table table-border table-striped table-dark">
            <thead>
                <tr>
                    <th>Còdigo</th>
                    <th>Nombre</th>
                    <th>Descripciòn</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($datos as $region):

            ?>
                <tr>
                    <td><?php echo $region[ 'cod_region'];?></td>
                    <td><?php echo $region[ 'nombre'];?></td>
                    <td><?php echo $region[ 'descripcion'];?></td>
                  
                </tr>
                <?php
                endforeach;
                
                ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>