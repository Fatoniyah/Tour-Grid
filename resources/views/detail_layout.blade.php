@extends('layouts.master')

@section('title', 'รายละเอียด')

@section('content')

        <div class="flex-col">

            <div class="title-detail pt-10">{{ $md_tour->md_tour_nameeng }}</div>
            <div class="flex-row gap-10 text-bold text-grey">

                <div>{{ $md_tour->md_tour_night }} nights - {{ $md_tour->md_tour_day }} Days</div>
                <div class="">•</div>
                <div>1 Country - 2 Cities</div>
            </div>

            <div class="w3-content w3-section pt-10">
                <!-- Main Image -->
                <div class="main-image">
                    <img class="mySlides" src="{{ URL::asset('/img/p1_1.jpg') }}">
                    <img class="mySlides" src="{{ URL::asset('/img/575.jpg') }}">
                    <img class="mySlides" src="{{ URL::asset('/img/824091.jpg') }}">
                    <img class="mySlides" src="{{ URL::asset('/img/775562.jpg') }}">
                    <img class="mySlides" src="{{ URL::asset('/img/fd.jpg') }}" style="width:100%">
                    <img class="mySlides" src="{{ URL::asset('/img/koh-lipe-17.jpg') }}">
                    <img class="mySlides" src="{{ URL::asset('/img/fdr.jpg') }}">
                    <img class="mySlides" src="{{ URL::asset('/img/sds.jpg') }}">
                </div>

                <!-- Thumbnail Images -->
                <div class="thumbnail-gallery">
                    <!-- Left Navigation Button -->
                    <button class="nav-btn left-btn"><svg class="w-[32px] h-[32px] text-gray-800 dark:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="m15 19-7-7 7-7" />
                        </svg>
                    </button>

                    <!-- Thumbnails -->
                    <div class="thumbnails-wrapper pt-10">
                        <img src="{{ URL::asset('/img/p1_1.jpg') }}" alt="Image 1">
                        <img src="{{ URL::asset('/img/575.jpg') }}" alt="Image 2">
                        <img src="{{ URL::asset('/img/824091.jpg') }}" alt="Image 3">
                        <img src="{{ URL::asset('/img/775562.jpg') }}" alt="Image 4">
                        <img src="{{ URL::asset('/img/fd.jpg') }}" alt="Image 5">
                        <img src="{{ URL::asset('/img/koh-lipe-17.jpg') }}" alt="Image 6">
                        <img src="{{ URL::asset('/img/fdr.jpg') }}" alt="Image 7">
                        <img src="{{ URL::asset('/img/sds.jpg') }}" alt="Image 8">
                    </div>

                    <!-- Right Navigation Button -->
                    <button class="nav-btn right-btn"><svg class="w-[32px] h-[32px] text-gray-800 dark:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="pt-30">
                @yield('tap')
            </div>

            <div class="pt-50 flex-row gap-20">

            </div>


        </div>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
    <script>
        function openCity(evt, tapName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tapName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // เรียกใช้ฟังก์ชันนี้เมื่อหน้าโหลด
        document.addEventListener("DOMContentLoaded", function() {
            openCity(null, 'Overview');
            document.querySelector('.tablinks.active').classList.add('active');
        });
    </script>

@endsection
