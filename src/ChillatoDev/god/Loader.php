<?php

namespace ChillatoDev\god;

use ChillatoDev\god\Commands\GodCommand;
use ChillatoDev\god\Events\PlayerGodEvent;
use pocketmine\permission\Permission;
use pocketmine\permission\PermissionManager;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {
    /** @var Player[] $godmode */
    public static $godmode = [];

    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(new PlayerGodEvent(), $this);
        $this->getServer()->getCommandMap()->register("commands", new GodCommand());
    }
}