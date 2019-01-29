<?php

function exception_handler($exception) {
  echo "khh 自定义的: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');