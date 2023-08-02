<div>
    <div class="modal fade" id="modalTimeTable" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation" wire:submit.prevent='createTimeTable'  novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">Nombre</label>
                  <input type="text" class="form-control {{$errors->has("name") ? 'is-invalid' : ''}}" wire:model.defer="data.name" id="validationCustom01" required>
                  @error('name')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-3">
                  <label for="validationCustom02" class="form-label">Hora inicio</label>
                  <input type="time" class="form-control {{$errors->has("start_time") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.start_time" required>
                  @error('start_time')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">Hora fin</label>
                    <input type="time" class="form-control {{$errors->has("end_time") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.end_time" required>
                    @error('end_time')
                      <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">Break inicio</label>
                    <input type="time" class="form-control {{$errors->has("start_break") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.start_break" required>
                    @error('start_break')
                      <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">Break fin</label>
                    <input type="time" class="form-control {{$errors->has("end_break") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.end_break" required>
                    @error('end_break')
                      <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">Tolerancia</label>
                    <input type="number" class="form-control {{$errors->has("tolerance") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.tolerance" required>
                    @error('tolerance')
                      <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Codigo</label>
                    <input type="text" class="form-control {{$errors->has("code") ? 'is-invalid' : ''}}" wire:model.defer="data.code" id="validationCustom01" required>
                    @error('code')
                      <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                    @enderror
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
