@extends('layouts.app')

@section('title', 'Kluby - Futbal v Londýne')

@section('kontent')

<div class="kluby">
  <section class="kluby-text">
    <h1>Vyber si klub</h1>
    <h2>Klikni na logo klubu, o ktorom by si sa chcel dozvedieť viac </h2>
  </section>
  <section class="kluby-obr">
    <a href="{{ route('arsenal') }}">
      <img src="{{ asset('pics/Arsenal-logo.png') }}" alt="arsenal">
    </a>
    <a href="{{ route('brentford') }}">
      <img src="{{ asset('pics/Brentford-logo.png') }}" alt="brentford">
    </a>
    <a href="{{ route('chelsea') }}">
      <img src="{{ asset('pics/Chelsea-logo.png') }}" alt="chelsea">
    </a>
    <a href="{{ route('crystal_palace') }}">
      <img src="{{ asset('pics/Crystal-logo.png') }}" alt="crystal palace">
    </a>
    <a href="{{ route('fulham') }}">
      <img src="{{ asset('pics/Fulham-logo.png') }}" alt="fulham">
    </a>
    <a href="{{ route('tottenham') }}">
      <img src="{{ asset('pics/Tottenham-logo.png') }}" alt="tottenham">
    </a>
    <a href="{{ route('west_ham') }}">
      <img src="{{ asset('pics/WestHam-logo.png') }}" alt="west ham">
    </a>
  </section>
  <h2>Ďalšie kluby budú pridané už čoskoro!</h2>
</div>
</body>
<script src="{{ asset('js/animaciaLogo.js') }}"></script>
@endsection
