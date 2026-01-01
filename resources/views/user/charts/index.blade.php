<x-admin-layout>

    @section('title','View Report')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Analytics & Reports') }}
            {{ Auth::user()->name }}
        </h2>
        
    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid grid-cols-2	 gap-3 p-3 rounded-xs">
            
            <div class="py-2 px-3 border-gray-400 border-2 rounded-sm capitalize hover:border-gray-500 mb-2">
                <div x-data="{ open: false }">
                    <button @click="open = ! open">
                        <i class="fa-solid fa-ellipsis-vertical"></i>                      
                    </button>
                    <div x-show="open" class="mt-4 mb-4">
                        <a href="{{route('users.index')}}" class="shadow-lg	 px-3 py-2 uppercase border-2 border-indigo-600 ">
                            {{('view all')}}
                        </a>
                    </div>
                </div>
                <div class="mt-2">
                    
                    <h1>{{ $chart1->options['chart_title'] }}</h1>
                    {!! $chart1->renderHtml() !!}
                    {!! $chart1->renderChartJsLibrary() !!}
                    {!! $chart1->renderJs() !!}
                </div>
            </div>

            <div class="py-2 px-3 border-gray-400 border-2 rounded-sm capitalize hover:border-gray-500 mb-2">
                
                <div x-data="{ open: false }">
                    <button @click="open = ! open">
                        <i class="fa-solid fa-ellipsis-vertical"></i>                       
                    </button>
                    <div x-show="open" class="mt-4 mb-4">
                        <a href="{{route('posts.index')}}" class="shadow-lg	 px-3 py-2 uppercase border-2 border-indigo-600 ">
                            {{('view all')}}
                        </a>
                    </div>
                </div>

                <div class="mt-2">
                    <h1>{{ $chart2->options['chart_title'] }}</h1>
                    {!! $chart2->renderHtml() !!}
                    {!! $chart2->renderChartJsLibrary() !!}
                    {!! $chart2->renderJs() !!}
                </div>
            </div>
 
 
        </div>
    </div>

 
</x-app-layout>

 