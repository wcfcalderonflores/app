<div>

    <div>
    <select wire:model="schedule" class="select2">
        @foreach ($timeTab as $TimeTable)
            <option value="{{ $TimeTable->codigo }}">{{ $TimeTable->name }} - {{ $TimeTable->codigo }}</option>
        @endforeach
    </select>
</div>
</div>
