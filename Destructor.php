<?php
class Connection2
{
    public function __destruct()
    {
        echo 'Object dihapus dari memory';
    }
}
$connection = new Connection2();
unset($connection);
?>
