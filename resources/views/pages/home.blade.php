@extends('gotime::layouts.' . config('naykel.template'))

@section('content')

<div class="grid cols-2">

    <form action="{{ route('pay') }}" method="POST" id="paymentForm">
        @csrf

        <x-formit::input for="value" label="How much you want to pay?" type="number" value="{{ mt_rand(500, 100000) / 100 }}" />


        @foreach($paymentPlatforms as $paymentPlatform)
            <label class="btn outline">
                <input type="radio" name="payment_platform" value="{{ $paymentPlatform->id }}" required>
                <img src="{{ asset($paymentPlatform->image) }}">
            </label>
        @endforeach

        <div class="frm-row">
            <button type="submit" id="payButton" class="btn primary">PROCESS PAYMENT</button>
        </div>

    </form>

</div>

@endsection
