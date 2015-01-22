<?php
/**
 * Created by PhpStorm.
 * User: mjwunderlich
 * Date: 1/22/15
 * Time: 14:21
 */

namespace Bisnow\Html2text;

use Illuminate\Support\Facades\Facade;

class Html2TextApi extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'html2text';
  }
}
