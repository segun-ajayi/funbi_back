<?php

namespace App\Livewire;

use App\Models\Website;
use Livewire\Component;

class ApiKeyManager extends Component
{
    public $website;
    public $showKey = false;

    public function mount(Website $website)
    {
        $this->website = $website;
    }

    public function regenerateKey()
    {
        $this->website->update([]);
        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'message' => 'API Key regenerated!'
        ]);
    }

    public function render()
    {
        return view('livewire.api-key-manager');
    }
}
