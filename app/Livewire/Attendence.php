<?php

namespace App\Livewire;

use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Attendence extends Component
{
    public function render()
    {
        $schedule = Schedule::where('user_id', Auth::user()->id)->firstOrFail();
        return view('livewire.attendence', ['schedule' => $schedule]
        );
    }
}
