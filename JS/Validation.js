function checkPrenom()
{
    let p    = document.getElementsByTagName("input")[0];
    let m1   = document.getElementById("msg1");
    let i1   = document.getElementById("pi1");
    let i2   = document.getElementById("pi2");
    let i3   = document.getElementById("pi3");
    let pp   = /^[A-Za-z0-9-]/;
    if(p.value == "" || p.value.trim() == false)
    {
        m1.innerHTML        = "* Vous devez remplire ce champs correctement !";
        m1.style.color      = "orange";
        m1.style.fontSize   = "18px";
        m1.style.fontWeight = "500";
        m1.style.marginLeft = "10px";
        i1.style.display    = "none";
        i2.style.display    = "block";
        i3.style.display    = "none";
        p.style.border      = "2px solid orange";
        p.style.boxShadow   = "0px 0px 8px orange";
        p.style.background  = "rgba(255, 165, 0, 0.08)";
        p.placeholder       = "Prénom";
        p.value             = ""
        return 0;
    }
    else
    {
        if(isNaN(p.value) && pp.test(p.value))
        {
            m1.innerHTML        = "";
            m1.style.marginLeft = "10px";
            i1.style.display    = "block";
            i2.style.display    = "none";
            i3.style.display    = "none";
            p.style.border      = "2px solid green";
            p.style.boxShadow   = "0px 0px 8px green";
            p.style.background  = "rgba(0, 255, 0, 0.08)";
            return 1;
        }
        else
        {
            m1.innerHTML        = "* Le prénom saisi n'est pas valide !";
            m1.style.color      = "red";
            m1.style.fontSize   = "18px";
            m1.style.fontWeight = "600";
            m1.style.marginLeft = "10px";
            i1.style.display    = "none";
            i2.style.display    = "none";
            i3.style.display    = "block";
            p.style.border      = "2px solid red";
            p.style.boxShadow   = "0px 0px 8px red";
            p.style.background  = "rgba(255, 0, 0, 0.08)";
            return 0;
        }
    }
}


function checkNom()
{
    let n    = document.getElementsByTagName("input")[1];
    let m2   = document.getElementById("msg2");    
    let i1   = document.getElementById("ni1");
    let i2   = document.getElementById("ni2");
    let i3   = document.getElementById("ni3");
    let pn   = /^[A-Za-z0-9-]/;
    if(n.value == "" || n.value.trim() == false)
    {
        m2.innerHTML        = "* Vous devez remplire ce champs correctement !";
        m2.style.color      = "orange";
        m2.style.fontSize   = "18px";
        m2.style.fontWeight = "500";
        m2.style.marginLeft = "10px";        
        i1.style.display    = "none";
        i2.style.display    = "block";
        i3.style.display    = "none";
        n.style.border      = "2px solid orange";
        n.style.boxShadow   = "0px 0px 8px orange";
        n.style.background  = "rgba(255, 165, 0, 0.08)";
        n.placeholder       = "Nom";
        n.value             = "";
        return 0;
    }
    else
    {
        if(isNaN(n.value) && pn.test(n.value))
        {
            m2.innerHTML        = "";
            m2.style.marginLeft = "10px";
            i1.style.display    = "block";
            i2.style.display    = "none";
            i3.style.display    = "none";
            n.style.border      = "2px solid green";
            n.style.boxShadow   = "0px 0px 8px green";
            n.style.background  = "rgba(0, 255, 0, 0.08)";
            return 1;
        }
        else
        {
            m2.innerHTML        = "* Le nom saisi n'est pas valide !";
            m2.style.color      = "red";
            m2.style.fontSize   = "18px";
            m2.style.fontWeight = "600";
            m2.style.marginLeft = "10px";
            i1.style.display    = "none";
            i2.style.display    = "none";
            i3.style.display    = "block";
            n.style.border      = "2px solid red";
            n.style.boxShadow   = "0px 0px 8px red";
            n.style.background  = "rgba(255, 0, 0, 0.08)";
            return 0;
        }
    }
}


function checkEmail()
{
    let e    = document.getElementsByTagName("input")[2];
    let m3   = document.getElementById("msg3");
    let i1   = document.getElementById("ei1");
    let i2   = document.getElementById("ei2");
    let i3   = document.getElementById("ei3");
    let pe   = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(e.value == "" || e.value.trim() == false)
    {
        m3.innerHTML        = "* Vous devez remplire ce champs correctement !";
        m3.style.color      = "orange";
        m3.style.fontSize   = "18px";
        m3.style.fontWeight = "500";
        m3.style.marginLeft = "10px";
        i1.style.display    = "none";
        i2.style.display    = "block";
        i3.style.display    = "none";
        e.style.border      = "2px solid orange";
        e.style.boxShadow   = "0px 0px 8px orange";
        e.style.background  = "rgba(255, 165, 0, 0.08)";
        e.placeholder       = "E-mail";
        e.value             = ""
        return 0;
    }
    else
    {
        if(isNaN(e.value) && pe.test(e.value))
        {
            m3.innerHTML        = "";
            m3.style.marginLeft = "10px";
            i1.style.display    = "block";
            i2.style.display    = "none";
            i3.style.display    = "none";
            e.style.border      = "2px solid green";
            e.style.boxShadow   = "0px 0px 8px green";
            e.style.background  = "rgba(0, 255, 0, 0.08)";
            return 1;
        }
        else
        {
            m3.innerHTML        = "* L'email saisi n'est pas valide !";
            m3.style.color      = "red";
            m3.style.fontSize   = "18px";
            m3.style.fontWeight = "600";
            m3.style.marginLeft = "10px";
            i1.style.display    = "none";
            i2.style.display    = "none";
            i3.style.display    = "block";
            e.style.border      = "2px solid red";
            e.style.boxShadow   = "0px 0px 8px red";
            e.style.background  = "rgba(255, 0, 0, 0.08)";
            return 0;
        }
    }
}


function checkTele()
{
    let t    = document.getElementsByTagName("input")[3];
    let m4   = document.getElementById("msg4");
    let i1   = document.getElementById("ti1");
    let i2   = document.getElementById("ti2");
    let i3   = document.getElementById("ti3");
    if(t.value == "" || t.value.trim() == false)
    {
        m4.innerHTML        = "* Vous devez remplire ce champs correctement !";
        m4.style.color      = "orange";
        m4.style.fontSize   = "18px";
        m4.style.fontWeight = "500";
        m4.style.marginLeft = "10px";
        i1.style.display    = "none";
        i2.style.display    = "block";
        i3.style.display    = "none";
        t.style.border      = "2px solid orange";
        t.style.boxShadow   = "0px 0px 8px orange";
        t.style.background  = "rgba(255, 165, 0, 0.08)";
        t.placeholder       = "Téléphone";
        t.value             = "";
        return 0;
    }
    else
    {
        if(!isNaN(t.value))
        {
            while(t.value.length<10)
            {
                m4.innerHTML        = "* Vous devez remplire ce champs correctement !";
                m4.style.color      = "orange";
                m4.style.fontSize   = "18px";
                m4.style.fontWeight = "500";
                m4.style.marginLeft = "10px";
                i1.style.display    = "none";
                i2.style.display    = "block";
                i3.style.display    = "none";
                t.style.border      = "2px solid orange";
                t.style.boxShadow   = "0px 0px 8px orange";
                t.style.background  = "rgba(255, 165, 0, 0.08)";
                return 0;
            }
            m4.innerHTML        = "";    
            m4.style.marginLeft = "10px";
            i1.style.display    = "block";
            i2.style.display    = "none";
            i3.style.display    = "none";
            t.style.border      = "2px solid green";
            t.style.boxShadow   = "0px 0px 8px green";
            t.style.background  = "rgba(0, 255, 0, 0.08)";
            return 1;
        }
        else
        {
            
            m4.innerHTML        = "* Le numéro saisi n'est pas valide !";
            m4.style.color      = "red";
            m4.style.fontSize   = "18px";
            m4.style.fontWeight = "600";
            m4.style.marginLeft = "10px";
            i1.style.display    = "none";
            i2.style.display    = "none";
            i3.style.display    = "block";
            t.style.border      = "2px solid red";
            t.style.boxShadow   = "0px 0px 8px red";
            t.style.background  = "rgba(255, 0, 0, 0.08)";
            return 0;
        }
    }
}


function checkPays()
{
    let c    = document.getElementsByTagName("select")[0];
    let m5   = document.getElementById("msg5");
    let f1   = document.getElementById("Morocco");
    let f2   = document.getElementById("Algeria");
    let f3   = document.getElementById("Tunisia");
    let f4   = document.getElementById("Spain");
    let f5   = document.getElementById("France");
    let f6   = document.getElementById("UK");
    let f7   = document.getElementById("USA");
    let f8   = document.getElementById("Canada");
    let f9   = document.getElementById("Australia");
    if(c.value == 1 || c.value == 2 || c.value == 3 || c.value == 4 || c.value == 5 || c.value == 6 || c.value == 7 || c.value == 8 || c.value == 9)
    {
        m5.innerHTML        = "";
        m5.style.marginLeft = "10px";
        c.style.border      = "2px solid green";
        c.style.boxShadow   = "0px 0px 8px green";
        c.style.background  = "rgba(0, 255, 0, 0.08)";
        if(c.value == 1)
        {
            f1.style.display    = "block";
            f2.style.display    = "none";
            f3.style.display    = "none";
            f4.style.display    = "none";
            f5.style.display    = "none";
            f6.style.display    = "none";
            f7.style.display    = "none";
            f8.style.display    = "none";
            f9.style.display    = "none";
        }
        if(c.value == 2)
        {
            f1.style.display    = "none";
            f2.style.display    = "block";
            f3.style.display    = "none";
            f4.style.display    = "none";
            f5.style.display    = "none";
            f6.style.display    = "none";
            f7.style.display    = "none";
            f8.style.display    = "none";
            f9.style.display    = "none";
        }
        if(c.value == 3)
        {
            f1.style.display    = "none";
            f2.style.display    = "none";
            f3.style.display    = "block";
            f4.style.display    = "none";
            f5.style.display    = "none";
            f6.style.display    = "none";
            f7.style.display    = "none";
            f8.style.display    = "none";
            f9.style.display    = "none";
        }
        if(c.value == 4)
        {
            f1.style.display    = "none";
            f2.style.display    = "none";
            f3.style.display    = "none";
            f4.style.display    = "block";
            f5.style.display    = "none";
            f6.style.display    = "none";
            f7.style.display    = "none";
            f8.style.display    = "none";
            f9.style.display    = "none";
        }
        if(c.value == 5)
        {
            f1.style.display    = "none";
            f2.style.display    = "none";
            f3.style.display    = "none";
            f4.style.display    = "none";
            f5.style.display    = "block";
            f6.style.display    = "none";
            f7.style.display    = "none";
            f8.style.display    = "none";
            f9.style.display    = "none";
        }
        if(c.value == 6)
        {
            f1.style.display    = "none";
            f2.style.display    = "none";
            f3.style.display    = "none";
            f4.style.display    = "none";
            f5.style.display    = "none";
            f6.style.display    = "block";
            f7.style.display    = "none";
            f8.style.display    = "none";
            f9.style.display    = "none";
        }
        if(c.value == 7)
        {
            f1.style.display    = "none";
            f2.style.display    = "none";
            f3.style.display    = "none";
            f4.style.display    = "none";
            f5.style.display    = "none";
            f6.style.display    = "none";
            f7.style.display    = "block";
            f8.style.display    = "none";
            f9.style.display    = "none";
        }
        if(c.value == 8)
        {
            f1.style.display    = "none";
            f2.style.display    = "none";
            f3.style.display    = "none";
            f4.style.display    = "none";
            f5.style.display    = "none";
            f6.style.display    = "none";
            f7.style.display    = "none";
            f8.style.display    = "block";
            f9.style.display    = "none";
        }
        if(c.value == 9)
        {
            f1.style.display    = "none";
            f2.style.display    = "none";
            f3.style.display    = "none";
            f4.style.display    = "none";
            f5.style.display    = "none";
            f6.style.display    = "none";
            f7.style.display    = "none";
            f8.style.display    = "none";
            f9.style.display    = "block";
        }
        return 1;
    }
    else
    {
        m5.innerHTML        = "* Vous devez remplire ce champs correctement !";
        m5.style.color      = "orange";
        m5.style.fontSize   = "18px";
        m5.style.fontWeight = "500";
        m5.style.marginLeft = "10px";
        c.style.border      = "2px solid orange";
        c.style.boxShadow   = "0px 0px 8px orange";
        c.style.background  = "rgba(255, 165, 0, 0.08)";
        return 0;
    }
}


function checkVille()
{
    let v    = document.getElementsByTagName("select")[1];
    let m6   = document.getElementById("msg6");
    if(v.value == 1  || v.value == 2  || v.value == 3  || v.value == 4  || v.value == 5  || v.value == 6  || v.value == 7  || v.value == 8  || v.value == 9  || v.value == 10 ||
       v.value == 11 || v.value == 12 || v.value == 13 || v.value == 14 || v.value == 15 || v.value == 16 || v.value == 17 || v.value == 18 || v.value == 19 || v.value == 20 ||
       v.value == 21 || v.value == 22 || v.value == 23 || v.value == 24 || v.value == 25 || v.value == 26 || v.value == 27 || v.value == 28 || v.value == 29 || v.value == 30 || 
       v.value == 31 || v.value == 32 || v.value == 33 || v.value == 34 || v.value == 35 || v.value == 36 )
    {
        m6.innerHTML        = "";
        m6.style.marginLeft = "10px";
        v.style.border      = "2px solid green";
        v.style.boxShadow   = "0px 0px 8px green";
        v.style.background  = "rgba(0, 255, 0, 0.08)";
        return 1;
    }
    else
    {
        m6.innerHTML        = "* Vous devez remplire ce champs correctement !";
        m6.style.color      = "orange";
        m6.style.fontSize   = "18px";
        m6.style.fontWeight = "500";
        m6.style.marginLeft = "10px";
        v.style.border      = "2px solid orange";
        v.style.boxShadow   = "0px 0px 8px orange";
        v.style.background  = "rgba(255, 165, 0, 0.08)";
        return 0;
    }
}


function checkMessage()
{
    let s    = document.getElementsByTagName("input")[4];
    let m    = document.getElementsByTagName("textarea")[0]; 
    let m7   = document.getElementById("msg7");
    let i1   = document.getElementById("mi1");
    let i2   = document.getElementById("mi2");
    let cm;
    if(m.value == "" || m.value.trim() == false)
    {
        cm = 0;
        m7.innerHTML        = "* Vous devez remplire ce champs correctement !";
        m7.style.color      = "orange";
        m7.style.fontSize   = "18px";
        m7.style.fontWeight = "500";
        m7.style.marginLeft = "10px";
        i1.style.display    = "none";
        i2.style.display    = "block";
        m.style.border      = "2px solid orange";
        m.style.boxShadow   = "0px 0px 8px orange";
        m.style.background  = "rgba(255, 165, 0, 0.08)";
        m.placeholder       = "Message";
        m.value             = "";
    }
    else
    {
        cm = 1;
        m7.innerHTML        = "";
        m7.style.marginLeft = "10px";
        i1.style.display    = "block";
        i2.style.display    = "none";
        m.style.border      = "2px solid green";
        m.style.boxShadow   = "0px 0px 8px green";
        m.style.background  = "rgba(0, 255, 0, 0.08)";
    }

    let cp = checkPrenom();
    let cn = checkNom();
    let ce = checkEmail();
    let ct = checkTele();
    let cc = checkPays();
    let cv = checkVille();
    if(cp == 1 && cn == 1 && ce == 1 && ct == 1 && cm == 1 && cc == 1 && cv == 1)
    {
        s.disabled = false;
        s.classList.add("hover");
    }
    else
    {
        s.disabled = true;
        s.classList.remove("hover");
    }
}