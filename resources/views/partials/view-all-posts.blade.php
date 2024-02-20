<div class="overflow-y-auto">
    <table class="min-w-full mt-3 md:table-auto border-separate border-spacing-3 border border-slate-400 p-5">
      <thead>
        <tr>
          <th class="border p-3">Id</th>
          <th class="border p-3">Author</th>
          <th class="border p-3">Title</th>
          <th class="border p-3">Description </th>
          <th class="border p-3">Created at</th>
          <th class="border p-3">Updated at</th>
          <th class="border p-3">Edit</th>
          <th class="border p-3">Delete</th>
        </tr>
      </thead>
      @foreach($post as $item)
          <tbody>
          <tr>
              <td class="border p-3">{{ $item->id ?? '' }}</td>
              <td class="border p-3"> {{ $item->user->name }}</td>
              <td class="border p-3">{{ $item->title ?? '' }}</td>
              <td class="border p-3">{{ $item->description ?? '' }}</td>
              <td class="border p-3">{{ $item->created_at ?? '' }}</td>
              <td class="border p-3">{{ $item->updated_at ?? '' }}</td>
              <td class="border p-3">
                <a href=" {{route('posts.edit',$item->id )}}" class="bg-green-900 p-3 text-gray-400">
                  Edit
                </a>
              </td>
              <td class="border p-3">
                <form action="{{route('posts.destroy',$item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <div>
                    <x-primary-button type="submit" 
                      class="bg-red-500 p-3 text-white border-2 rounded-none">
                      {{ __('Remove') }}
                    </x-primary-button>
                  </div>
                </form>
              </td>
          </tr>
          </tbody>
      @endforeach
    </table>
</div>