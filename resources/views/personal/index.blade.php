<x-layout.app title="Timelog Personal">
    <x-slot name="contentHeader">LISTAR PERSONALl</x-slot>
    <x-slot name="css">
      <link href="assets/vendor/toastr/toastr.min.css" rel="stylesheet"/>
      <style>
        svg {
          height: 1em;
        }
      </style>
    </x-slot>
    @livewire('personal.personal-list')

  <x-slot name="js">
    <script src="assets/vendor/toastr/toastr.min.js"></script>
    <script>
      $(document).ready(function(){
          toastr.options = {
              "progressBar": true,
              "positionClass": "toast-top-right",
          }
          window.addEventListener('hide-form', event =>{
              $('#basicModal').modal('hide');
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
    window.addEventListener('show-modal-personal', event =>{
        $('#basicModal').modal('show');
    });
  </script>
  </x-slot>
</x-layout.app>

