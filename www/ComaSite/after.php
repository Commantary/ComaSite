<!DOCTYPE html>
<html>
<head>
	<title>RitoPommes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
	<style type="text/css">
<<<<<<< HEAD
		
=======
		#mep {
			border: 8px solid;
			border-color: #8A0829;
			background-color: #DF013A;
			margin: auto;
		}
		#mepp {
			font-family: monospace;
			font-weight: bold;
			color: white;
			font-size: 32px;
			text-align: center;
		}
		#div1 {
			border-top: 8px solid;
			border-right: 8px solid;
			border-bottom: 8px solid;
			border-left: 8px solid;
			border-color: #E6E6E6;
			width: 50%;
			height: 500px;
			margin: auto;
			background-color: #BDBDBD;
		}
		#header {
		position: relative;
		width: 500px;
		margin: 0 auto;
			margin-top: 0px;
			margin-right: auto;
			margin-bottom: 0px;
			margin-left: auto;
		padding: 20px 0 0 0;
			padding-top: 10px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}
		body {
			background-color: #424242;
		}
		#p1 {
			color: #585858;
			text-align: center;
			line-height: 250px;
			font-family: sans-serif;
		}
		#img {
    		display: block;
    		margin: auto;
    		vertical-align: center;
    		line-height: 10px;
		}
		#summonerName {
			color: #242929;
			font-size: 20px;
			font-family: sans-serif;
		}
		#div2 {
			display: inline-block;
			width: 100px;
			padding-left: 30px;
			vertical-align: top;
		}
		#p2 {
			text-align: center;
		}
		#profileIcon {
			position: relative;
		}
		#img {
    	display: block;
    	width: 100px;
   	 	height: 100px;
		}
		#infoRank {
			display: table-cell;
			vertical-align: middle;
			width: 135px;
			height: 116px;
			text-align: center;
			background-color: #EAE5E5;

				border-top: 1px solid #9E9A9A;
				border-bottom: 1px solid #9E9A9A;
				border-right: 1px solid #9E9A9A;
				border-left: 1px solid #9E9A9A;
		}
		#level {
    	position: absolute;
    	top: 100%;
    	left: 50%;
    	margin-top: -14px;
    	margin-left: -22px;
    	width: 44px;
    	height: 24px;
    	padding-top: 3px;
    	box-sizing: border-box;
    	background: url('http://comasite-1.herokuapp.com/RiotGAMES/levelbox.png');
        background-size: auto auto;
    	background-size: 100%;
    	line-height: 17px;
    	font-family: Helvetica,AppleSDGothic,"Apple SD Gothic Neo",AppleGothic,Arial,Tahoma;
    	font-size: 14px;
    	text-align: center;
    	color: #eabd56;
		}

		#rankInfo {
			display: flex; /* contexte sur le parent */
  			flex-direction: column; /* direction d'affichage verticale */
 			justify-content: center; /* alignement vertical */
		}

		#TierRank {
			color: #412D2D;
			font-size: 15px;
		}
		
		#teste {
			
		}
>>>>>>> master
	</style>
<body>


<div id="mep">
	<p id="mepp">INFORMATIONS A PROPOS D'UN COMPTE LEAGUE OF LEGENDS</p>
<<<<<<< HEAD
	<span id="status"></span>
=======
	<p id="status"></p>
>>>>>>> master
</div>

<div id="div1">

	<div id="header">

		<div id="div2">

			<div id="profileIcon">
				<img id="img" src="" alt="image profile" height="80">
				<span id="level" title=""></span>
			</div>
			<span id="p2"></span>
		</div>

		<div id="infos">
			<p id="summonerName">&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $_POST['pseudo']; ?></strong></p>
			<hr noshade size=3 width=176 align=left>
<<<<<<< HEAD
			
=======

>>>>>>> master
			<div id="infoRank">

				<div id="rankImg">
					<img id="imgRank" src="" width="176">
				</div>
				
				<div id="rankInfo">
					<div id="TierRank">
						<span id="tierRank"></span>
					</div>
				</div>
<<<<<<< HEAD
			</div>
=======
				
			</div>
			
>>>>>>> master
		</div>
		
	</div>

</div>

<script>
			var api_key = "RGAPI-1c869ecf-112f-4871-9686-7e4fadf78d62";
			var cors_url = "https://cors-anywhere.herokuapp.com/";
			var name = "<?php echo $_POST['pseudo']; ?>";
		  $.get(cors_url + "https://euw1.api.riotgames.com/lol/summoner/v3/summoners/by-name/" + name + "?api_key=" + api_key, function(data, textStatus, jqXHR) {
<<<<<<< HEAD
		  	
=======

>>>>>>> master
		  		var lvl = data.summonerLevel;
		  		var iconId = data.profileIconId;
		  		var accId = data.id;
				$('#level').text(data.summonerLevel)

					let image = document.getElementById("img")
					image.src="http://opgg-static.akamaized.net/images/profile_icons/profileIcon" + iconId + ".jpg"

<<<<<<< HEAD
					


=======
>>>>>>> master
				<!-- Url pour le rank -->
				$.get(cors_url + "https://euw1.api.riotgames.com/lol/league/v3/leagues/by-summoner/" + accId + "?api_key=" + api_key, function(data, textStatus, jqXHR) {
						if(data[0]==undefined) {
							let imgRank = document.getElementById("imgRank")
							imgRank.src="http://opgg-static.akamaized.net/images/medals/default.png"

							$('#tierRank').text("unranked")
						} else {
							var indexRankingSD = data[0]
                            var soloRankDivisionSD = indexRankingSD.entries.find(post => post.playerOrTeamId === '' + accId + '')

							if(soloRankDivisionSD.rank==="V") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 5"
								$('#tierRank').text($('#tierRank').text() + "" + rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
<<<<<<< HEAD
								let soloRankLPSD = soloRankDivisionSD.leaguePoints
=======
>>>>>>> master
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_5.png"


							} else if (soloRankDivisionSD.rank==="IV") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 4"
								$('#tierRank').text($('#tierRank').text() + "" + rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
<<<<<<< HEAD
								let soloRankLPSD = soloRankDivisionSD.leaguePoints
=======
>>>>>>> master
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_4.png"


							} else if (soloRankDivisionSD.rank==="III") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 3"
								$('#tierRank').text($('#tierRank').text() + "" + rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
<<<<<<< HEAD
								let soloRankLPSD = soloRankDivisionSD.leaguePoints
=======
>>>>>>> master
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_3.png"


							} else if (soloRankDivisionSD.rank==="II") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 2"
								$('#tierRank').text($('#tierRank').text() + "" + rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
<<<<<<< HEAD
								let soloRankLPSD = soloRankDivisionSD.leaguePoints
=======
>>>>>>> master
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_2.png"


							} else if (soloRankDivisionSD.rank==="I") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 1"
								$('#tierRank').text($('#tierRank').text() + "" + rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
<<<<<<< HEAD
								let soloRankLPSD = soloRankDivisionSD.leaguePoints
=======
>>>>>>> master
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_1.png"


							}
						}
						
				})
				
			});
		</script>
</body>

</html>
