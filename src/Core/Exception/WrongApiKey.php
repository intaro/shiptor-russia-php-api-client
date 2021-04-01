<?php
namespace ShiptorRussiaApiClient\Client\Core\Exception;

use ShiptorRussiaApiClient\Client\Core\Lang\Messages;
/**
 * Class WrongApiKey
 */
class WrongApiKey extends \InvalidArgumentException{
    public function __construct($message = "", $code = 0, \Exception $previous = null) {
        $message = Messages::get('EXC_WRONG_API_KEY');
        parent::__construct($message, $code, $previous);
    }
}