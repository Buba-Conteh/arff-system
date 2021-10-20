<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<style>
  body{
    padding: 1.5em;
    }
  table{
    width: 100%;
    margin: auto;
    border: 1px solid rgb(156, 153, 153);
    padding: 10px;
    position: relative;

  }
  td{
    padding: 0.5em;
  }
  .labels{
    width: 45%;
   min-width:15% ; 
   padding-left: 2.2em;
   font-weight: bolder;
  }
  .header{
    text-align: center;
  }
  .watermark{
    position: absolute;
    z-index: -1;
    top: 55%;
    left: 45%;
    color: grey;
  }
  
</style>
<body>
  <div class="header">
    <h2>
      ARFFS FIRE INFORMATIVE / INCIDENT REPORT 2021

    </h2>
    {{-- <!-- <img src="{{asset('logo/Fire-Department-Logo.png')}}" alt="" srcset=""> --> --}}
    <img src="/var/www/my-project/fire-informative/public/logo/gcaa-depositphotos-bgremover.png" width="130" alt="logo" srcset="">

  </div>
  <table class="divide-y divide-gray-400 w-full">
    <tbody class="bg-white divide-y divide-gray-100 ">
      <tr class="">    
        <td class="labels">
            Date Of Call
        </td>

        <td class="px-2 py-4 w-30 whitespace-nowrap">
          {{$fire->fire_date}}
        </td>
      </tr>
      <tr >
       
         
        <td class="labels ">
            Time Of Call
        </td>

        <td class="px-2 w-30 py-4 whitespace-nowrap">
         {{$fire->call_time}}
          12:57
        </td>   


      </tr>
      <tr >
                   
        <td class="labels ">
           Time Of Depature
        </td>

          <td class="px-2 w-30 py-4 whitespace-nowrap">
     {{$fire->depature_time}}
            </td>

      </tr>
      <tr >
       
         
        <td class="labels ">
            Nature Of Call
          </td>

          <td class="px-2 w-30 py-4 whitespace-nowrap">
       {{$fire->call_nature}} 
          
          </td>


      </tr>
      <tr >       
         
        <td class="labels">
            Nature Of Fire
        </td>

        <td class="px-2 py-4 whitespace-nowrap">
            {{$fire->fire_nature}}
              </td>


      </tr>

      <tr c>       
         
        <td class="labels">
           Materials Involved
        </td>

        <td class="px-2 w-30 py-4 whitespace-nowrap">
            <!-- {{$fire->materials_involve}} -->
        </td>


      </tr>

      <tr >       
         
        <td class="labels">
            Cause Of Fire / Incident
        </td>

        <td class="px-2 w-30 py-4 whitespace-nowrap">
          {{$fire->fire_caurse}}
        </td>


      </tr>

      <tr>       
         
        <td class="labels">
            Medium Used
        </td>

        <td class="px-2 w-30 py-4 whitespace-nowrap">
            {{$fire->medium}} 
        </td>


      </tr>
      <tr class="">       
         
        <td class="labels">
            Crew On Duty
        </td>

        <td class="px-2 w-30 py-4 whitespace-nowrap">
           {{$fire->crew->name}} 
        </td>


      </tr>

      <tr >       
         
        <td class="labels ">
           Time Of Extiction
        </td>

        <td class="px-2 w-30 py-4 whitespace-nowrap">
            {{$fire->extinction_time}} 
         
        </td>


      </tr>

      <tr >       
         
        <td class="labels">
           Crew Commander's Comment
        </td>

        <td class="px-2 w-30 py-4 whitespace-pre-wrap">
           {{$fire->crew_commanders_comment}}
            The Fire was successfuly controled with no loss of life.The Fire was successfuly
        controled with no loss of life. The Fire was successfuly controled with no loss of
          life. The Fire was successfuly controled with no loss of life
        </td>
      </tr>

      <tr class="">       
         
        <td class="labels">
          S.A.F.O OPERATION
        </td>

        <td class="px-2 w-30 py-4 whitespace-pre-wrap">
          ...........................................................................
        </td>
      </tr>

     <tr class="">       
         
        <td class="labels">
          DEPUTY CHIEF FIRE OFIICER
        </td>

        <td class="px-2 w-30 py-4 whitespace-pre-wrap">
          ...........................................................................
        </td>
      </tr>
      <tr class="">       
         
        <td class="labels">
          CHIEF FIRE OFIICER
        </td>

        <td class="px-2 w-30 py-4 whitespace-pre-wrap">
          ...........................................................................
        </td>
      </tr>
           
   
      <!-- More people... -->
    </tbody>
</table>
</body>
</html>