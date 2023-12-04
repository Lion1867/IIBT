<?php
function destroy_session(){
session_destroy();
header('Location: admin_in.php?error=1');}

destroy_session()
?>