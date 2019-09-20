<?php
/*
Plugin Name: Test Plugin
Description: Adding a string under each post
Version:     1.0
Author:      Julien
*/

function addCommentBox( $content ) {
  if(is_singular('post')):
	   return $content . commentBox();
  else:
    return $content;
  endif;
}
add_filter( 'the_content', 'addCommentBox' );


function commentBox(){
  return '
  <form>
    <label>New comment</label>
    <input type="text" />
    <input type="submit" value="Submit" />
  </form>';
}

?>
