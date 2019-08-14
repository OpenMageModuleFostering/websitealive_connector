<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the End User Software Agreement (EULA).
 * It is also available through the world-wide-web at this URL:
 * http://www.harapartners.com/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to eula@harapartners.com so we can send you a copy immediately.
 */

class WebsiteAlive_Connector_Model_Source_Server {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
        	array('value' => "", 'label'=>"-- Please Select --"),
            array('value' => "wsa3", 'label'=>"https://www.websitealive3.com"),
            array('value' => "a1", 'label'=>"https://a1.websitealive.com"),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
        	"" => "-- Please Select --",
            "wsa3" => "https://www.websitealive3.com",
            "a1" => "https://a1.websitealive.com",
        );
    }

}
