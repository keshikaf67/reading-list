<div class="field">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}">
    @error('title')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="field">
    <label for="author">Author</label>
    <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}">
    @error('author')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="field">
    <label for="status">Status</label>
    <select id="status" name="status">
        @foreach (\App\Models\Book::STATUSES as $value => $label)
            <option value="{{ $value }}" @selected(old('status', $book->status) === $value)>{{ $label }}</option>
        @endforeach
    </select>
    @error('status')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<button type="submit" class="btn">{{ $submitLabel }}</button>
<a href="{{ route('books.index') }}">Cancel</a>
