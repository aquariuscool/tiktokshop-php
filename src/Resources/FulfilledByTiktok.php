<?php
/*
 * This file is part of tiktok-shop.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\TiktokShop\Resources;

use EcomPHP\TiktokShop\Resource;
use GuzzleHttp\RequestOptions;

class FulfilledByTiktok extends Resource
{
    protected $category = 'fulfilled_by_tiktok';
    protected $minimum_version = 202408;

    public function getFbtMerchantOnboardedRegions()
    {
        $this->call('GET', 'merchants/onboarded_regions');
    }
}