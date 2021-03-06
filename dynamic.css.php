<?php
	/* Connect to WP FrameWork */
	$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
	$wp_load = $absolute_path[0] . 'wp-load.php';
	require_once($wp_load);

	header('Content-type: text/css');
	header('Cache-control: must-revalidate');
?>

<?php
	
	
?>

/* WHOLE PAGE (color) */
html, body, #page, .page
{	
	background-color: <?php echo X2_get_theme_option( 'bkg_color' ); ?> !important;
	font-family: <?php echo X2_get_theme_option( 'site_font' ); ?> !important;
}

/* #page, body.colors-dark, .colors-dark .site-content-contain, .colors-dark */

#page, #page p, #page div
{	
	color: <?php echo X2_get_theme_option( 'text_color' ); ?>;
}
#page a
{
	color: <?php echo X2_get_theme_option( 'link_color' ); ?>;
	text-decoration: none;
}
#page a:hover, footer a:hover, #colophon a:hover, p a:hover, div a:hover, li a:hover, ul a:hover
{
	color: <?php echo X2_get_theme_option( 'link_hover_color' ); ?> !important;
}
#page h1, #page h2, #page h3, #page h4, #page h5, .site-content-contain h1, .site-content-contain h2, .site-content-contain h3, .site-content-contain h4, .site-content-contain h5
{
	color: <?php echo X2_get_theme_option( 'h_fnt_color' ); ?> !important;
	text-decoration: none;
}

/* HEADER (color) */
#masthead
{
	background-color: <?php echo X2_get_theme_option( 'head_bkg_color' ); ?>;
}

/* SITE BRANDING HEADER (margins padding) */
#masthead, #page #masthead
{	
	<?php if ( strpos(X2_get_theme_option( 'head_borders' ), 'TLRB') !== false ): ?>
		border: <?php echo X2_get_theme_option( 'head_border_thickness' ); ?>px <?php echo X2_get_theme_option( 'head_border_style' ); ?> <?php echo X2_get_theme_option( 'head_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'head_borders' ), 'T') !== false ): ?>
		border-top: <?php echo X2_get_theme_option( 'head_border_thickness' ); ?>px <?php echo X2_get_theme_option( 'head_border_style' ); ?> <?php echo X2_get_theme_option( 'head_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'head_borders' ), 'L') !== false ): ?>
		border-left: <?php echo X2_get_theme_option( 'head_border_thickness' ); ?>px <?php echo X2_get_theme_option( 'head_border_style' ); ?> <?php echo X2_get_theme_option( 'head_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'head_borders' ), 'R') !== false ): ?>
		border-right: <?php echo X2_get_theme_option( 'head_border_thickness' ); ?>px <?php echo X2_get_theme_option( 'head_border_style' ); ?> <?php echo X2_get_theme_option( 'head_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'head_borders' ), 'B') !== false ): ?>
		border-bottom: <?php echo X2_get_theme_option( 'head_border_thickness' ); ?>px <?php echo X2_get_theme_option( 'head_border_style' ); ?> <?php echo X2_get_theme_option( 'head_border_color' ); ?>;
	<?php endif; ?>
}

/* SITE BRANDING HEADER LOGO */
.custom-logo-link
{
	<?php if (!X2_get_theme_option( 'show_logo_checkbox' )): ?>
	display: none;
	<?php endif; ?>
}

/* SITE BRANDING HEADER TITLE () */
#masthead .site-title, #masthead .site-title a
{
	<?php if (!X2_get_theme_option( 'show_title_checkbox' )): ?>
	display: none;
	<?php endif; ?>
	
	<?php if (!X2_get_theme_option( 'show_description_checkbox' )): ?>
	margin-top: 15px;
	<?php endif; ?>
	
	color: <?php echo X2_get_theme_option( 'site_title_color' ); ?> !important;
	opacity: 1;
    -webkit-transition: opacity 1;
    transition: opacity 1;
}

/* SITE BRANDING HEADER DESCRIPTION () */
#masthead .site-description
{
	<?php if (!X2_get_theme_option( 'show_description_checkbox' )): ?>
	display: none;
	<?php endif; ?>
	
	color: <?php echo X2_get_theme_option( 'site_description_color' ); ?> !important;
}

/* NAV BAR (color) */
.navigation-top
{
	background-color: <?php echo X2_get_theme_option( 'nav_bar_bkg_color' ); ?> !important;
}

/* NAV MENU (color) */
#top-menu, #top-menu li, #top-menu ul
{
	background-color: <?php echo X2_get_theme_option( 'nav_bkg_color' ); ?> !important;
}



#top-menu .current-menu-item
{
	background-color: <?php echo X2_get_theme_option( 'nav_sel_item_bkg_color' ); ?> !important;
}
#top-menu .menu-item a, #top-menu .current-menu-item ul li a
{
	color: <?php echo X2_get_theme_option( 'nav_item_link_color' ); ?>;
}
#top-menu .current-menu-item a
{
	color: <?php echo X2_get_theme_option( 'nav_sel_item_link_color' ); ?>;
}


<?php //Layout 1 Nav at Top ?>
<?php if ( has_nav_menu( 'top' ) && X2_get_theme_option( 'site_layout' ) == '1' ) : ?>
/* Desktop */
@media screen and (min-width: 641px)
{
	.site-branding .wrap
	{
		min-width: 90%;
		padding-left: 15%;
	}
	.navigation-top, .site-branding-text
	{
		position: relative !important;
		float: left;
		display: inline;
		width: initial !important;
	}
	.navigation-top
	{
		float: right;
		display: block;
		border: none;
		width: auto;
		margin-top: 0px;
	}
	.site-branding, .custom-header
	{
		padding: 0px;
		margin: 0px;
		margin-bottom: 0px !important;
	}
}
<?php endif; ?>

/* All content width XXLanding Page Content WidthXX */
#primary #main .page .panel-content .wrap, .navigation-top .wrap, .site-branding .wrap, #content .wrap
{
	<?php
		if (strlen(X2_get_theme_option( 'landing_page_width' )) > 1)
		{
		?>
			max-width: <?php echo X2_get_theme_option( 'landing_page_width' ); ?>;
			width: <?php echo X2_get_theme_option( 'landing_page_width' ); ?>;
		<?php
		}
		?>
		
}


/* Background Image Start */
<?php
$value = X2_get_theme_option( 'bkg_image' );
if( intval( $value ) > 0 ) 
{
	$image = wp_get_attachment_url($value);
	?>
	#page
	{
		background: url("<?php echo $image; ?>");
		background-size: <?php echo X2_get_theme_option( 'bkg_image_size' ); ?>;
		background-repeat: <?php echo X2_get_theme_option( 'bkg_image_repeat' ); ?>;
		background-attachment: <?php echo X2_get_theme_option( 'bkg_image_attachment' ); ?>;
	}
	<?php
}
?>
/* Background Image End */

/* CONTENT (color) */
.site-content-contain
{
	background-color: <?php echo X2_get_theme_option( 'content_body_bkg_color' ); ?> !important;
}

/* PAGE ARTICLE POST (width) */
#content .wrap
/*, #content .entry-header, #page #content header, #page #content .entry-footer, #comments*/
{
	background-color: <?php echo X2_get_theme_option( 'content_bkg_color' ); ?>;
	
	<?php if ( strpos(X2_get_theme_option( 'content_borders' ), 'TLRB') !== false ): ?>
		border: <?php echo X2_get_theme_option( 'content_border_thick' ); ?>px <?php echo X2_get_theme_option( 'content_border_style' ); ?> <?php echo X2_get_theme_option( 'content_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'content_borders' ), 'T') !== false ): ?>
		border-top: <?php echo X2_get_theme_option( 'content_border_thick' ); ?>px <?php echo X2_get_theme_option( 'content_border_style' ); ?> <?php echo X2_get_theme_option( 'content_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'content_borders' ), 'L') !== false ): ?>
		border-left: <?php echo X2_get_theme_option( 'content_border_thick' ); ?>px <?php echo X2_get_theme_option( 'content_border_style' ); ?> <?php echo X2_get_theme_option( 'content_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'content_borders' ), 'R') !== false ): ?>
		border-right: <?php echo X2_get_theme_option( 'content_border_thick' ); ?>px <?php echo X2_get_theme_option( 'content_border_style' ); ?> <?php echo X2_get_theme_option( 'content_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'content_borders' ), 'B') !== false ): ?>
		border-bottom: <?php echo X2_get_theme_option( 'content_border_thick' ); ?>px <?php echo X2_get_theme_option( 'content_border_style' ); ?> <?php echo X2_get_theme_option( 'content_border_color' ); ?>;
	<?php endif; ?>
}

/* Post Page Heading */
#page header
{
	/* Reset */
	border: none;
}

/* Front Page Tile Widgets */
#x2-fptw .fptw-widget
{
	<?php if ( strpos(X2_get_theme_option( 'fptw_borders' ), 'TLRB') !== false ): ?>
		border: <?php echo X2_get_theme_option( 'fptw_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'fptw_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'fptw_borders' ), 'T') !== false ): ?>
		border-top: <?php echo X2_get_theme_option( 'fptw_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'fptw_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'fptw_borders' ), 'L') !== false ): ?>
		border-left: <?php echo X2_get_theme_option( 'fptw_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'fptw_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'fptw_borders' ), 'R') !== false ): ?>
		border-right: <?php echo X2_get_theme_option( 'fptw_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'fptw_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'fptw_borders' ), 'B') !== false ): ?>
		border-bottom: <?php echo X2_get_theme_option( 'fptw_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'fptw_border_color' ); ?>;
	<?php endif; ?>
}
#x2-fptw .fptw-widget, #x2-fptw h1, #x2-fptw h2, #x2-fptw h3, #x2-fptw figure, #x2-fptw figcaption
{	
	color: <?php echo X2_get_theme_option( 'fptw_font_color' ); ?>;
}


/* FOOTER */
#colophon
{
	background-color: <?php echo X2_get_theme_option( 'footer_bkg_color' ); ?>;
	
	<?php if ( strpos(X2_get_theme_option( 'footer_borders' ), 'TLRB') !== false ): ?>
		border: <?php echo X2_get_theme_option( 'footer_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'footer_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'footer_borders' ), 'T') !== false ): ?>
		border-top: <?php echo X2_get_theme_option( 'footer_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'footer_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'footer_borders' ), 'L') !== false ): ?>
		border-left: <?php echo X2_get_theme_option( 'footer_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'footer_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'footer_borders' ), 'R') !== false ): ?>
		border-right: <?php echo X2_get_theme_option( 'footer_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'footer_border_color' ); ?>;
	<?php endif; ?>
	
	<?php if ( strpos(X2_get_theme_option( 'footer_borders' ), 'B') !== false ): ?>
		border-bottom: <?php echo X2_get_theme_option( 'footer_border_thick' ); ?>px solid <?php echo X2_get_theme_option( 'footer_border_color' ); ?>;
	<?php endif; ?>
	
	color: <?php echo X2_get_theme_option( 'footer_fnt_color' ); ?>;
}

/* Form Style */
.contact-form, .contact-form label, label
{
	color: <?php echo X2_get_theme_option( 'form_fnt_color' ); ?> !important;	
}

#page input[type=button], #page .pushbutton-wide, .post-edit-link
{
	background-color: <?php echo X2_get_theme_option( 'btn_bkg_color' ); ?> !important;	
}

#page textarea, #page input[type=text], #page input[type=email], #page input[type=password]
{
	background-color: <?php echo X2_get_theme_option( 'form_item_bkg_color' ); ?> !important;
	color: <?php echo X2_get_theme_option( 'form_input_color' ); ?> !important;
}

#main .edit-link, #main .post-edit-link
{
	background-color: transparent !important;
}

/* Additional Custom CSS */
<?php echo X2_get_theme_option( 'custom_css' ); ?>
