<div class="w-full mt-4 p-4 box-border">
    <p class="text-xl pb-1 flex items-center">
     <i class="fas fa-list mr-3"></i> Ambulance Informative lists
    </p>
    <div class="flex justify-end sm:px-6 lg:px-8 py-4 ">
      
      <a href={{ url('/ambulance/create') }} >
      <button  class="bg-red-600 p-4 w-full cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-red-400 flex items-center justify-center">New Report</button>
      </a>
    </div>
    <div class="bg-white overflow-auto">
        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
                
                <tr>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Date Of Call</th>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Caller Name</th>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Depature Time</th>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Patient Name</th>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Address</th>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">time Collected</th>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Handed Time</th>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Crew</th>
                    
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Officer In Charge</th>
                    <th class="py-4 px-1 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actoin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ambulances as $ambulance)
                <tr class="hover:bg-grey-lighter">
                    
                    <td class="py-4 px-1 border-b border-grey-light">
                      {{Carbon\Carbon::create($ambulance->date)->toFormattedDateString()}}
                    </td>
  
                    <td class="py-4 px-1 border-b border-grey-light">
                      {{$ambulance->caller_name}}
                    </td>
  
  
                    <td class="py-4 px-1 border-b border-grey-light">
                     {{$ambulance->depature_time}}
                    </td>
                    <td class="py-4 px-1 border-b border-grey-light">
                      {{$ambulance->patient_name}}
                    </td>
                  <td class="py-4 px-1 border-b border-grey-light">
                      {{$ambulance->patient_address}}
                  </td>
                  <td class="py-4 px-1 border-b border-grey-light">
                    {{$ambulance->time_collected}}
                  </td>
                
                  <td class="py-4 px-1 border-b border-grey-light">
                      {{$ambulance->handed_time}}
                  </td>
                  <td class="py-4 px-1 border-b border-grey-light">
                      {{$ambulance->$crew}}
                  </td>
                  <td class="py-4 px-1 border-b border-grey-light">
                      {{$ambulance->Officer_in_charge}}
                  </td>
                 
                  <td class="py-4 px-1 border-b border-grey-light">
                      <a href="/fire/view/{{$ambulance->id}}" class="text-indigo-600 hover:text-indigo-900">
                        <i class="fas fa-eye">view</i>
                      </a>
                    <a href="/fire/edit/{{$ambulance->id}}" class="text-green-600 hover:text-green-900">
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