<?php


namespace Swourire\AdminTroll\Troll\Trolls;


use Swourire\AdminTroll\Troll\TrollBase;

class Punch extends TrollBase
{
    protected $name = "Puncher";
    public function apply(): void
    {
        parent::apply(); // TODO: Change the autogenerated stub
    }

    public function needsCancel(): bool
    {
        return false; // TODO: Change the autogenerated stub
    }
}