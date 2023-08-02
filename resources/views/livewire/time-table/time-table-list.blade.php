<div>
    <div class="row">
        <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <!-- Table with stripped rows -->
            <div class="row mt-3" >
              <div  class="col-md-4">
                <button style="margin: 10px 7px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTimeTable"><i class="bi bi-star me-1"></i> Registrar</button>
              </div>
              <div  class="col-md-8">
                  <input style="margin: 10px 7px" wire:model="search" class="form-control" placeholder="Ingrese nombre / código">
              </div>
          </div>
            <table class="table table-hover">
              <thead>
                <tr style="text-align: center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Hora Inicio</th>
                    <th scope="col">Hora Fin</th>
                    <th scope="col">Inicio Break</th>
                    <th scope="col">Fin Break</th>
                    <th scope="col">Tolerancia</th>
                    <th scope="col">Código</th>
                    <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @if (count($timeTables)>0)
                    @foreach ($timeTables as $index=>$time)
                    <tr style="text-align: center; font-size: .92em">
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$time->name}}</td>
                        <td>{{$time->start_time}}</td>
                        <td>{{$time->end_time}}</td>
                        <td>{{$time->start_break}}</td>
                        <td>{{$time->end_break}}</td>
                        <td>{{$time->tolerance}} minutos</td>
                        <td>{{$time->code}}</td>
                        <td><a href="#" wire:click="deleteTimeTable({{$time->id}})" class="text-danger"><i class="bi bi-trash "></i></a></td>
                    </tr>
                    @endforeach
                @endif
              </tbody>
            </table>
            @if ($timeTables->hasPages())
            <div>{{$timeTables->links()}}</div>
            @endif

            <!-- End Table with stripped rows -->
          </div>
        </div>

        </div>
    </div>
    @livewire('modals.create-update-time-table')
  </div>
