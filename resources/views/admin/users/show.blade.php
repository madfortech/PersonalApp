<x-admin-layout>

    @section('title','View users')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
        
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex flex-row gap-3 p-3 rounded-sm">
           
               
            <div class="overflow-x-auto">
                <div>
                    
                    <ul class="list-reset flex capitalize border p-2 rounded-md">
                        <li class="mr-6">
                            <x-nav-link :href="route('admin.dashboard')">
                                {{ __('home') }}
                            </x-nav-link>
                          
                        </li>
                        <li class="mr-6">
                            <x-nav-link :href="route('admin.dashboard',$user->id)">
                                {{ __('users') }}
                            </x-nav-link>
                        </li>
                        <li class="mr-6">
                            <x-nav-link>
                                {{ __('users') }}
                            </x-nav-link>
                        </li>
                        
                      </ul>
                </div>
                <table class="min-w-full mt-3 md:table-auto border-separate border-spacing-3 border border-slate-400 p-5">
                    <thead>
                      <tr>
                        <th class="border p-3">{{__('Id')}}</th>
                        <th class="border p-3">{{__('Name')}}</th>
                        <th class="border p-3">{{__('Email')}}</th>
                        <th class="border p-3">{{__('Created at')}}</th>
                        <th class="border p-3">{{__('Updated at')}}</th>
                        
                      </tr>
                    </thead>
                
                        <tbody>
                        <tr>
                            <td class="border p-3">{{ $user->id ?? '' }}</td>
                            <td class="border p-3">{{ $user->name ?? '' }}</td>
                            <td class="border p-3">{{ $user->email ?? '' }}</td>
                            <td class="border p-3">{{ $user->created_at ?? '' }}</td>
                            <td class="border p-3">{{ $user->updated_at ?? '' }}</td>
                            
                        </tr>
                        </tbody>
                  
                  </table>
            </div>
       
        
        </div>
    </div>
 
</x-admin-layout>

 