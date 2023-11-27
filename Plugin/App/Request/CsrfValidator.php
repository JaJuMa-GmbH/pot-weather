<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2023 JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace Jajuma\PotWeather\Plugin\App\Request;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\Request\CsrfValidator as MagentoCsrfValidator;

class CsrfValidator
{
    public function aroundValidate(
        MagentoCsrfValidator $subject,
        callable $proceed,
        RequestInterface $request,
        ActionInterface $action
    ) {
        if ($request->getUri()->getPath() != '/cdn-cgi/rum') {
            $proceed($request, $action);
        }
    }
}