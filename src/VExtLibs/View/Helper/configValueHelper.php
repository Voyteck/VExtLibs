<?php
namespace Voyteck\VExtLibs\View\Helper;

/**
 * Helper allowing to display configuration value
 * 
 * @author zielinw1
 *
 */
class configValueHelper extends \Zend\View\Helper\AbstractHelper {

    const LAZYFACTORY_INCLUDE_CONFIG = 'Config';

    /**
     * Provides value from Config
     * 
     * @param array $configPath     Array with keys for config path - concurrent elements are deeper levels of config 
     *                                  e.g. ['router', 'routes', 'webmail', 'type'] will result with Config['router']['routes']['webmail']['type']
     * @return unknown              Value of specific entry in configuration
     */
    public function __invoke(array $configPath = [], $quoteStrings = true) {
        $currentConfigValue = $this->Config;
        if (count($configPath) > 0)
            foreach($configPath as $configKey)
                $currentConfigValue = $currentConfigValue[$configKey];
        
        if ($quoteStrings && is_string($currentConfigValue))
            return "'" . addslashes($currentConfigValue) . "'";
        else 
            return $currentConfigValue;
        
    }

}