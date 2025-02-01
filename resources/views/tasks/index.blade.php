<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('قائمة المهام') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <a href="{{ route('lawsuits.tasks.create', $lawsuit_id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('إضافة مهمة جديدة') }}
                </a>
                <table class="min-w-full mt-4">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('اسم المهمة') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('الوصف') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('تمت المهمة') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('الإجراءات') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $task->task_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $task->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $task->is_completed ? 'نعم' : 'لا' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('lawsuits.tasks.edit', [$lawsuit_id, $task->id]) }}" class="text-blue-500 hover:text-blue-700">{{ __('تحرير') }}</a>
                                <form action="{{ route('lawsuits.tasks.destroy', [$lawsuit_id, $task->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="">{{ __('حذف') }}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>