<?php
if(!function_exists('showQuality'))
{
  function showQuality(): int
  {
    $data = session('cart');
    $default = 0;
    if($data)
    {
      $default = count($data);
    }
    return $default;
  }
}
