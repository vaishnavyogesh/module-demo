<?php namespace Modules\Music\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Music\Resources\MusicResource;
use Modules\Music\Services\MusicService;
use Modules\PMPDeals\Exceptions\MusicNotFoundException;

class MusicController extends Controller 
{
	public function __construct(
		private MusicService $musicService
	){
	}

	public function findOrFail(string $music)
	{
		try {
			// music service ke bajaye Music facade bhi use kr sakte agar implementation vary karega behind the facade
			$music = $this->musicService->findById($music);
		} catch (MusicNotFoundException $e) {
			abort(404);
		}

		return new MusicResource($music);
	}
}
