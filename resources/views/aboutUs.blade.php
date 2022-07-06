@extends ('layouts/master')

@section('aboutus')
    <div class="postDetailsBox">
        <img src="{{ asset('img/nav_logo.png') }}" class="img-fluid rounded mx-auto d-block m-2" alt="Responsive image">

        <h2 class="title_header"><strong> About us </strong></h2>
        <h3 class="wir"><strong><i><ins>Ruslan, Beni, Sven, Nina, Ajoub, Julian</ins></i></strong></h3>
        <p class="pMain">Wir sind die kleine Gruppe von Menschen die grosse Ideen haben.<br>
            Wir wollen gemeinsam unseren
            Gedanken in erstklassige digitale Lösungen verwandeln.
        </p>
        <h3 class="wir_1">Unsere Teammitglieder beschreiben sich als : </h3>
        <div class="container-fluid mt-3">
            <div class="row">

                <div class="col p-3 text-white"><ins>1. SELBSTBEWUSST</ins>
                    Wir treten als selbstbewusste und seriöse Experten auf, um unseren Kunden Rückhalt zu geben.</div>
                <div class="col p-3 text-white">2. WERTSCHÄTZEND <br>
                    Wir wertschätzen die Geschäftsbeziehungen zu unseren Kunden, weil unser Erfolg davon abhängt.</div>
                <div class="col p-3 text-white">
                    3. INTELLIGENT Wir sind in der Lage komplexe Probleme zu verstehen und die richtigen Lösungen zu
                    finden.></div>
            </div>
        </div>
    </div>
@endsection
