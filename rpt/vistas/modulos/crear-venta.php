<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Registrar proyecto de tesis

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Registrar proyecto de tesis</li>

    </ol>

  </section>

  <section class="content">

    <form role="form" method="post" enctype="multipart/form-data">
      <!--=====================================
      CUERPO DEL MODAL
      ======================================-->

      <div class="modal-body">

        <div class="box-body">

          <!-- ENTRADA PARA EL TITULO -->

          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">Titulo</span>

              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ej: Plataforma basada en machine learning" required>

            </div>

          </div>

          <!-- SELECCIONAR ANIO -->

          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">Año</span>

              <select class="form-control" id="anio">
                <?php
                for ($year = 2021; $year >= 2010; $year--) {
                  if ($year == 2021) {
                    echo '<option selected value="' . $year . '">' . $year . '</option>' . '\n';
                  } else {
                    echo '<option value="' . $year . '">' . $year . '</option>' . '\n';
                  }
                }
                ?>
              </select>

            </div>

          </div>

          <!-- ENTRADA PARA EL RESUMEN -->

          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">Resumen</span>

              <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Coloque aquí el resumen/abstract de la tesis"></textarea>

            </div>

          </div>

          <!-- ENTRADA PARA EL ALUMNO -->

          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">Alumno</span>

              <select class="form-control" id="alumno">
                <option value="" selected>Seleccione un alumno</option>
                <?php
                $array = array(
                  "Vargas Márquez, Willians Anthony (16200082)",
                  "Revolledo Torres, Ángel Fernando (14200055)",
                );
                foreach ($array as &$alumno) {
                  echo '<option value="' . $alumno . '">' . $alumno . '</option>' . '\n';
                }
                ?>
              </select>

            </div>

          </div>

          <!-- ENTRADA PARA SELECCIONAR PROFESORES -->

          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">Asignado a</span>

              <select class="form-control" id="alumno">
                <option value="" selected>Seleccione un(os) profesor(es)</option>
                <?php
                $array = array(
                  "Profesor prueba, uno dos",
                  "Profesor prueba, dos tres",
                );
                foreach ($array as &$profesor) {
                  echo '<option value="' . $profesor . '">' . $profesor . '</option>' . '\n';
                }
                ?>
              </select>

            </div>

          </div>

          <!-- ENTRADA PARA SELECCIONAR DEADLINE -->

          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">Tiempo límite para revisar (semanas)</span>

              <select class="form-control" id="alumno">
                <option value="" selected>Sin tiempo límite</option>
                <?php
                $array = array(
                  "1",
                  "2",
                  "3",
                  "4",
                );
                foreach ($array as &$valor) {
                  echo '<option value="' . $valor . '">' . $valor . ' semana(s)</option>' . '\n';
                }
                ?>
              </select>

            </div>

          </div>
          <!-- ENTRADA PARA SUBIR FOTO -->

          <div class="form-group">

            <div class="panel">Subir tesis</div>

            <input type="file" id="nuevaFoto" name="nuevaFoto">

            <p class="help-block">Peso máximo del archivo 200 MB</p>

            <img src="vistas/img/usuarios/default/usuarios.png" class="img-thumbnail" width="100px">

          </div>

        </div>

      </div>

      <!--=====================================
      PIE DEL MODAL
      ======================================-->

      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Registrar proyecto de tesis</button>

      </div>

    </form>

  </section>

</div>