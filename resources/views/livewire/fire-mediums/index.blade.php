<div class="w-full mt-4 p-4 box-border">
    <p class="text-xl pb-3 flex items-center">
     <i class="fas fa-fire-extinguisher mr-3"></i>
     Fire Extinguishing Mediums
    </p>
    <div class="flex justify-end sm:px-6 lg:px-8 py-4 ">
        <a href={{ url('/fire-meduims/create') }} >
        <button  class="bg-green-400 p-4 w-full cta-btn font-semibold py-2 mt-2 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">New Medium</button>
        </a>
    </div>
    <div class="bg-white overflow-auto">
        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
                
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Description</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">created_at</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actoin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mediums as $medium)
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">{{$medium->name}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{$medium->description ?? '-'}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{$medium->created_at}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">actoins</td>
                </tr>
                @endforeach
               
               
            </tbody>
        </table>
    </div>
    
</div>