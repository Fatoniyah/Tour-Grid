@extends('detail_layout')

@section('tap')
    <div class="tap-bar gap-10">
        <button class="btn-tap tablinks active" onclick="openCity(event, 'Overview')">Overview</button>
        <button class="btn-tap tablinks" onclick="openCity(event, 'Itinerary')">Itinerary</button>
        <button class="btn-tap tablinks" onclick="openCity(event, 'Inclusions & Exclusion')">Inclusions & Exclusion</button>
        <button class="btn-tap tablinks" onclick="openCity(event, 'Tour Policy')">Tour Policy</button>
    </div>
    <div class="pt-50 flex-row gap-40">
        <div class="w-70p">

            <div id="Overview" class="tabcontent active">
                <div class="font-30 bold">Overview</div>
                <hr>
                <div class="text-grey text-format">Bali, also known as the land of gods has plenty to offer to travelers from across the
                    globe. As it so contrasted oh estimating instrument. Size like body some one had. Are conduct viewing
                    boy minutes warrant the expense? Tolerably behavior may admit daughters offending her ask own. Praise
                    effect wishes change way and any wanted. Lively use looked latter regard had. Do he it part more last
                    in. We understand that theory is important to build a solid foundation, we understand that theory alone
                    isn’t going to get the job done so that’s why this is packed with practical hands-on examples that you
                    can follow step by step.</div>
            </div>
            <div id="Itinerary" class="tabcontent">
                <h3>Itinerary</h3>
                <p>Paris is the capital of France.</p>
            </div>
            <div id="Inclusions & Exclusion" class="tabcontent">
                <h3>Inclusions & Exclusion</h3>
                <p>Tokyo is the capital of Japan.</p>
            </div>
            <div id="Tour Policy" class="tabcontent">
                <h3>Tour Policy</h3>
                <p>Tokyo is the capital of Japan.</p>
            </div>
        </div>
        <div class="w-30p">fgdfgfdg</div>

    </div>
@endsection
