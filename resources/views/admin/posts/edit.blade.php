<form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-row">
        <label for="title">Titolo</label>
        <input type="text" name="title" value="{{ $post->title }}">
    </div>
    <div class="form-row">
        <label for="description">Slug</label>
        <input type="text" name="slug" value="{{ $post->slug }}">
    </div>
    <div class="form-row">
        <label for="thumb">Creato il</label>
        <input type="text" name="created_at" value="{{ $post->created_at }}">
    </div>

    <input type="submit" value="Invia">
</form>