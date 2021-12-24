<div class="w-full mt-4 p-4 box-border" x-data="{open:false, isUpdate:false}" >
    <div x-show="open" x-transition.500ms  class="w-50 absolute bg-gray-800 p-0 inset-0 h-screen bg-opacity-10 flex justify-center items-center">
        {{-- bg-gradient-to-br rounded-sm from-red-800 to-red-200 --}}
      <div class="w-1/2 shadow-lg p-0 border-2">
        <div class="flex">
            <div class="w-full">
                {{-- form inputted --}}
                <form action="#" method="POST">
                    <div class="shadow sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="flex  place-content-between mb-2">
                                <h2 class="text-xl"> Leave</h2>
                                <div class="text-right"> 
                                    <span class="p-1 px-2 border-2 cursor-pointer rounded-full hover:border-gray-600" @click.prevent="open=false">&times</span>
                                </div>
                               
                            </div>
                          <div class="grid grid-cols-3 ">
                            
         
                              <div class="col-span-6 md:col-span-4 mb-3">
                                <label for="time" class="block text-sm font-medium text-gray-700">Personnel</label>

                                <select wire:model.lazy="personnel_id"class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  <option value="">Select Personnel</option>
                                  @foreach ($personnels as $personnel)
                                  <option value="{{$personnel->id}}">{{$personnel->name}}</option>
                                  @endforeach
                                 
                                </select>
                                @error('personnel_id') <span class="error text-red-500">{{ $message }}</span> @enderror
                                
                              </div>

                              <div class="col-span-6 md:col-span-4 mb-3">
                                <label for="time" class="block text-sm font-medium text-gray-700">Number Of Days</label>
                                <input wire:model.lazy="numberOfDays" type="number"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                >
                                @error('numberOfDays') <span class="error text-red-500">{{ $message }}</span> @enderror
        
                              </div>
        
                              <div class="col-span-6 md:col-span-4 mb-3">
                                <label for="time" class="block text-sm font-medium text-gray-700">Start Date</label>
                                <input wire:model.lazy="startDate" type="date"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                >
                                @error('startDate') <span class="error text-red-500">{{ $message }}</span> @enderror
        
                              </div>
        
                            

                              <div class="col-span-6 md:col-span-4 mb-3">
                                <label for="time" class="block text-sm font-medium text-gray-700">Resumption Date</label>
                                <input wire:model.lazy="endDate" type="text"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                readonly
                                >
                                @error('endDate') <span class="error text-red-500">{{ $message }}</span> @enderror
        
                              </div>

        
                           
         
                          </div>
                        </div>
                        <div class="px-4 flex py-3 content-around bg-gray-50 text-right sm:px-6">

                            <button   class="inline-flex bg-gray-600 p-4 w-1/2 cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 items-center justify-center" @click.prevent="open=false">Cancel</button>

                            <button x-show="!isUpdate" class="inline-flex bg-red-600 p-4 cta-btn w-1/2 ml-2 font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 items-center text-center justify-center" wire:click.prevent="store">Save</button>
                            <button x-show="isUpdate" class="inline-flex bg-red-600 p-4 cta-btn w-1/2 ml-2 font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 items-center text-center justify-center" wire:click.prevent="update()">Update</button>
                           
                          
        
                       
                        </div>
                      </div>
                </form>
                {{-- end of form inputs --}}
               
            </div>
        </div>
         
      </div>
    </div>
    <p class="text-xl pb-3 flex items-center">
     <i class="fas fa-list mr-3"></i> personnels
    </p>
    <div class="flex justify-end sm:px-6 lg:px-8 py-4 ">
        <a href="#" @click.prevent="open = !open; isUpdate=false">
        <button class="bg-green-400 p-4 w-full cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center" >New personnel</button>
        </a>
    </div>
    <div class="bg-white overflow-auto">
        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
                
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Crew</th>
                    
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Start Date</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">End Date</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actoin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leaves as $leave)
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">{{$leave->personnel->name}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{$leave->crew}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{$leave->start_date}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{$leave->end_date}}</td>
                    
                    <td class="py-4 px-4 border-b border-grey-light">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">
                          <i class="fas fa-eye"></i>
                        </a>
                      <a href="#" @click="open = !open; isUpdate= true" wire:click.prevent="edit({{$leave->id}})" class="text-green-600 hover:text-green-900">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">
                        <i class="fa fa-trash text-red-500" aria-hidden="true"></i>
                        {{-- <button class="bg-red-500 px-2 text-white rounded-sm">Delete</button> --}}
                      </a>
    
                    </td> 
                </tr>
                @endforeach
               
               
            </tbody>
        </table>
    </div>
    
</div>