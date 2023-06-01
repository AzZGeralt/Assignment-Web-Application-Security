function validate()
{
    var name = document.getElementById('name').value;
    var matrics = document.getElementById('matrics').value;
    var home = document.getElementById('haddress').value;
    var current = document.getElementById('caddress').value;
    var email = document.getElementById('email').value;
    var mphone = document.getElementById('mphone').value;
    var hphone = document.getElementById('hphone').value;

    var namePattern = /^([a-zA-Z]+ ){3}[a-zA-Z]+$/;
    var matricsPattern = /^[0-9]{7}$/;
    var addressPattern = /^[0-9]{1,3},?[ ]?[A-Za-z0-9./ ]+,[ ]?[A-Za-z0-9./ ]+,[ ]?\d{5}[ ,]+[A-Za-z0-9./-]+$/;
    var emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    var mphonePattern = /^(?:\+?6?01)[0-46-9]-*[0-9]{7,8}$/;
    var hphonePattern = /^0[3-9][0-9]{1,2}-*[0-9]{7,8}$/;

    if (!namePattern.test(name)) {
        alert("Please enter your valid name according to your IC");
        return false;
    }

    if (!matricsPattern.test(matrics)) {
        alert("Please enter number and 7 digits only");
        return false;
    }

    if (!addressPattern.test(current)) {
        alert("Please enter address in Malaysian address format");
        return false;
    }

    if (!addressPattern.test(home)) {
        alert("Please enter address according to your IC or in Malaysian address format");
        return false;
    }

    if (!emailPattern.test(email)) {
        alert("Please enter the correct email format and only gmail account accepted");
        return false;
    }

    if (!mphonePattern.test(mphone)) {
        alert("Please enter number according to malaysian phone number format (+601)");
        return false;
    }

    if (!hphonePattern.test(hphone)) {
        alert("Please enter number according to malaysian home number format (03)");
        return false;
    }
}