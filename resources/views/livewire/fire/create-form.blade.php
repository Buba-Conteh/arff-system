<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="mt-10 sm:mt-0">
        <div class="md:grid grid-cols-5">
          <div class="col-start-2 mt-5 md:mt-0 col-span-3">
            @if (session()->has('sucess'))
              <div class="bg-green-100 w-100 py-5 border-green-500 border-l-8 px-3 my-2 text-gray-600">
                  {{ session('sucess') }}
              </div>
            @endif
          <form action="#" wire:submit.prevent="store" method="POST">
            <div class="shadow sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid md:grid-cols-3 gap-6">
                    <div class="">
                      <label for="fire_date" class="block text-sm font-medium text-gray-700">Date of Fire</label>
                      <input type="date" wire:model.lazy="fire_date" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                      @error('fire_date') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
    
                    <div class="">
                      <label for="last-name" class="block text-sm font-medium text-gray-700">Time OF call</label>
                      <input type="time" wire:model.lazy="call_time" id="time" autocomplete="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      @error('call_time') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>
    
                    <div class="">
                      <label for="time" class="block text-sm font-medium text-gray-700">Departure Time</label>
                      <input type="time" wire:model.lazy="depature_time" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      @error('depature_time') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>
                    <div class="col-span-2">
                        <label for="fire_nature" class="block text-sm font-medium text-gray-700">Nature of fire</label>
                        <input type="text" wire:model.lazy="fire_nature" id="fire_nature" autocomplete="fire_nature" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('fire_nature') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>

                    <div class="col-span-1">
                        <label for="call_nature" class="block text-sm font-medium text-gray-700">Nature of call</label>
                        <input type="text" wire:model.lazy="call_nature" id="call_nature" autocomplete="call_nature" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('call_nature') <span class="error text-red-500">{{ $message }}</span> @enderror

                      </div>

                      <div class="col-span-6 md:col-span-4">
                        <label for="time" class="block text-sm font-medium text-gray-700">Materials Involved</label>
                        <input type="text" wire:model.lazy="materials_involve" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('materials_involve') <span class="error text-red-500">{{ $message }}</span> @enderror

                      </div>

                      <div class="col-span-6 md:col-span-4">
                        <label for="time" class="block text-sm font-medium text-gray-700">Caurse of Fire / Incident</label>
                        <input wire:model.lazy="fire_caurse" type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        >
                        @error('fire_caurse') <span class="error text-red-500">{{ $message }}</span> @enderror

                      </div>
                      <div class="col-span-1 md:col-span-1">
                        <label for="time" class="block text-sm font-medium text-gray-700">Time Extinction</label>
                        <input wire:model.lazy="extinction_time" type="time"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        >
                        @error('fire_caurse') <span class="error text-red-500">{{ $message }}</span> @enderror

                      </div>

                      
                      
                    <div class="col-span-1 sm:col-span-1">
                      <label for="country" class="block text-sm font-medium text-gray-700">Medium used</label>
                      <select id="country" wire:model.lazy="fire_medium_id" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                        <option value="">Select Medium</option>
                        @foreach ($fireMediums as $medium)
                          <option value="{{$medium->id}}">{{$medium->name}}</option>
                        @endforeach
                      </select>
                      @error('fire_medium_id') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="country" class="block text-sm font-medium text-gray-700">Crew On Duty</label>
                        <select id="country" wire:model.lazy="crew_id" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                          <option value="">Select Crew</option>
                          @foreach ($crews as $crew)
                            <option value="{{$crew->id}}">{{$crew->name}}</option>
                          @endforeach
                          
                        </select>
                        @error('crew_id') <span class="error text-red-500">{{ $message }}</span> @enderror

                      </div>


                      <div class="col-span-6 md:col-span-4">
                        <label for="time" class="block text-sm font-medium text-gray-700">Crew Commander's Comment</label>
                        <textarea wire:model.lazy="crew_commanders_comment" id="" cols="10" rows="5"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        ></textarea>
                        @error('crew_commanders_comment') <span class="error text-red-500">{{ $message }}</span> @enderror

                      </div>
                   
                    
                  </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="reset"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Reset
                   </button>
                   
                  <button  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                  </button>

               
                </div>
              </div>



              </div>
              
          </form>
         </div>
        </div>
    </div>
</div>