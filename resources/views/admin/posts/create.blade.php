<form action="{{ route('admin.posts.store') }}" method="post">
    @csrf
    <div class="form-row">
        <label for="title">Titolo</label>
        <input type="text" name="title">
    </div>
    <div class="form-row">
        <label for="description">Slug</label>
        <input type="text" name="slug">
    </div>
    <div class="form-row">
        <label for="thumb">Creato il</label>
        <input type="text" name="created_at">
    </div>

    <input type="submit" value="Invia">
</form>