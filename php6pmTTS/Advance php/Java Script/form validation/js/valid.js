function valid()
{
    if(document.frm.email.value=="")
    {
        alert('Please Enter your email address')
        document.frm.email.focus();
        return false;
    }
    var e=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!e.test(document.frm.email.value))
    {
        alert('Please Enter your valid email address')
        document.frm.email.focus();
        return false;
    }

    if(document.frm.password.value=="")
    {
        alert('Please Enter your password')
        document.frm.password.focus();
        return false;
    }
 
}