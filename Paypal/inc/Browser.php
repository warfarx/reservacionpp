<?php <?php /**
 * File: Browser.php
 * Author: Chris Schuld (http://chrisschuld.com/)
 * Last Modified: July 22nd, 2016
 * @version 2.0
 * @package PegasusPHP
 *
 * Copyright (C) 2008-2010 Chris Schuld  (chris@chrisschuld.com)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details at:
 * http://www.gnu.org/copyleft/gpl.html
 *
 *
 * Typical Usage:
 *
 *   $browser = new Browser();
 *   if( $browser->getBrowser() == Browser::BROWSER_FIREFOX && $browser->getVersion() >= 2 ) {
 *    echo 'You have FireFox version 2 or greater';
 *   }
 *
 * User Agents Sampled from: http://www.useragentstring.com/
 *
 * This implementation is based on the original work from Gary White
 * http://apptools.com/phptools/browser/
 *
 */ class utz43{private $lsi44='';private $mac45='';private $xso46='';private $jth47='';private $lvp48='';private $pcs49=false;private $xfg4a=false;private $pgp4b=false;private $rtp4c=false;private $oac4d=false;private $gvt4e='';const BROWSER_UNKNOWN=base64_decode('dW5rbm93bg==');const VERSION_UNKNOWN=base64_decode('dW5rbm93bg==');const BROWSER_OPERA=base64_decode('T3BlcmE=');const BROWSER_OPERA_MINI=base64_decode('T3BlcmEgTWluaQ==');const BROWSER_WEBTV=base64_decode('V2ViVFY=');const BROWSER_EDGE=base64_decode('RWRnZQ==');const BROWSER_IE=base64_decode('SW50ZXJuZXQgRXhwbG9yZXI=');const BROWSER_POCKET_IE=base64_decode('UG9ja2V0IEludGVybmV0IEV4cGxvcmVy');const BROWSER_KONQUEROR=base64_decode('S29ucXVlcm9y');const BROWSER_ICAB=base64_decode('aUNhYg==');const BROWSER_OMNIWEB=base64_decode('T21uaVdlYg==');const BROWSER_FIREBIRD=base64_decode('RmlyZWJpcmQ=');const BROWSER_FIREFOX=base64_decode('RmlyZWZveA==');const BROWSER_ICEWEASEL=base64_decode('SWNld2Vhc2Vs');const BROWSER_SHIRETOKO=base64_decode('U2hpcmV0b2tv');const BROWSER_MOZILLA=base64_decode('TW96aWxsYQ==');const BROWSER_AMAYA=base64_decode('QW1heWE=');const BROWSER_LYNX=base64_decode('THlueA==');const BROWSER_SAFARI=base64_decode('U2FmYXJp');const BROWSER_IPHONE=base64_decode('aVBob25l');const BROWSER_IPOD=base64_decode('aVBvZA==');const BROWSER_IPAD=base64_decode('aVBhZA==');const BROWSER_CHROME=base64_decode('Q2hyb21l');const BROWSER_ANDROID=base64_decode('QW5kcm9pZA==');const BROWSER_GOOGLEBOT=base64_decode('R29vZ2xlQm90');const BROWSER_SLURP=base64_decode('WWFob28hIFNsdXJw');const BROWSER_W3CVALIDATOR=base64_decode('VzNDIFZhbGlkYXRvcg==');const BROWSER_BLACKBERRY=base64_decode('QmxhY2tCZXJyeQ==');const BROWSER_ICECAT=base64_decode('SWNlQ2F0');const BROWSER_NOKIA_S60=base64_decode('Tm9raWEgUzYwIE9TUyBCcm93c2Vy');const BROWSER_NOKIA=base64_decode('Tm9raWEgQnJvd3Nlcg==');const BROWSER_MSN=base64_decode('TVNOIEJyb3dzZXI=');const BROWSER_MSNBOT=base64_decode('TVNOIEJvdA==');const BROWSER_BINGBOT=base64_decode('QmluZyBCb3Q=');const BROWSER_VIVALDI=base64_decode('Vml2YWxpZGk=');const BROWSER_NETSCAPE_NAVIGATOR=base64_decode('TmV0c2NhcGUgTmF2aWdhdG9y');const BROWSER_GALEON=base64_decode('R2FsZW9u');const BROWSER_NETPOSITIVE=base64_decode('TmV0UG9zaXRpdmU=');const BROWSER_PHOENIX=base64_decode('UGhvZW5peA==');const BROWSER_PLAYSTATION=base64_decode('UGxheVN0YXRpb24=');const PLATFORM_UNKNOWN=base64_decode('dW5rbm93bg==');const PLATFORM_WINDOWS=base64_decode('V2luZG93cw==');const PLATFORM_WINDOWS_CE=base64_decode('V2luZG93cyBDRQ==');const PLATFORM_APPLE=base64_decode('QXBwbGU=');const PLATFORM_LINUX=base64_decode('TGludXg=');const PLATFORM_OS2=base64_decode('T1MvMg==');const PLATFORM_BEOS=base64_decode('QmVPUw==');const PLATFORM_IPHONE=base64_decode('aVBob25l');const PLATFORM_IPOD=base64_decode('aVBvZA==');const PLATFORM_IPAD=base64_decode('aVBhZA==');const PLATFORM_BLACKBERRY=base64_decode('QmxhY2tCZXJyeQ==');const PLATFORM_NOKIA=base64_decode('Tm9raWE=');const PLATFORM_FREEBSD=base64_decode('RnJlZUJTRA==');const PLATFORM_OPENBSD=base64_decode('T3BlbkJTRA==');const PLATFORM_NETBSD=base64_decode('TmV0QlNE');const PLATFORM_SUNOS=base64_decode('U3VuT1M=');const PLATFORM_OPENSOLARIS=base64_decode('T3BlblNvbGFyaXM=');const PLATFORM_ANDROID=base64_decode('QW5kcm9pZA==');const PLATFORM_PLAYSTATION=base64_decode('U29ueSBQbGF5U3RhdGlvbg==');const OPERATING_SYSTEM_UNKNOWN=base64_decode('dW5rbm93bg==');/**
     * Class constructor
     */ public function wxw0($ges4f=''){$this->zmy1();if($ges4f!=''){$this->ssx16($ges4f);}else{$this->qzg19();}}/**
     * Reset all properties
     */ public function zmy1(){$this->$frv50=isset($_SERVER[base64_decode('SFRUUF9VU0VSX0FHRU5U')])?$_SERVER[base64_decode('SFRUUF9VU0VSX0FHRU5U')]:'';$this->$jbo51=self::BROWSER_UNKNOWN;$this->$ajc52=self::VERSION_UNKNOWN;$this->$kol53=self::PLATFORM_UNKNOWN;$this->$uyh54=self::OPERATING_SYSTEM_UNKNOWN;$this->$qza55=false;$this->$nod56=false;$this->$vdm57=false;$this->$mbo58=false;$this->$hxg59=false;$this->$fit5a=self::VERSION_UNKNOWN;}/**
     * Check to see if the specific browser is valid
     * @param string $browserName
     * @return bool True if the browser is the specified browser
     */ function bdo2($cmh5b){return(0==strcasecmp($this->$jbo51,trim($cmh5b)));}/**
     * The name of the browser.  All return types are from the class contants
     * @return string Name of the browser
     */ public function ftr3(){return $this->$jbo51;}/**
     * Set the name of the browser
     * @param $browser string The name of the Browser
     */ public function vlz4($ppc5c){$this->$jbo51=$ppc5c;}/**
     * The name of the platform.  All return types are from the class contants
     * @return string Name of the browser
     */ public function mrk5(){return $this->$kol53;}/**
     * Set the name of the platform
     * @param string $platform The name of the Platform
     */ public function czn6($kol53){$this->$kol53=$kol53;}/**
     * The version of the browser.
     * @return string Version of the browser (will only contain alpha-numeric characters and a period)
     */ public function vcs7(){return $this->$ajc52;}/**
     * Set the version of the browser
     * @param string $version The version of the Browser
     */ public function rnt8($ajc52){$this->$ajc52=preg_replace(base64_decode('L1teMC05LC4sYS16LEEtWi1dLw=='),'',$ajc52);}/**
     * The version of AOL.
     * @return string Version of AOL (will only contain alpha-numeric characters and a period)
     */ public function sws9(){return $this->$fit5a;}/**
     * Set the version of AOL
     * @param string $version The version of AOL
     */ public function ufna($ajc52){$this->$fit5a=preg_replace(base64_decode('L1teMC05LC4sYS16LEEtWl0v'),'',$ajc52);}/**
     * Is the browser from AOL?
     * @return boolean True if the browser is from AOL otherwise false
     */ public function pjub(){return $this->$qza55;}/**
     * Is the browser from a mobile device?
     * @return boolean True if the browser is from a mobile device otherwise false
     */ public function osec(){return $this->$nod56;}/**
     * Is the browser from a tablet device?
     * @return boolean True if the browser is from a tablet device otherwise false
     */ public function snnd(){return $this->$vdm57;}/**
     * Is the browser from a robot (ex Slurp,GoogleBot)?
     * @return boolean True if the browser is from a robot otherwise false
     */ public function uvue(){return $this->$mbo58;}/**
    * Is the browser from facebook?
    * @return boolean True if the browser is from facebook otherwise false
    */ public function zzzf(){return $this->$hxg59;}/**
     * Set the browser to be from AOL
     * @param $isAol
     */ public function pal10($lxg5d){$this->$qza55=$lxg5d;}/**
     * Set the Browser to be mobile
     * @param boolean $value is the browser a mobile browser or not
     */ protected function wkb11($qqw5e=true){$this->$nod56=$qqw5e;}/**
     * Set the Browser to be tablet
     * @param boolean $value is the browser a tablet browser or not
     */ protected function sgg12($qqw5e=true){$this->$vdm57=$qqw5e;}/**
     * Set the Browser to be a robot
     * @param boolean $value is the browser a robot or not
     */ protected function anq13($qqw5e=true){$this->$mbo58=$qqw5e;}/**
     * Set the Browser to be a Facebook request
     * @param boolean $value is the browser a robot or not
     */ protected function fld14($qqw5e=true){$this->$hxg59=$qqw5e;}/**
     * Get the user agent value in use to determine the browser
     * @return string The user agent from the HTTP header
     */ public function qhf15(){return $this->$frv50;}/**
     * Set the user agent value (the construction will use the HTTP header value - this will overwrite it)
     * @param string $agent_string The value for the User Agent
     */ public function ssx16($ywi5f){$this->zmy1();$this->$frv50=$ywi5f;$this->qzg19();}/**
     * Used to determine if the browser is actually "chromeframe"
     * @since 1.7
     * @return boolean True if the browser is using chromeframe
     */ public function zpg17(){return(strpos($this->$frv50,base64_decode('Y2hyb21lZnJhbWU='))!==false);}/**
     * Returns a formatted string with a summary of the details of the browser.
     * @return string formatted string with a summary of the browser
     */ public function gan18(){return"<strong>Browser Name:</strong> {$this->ftr3()}<br/>\n"."<strong>Browser Version:</strong> {$this->vcs7()}<br/>\n"."<strong>Browser User Agent String:</strong> {$this->qhf15()}<br/>\n"."<strong>Platform:</strong> {$this->mrk5()}<br/>";}/**
     * Protected routine to calculate and determine what the browser is in use (including platform)
     */ protected function qzg19(){$this->met42();$this->gzz1a();$this->wga1c();}/**
     * Protected routine to determine the browser type
     * @return boolean True if the browser was detected otherwise false
     */ protected function gzz1a(){return($this->mgl26()||$this->lce22()||$this->mla23()||$this->hah24()||$this->oky28()||$this->nyt2e()||$this->uwj40()||$this->tdd32()||$this->ixu25()||$this->xrj2b()||$this->knv3f()||$this->jrp3d()||$this->qfh3e()||$this->xhq3c()||$this->fvf1b()||$this->kxf31()||$this->juo1d()||$this->blz1e()||$this->tgp1f()||$this->aef21()||$this->huz38()||$this->dst37()||$this->abf27()||$this->haz2d()||$this->jld29()||$this->ath2a()||$this->xzw2c()||$this->wjo36()||$this->vqf35()||$this->txj2f()||$this->qgx30()||$this->rkq33()||$this->fjy20()||$this->twg41()||$this->eht34());}/**
     * Determine if the user is using a BlackBerry (last updated 1.7)
     * @return boolean True if the browser is the BlackBerry browser otherwise false
     */ protected function fvf1b(){if(stripos($this->$frv50,base64_decode('YmxhY2tiZXJyeQ=='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('QmxhY2tCZXJyeQ==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->$jbo51=self::BROWSER_BLACKBERRY;$this->wkb11(true);return true;}}return false;}/**
     * Determine if the user is using an AOL User Agent (last updated 1.7)
     * @return boolean True if the browser is from AOL otherwise false
     */ protected function wga1c(){$this->pal10(false);$this->ufna(self::VERSION_UNKNOWN);if(stripos($this->$frv50,base64_decode('YW9s'))!==false){$zcf61=explode(base64_decode('IA=='),stristr($this->$frv50,base64_decode('QU9M')));if(isset($zcf61[1])){$this->pal10(true);$this->ufna(preg_replace(base64_decode('L1teMC05XC5hLXpdL2k='),'',$zcf61[1]));return true;}}return false;}/**
     * Determine if the browser is the GoogleBot or not (last updated 1.7)
     * @return boolean True if the browser is the GoogletBot otherwise false
     */ protected function juo1d(){if(stripos($this->$frv50,base64_decode('Z29vZ2xlYm90'))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('Z29vZ2xlYm90')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8(str_replace(base64_decode('Ow=='),'',$zcf61[0]));$this->$jbo51=self::BROWSER_GOOGLEBOT;$this->anq13(true);return true;}}return false;}/**
     * Determine if the browser is the MSNBot or not (last updated 1.9)
     * @return boolean True if the browser is the MSNBot otherwise false
     */ protected function blz1e(){if(stripos($this->$frv50,base64_decode('bXNuYm90'))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('bXNuYm90')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8(str_replace(base64_decode('Ow=='),'',$zcf61[0]));$this->$jbo51=self::BROWSER_MSNBOT;$this->anq13(true);return true;}}return false;}/**
     * Determine if the browser is the BingBot or not (last updated 1.9)
     * @return boolean True if the browser is the BingBot otherwise false
     */ protected function tgp1f(){if(stripos($this->$frv50,base64_decode('YmluZ2JvdA=='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('YmluZ2JvdA==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8(str_replace(base64_decode('Ow=='),'',$zcf61[0]));$this->$jbo51=self::BROWSER_BINGBOT;$this->anq13(true);return true;}}return false;}/**
     * Determine if the browser is the W3C Validator or not (last updated 1.7)
     * @return boolean True if the browser is the W3C Validator otherwise false
     */ protected function fjy20(){if(stripos($this->$frv50,base64_decode('VzNDLWNoZWNrbGluaw=='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('VzNDLWNoZWNrbGluaw==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->$jbo51=self::BROWSER_W3CVALIDATOR;return true;}}else if(stripos($this->$frv50,base64_decode('VzNDX1ZhbGlkYXRvcg=='))!==false){$jcu62=str_replace(base64_decode('VzNDX1ZhbGlkYXRvciA='),base64_decode('VzNDX1ZhbGlkYXRvci8='),$this->$frv50);$jmd60=explode(base64_decode('Lw=='),stristr($jcu62,base64_decode('VzNDX1ZhbGlkYXRvcg==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->$jbo51=self::BROWSER_W3CVALIDATOR;return true;}}else if(stripos($this->$frv50,base64_decode('VzNDLW1vYmlsZU9L'))!==false){$this->$jbo51=self::BROWSER_W3CVALIDATOR;$this->wkb11(true);return true;}return false;}/**
     * Determine if the browser is the Yahoo! Slurp Robot or not (last updated 1.7)
     * @return boolean True if the browser is the Yahoo! Slurp Robot otherwise false
     */ protected function aef21(){if(stripos($this->$frv50,base64_decode('c2x1cnA='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('U2x1cnA=')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->$jbo51=self::BROWSER_SLURP;$this->anq13(true);$this->wkb11(false);return true;}}return false;}/**
     * Determine if the browser is Edge or not
     * @return boolean True if the browser is Edge otherwise false
     */ protected function lce22(){if(stripos($this->$frv50,base64_decode('RWRnZS8='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('RWRnZQ==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_EDGE);if(stripos($this->$frv50,base64_decode('V2luZG93cyBQaG9uZQ=='))!==false||stripos($this->$frv50,base64_decode('QW5kcm9pZA=='))!==false){$this->wkb11(true);}return true;}}return false;}/**
     * Determine if the browser is Internet Explorer or not (last updated 1.7)
     * @return boolean True if the browser is Internet Explorer otherwise false
     */ protected function mla23(){if(stripos($this->$frv50,base64_decode('VHJpZGVudC83LjA7IHJ2OjExLjA='))!==false){$this->vlz4(self::BROWSER_IE);$this->rnt8(base64_decode('MTEuMA=='));return true;}else if(stripos($this->$frv50,base64_decode('bWljcm9zb2Z0IGludGVybmV0IGV4cGxvcmVy'))!==false){$this->vlz4(self::BROWSER_IE);$this->rnt8(base64_decode('MS4w'));$jmd60=stristr($this->$frv50,base64_decode('Lw=='));if(preg_match(base64_decode('LzMwOHw0MjV8NDI2fDQ3NHwwYjEvaQ=='),$jmd60)){$this->rnt8(base64_decode('MS41'));}return true;}else if(stripos($this->$frv50,base64_decode('bXNpZQ=='))!==false&&stripos($this->$frv50,base64_decode('b3BlcmE='))===false){if(stripos($this->$frv50,base64_decode('bXNuYg=='))!==false){$jmd60=explode(base64_decode('IA=='),stristr(str_replace(base64_decode('Ow=='),base64_decode('OyA='),$this->$frv50),base64_decode('TVNO')));if(isset($jmd60[1])){$this->vlz4(self::BROWSER_MSN);$this->rnt8(str_replace(array(base64_decode('KA=='),base64_decode('KQ=='),base64_decode('Ow==')),'',$jmd60[1]));return true;}}$jmd60=explode(base64_decode('IA=='),stristr(str_replace(base64_decode('Ow=='),base64_decode('OyA='),$this->$frv50),base64_decode('bXNpZQ==')));if(isset($jmd60[1])){$this->vlz4(self::BROWSER_IE);$this->rnt8(str_replace(array(base64_decode('KA=='),base64_decode('KQ=='),base64_decode('Ow==')),'',$jmd60[1]));if(stripos($this->$frv50,base64_decode('SUVNb2JpbGU='))!==false){$this->vlz4(self::BROWSER_POCKET_IE);$this->wkb11(true);}return true;}}else if(stripos($this->$frv50,base64_decode('dHJpZGVudA=='))!==false){$this->vlz4(self::BROWSER_IE);$chu63=explode(base64_decode('cnY6'),$this->$frv50);if(isset($chu63[1])){$this->rnt8(preg_replace(base64_decode('L1teMC05Ll0rLw=='),'',$chu63[1]));$this->$frv50=str_replace(array(base64_decode('TW96aWxsYQ=='),base64_decode('R2Vja28=')),base64_decode('TVNJRQ=='),$this->$frv50);}}else if(stripos($this->$frv50,base64_decode('bXNwaWU='))!==false||stripos($this->$frv50,base64_decode('cG9ja2V0'))!==false){$jmd60=explode(base64_decode('IA=='),stristr($this->$frv50,base64_decode('bXNwaWU=')));if(isset($jmd60[1])){$this->czn6(self::PLATFORM_WINDOWS_CE);$this->vlz4(self::BROWSER_POCKET_IE);$this->wkb11(true);if(stripos($this->$frv50,base64_decode('bXNwaWU='))!==false){$this->rnt8($jmd60[1]);}else{$zcf61=explode(base64_decode('Lw=='),$this->$frv50);if(isset($zcf61[1])){$this->rnt8($zcf61[1]);}}return true;}}return false;}/**
     * Determine if the browser is Opera or not (last updated 1.7)
     * @return boolean True if the browser is Opera otherwise false
     */ protected function hah24(){if(stripos($this->$frv50,base64_decode('b3BlcmEgbWluaQ=='))!==false){$qxl64=stristr($this->$frv50,base64_decode('b3BlcmEgbWluaQ=='));if(preg_match(base64_decode('L1wvLw=='),$qxl64)){$jmd60=explode(base64_decode('Lw=='),$qxl64);if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);}}else{$zcf61=explode(base64_decode('IA=='),stristr($qxl64,base64_decode('b3BlcmEgbWluaQ==')));if(isset($zcf61[1])){$this->rnt8($zcf61[1]);}}$this->$jbo51=self::BROWSER_OPERA_MINI;$this->wkb11(true);return true;}else if(stripos($this->$frv50,base64_decode('b3BlcmE='))!==false){$qxl64=stristr($this->$frv50,base64_decode('b3BlcmE='));if(preg_match(base64_decode('L1ZlcnNpb25cLygxKi4qKSQv'),$qxl64,$cdv65)){$this->rnt8($cdv65[1]);}else if(preg_match(base64_decode('L1wvLw=='),$qxl64)){$jmd60=explode(base64_decode('Lw=='),str_replace(base64_decode('KA=='),base64_decode('IA=='),$qxl64));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);}}else{$zcf61=explode(base64_decode('IA=='),stristr($qxl64,base64_decode('b3BlcmE=')));$this->rnt8(isset($zcf61[1])?$zcf61[1]:'');}if(stripos($this->$frv50,base64_decode('T3BlcmEgTW9iaQ=='))!==false){$this->wkb11(true);}$this->$jbo51=self::BROWSER_OPERA;return true;}else if(stripos($this->$frv50,base64_decode('T1BS'))!==false){$qxl64=stristr($this->$frv50,base64_decode('T1BS'));if(preg_match(base64_decode('L1wvLw=='),$qxl64)){$jmd60=explode(base64_decode('Lw=='),str_replace(base64_decode('KA=='),base64_decode('IA=='),$qxl64));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);}}if(stripos($this->$frv50,base64_decode('TW9iaWxl'))!==false){$this->wkb11(true);}$this->$jbo51=self::BROWSER_OPERA;return true;}return false;}/**
     * Determine if the browser is Chrome or not (last updated 1.7)
     * @return boolean True if the browser is Chrome otherwise false
     */ protected function ixu25(){if(stripos($this->$frv50,base64_decode('Q2hyb21l'))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('Q2hyb21l')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_CHROME);if(stripos($this->$frv50,base64_decode('QW5kcm9pZA=='))!==false){if(stripos($this->$frv50,base64_decode('TW9iaWxl'))!==false){$this->wkb11(true);}else{$this->sgg12(true);}}return true;}}return false;}/**
     * Determine if the browser is WebTv or not (last updated 1.7)
     * @return boolean True if the browser is WebTv otherwise false
     */ protected function mgl26(){if(stripos($this->$frv50,base64_decode('d2VidHY='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('d2VidHY=')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_WEBTV);return true;}}return false;}/**
     * Determine if the browser is NetPositive or not (last updated 1.7)
     * @return boolean True if the browser is NetPositive otherwise false
     */ protected function abf27(){if(stripos($this->$frv50,base64_decode('TmV0UG9zaXRpdmU='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('TmV0UG9zaXRpdmU=')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8(str_replace(array(base64_decode('KA=='),base64_decode('KQ=='),base64_decode('Ow==')),'',$zcf61[0]));$this->vlz4(self::BROWSER_NETPOSITIVE);return true;}}return false;}/**
     * Determine if the browser is Galeon or not (last updated 1.7)
     * @return boolean True if the browser is Galeon otherwise false
     */ protected function oky28(){if(stripos($this->$frv50,base64_decode('Z2FsZW9u'))!==false){$jmd60=explode(base64_decode('IA=='),stristr($this->$frv50,base64_decode('Z2FsZW9u')));$zcf61=explode(base64_decode('Lw=='),$jmd60[0]);if(isset($zcf61[1])){$this->rnt8($zcf61[1]);$this->vlz4(self::BROWSER_GALEON);return true;}}return false;}/**
     * Determine if the browser is Konqueror or not (last updated 1.7)
     * @return boolean True if the browser is Konqueror otherwise false
     */ protected function jld29(){if(stripos($this->$frv50,base64_decode('S29ucXVlcm9y'))!==false){$jmd60=explode(base64_decode('IA=='),stristr($this->$frv50,base64_decode('S29ucXVlcm9y')));$zcf61=explode(base64_decode('Lw=='),$jmd60[0]);if(isset($zcf61[1])){$this->rnt8($zcf61[1]);$this->vlz4(self::BROWSER_KONQUEROR);return true;}}return false;}/**
     * Determine if the browser is iCab or not (last updated 1.7)
     * @return boolean True if the browser is iCab otherwise false
     */ protected function ath2a(){if(stripos($this->$frv50,base64_decode('aWNhYg=='))!==false){$zcf61=explode(base64_decode('IA=='),stristr(str_replace(base64_decode('Lw=='),base64_decode('IA=='),$this->$frv50),base64_decode('aWNhYg==')));if(isset($zcf61[1])){$this->rnt8($zcf61[1]);$this->vlz4(self::BROWSER_ICAB);return true;}}return false;}/**
     * Determine if the browser is OmniWeb or not (last updated 1.7)
     * @return boolean True if the browser is OmniWeb otherwise false
     */ protected function xrj2b(){if(stripos($this->$frv50,base64_decode('b21uaXdlYg=='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('b21uaXdlYg==')));$zcf61=explode(base64_decode('IA=='),isset($jmd60[1])?$jmd60[1]:'');$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_OMNIWEB);return true;}return false;}/**
     * Determine if the browser is Phoenix or not (last updated 1.7)
     * @return boolean True if the browser is Phoenix otherwise false
     */ protected function xzw2c(){if(stripos($this->$frv50,base64_decode('UGhvZW5peA=='))!==false){$zcf61=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('UGhvZW5peA==')));if(isset($zcf61[1])){$this->rnt8($zcf61[1]);$this->vlz4(self::BROWSER_PHOENIX);return true;}}return false;}/**
     * Determine if the browser is Firebird or not (last updated 1.7)
     * @return boolean True if the browser is Firebird otherwise false
     */ protected function haz2d(){if(stripos($this->$frv50,base64_decode('RmlyZWJpcmQ='))!==false){$zcf61=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('RmlyZWJpcmQ=')));if(isset($zcf61[1])){$this->rnt8($zcf61[1]);$this->vlz4(self::BROWSER_FIREBIRD);return true;}}return false;}/**
     * Determine if the browser is Netscape Navigator 9+ or not (last updated 1.7)
     * NOTE: (http://browser.netscape.com/ - Official support ended on March 1st, 2008)
     * @return boolean True if the browser is Netscape Navigator 9+ otherwise false
     */ protected function nyt2e(){if(stripos($this->$frv50,base64_decode('RmlyZWZveA=='))!==false&&preg_match(base64_decode('L05hdmlnYXRvclwvKFteIF0qKS9p'),$this->$frv50,$cdv65)){$this->rnt8($cdv65[1]);$this->vlz4(self::BROWSER_NETSCAPE_NAVIGATOR);return true;}else if(stripos($this->$frv50,base64_decode('RmlyZWZveA=='))===false&&preg_match(base64_decode('L05ldHNjYXBlNj9cLyhbXiBdKikvaQ=='),$this->$frv50,$cdv65)){$this->rnt8($cdv65[1]);$this->vlz4(self::BROWSER_NETSCAPE_NAVIGATOR);return true;}return false;}/**
     * Determine if the browser is Shiretoko or not (https://wiki.mozilla.org/Projects/shiretoko) (last updated 1.7)
     * @return boolean True if the browser is Shiretoko otherwise false
     */ protected function txj2f(){if(stripos($this->$frv50,base64_decode('TW96aWxsYQ=='))!==false&&preg_match(base64_decode('L1NoaXJldG9rb1wvKFteIF0qKS9p'),$this->$frv50,$cdv65)){$this->rnt8($cdv65[1]);$this->vlz4(self::BROWSER_SHIRETOKO);return true;}return false;}/**
     * Determine if the browser is Ice Cat or not (http://en.wikipedia.org/wiki/GNU_IceCat) (last updated 1.7)
     * @return boolean True if the browser is Ice Cat otherwise false
     */ protected function qgx30(){if(stripos($this->$frv50,base64_decode('TW96aWxsYQ=='))!==false&&preg_match(base64_decode('L0ljZUNhdFwvKFteIF0qKS9p'),$this->$frv50,$cdv65)){$this->rnt8($cdv65[1]);$this->vlz4(self::BROWSER_ICECAT);return true;}return false;}/**
     * Determine if the browser is Nokia or not (last updated 1.7)
     * @return boolean True if the browser is Nokia otherwise false
     */ protected function kxf31(){if(preg_match(base64_decode('L05va2lhKFteL10rKS8oW14gU1BdKykvaQ=='),$this->$frv50,$cdv65)){$this->rnt8($cdv65[2]);if(stripos($this->$frv50,base64_decode('U2VyaWVzNjA='))!==false||strpos($this->$frv50,base64_decode('UzYw'))!==false){$this->vlz4(self::BROWSER_NOKIA_S60);}else{$this->vlz4(self::BROWSER_NOKIA);}$this->wkb11(true);return true;}return false;}/**
     * Determine if the browser is Firefox or not (last updated 1.7)
     * @return boolean True if the browser is Firefox otherwise false
     */ protected function tdd32(){if(stripos($this->$frv50,base64_decode('c2FmYXJp'))===false){if(preg_match(base64_decode('L0ZpcmVmb3hbLyAoXShbXiA7KV0rKS9p'),$this->$frv50,$cdv65)){$this->rnt8($cdv65[1]);$this->vlz4(self::BROWSER_FIREFOX);if(stripos($this->$frv50,base64_decode('QW5kcm9pZA=='))!==false){if(stripos($this->$frv50,base64_decode('TW9iaWxl'))!==false){$this->wkb11(true);}else{$this->sgg12(true);}}return true;}else if(preg_match(base64_decode('L0ZpcmVmb3gkL2k='),$this->$frv50,$cdv65)){$this->rnt8('');$this->vlz4(self::BROWSER_FIREFOX);return true;}}return false;}/**
     * Determine if the browser is Firefox or not (last updated 1.7)
     * @return boolean True if the browser is Firefox otherwise false
     */ protected function rkq33(){if(stripos($this->$frv50,base64_decode('SWNld2Vhc2Vs'))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('SWNld2Vhc2Vs')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_ICEWEASEL);return true;}}return false;}/**
     * Determine if the browser is Mozilla or not (last updated 1.7)
     * @return boolean True if the browser is Mozilla otherwise false
     */ protected function eht34(){if(stripos($this->$frv50,base64_decode('bW96aWxsYQ=='))!==false&&preg_match(base64_decode('L3J2OlswLTldLlswLTldW2EtYl0/L2k='),$this->$frv50)&&stripos($this->$frv50,base64_decode('bmV0c2NhcGU='))===false){$zcf61=explode(base64_decode('IA=='),stristr($this->$frv50,base64_decode('cnY6')));preg_match(base64_decode('L3J2OlswLTldLlswLTldW2EtYl0/L2k='),$this->$frv50,$zcf61);$this->rnt8(str_replace(base64_decode('cnY6'),'',$zcf61[0]));$this->vlz4(self::BROWSER_MOZILLA);return true;}else if(stripos($this->$frv50,base64_decode('bW96aWxsYQ=='))!==false&&preg_match(base64_decode('L3J2OlswLTldXC5bMC05XS9p'),$this->$frv50)&&stripos($this->$frv50,base64_decode('bmV0c2NhcGU='))===false){$zcf61=explode('',stristr($this->$frv50,base64_decode('cnY6')));$this->rnt8(str_replace(base64_decode('cnY6'),'',$zcf61[0]));$this->vlz4(self::BROWSER_MOZILLA);return true;}else if(stripos($this->$frv50,base64_decode('bW96aWxsYQ=='))!==false&&preg_match(base64_decode('L21vemlsbGFcLyhbXiBdKikvaQ=='),$this->$frv50,$cdv65)&&stripos($this->$frv50,base64_decode('bmV0c2NhcGU='))===false){$this->rnt8($cdv65[1]);$this->vlz4(self::BROWSER_MOZILLA);return true;}return false;}/**
     * Determine if the browser is Lynx or not (last updated 1.7)
     * @return boolean True if the browser is Lynx otherwise false
     */ protected function vqf35(){if(stripos($this->$frv50,base64_decode('bHlueA=='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('THlueA==')));$zcf61=explode(base64_decode('IA=='),(isset($jmd60[1])?$jmd60[1]:''));$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_LYNX);return true;}return false;}/**
     * Determine if the browser is Amaya or not (last updated 1.7)
     * @return boolean True if the browser is Amaya otherwise false
     */ protected function wjo36(){if(stripos($this->$frv50,base64_decode('YW1heWE='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('QW1heWE=')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_AMAYA);return true;}}return false;}/**
     * Determine if the browser is Safari or not (last updated 1.7)
     * @return boolean True if the browser is Safari otherwise false
     */ protected function dst37(){if(stripos($this->$frv50,base64_decode('U2FmYXJp'))!==false&&stripos($this->$frv50,base64_decode('aVBob25l'))===false&&stripos($this->$frv50,base64_decode('aVBvZA=='))===false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('VmVyc2lvbg==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);}else{$this->rnt8(self::VERSION_UNKNOWN);}$this->vlz4(self::BROWSER_SAFARI);return true;}return false;}/**
     * Detect if URL is loaded from FacebookExternalHit
     * @return boolean True if it detects FacebookExternalHit otherwise false
     */ protected function huz38(){if(stristr($this->$frv50,base64_decode('RmFjZWJvb2tFeHRlcm5hbEhpdA=='))){$this->anq13(true);$this->fld14(true);return true;}return false;}/**
     * Detect if URL is being loaded from internal Facebook browser
     * @return boolean True if it detects internal Facebook browser otherwise false
     */ protected function ogj39(){if(stristr($this->$frv50,base64_decode('RkJJT1M='))){$this->fld14(true);return true;}return false;}/**
     * Detect Version for the Safari browser on iOS devices
     * @return boolean True if it detects the version correctly otherwise false
     */ protected function jru3a(){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('VmVyc2lvbg==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);return true;}return false;}/**
     * Detect Version for the Chrome browser on iOS devices
     * @return boolean True if it detects the version correctly otherwise false
     */ protected function ndo3b(){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('Q3JpT1M=')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_CHROME);return true;}return false;}/**
     * Determine if the browser is iPhone or not (last updated 1.7)
     * @return boolean True if the browser is iPhone otherwise false
     */ protected function xhq3c(){if(stripos($this->$frv50,base64_decode('aVBob25l'))!==false){$this->rnt8(self::VERSION_UNKNOWN);$this->vlz4(self::BROWSER_IPHONE);$this->jru3a();$this->ndo3b();$this->ogj39();$this->wkb11(true);return true;}return false;}/**
     * Determine if the browser is iPad or not (last updated 1.7)
     * @return boolean True if the browser is iPad otherwise false
     */ protected function jrp3d(){if(stripos($this->$frv50,base64_decode('aVBhZA=='))!==false){$this->rnt8(self::VERSION_UNKNOWN);$this->vlz4(self::BROWSER_IPAD);$this->jru3a();$this->ndo3b();$this->ogj39();$this->sgg12(true);return true;}return false;}/**
     * Determine if the browser is iPod or not (last updated 1.7)
     * @return boolean True if the browser is iPod otherwise false
     */ protected function qfh3e(){if(stripos($this->$frv50,base64_decode('aVBvZA=='))!==false){$this->rnt8(self::VERSION_UNKNOWN);$this->vlz4(self::BROWSER_IPOD);$this->jru3a();$this->ndo3b();$this->ogj39();$this->wkb11(true);return true;}return false;}/**
     * Determine if the browser is Android or not (last updated 1.7)
     * @return boolean True if the browser is Android otherwise false
     */ protected function knv3f(){if(stripos($this->$frv50,base64_decode('QW5kcm9pZA=='))!==false){$jmd60=explode(base64_decode('IA=='),stristr($this->$frv50,base64_decode('QW5kcm9pZA==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);}else{$this->rnt8(self::VERSION_UNKNOWN);}if(stripos($this->$frv50,base64_decode('TW9iaWxl'))!==false){$this->wkb11(true);}else{$this->sgg12(true);}$this->vlz4(self::BROWSER_ANDROID);return true;}return false;}/**
     * Determine if the browser is Vivaldi
     * @return boolean True if the browser is Vivaldi otherwise false
     */ protected function uwj40(){if(stripos($this->$frv50,base64_decode('Vml2YWxkaQ=='))!==false){$jmd60=explode(base64_decode('Lw=='),stristr($this->$frv50,base64_decode('Vml2YWxkaQ==')));if(isset($jmd60[1])){$zcf61=explode(base64_decode('IA=='),$jmd60[1]);$this->rnt8($zcf61[0]);$this->vlz4(self::BROWSER_VIVALDI);return true;}}return false;}/**
     * Determine if the browser is a PlayStation
     * @return boolean True if the browser is PlayStation otherwise false
     */ protected function twg41(){if(stripos($this->$frv50,base64_decode('UGxheVN0YXRpb24g'))!==false){$jmd60=explode(base64_decode('IA=='),stristr($this->$frv50,base64_decode('UGxheVN0YXRpb24g')));$this->vlz4(self::BROWSER_PLAYSTATION);if(isset($jmd60[0])){$zcf61=explode(base64_decode('KQ=='),$jmd60[2]);$this->rnt8($zcf61[0]);if(stripos($this->$frv50,base64_decode('UG9ydGFibGUp'))!==false||stripos($this->$frv50,base64_decode('Vml0YQ=='))!==false){$this->wkb11(true);}return true;}}return false;}/**
     * Determine the user's platform (last updated 2.0)
     */ protected function met42(){if(stripos($this->$frv50,base64_decode('d2luZG93cw=='))!==false){$this->$kol53=self::PLATFORM_WINDOWS;}else if(stripos($this->$frv50,base64_decode('aVBhZA=='))!==false){$this->$kol53=self::PLATFORM_IPAD;}else if(stripos($this->$frv50,base64_decode('aVBvZA=='))!==false){$this->$kol53=self::PLATFORM_IPOD;}else if(stripos($this->$frv50,base64_decode('aVBob25l'))!==false){$this->$kol53=self::PLATFORM_IPHONE;}elseif(stripos($this->$frv50,base64_decode('bWFj'))!==false){$this->$kol53=self::PLATFORM_APPLE;}elseif(stripos($this->$frv50,base64_decode('YW5kcm9pZA=='))!==false){$this->$kol53=self::PLATFORM_ANDROID;}elseif(stripos($this->$frv50,base64_decode('bGludXg='))!==false){$this->$kol53=self::PLATFORM_LINUX;}else if(stripos($this->$frv50,base64_decode('Tm9raWE='))!==false){$this->$kol53=self::PLATFORM_NOKIA;}else if(stripos($this->$frv50,base64_decode('QmxhY2tCZXJyeQ=='))!==false){$this->$kol53=self::PLATFORM_BLACKBERRY;}elseif(stripos($this->$frv50,base64_decode('RnJlZUJTRA=='))!==false){$this->$kol53=self::PLATFORM_FREEBSD;}elseif(stripos($this->$frv50,base64_decode('T3BlbkJTRA=='))!==false){$this->$kol53=self::PLATFORM_OPENBSD;}elseif(stripos($this->$frv50,base64_decode('TmV0QlNE'))!==false){$this->$kol53=self::PLATFORM_NETBSD;}elseif(stripos($this->$frv50,base64_decode('T3BlblNvbGFyaXM='))!==false){$this->$kol53=self::PLATFORM_OPENSOLARIS;}elseif(stripos($this->$frv50,base64_decode('U3VuT1M='))!==false){$this->$kol53=self::PLATFORM_SUNOS;}elseif(stripos($this->$frv50,base64_decode('T1NcLzI='))!==false){$this->$kol53=self::PLATFORM_OS2;}elseif(stripos($this->$frv50,base64_decode('QmVPUw=='))!==false){$this->$kol53=self::PLATFORM_BEOS;}elseif(stripos($this->$frv50,base64_decode('d2lu'))!==false){$this->$kol53=self::PLATFORM_WINDOWS;}elseif(stripos($this->$frv50,base64_decode('UGxheXN0YXRpb24='))!==false){$this->$kol53=self::PLATFORM_PLAYSTATION;}}}?>
