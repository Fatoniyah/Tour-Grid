@extends('layouts.master')

@section('title', 'จองสำเร็จ')

@section('content')


    <div class="thank-banner">
        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <div><a href="{{ url('') }}">กลับหน้าแรก</a></div>
    </div>


    <div class="border-grey p-15 m-10 text-center">
        <div class="">
            <h2>สรุปการจองของคุณ</h2>
        </div>
        <div class="flex-col gap-5">
            <div class="flex-row justify-center gap-15 font-20">
                <div class="flex-row gap-5">
                    <div class="bold">ชื่อ</div>
                    <div>{{ $booking['md_booking_fname'] }}</div>
                </div>
                <div class="flex-row gap-5">
                    <div class="bold">นามสกุล</div>
                    <div>{{ $booking['md_booking_lname'] }}</div>
                </div>

            </div>
            <div class="flex-row justify-center gap-15 font-20">
                <div class="flex-row gap-5">
                    <div class="bold">รหัสการจอง</div>
                    <div>{{ $booking['md_booking_code'] }}</div>
                </div>
                <div class="flex-row gap-5">
                    <div class="bold">ทริป</div>
                    {{-- <div>{{ $md_tour['md_tour_namethai'] }}</div> --}}
                </div>

            </div>
            <div class="flex-row justify-center gap-15 font-20"><div class="flex-row gap-5">
                <div class="bold">ราคา</div>
                <div>{{ $booking['md_booking_price'] }}</div>
            </div></div>

        </div>


    </div>



@endsection
