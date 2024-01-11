<x-app-layout>
              <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{-- {{ __('Add new permissions') }} --}}
                </h2>
              </x-slot>
 

                <div class="lg:grid grid-cols-3 gap-4 p-8 px-4">
                  <div class="mt-10 border-2 p-3">
                    @session('status')
                    <div class="alert alert-success bg-green-400 text-white p-2" role="alert">
                      {{ $value }}
                    </div>
                    @endsession

                    <h3 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
                      Add new permissions
                    </h3>
                   
                    <!-- create permissions -->
                      <form method="POST" 
                        action="{{ route('permissions.store') }}" 
                        enctype="multipart/form-data">
                    
                        @csrf
                        <x-honeypot />

                        <div class="mt-4">
                            <label for="name" :value="__('Name')" >
                              <input id="name" type="text" 
                                class="rounded border-gray-300 text-indigo-600 
                                shadow-sm focus:ring-indigo-500 w-full" 
                                name="name"
                                placeholder="permissions name">
                              <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </label>
                        </div>
                        <!-- Name -->
                   
                        <div class="mt-4">
                            <label for="guard_name" :value="__('Guard_name')" >
                              <input id="guard_name" type="text" 
                                class="rounded border-gray-300 text-indigo-600 
                                shadow-sm focus:ring-indigo-500 w-full" 
                                name="guard_name"
                                placeholder="guard name">
                              <x-input-error :messages="$errors->get('guard_name')" class="mt-2" />
                            </label>
                        </div>
                        <!-- Guard name -->

                        <div class="mt-4">
                          <x-primary-button>
                              {{ __('Create') }}
                          </x-primary-button>
                        </div>
                      </form>
                    <!-- end create permissions -->
                  </div>
                  <!-- ... -->

                  <div class="mt-10 col-span-2 border-2 p-3">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight mb-5 capitalize">
                      view all permissions
                    </h3>
                 
                    <!-- All permissions -->
                    <table class="border-separate table-auto border border-slate-400 border-spacing-5 mt-3">
                      <thead class="border border-slate-300">
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Guard Name</th>
                          <th>Created at</th>
                          <th>Updated at</th>
                        </tr>
                      </thead>
                      @foreach($permissions as $item)
                          <tbody class="border border-slate-300">
                          <tr>
                              <td> {{ $item->id }}</td>
                              <td> {{ $item->name }}</td>
                              <td> {{ $item->guard_name }}</td>
                              <td> {{ $item->created_at }}</td>
                              <td> {{ $item->updated_at }}</td>
                          </tr>
                          </tbody>
                      @endforeach
                    </table>

                    <!-- All permissions -->
                  </div>
                </div>

              
             
</x-app-layout>
 