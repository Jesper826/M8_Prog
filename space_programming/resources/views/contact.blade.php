<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact | Space Programming</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
	<main class="mx-auto flex min-h-screen w-full max-w-4xl items-center px-6 py-16">
		<section class="w-full rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/30 backdrop-blur">
			<p class="text-sm uppercase tracking-[0.3em] text-sky-300">Space Programming</p>
			<h1 class="mt-3 text-4xl font-semibold">Contact</h1>
			<div class="mt-8 space-y-4 text-lg text-slate-200">
				<p>Kantoor Space Programming</p>
				<p>Orbitlaan 42</p>
				<p>1234 AB Rotterdam</p>
				<p>Telefoon: 010 - 123 45 67</p>
				<p>E-mail: info@spaceprogramming.nl</p>
			</div>
			<div class="mt-10">
				<a href="{{ route('home') }}" class="inline-flex rounded-full bg-sky-400 px-5 py-3 font-medium text-slate-950 transition hover:bg-sky-300">
					Terug naar home
				</a>
			</div>
		</section>
	</main>
</body>
</html>
