<?php

namespace Modules\Music\Repository;

use GuzzleHttp\Client;
use Modules\Music\Entities\Music;
use Modules\Music\Contracts\MusicRepository;

class MusicSpotifyRepository implements MusicRepository
{
	public function __construct(
		private Client $spotifyClient
	){}

	/**
	 * @throws MusicNotFoundException
	 */
	public function findById(string $id): Music
	{
		return MusicSpotifyMapper::from($this->spotifyClient->get("/musics/{$id}"));
	}
}
