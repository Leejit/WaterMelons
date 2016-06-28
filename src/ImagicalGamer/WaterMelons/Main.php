<?php
namespace ImagicalGamer\WaterMelons;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\plugin\Plugin;

use pocketmine\event\player\PlayerItemHeldEvent;

use pocketmine\utils\TextFormat as C;

/* Copyright (C) ImagicalGamer - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jake C <imagicalgamer@outlook.com>, May 2016
 */

class Main extends PluginBase implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this ,$this);
  }

  public function onHeld(PlayerItemHeldEvent $event){
    $player = $event->getPlayer();
    $inventory = $player->getInventory();
    $item = $inventory->getItemInHand();
    if($item->getName() == "Melon"){
      $inventory->setItemInHand($item->setCustomName(C::RESET . "WaterMelon"));
    }
  }
}
