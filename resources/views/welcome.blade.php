<x-app-layout>
              
              <div class="py-12 grid grid-rows-1 lg:grid-cols-1 gap-4">
               
                <div class="sm:w-7/12 mx-auto sm:px-6 lg:px-8 mt-9">
                 
                  <article class="prose lg:prose-xl">
                    @foreach($posts as $post)
                      <div class="border-t-2 mb-3 lg:px-3 lg:py-3 mx-auto">
                     
                            
                              <video id="example-player" class="w-full aspect-video">
                                <source 
                                  src="{{ $post->getFirstMediaUrl('avatars','preview') }}" 
                                  type="video/mp4"/>
                              </video>
                           
                            <div class="border-t-2 lg:py-3 lg:px-3">
                              <time>Publish on {{ \Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</time>
                              <h2> {{ $post->title }}</h2>
                              
                              <p class="line-clamp-3">  {{ $post->description }}</p>
                              <span class="font-bold text-sm"> 
                                Author: {{ $post->user->name }}
                              </span>
                              <div>
                                <x-nav-link  :href="route('posts.show', $post->slug)" 
                                    class="no-underline rounded-full border border-indigo-600 px-3">
                                  {{ __('Read more') }}
                                </x-nav-link>
                              </div>
                            </div>
                    
                      </div>
                    @endforeach
 
                  </article>
                </div>
              <div>
 
             
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

<script>
  var player = fluidPlayer(
     'example-player',
      {
          layoutControls: {
              // Parameters to customise the look and feel of the player
              primaryColor:           "#28B8ED",
              playButtonShowing:      true,
              fillToContainer:        true,
              autoPlay:               false,
              allowDownload:          false,
              allowTheatre:           true,
              posterImage: '{{asset('img/https___imagecdn.copymatic.ai_c9318103-d75e-4b9f-87b4-d28718a8007e-1.png')}}' ,// Default false
               
          },
          vastOptions: {
              // Parameters to customise how the ads are displayed & behave
               
          }
      }
  );
  </script>
 