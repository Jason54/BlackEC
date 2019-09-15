<?php

namespace muqsit\invmenu\utils;

use pocketmine\math\Vector3;

class HolderData{
	public $position;

	public $custom_name;

	public function __construct(Vector3 $position, ?string $custom_name){
		$this->position = $position;
		$this->custom_name = $custom_name;
	}
}