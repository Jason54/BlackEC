<?php

namespace muqsit\invmenu\inventories;

use muqsit\invmenu\utils\HolderData;

use pocketmine\block\Block;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\protocol\types\WindowTypes;
use pocketmine\Player;
use pocketmine\tile\Tile;

abstract class SingleBlockInventory extends BaseFakeInventory{

	protected function sendFakeBlockData(Player $player, HolderData $data) : void{
		$block = $this->getBlock()->setComponents($data->position->x, $data->position->y, $data->position->z);
		$player->getLevel()->sendBlocks([$player], [$block]);

		$tag = new CompoundTag();
		if($data->custom_name !== null){
			$tag->setString("CustomName", $data->custom_name);
		}

		$this->sendTile($player, $block, $tag);

		$this->onFakeBlockDataSend($player);
	}

	protected function sendRealBlockData(Player $player, HolderData $data) : void{
		$player->getLevel()->sendBlocks([$player], [$data->position]);
	}

	abstract public function getBlock() : Block;
}
