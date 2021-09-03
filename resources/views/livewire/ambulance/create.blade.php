<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8" x-data="{ open:true}">
    <h2 class="text-2xl font-semibold text-center">New Ambulance Incident</h2>
      <div class="mt-10 sm:mt-0">
          <div class="md:grid grid-cols-5">
            <div class="col-start-2 mt-5 md:mt-0 col-span-3">
              @if (session()->has('sucess'))
                <div x-show="open" x-transition.duration.500ms class="bg-green-100 w-100 py-5 border-green-500 border-l-8 px-3 my-2 text-gray-600">
                    {{ session('sucess') }}
                </div>
              @endif
            <form action="#" wire:submit.prevent="store" method="POST">
              <div class="shadow sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid md:grid-cols-4 gap-6">
                      <div class="col-span-2">
                        <label for="fire_date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" wire:model.lazy="date" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
  
                        @error('date') <span class="error text-red-500">{{ $message }}</span> @enderror
                      </div>
      
                      <div class="col-span-2">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Depature Time</label>
                        <input type="time" wire:model.lazy="depature_time" id="time" autocomplete="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('depature_time') <span class="error text-red-500">{{ $message }}</span> @enderror
  
                      </div>
      
                      <div class="col-span-2">
                        <label for="time" class="block text-sm font-medium text-gray-700">Patient Name</label>
                        <input type="text" wire:model.lazy="patient_name" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('patient_name') <span class="error text-red-500">{{ $message }}</span> @enderror
  
                      </div>
                      <div class="col-span-2">
                          <label for="fire_nature" class="block text-sm font-medium text-gray-700">Address</label>
                          <input type="text" wire:model.lazy="patient_address" id="fire_nature" autocomplete="fire_nature" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                          @error('patient_address') <span class="error text-red-500">{{ $message }}</span> @enderror
  
                      </div>
  
                      <div class="col-span-2">
                          <label for="call_nature" class="block text-sm font-medium text-gray-700">Caller Name</label>
                          <input type="text" wire:model.lazy="caller_name" id="call_nature" autocomplete="caller_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                          @error('caller_name') <span class="error text-red-500">{{ $message }}</span> @enderror
  
                        </div>

                        <div class="col-span-2">
                            <label for="call_nature" class="block text-sm font-medium text-gray-700">Time Collected</label>
                            <input type="time" wire:model.lazy="time_collected" id="call_nature" autocomplete="time_collected" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('time_collected') <span class="error text-red-500">{{ $message }}</span> @enderror
    
                          </div>
  
                        <div class="col-span-2">
                          <label for="time" class="block text-sm font-medium text-gray-700">Hospital Arival Time</label>
                          <input type="time" wire:model.lazy="hospital_arrival_time" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                          @error('hospital_arrival_time') <span class="error text-red-500">{{ $message }}</span> @enderror
  
                        </div>
  
                        <div class="col-span-2">
                          <label for="time" class="block text-sm font-medium text-gray-700">handed_time</label>
                          <input wire:model.lazy="handed_time" type="time"
                          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                          >
                          @error('handed_time') <span class="error text-red-500">{{ $message }}</span> @enderror
  
                        </div>
                        <div class="col-span-2">
                          <label for="time" class="block text-sm font-medium text-gray-700">Officer In Charge</label>
                          <input wire:model.lazy="Officer_in_charge" type="text"
                          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                          >
                          @error('Officer_in_charge') <span class="error text-red-500">{{ $message }}</span> @enderror
  
                        </div>
  
  
                      <div class="col-span-2 ">
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
                          <textarea wire:model.lazy="crew_commander" id="" cols="10" rows="5"
                          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                          ></textarea>
                          @error('crew_commander') <span class="error text-red-500">{{ $message }}</span> @enderror
  
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