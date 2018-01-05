<?php
/**
 * Created by PhpStorm.
 * User: lemax
 * Date: 03.04.17
 * Time: 5:16
 */

if (!is_null($block)):
    $cssGen = new \App\Utility\CssGenerator($block);
    echo $cssGen->getStyles();
else: ?>
.block-teasers-BLOCK-ID {width:100% !important;background-color: #ffffff !important;border-spacing: 0px 0px!important;border-style:solid !important;border-width:0px !important;border-color:#ffffff !important;border-collapse:separate!important;}.block-teasers-BLOCK-ID a { text-decoration:none !important; display:block !important; }.block-teasers-BLOCK-ID:hover {background-color: #ffffff !important;}.block-teasers-BLOCK-ID div {padding:0 !important;border:none !important;background:none !important;}.block-teasers-BLOCK-ID tr.block-first td {background-color: #dddddd !important;padding:0 !important;border:none !important;}.block-teasers-BLOCK-ID tr.block-first td a {display: table-cell;padding: 5px;background-color: #b44e55 !important;font-family: undefined !important;font-size: undefined px !important;font-weight: normal !important;font-style: normal !important;text-decoration: none !important;color: #ffffff !important;}.block-teasers-BLOCK-ID td .block-title .block-link {text-align:left !important;display: block !important;font-family: Arial !important;font-size: 15px !important;line-height: 15px !important;font-weight: normal !important;font-style: normal !important;text-decoration: none !important;padding-top: 10px !important;background: none!important;color: #109dc6 !important;}.block-teasers-BLOCK-ID td .block-title .block-link:hover {text-align:left !important;font-family: Arial !important;font-size: 15px !important;line-height: 15px !important;font-weight: normal !important;font-style: normal !important;background: none!important;text-decoration: none !important;color: #109dc6 !important;}.block-teasers-BLOCK-ID td:hover .block-title .block-link {text-align:left !important;font-family: Arial !important;font-size: 15px !important;line-height: 15px !important;font-weight: normal !important;font-style: normal !important;text-decoration: none !important;color: #109dc6 !important;}.block-teasers-BLOCK-ID td {background-color: #ffffff !important;border-style:solid !important;border-width:0px !important;border-color:#919191 !important;padding:10px !important;vertical-align:top !important;}.block-teasers-BLOCK-ID td:hover {background-color: #ffffff !important;}.block-teasers-BLOCK-ID td .block-img {width:auto !important;min-width:150px !important;text-align:left !important;height:150px !important;display: table-cell !important; vertical-align: top!important; margin-right:10px !important;}.block-teasers-BLOCK-ID td .block-img img {width: 150px !important;height: 150px !important;border-radius:0px !important;border-style:solid !important;border-width:0px !important;border-color:#919191 !important;}.block-teasers-BLOCK-ID td .block-img:hover  {width:150px !important;min-width:150px !important;height:150px !important;}.block-teasers-BLOCK-ID td:hover .block-img {width:auto !important;min-width:150px !important;height:150px !important;}.block-teasers-BLOCK-ID td:hover .block-img img {width:150px !important;height:150px  !important;border-radius:0px !important;border-style:solid !important;border-width:0px !important;border-color:#919191 !important;}.block-teasers-BLOCK-ID .block-wrapper  {display: table!important;width: 100%!important;overflow: hidden!important;border-spacing: 0px!important}.block-teasers-BLOCK-ID .block-img img:hover {width:150px !important;height:150px  !important;border-radius:0px !important;}.block-teasers-BLOCK-ID .block-title {text-align:left !important;font-family: Arial !important;font-size: 15px !important;font-weight: normal !important;font-style: normal !important;text-decoration: none !important;color: #323232 !important;min-width: 100%!important;line-height: 15px !important;display: table-cell !important; vertical-align:top !important; margin-right:10px !important; padding-left:10px !important; }.block-teasers-BLOCK-ID .block-title:hover {font-family: Arial !important;font-size: 15px !important;font-weight: normal !important;font-style: normal !important;text-decoration: none !important;color: #323232 !important;}.block-teasers-BLOCK-ID td:hover .block-title {font-family: Arial !important;font-size: 15px !important;font-weight: normal !important;font-style: normal !important;text-decoration: none !important;color: #323232 !important;}.block-teasers-BLOCK-ID td .block-title, .block-teasers-BLOCK-ID td .block-img, .block-teasers-BLOCK-ID td:hover .block-img, .block-teasers-BLOCK-ID td .block-img img, .block-teasers-BLOCK-ID td:hover .block-img img {-webkit-transition: all 0.3s linear!important; -moz-transition: all 0.3s linear!important; -o-transition: all 0.3s linear!important; transition: all 0.3s linear!important;}
<?php endif;
