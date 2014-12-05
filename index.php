<!DOCTYPE html>
<html>
<head>
<title>&Uuml;NE - Universal NPC Emulator</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<script type="text/javascript">
<!--
$(document).bind("pageinit",function(){
	$('#generate').on('click', function() {
		if ($('#demeanor').val() == 'random') {
			var roll = Math.floor(Math.random()*8) + 1;
			if (roll == 1) $('#demeanor').val('scheming').change();
			else if (roll == 2) $('#demeanor').val('insane').change();
			else if (roll == 3) $('#demeanor').val('friendly').change();
			else if (roll == 4) $('#demeanor').val('hostile').change();
			else if (roll == 5) $('#demeanor').val('inquisitive').change();
			else if (roll == 6) $('#demeanor').val('knowing').change();
			else if (roll == 7) $('#demeanor').val('mysterious').change();
			else $('#demeanor').val('prejudiced').change();
		}
			
		var modifiers = new Array(
			'superfluous',
			'inept',
			'pleasant',
			'lethargic',
			'jovial',
			'addicted',
			'banal',
			'insensitive',
			'defiant',
			'shrewd',
			'conformist',
			'logical',
			'titled',
			'obnoxious',
			'liberal',
			'nefarious',
			'subtle',
			'inexperienced',
			'insightful',
			'compliant',
			'sensible',
			'reputable',
			'prying',
			'tactless',
			'destitute',
			'untrained',
			'wicked',
			'oblivious',
			'fanatic',
			'conniving',
			'romantic',
			'lazy',
			'refined',
			'plebeian',
			'careful',
			'unreasonable',
			'pessimistic',
			'indispensable',
			'childish',
			'alluring',
			'skilled',
			'solemn',
			'scholarly',
			'pious',
			'defective',
			'neglectful',
			'habitual',
			'conservative',
			'uneducated',
			'optimistic',
			'lively',
			'meek',
			'uncouth',
			'inconsiderate',
			'affluent',
			'forthright',
			'helpful',
			'willful',
			'cultured',
			'despondent',
			'idealistic',
			'unconcerned',
			'indifferent',
			'revolting',
			'mindless',
			'unsupportive',
			'generous',
			'fickle',
			'curious',
			'passionate',
			'rational',
			'docile',
			'elderly',
			'touchy',
			'devoted',
			'coarse',
			'cheery',
			'sinful',
			'needy',
			'established',
			'foolish',
			'pragmatic',
			'naive',
			'dignified',
			'unseemly',
			'cunning',
			'serene',
			'privileged',
			'pushy',
			'dependable',
			'delightful',
			'thoughtful',
			'glum',
			'kind',
			'righteous',
			'miserly',
			'hopeless',
			'likable',
			'corrupt',
			'confident'
			);

	var nouns = new Array(
			'nomad',
			'missionary',
			'villager',
			'mediator',
			'performer',
			'witch',
			'outcast',
			'magus',
			'crook',
			'magister',
			'merchant',
			'mercenary',
			'conscript',
			'civilian',
			'serf',
			'expert',
			'caretaker',
			'worker',
			'activist',
			'brute',
			'commoner',
			'hermit',
			'actor',
			'hero',
			'inquisitor',
			'judge',
			'orator',
			'herald',
			'champion',
			'lord',
			'ranger',
			'chieftain',
			'highwayman',
			'cleric',
			'villain',
			'occultist',
			'pioneer',
			'fortune-hunter',
			'slave',
			'professor',
			'reverend',
			'burglar',
			'governor',
			'gunman',
			'servant',
			'thug',
			'vicar',
			'scrapper',
			'clairvoyant',
			'charmer',
			'drifter',
			'officer',
			'monk',
			'patriarch',
			'globetrotter',
			'journeyman',
			'explorer',
			'homemaker',
			'shopkeeper',
			'sniper',
			'statesman',
			'warden',
			'recluse',
			'crone',
			'courtier',
			'astrologer',
			'outlaw',
			'steward',
			'adventurer',
			'priest',
			'duelist',
			'adept',
			'polymath',
			'soldier',
			'tradesman',
			'jack-of-all-trades',
			'bum',
			'magician',
			'entertainer',
			'hitman',
			'aristocrat',
			'sorcerer',
			'traveler',
			'craftsman',
			'wizard',
			'preacher',
			'laborer',
			'vagrant',
			'scientist',
			'beggar',
			'artisan',
			'master',
			'apprentice',
			'ascetic',
			'tradesman',
			'rogue',
			'ascendant',
			'politician',
			'superior',
			'warrior'
			);

		var motivationverbs = new Array(
			'advise',
			'shepherd',
			'take',
			'work',
			'manage',
			'obtain',
			'abuse',
			'discover',
			'accompany',
			'suppress',
			'attempt',
			'indulge',
			'deter',
			'offend',
			'proclaim',
			'spoil',
			'chronicle',
			'acquire',
			'guide',
			'operate',
			'oppress',
			'fulfill',
			'damage',
			'learn',
			'access',
			'interact',
			'drive',
			'publicize',
			'persecute',
			'refine',
			'create',
			'review',
			'burden',
			'communicate',
			'compose',
			'abduct',
			'aid',
			'advocate',
			'process',
			'undermine',
			'promote',
			'follow',
			'implement',
			'report',
			'explain',
			'conceive',
			'advance',
			'understand',
			'develop',
			'discourage',
			'blight',
			'guard',
			'collaborate',
			'steal',
			'attend',
			'progress',
			'conquer',
			'strive',
			'suggest',
			'detect',
			'distress',
			'hinder',
			'complete',
			'weaken',
			'execute',
			'possess',
			'plunder',
			'compel',
			'achieve',
			'maintain',
			'record',
			'construct',
			'join',
			'secure',
			'realize',
			'embrace',
			'encourage',
			'assist',
			'inform',
			'convey',
			'contact',
			'agonize',
			'defile',
			'patronize',
			'rob',
			'pursue',
			'comprehend',
			'produce',
			'depress',
			'establish',
			'associate',
			'administer',
			'institute',
			'determine',
			'overthrow',
			'prepare',
			'relate',
			'account',
			'seek',
			'support'
		);

		var motivationnouns = new Array(
			'wealth',
			'the wealthy',
			'dreams',
			'gluttony',
			'advice',
			'hardship',
			'the populous',
			'discretion',
			'lust',
			'propaganda',
			'affluence',
			'enemies',
			'love',
			'envy',
			'science',
			'resources',
			'the public',
			'freedom',
			'greed',
			'knowledge',
			'prosperity',
			'religion',
			'pain',
			'laziness',
			'communications',
			'poverty',
			'the poor',
			'faith',
			'wrath',
			'lies',
			'opulence',
			'family',
			'slavery',
			'pride',
			'myths',
			'deprivation',
			'the elite',
			'enlightenment',
			'purity',
			'riddles',
			'success',
			'academia',
			'racism',
			'moderation',
			'stories',
			'distress',
			'the forsaken',
			'sensuality',
			'vigilance',
			'legends',
			'contraband',
			'the law',
			'dissonance',
			'zeal',
			'industry',
			'music',
			'the government',
			'peace',
			'composure',
			'new',
			'religions',
			'literature',
			'the downtrodden',
			'discrimination',
			'charity',
			'progress',
			'technology',
			'friends',
			'disbelief',
			'modesty',
			'animals',
			'alcohol',
			'criminals',
			'pleasure',
			'atrocities',
			'ghosts',
			'medicines',
			'allies',
			'hate',
			'cowardice',
			'magic',
			'beauty',
			'secret',
			'societies',
			'happiness',
			'narcissism',
			'nature',
			'strength',
			'the world',
			'servitude',
			'compassion',
			'old',
			'religions',
			'intelligence',
			'military',
			'harmony',
			'valor',
			'expertise',
			'force',
			'the church',
			'justice',
			'patience',
			'spirits' 
		);

		var modifier = modifiers[Math.floor(Math.random()*modifiers.length)];
		var noun = nouns[Math.floor(Math.random()*nouns.length)];

		var motivation = new Array();
		for (var i = 0; i < 3; i++) {
			motivation[i] = motivationverbs[Math.floor(Math.random()*motivationverbs.length)] + ' ' + motivationnouns[Math.floor(Math.random()*motivationnouns.length)];
		}

		var roll = Math.floor(Math.random()*100) + 1;
		var powerlevel;
		switch($("input[name='rlevel']:checked").val()) {
			case '1':
				if (roll < 3) powerlevel = 'much weaker than party';
				else if (roll < 11) powerlevel = 'slightly weaker than party';
				else if (roll < 91) powerlevel = 'comparable level to party';
				else if (roll < 99) powerlevel = 'slightly stronger than party';
				else powerlevel = 'much stronger than party';
				break;

			case '2':
				if (roll < 5) powerlevel = 'much weaker than party';
				else if (roll < 16) powerlevel = 'slightly weaker than party';
				else if (roll < 86) powerlevel = 'comparable level to party';
				else if (roll < 97) powerlevel = 'slightly stronger than party';
				else powerlevel = 'much stronger than party';
				break;

			case '3':
				if (roll < 6) powerlevel = 'much weaker than party';
				else if (roll < 21) powerlevel = 'slightly weaker than party';
				else if (roll < 81) powerlevel = 'comparable level to party';
				else if (roll < 96) powerlevel = 'slightly stronger than party';
				else powerlevel = 'much stronger than party';
				break;

			case '4':
				if (roll < 9) powerlevel = 'much weaker than party';
				else if (roll < 26) powerlevel = 'slightly weaker than party';
				else if (roll < 76) powerlevel = 'comparable level to party';
				else if (roll < 93) powerlevel = 'slightly stronger than party';
				else powerlevel = 'much stronger than party';
				break;

			case '5':
				if (roll < 13) powerlevel = 'much weaker than party';
				else if (roll < 31) powerlevel = 'slightly weaker than party';
				else if (roll < 71) powerlevel = 'comparable level to party';
				else if (roll < 89) powerlevel = 'slightly stronger than party';
				else powerlevel = 'much stronger than party';
				break;
		}


		$('.npc').remove(); // so you can refresh
		$('.response').remove();
		$('.discussion').remove();

		var npc = document.createElement('div');
		$(npc).addClass('npc');
		var html = '<div class="ui-corner-all">' +
'<div class="ui-bar ui-bar-a">' +
'<h2>Generated NPC</h2>' +
'</div>' +
'<div class="ui-body ui-body-a">' +
'<ul data-role="listview" data-inset="true">' + 
'<li>' + modifier + ' ' + noun + '</li>' + 
'<li>' + powerlevel + '</li>' + 
'<li>wants to ' + motivation[0] + '</li>' + 
'<li>wants to ' + motivation[1] + '</li>' + 
'<li>wants to ' + motivation[2] + '</li>' + 
'</ul>' + 
'<button data-inline="true" id="moodmodule">determine mood</button>' + 
'<button data-inline="true" id="importancemodule">generate discussion topic</button>' + 
'<div id="mood"></div>' +
/*
'<h2>Ask yes/no question</h2>' + 
'<form>' + 
'<div class="ui-field-contain">' + 
'<label for="relationship" class="select">NPC relationship</label>' + 
'<select name="relationship" id="relationship" data-inline="true">' + 
'<option value="loved">loved</option>' + 
'<option value="friendly">friendly</option>' + 
'<option value="peaceful">peaceful</option>' + 
'<option value="neutral" selected="selected">neutral</option>' + 
'<option value="distrustful">distrustful</option>' + 
'<option value="hostile">hostile</option>' + 
'<option value="hated">hated</option>' + 
'</select>' + 
'</div>' + 
'<div class="ui-field-contain">' + 
'<label for="mood">conversation mood</label>' + 
'<select name="mood" id="mood" data-inline="true">' + 
'<option value="withdrawn">withdrawn</option>' + 
'<option value="guarded">guarded</option>' + 
'<option value="cautious">cautious</option>' + 
'<option value="neutral" selected="selected">neutral</option>' + 
'<option value="sociable">sociable</option>' + 
'<option value="helpful">helpful</option>' + 
'<option value="forthcoming">forthcoming</option>' + 
'</select>  </div>' + 
'<input type="button" data-inline="true" id="responsemodule" value="ask">' + 
'</form>' + 
*/
'<div id="response"></div>' + 
'<div id="importance"></div>' +
'</div>' +
'</div>';

		$(npc).html(html);
		$(npc).appendTo('#npc').trigger('create');


		$('#moodmodule').on('click',function(){
			var roll = Math.floor(Math.random()*100) + 1;

			var text;
			switch ($('#relationship').val()) {
				case 'loved':
					if (roll < 2) text = 'withdrawn';
					else if (roll < 7) text = 'guarded';
					else if (roll < 17) text = 'cautious';
					else if (roll < 32) text = 'neutral';
					else if (roll < 71) text = 'sociable';
					else if (roll < 86) text = 'helpful';
					else text = 'forthcoming';
					break;

				case 'friendly':
					if (roll < 3) text = 'withdrawn';
					else if (roll < 9) text = 'guarded';
					else if (roll < 21) text = 'cautious';
					else if (roll < 41) text = 'neutral';
					else if (roll < 77) text = 'sociable';
					else if (roll < 90) text = 'helpful';
					else text = 'forthcoming';
					break;

				case 'peaceful':
					if (roll < 4) text = 'withdrawn';
					else if (roll < 12) text = 'guarded';
					else if (roll < 26) text = 'cautious';
					else if (roll < 56) text = 'neutral';
					else if (roll < 83) text = 'sociable';
					else if (roll < 94) text = 'helpful';
					else text = 'forthcoming';
					break;

				case 'neutral':
					if (roll < 6) text = 'withdrawn';
					else if (roll < 16) text = 'guarded';
					else if (roll < 31) text = 'cautious';
					else if (roll < 71) text = 'neutral';
					else if (roll < 87) text = 'sociable';
					else if (roll < 96) text = 'helpful';
					else text = 'forthcoming';
					break;

				case 'distrustful':
					if (roll < 8) text = 'withdrawn';
					else if (roll < 19) text = 'guarded';
					else if (roll < 47) text = 'cautious';
					else if (roll < 77) text = 'neutral';
					else if (roll < 91) text = 'sociable';
					else if (roll < 98) text = 'helpful';
					else text = 'forthcoming';
					break;

				case 'hostile':
					if (roll < 12) text = 'withdrawn';
					else if (roll < 25) text = 'guarded';
					else if (roll < 62) text = 'cautious';
					else if (roll < 82) text = 'neutral';
					else if (roll < 94) text = 'sociable';
					else if (roll < 99) text = 'helpful';
					else text = 'forthcoming';
					break;

				case 'loved':
					if (roll < 16) text = 'withdrawn';
					else if (roll < 31) text = 'guarded';
					else if (roll < 70) text = 'cautious';
					else if (roll < 85) text = 'neutral';
					else if (roll < 95) text = 'sociable';
					else if (roll < 100) text = 'helpful';
					else text = 'forthcoming';
					break;

			}
			$('.mood').remove();
			var response = document.createElement('div');
			$(response).addClass('mood');
			$(response).html('<p>feeling ' + text + '</p>');
			$(response).appendTo('#mood').trigger('create');
		});

		// currently not functional or able to be called
		$('#responsemodule').on('click',function(){
			var roll = Math.floor(Math.random()*100) + 1;

			var text;
			switch ($('#relationship').val()) {
				case 'loved':
					switch ($('#mood').val()) {
						case 'withdrawn':
							if (roll < 6) text = 'strong yes';
							else if (roll < 31) text = 'yes';
							else if (roll < 88) text = 'no';
							else text = 'strong no';
							break;

						case 'guarded':
							if (roll < 10) text = 'strong yes';
							else if (roll < 46) text = 'yes';
							else if (roll < 91) text = 'no';
							else text = 'strong no';
							break;

						case 'cautious':
							if (roll < 13) text = 'strong yes';
							else if (roll < 61) text = 'yes';
							else if (roll < 94) text = 'no';
							else text = 'strong no';
							break;

						case 'neutral':
							if (roll < 16) text = 'strong yes';
							else if (roll < 76) text = 'yes';
							else if (roll < 96) text = 'no';
							else text = 'strong no';
							break;

						case 'sociable':
							if (roll < 19) text = 'strong yes';
							else if (roll < 82) text = 'yes';
							else if (roll < 97) text = 'no';
							else text = 'strong no';
							break;

						case 'helpful':
							if (roll < 22) text = 'strong yes';
							else if (roll < 89) text = 'yes';
							else if (roll < 98) text = 'no';
							else text = 'strong no';
							break;

						case 'forthcoming':
							if (roll < 26) text = 'strong yes';
							else if (roll < 96) text = 'yes';
							else if (roll < 100) text = 'no';
							else text = 'strong no';
							break;

					}
					break;

				case 'friendly':
					switch ($('#mood').val()) {
						case 'withdrawn':
							if (roll < 5) text = 'strong yes';
							else if (roll < 26) text = 'yes';
							else if (roll < 86) text = 'no';
							else text = 'strong no';
							break;

						case 'guarded':
							if (roll < 9) text = 'strong yes';
							else if (roll < 39) text = 'yes';
							else if (roll < 89) text = 'no';
							else text = 'strong no';
							break;

						case 'cautious':
							if (roll < 11) text = 'strong yes';
							else if (roll < 52) text = 'yes';
							else if (roll < 92) text = 'no';
							else text = 'strong no';
							break;

						case 'neutral':
							if (roll < 14) text = 'strong yes';
							else if (roll < 65) text = 'yes';
							else if (roll < 94) text = 'no';
							else text = 'strong no';
							break;

						case 'sociable':
							if (roll < 17) text = 'strong yes';
							else if (roll < 74) text = 'yes';
							else if (roll < 95) text = 'no';
							else text = 'strong no';
							break;

						case 'helpful':
							if (roll < 20) text = 'strong yes';
							else if (roll < 83) text = 'yes';
							else if (roll < 97) text = 'no';
							else text = 'strong no';
							break;

						case 'forthcoming':
							if (roll < 24) text = 'strong yes';
							else if (roll < 92) text = 'yes';
							else if (roll < 99) text = 'no';
							else text = 'strong no';
							break;

					}
					break;

				case 'peaceful':
					switch ($('#mood').val()) {
						case 'withdrawn':
							if (roll < 5) text = 'strong yes';
							else if (roll < 22) text = 'yes';
							else if (roll < 84) text = 'no';
							else text = 'strong no';
							break;

						case 'guarded':
							if (roll < 8) text = 'strong yes';
							else if (roll < 34) text = 'yes';
							else if (roll < 87) text = 'no';
							else text = 'strong no';
							break;

						case 'cautious':
							if (roll < 10) text = 'strong yes';
							else if (roll < 46) text = 'yes';
							else if (roll < 90) text = 'no';
							else text = 'strong no';
							break;

						case 'neutral':
							if (roll < 12) text = 'strong yes';
							else if (roll < 57) text = 'yes';
							else if (roll < 92) text = 'no';
							else text = 'strong no';
							break;

						case 'sociable':
							if (roll < 15) text = 'strong yes';
							else if (roll < 66) text = 'yes';
							else if (roll < 94) text = 'no';
							else text = 'strong no';
							break;

						case 'helpful':
							if (roll < 18) text = 'strong yes';
							else if (roll < 77) text = 'yes';
							else if (roll < 96) text = 'no';
							else text = 'strong no';
							break;

						case 'forthcoming':
							if (roll < 22) text = 'strong yes';
							else if (roll < 88) text = 'yes';
							else if (roll < 99) text = 'no';
							else text = 'strong no';
							break;
					}
					break;

				case 'neutral':
					switch ($('#mood').val()) {
						case 'withdrawn':
							if (roll < 4) text = 'strong yes';
							else if (roll < 18) text = 'yes';
							else if (roll < 82) text = 'no';
							else text = 'strong no';
							break;

						case 'guarded':
							if (roll < 7) text = 'strong yes';
							else if (roll < 29) text = 'yes';
							else if (roll < 85) text = 'no';
							else text = 'strong no';
							break;

						case 'cautious':
							if (roll < 9) text = 'strong yes';
							else if (roll < 40) text = 'yes';
							else if (roll < 88) text = 'no';
							else text = 'strong no';
							break;

						case 'neutral':
							if (roll < 11) text = 'strong yes';
							else if (roll < 51) text = 'yes';
							else if (roll < 91) text = 'no';
							else text = 'strong no';
							break;

						case 'sociable':
							if (roll < 14) text = 'strong yes';
							else if (roll < 62) text = 'yes';
							else if (roll < 93) text = 'no';
							else text = 'strong no';
							break;

						case 'helpful':
							if (roll < 17) text = 'strong yes';
							else if (roll < 73) text = 'yes';
							else if (roll < 95) text = 'no';
							else text = 'strong no';
							break;

						case 'forthcoming':
							if (roll < 20) text = 'strong yes';
							else if (roll < 84) text = 'yes';
							else if (roll < 98) text = 'no';
							else text = 'strong no';
							break;
					}
					break;

				case 'distrustful':
					switch ($('#mood').val()) {
						case 'withdrawn':
							if (roll < 3) text = 'strong yes';
							else if (roll < 14) text = 'yes';
							else if (roll < 80) text = 'no';
							else text = 'strong no';
							break;

						case 'guarded':
							if (roll < 10) text = 'strong yes';
							else if (roll < 46) text = 'yes';
							else if (roll < 91) text = 'no';
							else text = 'strong no';
							break;

						case 'cautious':
							if (roll < 13) text = 'strong yes';
							else if (roll < 61) text = 'yes';
							else if (roll < 94) text = 'no';
							else text = 'strong no';
							break;

						case 'neutral':
							if (roll < 16) text = 'strong yes';
							else if (roll < 76) text = 'yes';
							else if (roll < 96) text = 'no';
							else text = 'strong no';
							break;

						case 'sociable':
							if (roll < 19) text = 'strong yes';
							else if (roll < 82) text = 'yes';
							else if (roll < 97) text = 'no';
							else text = 'strong no';
							break;

						case 'helpful':
							if (roll < 22) text = 'strong yes';
							else if (roll < 89) text = 'yes';
							else if (roll < 98) text = 'no';
							else text = 'strong no';
							break;

						case 'forthcoming':
							if (roll < 26) text = 'strong yes';
							else if (roll < 96) text = 'yes';
							else if (roll < 100) text = 'no';
							else text = 'strong no';
							break;
					}
					break;

/*
				case 'hostile':

				case 'hated':
*/
			}

			$('.response').remove();
			var response = document.createElement('div');
			$(response).addClass('response');
//$(response).html('<p>relationship: ' + $('#relationship').val() + ' / mood: ' + $('#mood').val() + '</p>');
			$(response).html('<p>' + text + '</p>');
			$(response).appendTo('#response').trigger('create');
		});

		$('#importancemodule').on('click',function(){
			var roll;

			var bearing;
			roll = Math.floor(Math.random()*10) + 1;
			switch ($('#demeanor').val()) {
				case 'scheming':
					if (roll == 1) bearing = 'intent';
					else if (roll == 2) bearing = 'bargain';
					else if (roll == 3) bearing = 'means';
					else if (roll == 4) bearing = 'proposition';
					else if (roll == 5) bearing = 'plan';
					else if (roll == 6) bearing = 'compromise';
					else if (roll == 7) bearing = 'agenda';
					else if (roll == 8) bearing = 'arrangement';
					else if (roll == 9) bearing = 'negotiation';
					else bearing = 'plot';
					break;

				case 'insane':
					if (roll == 1) bearing = 'madness';
					else if (roll == 2) bearing = 'fear';
					else if (roll == 3) bearing = 'accident';
					else if (roll == 4) bearing = 'chaos';
					else if (roll == 5) bearing = 'idiocy';
					else if (roll == 6) bearing = 'illusion';
					else if (roll == 7) bearing = 'turmoil';
					else if (roll == 8) bearing = 'confusion';
					else if (roll == 9) bearing = 'facade';
					else bearing = 'bewilderment';
					break;

				case 'friendly':
					if (roll == 1) bearing = 'alliance';
					else if (roll == 2) bearing = 'comfort';
					else if (roll == 3) bearing = 'gratitude';
					else if (roll == 4) bearing = 'shelter';
					else if (roll == 5) bearing = 'happiness';
					else if (roll == 6) bearing = 'support';
					else if (roll == 7) bearing = 'promise';
					else if (roll == 8) bearing = 'delight';
					else if (roll == 9) bearing = 'aid';
					else bearing = 'celebration';
					break;

				case 'hostile':
					if (roll == 1) bearing = 'death';
					else if (roll == 2) bearing = 'capture';
					else if (roll == 3) bearing = 'judgment';
					else if (roll == 4) bearing = 'combat';
					else if (roll == 5) bearing = 'surrender';
					else if (roll == 6) bearing = 'rage';
					else if (roll == 7) bearing = 'resentment';
					else if (roll == 8) bearing = 'submission';
					else if (roll == 9) bearing = 'injury';
					else bearing = 'destruction';
					break;

				case 'inquisitive':
					if (roll == 1) bearing = 'questions';
					else if (roll == 2) bearing = 'investigation';
					else if (roll == 3) bearing = 'interest';
					else if (roll == 4) bearing = 'demand';
					else if (roll == 5) bearing = 'suspicion';
					else if (roll == 6) bearing = 'request';
					else if (roll == 7) bearing = 'curiosity';
					else if (roll == 8) bearing = 'skepticism';
					else if (roll == 9) bearing = 'command';
					else bearing = 'petition';
					break;

				case 'knowing':
					if (roll == 1) bearing = 'report';
					else if (roll == 2) bearing = 'effects';
					else if (roll == 3) bearing = 'examination';
					else if (roll == 4) bearing = 'records';
					else if (roll == 5) bearing = 'account';
					else if (roll == 6) bearing = 'news';
					else if (roll == 7) bearing = 'history';
					else if (roll == 8) bearing = 'telling';
					else if (roll == 9) bearing = 'discourse';
					else bearing = 'speech';
					break;

				case 'mysterious':
					if (roll == 1) bearing = 'rumor';
					else if (roll == 2) bearing = 'uncertainty';
					else if (roll == 3) bearing = 'secrets';
					else if (roll == 4) bearing = 'misdirection';
					else if (roll == 5) bearing = 'whispers';
					else if (roll == 6) bearing = 'lies';
					else if (roll == 7) bearing = 'shadows';
					else if (roll == 8) bearing = 'enigma';
					else if (roll == 9) bearing = 'obscurity';
					else bearing = 'conundrum';
					break;

				case 'prejudiced':
					if (roll == 1) bearing = 'reputation';
					else if (roll == 2) bearing = 'doubt';
					else if (roll == 3) bearing = 'bias';
					else if (roll == 4) bearing = 'dislike';
					else if (roll == 5) bearing = 'partiality';
					else if (roll == 6) bearing = 'belief';
					else if (roll == 7) bearing = 'view';
					else if (roll == 8) bearing = 'discrimination';
					else if (roll == 9) bearing = 'assessment';
					else bearing = 'difference';
					break;

			}

			var focus;
			roll = Math.floor(Math.random()*100) + 1;
			if (roll < 4) focus = 'current scene';
			else if (roll < 7) focus = 'last story';
			else if (roll < 10) focus = 'equipment';
			else if (roll < 13) focus = 'parents';
			else if (roll < 16) focus = 'history';
			else if (roll < 19) focus = 'retainers';
			else if (roll < 22) focus = 'wealth';
			else if (roll < 25) focus = 'relics';
			else if (roll < 28) focus = 'last action';
			else if (roll < 31) focus = 'skills';
			else if (roll < 34) focus = 'superiors';
			else if (roll < 37) focus = 'fame';
			else if (roll < 40) focus = 'campaign';
			else if (roll < 43) focus = 'future action';
			else if (roll < 46) focus = 'friends';
			else if (roll < 49) focus = 'allies';
			else if (roll < 52) focus = 'last scene';
			else if (roll < 55) focus = 'contacts';
			else if (roll < 58) focus = 'flaws';
			else if (roll < 61) focus = 'antagonist';
			else if (roll < 64) focus = 'rewards';
			else if (roll < 67) focus = 'experience';
			else if (roll < 70) focus = 'knowledge';
			else if (roll < 73) focus = 'recent scene';
			else if (roll < 76) focus = 'community';
			else if (roll < 79) focus = 'treasure';
			else if (roll < 82) focus = 'the character';
			else if (roll < 85) focus = 'current story';
			else if (roll < 88) focus = 'family';
			else if (roll < 91) focus = 'power';
			else if (roll < 94) focus = 'weapons';
			else if (roll < 97) focus = 'previous scene';
			else focus = 'enemy';

			$('.importance').remove();
			var importance = document.createElement('div');
			$(importance).addClass('importance');
			$(importance).html('<p>the ' + $('#demeanor').val() + ' NPC speaks of ' + bearing + ' regarding ' + focus + '</p>');
			$(importance).appendTo('#importance').trigger('create');
		});
	});



});
-->
</script>
</head>
<body>
<div data-role="page" id="form">
<div data-role="header"><h1>&Uuml;NE</h1></div>

<div data-role="content">
<form>
<fieldset data-role="controlgroup" data-type="horizontal" class="ui-field-contain">
<legend>Randomness</legend>
<input type="radio" name="rlevel" id="r1" value="1">
<label for="r1">1</label>
<input type="radio" name="rlevel" id="r2" value="2">
<label for="r2">2</label>
<input type="radio" name="rlevel" id="r3" value="3" checked="checked">
<label for="r3">3</label>
<input type="radio" name="rlevel" id="r4" value="4">
<label for="r4">4</label>
<input type="radio" name="rlevel" id="r5" value="5">
<label for="r5">5</label>
</fieldset>

<div class="ui-field-contain"> 
<label for="relationship" class="select">NPC relationship</label> 
<select name="relationship" id="relationship" data-inline="true"> 
<option value="loved">loved</option> 
<option value="friendly">friendly</option> 
<option value="peaceful">peaceful</option> 
<option value="neutral" selected="selected">neutral</option> 
<option value="distrustful">distrustful</option> 
<option value="hostile">hostile</option> 
<option value="hated">hated</option> 
</select> 
</div> 

<div class="ui-field-contain"> 
<label for="demeanor">NPC demeanor</label>  <select name="demeanor" id="demeanor" data-inline="true"> 
<option value="random" selected="selected">random</option> 
<option value="scheming">scheming</option> 
<option value="insane">insane</option> 
<option value="friendly">friendly</option> 
<option value="hostile">hostile</option> 
<option value="inquisitive">inquisitive</option> 
<option value="knowing">knowing</option> 
<option value="mysterious">mysterious</option> 
<option value="prejudiced">prejudiced</option> 
</select> 
</div> 
<input type="button" value="Generate" id="generate">
</form>

<div id="npc"></div>
</div>

<div data-role="footer" data-position="fixed"><h2>All content &copy; <a href="http://conjecturegames.com/une/">Conjecture Games</a></h2></div>
</div>
</body>
</html>
