<?php

namespace ChillatoDev\god\Commands;

use ChillatoDev\god\Loader;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;

class GodCommand extends Command {

    public function __construct(){
        parent::__construct("god", "godmode", "/god");
        $this->setPermission("god.cmd");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if(!$sender->hasPermission("god.cmd")){
            $sender->sendMessage("You don't have use permission");
        } else {
            if(isset(Loader::$godmode[$sender->getName()])){
                unset(Loader::$godmode[$sender->getName()]);
                $sender->sendMessage("god disabled!");
            } else {
                Loader::$godmode[$sender->getName()] = $sender;
                $sender->sendMessage("god enabled!");
            }
        }
    }
}