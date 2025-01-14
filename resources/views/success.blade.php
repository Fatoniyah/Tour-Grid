@extends('layouts.master')

@section('title', 'จองสำเร็จ')

@section('content')


    <div class="thank-banner">
        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <div><a href="{{ url('') }}">กลับหน้าแรก</a></div>
    </div>



@endsection
