<div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Seleccione rango de fechas</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" wire:submit.prevent="extractTimeLog">
        <div class="col-md-5">
          <label for="inputName5" class="form-label">Desde</label>
          <input type="date" class="form-control" id="inputName5" wire:model="startFech">
        </div>
        <div class="col-md-5">
          <label for="inputEmail5" class="form-label">Hasta</label>
          <input type="date" class="form-control" id="inputEmail5" wire:model.defer="endFech">
        </div>
        <div class="col-md-2" style="align-self: flex-end">
          <button type="submit" class="btn btn-primary">Extraer</button>
        </div>

      </form><!-- End Multi Columns Form -->

    </div>
  </div>
    <!--table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Marcación</th>
            <th>ping</th>
            <th>Ubicación</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$valor)
            <tr>
                <td>{{$item+1}}</td>
                <td>{{$valor->event_time}}</td>
                <td>{{$valor->pin}}</td>
                <td>{{$valor->dev_alias}}</td>
            </tr>

            @endforeach
        </tbody>
      </table-->
</div>
