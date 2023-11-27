<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2023 JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace Jajuma\PotWeather\Helper;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Jajuma\PotWeather\Model\Config\Source\Location\Type;
/**
 * Class Data
 * @package Jajuma\PotWeather\Helper
 */
class WeatherConfig extends AbstractHelper
{
    public const WEATHER_ENABLED = 'power_toys/weather/is_enabled';
    public const WEATHER_TYPE = 'power_toys/weather/type_location';
    public const WEATHER_ADDRESS = 'power_toys/weather/address_id';
    public const WEATHER_SKIN = 'power_toys/weather/skin';
    public const WEATHER_UNITS = 'power_toys/weather/units';

    /**
     * @param null $store
     * @return bool
     */
    public function isEnable($store = null)
    {
        return (int) $this->scopeConfig->getValue(
            self::WEATHER_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }
    /**
     * @param null $store
     * @return bool
     */
    public function getWeatherTypeLocation($store = null)
    {
        return (int) $this->scopeConfig->getValue(
            self::WEATHER_TYPE,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }
    /**
     * @param null $store
     * @return bool
     */
    public function getWeatherLocation($store = null)
    {
        if ($this->getWeatherTypeLocation() == Type::LOCATION_TYPE_DYNAMIC) {
            return '';
        } else {
            return $this->getWeatherAddress($store);
        }
    }
    /**
     * @param null $store
     * @return bool
     */
    public function getWeatherAddress($store = null)
    {
        return $this->scopeConfig->getValue(
            self::WEATHER_ADDRESS,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }
    /**
     * @param null $store
     * @return bool
     */
    public function getWeatherSkin($store = null)
    {
        return $this->scopeConfig->getValue(
            self::WEATHER_SKIN,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }
    /**
     * @param null $store
     * @return bool
     */
    public function getWeatherUnits($store = null)
    {
        return $this->scopeConfig->getValue(
            self::WEATHER_UNITS,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }
}