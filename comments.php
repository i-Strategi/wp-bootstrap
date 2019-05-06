<?php

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

// If password protected
if ( post_password_required() ) { 
	echo "<div class='alert alert-info'>" . _e("This post is password protected. Enter the password to view comments.","wpbs") ."</div>";
	return;
}


/**
 * Comments
 */

// Comments list
function wpbs_comments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(''); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="comment-box media comment-author vcard clearfix">
			<div class="avatar mr-3">
				<?php echo get_avatar($comment, $size='64'); ?>
			</div>
			<div class="media-body comment-text">
			
				<h4 class="media-heading">
					<?php printf('%s', get_comment_author_link()); ?> <small><time datetime="<?php echo comment_time(); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php comment_time('F jS, Y'); ?> </a></time></small>
				</h4>				

				<?php if ($comment->comment_approved == '0') : ?>
					<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'wpbs') ?></p>
					</div>
				<?php endif; ?>	

				<?php comment_text(); ?>

				<div class="btn-group">
				<?php
					edit_comment_link(__('Edit', 'wpbs'));
					ob_start();
					echo str_replace('class="comment-reply-link"', 'class="btn btn-primary comment-reply-link"', ob_get_clean());
					comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
				?>
				</div>				
			</div>
		</article>
	<?php
}

// Display trackbacks/pings callback function
function list_pings($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment; ?>
	<li id="comment-<?php comment_ID(); ?>"><i class="fa fa-share"></i>&nbsp;<?php comment_author_link(); ?>
<?php
}

// Add btn class to edit link
function wpbs_edit_comment_btn($output)
{
	$editLinkBtn = 'btn btn-primary btn-sm';
	return preg_replace('/comment-edit-link/', 'comment-edit-link ' . $editLinkBtn, $output, 1);
}
add_filter('edit_comment_link', 'wpbs_edit_comment_btn');

// Add btn class to reply link
function wpbs_reply_comment_btn($output)
{
	$replyLinkBtn = 'btn btn-primary btn-sm';
	return preg_replace('/comment-reply-link/', 'comment-reply-link ' . $replyLinkBtn, $output, 1);
}
add_filter('comment_reply_link', 'wpbs_reply_comment_btn');

if ( have_comments() ) : ?>
	<div id="comments">

		<header class="page-header">
			<h3 id="comments-title"><?php comments_number('<span>' . __("No","wpbs") . '</span> ' . __("Comments","wpbs") . '', '<span>' . __("One","wpbs") . '</span> ' . __("Response","wpbs") . '', '<span>%</span> ' . __("Responses","wpbs") );?> <?php _e("to","wpbs"); ?> &#8220;<?php the_title(); ?>&#8221;</h3>
		</header>
		
		<ul class="commentlist list-unstyled">
			<?php wp_list_comments('type=comment&callback=wpbs_comments'); ?>
		</ul>
		
		<?php if ( ! empty($comments_by_type['pings']) ) : ?>
			<h3 id="pings">Trackbacks/Pingbacks</h3>
			
			<ol class="pinglist">
				<?php wp_list_comments('type=pings&callback=list_pings'); ?>
			</ol>
		<?php endif; ?>
		

		<?php if ( ! comments_open() ) : ?>
			<p class="alert alert-info"><?php _e("Comments are closed","wpbs"); ?>.</p>
		<?php endif; ?>
		
		<nav id="comment-nav">
			<ul class="clearfix pagination">
				<li><?php previous_comments_link( __("Older comments","wpbs") ) ?></li>
				<li><?php next_comments_link( __("Newer comments","wpbs") ) ?></li>
			</ul>
		</nav>

<?php endif; ?>


<?php if ( comments_open() ) : ?>
	<div class="well">
		<?php
			ob_start();
			$comments_args = array('class_submit' => 'btn btn-primary');
			comment_form($comments_args);
			
			
			$oldInputs = array(
				'textarea id="comment"',
				'input id="author"',
				'input id="email"',
				'input id="url"'
			);
			$newInputs = array(
				'textarea id="comment" class="form-control"',
				'input id="author" class="form-control"',
				'input id="email" class="form-control"',
				'input id="url" class="form-control"'
			);
			
			echo str_replace($oldInputs, $newInputs ,ob_get_clean());
		?>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>

<?php if ( have_comments() ) : ?>
	</div>
<?php endif; ?>
