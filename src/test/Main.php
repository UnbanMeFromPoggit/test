<?php

namespace test;

use pocketmine\PluginBase;

class Main extends PluginBase{

    public function onEnable(): void{
        $this->getLogger()->notice("Hello");
    }
}
