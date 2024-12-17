<x-admin-layout>

    @section('title','View all users')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            {{ __('all users') }}
        </h2>
        
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-start mt-3 p-3">
             
            <div>
                <form action="{{route('global-search')}}" method="get">
                    @csrf
                    <input 
                        type="search" 
                        name="search" 
                        placeholder="search users" 
                        class="w-full border rounded-2xl">
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-3 p-3 rounded-sm">
            
               
            <div class="overflow-x-auto">
               
                <table class="min-w-full mt-3 md:table-auto border-separate border-spacing-3 border border-slate-400 p-5">
                    <thead>
                      <tr>
                        <th class="border p-3">{{__('Id')}}</th>
                        <th class="border p-3">{{__('Name')}}</th>
                        <th class="border p-3">{{__('Email')}}</th>
                        <th class="border p-3">{{__('Created at')}}</th>
                        <th class="border p-3">{{__('Updated at')}}</th>
                        <th class="border p-3">{{__('Show')}}</th>
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
                            <td class="border p-3">
                                <x-nav-link :href="route('users.show',$item->id)">
                                    {{ __('Show') }}
                                </x-nav-link>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                  </table>
            </div>
       
        
        </div>
    </div>
 
</x-admin-layout>

 