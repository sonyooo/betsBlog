@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('blog.admin.posts.includes.result_messages')

                <form action="{{ route('blog.admin.posts.index') }}" method="get">
                    <div>
                        <label for="category_id" class="form-label">Выберите категорию</label>
                        <select name="category_id" id="category_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option></option>
                            @foreach($categoryList as $categoryOption)
                                <option value="{{ $categoryOption->id }}"
                                        @if($categoryOption->id == $item->category_id) selected @endif>
                                    {{ $categoryOption->id_title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="search">Поиск</label>
                        <input name="search" type="text" class="form-control" id="search" placeholder="Введите слово" value="{{ old('excerpt', $item->excerpt) }}">
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-primary">Искать</button>
                </form>

                <nav class="navbar navbar-toggleable-md navbar-light bd-faded">
                    <a class="btn btn-primary" href="{{ route('blog.admin.posts.create') }}">Написать</a>
                </nav>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Автор</th>
                                <th>Категория</th>
                                <th>Заголовок</th>
                                <th>Дата публикации</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                @php /** @var \App\Models\BlogPost $post*/ @endphp
                                <tr @if(!$post->is_published) style="background: #ccc" @endif>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->category->title }}</td>
                                    <td>
                                        <a href="{{ route('blog.admin.posts.edit', $post->id) }}">{{ $post->title }}</a>
                                    </td>
                                    <td>{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d. M H:i') : ''}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if($posts->total() > $posts->count())
            <br>
            <div class="justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>


@endsection
