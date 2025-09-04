<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Мои опросы') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div style="overflow: auto;">
                        <table class="table mt-5 alert-info rounded">
                            <thead>
                                <tr>
                                    <th>Заголовок</th>
                                    <th>Активность</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quizzes as $quiz)
                                    <tr>
                                        <td>{{ $quiz->getShortTitle() }}</td>
                                        <td>{{ $quiz->isActive() }}</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-warning">Редактировать</a>
                                            <form action="{{ route('quizzes.destroy', $quiz) }}" method="post"
                                                style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"
                                                    onclick="return confirm('Удалить пост {{ $quiz->title }}?')">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>



                    {{ $quizzes->links('pagination::bootstrap-5') }} <!-- Пагинация -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
