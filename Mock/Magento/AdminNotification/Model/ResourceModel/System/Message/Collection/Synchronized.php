<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\AdminNotification\Model\ResourceModel\System\Message\Collection;

class Synchronized extends \Magento\AdminNotification\Model\ResourceModel\System\Message\Collection
{
    public function getUnread()
    {
        return [];
    }
}
