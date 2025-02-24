<?php

namespace App\Livewire;

use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;
use App\Models\Website;

class WebsiteSwitcher extends Component
{
    use InteractsWithBanner;
    public $websites;
    public $website;
    public $showCreateForm = false;
    public $newWebsite = [
        'name' => '',
        'base_url' => ''
    ];

    protected $listeners = ['websiteCreated' => 'refreshWebsites'];

    public function mount()
    {
        $this->refreshWebsites();
    }

    public function updatedWebsite()
    {
        dd($this->website);
    }

    public function toggleModal()
    {
        $this->showCreateForm = !$this->showCreateForm;
    }

    public function refreshWebsites()
    {
        $this->websites = Website::all();
        $this->showCreateForm = false;
    }

    public function switchWebsite($websiteId)
    {
        session(['active_website_id' => $websiteId]);
        $this->activeWebsiteId = $websiteId;
        $this->emit('activeWebsiteChanged', $websiteId);
    }

    public function createWebsite()
    {
//        $this->validate(Website::rulesFor('newWebsite.'));
        $this->validate([
            'newWebsite.name' => 'required|string|max:255',
            'newWebsite.base_url' => 'required|url'
        ]);

        $website = Website::create([
            'name' => $this->newWebsite['name'],
            'url' => $this->newWebsite['base_url'],
            'api_key' => Website::generateApiKey()
        ]);

        $this->reset(['name', 'url']);

        if ($website) {
            // Auto-switch to new website
            $this->switchWebsite($website->id);
            $this->banner('Website created successfully!.');
        } else {
            $this->dangerBanner('Something went wrong!');
        }

    }

    public function render()
    {
        return view('livewire.website-switcher');
    }
}
