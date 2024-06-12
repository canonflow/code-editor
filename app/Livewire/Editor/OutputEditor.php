<?php

namespace App\Livewire\Editor;

use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class OutputEditor extends Component
{
//    #[Reactive]
    public $output;

    public function mount($output)
    {
        $this->output = $output;
    }

    #[On('send-output')]
    public function display($outputs)
    {
        $this->output = $outputs['output'];
    }

    #[On('clear-output')]
    public function clearOutput()
    {
        $this->reset('output');
    }

    public function render()
    {
        return view('livewire.editor.output-editor');
    }
}
