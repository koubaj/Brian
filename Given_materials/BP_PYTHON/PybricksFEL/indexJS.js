/*var side = document.getElementById('sideBar');
fetch('import.html')
    .then(res => res.text())
    .then(data => {
        side.innerHTML = data;
        const parser = new DOMParser();
        const doc = parser.parseFromString(data, 'text/html');
        eval(doc.querySelector('script').textContent);
    })
    //console.log(document.querySelector("#sideBar"))
console.log(document.getElementById('tu').innerHTML);
*/
window.addEventListener('load', zobrazFunkce);

function zobrazFunkce() {
    console.log("zaciname")
    let skupina = document.querySelectorAll("a.skupina");
    var lokace = location.origin + location.pathname;
    console.log(lokace)
    console.log("prochazim");
    for (let item of skupina) {
        console.log(item.href)
        if (item.href == lokace) {
            console.log("naslo se");
            item.href = "#";
            item.nextElementSibling.style.display = 'block';
        }
    }
}

function DisplaySide(ev) {
    console.log(ev.nextElementSibling.style);
    if (ev.nextElementSibling.style.display == "none") {
        ev.nextElementSibling.style.display = 'block';
        console.log("1");
    } else {
        ev.nextElementSibling.style.display = 'none';
        console.log("2");
    }
}