<?php
return array(
    // set your paypal credential
    'client_id' => 'ATEzmiXqai_fSuIu06Tgwlc8lP8E4PPh-CXaufbLHRryqL0AKaWWOQlBvkkkkmL8HFTPPI3rmQvimL7c',
    'secret' => 'EKwWIDexgUlmyuMPKCtdQYzyIj2N8ET7Isab5NaD49TQhvdngbvFhegXND67aF8LxLHtcbrs-ltmnj6P',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);