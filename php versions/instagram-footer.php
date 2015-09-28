<div id="instagram">
	<table width="100%" border="0" cellspacing="10" cellpadding="0">
		<tbody>
			<tr id="instafeed">
				<!-- Instagram Pics Here -->
			</tr>
		</tbody>
	</table>
	<script type="text/javascript">
		var feed = new Instafeed({
			get: 'user',
			userId: 806978688,
			limit: 7,
			sortBy: 'most-recent',
			accessToken: '806978688.467ede5.f077f17b8f7a47c8a6914316b0822f62',
			template: '<td width="14%"><img class="insta-pic" src="{{image}}"/></td>'
		});
		feed.run();
	</script>
</div>