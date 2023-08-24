<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.app','data' => ['title' => 'Timelog Personal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Timelog Personal']); ?>
     <?php $__env->slot('contentHeader', null, []); ?> Programacion de Horarios <?php $__env->endSlot(); ?>
     <?php $__env->slot('css', null, []); ?> 
      <link href="assets/vendor/toastr/toastr.min.css" rel="stylesheet"/>
      <style>
        svg {
          height: 1em;
        }
      </style>
     <?php $__env->endSlot(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('time-calendar.time-calendar-list')->html();
} elseif ($_instance->childHasBeenRendered('Y03hqff')) {
    $componentId = $_instance->getRenderedChildComponentId('Y03hqff');
    $componentTag = $_instance->getRenderedChildComponentTagName('Y03hqff');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Y03hqff');
} else {
    $response = \Livewire\Livewire::mount('time-calendar.time-calendar-list');
    $html = $response->html();
    $_instance->logRenderedChild('Y03hqff', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   <?php $__env->slot('js', null, []); ?> 
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
  <script>

  </script>
   <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\control-personal\resources\views/timeCalendar/index.blade.php ENDPATH**/ ?>