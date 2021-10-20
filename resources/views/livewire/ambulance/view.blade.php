<div class="px-2 pt-5 w-75 pb-4">
    <div class="flex place-items-end py-2 px-8 box-border justify-end">
      <button class="px-1 bg-gray-800 text-white" >Print</button>
    </div>
  <div class="bg-white shadow sm:rounded-lg w-9/12 mx-auto">
      <div class="px-4 py-5 sm:px-6 border-b-2">
        <h3 class="text-lg leading-6 font-bold text-gray-900 text-center">
         ARFFS AMBULANCE INFORMATIVE / INCIDENT REPORT {{date('Y')}}
        </h3>
        <div class="text-center">
          <img class="text-center mx-auto" src="{{asset('logo/gcaa-depositphotos-bgremover.png')}}" width="100" alt="">
        </div>
       
      </div>
      <table class="divide-y divide-gray-400 w-full">
        
          <tbody class="bg-white px-5 pb-8 box-border">
            <tr class="">    
              <td class="px-6 y-4 whitespace-nowrap uppercase">
                  Date Of Call
              </td>
  
              <td class="px-2 w-50 py-4 whitespace-nowrap">
                  {{$ambulance->date}}
              </td>
            </tr>
            {{-- <tr class="">
             
               
              <td class="px-2 y-4 whitespace-nowrap ">
                  Time Of Call
              </td>
  
              <td class="px-2 w-20 py-4 whitespace-nowrap">
                {{$ambulance->call_time}}
              </td>   
  
  
            </tr> --}}
            <tr class="">
                         
              <td class="px-6 uppercase y-4 whitespace-nowrap ">
                 Name Of Patient
              </td>
  
                <td class="px-2 w-50  py-4 whitespace-nowrap">
                 {{$ambulance->patient_name}}
                </td>
  
            </tr>
            <tr class="">
             
               
              <td class="px-6 uppercase y-4 whitespace-nowrap ">
                  Address Of Patient
                </td>
  
                <td class="px-2 w-50  py-4 whitespace-nowrap">
                  {{$ambulance->patient_address}}
                </td>
  
  
            </tr>
            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                  Name Of Caller
              </td>
  
              <td class="px-2 w-50 py-4 whitespace-nowrap ">
                  {{$ambulance->caller_name}}
              </td>
  
  
            </tr>
  
            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                 Time Collected
              </td>
  
              <td class="px-2 w-50  py-4 whitespace-nowrap">
                  {{$ambulance->time_collected}}
              </td>
  
  
            </tr>
  
            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                  Time OF Depature
              </td>
  
              <td class="px-2 w-50  py-4 whitespace-nowrap">
                  {{$ambulance->depature_time}}
              </td>
  
  
            </tr>
  
            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                 Time Of Arrival At The Hospital
              </td>
  
              <td class="px-2 w-50  py-4 whitespace-nowrap">
                  {{$ambulance->hospital_arrival_time}}
              </td>
  
  
            </tr>
            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                  Time Handed Over
              </td>
  
              <td class="px-2 w-50  py-4 whitespace-nowrap">
                  {{$ambulance->handed_time}}
              </td>
  
  
            </tr>
  
            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                 Crew On Duty
              </td>
  
              <td class="px-2 w-50  py-4 whitespace-nowrap">
                  {{$ambulance->crew->name}}
              </td>
  
  
            </tr>
  
            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                 Officer In Charge
              </td>
  
              <td class="px-2 w-50  py-4 whitespace-nowrap">
                  {{$ambulance->Officer_in_charge}}
              </td>
            </tr>

            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                 Crew Commander's Comment
              </td>
  
              <td class="px-2 w-50  py-4 whitespace-nowrap">
                  {{$ambulance->crew_commander}}
              </td>
            </tr>

            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                 S.A.F.O Operation
              </td>
  
              <td class="px-2 w-50 border-b-4 border-dotted py-4 whitespace-nowrap">
                  
              </td>
            </tr>

            <tr class="">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                 Deputy Chief Fire Ofiicer
              </td>
  
              <td class="px-2 w-50 border-b-4 border-dotted py-4 whitespace-nowrap">
                  
              </td>
            </tr>
                 
            <tr class="mb-10">       
               
              <td class="px-6 uppercase w-2 y-4 whitespace-nowrap ">
                Chief Fire Ofiicer
              </td>
  
              <td class="px-2 w-50 border-b-4 border-dotted py-4 whitespace-nowrap">
                  
              </td>
            </tr>

            
         
            <!-- More people... -->
          </tbody>
      </table>
    </div>
    
  </div>
  
    