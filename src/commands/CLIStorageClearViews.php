<?php namespace Eems\EeClearStorage;

use \Illuminate\Console\Command;
use \Illuminate\Filesystem\Filesystem;

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
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$files = File::glob(storage_path('views/*'));
		var_dump($files); die();
	}

}
