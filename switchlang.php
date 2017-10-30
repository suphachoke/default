<?php
setcookie("lang", $_GET['lang'], time() + 86400, "/");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type='text/javascript'>window.location.href = '<?= $_SERVER['HTTP_REFERER'] ?>';</script>