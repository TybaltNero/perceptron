<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3,org/TR/xhtml/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<?php include("header.php"); ?>

<body>

<div id="banner_fond">
	<div id="banner">
		<img src="images/bouton.png" alt="bouton" onclick="init();" style="cursor: pointer;"/>
	</div>
</div>

<div id="jeu">
	<table border="0" cellpadding="1" cellspacing="0">
		<tr>
			<td><img src="images/fond.png" id="00" onclick="select('0','0');" onContextMenu="return false;"/></td>
			<td><img src="images/bleu.png" id="01" onclick="select('0','1')" onContextMenu="return false;"/></td>
			<td><img src="images/fond.png" id="a3"/></td>
			<td><img src="images/fond.png" id="a4"/></td>
			<td><img src="images/fond.png" id="a5"/></td>
			<td><img src="images/fond.png" id="a6"/></td>
			<td><img src="images/fond.png" id="a7"/></td>
			<td><img src="images/fond.png" id="a8"/></td>
			<td><img src="images/fond.png" id="a9"/></td>
			<td><img src="images/fond.png" id="a10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="b1"/></td>
			<td><img src="images/fond.png" id="b2"/></td>
			<td><img src="images/fond.png" id="b3"/></td>
			<td><img src="images/fond.png" id="b4"/></td>
			<td><img src="images/fond.png" id="b5"/></td>
			<td><img src="images/fond.png" id="b6"/></td>
			<td><img src="images/fond.png" id="b7"/></td>
			<td><img src="images/fond.png" id="b8"/></td>
			<td><img src="images/fond.png" id="b9"/></td>
			<td><img src="images/fond.png" id="b10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="c1"/></td>
			<td><img src="images/fond.png" id="c2"/></td>
			<td><img src="images/fond.png" id="c3"/></td>
			<td><img src="images/fond.png" id="c4"/></td>
			<td><img src="images/fond.png" id="c5"/></td>
			<td><img src="images/fond.png" id="c6"/></td>
			<td><img src="images/fond.png" id="c7"/></td>
			<td><img src="images/fond.png" id="c8"/></td>
			<td><img src="images/fond.png" id="c9"/></td>
			<td><img src="images/fond.png" id="c10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="d1"/></td>
			<td><img src="images/fond.png" id="d2"/></td>
			<td><img src="images/fond.png" id="d3"/></td>
			<td><img src="images/fond.png" id="d4"/></td>
			<td><img src="images/fond.png" id="d5"/></td>
			<td><img src="images/fond.png" id="d6"/></td>
			<td><img src="images/fond.png" id="d7"/></td>
			<td><img src="images/fond.png" id="d8"/></td>
			<td><img src="images/fond.png" id="d9"/></td>
			<td><img src="images/fond.png" id="d10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="e1"/></td>
			<td><img src="images/fond.png" id="e2"/></td>
			<td><img src="images/fond.png" id="e3"/></td>
			<td><img src="images/fond.png" id="e4"/></td>
			<td><img src="images/fond.png" id="e5"/></td>
			<td><img src="images/fond.png" id="e6"/></td>
			<td><img src="images/fond.png" id="e7"/></td>
			<td><img src="images/fond.png" id="e8"/></td>
			<td><img src="images/fond.png" id="e9"/></td>
			<td><img src="images/fond.png" id="e10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="f1"/></td>
			<td><img src="images/fond.png" id="f2"/></td>
			<td><img src="images/fond.png" id="f3"/></td>
			<td><img src="images/fond.png" id="f4"/></td>
			<td><img src="images/fond.png" id="f5"/></td>
			<td><img src="images/fond.png" id="f6"/></td>
			<td><img src="images/fond.png" id="f7"/></td>
			<td><img src="images/fond.png" id="f8"/></td>
			<td><img src="images/fond.png" id="f9"/></td>
			<td><img src="images/fond.png" id="f10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="g1"/></td>
			<td><img src="images/fond.png" id="g2"/></td>
			<td><img src="images/fond.png" id="g3"/></td>
			<td><img src="images/fond.png" id="g4"/></td>
			<td><img src="images/fond.png" id="g5"/></td>
			<td><img src="images/fond.png" id="g6"/></td>
			<td><img src="images/fond.png" id="g7"/></td>
			<td><img src="images/fond.png" id="g8"/></td>
			<td><img src="images/fond.png" id="g9"/></td>
			<td><img src="images/fond.png" id="g10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="h1"/></td>
			<td><img src="images/fond.png" id="h2"/></td>
			<td><img src="images/fond.png" id="h3"/></td>
			<td><img src="images/fond.png" id="h4"/></td>
			<td><img src="images/fond.png" id="h5"/></td>
			<td><img src="images/fond.png" id="h6"/></td>
			<td><img src="images/fond.png" id="h7"/></td>
			<td><img src="images/fond.png" id="h8"/></td>
			<td><img src="images/fond.png" id="h9"/></td>
			<td><img src="images/fond.png" id="h10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="i1"/></td>
			<td><img src="images/fond.png" id="i2"/></td>
			<td><img src="images/fond.png" id="i3"/></td>
			<td><img src="images/fond.png" id="i4"/></td>
			<td><img src="images/fond.png" id="i5"/></td>
			<td><img src="images/fond.png" id="i6"/></td>
			<td><img src="images/fond.png" id="i7"/></td>
			<td><img src="images/fond.png" id="i8"/></td>
			<td><img src="images/fond.png" id="i9"/></td>
			<td><img src="images/fond.png" id="i10"/></td>
		</tr>
		<tr>
			<td><img src="images/fond.png" id="j1"/></td>
			<td><img src="images/fond.png" id="j2"/></td>
			<td><img src="images/fond.png" id="j3"/></td>
			<td><img src="images/fond.png" id="j4"/></td>
			<td><img src="images/fond.png" id="j5"/></td>
			<td><img src="images/fond.png" id="j6"/></td>
			<td><img src="images/fond.png" id="j7"/></td>
			<td><img src="images/fond.png" id="j8"/></td>
			<td><img src="images/fond.png" id="j9"/></td>
			<td><img src="images/fond.png" id="j10"/></td>
		</tr>
	</table>
</div>

<script>
// initialisation du tableau
colonne = new Array("0", "0", "0", "0", "0", "0", "0", "0", "0", "0");
ligne = new Array("0", "0", "0", "0", "0", "0", "0", "0", "0", "0");
tableau = new Array(colonne, ligne);
//
function select(col, lin)
{
	check(col, lin);
	changerImage(col, lin);
	//afficher();
}
//
function check(col, lin)
{
	if (tableau[col][lin] == "0")
		tableau[col][lin] = "1";
	else
		tableau[col][lin] = "0";
}
//
function changerImage(col, lin)
{
	if (document.getElementById(col + lin).src == "images/fond.png")
        document.getElementById(col + lin).src = "images/bleu.png";
    else
		document.getElementById(col + lin).src = "images/fond.png";
}
//
function afficher()
{
	for (a = 0; a < 10; a++)
	{
		for (b = 0; b < 10; b++)
			document.write(tableau[a][b]);
		document.write("<br />");
	}
}
// endof
</script>

</body>
</html>