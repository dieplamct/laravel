<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DemoCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:demo';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Demo command on laravel framework';

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
	 * @return void
	 */
	public function fire()
	{
        //Get argument
        $strInput = $this->argument("test");
        
        $a = $this->argument("a");
        $b = $this->argument("b");
        
        //Construct object to test
        $demo = new Demo($strInput);
        
        //output to console
		$this->line("String input: " . $demo->get());        
        $this->line("Result add two number $a + $b = " . $demo->addNumber($a, $b));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('test', InputArgument::REQUIRED, 'An example argument.'),
            array('a', InputArgument::REQUIRED, 'An example argument.'),
            array('b', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
		);
	}

}