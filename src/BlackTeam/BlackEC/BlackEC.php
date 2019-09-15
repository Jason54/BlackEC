<?php

namespace BlackTeam\BlackEC;

use BlackTeam\BlackEC\commands\EnderchestCommand;
use pocketmine\{
    plugin\PluginBase, Server, Player, utils\Config
};

use muqsit\invmenu\InvMenuHandler;

class BlackEC extends PluginBase{

    /** @var Config $config */
    protected $config;

    public function onEnable(){
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, [
            "commandDescription" => "Ouvre l'interface utilisateur enderchest",
            "commandPermission" => "kingenderchest.command"
        ]);

        if(!InvMenuHandler::isRegistered()){
            InvMenuHandler::register($this);
        }

        $this->getServer()->getCommandMap()->register("enderchest", new EnderchestCommand($this));
    }

    public function getConfig(): Config{
        return $this->config;
    }
}