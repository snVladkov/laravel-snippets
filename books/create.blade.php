<x-layout>
    {{-- форма за добавяне на книга --}}
    <form class="border rounded p-4 w-50 mx-auto">
        <div class="mb-3">
            <label for="title" class="form-label">Заглавие</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Автор</label>
            <input type="text" class="form-control" id="author">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Година</label>
            <input type="number" class="form-control" id="year">
        </div>
        <button type="submit" class="btn btn-success">Добави</button>
    </form>
</x-layout>