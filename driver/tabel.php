<html>
<head>
<script src="js/jquery-2.1.4.min.js"></script>
<style>
	#contenitore{
position: relative;
width: 80%;
margin: 10px auto;
text-align:center;
overflow:hidden;
font: 14px 'Trebuchet MS', sans serif;
}
.left{
float:left;
width:48%;
}
#grafico{
position:relative;
height:300px;
border-left:2px solid #000000;
border-bottom: 2px solid #000000;
width:100%;
margin-top:20px;
}
.riga{
position:absolute;
left:0;
height: 1px;
background-color:gray;
width: 100%;
}
.riga div{
float:left;
margin: -20px 0 -10px 3px;
}
.bot div{
    
}
.canc{
clear:both;
}
table{
width:60%;
background-color: white;
color: #000;
margin: 1em auto;
}
table caption{
background-color: #D8EED8;
color: #004156;
text-align: left;
}
table tr:nth-child(2n){
background-color: #D8EED8;
}
table tr:nth-child(2n+1){
background-color: #BFDFFF;
}
table td{
text-align:center;
border-bottom: 1px solid #CDCDCD;
padding: 6px;
}
.column{
position:absolute;
width: 16%;
bottom: 0;
background-color: #003366;
margin-left:5%;
}
div.button {
    margin: 0 auto;
    text-align: center;
    width: 100px;
    background-color:#003366;
    border: 1px solid #003366;
    border-radius: 5px;
    padding: 8px;
    color: #E1E2CF;
    cursor: pointer;
}
.column div{
margin-top:-20px;
height:20px;
}

</style>
<script>
function viewGraph(){
$('.column').css('height','0');
$('table tr').each(function(index) {
var ha = $(this).children('td').eq(1).text();
$('#col'+index).animate({height: ha}, 1500).html("<div>"+ha+"</div>");
});
}
$(document).ready(function(){
viewGraph();
});
</script>
</head>
<body>
<div id="contenitore">
<div style="display:none;">

<table>
<caption>Date table</caption>
<tbody>
<tr><td>A</td><td>80%</td><td style="background-color:#336699">&nbsp;</td></tr>
<tr><td>B</td><td>68%</td><td style="background-color:#003366">&nbsp;</td></tr>
<tr><td>C</td><td>50%</td><td style="background-color:#ff6600">&nbsp;</td></tr>
<tr><td>D</td><td>20%</td><td style="background-color:#ffcc00">&nbsp;</td></tr>
</tbody></table>
<div class="button" onclick="viewGraph()">Rerun</div>
</div>
<div>
<div id="grafico">
<div class="riga" style="top:25%"><div>75%</div></div>
<div class="riga" style="top:50%"><div>50%</div></div>
<div class="riga" style="top:75%"><div>25%</div></div>
<div id="col0" style="left:0; background-color:#107B10;" class="column"></div>
<div id="col1" style="left:25%; background-color:#107B10;" class="column"></div>
<div id="col2" style="left:50%; background-color:#107B10;" class="column"></div>
<div id="col3" style="left:75%; background-color:#1BCE1B;" class="column"></div>
</div>
<div style="margin-top:2%;margin-left:0%;text-align:left; display:inline;">Tue</div>
<div style="margin-top:2%;margin-left:22%; display:inline; text-align:left;">Wed</div>
<div style="margin-top:2%;margin-left:22%; display:inline; text-align:left;">Thu</div>
<div style="margin-top:2%;margin-left:22%; display:inline; text-align:left;">Fri</div>
</div>
<div class="canc"></div>
<div style="margin: 20px auto; text-align:center;">quellidelcucuzzolo.blogspot.com</div>
</div>
</body>
</html>