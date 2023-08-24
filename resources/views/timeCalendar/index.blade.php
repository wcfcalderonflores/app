<x-layout.app title="Timelog Personal">
    <x-slot name="contentHeader">Programacion de Horarios</x-slot>
    <x-slot name="css">
      <link href="assets/vendor/toastr/toastr.min.css" rel="stylesheet"/>
      <style>
        svg {
          height: 1em;
        }
      </style>
    </x-slot>

  <x-slot name="js">
    <script src="assets/vendor/toastr/toastr.min.js"></script>
    <script>
      $(document).ready(function(){
          toastr.options = {
              "progressBar": true,
              "positionClass": "toast-top-right",
          }
          window.addEventListener('hide-form', event =>{
              $('#listarDias').modal('hide');
          });
          window.addEventListener('toastr', event =>{
              toastr.success(event.detail.message,'Exito!');

          });
          window.addEventListener('toastr-error', event =>{
              toastr.error(event.detail.message,'Error!');

          });
      });
  </script>
  <script>
    $(document).ready(function(){
        toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right",
        }
        window.addEventListener('hide-form', event =>{
            $('#ShowSearch').modal('hide');
        });
        window.addEventListener('toastr', event =>{
            toastr.success(event.detail.message,'Exito!');

        });
        window.addEventListener('toastr-error', event =>{
            toastr.error(event.detail.message,'Error!');

        });
    });
</script>

  <script>
    window.addEventListener('show-modal-timeCalendar', event =>{
        $('#listarDias').modal('show');
    });
  </script>

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
</x-slot>
  @livewire('time-calendar.time-calendar-list')
</x-layout.app>
