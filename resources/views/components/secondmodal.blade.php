@props(['trigger'])

<div class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center h-screen w-screen left-0" x-show="{{$trigger}}" x-on:click.self="{{$trigger}} = false" x-on:keydown.escape.window="{{$trigger}} = false">
    <div {{ $attributes->merge(["class" => "bg-pink-500 m-auto shadow-2xl rounded-xl p-8"]) }}>
        {{ $slot }}
    </div>
</div>
