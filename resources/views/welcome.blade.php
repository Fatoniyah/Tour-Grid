@extends('layouts.master')
@section('title', 'BEST TOUR')

@section('content')
    <h1 class="text-center">BEST TOUR</h1>
    <div>
        <div class="flex-container ">


            @foreach ($md_tour as $tour)
                <div>
                    <div class="card">
                        <div>
                            <div class="image-container">
                                <img src="{{ URL::asset('/img/p1_1.jpg') }}" alt="Avatar" style="width:100%">

                                <div class="button-group">
                                    <btn-1 class="button red-bt">30 % Off</btn-1>
                                    <btn-1
                                        class="button black-btn">{{ $tour->tourType->md_tourtype_namethai ?? 'ไม่มีข้อมูล' }}</btn-1>
                                </div>
                                <btn-1 class="button white-btn bottom-left">{{ $tour->md_tour_day }} Days</btn-1>
                            </div>
                            <div class="container p-15">
                                <div class="title-trip pt-10">{{ $tour->md_tour_nameeng }}</div>
                                <div class="text-grey-name-th font-16 pt-5 pb-5">{{ $tour->md_tour_namethai }}</div>
                                <div class="flex-row gap-5 items-center ">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="grey" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                    </svg>
                                    <div class="text-grey font-14">April 12-17</div>
                                </div>
                                <div class="info-container pt-10">
                                    <div class="info-item">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fd7e14"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2ZM7 12.5a.5.5 0 0 1 .495.43.762.762 0 0 0 .157.096c.213.106.553.208 1.005.295.896.173 2.111.262 3.343.262 1.232 0 2.447-.09 3.343-.262.452-.087.792-.19 1.006-.295a.764.764 0 0 0 .156-.096.5.5 0 0 1 .995.07c0 1.19-.644 2.438-1.618 3.375C14.9 17.319 13.531 18 12 18c-1.531 0-2.9-.681-3.882-1.625C7.144 15.438 6.5 14.19 6.5 13a.5.5 0 0 1 .5-.5Zm9.519.417.003-.004-.003.004Zm-9.038 0a.017.017 0 0 1-.003-.004l.003.004Zm.901-4.853L9 6.81l.619 1.253 1.381.2-1 .976.236 1.376-1.237-.65-1.235.65L8 9.239l-1-.975 1.382-.2Zm6 0L15 6.81l.619 1.253 1.381.2-1 .976.236 1.376-1.237-.65-1.235.65L14 9.239l-1-.975 1.382-.2Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <span class="text">1 Flight</span>
                                    </div>
                                    <div class="separator">•</div>
                                    <div class="info-item">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="#17a2b8" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" />
                                            <path stroke="#17a2b8" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1"
                                                d="M17 13c0 2.038-2.239 4.5-5 4.5S7 15.038 7 13c0 1.444 10 1.444 10 0Z" />
                                            <path fill="currentColor"
                                                d="m9 6.811.618 1.253 1.382.2-1 .975.236 1.377L9 9.966l-1.236.65L8 9.239l-1-.975 1.382-.2L9 6.811Zm6 0 .618 1.253 1.382.2-1 .975.236 1.377L15 9.966l-1.236.65L14 9.239l-1-.975 1.382-.2L15 6.811Z" />
                                            <path stroke="#17a2b8" stroke-linecap="round" stroke-linejoin="round"
                                                d="m9 6.811.618 1.253 1.382.2-1 .975.236 1.377L9 9.966l-1.236.65L8 9.239l-1-.975 1.382-.2L9 6.811Zm6 0 .618 1.253 1.382.2-1 .975.236 1.377L15 9.966l-1.236.65L14 9.239l-1-.975 1.382-.2L15 6.811Z" />
                                        </svg>


                                        <span class="text">1 Hotel</span>
                                    </div>
                                    <div class="separator">•</div>
                                    <div class="info-item">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#d6293e"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2ZM7.99 9a1 1 0 0 1 1-1H9a1 1 0 0 1 0 2h-.01a1 1 0 0 1-1-1ZM14 9a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H15a1 1 0 0 1-1-1Zm-5.506 7.216A5.5 5.5 0 0 1 6.6 13h10.81a5.5 5.5 0 0 1-8.916 3.216Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <span class="text">2 Activities</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="justify-end">
                            <div class="bottom pt-20 items-center ">
                                <div class="flex-row gap-5 items-center">
                                    <div class="text-green-price">${{ $tour->md_tour_netadult }}</div>
                                    <div class="text-grey">/per person</div>
                                    <div class="text-line-through text-grey">${{ $tour->md_tour_priceadult }}</div>
                                </div>
                                <div>
                                    <a href="{{ url('detail/'. $tour->md_tour_id ) }}">
                                        <button class="btn-detail">View Detail</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach






        </div>

        <div class="pagination-container">
            {{-- ปุ่ม Previous --}}
            @if ($md_tour->onFirstPage())
                <span class="page-link disabled">
                    <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="m15 19-7-7 7-7" />
                    </svg>
                </span>
            @else
                <a href="{{ $md_tour->previousPageUrl() }}" class="page-link">
                    <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="m15 19-7-7 7-7" />
                    </svg>
                </a>
            @endif

            {{-- หน้า 7, 8, 9, 10 --}}
            @if ($md_tour->currentPage() > 3)
                <a href="{{ $md_tour->url($md_tour->currentPage() - 1) }}" class="page-link">
                    {{ $md_tour->currentPage() - 1 }}
                </a>
            @endif

            {{-- หน้าปัจจุบัน --}}
            <a href="{{ $md_tour->url($md_tour->currentPage()) }}" class="page-link active">
                {{ $md_tour->currentPage() }}
            </a>

            @if ($md_tour->currentPage() < $md_tour->lastPage() - 1)
                <span class="page-link disabled">...</span>
            @endif

            {{-- หน้าสุดท้าย --}}
            @if ($md_tour->currentPage() < $md_tour->lastPage())
                <a href="{{ $md_tour->url($md_tour->lastPage()) }}" class="page-link">
                    {{ $md_tour->lastPage() }}
                </a>
            @endif

            {{-- ปุ่ม Next --}}
            @if ($md_tour->hasMorePages())
                <a href="{{ $md_tour->nextPageUrl() }}" class="page-link">
                    <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </a>
            @else
                <span class="page-link disabled">
                    <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </span>
            @endif
        </div>









    </div>


@endsection
