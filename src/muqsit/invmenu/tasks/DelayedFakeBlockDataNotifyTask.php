<?php

namespace muqsit\invmenu\tasks;

use muqsit\invmenu\inventories\BaseFakeInventory;

use pocketmine\Player;
use pocketmine\scheduler\Task;

class DelayedFakeBlockDataNotifyTask extends Task{

	private $player;

	private $inventory;

	public function __construct(Player $player, BaseFakeInventory $inventory){
		$this->player = $player;
		$this->inventory = $inventory;
	}

	public function onRun(int $tick) : void{
		if($this->player->isConnected()){
			$this->inventory->onFakeBlockDataSendSuccess($this->player);
		}else{
			$this->inventory->onFakeBlockDataSendFailed($this->player);
		}
	}
}