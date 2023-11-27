<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2023 JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace Jajuma\PotWeather\Model\Config\Source\Location;
/**
 * @api
 * @since 100.0.2
 */
class Type implements \Magento\Framework\Option\ArrayInterface
{
    public const LOCATION_TYPE_DYNAMIC = 1;
    public const LOCATION_TYPE_FIXED = 0;
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => self::LOCATION_TYPE_DYNAMIC, 'label' => __('Dynamic')], ['value' => self::LOCATION_TYPE_FIXED, 'label' => __('Fixed')]];
    }
    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [self::LOCATION_TYPE_FIXED => __('Fixed'), self::LOCATION_TYPE_DYNAMIC => __('Dynamic')];
    }
}