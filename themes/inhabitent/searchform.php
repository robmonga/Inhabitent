<!-- <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	</fieldset>
</form> -->
<!-- TODO: FIX THE SEARCH FORM, THE SEARCH BUTTON IS PRINTING 10 BUTTONS PER PAGE FOR SOME REASON -->
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
</a>
<fieldset>
	<!-- <a class="search-btn"href="#">	 -->
		<i id="mag"class="fa fa-search" aria-hidden="true"></i>
	
	<label>
		<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER ..." value="
		<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
	</label>
			
	<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	</fieldset>
</form>
