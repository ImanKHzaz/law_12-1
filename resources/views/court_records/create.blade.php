<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('إنشاء سجل محكمة للدعوى ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-court-record-form submit="POST" action="{{ route('court_records.store') }}" :lawsuitId="$lawsuitId" :clientId="$clientId" />
        </div>
    </div>
</x-app-layout>