@props(['resource'])
@php
    $handle = Str::afterLast($resource->social_handle, "/");
@endphp
<li class="flex items-center justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
        <x-buk-avatar class="h-12 w-12 flex-none rounded-full bg-gray-50" search="{{ $handle }}" />
        <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">{{ $resource->author }}  <span class="font-normal">({{ "@".$handle }})</span></p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                <a href="{{ $resource->link }}">{{ $resource->link }}</a>
            </p>
        </div>
    </div>
    <a href="{{ $resource->link }}"
        class="rounded-md bg-white px-5 py-2 text-xs font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">View</a>
</li>
