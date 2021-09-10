<?php
function getIterable():iterable {
  return ["shopee", "tokopedia", "bukalapak"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
?>