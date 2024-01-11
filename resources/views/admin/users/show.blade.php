<x-app-layout>
              <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
                  {{ __('profile') }}
                </h2>
              </x-slot>

            {{-- <div class="py-12">
                {{-- <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                
                  <div class="min-w-full rounded overflow-hidden shadow-lg p-8 px-4">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
                        Individual Users
                    </h3>
                    <x-nav-link :href="route('users.create')" :active="request()->routeIs('users.create')">
                      {{ __('Create') }}
                    </x-nav-link>
                    
                    <!-- All users -->
                    <table class="border-separate table-auto border border-slate-400 border-spacing-5 mt-3">
                        <thead class="border border-slate-300">
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                          </tr>
                        </thead>
                        
                            <tbody class="border border-slate-300">
                            <tr>
                                <td> {{ $user->id }}</td>
                                <td> {{ $user->name }}</td>
                                <td> {{ $user->email }}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                        {{ $role->name }}
                                    @endforeach
                                </td>
                               
                                <td> {{ $user->created_at }}</td>
                                <td> {{ $user->updated_at }}</td>
                            </tr>
                            </tbody>
                      
                      </table>

                    <!-- All users -->
                  </div>
                </div> --}}
            {{-- </div>   --}}

            <div class="lg:grid grid-cols-3 gap-4 p-8 px-4">
              <div class="mt-10 border-2 p-3">
          
              </div>
              <!-- ... -->

              <!-- view all users -->
              <div class="mt-10 col-span-2 border-2 p-3 overflow-x-auto">
                <h3 class="font-semibold text-xl text-gray-800 leading-tight mb-5 capitalize">
                  profile
                </h3>
                
                @role('super-admin')
                  <x-nav-link :href="route('users.create')" :active="request()->routeIs('users.create')">
                    {{ __('Add new user') }}
                  </x-nav-link>
                @endrole

                <!-- All users -->
                <table class="table-auto border-separate border border-slate-400 border-spacing-5 mt-3">
                  
                      <tbody class="border border-slate-300">
                        <tr>
                          <td> {{ $user->name }}</td>
                          <td> {{ $user->email }}</td>
                          <td>
                            @foreach($user->roles as $role)
                              {{ $role->name }}
                            @endforeach
                          </td>
                
                          <td> {{ $user->created_at }}</td>
                          <td> {{ $user->updated_at }}</td>
                          
                          <td>
                            <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                              {{ __('Edit profile') }}
                            </x-nav-link>
                          </td>
                        </tr>
                      </tbody>
                  
                </table>

                <!-- profile -->
              </div>
              <!-- profile -->
            </div> 
             
</x-app-layout>
 