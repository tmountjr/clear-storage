<?php namespace Tmountjr\ClearStorage;

use \Illuminate\Console\Command;
use \File;

class CLIStorageClearViews extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'storage:clear-views';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = "Clears Laravel's app/storage/views directory.";

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		File::delete(File::files(storage_path('views')));
	}

}
