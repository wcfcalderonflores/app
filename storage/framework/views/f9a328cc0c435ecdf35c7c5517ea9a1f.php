<div>
  <div class="row">
      <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <!-- Table with stripped rows -->
          <div class="row mt-3" >
            <div  class="col-md-4">
              <button style="margin: 10px 7px" type="button" class="btn btn-primary" data-bs-toggle="modal" wire:click="abrirModalSubArea"><i class="bi bi-star me-1"></i> Registrar</button>
            </div>
            <div  class="col-md-8">
                <input style="margin: 10px 7px" wire:model="search" class="form-control" placeholder="Nombre de la Sub Area">
            </div>
        </div>
          <table class="table table-hover">
            <thead>
              <tr style="text-align: center">
                  <th scope="col">#</th>
                  <th scope="col">SubArea</th>
                  <th scope="col">Area</th>
                  <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php if(count($subArea)>0): ?>
                  <?php $__currentLoopData = $subArea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$per): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr style="font-size: .92em">
                      <th scope="row"><?php echo e($index+1); ?></th>
                      <td><?php echo e($per->sub_area); ?></td>
                      <td><?php echo e($per->area); ?></td>

                      <td><a href="#" wire:click="editSubArea(<?php echo e($per->id); ?>)" class="text-danger"><i class="bi bi-pencil-square"></i></a></td>
                      <td><a href="#" wire:click="deleteSubArea(<?php echo e($per->id); ?>)" class="text-danger"><i class="bi bi-trash "></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </tbody>
          </table>
          <?php if($subArea->hasPages()): ?>
          <div><?php echo e($subArea->links()); ?></div>
          <?php endif; ?>

          <!-- End Table with stripped rows -->
        </div>
      </div>

      </div>
  </div>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modals.create-update-sub-area')->html();
} elseif ($_instance->childHasBeenRendered('l4219384190-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4219384190-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4219384190-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4219384190-0');
} else {
    $response = \Livewire\Livewire::mount('modals.create-update-sub-area');
    $html = $response->html();
    $_instance->logRenderedChild('l4219384190-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\xampp\htdocs\control-personal\resources\views/livewire/sub-area/sub-area-list.blade.php ENDPATH**/ ?>