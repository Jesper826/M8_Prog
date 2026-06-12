@extends('layouts.app')

@section('title', 'Space Programmeertalen | Space Programming')

@section('content')
    <section class="mx-auto w-full max-w-6xl px-6 py-20 lg:py-28">
        <div class="max-w-3xl">
            <p class="text-sm uppercase tracking-[0.3em] text-sky-300">Space Programming</p>
            <h1 class="mt-4 text-4xl font-semibold tracking-tight sm:text-5xl">
                Drie verzonnen space programmeertalen.
            </h1>
            <p class="mt-6 text-lg leading-8 text-slate-300">
                De data staat als object-array in de controller en wordt hier als overzicht getoond.
            </p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @foreach ($spaceLanguages as $spaceLanguage)
                <a href="{{ route('languages.details', ['lang' => $spaceLanguage->name]) }}" class="group rounded-3xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20 backdrop-blur transition hover:-translate-y-1 hover:border-sky-300/40 hover:bg-white/10">
                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl border border-white/10 bg-slate-950/40">
                        <img src="{{ asset($spaceLanguage->icon) }}" alt="{{ $spaceLanguage->name }} icoon" class="h-10 w-10">
                    </div>

                    <h2 class="mt-6 text-2xl font-semibold">{{ $spaceLanguage->name }}</h2>
                    <p class="mt-4 text-slate-300">Klik om de details te bekijken.</p>
                </a>
            @endforeach
        </div>
    </section>
@endsection