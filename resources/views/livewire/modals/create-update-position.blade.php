<div>
    <div class="modal fade" id="ModalPosition" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Registrar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation" wire:submit.prevent='CreatePosition'  novalidate>
                <div class="col-md-8">
                  <label for="validationCustom01" class="form-label">Nombres</label>
                  <input type="text" class="form-control {{$errors->has("name") ? 'is-invalid' : ''}}" wire:model.defer="data.name" id="validationCustom01" required>
                  @error('name')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>


                <div class="col-12" style="display: flex; justify-content: center">
                    <button type="button" style="margin-right: 5px" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ $opcion}}</button>
                </div>
              </form><!-- End Custom Styled Validation -->
            </div>
          </div>
        </div>
    </div>
</div>
