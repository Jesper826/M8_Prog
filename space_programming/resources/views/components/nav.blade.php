<header class="border-b border-white/10 bg-slate-950/90 backdrop-blur">
	<div class="mx-auto flex w-full max-w-6xl items-center justify-between px-6 py-4">
		<a href="{{ route('home') }}" class="text-lg font-semibold tracking-[0.25em] text-sky-300 uppercase">
			Space Programming
		</a>

		<nav class="flex items-center gap-3 text-sm">
			<a href="{{ route('home') }}" class="rounded-full px-4 py-2 transition hover:bg-white/10">
				Home
			</a>
			<a href="{{ route('contact') }}" class="rounded-full px-4 py-2 transition hover:bg-white/10">
				Contact
			</a>
			<a href="{{ route('languages.list') }}" class="rounded-full px-4 py-2 transition hover:bg-white/10">
				Languages
			</a>
		</nav>
	</div>
</header>
