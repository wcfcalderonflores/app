<div>
  <div class="row">
      <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <!-- Table with stripped rows -->
          <div class="row mt-3" >
            <div  class="col-md-4">
              <button style="margin: 10px 7px" type="button" class="btn btn-primary" data-bs-toggle="modal" wire:click="abrirModalPersonal"><i class="bi bi-star me-1"></i> Registrar</button>
            </div>
            <div  class="col-md-8">
                <input style="margin: 10px 7px" wire:model="search" class="form-control" placeholder="Ingrese nombre / DNI">
            </div>
        </div>
          <table class="table table-hover">
            <thead>
              <tr style="text-align: center">
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
              <!--<th scope="col">N° Doc</th>
                  <th scope="col">F.Ingreso</th>
                  <th scope="col">Contrato</th>
                  <th scope="col">Trabajador</th>
                -->
                  <th scope="col">Área</th>
                  <th scope="col">Sub. Área</th>
                  <th scope="col">Cargo</th>
                  <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php if(count($personals)>0): ?>
                  <?php $__currentLoopData = $personals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$per): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr style="font-size: .92em">
                      <th scope="row"><?php echo e($index+1); ?></th>
                      <td><?php echo e($per->name); ?></td>
                      <td><?php echo e($per->last_name); ?></td>
              <!--    <td><?php echo e($per->number_document); ?></td>
                      <td><?php echo e($per->fecha_ingreso); ?></td>
                      <td><?php echo e($this->nameTypeContract($per->type_contract)); ?></td>
                      <td><?php echo e($this->nameTypePersonal($per->type_personal)); ?></td>
                 -->
                      <td><?php echo e($per->area); ?></td>
                      <td><?php echo e($per->sub_area); ?></td>
                      <td><?php echo e($per->position); ?></td>

                     <td><a href="#" wire:click="editPersonal(<?php echo e($per->id); ?>)" class="text-danger"><i class="bi bi-person-badge-fill"></a></td>

                      <td><a href="#" wire:click="deletePersonal(<?php echo e($per->id); ?>)" class="text-danger"><i class="bi bi-trash "></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </tbody>
          </table>
          <?php if($personals->hasPages()): ?>
          <div><?php echo e($personals->links()); ?></div>
          <?php endif; ?>

          <!-- End Table with stripped rows -->
        </div>
      </div>

      </div>
  </div>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modals.create-update-personal')->html();
} elseif ($_instance->childHasBeenRendered('l1248851532-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1248851532-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1248851532-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1248851532-0');
} else {
    $response = \Livewire\Livewire::mount('modals.create-update-personal');
    $html = $response->html();
    $_instance->logRenderedChild('l1248851532-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\xampp\htdocs\control-personal\resources\views/livewire/personal/personal-list.blade.php ENDPATH**/ ?>