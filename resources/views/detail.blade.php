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
                <div class="text-grey">London is the capital city of England.</div>
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
