<?php

namespace Pikokr\XePlugin\TeamVega;

use Xpressengine\Config\ConfigEntity;

class VegaUtils {
    public static function getConfig(): ConfigEntity {
        $configManager = app('xe.config');

        return $configManager->get(Plugin::getId());
    }

    public static function getUrl(string $path) {
        $config = self::getConfig();

        return $config->get('url', '') . $path;
    }
}
