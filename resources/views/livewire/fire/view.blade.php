  <div class="flex place-items-end py-2 px-8 box-border justify-end" x-data={}>
    <button class="px-2 bg-gray-800 text-white" @click="printJS('/storage/fire-reports/fire2.pdf')">
      <i class="fas fa-print    "></i>
      Print
    </button>
  </div>
<div class="bg-white shadow sm:rounded-lg w-9/12 mx-auto">
    <div class="px-4 py-5 sm:px-6 border-b-2">
      <h3 class="text-lg leading-6 font-bold text-gray-900 text-center">
       ARFFS FIRE INFORMATIVE / INCIDENT REPORT {{date('Y')}}
      </h3>
      <div class="text-center">
        <img class="text-center mx-auto" src="{{asset('logo/gcaa-depositphotos-bgremover.png')}}" width="100" alt="">
      </div>
    </div>
    <table class="divide-y divide-gray-400 w-full">
      
        <tbody class="bg-white divide-y divide-gray-100 ">
          <tr class="">    
            <td class="px-6 y-4 whitespace-nowrap uppercase">
                Date Of Call
            </td>

            <td class="px-2 py-4 w-30 whitespace-nowrap">
                {{$fire->fire_date}}
            </td>
          </tr>
          <tr class="">
           
             
            <td class="px-6 y-4 whitespace-nowrap uppercase ">
                Time Of Call
            </td>

            <td class="px-2 w-30 py-4 whitespace-nowrap">
              {{$fire->call_time}}
            </td>   


          </tr>
          <tr class="">
                       
            <td class="px-6 y-4 whitespace-nowrap uppercase ">
               Time Of Depature
            </td>

              <td class="px-2 w-30 py-4 whitespace-nowrap">
               {{$fire->depature_time}}
              </td>

          </tr>
          <tr class="">
           
             
            <td class="px-6 y-4 whitespace-nowrap uppercase ">
                Nature Of Call
              </td>

              <td class="px-2 w-30 py-4 whitespace-nowrap">
                {{$fire->call_nature}}
              </td>


          </tr>
          <tr class="">       
             
            <td class="px-6 y-4 whitespace-nowrap uppercase">
                Nature Of Fire
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->fire_nature}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-6 y-4 whitespace-nowrap uppercase">
               Materials Involved
            </td>

            <td class="px-2 w-30 py-4 whitespace-nowrap">
                {{$fire->materials_involve}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-6 y-4 whitespace-nowrap uppercase">
                Cause Of Fire / Incident
            </td>

            <td class="px-2 w-30 py-4 whitespace-nowrap">
                {{$fire->fire_caurse}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-6 y-4 whitespace-nowrap uppercase">
                Medium Used
            </td>

            <td class="px-2 w-30 py-4 whitespace-nowrap">
                {{$fire->medium}}
            </td>


          </tr>
          <tr class="">       
             
            <td class="px-6 y-4 whitespace-nowrap uppercase">
                Crew On Duty
            </td>

            <td class="px-2 w-30 py-4 whitespace-nowrap">
                {{$fire->crew->name}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-6 y-4 whitespace-nowrap uppercase ">
               Time Of Extiction
            </td>

            <td class="px-2 w-30 py-4 whitespace-nowrap">
                {{$fire->extinction_time}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-6 y-4 whitespace-nowrap uppercase">
               Crew Commander's Comment
            </td>

            <td class="px-2 w-30 py-4 whitespace-pre-wrap">
                {{$fire->crew_commanders_comment}}
            </td>
          </tr>
               
       
        </tbody>
    </table>
  </div>
  
</div>
