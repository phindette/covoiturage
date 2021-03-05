<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;

use App\Entity\Adherent;
class AdherentTest extends TestCase
{
    public function testSomething(): void
    {
        $adherent = new Adherent();
        $this->assertInstanceOf(Adherent::class,$adherent);
    }
}
