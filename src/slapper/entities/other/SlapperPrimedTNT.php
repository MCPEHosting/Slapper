<?php

declare(strict_types=1);

namespace slapper\entities\other;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use slapper\entities\SlapperEntity;

class SlapperPrimedTNT extends SlapperEntity {

    const TYPE_ID = EntityIds::TNT;
    const HEIGHT = 0.98;

}