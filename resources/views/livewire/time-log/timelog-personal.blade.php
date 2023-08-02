<div>
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Seleccione rango de fechas</h5>

          <!-- Multi Columns Form -->
          <form class="row g-3">
            <div class="col-md-4">
              <label for="inputName5" class="form-label">Desde</label>
              <input type="date" name="startFech" class="form-control{{($errors->has('startFech') ? ' is-invalid' : null)}}" id="inputName5" wire:model.defer="startFech">
              @error('startFech')
              <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="col-md-4">
              <label for="inputEmail5" class="form-label">Hasta</label>
              <input type="date" name="endFech" class="form-control{{($errors->has('endFech') ? ' is-invalid' : null)}}" id="inputEmail5" wire:model.defer="endFech">
              @error('endFech')
              <div class="invalid-feedback">{{$message}}</div>
              @enderror
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
      @if (count($data)>0)
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
            @foreach ($data as $item=>$valor)
            <tr>
                <td>{{$item+1}}</td>
                <td>{{$valor->time}}</td>
                <td>{{$valor->number_document}}</td>
                <td>{{$valor->location}}</td>
            </tr>

            @endforeach
        </tbody>
      </table>
      @endif

</div>
