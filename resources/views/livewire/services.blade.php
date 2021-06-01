<div class="px-6">
    @if (session()->has('message'))
        <div class="text-white px-4 py-2 border-0 rounded relative mt-4 mb-2 bg-green-500">
            <span class="inline-block align-middle mr-8">
                {{ session('message') }}
            </span>
        </div>
    @endif
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-jet-button wire:click="createShowModal">
            {{ __('Create') }}
        </x-jet-button>
    </div>

    {{-- The data table --}}
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            @foreach($table_columns as $column)
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{$column['name']}}</th>
                            @endforeach
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @if ($data->count())
                            @foreach ($data as $item)
                                <tr>
                                    @foreach($table_columns as $column)
                                        @if($column['key'] === 'image_name')
                                            <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                                <img class="h-20 rounded-full" src="{{ asset('storage/'.$item->{$column['key']}) }}">
                                            </td>
                                        @else
                                            <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                                {{ !empty($item->{$column['key']}) ? $item->{$column['key']} : '-' }}
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="px-6 py-4 text-right text-sm">
                                        <x-jet-button wire:click="updateShowModal({{ $item->id }})">
                                            {{ __('Update') }}
                                        </x-jet-button>
                                        <x-jet-danger-button wire:click="deleteShowModal({{ $item->id }})">
                                            {{ __('Delete') }}
                                            </x-jet-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No Results Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="my-3">
        {{ $data->links() }}
    </div>



    {{-- Modal Form --}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <form wire:submit.prevent="submit" enctype="multipart/form-data">
            <x-slot name="title">
                {{ __('Form Service') }}
            </x-slot>

            <x-slot name="content">
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="name" />
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="price" value="{{ __('Price') }}" />
                    <div class="mt-1 block w-full flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                        Rp.
                    </span>
                        <x-jet-input wire:model="price" type="number" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="price" />
                    </div>
                    @error('price') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="day_min" value="{{ __('Day Min') }}" />
                    <x-jet-input id="day_min" class="block mt-1 w-full" type="number" wire:model.debounce.800ms="day_min" />
                    @error('day_min') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="day_max" value="{{ __('Day Max') }}" />
                    <x-jet-input id="day_max" class="block mt-1 w-full" type="number" wire:model.debounce.800ms="day_max" />
                    @error('day_max') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="image" value="{{ __('Image') }}" />
                    <x-jet-input type="file" id="image" class="block mt-1 w-full" wire:model="image" />
                    <div wire:loading wire:target="image">Uploading...</div>
                    @error('image') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="description" value="{{ __('Description') }}" />
                    <textarea id="description" class="block mt-1 w-full" type="text" rows="3" name="description" wire:model.debounce.800ms="description">

                </textarea>
                    @error('description') <span class="error">{{ $message }}</span> @enderror
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                    {{ __('Nevermind') }}
                </x-jet-secondary-button>

                @if ($modelId)
                    <x-jet-button class="ml-2" type="submit" wire:click="update" wire:loading.attr="disabled">
                        {{ __('Update') }}
                        </x-jet-danger-button>
                        @else
                            <x-jet-button class="ml-2" type="submit" wire:click="create" wire:loading.attr="disabled">
                                {{ __('Create') }}
                                </x-jet-danger-button>
                @endif

            </x-slot>
        </form>
    </x-jet-dialog-modal>

    {{-- The Delete Modal --}}

    <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
        <x-slot name="title">
            {{ __('Delete Service') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this service?') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
