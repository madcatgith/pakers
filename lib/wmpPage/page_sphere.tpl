<div class="container">
    <div class="content content-grid">
	<style scoped>
		*{
			padding: 2px;
		}
		h1, h2, h3, h4, h5, h6 {
			margin: 2% 0;
			font-weight: 500;
			font-size: 150%;
		}
		ul, ol {
			list-style: disc;
			padding: 0 2%;
		}
		a:hover {
			color: red;
		}
	</style>
	{Content::getBody(Lang::getID(), Url::get('menuID'))}

    </div>
</div>        