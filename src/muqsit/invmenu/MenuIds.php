<?php

namespace muqsit\invmenu;

use muqsit\invmenu\inventories\ChestInventory;
use muqsit\invmenu\inventories\DoubleChestInventory;
use muqsit\invmenu\inventories\HopperInventory;

interface MenuIds{

	const TYPE_CHEST = ChestInventory::class;
	const TYPE_DOUBLE_CHEST = DoubleChestInventory::class;
	const TYPE_HOPPER = HopperInventory::class;
}