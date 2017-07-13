<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*"/>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="pace.css">
    <script data-require="jquery@1.10.1" data-semver="1.10.1" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script data-require="application/javascript" src="javascript.js"></script>
    <script data-require="application/javascript" src="pace.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,200,600,700,900' rel='stylesheet' type='text/css'> 
</head>

<body onLoad="startup()">
  <div class="wrapper">
    <div class="row-2 clearfix">
      <div class="col-1-2">
        <div style="text-align: center; font-size: 60px; color:#9b59b6;" id="date"></div>
      </div>
      <div class="col-1-2">
        <script>
                n =  new Date();
                y = n.getFullYear();
                m = n.getMonth() + 1;
                d = n.getDate();
                document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
        </script>
        <div style="text-align: center; font-size: 60px; color:#9b59b6;" id="Ctime"></div>
      </div>          
    </div>
    <div class="row-4 clearfix">
      <div class="col-1-4">
        <h3>Copenhagen</h3>
        <div class="temp" align="center" id="tempCPH" style="text-align: center; font-size: 30px; color:#e67e22;"></div>
        <p></p>
        <div class="desc" align="center" id="descCPH" ></div>
      </div>
      <div class="col-1-4">
        <h3>Orlando</h3>
        <div class="temp" align="center" id="tempOrlando" style="text-align: center; font-size: 30px; color:#e67e22;"></div>
        <p></p>
        <div class="desc" align="center" id="descOrlando" ></div>
      </div>
      <div class="col-1-4">
        <h3>Outdoor Temperature</h3>
        <div id="FtempC" style="text-align: center; font-size: 50px; color:#3498db; font-weight:100;"></div>
          <div id="FtempF" style="text-align: center; font-size: 50px; color:#3498db; font-weight:100;"></div>
      </div>
      <div class="col-1-4">
        <h3>This weeks TV</h3>
        <div id="calendar"></div>
      </div>
    </div>
    <div class="row-4 clearfix">
      <div class="col-1-4">
        <h2>Track 1</h2>
        <div id="Track1"></div>
      </div>
      <div class="col-1-4">
        <h2>Track 2</h2>
        <div id="Track2"></div>
      </div>
      <div class="col-1-4">
        <h2>Track 12</h2>
        <div id="Track12"></div>
      </div>
      <div class="col-1-4">
        <h2>Track 23 &amp; 24</h2>
        <div id="Track24"></div>
      </div>
    </div>
    <div class="row-8 clearfix">
      <div class="col-1-8">
        <h3>Currency</h3>
        <p style="text-align: center">1 DKK equals: </p>
        <div id="CurrU" style="text-align: center; font-size: 20px; color:#2ecc71; font-weight:100;"></div>
        <div id="CurrE" style="text-align: center; font-size: 20px; color:#2ecc71; font-weight:100;"></div>
        <div id="CurrS" style="text-align: center; font-size: 20px; color:#2ecc71; font-weight:100;"></div>
        <div id="CurrG" style="text-align: center; font-size: 20px; color:#2ecc71; font-weight:100;"></div>
      </div>
      <div class="col-1-8">
        <h3><span style="color: #2980b9;"> ~ </span> <span style="color: #9b59b6;">❯</span> [<span style="color: #27ae60;font-weight: bold;">Reddit</span>]<span style="color: #9b59b6;">:</span> ls</h3>
        <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://reddit.com">/r/</a>
        <div></div>
        <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://reddit.com/r/all">/r/all</a>
        <div></div>
        <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://reddit.com/r/jailbreak">/r/jailbreak</a>
        <div></div>
        <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://reddit.com/r/applewatch">/r/&#63743;watch</a>
        <div></div>
        <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://reddit.com/r/raspberry_pi">/r/raspberry_pi</a>
        <div></div>
        <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://reddit.com/r/hearthstone">/r/hearthstone</a>
      </div>
      <div class="col-1-8">
        <h3><span style="color: #2980b9;"> ~ </span> <span style="color: #9b59b6;">❯</span> [<span style="color: #27ae60;font-weight: bold;">Streaming</span>]<span style="color: #9b59b6;">:</span> ls</h3>
          <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://netflix.com">Netflix</a><div></div>
          <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://hbonordic.dk">HBO</a><div></div>
          <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://youtube.com">YouTube</a><div></div>
          <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="http://twitch.tv">Twitch</a><div></div>
      </div>
      <div class="col-1-8">
        <h3><span style="color: #2980b9;"> ~ </span> <span style="color: #9b59b6;">❯</span> [<span style="color: #27ae60;font-weight: bold;">Gaming</span>]<span style="color: #9b59b6;">:</span> ls</h3>
          <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="https://day9.tv/archives/">Day[9]</a><div></div>
          <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="https://www.twitch.tv/blizzheroes">Heroes of the Storm</a><div></div>
          <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="https://www.reddit.com/r/LoLEventVoDs">League of Legends</a><div></div>
      </div>
      <div class="col-1-8">
        <h3><span style="color: #2980b9;"> ~ </span> <span style="color: #9b59b6;">❯</span> [<span style="color: #27ae60;font-weight: bold;">Misc.</span>]<span style="color: #9b59b6;">:</span> ls</h3>
          <a style="color: #ecf0f1;padding-left: 15px;text-decoration:none;" target="blank" href="https://github.com/drudoo">Github</a><div></div>
      </div>
      <div class="col-1-8">
        <h3>Ron Swanson Quote</h3>
        <div id="Quote"></div>
      </div>
      <div class="col-1-8">
        <h3>PiHole Stats</h3>
        <table>
          <tr>
            <tr style="color:#3498db;background-color: #34495e">
              <td>Ads Blocked Today</td>
              <td><div id="ads_blocked_today">---</div></td>
            </tr>
            <tr style="color: #e67e22;background-color: #34495e">
              <td>Of Today's Traffic Is Ads</td>
              <td><div id="ads_percentage_today">---</div></td>
            </tr>
            <tr style="color: #2ecc71;background-color: #34495e">
              <td>DNS Queries Today</td>
              <td><div id="dns_queries_today">---</div></td>
            </tr>
            <tr style="color: #e74c3c;background-color: #34495e">
              <td>Domains Being Blocked</td>
              <td><div id="domains_being_blocked"><sup>---</sup></div></td>
            </tr>
          </tr>
        </table>
      </div>
    </div>
  </div><!-- /.wrapper -->
</body>
