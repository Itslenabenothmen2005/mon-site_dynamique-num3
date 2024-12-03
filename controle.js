function verif1() {
  var tel = document.getElementById("tel").value;
  var list = document.getElementById("list").selectedIndex;
  var ta = document.getElementById("ta").value;
  if (tel.length != 8 || verif(tel == false)) {
    alert("num tlf non valide");
    return false;
  }
  if (list == 0) {
    alert("choisisser votre choix");
    return false;
  }
  if (list == 4 && ta == "") {
    alert("faux");
    return false;
  }
}

function verif(x) {
  var i = 0;
  while (i < x.length && x.charAt(i) >= "0" && x.charAt(i) <= "9") {
    i = i + 1;
  }
  return i == x.length;
}
function verif2() {
  var tel = document.getElementById("tel").value;
  if (tel.length != 8 || verif(tel == false)) {
    alert("num tlf non valide");
    return false;
  }
  d = new Date();
  var dp = new Date(document.getElementById("daterep").value);
  if (dp >= d) {
    alert("erreur date");
    return false;
  }
}
