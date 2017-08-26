 <v-footer class="Footer Footer--main u--posRelative">
 	<v-container class="Container u--flex u--flexJustifyContentSpaceBetween">
 		<div>
 			<div class="copyright">Copyright © 2017 TravelShare. All rechten voorbehouden.</div>
 		</div>

 		<v-ul class="List--footer-nav u--flex u--flexWrap">
 			<v-li><a href="{{ url('/') }}" class="u--linkClean">Home</a></v-li>
 			<v-li><a href="{{ url('disclaimer') }}" class="u--linkClean">Gebruikersvoorwaarden</a></v-li>
 			<v-li><a href="{{ url('report') }}" class="u--linkClean">Schadeclaim</a></v-li>
 			<v-li><a href="{{ url('contact') }}" class="u--linkClean">Contact</a></v-li>
 		</v-ul>
 	</v-container>
 </v-footer>