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
    @livewire('time-calendar.time-calendar-list')
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
    window.addEventListener('show-modal-timeCalendar', event =>{
        $('#listarDias').modal('show');
    });


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    document.addEventListener('livewire:load', function(){
        $('.select2').select2();
        $('.select2').on('change',function(){
           // alert(this.value)

        });
    })
</script>
<script>
    // Inicializar Select2 para el campo de selección "search"
    $(document).ready(function() {
        $('#searchField').select2();
    });
</script>
  </x-slot>
</x-layout.app>
