<?php
/**
 * Created by PhpStorm.
 * User: mjwunderlich
 * Date: 1/22/15
 * Time: 14:01
 */

namespace Bisnow\Html2text;

require_once(__DIR__ . '/../../Html2Text.php');
require_once(__DIR__ . '/../../Html2TextException.php');

class Html2Text
{
  public function convert($html)
  {
    return \Html2Text\Html2Text::convert($html);
  }
}
