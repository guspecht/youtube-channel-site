<?php
include('./Apifunctions.php');
$amongusPlaylistId = 'PLAVrCmm993Zb7Xw6q0xkt6AtWBf0k6EfJ';
$data = getVideoFromPlaylist($amongusPlaylistId);

print_r($data);


?>