@extends('layouts.app')
@section('title', 'つぶやき一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>つぶやき一覧</h2>
                <form action="{{ action('SnsController@create') }}" method="post" enctype="multipart/form-data" class="card p-3">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <input class="form-control" name="body" type="text" value="{{ old('body') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="text-right"><input type="submit" class="btn btn-light" value="つぶやく"></div>
                </form>
                <div class="card mb-2">
                    @foreach($posts as $post)
                        <div class="flex card p-3 justify-between">
                            @foreach($users as $user)
                                @if($user -> id == $post ->user_id)
                                    <div>{{ $user -> name }}</div>
                                    <div class="text-right">{{ $post -> created_at }}</div>
                                    <div>{{ $post -> body }}</div>
                                    @if( Auth::user()->id == $post ->user_id)
                                        <div class="text-right"><a href="{{ action('SnsController@delete', ['id' => $post->id]) }}" class="text-danger">削除</a></div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection