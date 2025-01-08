<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('وثائق الدعوى') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @isset($lawsuitId)
            <x-document-form :submit="'POST'" :action="route('documents.store')" :lawsuitId="$lawsuitId" />
            @else
            <p class="text-red-500">{{ __('لم أجد رقم القضية .') }}</p>
            @endisset

        </div>
    </div>
</x-app-layout>