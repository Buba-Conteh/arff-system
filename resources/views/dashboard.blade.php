<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden  sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
              <div class="md:grid grid-cols-3">
                <div class="p-4 py-10 mx-2 bg-white text-gray-600 flex rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg ">
                    <div class="flex justify-between ">
                        <i class="fa fa-fire fa-4x flex-grow-1 mr-1 text-transparent text-8xl bg-clip-text bg-gradient-to-r from-red-600 to-red-300" aria-hidden="true"></i>
                        <div class="text-5xl font-bold mt-3 text-gray-400">Fire</div>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-400">{{$fireAmount}}</h2>
                   
                </div>

                <div class="p-4 py-10 mx-2 bg-white text-gray-600 flex rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg ">
                    <div class="flex justify-between ">
                        <i class="fa fa-ambulance fa-4x flex-grow-1 mr-1 text-transparent text-8xl bg-clip-text bg-gradient-to-r from-red-600 to-red-300" aria-hidden="true"></i>
                        {{-- <i class="" aria-hidden="true"></i> --}}
                        <div class="text-5xl font-bold mt-3 text-gray-400">Ambulance</div>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-400">{{$ambulanceAmount}}</h2>
                   
                </div>
                <div class="p-4 py-10 mx-2 bg-white text-gray-600 flex rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg ">
                    <div class="flex justify-between ">
                        <i class="fa fa-home fa-4x flex-grow-1 mr-1 text-transparent text-8xl bg-clip-text bg-gradient-to-r from-red-600 to-red-300" aria-hidden="true"></i>
                        {{-- <i class="" aria-hidden="true"></i> --}}
                        <div class="text-5xl font-bold mt-3 text-gray-400">Leaves</div>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-400">{{$leaveAmount}}</h2>
                   
                </div>
            
              </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
