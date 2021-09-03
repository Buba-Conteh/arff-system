<div class="max-w-7xl py-6 sm:px-6 px-8">
    @if(session('sucess'))
    <div class="from-green-300 bg-gradient-to-r w-100 p-5 absolute right-5 border-t-8 border-green-500 transition duration-500 ease-in-ou" >
        <i class=" text-white fas fa-thumbs-up " aria-hidden="true"></i>

  {{ session('sucess') }}
        
    </div>
    @endif
    <div class="mt-10 sm:mt-0">
        <div class="md:grid grid-cols-5">
          <div class="col-start-2 mt-5 md:mt-0 col-span-3">
            
             
            {{-- @endif --}}
          <form action="#" wire:submit.prevent="store" method="POST">
            <div class="shadow sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid lg:grid-cols-3 ">
                    
 
                      <div class="col-span-6 md:col-span-4 mb-3">
                        <label for="time" class="block text-sm font-medium text-gray-700">Crew Name</label>
                        <input type="text" wire:model.lazy="name" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                        
                      </div>

                      <div class="col-span-6 md:col-span-4">
                        <label for="time" class="block text-sm font-medium text-gray-700">Crew Commander</label>
                        <input wire:model.lazy="commander" type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        >
                        @error('commander') <span class="error text-red-500">{{ $message }}</span> @enderror

                      </div>

                      <div class="col-span-6 md:col-span-4">
                        <label for="time" class="block text-sm font-medium text-gray-700">Description</label>
                        <input wire:model.lazy="description" type="text"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        >
                        @error('description') <span class="error text-red-500">{{ $message }}</span> @enderror

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