<div>
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Seleccione rango de fechas</h5>
    
          <!-- Multi Columns Form -->
          <form class="row g-3">
            <div class="col-md-4">
              <label for="inputName5" class="form-label">Desde</label>
              <input type="date" name="startFech" class="form-control<?php echo e(($errors->has('startFech') ? ' is-invalid' : null)); ?>" id="inputName5" wire:model.defer="startFech">
              <?php $__errorArgs = ['startFech'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-md-4">
              <label for="inputEmail5" class="form-label">Hasta</label>
              <input type="date" name="endFech" class="form-control<?php echo e(($errors->has('endFech') ? ' is-invalid' : null)); ?>" id="inputEmail5" wire:model.defer="endFech">
              <?php $__errorArgs = ['endFech'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-md-2">
                <label for="inputEmail5" class="form-label">Numero Doc.</label>
                <input type="text" name="numberDoc" class="form-control" id="inputEmail5" wire:model.defer="numberDoc">
              </div>
            <div class="col-md-2" style="align-self: flex-end">
              <button type="button" wire:click="timeLogPersonal" class="btn btn-primary">Listar</button>
            </div>
            
          </form><!-- End Multi Columns Form -->
    
        </div>
      </div>
      <?php if(count($data)>0): ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>MARCACIÓN</th>
            <th>N° DOCUMENTO</th>
            <th>UBICACIÓN</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item=>$valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item+1); ?></td>
                <td><?php echo e($valor->time); ?></td>
                <td><?php echo e($valor->number_document); ?></td>
                <td><?php echo e($valor->location); ?></td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php endif; ?>
      
</div>
<?php /**PATH E:\proyectos-netbeans\proyecto laravel\control-personal\resources\views/livewire/time-log/timelog-personal.blade.php ENDPATH**/ ?>