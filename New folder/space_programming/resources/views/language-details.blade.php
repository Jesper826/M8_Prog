@extends('layouts.app')

@section('title', $spaceLanguage->name . ' | Space Programming')

@section('content')
	<section class="mx-auto w-full max-w-4xl px-6 py-20 lg:py-28">
		<a href="{{ route('languages.list') }}" class="text-sm uppercase tracking-[0.3em] text-sky-300">Terug naar overzicht</a>

		<article class="mt-8 rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/20 backdrop-blur">
			<div class="flex h-20 w-20 items-center justify-center rounded-2xl border border-white/10 bg-slate-950/40">
				<img src="{{ asset($spaceLanguage->icon) }}" alt="{{ $spaceLanguage->name }} icoon" class="h-12 w-12">
			</div>

			<h1 class="mt-6 text-4xl font-semibold tracking-tight sm:text-5xl">{{ $spaceLanguage->name }}</h1>
			<p class="mt-6 text-lg leading-8 text-slate-300">{{ $spaceLanguage->description }}</p>
		</article>
	</section>
@endsection
