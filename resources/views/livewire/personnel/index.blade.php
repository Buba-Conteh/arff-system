<div class="w-full mt-4 p-4 box-border" x-data="{open:false, isUpdate:false}">
    <div x-show="open" x-transition.500ms
        class="w-50 absolute bg-gray-800 p-0 inset-0 h-screen bg-opacity-10 flex justify-center items-center">
        {{-- bg-gradient-to-br rounded-sm from-red-800 to-red-200 --}}
        <div class="w-1/2 shadow-lg p-0 border-2">
            <div class="flex">
                <div class="w-full">
                    {{-- form inputted --}}
                    
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
            <button
                class="bg-green-400 p-4 w-full cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">New
                personnel</button>
        </a>
    </div>
    <div class="overflow-auto">
        {{-- <livewire:datatable model="{{$personnels}}" 
        name="Personnel"
        include="name, phone, address"
        searchable="name, phone"
        exportable
        /> --}}
        {{-- <livewire:personnels/> --}}
        <livewire:livewire-datatables searchable="name, phone, address,crew|name" exportable />

    </div>

</div>
