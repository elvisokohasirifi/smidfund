function validateStudent(){
	fname = document.getElementById('fname').value;
    lname = document.getElementById('lname').value;
    gender = document.getElementById('sel1').value;
    date = document.getElementById('date').value;
    pname = document.getElementById('pname').value;

    if(fname == '' || lname == '' || gender == '' || date == '' || pname == ''){
        alert('Please fill all inputs');
        return false;
    }
    return true;
}

function validatePayment(){
    id = document.getElementById('sel1Pay').value;
    date = document.getElementById('datePay').value;
    amount = document.getElementById('amountPay').value;

    if(id == '' || date == '' || amount == '' || amount == '0' || isNaN(amount)){
        alert('Please fill all inputs');
        return false;
    }
    return true;
}

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

function deleteIt(id){
    ans = confirm('Are you sure you want to delete this payment?');
    if (ans){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                alert(xmlhttp.responseText);
                window.location.reload(true);
            }
        };
        xmlhttp.open("GET", "deletePayment.php?id=" + id, true);
        xmlhttp.send();
    }
}

function deletePay(id){
    ans = confirm('Are you sure you want to delete this contribution?');
    if (ans){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                alert(xmlhttp.responseText);
                window.location.reload(true);
            }
        };
        xmlhttp.open("GET", "deletePayment.php?id=" + id, true);
        xmlhttp.send();
    }
}

function deleteStudent(id){
    ans = confirm('Are you sure you want to delete this customer information?');
    if (ans){
        ans = confirm('Deleting this customer will delete all his contributions and withdrawals. Do you still want to do it?');
        if (ans){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    alert(xmlhttp.responseText);
                    window.location.reload(true);
                }
            };
            xmlhttp.open("GET", "deleteStudent.php?id=" + id.toString(), true);
            xmlhttp.send();
        }
    }
}



function update(hidden, msisdn, fname, lname, gender, dob, phone_no, occupation, beneficiary,
    relation, bpnum, jdate, pamount, frequency, association, ssn, nob, location, zone, idtype, idnum){
    document.getElementById('hidden').value = hidden;
    document.getElementById('msisdn').value = msisdn;
    document.getElementById('fname').value = fname;
    document.getElementById('lname').value = lname;
    document.getElementById('gender').value = gender;
    document.getElementById('dob').value = dob;
    document.getElementById('phone_no').value = phone_no;
    document.getElementById('occupation').value = occupation;
    document.getElementById('beneficiary').value = beneficiary;
    document.getElementById('relation').value = relation;
    document.getElementById('bpnum').value = bpnum;
    document.getElementById('jdate').value = jdate;
    document.getElementById('pamount').value = pamount;
    document.getElementById('frequency').value = frequency;
    document.getElementById('association').value = association;
    document.getElementById('ssn').value = ssn;
    document.getElementById('nob').value = nob;
    document.getElementById('location').value = location;
    document.getElementById('zone').value = zone;
    document.getElementById('idtype').value = idtype;
    document.getElementById('idnum').value = idnum;
}

function editPay(id, name, amount, date, rdr){
    document.getElementById('fullname').innerHTML = name;
    document.getElementById('amountPay').value = amount;
    document.getElementById('datePay').value = date;
    document.getElementById('hidden').value = id;
}
/*
document.getElementById('date').setValue('11-11-2011');
document.getElementById('datePay').setValue('11-11-2011');*/