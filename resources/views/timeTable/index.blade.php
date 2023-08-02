<x-layout.app title="Timelog Personal">
    <x-slot name="contentHeader">Horarios</x-slot>
    <x-slot name="css">
      <link href="assets/vendor/toastr/toastr.min.css" rel="stylesheet"/>
      <style>
        svg {
          height: 1em;
        }
      </style>
    </x-slot>
    @livewire('time-table.time-table-list')
  <x-slot name="js">
    <script src="assets/vendor/toastr/toastr.min.js"></script>
    <script>
      $(document).ready(function(){
          toastr.options = {
              "progressBar": true,
              "positionClass": "toast-top-right",
          }
          window.addEventListener('hide-form', event =>{
              $('#modalTimeTable').modal('hide');
          });
          window.addEventListener('toastr', event =>{
              toastr.success(event.detail.message,'Exito!');
          
          });
          window.addEventListener('toastr-error', event =>{
              toastr.error(event.detail.message,'Error!');
          
          });
      });
  </script>
  </x-slot>
</x-layout.app>