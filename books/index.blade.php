<x-layout>
    {{-- таблица с книги --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Заглавие</th>
                <th>Автор</th>
                <th>Година</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            {{-- Редове с книги --}}
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['year'] }}</td>
                    <td>
                        <a href="{{ route('books_edit', $book['id']) }}" class="btn btn-warning">Редактирай</a>
                        <form class="d-inline" method="POST" action="{{ route('books_destroy', $book['id']) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Изтрий</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
