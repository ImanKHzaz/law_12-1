@props(['submit', 'action', 'task' => null])

<form method="POST" action="{{ $action }}">
    @csrf
    @if($submit === 'PUT')
    @method('PUT')
    @endif
    <div class="mb-4">
        <x-label for="task_name" :value="__('اسم المهمة')" />
        <x-input id="task_name" class="block mt-1 w-full" type="text" name="task_name" value="{{ old('task_name', $task->task_name ?? '') }}" required autofocus />
    </div>
    <div class="mb-4">
        <x-label for="description" :value="__('الوصف')" />
        <textarea id="description" class="block mt-1 w-full" name="description">{{ old('description', $task->description ?? '') }}</textarea>
    </div>
    <div class="mb-4">
        <x-label for="is_completed" :value="__('تمت المهمة')" />
        <x-checkbox id="is_completed" name="is_completed" :checked="old('is_completed', $task->is_completed ?? false)" />
    </div>
    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
            {{ $submit === 'PUT' ? __('تحديث المهمة') : __('إضافة المهمة') }}
        </x-button>
    </div>
</form>