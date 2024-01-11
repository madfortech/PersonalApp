<x-app-layout>
              <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
                  {{ __('invite new user') }}
                </h2>
              </x-slot>
 
            
              <div class="lg:grid grid-cols-3 gap-4 p-8 px-4">
                <div class="mt-10 border-2 p-3 py-5">
                  @session('status')
                  <div class="alert alert-success bg-green-400 text-white p-2" role="alert">
                    {{ $value }}
                  </div>
                  @endsession

            

                  <h3 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
                    invite new user with role as permissions
                  </h3>
                 
                  <!-- create users -->
                  <form method="POST" 
                    action="{{ route('users.store') }}" 
                    enctype="multipart/form-data">
                  
                    @csrf
                    <x-honeypot />

                    <div class="mt-4">
                        <label for="name" :value="__('Name')" >
                          <input id="name" type="text" 
                            class="rounded border-gray-300 text-indigo-600 
                            shadow-sm focus:ring-indigo-500 w-full" 
                            name="name"
                            placeholder="full name">
                          <x-input-error :messages="$errors->get('nameenv')" class="mt-2" />
                        </label>
                    </div>
                    <!-- Name -->
                
                    <div class="mt-4">
                        <label for="email" :value="__('Email')" >
                          <input id="email" type="email" 
                            class="rounded border-gray-300 text-indigo-600 
                            shadow-sm focus:ring-indigo-500 w-full" 
                            name="email"
                            placeholder="mail@example.com">
                          <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </label>
                    </div>
                    <!-- Email -->

                    <div class="mt-4">
                        <label for="roles" :value="__('Choose Roles')" >
                          {{(' Choose Roles')}}
                            <select class="px-4 py-3 w-full" name="roles[]" multiple>
                                @foreach($roles as $role => $name)
                                
                                    <option value="{{ $name }}">{{ $name }}</option>
                                  
                                @endforeach
                            </select>
                          
                            <x-input-error :messages="$errors->get('roles')" class="mt-2" />
                        </label>
                    </div>
                    <!-- Roles -->

                    <div class="mt-4">
                        <label for="permissions" :value="__('Choose Permissions')" >
                          {{(' Choose Permissions')}}
                            
                            <div class="grid grid-cols-1 border-2">
                              @foreach($permissions as $permission => $name)
                                
                                <x-text-input id="permission" class="mt-1"
                                    type="checkbox"
                                    value="{{$name}}"
                                    name="permission[]"
                                    />
                                    {{$name}}

                              @endforeach
                              <x-input-error :messages="$errors->get('permissions')" class="mt-2" />
                            </div>
                        </label>
                    </div>
                    <!-- Permissions -->

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        placeholder="new password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation"
                                        placeholder="confirm password" 
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-primary-button>
                            {{ __('Send Invite') }}
                        </x-primary-button>
                    </div>
                  </form>
                  <!-- end create users -->
                </div>
                <!-- ... -->

                <!-- view all users -->
                <div class="mt-10 col-span-2 border-2 p-3 overflow-x-auto">
                  <h3 class="font-semibold text-xl text-gray-800 leading-tight mb-5 capitalize">
                    view all users
                  </h3>
               
                  <!-- All users -->
                  <table class="table-auto border-separate border border-slate-400 border-spacing-5 mt-3">
                    <thead class="border border-slate-300">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Show</th>
                        <th>Remove</th>
                      </tr>
                    </thead>
                    @foreach($users as $item)
                        <tbody class="border border-slate-300">
                        <tr>
                            <td> {{ $item->id }}</td>
                            <td> {{ $item->name }}</td>
                            <td> {{ $item->email }}</td>
                            <td> {{ $item->created_at }}</td>
                            <td> {{ $item->updated_at }}</td>
                            
                            <td>
                              <x-nav-link :href="route('users.show',$item->id)" :active="request()->routeIs('users.show')">
                                {{ __('Show') }}
                              </x-nav-link>
                            </td>
                            <td>
                              @if($item->roles->isNotEmpty() || $item->permissions->isNotEmpty())
                                <form 
                                    action="{{ route('users.destroy', $item->id) }}" 
                                    method="POST">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <div class="mt-4">
                                    <x-primary-button>
                                        {{ __('Remove') }}
                                    </x-primary-button>
                                  </div>
                                </form>
                              @endif
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                  </table>

                  <!-- All users -->
                </div>
                <!-- end view all users -->
              </div> 
</x-app-layout>
 