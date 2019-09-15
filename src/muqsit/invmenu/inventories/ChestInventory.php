<?php

namespace muqsit\invmenu\inventories;

use pocketmine\block\Block;
use pocketmine\network\mcpe\protocol\types\WindowTypes;
use pocketmine\tile\Tile;

class ChestInventory extends SingleBlockInventory{

	public function getBlock() : Block{
		return Block::get(Block::CHEST);
	}

	public function getNetworkType() : int{
		return WindowTypes::CONTAINER;
	}

	public function getTileId() : string{
		return Tile::CHEST;
	}

	public function getName() : string{
		return "Chest";
	}

	public function getDefaultSize() : int{
		return 27;
	}
}