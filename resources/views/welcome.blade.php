<x-app-layout>

@section('title', 'Welcome')
 
@include('partials.header')

<div class="lg:grid grid-flow-col grid-rows-3 gap-4 pt-24">
    <div class="row-span-3">
        <div class="lg:max-w-sm rounded overflow-hidden shadow-lg">
            <iframe class="aspect-video w-full" 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                alt=""
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen></iframe>

            <div class="px-6 py-4">
                <flux:link href="#" class="text-2xl font-bold">documentation</flux:link>
                <flux:text class="text-base text-gray-700 font-normal">Visit our  for more information.</flux:text>
            </div>
            <div class="px-6 py-4">
                <flux:badge color="lime">New</flux:badge>            
            </div>
        </div>
    </div>

    <div class="col-span-2">02</div>

    <div class="col-span-2 row-span-2">
        <flux:separator />
        <ul class="list-disc">
            <li>
                <flux:link href="#" class="text-2xl font-bold">
                    documentation
                </flux:link>
            </li>
        </ul>
    </div>
</div>
 
</x-app-layout>
 