<?php 

/**
* 	Helper for generating documentation
*/
class Docgen
{

	 function parseDocument($data){
		return '<!DOCTYPE html>
				<html>
				<head>
				    <link rel="stylesheet" type="text/css" href="css.css">
				</head>
				<body>
				<div style="width: 210mm; height: 297mm">

				<p id="stred">
				    TECHNICKÁ UNIVERZITA V KOŠICIACH 
				</p>
				<p id="stred">
				    FAKULTA ELEKTROTECHNIKY A INFORMATIKY
				</p>
				<p id="stred">
				    KATEDRA POČÍTAČOV A INFORMATIKY
				</p>
				<br><br><br><br><br><br><br><br><br><br><br>
				<p id="stred">
				    <strong>'.$data["projectName"].'</strong>
				</p>
				<p id="stred">
				    SYSTÉMOVÁ PRÍRUČKA
				</p>
				<br><br>
				<p id="stred">
				    '.$data["schoolSubject"].'
				</p>
				<br><br><br><br><br><br><br><br><br><br><br>
				<table border="0" align="center" width=70%>
				    <tr>
				        <td>
				            <table border="0">
				                <tr>
				                    <td>Dátum:</td>
				                    <td>'.$data["date"].'</td>
				                </tr>
				                <tr>
				                    <td>Ročník:</td>
				                    <td>'.$data["classYear"].'</td>
				                </tr>
				                <tr>
				                    <td>Meno učiteľa:</td>
				                    <td>'.$data["teacher"].'</td>
				                </tr>
				                <tr>
				                    <td>Meno konzultanta:</td>
				                    <td>'.$data["consultant"].'</td>
				                </tr>
				            </table>
				        </td>
				        <td>
				            <table border="0">
				                <tr>
				                    <td>Vypracovali:</td>
				                </tr>
				                <tr>
				                    <td>'.$data["students"].'</td>
				                </tr>
				                
				            </table>
				        </td>
				    </tr>
				</table>

				</div>
				<div style="width: 210mm; height: 297mm">

				    <h2>
				       1. Úvod
				    </h2>
				    <p>
				   	 	'.$data["introText"].'
				    </p>

				</div>
				<div style="width: 210mm; height: 297mm">

				    <h2>
				        2. Analýza úlohy
				    </h2>
				    <p>
				    	'.$data["analyzationText"].'
				        <div align="center">
				        	<img src="'.$data["analizationImage_1"].'" align="top">
				        </div>
				        <p id="stred">Obr.1</p>
				        <div align="center">
				        	<img src="'.$data["analizationImage_2"].'" align="top">
				        </div>
				        <p id="stred">Obr.2</p>
				    </p>

				</div>

				<div style="width: 210mm; height: 297mm">

				    <h2>
				        3. SQL SKRIPT
				    </h2>
				<br><br>
				    '.$data["sqlText"].'
				    	<div align="center">
				        	<img src="'.$data["sqlImage"].'" align="top">
				        </div>
				        <p id="stred">Obr.3</p>
				</div>

				<div style="width: 210mm; height: 297mm">
				    <h3>
				        4.4 Popis tried
				    </h3>
				    <br><br>
				    <p>
				    	'.$data["alternativeText"].'
				    	<div align="center">
				        	<img src="'.$data["alternativeImage"].'" align="top">
				        </div>
				        <p id="stred">Obr.4</p>
				    </p>

				</div>

				<div style="width: 210mm; height: 297mm">

				    <h2>
				        7. Zhodnotenie riešenia
				    </h2>
				    <p>
				    	'.$data["conclusionText"].'
				    </p>
				        
				</div>

				</body>
				</html>';
	}

}