<div x-show="open" x-transition.500ms  class="w-50 absolute bg-gray-800 p-0 inset-0 h-screen bg-opacity-10 flex justify-center items-center">
    {{-- bg-gradient-to-br rounded-sm from-red-800 to-red-200 --}}
  <div class="w-1/2 shadow-lg p-0 border-2">
    <div class="flex">
        <div class="w-full">
           
            {{$slot}}
           
        </div>
    </div>
     
  </div>
</div>