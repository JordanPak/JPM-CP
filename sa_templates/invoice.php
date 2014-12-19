<?php
/**
 * Hook into si_head hook and add a new custom CSS stylesheet.
 * 
 */
function si_add_stylesheet() {
	echo '<link rel="stylesheet" id="sprout_doc_style-css" href="'.get_stylesheet_directory_uri() . '/library/css/jpm-sprout.css" type="text/css" media="all">';
}
add_action( 'si_head', 'si_add_stylesheet' );

?>

<?php

do_action( 'pre_si_invoice_view' ); ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php si_head(); ?>
		<meta name="robots" content="noindex" />
	</head>

	<body id="invoice" <?php body_class(); ?>>

		<div id="outer_doc_wrap">

			<?php si_display_messages(); ?>
			<?php do_action( 'si_invoice_outer_doc_wrap' ) ?>
			
			<?php if ( si_get_invoice_balance() ): ?>
				<?php do_action('si_payments_pane'); ?>
			<?php endif ?>

			<div id="doc_header_wrap" class="sticky_header">
				<header id="header_title">
					<span class="header_id"><?php printf( 'Invoice %s', si_get_invoice_id() ) ?></span>
					<div id="doc_actions">
						<?php do_action( 'si_doc_actions_pre' ) ?>
						<?php 
							$payment_string = ( si_has_invoice_deposit() ) ? si__('Pay Deposit') : si__('Pay Invoice') ;
							 ?>
						<?php if ( si_get_invoice_balance() ): ?>
							<a href="#pay" class="button primary_button purchase_button" data-id="<?php the_ID() ?>" data-nonce="<?php echo wp_create_nonce( SI_Controller::NONCE ) ?>" data-dropdown="#payment_selection"><?php echo $payment_string ?></a>
							<div id="payment_selection" class="dropdown dropdown-tip dropdown-anchor-right dropdown-relative">
								<ul class="dropdown-menu">
									<?php foreach ( si_payment_options() as $slug => $options ): ?>
										<li id="<?php esc_attr_e( $slug ) ?>" class="payment_option">
											<a href="<?php si_payment_link( get_the_ID(), $slug ) ?>" data-slug="<?php esc_attr_e( $slug ) ?>" data-id="<?php the_ID() ?>" data-nonce="<?php echo wp_create_nonce( SI_Controller::NONCE ) ?>" class="payment_option <?php if ( si_is_cc_processor( $slug ) ) echo 'cc_processor' ?>">
												<?php if ( isset( $options['icons'] ) ): ?>
													<?php foreach ( $options['icons'] as $path ): ?>
														<img src="<?php si_esc_e($path) ?>" alt="<?php si_esc_e($options['label']) ?>" height="48" />
													<?php endforeach ?>
												<?php else: ?>
													<span class="process_label"><?php si_esc_e($options['label']) ?></span>
												<?php endif ?>
											</a>
										</li>
									<?php endforeach ?>
								</ul>
							</div>
						<?php endif ?>
						<?php do_action( 'si_doc_actions' ) ?>
					</div><!-- #doc_actions -->
				</header><!-- #header_title -->
			</div><!-- #doc_header_wrap -->

			<div id="document_wrap">

				<div id="doc">

					<section id="header_wrap" class="clearfix">

						<div id="header_logo" class="clearfix">
							
							<header role="banner">
								<div class="header_info">
									<h2 class="doc_type"><?php si_e('Invoice') ?></h2>
									<p class="title"><?php the_title() ?></p>
								</div>

								<h1 id="logo">
									<?php if ( get_theme_mod( 'si_logo' ) ) : ?>
										<img src="<?php echo esc_url( get_theme_mod( 'si_logo', si_doc_header_logo_url() ) ); ?>" alt="document logo" >
									<?php else: ?>
										<img src="<?php echo si_doc_header_logo_url() ?>" alt="document logo" >
									<?php endif; ?>
								</h1>	
							</header><!-- /header -->

							<?php if ( !si_get_invoice_balance() ): ?>
								<span id="status" class="paid"><span class="inner_status"><?php si_e('Paid') ?></span></span>
							<?php endif ?>
						</div><!-- #header_logo -->

						<div id="vcards">
							<?php do_action( 'si_document_vcards_pre' ) ?>
							<dl id="doc_address_info">
								<dl class="from_addy">
									<dt>
										<span class="dt_heading"><?php si_e('From') ?></span>
									</dt>
									<dd>
										<b><?php si_company_name() ?></b> 
										<?php si_doc_address() ?>
									</dd>
								</dl>
								<?php if ( si_get_invoice_client_id() ): ?>
									<dl class="client_addy">
										<dt>
											<span class="dt_heading"><?php si_e('To') ?></span>
										</dt>
										<dd>
											<b><?php echo get_the_title( si_get_invoice_client_id() ) ?></b>
											
											<?php do_action( 'si_document_client_addy' ) ?>
											 
											<?php si_client_address( si_get_invoice_client_id() ) ?>
										</dd>
									</dl>
								<?php endif ?>
							</dl><!-- #doc_address_info -->
							<?php do_action( 'si_document_vcards' ) ?>
						</div><!-- #vcards -->
						
						<div class="doc_details clearfix">
							<?php do_action( 'si_document_details_pre' ) ?>

							<dl class="date">
								<dt><span class="dt_heading"><?php si_e('Date') ?></span></dt>
								<dd><?php si_invoice_issue_date() ?></dd>
							</dl>

							<?php if ( si_get_invoice_id() ): ?>
								<dl class="invoice_number">
									<dt><span class="dt_heading"><?php si_e('Invoice Number') ?></span></dt>
									<dd><?php si_invoice_id() ?></dd>
								</dl>
							<?php endif ?>

							<?php if ( si_get_invoice_due_date() ): ?>
								<dl class="date">
									<dt><span class="dt_heading"><?php si_e('Invoice Due') ?></span></dt>
									<dd><?php si_invoice_due_date() ?></dd>
								</dl>
							<?php endif ?>

							<?php if ( si_get_invoice_expiration_date() ): ?>
								<dl class="date">
									<dt><span class="dt_heading"><?php si_e('Expiration Date') ?></span></dt>
									<dd><?php si_invoice_expiration_date() ?></dd>
								</dl>
							<?php endif ?>

							<?php do_action( 'si_document_details_totals' ) ?>

							<?php if ( si_has_invoice_deposit() ): ?>
								<dl class="doc_total_with_deposit">
									<dt><span class="dt_heading"><?php si_e('Invoice Total') ?></span></dt>
									<dd><?php sa_formatted_money( si_get_invoice_total() ) ?></dd>
								</dl>

								<dl class="doc_total">
									<dt><span class="dt_heading"><?php si_e('Deposit Total') ?></span></dt>
									<dd><?php sa_formatted_money( si_get_invoice_deposit() ) ?></dd>
								</dl>
							<?php else: ?>
								<dl class="doc_total">
									<dt><span class="dt_heading"><?php si_e('Invoice Total') ?></span></dt>
									<dd><?php sa_formatted_money( si_get_invoice_total() ) ?></dd>
								</dl>
							<?php endif ?>

							<dl class="doc_total doc_balance">
								<dt><span class="dt_heading"><?php si_e('Balance') ?></span></dt>
								<dd><?php sa_formatted_money( si_get_invoice_balance() ) ?></dd>
							</dl>

							<?php do_action( 'si_document_details' ) ?>
						</div><!-- #doc_details -->

					</section>

					<?php
						$line_items = si_get_invoice_line_items();
						$has_percentage_adj = FALSE;
						foreach ( $line_items as $position => $data ) {
							if ( isset( $data['tax'] ) && $data['tax'] ) {
								$has_percentage_adj = TRUE;
							}
						} ?>

					<section id="doc_line_items_wrap" class="clearfix">
						<div id="doc_line_items" class="clearfix">
							<div id="line_items_header">
								<?php do_action( 'si_document_line_items_header' ) ?>
								<div class="line_item">
									<?php echo si_line_item_header_front_end( 'invoices', $has_percentage_adj ) ?>
								</div>
							</div>
							<ol id="items">
								<?php do_action( 'si_document_line_items' ) ?>
								<?php foreach ( $line_items as $position => $data ): ?>
									<?php if ( is_int( $position ) ): // is not a child ?>
										<li class="item" data-id="<?php echo $position ?>">
											<?php
												// get the children of this top level item
												$children = si_line_item_get_children( $position, $line_items ); ?>

											<?php 
												// build single item
												echo si_line_item_build( $position, $line_items, $children ) ?>

											<?php if ( !empty( $children ) ): // if has children, loop and show  ?>
												<ol class="items_list">
													<?php foreach ( $children as $child_position ): ?>
														<li class="item" data-id="<?php echo $child_position ?>"><?php echo si_line_item_build( $child_position, $line_items ) ?></li>
													<?php endforeach ?>
												</ol>
											<?php endif ?>
										</li>
									<?php endif ?>
								<?php endforeach ?>

							</ol>

							<footer id="line_items_footer" class="clearfix">
								<?php do_action( 'si_document_line_items_footer' ) ?>
								<div id="line_items_totals">
									<div id="line_subtotal">
										<b><?php si_e('Subtotal') ?></b>
										<?php sa_formatted_money( si_get_invoice_subtotal() ) ?>
									</div>
									<div id="line_total">
										<b title="Total includes tax and discount." class="helptip"><?php si_e('Total') ?></b>
										<?php sa_formatted_money( si_get_invoice_calculated_total() ) ?>
									</div>
									<?php if ( si_get_invoice_payments_total() ): ?>
										<hr/>
										<div id="line_payments">
											<b><?php si_e('Payments') ?></b>
											<?php sa_formatted_money( si_get_invoice_payments_total() ) ?>
										</div>
										<div id="line_balance">
											<b><?php si_e('Balance') ?></b>
											<?php sa_formatted_money( si_get_invoice_balance() ) ?>
										</div>
									<?php endif ?>
								</div>
							</footer>
						</div><!-- #doc_line_items -->

					</section>

					<section id="doc_notes">
						<?php if ( si_get_invoice_notes() ): ?>

						<?php do_action( 'si_document_notes' ) ?>
						<div id="doc_notes">
							<h2><?php si_e('Notes') ?></h2>
							<?php si_invoice_notes() ?>
						</div><!-- #doc_notes -->
						
						<?php endif ?>

						<?php if ( si_get_invoice_terms() ): ?>
						
						<?php do_action( 'si_document_terms' ) ?>
						<div id="doc_terms">
							<h2><?php si_e('Terms') ?></h2>
							<?php si_invoice_terms() ?>
						</div><!-- #doc_terms -->
						
						<?php endif ?>

					</section>
				
				</div><!-- #doc -->

				<div id="footer_wrap">
					<?php do_action( 'si_document_footer' ) ?>
					<aside>
						<ul class="doc_footer_items">
							<li class="doc_footer_item">
								<?php printf( '<strong>%s</strong> %s', '<div class="dashicons dashicons-admin-site"></div>', make_clickable( home_url() ) ) ?>
							</li>
							<?php if ( si_get_company_email() ): ?>
								<li class="doc_footer_item">
									<?php printf( '<strong>%s</strong> %s', '<div class="dashicons dashicons-email-alt"></div>', make_clickable( si_get_company_email() ) ) ?>
								</li>
							<?php endif ?>
						</ul>
					</aside>
				</div><!-- #footer_wrap -->

		</div><!-- #outer_doc_wrap -->
		
		<div id="doc_history">
			<?php do_action( 'si_document_history' ) ?>
			<?php foreach ( si_doc_history_records() as $item_id => $data ): ?>
				<dt>
					<span class="history_status <?php echo $data['status_type'] ?>"><?php echo $data['type']; ?></span><br/>
					<span class="history_date"><?php echo date( get_option( 'date_format' ).' @ '.get_option( 'time_format' ), strtotime( $data['post_date'] ) ) ?></span>
				</dt>

				<dd>
					<?php if ( $data['status_type'] == SI_Notifications::RECORD ): ?>
						<p>
							<?php echo $update_title ?>
							<br/><a href="#TB_inline?width=600&height=380&inlineId=notification_message_<?php echo $item_id ?>" id="show_notification_tb_link_<?php echo $item_id ?>" class="thickbox tooltip notification_message" title="<?php si_e('View Message') ?>"><?php si_e('View Message') ?></a>
						</p>
						<div id="notification_message_<?php echo $item_id ?>" class="cloak">
							<?php echo wpautop( $data['content'] ) ?>
						</div>
					<?php elseif ( $data['status_type'] == SI_Invoices::VIEWED_STATUS_UPDATE ) : ?>
						<p>
							<?php echo $data['update_title'] ?>
						</p>
					<?php else: ?>
						<?php echo wpautop( $data['content'] ) ?>
					<?php endif ?>
					
				</dd>
			<?php endforeach ?>
		</div><!-- #doc_history -->

		<div id="footer_credit">
			<?php do_action( 'si_document_footer_credit' ) ?>
			<!--<p><?php si_e('Powered by Sprout Invoices') ?></p>-->
		</div><!-- #footer_messaging -->

	</body>
	<?php do_action( 'si_document_footer' ) ?>
	<?php si_footer() ?>
</html>
<?php do_action( 'invoice_viewed' ) ?>