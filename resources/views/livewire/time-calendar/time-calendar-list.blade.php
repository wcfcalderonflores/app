<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />

    <script src='../dist/index.global.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


     <script>

  document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });

    //// the individual way to do it
    // var containerEl = document.getElementById('external-events-list');
    // var eventEls = Array.prototype.slice.call(
    //   containerEl.querySelectorAll('.fc-event')
    // );
    // eventEls.forEach(function(eventEl) {
    //   new FullCalendar.Draggable(eventEl, {
    //     eventData: {
    //       title: eventEl.innerText.trim(),
    //     }
    //   });
    // });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      }
    });
    calendar.render();

  });

</script>
<style>

  body {
    margin-top: 40px;
    font-size: 14px;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  }

  #external-events {
    position: fixed;
    left: 330px;
    top: 220px;
    width: 150px;
    padding: 0 10px;
    border: 1px solid #ccc;
    background: #eee;
    text-align: left;
  }

  #external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
  }

  #external-events .fc-event {
    margin: 5px 0;
    cursor: move;
  }

  #external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #666;
  }

  #external-events p input {
    margin: 0;
    vertical-align: middle;
  }

  #calendar-wrap {
    margin-left: 200px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

    </style>
</head>
<body>

  <div class="row">
    <div class="col-lg-12">

    <div class="card">
      <div class="card-body">

        <div class="row mt-3" >
  <div  class="col-md-5">
   <input style="margin: 5px 1px"  class="form-control" type="text" id="term" placeholder="Buscar Persona">
    <ul id="resultados"></ul>
  </div>
        </div>
      </div>
    </div>
    </div>
  </div>


  <?php
  // Obtener el número de días del mes actual
  $mes_actual = date('n'); // Devuelve el número del mes actual sin ceros iniciales (1 para enero, 2 para febrero, etc.)
  $anio_actual = date('Y'); // Devuelve el año actual con 4 dígitos
  $num_dias_mes_actual = cal_days_in_month(CAL_GREGORIAN, $mes_actual, $anio_actual);
  $nombre_mes_actual = strftime('%B', strtotime("{$anio_actual}-{$mes_actual}-01")); // Obtener el nombre del mes en español

  // Nombres de los días en español
  $nombres_dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');

  // Crear la tabla e imprimir los días del mes en español
  echo '<table border="1">';
    echo '<tr><th colspan="2">Mes: ' . $nombre_mes_actual . '</th></tr>';


  for ($dia = 1; $dia <= $num_dias_mes_actual; $dia++) {
      $fecha_actual = date($anio_actual . '-' . $mes_actual . '-' . $dia); // Crear la fecha con el formato "YYYY-MM-DD"
      $nombre_dia = $nombres_dias[date('w', strtotime($fecha_actual))]; // Obtener el nombre del día de la semana en español

      echo '<tr><td>' . $nombre_dia . '</td><td>' . $dia . '/</td><td>' . $mes_actual . '/</td><td>' . $anio_actual . '</td>
        <td>
            <div  class="col-md-4">
                <input style="margin: 5px 1px"  class="form-control" type="text" id="term" placeholder="Turno">
                 <ul id="resultados"></ul>
               </div>

            </div>
        </td>
    </tr>';
  }

  echo '</table>';
  ?>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#term').on('keyup', function() {
              var term = $(this).val();

              if (term.length >= 3) {
                  $.ajax({
                      url: '/buscar',
                      type: 'GET',
                      data: {term: term},
                      success: function(response) {
                          mostrarResultados(response);
                      }
                  });
              } else {
                  $('#resultados').empty();
              }
          });

          function mostrarResultados(personals) {
              $('#resultados').empty();

              if (personals.length > 0) {
                  personals.forEach(function(personal) {
                      var resultado = '<li><a href="#" onclick="seleccionarPersona(\'' + personal.name + '\')">' + personal.name + ' ' + personal.last_name + '</a></li>';
                      $('#resultados').append(resultado);
                  });
              } else {
                  $('#resultados').append('<li>No se encontraron resultados</li>');
              }
          }

          function seleccionarPersona(name) {
            $('#term').val(name);
            $('#resultados').empty();
        }
        $(document).on('click', 'a', function(){
          seleccionarPersona($(this).text());
        })

      });
  </script>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
