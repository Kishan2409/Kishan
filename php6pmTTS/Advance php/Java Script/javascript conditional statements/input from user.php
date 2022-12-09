<script type="text/javascript">
    function test() {
        var nm=document.getElementById("name").value;
    document.getElementById("demo").innerHTML="Enter text is "+nm;
    }

    
</script>
<p id="demo"></p>
<form method="post">
    <input type="text" name="nm" id="name" placeholder="Pls enter text">
    <button type="button" onclick="test()" name="sub" value="ckeck">ckeck</button>
</form>