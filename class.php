<?php
class nc {
    private $KEY;
    
	public function __construct($KEY) {
		$this->SteamKey = $KEY;
	}
	
    public function Profile($SteamID, $args) {
        $url = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$this->SteamKey&format=xml&steamids=$SteamID";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_USERAGENT,'https://github.com/theraw/steam-api, CHANGE ME');
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $res = curl_exec($ch);
        curl_close($ch);
        $xmlR = simplexml_load_string($res);
        return $xmlR;
        
    }
    
}
?>
