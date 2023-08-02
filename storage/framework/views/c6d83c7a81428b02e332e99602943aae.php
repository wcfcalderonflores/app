<div>
    <div class="modal fade" id="basicModal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation" wire:submit.prevent='createPersonal'  novalidate>
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
                  <label for="validationCustom02" class="form-label">Apellidos</label>
                  <input type="text" class="form-control <?php echo e($errors->has("last_name") ? 'is-invalid' : ''); ?>" id="validationCustom02" wire:model.defer="data.last_name" required>
                  <?php $__errorArgs = ['last_name'];
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
                    <label for="validationCustom04" class="form-label">Documento</label>
                    <select class="form-select <?php echo e($errors->has("type_document") ? 'is-invalid' : ''); ?>" id="validationCustom04" wire:model.defer="data.type_document" required>
                      <option value="01">DNI</option>
                      <option value="04">CARNET EXT.</option>
                      <option value="07">PASAPORTE</option>
                    </select>
                    <?php $__errorArgs = ['type_document'];
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
                    <label for="validationCustom04" class="form-label">N° Doc.</label>
                    <input type="text" class="form-control <?php echo e($errors->has("number_document") ? 'is-invalid' : ''); ?>" id="validationCustom02" wire:model.defer="data.number_document" required>
                    <?php $__errorArgs = ['number_document'];
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
                    <select class="form-select <?php echo e($errors->has("area_id") ? 'is-invalid' : ''); ?>" id="validationCustom04" wire:model.defer="data.area_id" required wire:change="buscarSubArea($event.target.value)">
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
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Sub Área</label>
                    <select class="form-select <?php echo e($errors->has("sub_area_id") ? 'is-invalid' : ''); ?>" id="validationCustom04" wire:model.defer="data.sub_area_id" required>
                        <option value="" selected>---Seleccionar---</option>
                        <?php $__currentLoopData = $subAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($sub->id); ?>"><?php echo e($sub->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['sub_area_id'];
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
                    <label for="validationCustom04" class="form-label">Contrato</label>
                    <select class="form-select <?php echo e($errors->has("type_contract") ? 'is-invalid' : ''); ?>" id="validationCustom04" wire:model.defer="data.type_contract" required>
                      <option value="01">CAS</option>
                      <option value="02">Nombrado</option>
                    </select>
                    <?php $__errorArgs = ['type_contract'];
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
                    <label for="validationCustom04" class="form-label">Tipo Personal</label>
                    <select class="form-select <?php echo e($errors->has("type_personal") ? 'is-invalid' : ''); ?>" id="validationCustom04" wire:model.defer="data.type_personal" required>
                      <option selected value="01">Administrativo</option>
                      <option value="02">Asistencial</option>
                    </select>
                    <?php $__errorArgs = ['type_personal'];
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
                    <label for="validationCustom04" class="form-label">Cargo</label>
                    <select class="form-select <?php echo e($errors->has("position_id") ? 'is-invalid' : ''); ?>" id="validationCustom04" wire:model.defer="data.position_id" required>
                      <option value="" selected>---Seleccionar---</option>  
                      <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cargo->id); ?>"><?php echo e($cargo->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['position_id'];
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
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form><!-- End Custom Styled Validation -->
            </div>
          </div>
        </div>
    </div>
</div>
<?php /**PATH E:\proyectos-netbeans\proyecto laravel\control-personal\resources\views/livewire/modals/create-update-personal.blade.php ENDPATH**/ ?>