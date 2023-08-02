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
                  <input type="text" class="form-control {{$errors->has("name") ? 'is-invalid' : ''}}" wire:model.defer="data.name" id="validationCustom01" required>
                  @error('name')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">Apellidos</label>
                  <input type="text" class="form-control {{$errors->has("last_name") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.last_name" required>
                  @error('last_name')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Documento</label>
                    <select class="form-select {{$errors->has("type_document") ? 'is-invalid' : ''}}" id="validationCustom04" wire:model.defer="data.type_document" required>
                      <option value="01">DNI</option>
                      <option value="04">CARNET EXT.</option>
                      <option value="07">PASAPORTE</option>
                    </select>
                    @error('type_document')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">N° Doc.</label>
                    <input type="text" class="form-control {{$errors->has("number_document") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.number_document" required>
                    @error('number_document')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">F. Nac.</label>
                    <input type="date" name="FechNac" class="form-control {{$errors->has("fecha_nac") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.fecha_nac" required>
                    @error('fecha_nac')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">F. Ingreso.</label>
                    <input type="date" name="fecha_ingreso" class="form-control {{$errors->has("fecha_ingreso") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.fecha_ingreso" required>
                    @error('fecha_ingreso')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Direccion Act.</label>
                    <input type="text" class="form-control {{$errors->has("direccion_act") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.direccion_act" required>
                    @error('direccion_act.')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Correo</label>
                    <input type="text" class="form-control {{$errors->has("correo") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.correo" required>
                    @error('correo.')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Celular</label>
                    <input type="text" class="form-control {{$errors->has("celular") ? 'is-invalid' : ''}}" id="validationCustom02" wire:model.defer="data.celular" required>
                    @error('celular.')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Área</label>
                    <select class="form-select {{$errors->has("area_id") ? 'is-invalid' : ''}}" id="validationCustom04" wire:model.defer="data.area_id" required wire:change="buscarSubArea($event.target.value)">
                        <option value="">---Seleccionar---</option>
                        @foreach ($areas as $area)
                            <option value="{{$area->id}}">{{$area->name}}</option>
                        @endforeach
                    </select>
                    @error('area_id')
                    <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Sub Área</label>
                    <select class="form-select {{$errors->has("sub_area_id") ? 'is-invalid' : ''}}" id="validationCustom04" wire:model.defer="data.sub_area_id" required>
                        <option value="" selected>---Seleccionar---</option>
                        @foreach ($subAreas as $sub)
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                    </select>
                    @error('sub_area_id')
                      <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Contrato</label>
                    <select class="form-select {{$errors->has("type_contract") ? 'is-invalid' : ''}}" id="validationCustom04" wire:model.defer="data.type_contract" required>
                      <option value="01">CAS</option>
                      <option value="02">Nombrado</option>
                    </select>
                    @error('type_contract')
                      <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Tipo Personal</label>
                    <select class="form-select {{$errors->has("type_personal") ? 'is-invalid' : ''}}" id="validationCustom04" wire:model.defer="data.type_personal" required>
                      <option selected value="01">Administrativo</option>
                      <option value="02">Asistencial</option>
                    </select>
                    @error('type_personal')
                      <div style="display: block; font-size: .825em" class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Cargo</label>
                    <select class="form-select {{$errors->has("position_id") ? 'is-invalid' : ''}}" id="validationCustom04" wire:model.defer="data.position_id" required>
                      <option value="" selected>---Seleccionar---</option>
                      @foreach ($cargos as $cargo)
                            <option value="{{$cargo->id}}">{{$cargo->name}}</option>
                        @endforeach
                    </select>
                    @error('position_id')
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
