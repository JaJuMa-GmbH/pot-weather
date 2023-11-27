<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2023 JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace Jajuma\PotWeather\Model\Config\Source;
/**
 * @api
 * @since 100.0.2
 */
class Skin implements \Magento\Framework\Option\ArrayInterface
{
    public const WEATHER_SKIN_LIGHT = 'light';
    public const WEATHER_SKIN_DARK = 'dark';
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => self::WEATHER_SKIN_LIGHT, 'label' => __('Light')], ['value' => self::WEATHER_SKIN_DARK, 'label' => __('Dark')]];
    }
    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [self::WEATHER_SKIN_LIGHT => __('Light'), self::WEATHER_SKIN_DARK => __('Dark')];
    }
}