<x-layout.app title="Timelog Personal">
    <x-slot name="contentHeader">bbbbbbbb</x-slot>
    <x-slot name="css">
      <link href="assets/vendor/toastr/toastr.min.css" rel="stylesheet"/>
      <style>
        svg {
          height: 1em;
        }
      </style>
    </x-slot>
    @livewire('prueba.show-tester')
    <x-slot name="js">
        <script>
            document.addEventListener('livewire:load', function(){
                $('.select2').select2();
            })
        </script>
      </x-slot>
</x-layout.app>

