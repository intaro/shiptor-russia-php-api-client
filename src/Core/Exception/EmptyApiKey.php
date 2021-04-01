<?php
namespace ShiptorRussiaApiClient\Client\Core\Exception;

use ShiptorRussiaApiClient\Client\Core\Lang\Messages;
/**
 * Class EmptyApiKey
 */
class EmptyApiKey extends \InvalidArgumentException{
    public function __construct($message = "", $code = 0, \Exception $previous = null) {
        $message = Messages::get('EXC_EMPTY_API_KEY');
        parent::__construct($message, $code, $previous);
    }
}