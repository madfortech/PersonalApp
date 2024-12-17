<div class="overflow-y-auto">
    <table class="min-w-full mt-3 md:table-auto border-separate border-spacing-3 border border-slate-400 p-5">
        <thead>
        <tr>
          <th class="border p-3">{{__('Id')}}</th>
          <th class="border p-3">{{__('Name')}}</th>
          
          <th class="border p-3">{{__('Created at')}}</th>
       
          <th class="border p-3"> {{__('Remove')}}</th>
        </tr>
        </thead>
        @foreach($categories as $item)
        <tbody>
            <tr>
              <td class="border p-3">{{ $item->id ?? '' }}</td>
           
              <td class="border p-3">{{ $item->name ?? '' }}</td>
              
              <td class="border p-3">{{ $item->created_at ?? '' }}</td>
 
              <td class="border p-3">
                <form action="{{route('categories.destroy',$item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                    <div>
                      <button class="bg-red-500 hover:bg-red-700 text-white px-2 border-2 rounded-full"> 
                        {{ __('Trash') }}
                      </button>
                    </div>
                 
                </form>
              </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

