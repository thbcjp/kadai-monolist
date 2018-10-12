@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-content">
                <h1>素敵になものと出会う場所</h1>
                @if(!Auth::check())
                <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">モノリストを始める</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    test
@endsection