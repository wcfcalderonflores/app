<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <select wire:model="search" class="form-control select2">
                                <option value="">Seleccionar...</option>
                                <option value="">WILIAM CALDERON FLORES</option>
                                <option value="">PERONAL DE FARMACIA</option>

                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="month" class="form-control" wire:change="listarDias($event.target.value)" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($paintCalendar)
        @php
            $num_dias_mes_actual = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
            $nombre_mes_actual = strftime('%B', strtotime("{$anio}-{$mes}-01"));

            $nombres_dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
        @endphp

        <div> Mes: {{ $nombre_mes_actual }}</div>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Día</th>
                    <th>Fecha</th>
                    <th>TURNO PROGRAMADO</th>
                </tr>
            </thead>
            <tbody>
                @php
                    for ($dia = 1; $dia <= $num_dias_mes_actual; $dia++) {
                        $fecha_actual = date($anio . '-' . $mes . '-' . $dia);
                        $nombre_dia = $nombres_dias[date('w', strtotime($fecha_actual))];
                @endphp

                        <tr>
                            <td>{{ $nombre_dia }}</td>
                            <td>{{ $dia . '/' . $mes . '/' . $anio }}</td>
                            <td>

                                <div class="mb-4" wire:ignore>
                                    <select wire:model="schedule" class="select2" id="select_{{ $dia }}">
                                        @foreach ($timeTab as $TimeTable)
                                            <option value="{{ $TimeTable->code }}">{{ $TimeTable->code }}-{{ $TimeTable->name }} -{{ $TimeTable->start_time }}-{{ $TimeTable->end_time }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </td>
                        </tr>

                @php
                    }
                @endphp
            </tbody>
        </table>

        <script>

            $(document).ready(function() {
                @for ($dia = 1; $dia <= $num_dias_mes_actual; $dia++)
                    $('#select_{{ $dia }}').select2();
                @endfor
            });
        </script>

    @endif
</div>
