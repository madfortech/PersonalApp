<x-app-layout>

@section('title','Post')
                      
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight text-center">
      {{ $post->title }}
    </h2>
  </x-slot>

  <div class="lg:grid grid-rows-1 grid-cols-1 mt-12">
    <div class="w-3/4 mx-auto p-4 rounded-sm">
 
        <article>
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

          <div class="card p-3">
              <p class="text-2xl capitalize text-gray-900">
                {{ $post->description ?? '' }}
              </p>              
          </div>
          <div class="mt-24">
            <span class="px-3 p-2 capitalize bg-red-500 rounded-full text-white">
              {{ $post->user->name ?? 'Unknown User' }}
            </span>
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

 
 