<?php

require_once 'vendor/autoload.php';

use zlokomatic\phpLoL\LoLClient;

//use zlokomatic\phpLoL\examples\LOLProfiler;

$client = new LoLClient('Username', 'Password', 'NA' );

$summoner = $client->getSummonerByName("SummonerName");
$publicSummonerData = $client->getAllPublicSummonerDataByAccount($summoner->getAcctId());

$names = $client->getSummonerNames(array($summoner->getAcctId(), 123456));

$games = $client->getRecentGames($summoner->getAcctId());

$stats = $client->getPlayerStatsByAccountId($summoner->getAcctId());

$aggStats = $client->getAggregatedStats($summoner->getAcctId(), 'CLASSIC', 3);

$leagues = $client->getAllLeaguesForPlayer($summoner->getSummonerId());

// 20-10
$masteries = $client->getMasteryBook($summoner->getSummonerId());

/*

$profiler = new LOLProfiler('Username','Password','NA');

$profiler->searchSummoner('SummonerName');

echo $profiler->name;

*/
