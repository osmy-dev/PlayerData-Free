<?php

namespace osmy\playerdata;

use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerLoginEvent;

use pocketmine\event\player\PlayerQuitEvent;

class PlayerData extends PluginBase implements Listener {

  

  public $prefix = "§7[§ePlayerData§7] §r";

  

  public function onEnable(): void{

    $this->getLogger()->info("PlayerData By OsmyNetwork Development Enabled");

    

    $this->getServer()->getPluginManager()->registerEvents($this,$this);

  }

  

  public function onLogin(PlayerLoginEvent $event) {

    $player = $event->getPlayer();

    $this->getLogger()->info($player->getName() . " Joining server, Checking This Player Data...");

  }

  

  public function onJoin(PlayerJoinEvent $event) {

    $player = $event->getPlayer();

    

    $this->getLogger()->info($player->getName() . "This Player Xuid: " . $player->getXuid());

    $player->sendMessage("§aWelcome To This Server!");

    $player->sendMessage($this->prefix . "§aThank For Use This Plugin!");

    $player->sendMessage($this->prefix . "§aThis Plugin Made By OsmyNetwork Development!");

  }

  

  public function onQuit(PlayerQuitEvent $event) {

    $player = $event->getPlayer();

    

    $this->getLogger()->info($player->getName() . "Leave This Server!");

  }

}
