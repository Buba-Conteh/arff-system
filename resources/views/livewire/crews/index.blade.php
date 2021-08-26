<div class="w-full mt-4 p-4 box-border">
    <p class="text-xl pb-3 flex items-center">
     <i class="fas fa-list mr-3"></i> Crews
    </p>
    <div class="flex justify-end sm:px-6 lg:px-8 py-4 ">
        <a href={{ url('/crews/create') }} >
        <button  class="bg-green-400 p-4 w-full cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">New Crew</button>
        </a>
    </div>
    <div class="bg-white overflow-auto">
        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
                
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Crew Commander</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Description</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">created_at</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actoin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($crews as $crew)
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">{{$crew->name}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{$crew->commander}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{$crew->description}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{$crew->created_at}}</td>
                    <td class="py-4 px-4 border-b border-grey-light">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">
                          <i class="fas fa-eye"></i>
                        </a>
                      <a href="#" wire:click.prevent="edit({{$crew->id}})" class="text-green-600 hover:text-green-900">
                        <i class="fas fa-edit    "></i>
                      </a>
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">
                        <i class="fa fa-trash text-red-500" aria-hidden="true"></i>
                        {{-- <button class="bg-red-500 px-2 text-white rounded-sm">Delete</button> --}}
                      </a>
    
                    </td> 
                </tr>
                @endforeach
               
               
            </tbody>
        </table>
    </div>
    
</div>