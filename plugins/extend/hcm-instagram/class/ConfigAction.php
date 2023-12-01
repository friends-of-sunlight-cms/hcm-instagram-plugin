<?php

namespace SunlightExtend\HcmInstagram;

use Sunlight\Plugin\Action\ConfigAction as BaseConfigAction;

class ConfigAction extends BaseConfigAction
{
    public function getConfigLabel(string $key): string
    {
        return _lang('hcm-instagram.config.' . $key);
    }
}
