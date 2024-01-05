<div class="py-3 mx-auto flex justify-items-center">
    <div>
        
        <a href="{{ url('/user/privacy') }}">
           Privacy
        </a>

        <a href="{{url('/user/terms') }}">
            Terms
        </a>
    
    
        {{-- <p class="text-sm text-gray-700">
            copyright 2024 content remove request send 
            <x-nav-link :href="('')">
                {{__('dmca')}}
            </x-nav-link>
        </p> --}}
        <br>
        
        <div class="flex items-center gap-4 pt-3">
            <a href="{{('https://www.facebook.com/bornein1989')}}" target="_blank">
                <img src="{{asset('img/facebook.svg')}}" alt="facebook" target="_blank">
            </a>
    
            <a href="{{('https://twitter.com/himanshunishad_')}}" target="_blank">
                <img src="{{asset('img/twitter.svg')}}" alt="twitter">
            </a>
    
            
            <a href="{{('https://www.youtube.com/channel/UCFIzDYfQryDYqAbWfmWGvSw')}}" target="_blank">
                <img src="{{asset('img/youtube.svg')}}" alt="youtube">
            </a>
        </div>
      
      
    </div>
</div>