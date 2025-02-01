<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('إنشاء سجل المحكمة للدعوى ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-financial-form :submit="'POST'" :action="route('financial_records.store')" :lawsuits="$lawsuits" />


        </div>
    </div>
</x-app-layout>