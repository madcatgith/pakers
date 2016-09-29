<div class="container container-main">
	<div class="mycontacts">
		<h1 class="section-title">Контакты</h1>
		{Content::getBody(Lang::getID(), 8)}
	</div>
	<div class="mymap">
		<div>
			<strong>Карта проезда</strong>
			<br />
			<br />
			Чтобы перемещаться по карте, нажмите и удерживайте левую кнопку мыши
		</div>
		<p><iframe id="map" width="100%" height="450" frameborder="0"></iframe></p>
		<p><noframes> Наше местонахождение на карте</noframes></p>
	</div>
</div>
<div class="container">
	<div class="content content-grid">
		<section class="section-callback">
			{Controller::run('forms/index')}
			<a name="order"></a>
		</section>
	</div>
</div>