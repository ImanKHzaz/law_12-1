<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('تسجيل قضية جديدة') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-lawsuit-form submit="POST" action="{{ route('lawsuits.store') }}" :nextCaseNumber="$nextCaseNumber" :userCaseNumber="$userCaseNumber" />
        </div>
    </div>
</x-app-layout>