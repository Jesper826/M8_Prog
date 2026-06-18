<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class LanguageController extends Controller
{
	private array $spaceLanguages = [
		[
			'name' => 'NebulaScript',
			'description' => 'Een expressieve taal voor interactieve sterrenkaarten, missie-logica en visuele ruimteverhalen.',
			'icon' => 'assets/img/nebula-script.svg',
		],
		[
			'name' => 'OrbitFlow',
			'description' => 'Een gestroomlijnde programmeertaal voor satelliet-workflows, datafeeds en automatische baansturing.',
			'icon' => 'assets/img/orbit-flow.svg',
		],
		[
			'name' => 'AstroCore',
			'description' => 'Een robuuste taal voor boordcomputers, instrumentcontrole en fouttolerante ruimte-systemen.',
			'icon' => 'assets/img/astro-core.svg',
		],
	];

	public function list()
	{
		$spaceLanguages = array_map(function (array $spaceLanguage) {
			return (object) $spaceLanguage;
		}, $this->spaceLanguages);

		return view('languages', [
			'spaceLanguages' => $spaceLanguages,
		]);
	}

	public function details(string $lang)
	{
		$matchedLanguage = array_values(array_filter($this->spaceLanguages, function (array $spaceLanguage) use ($lang) {
			return $spaceLanguage['name'] === $lang;
		}))[0] ?? null;	

		abort_if($matchedLanguage === null, Response::HTTP_NOT_FOUND);

		return view('language-details', [
			'spaceLanguage' => (object) $matchedLanguage,
		]);
	}
}