<?php

    /**
     * @package utils.net.SMTP.Message.Encoder
     * @author Andrey Knupp Vital <andreykvital@gmail.com>
     * @filesource utils\net\SMTP\Message\Encoder\Base64.php
     */
    namespace utils\net\SMTP\Message\Encoder;
    use utils\net\SMTP\Message\Encoder;

    class Base64 implements Encoder
    {

        /**
         * Encodes the provided string in base64 format
         * @param string $string the string to be encoded
         * @see Encoder::encodeString()
         * @return string
         */
        public function encodeString($string)
        {
            return base64_encode($string);
        }

        /**
         * Encodes a header in BASE64 format
         * @param string $header the header to be encoded
         * @see Encoder::encodeHeader()
         * @return string
         */
        public function encodeHeader($header, $charset = "UTF-8")
        {
            return mb_encode_mimeheader($header, $charset, "B", "\r\n", 0);
        }

    }