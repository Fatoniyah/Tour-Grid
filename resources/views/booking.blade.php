@extends('layouts.master')

@section('title', 'Review your Booking')

@section('content')
    <h1 class="text-center">Review your Booking</h1>

    <div class="book-bar gap-10">
        <div class="flex-col items-center gap-10">
            <button class="circle-btn tablinks active " onclick="openCity(event, 'Tour Review')">1
            </button>
            <div class="bold">Tour Review</div>
        </div>

        <div class="flex-col  items-center gap-10">
            <button class="circle-btn tablinks " onclick="openCity(event, 'Traveler Info')">2
            </button>
            <div class="bold">Traveler Info</div>
        </div>
        <div class="flex-col  items-center gap-10">
            <button class="circle-btn tablinks " onclick="openCity(event, 'Make Payment')">3
            </button>
            <div class="bold">Make Payment</div>
        </div>

    </div>

    <form action="{{ route('booking.store', $md_tours->md_tour_id) }}" method="POST">
        @csrf
        <input type="hidden" name="md_tour_id" value="{{ $md_tours->md_tour_id }}">

        <div class="flex-row gap-20 pt-30">


            {{-- <div>{{ $md_tours->md_tour_netadult }}</div> --}}
            <div class="w-70p">
                <div id="Tour Review" class="tabcontent active">
                    <div class="font-30 bold">Tour Review</div>
                    <hr>
                    <div class="pt-10">
                        <div class="card-white">
                            <div class="w-40p"><img src="{{ URL::asset('/img/p1_1.jpg') }}" alt="Avatar"></div>
                            <div class="w-60p flex-col gap-5 p-10">
                                <div class="bold font-30">{{ $md_tours->md_tour_nameeng }}</div>
                                <div class="justify-between flex-row">
                                    <div class="rating">
                                        <input value="5" name="rate" id="star5" type="radio">
                                        <label title="text" for="star5"></label>
                                        <input value="4" name="rate" id="star4" type="radio">
                                        <label title="text" for="star4"></label>
                                        <input value="3" name="rate" id="star3" type="radio" checked="">
                                        <label title="text" for="star3"></label>
                                        <input value="2" name="rate" id="star2" type="radio">
                                        <label title="text" for="star2"></label>
                                        <input value="1" name="rate" id="star1" type="radio">
                                        <label title="text" for="star1"></label>
                                    </div>
                                    <div class="justify-end"></div>
                                </div>

                                <div class="info-container pt-10">
                                    <div class="info-item">
                                        <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="grey"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M6 5V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h1a2 2 0 0 1 2 2v2H3V7a2 2 0 0 1 2-2h1ZM3 19v-8h18v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm5-6a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                                clip-rule="evenodd" />
                                        </svg>


                                        <div class="text-grey font-14">April 12-17</div>
                                    </div>
                                    <div class="separator">•</div>
                                    <div class="info-item">
                                        <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="grey"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M2.535 11A3.981 3.981 0 0 0 2 13v4a1 1 0 0 0 1 1h2v1a1 1 0 1 0 2 0v-1h10v1a1 1 0 1 0 2 0v-1h2a1 1 0 0 0 1-1v-4c0-.729-.195-1.412-.535-2H2.535ZM20 9V8a4 4 0 0 0-4-4h-3v5h7Zm-9-5H8a4 4 0 0 0-4 4v1h7V4Z" />
                                        </svg>


                                        <div class="text-grey font-14">1 Room
                                        </div>
                                    </div>
                                    <div class="separator">•</div>
                                    <div class="info-item">
                                        <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="grey"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                                clip-rule="evenodd" />
                                        </svg>



                                        <div class="text-grey font-14">2 Guests

                                        </div>
                                    </div>
                                    <div class="separator">•</div>
                                    <div class="info-item">
                                        <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="grey" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5.575 13.729C4.501 15.033 5.43 17 7.12 17h9.762c1.69 0 2.618-1.967 1.544-3.271l-4.881-5.927a2 2 0 0 0-3.088 0l-4.88 5.927Z"
                                                clip-rule="evenodd" />
                                        </svg>




                                        <div class="text-grey font-14">From New York

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-20">
                        <table>
                            <tr>
                                <td class="font-20 bold">Flight Details</td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="pt-20">
                        <table>
                            <tr>
                                <td class="font-20 bold">Hotel Details</td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="pt-20">
                        <table>
                            <tr>
                                <td class="font-20 bold">Transfer Details</td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="pt-20">
                        <table>
                            <tr>
                                <td class="font-20 bold">Cancellation & Date change</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flex-col gap-5 p-10">
                                        <div class="flex-row gap-10">
                                            <div class="font-16 bold">10 days:</div>
                                            <div class="text-grey"> 100%</div>
                                        </div>
                                        <div class="flex-row gap-10">
                                            <div class="font-16 bold">10 to 15 days:</div>
                                            <div class="text-grey">75% + Non Refundable Component</div>
                                        </div>
                                        <div class="flex-row gap-10">
                                            <div class="font-16 bold">15 to 30 days:</div>
                                            <div class="text-grey">30% + Non Refundable Component</div>
                                        </div>
                                        <div class="flex-row gap-10">
                                            <div class="font-16 bold">10Hotel / Air:</div>
                                            <div class="text-grey">100% in case of non-refundable ticket / Hotel Room</div>
                                        </div>
                                        <div class="flex-row gap-10">
                                            <div class="font-16 bold">10Cruise / Visa:</div>
                                            <div class="text-grey">On Actuals</div>
                                        </div>
                                    </div>
                                    <div class="text-grey text-format p-10">All Prices are in Indian Rupees and subject to
                                        change without
                                        prior
                                        notice.
                                        In the case FIT flight inclusive package, the full amount of the flight will be
                                        payable
                                        at the time of
                                        booking.</div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    {{-- <div class="pt-20 justify-between flex-row">
                    <div></div>
                    <div class="justify-end">
                        <button class="btn-detail">Next</button>
                    </div>
                </div> --}}
                </div>
                <div id="Traveler Info" class="tabcontent active">
                    <div class="font-30 bold">Traveler Detail</div>
                    <hr>
                    <div class="pt-15">
                        <div class="tap-yellow gap-10">
                            <div><svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
                                </svg>
                            </div>
                            <div>A customer passport is mandatory. The passport must have 2 blank pages and 6-month
                                validity.
                            </div>
                        </div>
                    </div>

                    <div class="pt-20">
                        <table>
                            <tr>
                                <td class="font-20 bold">Traveler 1</td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="p-10 flex-col gap-10">
                                        <div class="flex-row gap-15">

                                            <div class="w-20p">
                                                <label for="md_booking_prefix" class="text-grey">Prefix</label>
                                                <select id="md_booking_prefix" name="md_booking_prefix">
                                                    <option value="mr">Mr</option>
                                                    <option value="mrs">Mrs</option>
                                                </select>
                                            </div>
                                            <div class="w-40p">
                                                <label for="fname" class="text-grey">First Name</label>
                                                <input type="text" id="fname" name="fname" placeholder="">
                                            </div>
                                            <div class="w-40p">
                                                <label for="lname" class="text-grey">Last name</label>
                                                <input type="text" id="lname" name="lname" placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex-row gap-15">
                                            <div class="w-50p">
                                                <label for="tel" class="text-grey">Tel</label>
                                                <input type="tel" id="tel" name="tel">
                                            </div>
                                            <div class="w-50p">
                                                <label for="email" class="text-grey">Email</label>
                                                <input type="email" id="email" name="email">
                                            </div>

                                        </div>
                                        <div class="pt-10 pb-10">
                                            <button class="btn-detail w-100p font-16" type="submit">Book Now</button>
                                        </div>



                                    </div>



                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div id="Make Payment" class="tabcontent active">
                    <div class="font-30 bold">Traveler Detail</div>
                    <hr>
                    <div class="pt-20">
                        <table>
                            <tr>
                                <td class="font-20 bold justify-between flex-row">
                                    <div>Credit or Debit Card</div>
                                    <div class="justify-end flex-row gap-10 items-center">

                                        <div>
                                            <svg viewBox="0 0 256 83" width="33" xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient y2="100%" y1="-2.006%" x2="54.877%"
                                                        x1="45.974%" id="logosVisa0">
                                                        <stop stop-color="#222357" offset="0%"></stop>
                                                        <stop stop-color="#254AA5" offset="100%"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path transform="matrix(1 0 0 -1 0 82.668)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963zm3.037-21.601l6.265-30.027h-17.158zm-118.599 21.6L88.964 1.246h20.687l17.104 79.963zm-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963z"
                                                    fill="url(#logosVisa0)"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg class="text-white fill-current" xmlns="http://www.w3.org/2000/svg"
                                                width="23" height="23" viewBox="0 0 48 48">
                                                <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z">
                                                </path>
                                                <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z">
                                                </path>
                                                <path fill="#ff3d00"
                                                    d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z">
                                                </path>
                                            </svg>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flex-col p-10">
                                        <div class="w-100p">
                                            <div class="label">
                                                <div class="text-grey">Card Number</div>
                                                <label class="text-input">
                                                    <input type="text" name="" placeholder="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex-row gap-20">
                                            <div class="w-100p">
                                                <div class="label">
                                                    <div class="text-grey">Expiration Month</div>
                                                    <label class="text-input">
                                                        <input type="text" name="" placeholder="">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="w-100p">
                                                <div class="label">
                                                    <div class="text-grey">Expiration Year</div>
                                                    <label class="text-input">
                                                        <input type="text" name="" placeholder="">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="w-100p">
                                                <div class="label">
                                                    <div class="text-grey">CVV / CVC</div>
                                                    <label class="text-input">
                                                        <input type="text" name="" placeholder="">
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="w-100p">
                                            <div class="label">
                                                <div class="text-grey">Name of the cardholder</div>
                                                <label class="text-input">
                                                    <input type="text" name="" placeholder="">
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pt-20">
                        <table>
                            <tr>
                                <td class="font-20 bold">Pay with Paypal</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flex-col p-10 items-center">
                                        <div><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                                x="0px" y="0px" width="248px" height="66px" viewBox="0 0 124 33"
                                                xml:space="preserve">
                                                <path fill="#253B80"
                                                    d="M46.211,6.749h-6.839c-0.468,0-0.866,0.34-0.939,0.802l-2.766,17.537c-0.055,0.346,0.213,0.658,0.564,0.658  h3.265c0.468,0,0.866-0.34,0.939-0.803l0.746-4.73c0.072-0.463,0.471-0.803,0.938-0.803h2.165c4.505,0,7.105-2.18,7.784-6.5  c0.306-1.89,0.013-3.375-0.872-4.415C50.224,7.353,48.5,6.749,46.211,6.749z M47,13.154c-0.374,2.454-2.249,2.454-4.062,2.454  h-1.032l0.724-4.583c0.043-0.277,0.283-0.481,0.563-0.481h0.473c1.235,0,2.4,0,3.002,0.704C47.027,11.668,47.137,12.292,47,13.154z">
                                                </path>
                                                <path fill="#253B80"
                                                    d="M66.654,13.075h-3.275c-0.279,0-0.52,0.204-0.563,0.481l-0.145,0.916l-0.229-0.332  c-0.709-1.029-2.29-1.373-3.868-1.373c-3.619,0-6.71,2.741-7.312,6.586c-0.313,1.918,0.132,3.752,1.22,5.031  c0.998,1.176,2.426,1.666,4.125,1.666c2.916,0,4.533-1.875,4.533-1.875l-0.146,0.91c-0.055,0.348,0.213,0.66,0.562,0.66h2.95  c0.469,0,0.865-0.34,0.939-0.803l1.77-11.209C67.271,13.388,67.004,13.075,66.654,13.075z M62.089,19.449  c-0.316,1.871-1.801,3.127-3.695,3.127c-0.951,0-1.711-0.305-2.199-0.883c-0.484-0.574-0.668-1.391-0.514-2.301  c0.295-1.855,1.805-3.152,3.67-3.152c0.93,0,1.686,0.309,2.184,0.892C62.034,17.721,62.232,18.543,62.089,19.449z">
                                                </path>
                                                <path fill="#253B80"
                                                    d="M84.096,13.075h-3.291c-0.314,0-0.609,0.156-0.787,0.417l-4.539,6.686l-1.924-6.425  c-0.121-0.402-0.492-0.678-0.912-0.678h-3.234c-0.393,0-0.666,0.384-0.541,0.754l3.625,10.638l-3.408,4.811  c-0.268,0.379,0.002,0.9,0.465,0.9h3.287c0.312,0,0.604-0.152,0.781-0.408L84.564,13.97C84.826,13.592,84.557,13.075,84.096,13.075z">
                                                </path>
                                                <path fill="#179BD7"
                                                    d="M94.992,6.749h-6.84c-0.467,0-0.865,0.34-0.938,0.802l-2.766,17.537c-0.055,0.346,0.213,0.658,0.562,0.658  h3.51c0.326,0,0.605-0.238,0.656-0.562l0.785-4.971c0.072-0.463,0.471-0.803,0.938-0.803h2.164c4.506,0,7.105-2.18,7.785-6.5  c0.307-1.89,0.012-3.375-0.873-4.415C99.004,7.353,97.281,6.749,94.992,6.749z M95.781,13.154c-0.373,2.454-2.248,2.454-4.062,2.454  h-1.031l0.725-4.583c0.043-0.277,0.281-0.481,0.562-0.481h0.473c1.234,0,2.4,0,3.002,0.704  C95.809,11.668,95.918,12.292,95.781,13.154z">
                                                </path>
                                                <path fill="#179BD7"
                                                    d="M115.434,13.075h-3.273c-0.281,0-0.52,0.204-0.562,0.481l-0.145,0.916l-0.23-0.332  c-0.709-1.029-2.289-1.373-3.867-1.373c-3.619,0-6.709,2.741-7.311,6.586c-0.312,1.918,0.131,3.752,1.219,5.031  c1,1.176,2.426,1.666,4.125,1.666c2.916,0,4.533-1.875,4.533-1.875l-0.146,0.91c-0.055,0.348,0.213,0.66,0.564,0.66h2.949  c0.467,0,0.865-0.34,0.938-0.803l1.771-11.209C116.053,13.388,115.785,13.075,115.434,13.075z M110.869,19.449  c-0.314,1.871-1.801,3.127-3.695,3.127c-0.949,0-1.711-0.305-2.199-0.883c-0.484-0.574-0.666-1.391-0.514-2.301  c0.297-1.855,1.805-3.152,3.67-3.152c0.93,0,1.686,0.309,2.184,0.892C110.816,17.721,111.014,18.543,110.869,19.449z">
                                                </path>
                                                <path fill="#179BD7"
                                                    d="M119.295,7.23l-2.807,17.858c-0.055,0.346,0.213,0.658,0.562,0.658h2.822c0.469,0,0.867-0.34,0.939-0.803  l2.768-17.536c0.055-0.346-0.213-0.659-0.562-0.659h-3.16C119.578,6.749,119.338,6.953,119.295,7.23z">
                                                </path>
                                                <path fill="#253B80"
                                                    d="M7.266,29.154l0.523-3.322l-1.165-0.027H1.061L4.927,1.292C4.939,1.218,4.978,1.149,5.035,1.1  c0.057-0.049,0.13-0.076,0.206-0.076h9.38c3.114,0,5.263,0.648,6.385,1.927c0.526,0.6,0.861,1.227,1.023,1.917  c0.17,0.724,0.173,1.589,0.007,2.644l-0.012,0.077v0.676l0.526,0.298c0.443,0.235,0.795,0.504,1.065,0.812  c0.45,0.513,0.741,1.165,0.864,1.938c0.127,0.795,0.085,1.741-0.123,2.812c-0.24,1.232-0.628,2.305-1.152,3.183  c-0.482,0.809-1.096,1.48-1.825,2c-0.696,0.494-1.523,0.869-2.458,1.109c-0.906,0.236-1.939,0.355-3.072,0.355h-0.73  c-0.522,0-1.029,0.188-1.427,0.525c-0.399,0.344-0.663,0.814-0.744,1.328l-0.055,0.299l-0.924,5.855l-0.042,0.215  c-0.011,0.068-0.03,0.102-0.058,0.125c-0.025,0.021-0.061,0.035-0.096,0.035H7.266z">
                                                </path>
                                                <path fill="#179BD7"
                                                    d="M23.048,7.667L23.048,7.667L23.048,7.667c-0.028,0.179-0.06,0.362-0.096,0.55  c-1.237,6.351-5.469,8.545-10.874,8.545H9.326c-0.661,0-1.218,0.48-1.321,1.132l0,0l0,0L6.596,26.83l-0.399,2.533  c-0.067,0.428,0.263,0.814,0.695,0.814h4.881c0.578,0,1.069-0.42,1.16-0.99l0.048-0.248l0.919-5.832l0.059-0.32  c0.09-0.572,0.582-0.992,1.16-0.992h0.73c4.729,0,8.431-1.92,9.513-7.476c0.452-2.321,0.218-4.259-0.978-5.622  C24.022,8.286,23.573,7.945,23.048,7.667z">
                                                </path>
                                                <path fill="#222D65"
                                                    d="M21.754,7.151c-0.189-0.055-0.384-0.105-0.584-0.15c-0.201-0.044-0.407-0.083-0.619-0.117  c-0.742-0.12-1.555-0.177-2.426-0.177h-7.352c-0.181,0-0.353,0.041-0.507,0.115C9.927,6.985,9.675,7.306,9.614,7.699L8.05,17.605  l-0.045,0.289c0.103-0.652,0.66-1.132,1.321-1.132h2.752c5.405,0,9.637-2.195,10.874-8.545c0.037-0.188,0.068-0.371,0.096-0.55  c-0.313-0.166-0.652-0.308-1.017-0.429C21.941,7.208,21.848,7.179,21.754,7.151z">
                                                </path>
                                                <path fill="#253B80"
                                                    d="M9.614,7.699c0.061-0.393,0.313-0.714,0.652-0.876c0.155-0.074,0.326-0.115,0.507-0.115h7.352  c0.871,0,1.684,0.057,2.426,0.177c0.212,0.034,0.418,0.073,0.619,0.117c0.2,0.045,0.395,0.095,0.584,0.15  c0.094,0.028,0.187,0.057,0.278,0.086c0.365,0.121,0.704,0.264,1.017,0.429c0.368-2.347-0.003-3.945-1.272-5.392  C20.378,0.682,17.853,0,14.622,0h-9.38c-0.66,0-1.223,0.48-1.325,1.133L0.01,25.898c-0.077,0.49,0.301,0.932,0.795,0.932h5.791  l1.454-9.225L9.614,7.699z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-row gap-5 text-grey">
                                            <div class="bold">Tips:</div>
                                            <div>Simply click on the payment button below to proceed to the PayPal payment
                                                page.</div>
                                        </div>
                                        <div class="pt-10"><button class="btn-send-inquiry w-100p  font-16">Pay with
                                                Paypal</button></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
            <div class="w-30p flex-col gap-20">
                <table>

                    <tr>
                        <td class="font-20 bold">Price Summary</td>

                    </tr>
                    <tr class="font-20">
                        <td class="flex-col gap-5">
                            <div class="flex-row justify-between">
                                <div>Base Price</div>
                                <div class="text-grey">$28,660</div>
                            </div>
                            <div class="flex-row justify-between">
                                <div>Total Discount</div>
                                <div class="text-green">-$2,560</div>
                            </div>
                            <div class="flex-row justify-between">
                                <div>Taxes % Fees</div>
                                <div class="text-grey">$350</div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="flex-row justify-between">
                                <div class="font-20 bold">Payable Now</div>
                                <div class="text-grey font-20 bold">
                                    {{ $md_tours->md_tour_netadult }} บาท</div>
                            </div>
                        </td>



                    </tr>

                </table>
                <table>
                    <tr>
                        <td class="font-20 bold text-center">Sign In Now To Book An Online</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex-col gap-20">
                                <div class="label">
                                    <div class="text-grey">Email id</div>
                                    <label class="text-input">
                                        <input type="text" name="" placeholder="">
                                    </label>
                                </div>
                                <div class="label">
                                    <div class="text-grey">Mobile number</div>
                                    <label class="text-input">
                                        <input type="text" placeholder="">
                                    </label>
                                </div>
                            </div>
                            <label class="flex-row checked-design pt-10 items-center">
                                <input checked="checked" type="checkbox">
                                <div class="checkmark"></div>
                                <div class="text-grey">I Already Have Booking Account</div>
                            </label>

                            <div class="pt-10 pb-10">
                                <button class="btn-detail w-100p font-16">Book Now</button>
                            </div>

                            <div class="text-grey text-center">Or via social media</div>

                            <div class="pt-10 pb-10 justify-center flex-row gap-5">
                                <button class="btn-facebook  font-16 items-center flex-row gap-5"> <svg
                                        viewBox="0 0 24 24" height="24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"
                                            fill="#ffffff"></path>
                                    </svg>Facebook</button>
                                <button class="btn-google font-16 items-center flex-row gap-5"><svg xml:space="preserve"
                                        style="enable-background:new 0 0 512 512;" viewBox="0 0 512 512" y="0px" x="0px"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                        id="Layer_1" width="20" version="1.1">
                                        <path
                                            d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                                                                                                                                    c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                                                                                                                                    C103.821,274.792,107.225,292.797,113.47,309.408z"
                                            style="fill:#ffffff;">
                                        </path>
                                        <path
                                            d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                                                                                                                                    c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                                                                                                                                    c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"
                                            style="fill:#ffffff;"></path>
                                        <path
                                            d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                                                                                                                                    c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                                                                                                                                    c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"
                                            style="fill:#ffffff;">
                                        </path>
                                        <path
                                            d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                                                                                                                                    c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                                                                                                                                    C318.115,0,375.068,22.126,419.404,58.936z"
                                            style="fill:#ffffff;">
                                        </path>

                                    </svg> Google</button>
                            </div>






                        </td>
                    </tr>
                </table>
            </div>



        </div>
    </form>


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
            openCity(null, 'Tour Review');
            document.querySelector('.tablinks.active').classList.add('active');
        });
    </script>
@endsection
