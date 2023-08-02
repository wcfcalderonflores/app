<div>
    <div class="modal fade" id="ModalSubArea" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation" wire:submit.prevent='CreateSubArea'  novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">Nombres</label>
                  <input type="text" class="form-control <?php echo e($errors->has("name") ? 'is-invalid' : ''); ?>" wire:model.defer="data.name" id="validationCustom01" required>
                  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div style="display: block; font-size: .825em" class="invalid-feedback"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Área</label>
                    <select class="form-select <?php echo e($errors->has("area_id") ? 'is-invalid' : ''); ?>" id="validationCustom04" wire:model.defer="data.area_id" >
                        <option value="">---Seleccionar---</option>
                        <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($area->id); ?>"><?php echo e($area->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div style="display: block; font-size: .825em" class="invalid-feedback"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-12" style="display: flex; justify-content: center">
                    <button type="button" style="margin-right: 5px" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><?php echo e($opcion); ?></button>
                </div>
              </form><!-- End Custom Styled Validation -->
            </div>
          </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\control-personal\resources\views/livewire/modals/create-update-sub-area.blade.php ENDPATH**/ ?>