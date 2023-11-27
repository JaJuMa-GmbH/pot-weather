<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2023 JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace Jajuma\PotWeather\Block\PowerToys;
use Jajuma\PowerToys\Block\PowerToys\Dashboard;
use Magento\Framework\View\Element\Template\Context;
use Jajuma\PotWeather\Helper\WeatherConfig;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Locale\Resolver;

class Weather extends Dashboard
{
    private $weatherConfig;

    private $storeManager;

    private $store;

    public function __construct(
        WeatherConfig $weatherConfig,
        StoreManagerInterface $storeManager,
        Resolver $store,
        Context $context,
        array $data = []
    ) {
        $this->weatherConfig = $weatherConfig;
        $this->storeManager = $storeManager;
        $this->store = $store;  
        parent::__construct($context, $data);
    }

    public function isEnable(): bool
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $this->weatherConfig->isEnable($storeId);
    }

    public function getWeatherTypeLocation()
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $this->weatherConfig->getWeatherTypeLocation($storeId);
    }
    public function getWeatherAddress()
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $this->weatherConfig->getWeatherAddress($storeId);
    }
    public function getWeatherSkin()
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $this->weatherConfig->getWeatherSkin($storeId);
    }
    public function getWeatherUnits()
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $this->weatherConfig->getWeatherUnits($storeId);
    }
    public function getWeatherLocation()
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $this->weatherConfig->getWeatherLocation($storeId);
    }

    public function getLocaleCode()
    {
        return $this->store->getLocale();
    }
}