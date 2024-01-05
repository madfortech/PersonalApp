<x-app-layout>

                        <x-slot name="header">
                          <h2 class="font-semibold text-3xl text-gray-800 leading-tight text-center">
                            {{ $post->title }}
                          </h2>
                        </x-slot>

                        <div class="py-12 grid  mt-10 grid-rows-1 lg:grid-cols-1 gap-4">
               
                          <div class="sm:w-7/12 mx-auto sm:px-6 lg:px-8 mt-9">
                  
                            <article class="prose lg:prose-xl">
                            
                              <div class="border-t-2 lg:py-3 lg:px-3">
                                <video class="w-full aspect-video" id="notallowed" controls>
                                  <source 
                                    src="{{ $post->getFirstMediaUrl('avatar','preview') }}" 
                                    type="video/mp4" />
                                </video>
                                <time>Publish on {{ \Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</time>
                              
                                <p class="line-clamp-3">  {{ $post->description }}</p>
                            
                                <x-nav-link :href="url('/')" 
                                  class="no-underline rounded-full border border-indigo-600 px-3">
                                  {{ __('Back') }}
                                </x-nav-link>

                                @role('super-admin')
                                  <x-nav-link :href="route('posts.edit', $post->id)" 
                                    class="no-underline rounded-full border border-indigo-600 px-3">
                                    {{ __('Edit') }}
                                  </x-nav-link>
                                
                                  <form action="{{ route('posts.destroy', $post->id) }}"
                                      class="mt-3" 
                                      method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <x-primary-button 
                                        class="no-underline rounded-full border border-red-600 px-3 bg-red-500 hover:bg-red-400">
                                          {{ __('Delete') }}
                                      </x-primary-button>                            
                                  </form>
                                @endrole
                              </div>
                            </article>
                          </div>

                          {{-- <div class="border-2 border-violet-500">
                            <!-- Your comment here -->
                          </div>  --}}
                        <div>

</x-app-layout>
<script>
  function noDownload() {
  var videoElems = document.querySelectorAll('#notallowed');
  videoElems.forEach(function(video) {
    video.setAttribute('controlsList', 'nodownload');
  });
}
window.onload = noDownload;
</script>