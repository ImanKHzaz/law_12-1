@props(['submit', 'action', 'financialRecord' => null, 'lawsuits'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-section-title>
        <x-slot name="title">{{ __('السجل المالي للدعوى ') }}</x-slot>
        <x-slot name="description">{{ __('ادخل تفاصيل الدعوى المالية ') }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ $action }}">
            @csrf
            @if($submit === 'PUT')
            @method('PUT')
            @endif
            <div class="px-6 py-5 bg-white sm:px-10 sm:py-8 shadow sm:rounded-md">
                <div class="grid grid-cols-6 gap-6">

                    <input type="hidden" name="lawsuit_id" value="{{ $lawsuits->last()->id }}">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="claim_value" class="block text-sm font-medium text-gray-700">{{ __('المبلغ المتفق عليه ') }}</label>
                        <input type="text" name="claim_value" id="claim_value" value="{{ old('claim_value', $financialRecord->claim_value ?? '') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="amount_paid" class="block text-sm font-medium text-gray-700">{{ __('المبلغ المدفوع ') }}</label>
                        <input type="text" name="amount_paid" id="amount_paid" value="{{ old('amount_paid', $financialRecord->amount_paid ?? '') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="amount_remaining" class="block text-sm font-medium text-gray-700">{{ __('المبلغ المتبقي ') }}</label>
                        <input type="text" name="amount_remaining" id="amount_remaining" value="{{ old('amount_remaining', $financialRecord->amount_remaining ?? '') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6">
                        <label for="notes" class="block text-sm font-medium text-gray-700">{{ __('ملاحظات') }}</label>
                        <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('notes', $financialRecord->notes ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <x-button>{{ $submit === 'PUT' ? __('تعديل') : __('حفظ السجل المالي ') }}</x-button>
            </div>
        </form>
    </div>
</div>