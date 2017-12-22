<!DOCTYPE html>
<html>
<head>
	<title>RitoPommes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
	#level {
		background: url("./levelbox.png");
	}
</style>
<body>


<div id="mep">
	<p id="mepp">INFORMATIONS A PROPOS D'UN COMPTE LEAGUE OF LEGENDS</p>
	<span id="status"></span>
</div>

<div id="div1">

	<div id="header">

		<div id="div2">

			
			<span id="p2"></span>
		</div>

		

		<div id="box">
			<br>
			<div id="profileIcon">
				<img id="img" src="" alt="image profile" height="80">
				<span id="level" title=""></span>
			</div>
			<br>
			<div id="imgDiv">
				<img src="./silver.png" id="imgRank">
			</div>

			<div id="TierRankInfo">
				<div id="TierRank">
					<span id="tierRank"></span>

					<div id="TierInfo">
						<span id="LeaguePoints"></span>
					
						<span id="backslash"></span>
						<br>
					<span id="WinLose">
						<span id="wins"></span>
						<span id="losses"></span>
						<br>
						<span id="winratio"></span>
					</span>
					</div>
				</div>
			
			<div id="LeagueName"></div>
			</div>
		</div>


	</div>

</div>

<script>
			var api_key = "RGAPI-1c869ecf-112f-4871-9686-7e4fadf78d62";
			var cors_url = "https://cors-anywhere.herokuapp.com/";
			var name = "<?php echo $_POST['pseudo']; ?>";
		  $.get(cors_url + "https://euw1.api.riotgames.com/lol/summoner/v3/summoners/by-name/" + name + "?api_key=" + api_key, function(data, textStatus, jqXHR) {
		  	
		  		var lvl = data.summonerLevel;
		  		var iconId = data.profileIconId;
		  		var accId = data.id;
				$('#level').text(data.summonerLevel)

					let image = document.getElementById("img")
					image.src="http://opgg-static.akamaized.net/images/profile_icons/profileIcon" + iconId + ".jpg"

					


				<!-- Url pour le rank -->
				$.get(cors_url + "https://euw1.api.riotgames.com/lol/league/v3/leagues/by-summoner/" + accId + "?api_key=" + api_key, function(data, textStatus, jqXHR) {
					
						if(data[0]==undefined) {
							let imgRank = document.getElementById("imgRank")
							imgRank.src="http://opgg-static.akamaized.net/images/medals/default.png"

							
							$('#backslash').text("Unranked")
						} else {
							var indexRankingSD = data[0]
                            var soloRankDivisionSD = indexRankingSD.entries.find(post => post.playerOrTeamId === '' + accId + '')
                            let soloRankNameSD = data[0].name

							if(soloRankDivisionSD.rank==="V") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 5"
								$('#tierRank').text(rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_5.png"


							} else if (soloRankDivisionSD.rank==="IV") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 4"
								$('#tierRank').text(rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_4.png"


							} else if (soloRankDivisionSD.rank==="III") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 3"
								$('#tierRank').text(rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_3.png"


							} else if (soloRankDivisionSD.rank==="II") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 2"
								$('#tierRank').text(rankDivisionName)
								let imgRank = document.getElementById("imgRank")
								let str = data[0].tier
								let rank = str.toLowerCase()

								imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_2.png"


							} else if (soloRankDivisionSD.rank==="I") {
								let tier = data[0].tier
								let rankDivArr = tier.split('')
								let rankDivisionName = tier.substr(0, 1) + "" + tier.substr(1, 16).toLowerCase() + " 1"
								$('#tierRank').text(tier)
								let soloRankNameSD = data[0].name
									let imgRank = document.getElementById("imgRank")
									let str = data[0].tier
									let rank = str.toLowerCase()
									imgRank.src="http://opgg-static.akamaized.net/images/medals/" + rank + "_1.png"

								if(tier==="CHALLENGER") {
									$('#tierRank').text("Challenger")
								}

								if(tier==="MASTER") {
									$('#tierRank').text("Master")
								}

									

								
							}
						}

						let soloRankLP = soloRankDivisionSD.leaguePoints
						let soloRankWinsSD = soloRankDivisionSD.wins
                        let soloRankLossesSD = soloRankDivisionSD.losses

						$('#LeaguePoints').text(soloRankLP + " LP")
						$('#wins').text(soloRankWinsSD + "V")
						$('#losses').text(soloRankLossesSD + "D")
						$('#LeagueName').text(soloRankNameSD)
						$('#backslash').texte("/")
						
						
				})
				
			});
		</script>
</body>

</html>