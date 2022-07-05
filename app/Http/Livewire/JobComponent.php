<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Livewire\WithPagination;

class JobComponent extends Component
{
    use WithPagination;
    // public function mount()
    // {
    // }
    public function render()
    {
        $jobs = Job::orderBy('Job_ID','DESC')->paginate(5);
        return view('livewire.job-component',['jobs'=>$jobs])->layout('layouts.base');
    }
}
