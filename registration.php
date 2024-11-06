<?php
/**
 * Serfe S.A.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Serfe license that is
 * available on the file COPYING.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Serfe
 * @package     Serfe_SmartRecaptchaLoader
 * @copyright   Copyright (c) Serfe S.A. (https://www.serfe.com/)
 */
use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Serfe_SmartRecaptchaLoader',
    __DIR__
);
