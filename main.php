<?php
include './view/start.html';
if(isset($_GET['vk'])) {
	header('Location: https://oauth.vk.com/authorize?client_id=5472585&display=page&redirect_uri=http://localhost:9000/view/show.html&scope=friends,photos&response_type=token&v=5.52&revoke=1');
} else if(isset($_GET['google'])) {
	header('Location: https://accounts.google.com/o/oauth2/auth?redirect_uri=http://localhost:9000/view/show.html&response_type=code&client_id=156522525754-f4b3edgkhitstvalojigr32saioipsmh.apps.googleusercontent.com&scope=email');
}
?>
