<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = [''];

    protected $rules = [
        'title' => 'required|string|min:3|max:255',
        'options' => 'required|array|min:2|max:10', // At least two options are required
        'options.*' => 'required|string|min:1|max:255', // Each option must be a non-empty string
    ];

    protected $messages = [
        'options.*' => 'This Option cannot be empty.',
    ];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';
    }

    public function removeOption($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options); // Re-index the array
    }

    /**
     * This method is called when any property is updated.
     * It validates the specific property that was changed.
     *
     * @param string $propertyName
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function createPoll()
    {
        $this->validate();

        \App\Models\Pool::create(['title' => $this->title
        ])->options()->createMany( collect($this->options)->map(fn($option)
        => ['name' => $option])->all());

        $this->reset(['title', 'options']);

        $this->dispatch("pollCreated");
    }
}
