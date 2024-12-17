<div class="overflow-y-auto">
    <table class="min-w-full mt-3 md:table-auto border-separate border-spacing-3 border border-slate-400 p-5">
      <thead>
        <tr>
          <th class="border p-3">Id</th>
          <th class="border p-3">Title</th>
          <th class="border p-3">Author</th>
          <th class="border p-3">Description</th>
          <th class="border p-3">Restore</th>
          <th class="border p-3">Delete permanent</th>
        </tr>
      </thead>
        @foreach($posts as $post)
          <tbody>
          <tr>
              <td class="border p-3">{{ $post->id }}</td>
              <td class="border p-3"> {{ $post->title }}</td>
              <td class="border p-3">  {{ $post->user->name ?? 'Unknown User' }}</td>
              <td class="border p-3">{{ $post->description }}</td>
              <td class="border p-3">
                <form action="{{route('archive.show',$post->id)}}" method="post">
                  @csrf
                  @method('PATCH')
                  <div>
                    
                    <button class="bg-green-500 hover:bg-green-600 text-white border-2 rounded-none p-2 capitalize"> 
                      {{ __('Restore') }}
                    </button>
                  </div>
                </form>

              </td>
              
              <td class="border p-3">
                <form action="{{route('archive.destroy',$post->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <div>
                    
                    <button class="bg-red-700 hover:bg-red-500 text-white border-2 rounded-none p-2 capitalize"> 
                      {{ __('Delete permanent') }}
                    </button>
                  </div>
                </form>
              </td>
          </tr>
          </tbody>
        @endforeach
  
    </table>
</div>