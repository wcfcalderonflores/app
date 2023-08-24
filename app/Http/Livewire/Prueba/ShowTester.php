<?php

namespace App\Http\Livewire\Prueba;

use Livewire\Component;
use App\Models\TimeTable;

class ShowTester extends Component
{
    public $schedule;
    public $timeTabs = [];

    protected $listeners = ['list-show-tester' => '$refresh'];

    public function render()
    {
        $timeTab = TimeTable::where('state', '=', '1')
            ->where('name', 'LIKE', '%' . $this->schedule . '%')
            ->orWhere('code', 'LIKE', '%' . $this->schedule . '%')
            ->paginate(10);

        return view('livewire.prueba.show-tester', compact('timeTab'));
    }
}
