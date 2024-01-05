<x-app-layout>
              <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('All Users') }}
                </h2>
              </x-slot>

            <div class="py-12">
                <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                
                  <div class="min-w-full rounded overflow-hidden shadow-lg p-8 px-4">
                       
                    <!-- All users -->
                    <table class="border-separate table-auto border border-slate-400 border-spacing-5 mt-3">
                        <thead class="border border-slate-300">
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Updated at</th>
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
                            </tr>
                            </tbody>
                        @endforeach
                      </table>

                    <!-- All users -->
                  </div>
                </div>
            </div>
             
</x-app-layout>
 