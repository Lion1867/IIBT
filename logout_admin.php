<?php
function destroy_session(){
session_destroy();
header('Location: admin_in.php');}

destroy_session()
?>