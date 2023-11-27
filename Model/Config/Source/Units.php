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
class Units implements \Magento\Framework\Option\ArrayInterface
{
    public const WEATHER_METRIC = 'metric';
    public const WEATHER_IMPERIAL = 'imperial';
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => self::WEATHER_METRIC, 'label' => __('Metric C°')], ['value' => self::WEATHER_IMPERIAL, 'label' => __('Imperial F°')]];
    }
    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [self::WEATHER_METRIC => __('Metric C°'), self::WEATHER_IMPERIAL => __('Imperial F°')];
    }
}