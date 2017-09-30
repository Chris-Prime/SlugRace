<?php

declare(strict_types = 1);

namespace BlockHorizons\SlugRace;

use pocketmine\plugin\PluginBase;

class SluggishLoader extends PluginBase {

	public function onEnable() {
		$this->registerCommands();
		$this->registerListeners();
	}

	public function onDisable() {

	}

	public function registerCommands(): void {
		$this->getServer()->getCommandMap()->registerAll("slugrace", [

		]);
	}

	public function registerListeners(): void {
		$listeners = [

		];
		foreach($listeners as $listener) {
			$this->getServer()->getPluginManager()->registerEvents($listener, $this);
		}
	}
}