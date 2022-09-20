<?php
/**
 * @include .base.php
 * -
 */
namespace Samils {
  include_once (__DIR__ . '/.base.php');

  dir_boot (__DIR__ . '/global');

  call_user_func (requires ('dotenv'));
}
