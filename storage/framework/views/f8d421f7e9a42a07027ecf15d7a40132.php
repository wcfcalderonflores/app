<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.app','data' => ['title' => 'Timelog Personal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Timelog Personal']); ?>
     <?php $__env->slot('contentHeader', null, []); ?> LISTAR MARCACIONES <?php $__env->endSlot(); ?>
     <?php $__env->slot('css', null, []); ?> 
      <link href="assets/vendor/toastr/toastr.min.css" rel="stylesheet"/>
     <?php $__env->endSlot(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('time-log.timelog-personal')->html();
} elseif ($_instance->childHasBeenRendered('5eZlMmh')) {
    $componentId = $_instance->getRenderedChildComponentId('5eZlMmh');
    $componentTag = $_instance->getRenderedChildComponentTagName('5eZlMmh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5eZlMmh');
} else {
    $response = \Livewire\Livewire::mount('time-log.timelog-personal');
    $html = $response->html();
    $_instance->logRenderedChild('5eZlMmh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
              $('#form').modal('hide');
              toastr.success(event.detail.message,'Exito!');
          
          });
          window.addEventListener('toastr', event =>{
              toastr.success(event.detail.message,'Exito!');
          
          });
          window.addEventListener('toastr-error', event =>{
              toastr.error(event.detail.message,'Error!');
          
          });
      });
  </script>
   <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH E:\proyectos-netbeans\proyecto laravel\control-personal\resources\views/timeLog/personal.blade.php ENDPATH**/ ?>