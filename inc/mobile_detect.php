<?php
/* Dummy replacement for mobile_dedect.php library, only interpretes the headers set by the reverseproxy!
* by: considerator
* current vatnish port is based on (Mobile-Detect version 2.6.2)
*/
class Mobile_Detect {
        protected $mobile=false;
        protected $tablet=false;
        function __construct(){
                //$devicetype = $_SERVER['HTTP_X_UA_DEVICE_BASIC']; // old header
		$devicetype = $_SERVER['HTTP_XF_UA_BASIC'];
                if( $devicetype === "mobile" ){
                        $mobile=true;
                        echo "<!-- mobile! -->";
                } elseif ( $devicetype === "tablet" ) {
                        $mobile=true;
                        $tablet=true;
                        echo "<!-- mobile,tablet! -->";
                }
        }
        // mobile is mobile || tablet
        public function isMobile($userAgent = null, $httpdevicetypes = null) {
                return $mobile;
        }
        // tablet is tablet
        public function isTablet($userAgent = null, $httpdevicetypes = null) {
                return $tablet;
        }
}
