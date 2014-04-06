<html>
	<head>
		<style>
/******************RESET CSS******************/

html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strike, strong, sub, sup, tt, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details,
figure, figcaption, footer, header, hgroup, 
menu, nav, output, section, summary,
time, mark, audio, video {
margin: 0;
padding: 0;
border: 0;
font-size: 100%;
font: inherit;
vertical-align: baseline;}

/******************!RESET CSS******************/
			H1				{color:black;
							font-family: tahoma;
							font-size: 20;
							text-align: center;}
			.lettrine		{color:white;
							font-family: tahoma;
							font-size: 50;}
			.name_website	{color:#BDBDBD;
							font-family: tahoma;
							font-size: 30;}
			.bgcol_body		{background-color: #D8D8D8;
							width: 94%;
							height: 70%;
							margin: 0 auto;
							padding: 1%}
			.button			{color: black;
							font-family: tahoma;
							font-size: 12;
							text-align: center;
							font-style: italic;}
			.float_right	{float: right;}
			.float_left		{float: left;}
			.center			{text-align: center;}
			.tahoma20		{font-family: tahoma;}
			.tahoma12		{font-family: tahoma;
							font-size: 12;}
			.tahoma15		{font-family: tahoma;
							font-size: 15;}
			.clear_float	{clear: both;}
			.footer			{width: 94%;
							height: 10%;
							margin: 0 auto;}
			.table_center	{margin: 0 auto;
							font-family: tahoma;
							border: 2px}
	</style>

	</head>
	<body>
		<header>
			<table height=12% width=100% bgcolor=#0B243B>
				<tr>
					<td><span class="lettrine">B</span><span class="name_website">ook</span><span class="lettrine">R</span><span class="name_website">ush</span><hr /></td>
				</tr>
			</table>
		
		
		</header>
			<div  class="bgcol_body">
				<div class ="float_right"><a href="index.php"><input class="button" type="submit" name="create_account" value="Accueil"></a></div>
				<br /><div class ="clear"></div>
								
				<br />
				<form method="GET" action="./index.php">
					<table class="table_center">
						<tr>
							<td colspan="2"><H1>Cr&eacute;ation de compte</H1><br /></td>
						</tr>
							<td colspan="2"><div class ="tahoma12"><a href="connection.php">D&eacute;j&agrave; client ? Connectez-vous.</a></div></td>
						</tr>
						<tr>
							<td>Identifiant</td>
							<td><input type=text name="login"</td>
						</tr>
						<tr>
							<td>Mot de passe</td>
							<td><input type=text name="passwd"</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="OK"></td>
						</tr>
					</table>




			</div>
	
		<footer class="footer">
				<table width="100%" height=10%>
					<tr>
						<td style="text-align: left">Rush00 - avril 2014</td>
						<td style="text-align: right">&copy;grass-kw, &copy;yoreal.</td>
					</tr>
				</table>
		</footer>
</html>
