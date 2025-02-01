@props(['submit', 'action', 'defendant' => null, 'lawsuits'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-section-title>
        <x-slot name="title">{{ __('معلومات المدعى عليه') }}</x-slot>
        <x-slot name="description">{{ __('ادخل تفاصيل المدعى عليه ') }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
            @csrf
            @if($submit === 'PUT')
            @method('PUT')
            @endif
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
                <div class="grid grid-cols-6 gap-6">
                    <input type="hidden" name="lawsuit_id" value="{{ $lawsuits->last()->id }}">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="full_name" class="block text-sm font-medium text-gray-700">{{ __('الاسم الثلاثي ') }}</label>
                        <input type="text" name="full_name" id="full_name" value="{{ old('full_name', $defendant->full_name ?? '') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">{{ __('رقم الهاتف') }}</label>
                        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $defendant->phone_number ?? '') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="id_front_image" class="block text-sm font-medium text-gray-700">{{ __('صورة الهوية الأمامية ') }}</label>
                        <input type="file" name="id_front_image" id="id_front_image" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="id_back_image" class="block text-sm font-medium text-gray-700">{{ __('صورة الهوية الخلفية ') }}</label>
                        <input type="file" name="id_back_image" id="id_back_image" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="power_of_attorney" class="block text-sm font-medium text-gray-700">{{ __('صورة سند التوكيل') }}</label>
                        <input type="file" name="power_of_attorney" id="power_of_attorney" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6">
                        <label for="notes" class="block text-sm font-medium text-gray-700">{{ __('ملاحظات') }}</label>
                        <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('notes', $defendant->notes ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <x-button>{{ $submit === 'PUT' ? __('تعديل المدعى عليه') : __('حفظ المدعى عليه') }}</x-button>
            </div>
        </form>
    </div>
</div>