<?php

namespace Modules\Music\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MusicResource extends JsonResource
{
	public function toArray(Request $request): array
	{
		return [
			'id' => $this->getId(),
			'name' => $this->getName(),
			'artist' => $this->getArtist()->getName()
		];
	}
}
