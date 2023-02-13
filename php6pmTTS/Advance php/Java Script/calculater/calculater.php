<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src='js/main.js'></script>
</head>
<body>

    <div class="clc">
        <table align="center" width="100%">
            <tr>
                <td><input type="text" name="result" id="result" placeholder="0" style="text-align: right; min-width: 100%; padding:0px; border: none; height: 7vh;"></td>
            </tr>
        </table>
    </div>
    <div class="calculator">
        <table width="100%">
            <tr>
                <td colspan="4"><button type="button" value="%" id="btn" onclick="return display(this.value)">%</button>
                    <button type="button" value="CE" id="btn" onclick="return display(this.value)">CE</button>
                    <button type="button" value="C" id="btn" onclick="clr()">C</button>
                    <button type="button" value="x" id="btn" onclick="return display(this.value)">&times</button>
                </td>
                
            </tr>


            <tr>
                <td colspan="4"><button type="button" value="1/x" id="btn" onclick="return display(this.value)">1/x</button>
                    <button type="button" value="x2" id="btn" onclick="return display(this.value)">x2</button>
                    <button type="button" value="2√x" id="btn" onclick="return display(this.value)">2√x</button>
                    <button type="button" value="/" id="btn" onclick="return display(this.value)">/</button>
                </td>
                
            </tr>

            <tr>
                <td colspan="4"><button type="button" value="7" id="btn" onclick="return display(this.value)">7</button>
                    <button type="button" value="8" id="btn" onclick="return display(this.value)">8</button>
                    <button type="button" value="9" id="btn" onclick="return display(this.value)">9</button>
                    <button type="button" value="*" id="btn" onclick="return display(this.value)">X</button>
                </td>
                
            </tr>

            <tr>
                <td colspan="4"><button type="button" value="4" id="btn" onclick="return display(this.value)">4</button>
                    <button type="button" value="5" id="btn" onclick="return display(this.value)">5</button>
                    <button type="button" value="6" id="btn" onclick="return display(this.value)">6</button>
                    <button type="button" value="-" id="btn" onclick="return display(this.value)">-</button>
                </td>
                
            </tr>
            <tr>
                <td colspan="4"><button type="button" value="1" id="btn" onclick="return display(this.value)">1</button>
                    <button type="button" value="2" id="btn" onclick="return display(this.value)">2</button>
                    <button type="button" value="3" id="btn" onclick="return display(this.value)">3</button>
                    <button type="button" value="+" id="btn" onclick="return display(this.value)">+</button>
                </td>
                
            </tr>

            <tr>
                <td colspan="4"><button type="button" value="+/-" id="btn" onclick="return display(this.value)">+/-</button>
                    <button type="button" value="0" id="btn" onclick="return display(this.value)">0</button>
                    <button type="button" value="." id="btn" onclick="return display(this.value)">.</button>
                    <button type="button" value="=" id="btn" onclick="return finalresult(this.value)">=</button>
                </td>
                
            </tr>
        </table>
    </div>    
</body>
</html>