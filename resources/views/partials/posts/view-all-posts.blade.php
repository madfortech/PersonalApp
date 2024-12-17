<div class="overflow-y-auto">
    <table class="min-w-full mt-3 md:table-auto border-separate border-spacing-3 border border-slate-400 p-5">
      <thead>
        <tr>
          <th class="border p-3">{{__('Id')}}</th>
          <th class="border p-3">{{__('Author')}}</th>
          <th class="border p-3">{{__('Title')}}</th>
          <th class="border p-3">{{__('Description')}} </th>
          <th class="border p-3">{{__('Created at')}}</th>
        
          <th class="border p-3">{{__('Edit')}}</th>
          <th class="border p-3">{{__('Delete')}}</th>
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
             
              <td class="border p-3">
                <a href=" {{route('posts.edit',$item->id )}}" class="bg-green-600 hover:bg-green-800 text-gray-50 rounded-full p-2 px-3 border-2">
                  {{__('Edit')}}
                </a>
              </td>
              <td class="border p-3">
                <form action="{{route('posts.destroy',$item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <div>
                    <button class=" bg-red-600 text-white border-2 rounded-full px-3 hover:bg-red-800"> {{ __('Trash') }}</button>
                  </div>
                </form>
              </td>
          </tr>
          </tbody>
      @endforeach
    </table>
</div>