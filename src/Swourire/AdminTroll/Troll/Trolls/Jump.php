<?php


namespace Swourire\AdminTroll\Troll\Trolls;

use Swourire\AdminTroll\Troll\TrollBase;
use Swourire\AdminTroll\Troll\TrollEventWatcher;

class Jump extends TrollBase
{
    protected $name = "Jumper";
    public function apply(): void
    {
        TrollEventWatcher::$toMakeJump[] = $this->playerVictim->getName();
        parent::apply(); // TODO: Change the autogenerated stub
    }
}