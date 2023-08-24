<div>
    <div class="row">
        <div class="col-lg-12">
  
        <div class="card">
          <div class="card-body">
            <!-- Table with stripped rows -->
            <div class="row mt-3" >
              <div  class="col-md-4">
                <button style="margin: 10px 7px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTimeTable"><i class="bi bi-star me-1"></i> Registrar</button>
              </div>
              <div  class="col-md-8">
                  <input style="margin: 10px 7px" wire:model="search" class="form-control" placeholder="Ingrese nombre / código">
              </div>
          </div>
            <table class="table table-hover">
              <thead>
                <tr style="text-align: center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Hora Inicio</th>
                    <th scope="col">Hora Fin</th>
                    <th scope="col">Inicio Break</th>
                    <th scope="col">Fin Break</th>
                    <th scope="col">Tolerancia</th>
                    <th scope="col">Código</th>
                    <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php if(count($timeTables)>0): ?>
                    <?php $__currentLoopData = $timeTables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="text-align: center; font-size: .92em">
                        <th scope="row"><?php echo e($index+1); ?></th>
                        <td><?php echo e($time->name); ?></td>
                        <td><?php echo e($time->start_time); ?></td>
                        <td><?php echo e($time->end_time); ?></td>
                        <td><?php echo e($time->start_break); ?></td>
                        <td><?php echo e($time->end_break); ?></td>
                        <td><?php echo e($time->tolerance); ?> minutos</td>
                        <td><?php echo e($time->code); ?></td>
                        <td><a href="#" wire:click="deleteTimeTable(<?php echo e($time->id); ?>)" class="text-danger"><i class="bi bi-trash "></i></a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </tbody>
            </table>
            <?php if($timeTables->hasPages()): ?>
            <div><?php echo e($timeTables->links()); ?></div>
            <?php endif; ?> 
             
            <!-- End Table with stripped rows -->
          </div>
        </div>
  
        </div>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modals.create-update-time-table')->html();
} elseif ($_instance->childHasBeenRendered('l810649877-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l810649877-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l810649877-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l810649877-0');
} else {
    $response = \Livewire\Livewire::mount('modals.create-update-time-table');
    $html = $response->html();
    $_instance->logRenderedChild('l810649877-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
  <?php /**PATH E:\proyectos-netbeans\proyecto laravel\control-personal\resources\views/livewire/time-table/time-table-list.blade.php ENDPATH**/ ?>