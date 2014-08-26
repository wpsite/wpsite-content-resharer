<?php require_once('header.php'); ?>

	<div id="wpsite_plugin_content">

		<div id="wpsite_plugin_settings">

			<div class="wrap metabox-holder">

				<h1><?php _e('Help', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></h1>

				<div class="postbox">
					<h3><?php _e('My Twitter account has not been tweeting at its intervals or at all.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></h3>
					<div class="inside">
						<span><?php _e('First check to see if the account is set to active, and all your post filters are valid.  This is a very common problem so go through these steps to make sure your post filter settings are allowing for at least a couple posts to be selected.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></span>
					</div>
				</div>

				<div class="postbox">

					<div class="inside">
						<ol>
						<li><?php _e('Make sure your minimum and maximum age are valid and will return a list of posts.  For example if you put your minimum age as 1 day and maximum age as 2 days, and you have no posts that were published in the last two days, then no posts can be selected and nothing will be reshared.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></li>
						<li><?php _e('Make sure you have selected post types to include.  This is found in the Accounts “Post Filter” section.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></li>
						<li><?php _e('Make sure to check to see if you have at least one box unchecked in the exclude posts in this category setting.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></li>
						<li><?php _e('Go to the "Exclude Posts" page and make sure that all, if not most posts are included.  All checked posts will be excluded when selecting a post to reshare.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></li>
					</ol>
					</div>
				</div>

				<div class="postbox">

					<div class="inside">
						<span><?php _e('If you have done the steps above and there are valid posts Content Resharer can choose from then go to the "Accounts" page and make sure the "reshare now" works for the account.  Hover over the account and the "reshare now" link will be under the "Interval" column.  Click the "reshare now" link and if nothing has been shared to your twitter account then try to re-connect your account.  If this still does not work then you might be recieving a "Dupliate status error from twitter".  This is safeguard for twitter and it basically means that you cannot post a certain amount of the same tweets within given set of tweets.  Basically, if 4 out of your last 5 tweets were the same then trying to tweet the same thing again could result in a "Duplicate status error".', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></span> <a href="https://dev.twitter.com/discussions/800" target="_blank"><?php _e('Find out more', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></a>
					</div>
				</div>

				<!--
			<div class="postbox">

					<div class="inside">
						<span><?php _e('If the "reshare now" worked and something was tweeted then the error is most likely a "duplicate status error" from twitter or a problem with the wordpress CRON job.  The most common issue is that twitter won’t allow duplicate tweets in a set interval of time.  If your blog only has a few of posts and you have only created a few or no messages, then WPSite Reshare could be trying to reshare the same content.  A quick fix could be adding more messages to give your content more variety.  If this doesn’t fix it then try downloading the WP Control plugin http://wordpress.org/plugins/wp-crontrol/.  This shows you all wordpress cron jobs.  Under the “Tools” menu page in your blog admin panel, click on the submenu “Control”.  This page will show all your CRON jobs.  Here there should be CRON jobs with hooks called wpsite_twitter_reshare_*, which are all WPSite Reshare CRON jobs.  If there are none, and the wpsite reshare account is set to active, then the CRON jobs are not scheduling.  If this is so please contact kjbenk@gmail.com for further information.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></span>
					</div>
				</div>

				<div class="postbox">

					<div class="inside">
						<span><?php _e('If the "reshare now" didn’t work then there is something wrong with your connection to your twitter account.  First check to see if your Access Level Capabilities are set to "Read and Write” (read more about that in the FAQ).  If these the Access Level Capabilities are set to “Read and Write”, then maybe is has something to do with your Callback URL.  Twitter will complain sometimes if a Callback URL is not set.  This is only a twitter developer application bug and it will not affect your site at all.  You can put a dummy Callback URL in this field which we recommend to be your main url.  To set your Callback URL, go to your twitter application using this link https://dev.twitter.com/apps and go to the “Settings” tab.  Under the “Application Type” section you will see the Callback URL field.  Put your url into this field e.g. http://example.com, and hit “Update this twitter application’s settings”.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></span>
					</div>
				</div>
			-->

				<span><?php _e('All errors should be found in the debug log if you want more information.', WPSITE_TWITTER_RESHARE_PLUGIN_TEXT_DOMAIN); ?></span>
			</div>

		</div><!--  wpsite_plugin_settings -->

		<?php require_once('sidebar.php'); ?>

	</div> <!-- /wpsite_plugin_content -->

<?php require_once('footer.php'); ?>