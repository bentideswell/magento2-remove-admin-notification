<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\AdminNotification\Model;

class Inbox
{
    /**
     *
     */
    public function getSeverities($severity = null)
    {
        return [];
    }

    /**
     *
     */
    public function loadLatestNotice()
    {
        return $this;
    }

    /**
     *
     */
    public function getNoticeStatus()
    {
        return '';
    }

    /**
     *
     */
    public function parse(array $data)
    {
        return $this;
    }

    /**
     *
     */
    public function add($severity, $title, $description, $url = '', $isInternal = true)
    {
        return $this;
    }

    /**
     *
     */
    public function addCritical($title, $description, $url = '', $isInternal = true)
    {
        return $this;
    }

    /**
     *
     */
    public function addMajor($title, $description, $url = '', $isInternal = true)
    {
        return $this;
    }

    /**
     *
     */
    public function addMinor($title, $description, $url = '', $isInternal = true)
    {
        return $this;
    }

    /**
     *
     */
    public function addNotice($title, $description, $url = '', $isInternal = true)
    {
        return $this;
    }
}
