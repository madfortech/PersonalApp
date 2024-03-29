<x-admin-layout>

    @section('title','View all users')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
        
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex flex-row gap-3 p-3 rounded-sm">
            <div class="basis-1/3 p-5 border-2 rounded-sm">
                @include('partials.posts.latest-posts')
            </div>
        
            <div class="overflow-x-auto">
                <table class="min-w-full mt-3 md:table-auto border-separate border-spacing-3 border border-slate-400 p-5">
                    <thead>
                      <tr>
                        <th class="border p-3">Id</th>
                        <th class="border p-3">Email</th>
                        
                        <th class="border p-3">Created at</th>
                        <th class="border p-3">Updated at</th>
                      
                      </tr>
                    </thead>
                    @foreach($user as $item)
                        <tbody>
                        <tr>
                            <td class="border p-3">{{ $item->id ?? '' }}</td>
                            <td class="border p-3">{{ $item->name ?? '' }}</td>
                            <td class="border p-3">{{ $item->email ?? '' }}</td>
                            <td class="border p-3">{{ $item->created_at ?? '' }}</td>
                            <td class="border p-3">{{ $item->updated_at ?? '' }}</td>
                            
                        </tr>
                        </tbody>
                    @endforeach
                  </table>
            </div>
        
            {{-- <div class="basis-1/6 p-5 border-2 rounded-sm">
              
            </div> --}}
        
        </div>
    </div>
 
</x-app-layout>

 