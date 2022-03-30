@extends('layouts.app')

@section('content')

    <div class="container">
        <header>
            <h1>I miei post</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">slug</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>

                @forelse($posts as $post)
                  <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td class="d-flex justify-content-end align-items-center">Actions</td>
                  </tr>
                @empty
                <tr><td colspan=""><h3>Non ci sono posts</h3></td></tr>
                @endforelse
                </tbody>
              </table>
        </header>
    </div>

@endsection