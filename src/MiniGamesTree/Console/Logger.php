<?php

namespace MiniGamesTree\Console;

use pocketmine\plugin\PluginBase;

class Logger extends PluginBase { 

    const Name = "MiniGamesBase";
    
    public $base;

    public function onEnable() {
        $this->base = new \MiniGamesTree\Base\ArrayBase();
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Run\RT($this), $this->base->speed);
        $this->getLogger()->info(\pocketmine\utils\TextFormat::GREEN.self::Name . " IS Worked");
        
    }
}
?>
