function onLoad() {
    document.addEventListener("deviceready", onDeviceReady, false);
}
function onDeviceReady() {
    document.addEventListener("offline", ifOffline, false);
}
function ifOffline() {
    alert("No internet. Check connection and restart the app.");
    navigator.app.exitApp();
}
function horoscope(sign) {
    $(".popup").fadeIn(500);
    dataString = "ss=" + sign;
    url = "https://khuranatech.in/pro/astrologic/index.php";
    $.ajax({
        type: "POST",
        url: url,
        data: dataString,
        dataType: "json",
        crossDomain: true,
        cache: false,
        beforeSend: function(){ $("#horoscope").html('loading...'); },
        success: function(data){
            $("#horoscope").html('');
            $.each(data, function(i, field){
                var date = field.date;
                var description = field.description;
                $("#horoscope").append("<div class='data'><div class='date'>" + date + "</div><div class='description'>" + description + "</div></div>");
            });
        }
    });
}
function back() {
    $(".popup").fadeOut(500);
}