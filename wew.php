<?php
$mirror = isset($_GET['mirror']) ? $_GET['mirror'] : 'somedefault';
    $json = file_get_contents('http://localhost/mp4u/get.php?sd=bi3kessge3qw');
    $data = json_decode($json,true);
    $hd = $data['720p'];
    $sd = $data['480p'];
    $img = $data['poster'];
    $mirror1 =  ('sources: [{type: "video/mp4",file:"'.$hd.'",label: "High"},{file: "'.$sd.'",label: "Medium"}]');
    $track1 = ('tracks: [{label: "Indonesia",file: "https://cdn.staticaly.com/gh/zenall/subtitle/master/Black%20Clover%20-%2001.srt",kind:"captions"}]');
if (isset($_GET['mirror']) && $_GET['mirror'] == "1") {
    $json = file_get_contents('http://localhost/mp4u/get.php?sd=bi3kessge3qw');
    $data = json_decode($json,true);
    $hd = $data['720p'];
    $sd = $data['480p'];
    $img = $data['poster'];
    $mirror1 =  ('sources: [{type: "video/mp4",file:"'.$hd.'",label: "High"},{file: "'.$sd.'",label: "Medium"}]');
    $track1 = ('tracks: [{label: "Indonesia",file: "https://cdn.staticaly.com/gh/zenall/subtitle/master/Black%20Clover%20-%2001.srt",kind:"captions"}]');
  }
if (isset($_GET['mirror']) && $_GET['mirror'] == "2") {
    $json = file_get_contents('http://localhost/mp4u/get_sendit.php?sd=thillhu591yk&hd=thillhu591yk');
    $data = json_decode($json,true);
    $hd = $data['720p'];
    $sd = $data['480p'];
    $img = $data['poster'];
    $mirror1 =  ('sources: [{type: "video/mp4",file:"'.$hd.'",label: "High"},{file: "'.$sd.'",label: "Medium"}]');
    $track1 = ('tracks: [{label: "Indonesia",file: "",kind:"captions"}]');
  }
?>
  <script type="text/javascript">
jwplayer("player").setup({
  mediaid: "",
  title: "ChanStream",
  description: "Streaming Anime Subtitle Indonesia",
  image:
    "<?php echo $img?>",
  localization: {
    cc: "Untertitel"
  },
  <?php echo $mirror1?>,
  <?php echo $track1?>,
  skin: {
    name: "chan",
    url: "chan.css"
  },
  "logo": {
    "file": "https://i.ibb.co/K2zvQHq/chanstream.png",
    "hide": false,
    "link": "#",
    "margin": "10",
    "position": "control-bar"
  },
  abouttext: 'ChanStream',
  aboutlink: '#',
    captions: {
        color: '#FFF',
        fontSize: 10,
        fontFamily: 'Tahoma'
      }
});      
  </script>
