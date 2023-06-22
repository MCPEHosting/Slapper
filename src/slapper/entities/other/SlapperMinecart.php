<?php

declare(strict_types=1);

namespace slapper\entities\other;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use slapper\entities\SlapperEntity;

class SlapperMinecart extends SlapperEntity {

    const TYPE_ID = EntityIds::MINECART;
    const HEIGHT = 0.7;

}
