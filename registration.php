<?php
/**
 * Copyright © 2021 Evgenii e@zab.bz
 * See LICENSE for license details.
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    "ZEV_YearCalendar",
    __DIR__
);
