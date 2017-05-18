<div class="TreeView TreeView--user-actions">
	<h3>MENU</h3>
	<ul>
		<li><div class="u--posRelative">Profiel</div>
			<ul>
				<li><a class="u--linkClean u--block" href="{{ url('profile/my-items') }}">Mijn spullen</a></li>
				<li><a class="u--linkClean u--block" href="{{ url('profile/details') }}">Gegevens</a></li>
			</ul>
		</li>
		<li><div class="u--posRelative">Transacties</div>
			<ul>
				<li><a class="u--linkClean u--block" href="{{ url('transactions/ongoing') }}">Lopend</a></li>
				<li><a class="u--linkClean u--block" href="{{ url('transactions/history') }}">Geschiedenis</a></li>
			</ul>
		</li>
		<li><div class="u--posRelative">Verzoeken</div>
			<ul>
			<li><a class="u--linkClean u--block" href="{{ url('requests/incoming') }}">Inkomend</a></li>
				<li><a class="u--linkClean u--block" href="{{ url('requests/outgoing') }}">Uitgaand</a></li>
			</ul>
		</li>
	</ul>
</div>
