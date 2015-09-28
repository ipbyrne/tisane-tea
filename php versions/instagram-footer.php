<div id="instagram">
	<div id="instafeed">
		<!-- Instagram Pics Here -->
	</div>
	<script type="text/javascript">
		var feed = new Instafeed({
			get: 'user',
			userId: 806978688,
			limit: 7,
			sortBy: 'most-recent',
			accessToken: '806978688.467ede5.f077f17b8f7a47c8a6914316b0822f62',
			template: '<div id="pic"><img class="insta-pic" src="{{image}}"/></div>'

		});
		feed.run();
	</script>
</div>