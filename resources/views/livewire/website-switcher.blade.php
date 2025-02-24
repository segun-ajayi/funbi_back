<div class="relative" x-data="{ open: false }">
    @if($websites->isEmpty())
        <!-- Empty state -->
        <div class="card bg-white">
            <div class="card-body">
                <h5 class="header-title">Create Website</h5>
                <p class="text-muted">No websites found. Create your first website to get started.</p>
                <button type="button" class="btn btn-primary" wire:click="toggleModal">Create New Website</button>

            </div>
        </div>
    @else
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h5 class="header-title">Choose website to edit</h5>
                        <div class="col-sm-12">
                            <h6 class="my-3 light-dark"></h6>
                            <select class="form-control btn-outline-secondary" wire:model.live="website">
                                <option>Choose a Website</option>
                                @foreach($websites as $website)
                                    <option value="{{ $website->id }}">{{ $website->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Switch dropdown -->
{{--        <button--}}
{{--            @click="open = !open"--}}
{{--            class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded"--}}
{{--        >--}}
{{--            <span>{{ optional($websites->find($activeWebsiteId))->name ?? 'Select Website' }}</span>--}}
{{--            <x-heroicon-s-chevron-down class="h-4 w-4"/>--}}
{{--        </button>--}}

{{--        <!-- Dropdown menu -->--}}
{{--        <div--}}
{{--            x-show="open"--}}
{{--            @click.outside="open = false"--}}
{{--            class="absolute right-0 mt-2 w-64 bg-white rounded shadow-lg z-50"--}}
{{--        >--}}
{{--            @foreach($websites as $website)--}}
{{--                <button--}}
{{--                    wire:click="switchWebsite({{ $website->id }})"--}}
{{--                    class="block w-full px-4 py-2 text-left hover:bg-blue-50 {{ $activeWebsiteId == $website->id ? 'bg-blue-50' : '' }}"--}}
{{--                >--}}
{{--                    {{ $website->name }}--}}
{{--                    <span class="text-xs text-gray-500 block">{{ $website->base_url }}</span>--}}
{{--                </button>--}}
{{--            @endforeach--}}

{{--            <!-- Create new website in dropdown -->--}}
{{--            <button--}}
{{--                class="block w-full px-4 py-2 text-left hover:bg-green-50 border-t mt-2"--}}
{{--                wire:click="$set('showCreateForm', true)"--}}
{{--            >--}}
{{--                <div class="flex items-center space-x-2 text-green-600">--}}
{{--                    <x-heroicon-s-plus class="h-4 w-4"/>--}}
{{--                    <span>Create New Website</span>--}}
{{--                </div>--}}
{{--            </button>--}}
{{--        </div>--}}
    @endif

    <!-- Create Form Modal -->
        <x-dialog-modal wire:model="showCreateForm">
            <x-slot name="title">
                Create Website
            </x-slot>

            <x-slot name="content">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Website Name</label>
                    <input
                        type="text"
                        wire:model="newWebsite.name"
                        class="mt-1 block w-full rounded border-gray-300"
                        placeholder="My Angular Site"
                    >
                    @error('newWebsite.name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Base URL</label>
                    <input
                        type="url"
                        wire:model="newWebsite.base_url"
                        class="mt-1 block w-full rounded border-gray-300"
                        placeholder="https://example.com"
                    >
                    @error('newWebsite.base_url') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="toggleModal" wire:loading.attr="disabled">
                    Nevermind
                </x-secondary-button>

                <x-button class="ml-2" wire:click="createWebsite" wire:loading.attr="disabled">
                    Create Website
                </x-button>
            </x-slot>
        </x-dialog-modal>
</div>
