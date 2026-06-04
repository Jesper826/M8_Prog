@extends('layouts.app')

@section('title', 'Home | Space Programming')

@section('content')
    <section class="mx-auto flex w-full max-w-6xl items-center px-6 py-20 lg:py-28">
        <div class="grid w-full gap-10 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
            <div>
                <p class="text-sm uppercase tracking-[0.3em] text-sky-300">Space Programming</p>
                <h1 class="mt-4 text-4xl font-semibold tracking-tight sm:text-5xl lg:text-6xl">
                    Laravel site werkend voor de presentatie.
                </h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Dit is de startpagina van het project. De gemeenschappelijke html staat nu in de layout,
                    zodat de views alleen nog hun eigen content bevatten.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="rounded-full bg-sky-400 px-6 py-3 font-medium text-slate-950 transition hover:bg-sky-300">
                        Naar contact
                    </a>
                    <a href="#uitleg" class="rounded-full border border-white/15 px-6 py-3 font-medium text-white transition hover:bg-white/10">
                        Bekijk uitleg
                    </a>
                </div>
            </div>

            <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/30 backdrop-blur">
                <p class="text-sm uppercase tracking-[0.3em] text-sky-300">Wat is er aangepast?</p>
                <ul class="mt-6 space-y-4 text-slate-200">
                    <li>De header en footer staan in een gedeelde layout.</li>
                    <li>De welcome- en contactpagina gebruiken nu de gedeelde layout.</li>
                    <li>De content staat alleen nog in de content section.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="uitleg" class="border-t border-white/10 bg-slate-900/60">
        <div class="mx-auto grid w-full max-w-6xl gap-6 px-6 py-16 lg:grid-cols-3">
            <article class="rounded-2xl border border-white/10 bg-white/5 p-6">
                <h2 class="text-xl font-semibold">1. Layout</h2>
                <p class="mt-3 text-slate-300">De structuur met head, navigatie en footer wordt één keer gedefinieerd.</p>
            </article>
            <article class="rounded-2xl border border-white/10 bg-white/5 p-6">
                <h2 class="text-xl font-semibold">2. Views</h2>
                <p class="mt-3 text-slate-300">Elke pagina vult alleen de content aan die uniek is voor die route.</p>
            </article>
            <article class="rounded-2xl border border-white/10 bg-white/5 p-6">
                <h2 class="text-xl font-semibold">3. Demo klaar</h2>
                <p class="mt-3 text-slate-300">De site blijft werkend en is klaar om aan de leraar te tonen.</p>
            </article>
        </div>
    </section>
@endsection