<div class="px-4 pt-5 w-1/2 m-auto pb-4">
<div class="bg-gray-200 shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6 border-b-4">
      <h3 class="text-lg leading-6 font-bold text-gray-900">
       ARFFS FIRE INFORMATIVE / INCIDENT REPORT {{date('Y')}}
      </h3>
     
    </div>
    <table class="w-full divide-y divide-gray-200">
      
        <tbody class="bg-white divide-y divide-gray-200">
          <tr class="">    
            <td class="px-2 w-2 y-4 whitespace-nowrap">
                Date Of Call
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->fire_date}}
            </td>
          </tr>
          <tr class="">
           
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
                Time Of Call
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
              {{$fire->call_time}}
            </td>   


          </tr>
          <tr class="">
                       
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
               Time Of Depature
            </td>

              <td class="px-2 py-4 whitespace-nowrap">
               {{$fire->depature_time}}
              </td>

          </tr>
          <tr class="">
           
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
                Nature Of Call
              </td>

              <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->call_nature}}
              </td>


          </tr>
          <tr class="">       
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
                Nature Of Fire
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->fire_nature}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
               Materials Involved
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->materials_involve}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
                Cause Of Fire / Incident
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->fire_caurse}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
                Medium Used
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->medium}}
            </td>


          </tr>
          <tr class="">       
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
                Crew On Duty
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->crew}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
               Time Of Extiction
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->extinction_time}}
            </td>


          </tr>

          <tr class="">       
             
            <td class="px-2 w-2 y-4 whitespace-nowrap ">
               Crew Commander's Comment
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{$fire->crew_commanders_comment}}
            </td>
          </tr>
               
       
          <!-- More people... -->
        </tbody>
      </table>
  </div>
  
</div>

  