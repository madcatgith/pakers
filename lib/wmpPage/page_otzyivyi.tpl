<div class="container container-main">
	<!--<style scoped>
		@media(min-width: 980px) {
			.content-grid__main {
				float: right;
				width: 40%;
			}
		}
	</style>-->
	{Content::upContentList(Lang::getID(), 5, '', 0, 24, true, '', 'otz')}
	<section class="section-callback">
		{Controller::run('forms/feedback')}
	</section>
</div>