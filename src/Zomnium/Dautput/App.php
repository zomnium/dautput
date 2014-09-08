<?php

/**
 * Dautput
 * From data to output.
 * @author 		Tim van Bergenhenegouwen, Zomnium.
 * @link 		http://zomnium.com
 * @copyright 	2014 Zomnium, Tim van Bergenhenegouwen
 */

namespace Zomnium\Dautput;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class App extends Command
{
	protected function configure()
	{
		$this
			->setName('demo:greet')
			->setDescription('Greet someone')
			->addArgument(
				'name',
				InputArgument::OPTIONAL,
				'Who do you want to greet?'
				)
			->addOption(
				'yell',
				null,
				InputOption::VALUE_NONE,
				'If set, the task will yell in uppercase'
				)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$name = $input->getArgument('name');
		$text = ($name) ? 'Hello '.$name : 'Hello';
		if ($input->getOption('yell'))
			$text = strtoupper($text);
		$output->writeln($text);
		// green text
		$output->writeln('<info>foo</info>');
		// yellow text
		$output->writeln('<comment>foo</comment>');
		// black text on a cyan background
		$output->writeln('<question>foo</question>');
		// white text on a red background
		$output->writeln('<error>foo</error>');
	}
}
