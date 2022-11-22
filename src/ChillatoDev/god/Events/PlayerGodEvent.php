<?php

namespace ChillatoDev\god\Events;

use ChillatoDev\god\Loader;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\player\Player;

class PlayerGodEvent implements Listener {

    public function onDamage(EntityDamageEvent $event){
        $player = $event->getEntity();
        if($player instanceof Player && isset(Loader::$godmode[$player->getName()])){
            $event->cancel();
        }
    }
}