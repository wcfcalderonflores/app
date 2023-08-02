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
              @if (count($personals)>0)
                  @foreach ($personals as $index=>$per)
                  <tr style="font-size: .92em">
                      <th scope="row">{{$index+1}}</th>
                      <td>{{$per->name}}</td>
                      <td>{{$per->last_name}}</td>
              <!--    <td>{{$per->number_document}}</td>
                      <td>{{$per->fecha_ingreso}}</td>
                      <td>{{$this->nameTypeContract($per->type_contract)}}</td>
                      <td>{{$this->nameTypePersonal($per->type_personal)}}</td>
                 -->
                      <td>{{$per->area}}</td>
                      <td>{{$per->sub_area}}</td>
                      <td>{{$per->position}}</td>

                     <td><a href="#" wire:click="editPersonal({{$per->id}})" class="text-danger"><i class="bi bi-person-badge-fill"></a></td>

                      <td><a href="#" wire:click="deletePersonal({{$per->id}})" class="text-danger"><i class="bi bi-trash "></i></a></td>
                  </tr>
                  @endforeach
              @endif
            </tbody>
          </table>
          @if ($personals->hasPages())
          <div>{{$personals->links()}}</div>
          @endif

          <!-- End Table with stripped rows -->
        </div>
      </div>

      </div>
  </div>
  @livewire('modals.create-update-personal')
</div>
