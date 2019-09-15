<?php

namespace muqsit\invmenu\inventories;

use pocketmine\block\Block;
use pocketmine\network\mcpe\protocol\types\WindowTypes;

class HopperInventory extends SingleBlockInventory{

	public function getBlock() : Block{
		return Block::get(Block::HOPPER_BLOCK);
	}

	public function getNetworkType() : int{
		return WindowTypes::HOPPER;
	}

	public function getTileId() : string{
		return "Hopper";
	}

	public function getName() : string{
		return "Hopper";
	}

	public function getDefaultSize() : int{
		return 5;
	}
}