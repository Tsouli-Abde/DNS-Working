function Annuler()
{
    let s    = document.getElementsByTagName("input")[4];

    s.disabled = true;
    s.classList.remove("hover");
                                

    let p    = document.getElementsByTagName("input")[0];
    let m1   = document.getElementById("msg1");
    let i1   = document.getElementById("pi1");
    let i2   = document.getElementById("pi2");
    let i3   = document.getElementById("pi3");

    m1.innerHTML        = "";
    m1.style.marginLeft = "10px";
    i1.style.display    = "none";
    i2.style.display    = "none";
    i3.style.display    = "none";
    p.style.background  = "rgba(0, 0, 0, 0.4)";
    p.style.boxShadow   = "0 0 5px rgb(121, 117, 117)";
    p.style.border      = "1px solid rgb(150, 150, 150)";


    let n    = document.getElementsByTagName("input")[1];
    let m2   = document.getElementById("msg2");    
    let i4   = document.getElementById("ni1");
    let i5   = document.getElementById("ni2");
    let i6   = document.getElementById("ni3");

    m2.innerHTML        = "";
    m2.style.marginLeft = "10px";
    i4.style.display    = "none";
    i5.style.display    = "none";
    i6.style.display    = "none";
    n.style.background  = "rgba(0, 0, 0, 0.4)";
    n.style.boxShadow   = "0 0 5px rgb(121, 117, 117)";
    n.style.border      = "1px solid rgb(150, 150, 150)";


    let e    = document.getElementsByTagName("input")[2];
    let m3   = document.getElementById("msg3");
    let i7   = document.getElementById("ei1");
    let i8   = document.getElementById("ei2");
    let i9   = document.getElementById("ei3");

    m3.innerHTML        = "";
    m3.style.marginLeft = "10px";
    i7.style.display    = "none";
    i8.style.display    = "none";
    i9.style.display    = "none";
    e.style.background  = "rgba(0, 0, 0, 0.4)";
    e.style.boxShadow   = "0 0 5px rgb(121, 117, 117)";
    e.style.border      = "1px solid rgb(150, 150, 150)";


    let t    = document.getElementsByTagName("input")[3];
    let m4   = document.getElementById("msg4");
    let i10  = document.getElementById("ti1");
    let i11  = document.getElementById("ti2");
    let i12  = document.getElementById("ti3");

    m4.innerHTML        = "";
    m4.style.marginLeft = "10px";
    i10.style.display   = "none";
    i11.style.display   = "none";
    i12.style.display   = "none";
    t.style.background  = "rgba(0, 0, 0, 0.4)";
    t.style.boxShadow   = "0 0 5px rgb(121, 117, 117)";
    t.style.border      = "1px solid rgb(150, 150, 150)";


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

    m5.innerHTML        = "";
    m5.style.marginLeft = "10px";
    f1.style.display    = "none";
    f2.style.display    = "none";
    f3.style.display    = "none";
    f4.style.display    = "none";
    f5.style.display    = "none";
    f6.style.display    = "none";
    f7.style.display    = "none";
    f8.style.display    = "none";
    f9.style.display    = "none";
    c.style.background  = "rgba(0, 0, 0, 0.4)";
    c.style.boxShadow   = "0 0 5px rgb(121, 117, 117)";
    c.style.border      = "1px solid rgb(150, 150, 150)";


    let v    = document.getElementsByTagName("select")[1]; 
    let m6   = document.getElementById("msg6");

    m6.innerHTML        = "";
    m6.style.marginLeft = "10px";
    v.style.background  = "rgba(0, 0, 0, 0.4)";
    v.style.boxShadow   = "0 0 5px rgb(121, 117, 117)";
    v.style.border      = "1px solid rgb(150, 150, 150)";


    let m    = document.getElementsByTagName("textarea")[0]; 
    let m7   = document.getElementById("msg7");
    let i13  = document.getElementById("mi1");
    let i14  = document.getElementById("mi2");

    m7.innerHTML        = "";
    m7.style.marginLeft = "10px";
    i13.style.display   = "none";
    i14.style.display   = "none";
    m.style.background  = "rgba(0, 0, 0, 0.4)";
    m.style.boxShadow   = "0 0 5px rgb(121, 117, 117)";
    m.style.border      = "1px solid rgb(150, 150, 150)";                           
}