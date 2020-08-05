<?php
add_action('register_form',function(){
	?>
  <p>
				<label for="user_password"><?php _e( 'Password' ); ?></label>
				<input type="password" name="as_user_password" id="user_password" class="input" value="" size="25" />
			</p>
  <?php
});

add_filter( 'random_password', function($pass,$length,$special_chars,$extra_special_chars){
		if(isset($_POST['as_user_password'])){
    	return $_POST['as_user_password'];
    }
    return $pass;
}, 10, 4 );