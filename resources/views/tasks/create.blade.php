<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('إضافة مهمة جديدة') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('tasks.store') }}">
                    @csrf
                    <input type="hidden" name="lawsuit_id" value="{{ $lawsuitId }}">
                    <!-- باقي حقول النموذج -->
                    <div class="mb-4">
                        <x-label for="task_name" :value="__('اسم المهمة')" />
                        <x-input id="task_name" class="block mt-1 w-full" type="text" name="task_name" required autofocus />
                    </div>
                    <div class="mb-4">
                        <x-label for="description" :value="__('الوصف')" />
                        <textarea id="description" class="block mt-1 w-full" name="description"></textarea>
                    </div>
                    <!-- زر الإرسال -->
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('إضافة المهمة') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>