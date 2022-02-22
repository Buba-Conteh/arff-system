<x-modal :value="$id">
    {{-- <x-slot name="trigger">
       
    </x-slot> --}}
    <form action="#" method="POST">
        <div class="shadow sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="flex  place-content-between mb-2">
                    <h2 class="text-xl"> Personnel</h2>
                    <div class="text-right">
                        <span
                            class="p-1 px-2 border-2 cursor-pointer rounded-full hover:border-gray-600"
                           >&times</span>
                    </div>
    
                </div>
                <div class="grid grid-cols-3 ">
    
    
                    <div class="col-span-6 md:col-span-4 mb-3">
                        <label for="time" class="block text-sm font-medium text-gray-700">name</label>
                        <input type="text" wire:model.lazy="name" id="email-address" autocomplete="name"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('name') <span class="error text-red-500">{{ $message }}</span>
                        @enderror
    
                    </div>
    
                    <div class="col-span-6 md:col-span-4">
                        <label for="time" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input wire:model.lazy="phone" type="text"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('phone') <span class="error text-red-500">{{ $message }}</span>
                        @enderror
    
                    </div>
    
                    <div class="col-span-6 md:col-span-4">
                        <label for="time"
                            class="block text-sm font-medium text-gray-700">Address</label>
                        <input wire:model.lazy="address" type="text"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('address') <span class="error text-red-500">{{ $message }}</span>
                        @enderror
    
                    </div>
    
    
                    <div class="col-span-3 md:col-span-2 mr-2">
                        <label for="country"
                            class="block text-sm font-medium text-gray-700">Rank</label>
                        <select id="country" wire:model.lazy="rank_id" autocomplete="country"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    
                            <option value="">Select Rank</option>
                            @foreach ($ranks as $rank)
                                <option value="{{ $rank->id }}">{{ $rank->name }}</option>
                            @endforeach
                        </select>
                        @error('rank_id') <span class="error text-red-500">{{ $message }}</span>
                        @enderror
    
                    </div>
    
                    <div class="col-span-3 md:col-span-2">
                      <label for="country"
                          class="block text-sm font-medium text-gray-700">Crew</label>
                      <select id="country" wire:model.lazy="crew_id" autocomplete="country"
                          class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    
                          <option value="">Select Crew</option>
                          @foreach ($crews as $crew)
                              <option value="{{ $crew->id }}">{{ $crew->name }}</option>
                          @endforeach
                      </select>
                      @error('crew_id') <span class="error text-red-500">{{ $message }}</span>
                      @enderror
    
                  </div>
    
    
    
                </div>
            </div>
            <div class="px-4 flex py-3 content-around bg-gray-50 text-right sm:px-6">
    
                <button
                    class="inline-flex bg-gray-600 p-4 w-1/2 cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 items-center justify-center"
                    @click.prevent="open=false">Cancel</button>
    
                <button x-show="!isUpdate"
                    class="inline-flex bg-red-600 p-4 cta-btn w-1/2 ml-2 font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 items-center text-center justify-center"
                    wire:click.prevent="store">Save</button>
                <button x-show="isUpdate"
                    class="inline-flex bg-red-600 p-4 cta-btn w-1/2 ml-2 font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 items-center text-center justify-center"
                    wire:click.prevent="update()">Update</button>
    
    
    
    
            </div>
        </div>
    </form>

    <x-slot name="trigger">
        <button class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
            {{-- <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg> --}}
            NEW Persoonel
        </button>
    </x-slot>

</x-modal>
