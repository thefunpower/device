<?php


use DeviceDetector\ClientHints;
use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\AbstractDeviceParser;

if(!function_exists('get_device_info')) {
    function get_device_info()
    {
        AbstractDeviceParser::setVersionTruncation(AbstractDeviceParser::VERSION_TRUNCATION_NONE);
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $clientHints = ClientHints::factory($_SERVER);
        $dd = new DeviceDetector($userAgent, $clientHints);
        $dd->parse();
        if ($dd->isBot()) {
            $botInfo = $dd->getBot();
        } else {
            $data['client'] = $client = $dd->getClient();
            $data['os'] = $os = $dd->getOs();
            $data['device'] = $device =  $dd->getDeviceName();
            $data['brand'] = $dd->getBrandName();
            $data['model'] = $dd->getModel();
            $data['key'] = $key = $os['name'] . $os['version'] . ' ' . $os['platform'] . ' ' . $client['name'];
            $data['uni'] = $key . ' ' . $device . ' ' . get_ip();
        }
        return $data;
    }
}
