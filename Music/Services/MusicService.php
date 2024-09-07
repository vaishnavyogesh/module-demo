<?php 

namespace Modules\Music\Services;

use Modules\Music\Contracts\MusicRepository as MusicRepository;
use Modules\Music\Entities\Music;

class MusicService {
    public function __construct(
		private MusicRepository $repository
	){
    }

	public function findById(string $id): Music
	{
		/**
		 * abhi yeh service ko pata nahi under the hood music instance db se aa rha ya spotify se 
		 */
		return $this->repository->findById($id);
	}
}
