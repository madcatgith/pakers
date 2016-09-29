<div class="callback-slider" style="float: right; width: 50%;">
	<div>
		<div class="content-grid__main">
			<div class="b-catalog column" style="margin: 1%;">
				<div class="container">
					<div class="content content-grid">
						{assign var="counter" value="100"}
						{foreach from=$contents key=k item=content}
							{if $k != 0 and $k % 4 == 0}
								{*$counter = 100*}
								</div></div></div></div></div>
								<div>
									<div class="content-grid__main">
										<div class="b-catalog column" style="margin: 1%;">
											<div class="container">
												<div class="content content-grid">
							{/if}
							<a href="{$content.another_page}">
								<div class="b-catalog__item column-2 wow fadeInRight" data-wow-duration="800ms"
										 data-wow-delay="{$counter}ms">
									{$counter = $counter + 300}
									<div class="img-wrap">
										<img class="responsive" src="/image.php?{Image::mEncrypt('width=200&height=200&src='|cat:$content.imgurl)}" alt="catalog"/>
									</div>
									<a class="more-link" href="{$content.another_page}"><span>{$content.title}</span></a>
								</div>
							</a>
						{/foreach}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style scoped>
	.content-grid__main {
		width: 100%;
		float: none;
	}
	.slick-prev, .slick-next {
		display: block;
		position: relative;
		top: 270px;
		background: #fde428;
		color: #000;
		height: 10px;
		border: none;
		text-align: center;
		float: left;
		margin-left: 2rem;
		font-size: 0;
		padding: 15px;
		background: url('../../images/prev.jpg');
	}
	.slick-next {
		top: -285px;
		left: 540px;
		background: url('../../images/next.jpg');
	}
</style>
{literal}
	<script type="text/javascript">
		$(document).ready(function(){
			$('.callback-slider').slick();
		});
	</script>
{/literal}