function markAttendance(id, value){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert(xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", "markattendance.php?id=" + id.toString() + "&value=" + value, true);
    xmlhttp.send();
}