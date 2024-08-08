<?php
function smarty_function_include_file($params, &$smarty)
{
    include($params['file']);
}

?>