<?php


namespace Swourire\AdminTroll\Troll\Trolls;


use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use Swourire\AdminTroll\Troll\TrollBase;

class Vanish extends TrollBase
{
    protected $name = "Vanisher";

    public function apply(): void
    {
        $invis = Effect::getEffect(Effect::INVISIBILITY);
        $instance = new EffectInstance($invis, 2147483647, 3, false);
        $this->playerTroll->addEffect($instance);
        parent::apply(); // TODO: Change the autogenerated stub
    }
}