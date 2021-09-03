<div class="w-full mt-4 p-4 box-border">
  <p class="text-xl pb-1 flex items-center">
   <i class="fas fa-list mr-3"></i> Fire Informative lists
  </p>
  <div class="flex justify-end sm:px-6 lg:px-8 py-4 ">
    
    <a href={{ url('/fire/create') }} >
    <button  class="bg-red-600 p-4 w-full cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 flex items-center justify-center">New Report</button>
    </a>
  </div>
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
                    <a href="/fire/view/{{$fire->id}}" class="text-indigo-600 hover:text-indigo-900">
                      <i class="fas fa-eye">view</i>
                    </a>
                  <a href="/fire/edit/{{$fire->id}}" class="text-green-600 hover:text-green-900">
                    <i class="fas fa-edit    ">eddit</i>
                  </a>
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">
                    <i class="fa fa-trash text-red-500" aria-hidden="true">delete</i>
                    {{-- <button class="bg-red-500 px-2 text-white rounded-sm">Delete</button> --}}
                  </a>

                </td> 
              </tr>
              @endforeach
             
             
          </tbody>
      </table>
  </div>
  
</div>