function tripAdvisor_Cookie(){
    $.ajax({
        "url":"http://www.kimonolabs.com/api/e2y8hj92?apikey=1c8c727df3017b23afbd58e02ef0d3d1&callback=taCallback",
        "crossDomain":true,
        "dataType":"jsonp"
    });
}

function taCallback(data) {
    cities = data.results.collection1[0].cities;
    cities = cities.replace('(', '').replace(')', ''); // Is any what to make this simple?
    $.cookie('ta_cities', cities, { expires: 1 }); // Expire in one day
    $("#ta_cities").text( cities );
}

function twitter_Cookie(){
    $.ajax({
        "url":"http://www.kimonolabs.com/api/3x5c4sfk?apikey=1c8c727df3017b23afbd58e02ef0d3d1&callback=twCallback",
        "crossDomain":true,
        "dataType":"jsonp"
    });
}

function twCallback(data) {
    followers = data.results.collection1[0].followers;
    $.cookie('tw_followers', followers, { expires: 0.05 }); // Expire in aprox. 1 hour
    $("#tw_followers").text( followers );
}