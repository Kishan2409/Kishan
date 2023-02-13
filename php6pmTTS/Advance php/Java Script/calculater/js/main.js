function clr()
{
    document.getElementById("result").value="";
}
function display(val)
{
    document.getElementById("result").value+=val;
}
function finalresult()
{
    var a=document.getElementById("result").value;
    var b=eval(a);
    document.getElementById("result").value=b;
}