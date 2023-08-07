<?php

namespace Biswajit\RegionQuery;

use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {
	
 private $config;
    
    public function onEnable() : void {
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->saveResource("config.yml");
      $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array());
    }
    public function onPlayerMove(PlayerMoveEvent $event) {
        $player = $event->getPlayer();
        $world = $player->getWorld()->getFolderName();
        $position = $player->getPosition();
        $config = $this->getConfig();

        if ($world === $config->get("WorldName1") && $position->getX() === $config->get("Position1X") && $position->getY() === $config->get("Position1Y") && $position->getZ() === $config->get("Position1Z")) {
            $player->sendTitle($config->get("Message1"));
        }
        if ($world === $config->get("WorldName2") && $position->getX() === $config->get("Position2X") && $position->getY() === $config->get("Position2Y") && $position->getZ() === $config->get("Position2Z")) {
            $player->sendTitle($config->get("Message2"));
        }
        if ($world === $config->get("WorldName3") && $position->getX() === $config->get("Position3X") && $position->getY() === $config->get("Position3Y") && $position->getZ() === $config->get("Position3Z")) {
            $player->sendTitle($config->get("Message3"));
        }
        if ($world === $config->get("WorldName4") && $position->getX() === $config->get("Position4X") && $position->getY() === $config->get("Position34Y") && $position->getZ() === $config->get("Position4Z")) {
            $player->sendTitle($config->get("Message4"));
        }
        if ($world === $config->get("WorldName5") && $position->getX() === $config->get("Position5X") && $position->getY() === $config->get("Position5Y") && $position->getZ() === $config->get("Position5Z")) {
            $player->sendTitle($config->get("Message5"));
        }
        if ($world === $config->get("WorldName6") && $position->getX() === $config->get("Position6X") && $position->getY() === $config->get("Position6Y") && $position->getZ() === $config->get("Position6Z")) {
            $player->sendTitle($config->get("Message6"));
        }
    }
}
