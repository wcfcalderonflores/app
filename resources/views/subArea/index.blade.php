<x-layout.app title="Timelog Personal">
    <x-slot name="contentHeader">LISTAR SUB AREAS</x-slot>
    <x-slot name="css">
      <link href="assets/vendor/toastr/toastr.min.css" rel="stylesheet"/>
      <style>
        svg {
          height: 1em;
        }
      </style>
    </x-slot>
    @livewire('sub-area.sub-area-list')

  <x-slot name="js">
    <script src="assets/vendor/toastr/toastr.min.js"></script>
    <script>
      $(document).ready(function(){
          toastr.options = {
              "progressBar": true,
              "positionClass": "toast-top-right",
          }
          window.addEventListener('hide-form', event =>{
              $('#ModalSubArea').modal('hide');
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
    window.addEventListener('show-modal-subArea', event =>{
        $('#ModalSubArea').modal('show');
    });
  </script>
  </x-slot>
</x-layout.app>

