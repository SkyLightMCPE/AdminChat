<?php

namespace AdminChat;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat as color;

class ac extends PluginBase{
	public function onCommand(CommandSender $sender, Command $cmd, $lbl, array $args){
		$this->getServer()->broadcast(sprintf("§8[§cSTAFF§8]§7 %s: %s", $sender->getDisplayName(), implode(" ", $args)), Server::BROADCAST_CHANNEL_ADMINISTRATIVE);
		return true;
	}
}
