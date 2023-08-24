
<div>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="row mt-3" >
              <div  class="col-md-5">
                <input class="form-control" id="term" type="text" wire:change="ShowSearch($event.target.value)"  placeholder="Buscar Persona"/>
              <div> <u id="resultados" ></u></div>
              </div>
              <div  class="col-md-3">
                <input type="month" class="form-control"  wire:change="listarDias($event.target.value)" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php if($paintCalendar): ?>
      <?php
        $num_dias_mes_actual = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
        $nombre_mes_actual = strftime('%B', strtotime("{$anio}-{$mes}-01")); // Obtener el nombre del mes en español

        // Nombres de los días en español
        $nombres_dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
      ?>
      <div> Mes: <?php echo e($nombre_mes_actual); ?></div>
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>Día</th>
            <th>Fecha</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
              for ($dia = 1; $dia <= $num_dias_mes_actual; $dia++) {
                $fecha_actual = date($anio . '-' . $mes . '-' . $dia); // Crear la fecha con el formato "YYYY-MM-DD"
                $nombre_dia = $nombres_dias[date('w', strtotime($fecha_actual))]; // Obtener el nombre del día de la semana en español

                echo '<tr>
                        <td>' . $nombre_dia . '</td>
                        <td>' . $dia . '/' . $mes . '/' . $anio . '</td>
                      <td>
                          <div  class="col-md-4">
                              <input style="margin: 5px 1px"  class="form-control" type="text" id="term" placeholder="Turno"/>
                              <div> <u id="resultados"></u></div>
                            </div>



                      </td>
                  </tr>';
              }
          ?>
        </tbody>
      </table>
    <?php endif; ?>

</div>

<?php /**PATH C:\Users\WILLIAN\Documents\GitHub\app\resources\views/livewire/time-calendar/time-calendar-list.blade.php ENDPATH**/ ?>