<div class="menu_panel">
	<a href="{{ route('second') }}">
		<div class="backimgs {{ if_route('second') ? 'jiekuanactive' : 'jiekuan'}}">
			<div class="icon"></div>
			<span>为你推荐</span>
		</div>
	</a>
	<a href="{{ route('find') }}">
		<div class="backimgs {{ if_route('find') ? 'findactive' : 'find'}}">
			<div class="icon"></div>
			<span>发现</span>
		</div>
	</a>
	<a href="{{ route('user') }}">
		<div class="backimgs {{ if_route('user') ? 'myactive' : 'my'}}">
			<div class="icon"></div>
			<span>我的</span>
		</div>
	</a>
</div>