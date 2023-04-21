function affiche()
{
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
                                            if(xhr.readyState == 4 && xhr.status == 200)
                                            {
                                                leselect = xhr.responseText;
                                                document.getElementById('listville').innerHTML = leselect;
                                            }
                                        }
    xhr.open("POST","ListVille.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    sel = document.getElementById('listepays');
    idpays = sel.options[sel.selectedIndex].value;
    xhr.send("idPays="+idpays);
}