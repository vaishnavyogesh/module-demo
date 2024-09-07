<?php 

namespace Modules\Music\Repository;

use Modules\Music\Contracts\MusicRepository;
use Modules\Music\Entities\Music;

class MusicDatabaseRepository implements MusicRepository
{
	public function __construct(
		private $database
	){}

	/**
	 * @throws MusicNotFoundException
	 */
	public function findById(string $id): Music
	{
		// MusicDbMapper ko accha naam de sakta hai?
		return MusicDbMapper::from($this->database->query('blah blah blah'));
	}
}
