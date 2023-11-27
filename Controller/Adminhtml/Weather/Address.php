<?php
 /**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2023 JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace Jajuma\PotWeather\Controller\Adminhtml\Weather;
 
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;
use Magento\Framework\HTTP\Client\Curl;

class Address extends \Magento\Backend\App\Action
{
    protected $_pageFactory;

    private $curl;
 
    public function __construct(
        Action\Context $context, 
        PageFactory $pageFactory,
        Curl $curl
    ) {
        $this->curl = $curl;
        parent::__construct($context);
    }
 
    public function execute()
    {
        $nameSearch = $this->getRequest()->getParam('name');
        if (!$nameSearch) return false;
        $url = 'https://weather-services.tomorrow.io/backend/v1/cities?name=' . rawurlencode($nameSearch);
        // define options
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        // apply those options
        $this->curl->setOptions($optArray);
        $this->curl->get($url);
        // execute request and get response
        $result = $this->curl->getBody();
        //$result = json_decode($result, true);
        return $this->getResponse()->setBody($result);
    }
}