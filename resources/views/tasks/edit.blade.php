<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('تحرير المهمة') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <x-task-form submit="PUT" action="{{ route('lawsuits.tasks.update', [$task->lawsuit_id, $task->id]) }}" :task="$task" />
            </div>
        </div>
    </div>
</x-app-layout>