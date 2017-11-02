<?php

$exp = '/(Trident|MSIE|Edge)/';
$ua = getallheaders()['User-Agent'];

if(preg_match($exp,$ua) > 0) {

?>

<html>
  <head>
    <title>EvergreenGate by MCStreetguy</title>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="data:image/png;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAABAREQDQEREA0BERANCRkYDWF9cATs+PgImJioRIyMmIiMjJiImJioROz4/AlZdWwFCRkYDQEREA0BERANAREQDQEREA0BERARESUgDQENEAyMiJi8hICSGISAkxCEgJNwhICTcISAkxCEgJIYjIiYvQEREA0RJSANAREQEQEREA0BERANFSUkDLzAyBiEgJGUhICThIB8j/yAfI/0hICTwISAk8CAfI/wgHyP/ISAk4SEgJGQvMDIGRUlJA0BERANBRUUDSU9OAyEgJGQhICTyIB8j/yEgJMkhICRaIiIlMyIiJTMhICRbISAktyAfI/shICTyISAkZEpPTgNBRUUD6v/0ASIiJS4hICTfIB8j/yAfI/8hICTNIiElLQAAAACktasBAAAAACYmKREhICSMIB8j/SEgJN8iIiUv0+7cAWVvagIhICSFIB8j/yEgJMghICTMIB8j/yEgJMsiIiUwobOoAUBERARcZGECJSUoESEgJLcgHyP/ISAkhmJsZwImJikRISAkwyEgJP8hICRaIyImLCEgJMogHyP/ISAkyyIiJTChs6gBQEREBAAAAAAhICRbISAk/yEgJMMmJioRIyMmIiEgJNwhICTwIiElMwAAAAAiIiUwISAkyiAfI/8hICTLIiIlMKGzpwGyyLkBIiElMyEgJPAhICTcIyMmIiMjJiIhICTcISAk8CIhJTO0yrsBn7KmASIiJTAhICTKIB8j/yEgJMsiIiUwAAAAACIhJTMhICTwISAk3CMjJiImJikRISAkwyEfI/8hICRbAAAAAEBERASfsqYBIiIlMCEgJMogHyP/ISAkyyIiJiwhICRaISAk/yEgJMMmJioRZW5qAiEgJIYgHyP/ISAktyUlKBFcZWECQEREBJ+ypgEiIiUwISAkyiAfI/8hICTMISAkyCAfI/8hICSGYmxnAu7/+AEiIiUvISAk4CAfI/0hICSMJiYpEQAAAACktaoBAAAAACIhJS0hICTMIB8j/yAfI/8hICTfIiIlL9Lt2wFBRUUDSU9NAyEgJGQhICTyIB8j+yEgJLchICRbIiIlMyIiJTMhICRaISAkySAfI/8hICTyISAkZElPTQNBRUUDQEREA0VJSQMvMDMGISAkZCEgJOEgHyP/IB8j/CEgJPAhICTwIB8j/CAfI/8hICThISAkZS8wMgZFSUkDQEREA0BERANAREQERElIAz9DQwMjIiYvISAkhyEgJMQhICTdISAk3SEgJMQhICSHIyImL0BDQwNESUgDQEREBEBERANAREQDQEREA0BERANCRkYDYGdkATg6PAImJikRIyMmIiMjJiImJikROTs8Al1kYQFCRkYDQEREA0BERANAREQDAAAAAAAAAAAAAAAAAAAAAAFAAAAAAAAAABAAAAgAAAAAEAAACAAAAAAAAAACgAAAAAAAAAAAAAAAAAAAAAAAAA==">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <style media="screen">
      main {
        text-align: center;
        width: 80vw;
        margin: 50px auto;
        font-family: 'Ubuntu', sans-serif;
      }

      footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
      }

      .mono {
        font-family: monospace;
      }
    </style>
  </head>
  <body>
    <main>
      <h2>Sorry, this website is too awesome for your browser!</h2>
      <p>
        We have detected that you are using an insufficient browser for this webpage.<br />
        At least some of the features used on the page are not supported by your browser, therefore access has been restricted.
        <br /><br />
        Install an evergreen browser such as <a href="https://www.google.com/chrome/browser/desktop/index.html">Google Chrome</a> or <a href="https://www.mozilla.org/de/firefox/new/">Mozilla Firefox</a>
        to explore <?php echo getallheaders()['Host']; ?>.
      </p>
      <br /><br /><br /><br /><br /><br /><br />
      <b>If you believe this is an error, please contact the server admin and provide the following information:</b><br /><br />
      <div class="mono">User-Agent:&nbsp;<?php echo getallheaders()['User-Agent']; ?></div>
    </main>
    <footer>
      <code>
        powered by <a href="https://github.com/MCStreetguy/EvergreenGate">EvergreenGate</a>, Copyright (c) 2017 Maximilian Schmidt, All Rights Reserved.
      </code>
    </footer>
  </body>
</html>

<?php

  die();
}
?>
