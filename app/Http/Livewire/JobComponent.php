<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobComponent extends Component
{
    public function mount()
    {
    }
    public function render()
    {

        $jobs = Job::all();
        return view('livewire.job-component',['jobs'=>$jobs])->layout('layouts.base');
    }
}
