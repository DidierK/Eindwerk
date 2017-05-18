<div class="TreeView TreeView--user-actions">
	<h3>MENU</h3>
	<ul>
		<li><div class="u--posRelative">Profiel</div>
			<ul>
				<li><a class="u--linkClean u--block" href="{{ url('profile/my-items') }}">Mijn spullen</a></li>
				<li><a class="u--linkClean u--block" href="#">Gegevens</a></li>
			</ul>
		</li>
		<li><div class="u--posRelative">Transacties</div>
			<ul>
				<li><a class="u--linkClean u--block" href="#">Lopend</a></li>
				<li><a class="u--linkClean u--block" href="#">Geschiedenis</a></li>
			</ul>
		</li>
		<li><div class="u--posRelative">Verzoeken</div>
			<ul>
			<li><a class="u--linkClean u--block" href="{{ url('requests/incoming') }}">Inkomend</a></li>
				<li><a class="u--linkClean u--block" href="#">Uitgaand</a></li>
			</ul>
		</li>
	</ul>
</div>
