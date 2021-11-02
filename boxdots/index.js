var player = 'red';
var lines = document.querySelectorAll("div[class $= _line]");
for (let i = 0; i < lines.length; i++) {

    lines[i].addEventListener("mouseenter", function () {
        lines[i].classList.add(player);
    });
    lines[i].addEventListener("mouseleave", function () {
        lines[i].classList.remove(player);
    });

    lines[i].addEventListener("click", function () {
        lines[i].classList.add(player);
        if (player === 'red') {
            player = 'blue';
        }else {player = 'red'}
    });

}
