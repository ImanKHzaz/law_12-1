<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('إنشاء مدعى عليه جديد') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-defendant-form submit="POST" action="{{ route('defendants.store') }}" :lawsuits="$lawsuits" />
        </div>
    </div>
</x-app-layout>