<?php

namespace Modules\Music\Contracts;

interface MusicRepository
{
	/**
	 * @throws MusicNotFoundException
	 */
	public function findById(string $musicId);
}
