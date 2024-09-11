<x-layout>
    <div>
        <div class="mx-auto max-w-7xl px-6 py-6 sm:py-8 lg:px-8 lg:py-10">
            <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Curated Resources</h2>
            </div>
        </div>
        <ul role="list" class="divide-y divide-gray-100">
            @foreach ($resources as $resource)
                <x-resource :resource="$resource" />
            @endforeach
        </ul>
    </div>
</x-layout>
