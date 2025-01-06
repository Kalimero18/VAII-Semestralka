@extends('layouts.app')

@section('title', 'Kluby - Futbal v Londýne')

@section('kontent')
    <div class="kluby">
        <section class="kluby-text text-center mb-5">
            <h1>Vyber si klub</h1>
            <h2>Klikni na logo klubu, o ktorom by si sa chcel dozvedieť viac</h2>
        </section>

        <section class="kluby-obr row justify-content-center">
            <div class="col-6 col-md-3 mb-4">
                <a href="{{ route('arsenal') }}">
                    <img src="{{ asset('pics/Arsenal-logo.png') }}" alt="arsenal" class="img-fluid klub-logo">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <a href="{{ route('brentford') }}">
                    <img src="{{ asset('pics/Brentford-logo.png') }}" alt="brentford" class="img-fluid klub-logo">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <a href="{{ route('chelsea') }}">
                    <img src="{{ asset('pics/Chelsea-logo.png') }}" alt="chelsea" class="img-fluid klub-logo">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <a href="{{ route('crystal_palace') }}">
                    <img src="{{ asset('pics/Crystal-logo.png') }}" alt="crystal palace" class="img-fluid klub-logo">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <a href="{{ route('fulham') }}">
                    <img src="{{ asset('pics/Fulham-logo.png') }}" alt="fulham" class="img-fluid klub-logo">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <a href="{{ route('tottenham') }}">
                    <img src="{{ asset('pics/Tottenham-logo.png') }}" alt="tottenham" class="img-fluid klub-logo">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <a href="{{ route('west_ham') }}">
                    <img src="{{ asset('pics/WestHam-logo.png') }}" alt="west ham" class="img-fluid klub-logo">
                </a>
            </div>
        </section>

        <div class="text-center mt-4">
            <a href="{{ route('navrhy') }}" class="btn-animacia">
                Aký klub by sme mali pridať?
            </a>
        </div>

        <h2 class="text-center mt-4">Ďalšie kluby budú pridané už čoskoro!</h2>
    </div>

    <script src="{{ asset('js/SrandyCezJS.js') }}"></script>
@endsection


