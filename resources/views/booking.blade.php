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


    <div class="flex-row gap-20 pt-30">

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
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="grey"
                                        viewBox="0 0 24 24">
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
                                    In the case FIT flight inclusive package, the full amount of the flight will be payable
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
                        <div>A customer passport is mandatory. The passport must have 2 blank pages and 6-month validity.
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
                                                <label for="md_booking_fname" class="text-grey">First Name</label>
                                                <input type="text" id="md_booking_fname" name="md_booking_fname"
                                                    placeholder="">
                                            </div>
                                            <div class="w-40p">
                                                <label for="md_booking_lname" class="text-grey">Last name</label>
                                                <input type="text" id="md_booking_lname" name="md_booking_lname"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex-row gap-15">
                                            <div class="w-50p">
                                                <label for="dob" class="text-grey">Date of birth</label>
                                                <input type="date" id="dob" name="dob">
                                            </div>
                                            <div class="w-50p">
                                                <label for="pass" class="text-grey">Passport number</label>
                                                <input type="text" id="pass" name="passport" placeholder="">
                                            </div>
                                        </div>



                                    </div>



                                </td>
                            </tr>
                        </table>
                    </div>

                    {{-- <div class="pt-20">
                        <table>
                            <tr>
                                <td class="font-20 bold">Your booking detail will be sent here</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="p-10 flex-col gap-10">
                                        <div class="flex-row gap-15">
                                            <div class="w-50p">
                                                <label for="md_booking_tel" class="text-grey">Mobile Number</label>
                                                <input type="text" id="md_booking_tel" name="md_booking_tel"
                                                    placeholder="">
                                            </div>
                                            <div class="w-50p">
                                                <label for="md_booking_email" class="text-grey">
                                                    Email id</label>
                                                <input type="text" id="md_booking_email" name="md_booking_email"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div> --}}


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
                                            <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z"></path>
                                            <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z"></path>
                                            <path fill="#ff3d00"
                                                d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z">
                                            </path>
                                        </svg>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
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
                            <div class="text-grey font-20">$22,500</div>
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
                                    <input type="text" name="text" class="input" required=""
                                        placeholder="Enter your email">
                                </label>
                            </div>
                            <div class="label">
                                <div class="text-grey">Mobile number</div>
                                <label class="text-input">
                                    <input type="text" name="text" class="input" required=""
                                        placeholder="Enter your Mobile number">
                                </label>
                            </div>
                        </div>
                        <label class="flex-row checked-design pt-10 items-center">
                            <input checked="checked" type="checkbox">
                            <div class="checkmark"></div>
                            <div class="text-grey">I Already Have Booking Account</div>
                        </label>

                        <div class="pt-10 pb-10">
                            <button class="btn-detail w-100p font-16" type="submit">Book Now</button>
                        </div>

                        <div class="text-grey text-center">Or via social media</div>

                        <div class="pt-10 pb-10 justify-center flex-row gap-5">
                            <button class="btn-facebook  font-16 items-center flex-row gap-5"> <svg viewBox="0 0 24 24"
                                    height="24" width="24" xmlns="http://www.w3.org/2000/svg">
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
    <form action="{{ route('booking.store', $md_tours->md_tour_id) }}" method="POST">
        @csrf

        <label for="fname">ชื่อ:</label>
        <input type="text" name="fname" required>

        <label for="lname">สกุล:</label>
        <input type="text" name="lname" required>

        <label for="email">อีเมล:</label>
        <input type="email" name="email" required>

        <label for="tel">เบอร์โทร:</label>
        <input type="tel" name="tel" required>

        <input type="hidden" name="md_tour_id" value="{{ $md_tours->md_tour_id }}">

        <button type="submit">จอง</button>
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
