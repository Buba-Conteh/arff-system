<div class="w-full mt-4 p-4 box-border" x-data={showFilter:false}>
  <p class="text-xl pb-1 flex items-center">
   <i class="fas fa-list mr-3"></i> Fire Informative lists
  </p>
  <div class="flex justify-end sm:px-6 lg:px-8 py-4 ">
    
    <a class="mx-3">
    <button  class="bg-gray-600 p-4 w-full cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 flex items-center justify-center" @click.prevent="showFilter=!showFilter">Filter</button>
    </a>
    <a href={{ url('/fire/create') }} >
    <button  class="bg-red-600 p-4 w-full cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 flex items-center justify-center">New Report</button>
    </a>
  </div>
  {{-- filter card --}}
  <div class="bg-white overflow-auto py-4 my-3" x-show="showFilter">
    <form class="flex">
      <div class="mx-2">
        <label for="" class="block">Date</label>
        <input type="date" wire:model.lazy="date"  placeholder="">
      </div>
      <div class="">
        <div class="form-group">
          <label class="block" for="">Crew</label>
          <select wire:model.lazy="crew" class="form-control">
            @foreach ($crews as $crew)
            <option value="{{$crew->id}}">{{$crew->name}}</option>
            @endforeach
        
          </select>
        </div>
      
      </div>
      
      <div class="div pt-6">
        <button wire:click.prevent="search" class="bg-gray-600 p-1 cta-btn font-semibold mx-2 pt-3 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-400 text-center px-4 text-white">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </div>
     
    </form>
   
  </div>
 {{--End Of filter card --}}
  <div class="bg-white overflow-auto">
      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
          <thead>
              
              <tr>
                  <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Date Of Call</th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Time Of Call</th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nature Of Call</th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nature Of Fire</th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Cause Of Fire / Incident</th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Crew On Duty</th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Time Of Extiction </th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actoin</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($fires as $fire)
              <tr class="hover:bg-grey-lighter">
                  
                  <td class="py-4 px-6 border-b border-grey-light">
                    {{Carbon\Carbon::create($fire->fire_date)->toFormattedDateString()}}
                  </td>

                  <td class="py-4 px-6 border-b border-grey-light">
                    {{$fire->call_time}}
                  </td>


                  <td class="py-4 px-6 border-b border-grey-light">
                   {{$fire->call_nature}}
                  </td>
                  <td class="py-4 px-6 border-b border-grey-light">
                    {{$fire->fire_nature}}
                  </td>
                <td class="py-4 px-6 border-b border-grey-light">
                    {{$fire->fire_caurse}}
                </td>
                <td class="py-4 px-6 border-b border-grey-light">
                  {{$fire->crew->name}}
                </td>
                 <td class="py-4 px-6 border-b border-grey-light">
                    {{$fire->extinction_time}}
                </td>
                <td class="py-4 px-1 border-b border-grey-light">
                    <a href="/fire/view/{{$fire->id}}" class="hover:text-gray-500">
                      <i class="fas fa-eye"></i>
                    </a>
                  <a href="/fire/edit/{{$fire->id}}" class="hover:text-gray-500">
                    <i class="fas fa-edit    "></i>
                  </a>
                  <a href="#" class="hover:text-gray-500">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    {{-- <button class="bg-red-500 px-2 text-white rounded-sm">Delete</button> --}}
                  </a>

                </td> 
              </tr>
              @endforeach
             
             
          </tbody>
      </table>
  </div>
  
</div>