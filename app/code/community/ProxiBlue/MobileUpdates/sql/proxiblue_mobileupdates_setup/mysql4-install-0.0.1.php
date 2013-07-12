<?php
$installer = $this;
$installer->startSetup();

$config = new Mage_Core_Model_Config();

/**
 * configuration settings
 */
$configArray = array(
    "design/package/ua_regexp" => 'a:0:{}',
    "design/theme/template_ua_regexp" => 'a:8:{s:18:"_1373444133830_830";a:2:{s:6:"regexp";s:4:"Silk";s:5:"value";s:7:"default";}s:18:"_1373444140765_765";a:2:{s:6:"regexp";s:6:"Kindle";s:5:"value";s:7:"default";}s:18:"_1373444151317_317";a:2:{s:6:"regexp";s:4:"Xoom";s:5:"value";s:7:"default";}s:18:"_1373444158789_789";a:2:{s:6:"regexp";s:8:"SCH-I800";s:5:"value";s:7:"default";}s:18:"_1373444170390_390";a:2:{s:6:"regexp";s:6:"Tablet";s:5:"value";s:7:"default";}s:18:"_1373444173174_174";a:2:{s:6:"regexp";s:5:"TF101";s:5:"value";s:7:"default";}s:18:"_1373446849536_536";a:2:{s:6:"regexp";s:5:"MZ604";s:5:"value";s:7:"default";}s:18:"_1373447225646_646";a:2:{s:6:"regexp";s:110:"(Android|iPhone|iPod|BlackBerry|Pre|Palm|Googlebot-Mobile|mobi|Safari Mobile|Windows Mobile|mobile|Opera Mini)";s:5:"value";s:6:"iphone";}}',
    "design/theme/skin_ua_regexp" => 'a:8:{s:18:"_1373444271536_536";a:2:{s:6:"regexp";s:4:"Silk";s:5:"value";s:7:"default";}s:18:"_1373444274847_847";a:2:{s:6:"regexp";s:6:"Kindle";s:5:"value";s:7:"default";}s:18:"_1373444279303_303";a:2:{s:6:"regexp";s:4:"Xoom";s:5:"value";s:7:"default";}s:18:"_1373444283311_311";a:2:{s:6:"regexp";s:8:"SCH-I800";s:5:"value";s:7:"default";}s:18:"_1373444287440_440";a:2:{s:6:"regexp";s:6:"Tablet";s:5:"value";s:7:"default";}s:18:"_1373444291591_591";a:2:{s:6:"regexp";s:5:"TF101";s:5:"value";s:7:"default";}s:18:"_1373446817839_839";a:2:{s:6:"regexp";s:5:"MZ604";s:5:"value";s:7:"default";}s:18:"_1373447246734_734";a:2:{s:6:"regexp";s:110:"(Android|iPhone|iPod|BlackBerry|Pre|Palm|Googlebot-Mobile|mobi|Safari Mobile|Windows Mobile|mobile|Opera Mini)";s:5:"value";s:6:"iphone";}}',
    "design/theme/layout_ua_regexp" => 'a:8:{s:18:"_1373444328624_624";a:2:{s:6:"regexp";s:4:"Silk";s:5:"value";s:7:"default";}s:18:"_1373444334264_264";a:2:{s:6:"regexp";s:6:"Kindle";s:5:"value";s:7:"default";}s:18:"_1373444341272_272";a:2:{s:6:"regexp";s:4:"Xoom";s:5:"value";s:7:"default";}s:18:"_1373444347376_376";a:2:{s:6:"regexp";s:8:"SCH-I800";s:5:"value";s:7:"default";}s:18:"_1373444355756_756";a:2:{s:6:"regexp";s:6:"Tablet";s:5:"value";s:7:"default";}s:18:"_1373444363137_137";a:2:{s:6:"regexp";s:5:"TF101";s:5:"value";s:7:"default";}s:18:"_1373446814359_359";a:2:{s:6:"regexp";s:5:"MZ604";s:5:"value";s:7:"default";}s:18:"_1373447249810_810";a:2:{s:6:"regexp";s:110:"(Android|iPhone|iPod|BlackBerry|Pre|Palm|Googlebot-Mobile|mobi|Safari Mobile|Windows Mobile|mobile|Opera Mini)";s:5:"value";s:6:"iphone";}}',
    "design/theme/default_ua_regexp" => 'a:8:{s:18:"_1373444329425_425";a:2:{s:6:"regexp";s:4:"Silk";s:5:"value";s:7:"default";}s:18:"_1373444334920_920";a:2:{s:6:"regexp";s:6:"Kindle";s:5:"value";s:7:"default";}s:18:"_1373444340392_392";a:2:{s:6:"regexp";s:4:"Xoom";s:5:"value";s:7:"default";}s:18:"_1373444346680_680";a:2:{s:6:"regexp";s:8:"SCH-I800";s:5:"value";s:7:"default";}s:17:"_1373444358048_48";a:2:{s:6:"regexp";s:6:"Tablet";s:5:"value";s:7:"default";}s:18:"_1373444365409_409";a:2:{s:6:"regexp";s:5:"TF101";s:5:"value";s:7:"default";}s:18:"_1373446810975_975";a:2:{s:6:"regexp";s:5:"MZ604";s:5:"value";s:7:"default";}s:18:"_1373447252330_330";a:2:{s:6:"regexp";s:110:"(Android|iPhone|iPod|BlackBerry|Pre|Palm|Googlebot-Mobile|mobi|Safari Mobile|Windows Mobile|mobile|Opera Mini)";s:5:"value";s:6:"iphone";}}',
);

foreach ($configArray as $key => $value) {
    $config->saveConfig($key, $value);
}

$installer->endSetup();
