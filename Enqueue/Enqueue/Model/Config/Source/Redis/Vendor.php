<?php

namespace Enqueue\Enqueue\Model\Config\Source\Redis;

class Vendor
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'phpredis', 'label' => __('phpredis')],
            ['value' => 'predis', 'label' => __('predis')],
        ];
    }
}
