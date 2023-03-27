<x-layout>
    <h1>{{ $businessCard->name }}</h1>

    <h3>Scan Me</h3>

    {!! $businessCard->generateQrCode(); !!}
</x-layout>
