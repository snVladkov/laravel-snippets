<x-layout>
    {{-- форма за добавяне на книга --}}
    <form class="border rounded p-4 w-50 mx-auto" method="POST" action="{{ route('books_store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заглавие</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Автор</label>
            <input type="text" class="form-control" id="author" name="author">
            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Година</label>
            <input type="number" class="form-control" id="year" name="year">
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Добави</button>
    </form>
</x-layout>
