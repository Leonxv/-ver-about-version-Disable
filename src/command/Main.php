<?php

namespace command;


use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;


class Main extends PluginBase 
{
    public function onLoad() 
    {
        Server::getInstance()->getCommandMap()->unregister(Server::getInstance()->getCommandMap()->getCommand("version"));
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

}
