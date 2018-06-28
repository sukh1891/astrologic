<?php
    header("Access-Control-Allow-Origin: *");
    $sunsign = htmlspecialchars(trim($_POST['ss']));
    if($sunsign == "aries") {
        $url = "http://feeds.feedburner.com/AstroSageAries.xml";
    } elseif($sunsign == "taurus") {
        $url = "http://feeds.feedburner.com/AstroSageTaurus.xml";
    } elseif($sunsign == "gemini") {
        $url = "http://feeds.feedburner.com/AstroSageGemini.xml";
    } elseif($sunsign == "cancer") {
        $url = "http://feeds.feedburner.com/AstroSageCancer.xml";
    } elseif($sunsign == "leo") {
        $url = "http://feeds.feedburner.com/AstroSageLeo.xml";
    } elseif($sunsign == "virgo") {
        $url = "http://feeds.feedburner.com/AstroSageVirgo.xml";
    } elseif($sunsign == "libra") {
        $url = "http://feeds.feedburner.com/AstroSageLibra.xml";
    } elseif($sunsign == "scorpio") {
        $url = "http://feeds.feedburner.com/AstroSageScorpio.xml";
    } elseif($sunsign == "sagittarius") {
        $url = "http://feeds.feedburner.com/AstroSageSagittarius.xml";
    } elseif($sunsign == "capricorn") {
        $url = "http://feeds.feedburner.com/AstroSageCapricorn.xml";
    } elseif($sunsign == "aquarius") {
        $url = "http://feeds.feedburner.com/AstroSageAquarius.xml";
    } elseif($sunsign == "pisces") {
        $url = "http://feeds.feedburner.com/AstroSagePisces.xml";
    }
    $feeds = simplexml_load_file($url);
    $description = $feeds->channel->item->description;
    $description = (string)$description;
    $title = $feeds->channel->item->title;
    $title = (string)$title;
    $json[] = array (
        'date' => $title,
        'description' => $description,
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>