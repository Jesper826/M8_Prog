<div {{ $attributes->merge(['class' => 'flex items-center gap-4 rounded-xl border border-white/10 bg-slate-950/30 px-4 py-3 text-sm text-slate-200']) }}>
	<span class="w-32 shrink-0 font-semibold text-slate-50">{{ $label }}</span>
	<span class="text-slate-300">{{ $value }}</span>
</div>
