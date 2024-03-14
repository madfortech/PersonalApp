<x-app-layout>

@section('title','Post')
                      
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight text-center">
      {{ $post->title }}
    </h2>
  </x-slot>

  <div class="lg:grid grid-rows-1 grid-cols-1 mt-12">
    <div class="max-w-2xl	mx-auto p-4 rounded-sm">
 
        <article class="prose lg:prose-xl rounded-md border-2 mb-4 p-4 max-w-md w-full">  
          
          <div class="mb-4">
         
            <div class="text-sm">
              <span class="mr-2 p-1 capitalize bg-red-500 rounded-full text-white">
                {{ $post->user->name ?? 'Unknown User' }}
              </span>
             
              <span class=" p-1 capitalize bg-red-500 rounded-full text-white">
                {{ $post->created_at }}
              </span>
            </div>
          </div>

          @if($post->hasMedia('posts'))
            @foreach($post->getMedia('posts') as $media)

              <video 
                controls
                controlsList="nodownload"
                class="w-full aspect-video" 
                src="{{ asset($media->getUrl()) }}"
                type="{{ $media->mime_type }}">
              </video>
            @endforeach
          @endif

          <div class="card">
              <p class="text-2xl capitalize text-gray-900">
                {{ $post->description ?? '' }}
              </p>              
          </div>
          
        </article>
      
    </div>
  </div>


                        

</x-app-layout>
{{-- <script>
  function noDownload() {
  var videoElems = document.querySelectorAll('#notallowed');
  videoElems.forEach(function(video) {
    video.setAttribute('controlsList', 'nodownload');
  });
}
window.onload = noDownload;
</script> --}}

 
 