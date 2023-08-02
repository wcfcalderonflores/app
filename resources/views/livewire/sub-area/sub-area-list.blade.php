<div>
  <div class="row">
      <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <!-- Table with stripped rows -->
          <div class="row mt-3" >
            <div  class="col-md-4">
              <button style="margin: 10px 7px" type="button" class="btn btn-primary" data-bs-toggle="modal" wire:click="abrirModalSubArea"><i class="bi bi-star me-1"></i> Registrar</button>
            </div>
            <div  class="col-md-8">
                <input style="margin: 10px 7px" wire:model="search" class="form-control" placeholder="Nombre de la Sub Area">
            </div>
        </div>
          <table class="table table-hover">
            <thead>
              <tr style="text-align: center">
                  <th scope="col">#</th>
                  <th scope="col">SubArea</th>
                  <th scope="col">Area</th>
                  <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @if (count($subArea)>0)
                  @foreach ($subArea as $index=>$per)
                  <tr style="font-size: .92em">
                      <th scope="row">{{$index+1}}</th>
                      <td>{{$per->sub_area}}</td>
                      <td>{{$per->area}}</td>

                      <td><a href="#" wire:click="editSubArea({{$per->id}})" class="text-danger"><i class="bi bi-pencil-square"></i></a></td>
                      <td><a href="#" wire:click="deleteSubArea({{$per->id}})" class="text-danger"><i class="bi bi-trash "></i></a></td>
                  </tr>
                  @endforeach
              @endif
            </tbody>
          </table>
          @if ($subArea->hasPages())
          <div>{{$subArea->links()}}</div>
          @endif

          <!-- End Table with stripped rows -->
        </div>
      </div>

      </div>
  </div>
  @livewire('modals.create-update-sub-area')
</div>
