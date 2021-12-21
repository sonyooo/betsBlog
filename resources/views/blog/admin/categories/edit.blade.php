@extends('layouts.app');

@section('content')

    @php /** @var \App\Models\BlogCategory $item */ @endphp

    @if($item->exists)
    <form method="post" action="{{ route('blog.admin.categories.update', $item->id) }}">
        @method("PATCH")
        @else
            <form method="post" action="{{ route('blog.admin.categories.store') }}">
        @endif
            @csrf
            <div class="container">
                @php /** @var \Illuminate\Support\ViewErrorBag $errors */ @endphp
                @if($errors->any())
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
                            {{ $errors->first() }}
                        </div>
                    </div>
                </div>
                @endif
                @if(session('success'))
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
                                {{ session()->get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('blog.admin.categories.includes.item_edit_main_col')
                    </div>
                    <div class="col-md-3">
                        @include('blog.admin.categories.includes.item_edit_add_col')
                    </div>
                </div>
            </div>
    </form>

@endsection
