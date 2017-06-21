<?php

/*
 *
 *    _______                                _
 *   |__   __|                              | |
 *      | | ___  ___ ___  ___ _ __ __ _  ___| |_
 *      | |/ _ \/ __/ __|/ _ \  __/ _` |/ __| __|
 *      | |  __/\__ \__ \  __/ | | (_| | (__| |_
 *      |_|\___||___/___/\___|_|  \__,_|\___|\__|
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author Tessetact Team
 * @link http://www.github.com/TesseractTeam/Tesseract
 * 
 *
 */

namespace pocketmine\level\generator\normal\biome;

use pocketmine\block\Block;
use pocketmine\block\StainedClay;
use pocketmine\level\generator\normal\populator\Cactus;
use pocketmine\level\generator\normal\populator\DeadBush;

class MesaBiome extends SandyBiome {

	public function __construct(){
		parent::__construct();

		$cactus = new Cactus();
		$cactus->setBaseAmount(0);
		$cactus->setRandomAmount(5);
		$deadBush = new DeadBush();
		$cactus->setBaseAmount(2);
		$deadBush->setRandomAmount(10);

		$this->addPopulator($cactus);
		$this->addPopulator($deadBush);

		$this->setElevation(52, 71);

		$this->temperature = 2.0;
		$this->setGroundCover([
            Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::HARDENED_CLAY, 0),
			Block::get(Block::HARDENED_CLAY, 0),
			Block::get(Block::HARDENED_CLAY, 0),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::STAINED_HARDENED_CLAY, rand(2, 14)),
			Block::get(Block::RED_SANDSTONE, 0),
			Block::get(Block::RED_SANDSTONE, 0),
			Block::get(Block::RED_SANDSTONE, 0),
			Block::get(Block::RED_SANDSTONE, 0),
			Block::get(Block::RED_SANDSTONE, 0),
			Block::get(Block::RED_SANDSTONE, 0),
			Block::get(Block::RED_SANDSTONE, 0),
			Block::get(Block::RED_SANDSTONE, 0),
		]);
	}

	public function getName() : string{
		return "Mesa";
	}
} 