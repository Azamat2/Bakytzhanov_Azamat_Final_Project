function big(element) {
	element.style.fontSize = '40px';
}

function small(element) {
	element.style.fontSize = '35px';
}

function load() {
    $(".text").animate({opacity: 1}, "slow");
    $("#img").animate({opacity: 1}, "slow");
}