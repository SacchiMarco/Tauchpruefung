<form action="?id=unfaelle&&check=4321" method="post">
<table class="tabelle">
	<tr>
		<td class="spallte1">1. <span>Wie vermeiden wir einen Backout?<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="1-1" value="1" type="checkbox" <?php if(isset($_POST['1-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Mehrmaliges tiefes schnelles 
				Durchatmen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="1-2" value="1" type="checkbox" <?php if(isset($_POST['1-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Nicht hyperventilieren vor dem 
				Abtauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="1-3" value="1" type="checkbox" <?php if(isset($_POST['1-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Nichts fettiges Essen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="1-4" value="1" type="checkbox" <?php if(isset($_POST['1-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Wenig trinken</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1"><span>2. Was ist ein Barotauma?</span><br>
		<textarea cols="20" name="frage2" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage2'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>(Baro)= 
		Druck (Trauma)= Verletzung<br>Entsteht bei einem Druckunterschied 
		zwischen einer Körperhöhle und der Umgebung, wenn der Druckausgleich 
		nicht stattfindet. </span><?php }?></td>
	</tr>
</table>
<table class="tabelle">
	<tr>
		<td class="spallte1">3. Wie kann ich einem Barotrauma vorbeugen?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="3-1" value="1" type="checkbox" <?php if(isset($_POST['3-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Nicht mit einer Erkältung 
				tauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="3-2" value="1" type="checkbox" <?php if(isset($_POST['3-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Mehrmaliger Druchausgleich beim 
				Abtauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="3-3" value="1" type="checkbox" <?php if(isset($_POST['3-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Aufstiegsgeschwindigkeit 
				einhalten</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="3-4" value="1" type="checkbox" <?php if(isset($_POST['3-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Guter Trainingsstand</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">4. Was verursacht ein stechenden Schmer über den 
		Augen, während des Abtauchens?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="4-1" value="1" type="checkbox" <?php if(isset($_POST['4-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Masken-Barotrauma</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="4-2" value="1" type="checkbox" <?php if(isset($_POST['4-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Kaltes Wasser</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="4-3" value="1" type="checkbox" <?php if(isset($_POST['4-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Ohren-Barotrauma</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="4-4" value="1" type="checkbox" <?php if(isset($_POST['4-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Stirnhöhlen-Barotrauma</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">5. Wie kann es beim Tauchen zu einem 
		Trommelfellriss kommen?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="5-1" value="1" type="checkbox" <?php if(isset($_POST['5-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Auftauchen mit angehaltenem Atem</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="5-2" value="1" type="checkbox" <?php if(isset($_POST['5-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Druckausgleich nicht 
				durchgeführt beim Abtauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="5-3" value="1" type="checkbox" <?php if(isset($_POST['5-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Bei Panik</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="5-4" value="1" type="checkbox" <?php if(isset($_POST['5-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Bei &Uuml;beranstrengung</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">6. Bei Erkältungen oder sonstigen Erkrankungen der 
		oberen Atemwege ist es ratsam, ...<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="6-1" value="1" type="checkbox" <?php if(isset($_POST['6-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">ein Schleimhaut-abschwellendes 
				Medikament nehmen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="6-2" value="1" type="checkbox" <?php if(isset($_POST['6-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">nur im warmen Wasser tauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="6-3" value="1" type="checkbox" <?php if(isset($_POST['6-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">nicht tauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="6-4" value="1" type="checkbox" <?php if(isset($_POST['6-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">nach dem Tauchen eine warme 
				Wollmütze tragen</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">7. Weshalb achte ich beim Aufstieg besonders auf 
		das Ausatmen?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="7-1" value="1" type="checkbox" <?php if(isset($_POST['7-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Um kein Barotrauma der 
				Schädelhöhle zu verursachen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="7-2" value="1" type="checkbox" <?php if(isset($_POST['7-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Um den Auftrieb auszugleichen 
				(Archimedes)</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="7-3" value="1" type="checkbox" <?php if(isset($_POST['7-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Um den gesättigten Stickstoff 
				schneller abzuatmen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="7-4" value="1" type="checkbox" <?php if(isset($_POST['7-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Damit es zu keinem Lungenriss 
				kommt</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">8. <span>Welches Gas ist für den Tiefenrausch 
		verantwortlich?<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="8-1" value="1" type="checkbox" <?php if(isset($_POST['8-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Sauerstoff</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="8-2" value="1" type="checkbox" <?php if(isset($_POST['8-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Kohlendioxid</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="8-3" value="1" type="checkbox" <?php if(isset($_POST['8-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Stickstoff</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="8-4" value="1" type="checkbox" <?php if(isset($_POST['8-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Kohlenmonoxid</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">9. Wie vermeide ich einen Lugenriss?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="9-1" value="1" type="checkbox" <?php if(isset($_POST['9-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Nicht tiefer als 10 Meter 
				tauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="9-2" value="1" type="checkbox" <?php if(isset($_POST['9-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Regelmässiges Abatmen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="9-3" value="1" type="checkbox" <?php if(isset($_POST['9-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Nicht husten</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="9-4" value="1" type="checkbox" <?php if(isset($_POST['9-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Einhalten der 
				Aufstiegsgeschwindigkeit</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">10. Zähle mögliche Symtome eines Tiefenrausches auf 
		...<br>
		<textarea cols="20" name="frage10" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage10'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>
			
		
		</span>
		<table class="antworttabelle">
			<tr>
				<td>- Euphorie</td>
				<td>- Selbstüberschätzung</td>
			</tr>
			<tr>
				<td>- Verminderte Konzentration</td>
				<td>- Nachlassende Kritikfähigkeit</td>
			</tr>
			<tr>
				<td>- Panik</td>
				<td>- Angs</td>
			</tr>
			<tr>
				<td>- Nachlassen der Leistungsfähigkeit</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		<?php }?></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">11. Ab welchen Tiefen kann ein Tiefenrausch 
		auftreten?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="11-1" value="1" type="checkbox" <?php if(isset($_POST['11-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Ab zirka 25m Tiefe, in Form von 
				unkontrollierten Handlungen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="11-2" value="1" type="checkbox" <?php if(isset($_POST['11-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3"><span>Ab zirka 15m Tiefe, in 
				Form von unkontrollierten Handlungen</span></td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="11-3" value="1" type="checkbox" <?php if(isset($_POST['11-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3"><span>Ab zirka 40m Tiefe, in 
				Form von unkontrollierten Handlungen</span></td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="11-4" value="1" type="checkbox" <?php if(isset($_POST['11-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">&Uuml;ber 50m Tiefe</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">12. Welche der folgenden Angaben begünstigen eine 
		Deko-Krankheit?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="12-1" value="1" type="checkbox" <?php if(isset($_POST['12-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Zu tiefes Tauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="12-2" value="1" type="checkbox" <?php if(isset($_POST['12-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Zu schnelles Auftauchen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="12-3" value="1" type="checkbox" <?php if(isset($_POST['12-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Tauchprofil nicht eingehalten</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="12-4" value="1" type="checkbox" <?php if(isset($_POST['12-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Alle Punkte sind richtig</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">13. Wie verhalte ich mich bei den ersten Anzeichen 
		eines Tiefenrausches?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="13-1" value="1" type="checkbox" <?php if(isset($_POST['13-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Stoppen und tief durchatmen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="13-2" value="1" type="checkbox" <?php if(isset($_POST['13-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Auftauchen und mind. eine Woche 
				mit Tauchen pausieren</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="13-3" value="1" type="checkbox" <?php if(isset($_POST['13-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Versuche es zu unterdrücken und 
				tauche weiter</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="13-4" value="1" type="checkbox" <?php if(isset($_POST['13-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">In geringere Wassertiefen 
				auftauchen</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">14. Wie reagierst du, wenn dein Partner eine Stunde 
		nach dem Tauchgang über Lähmungserscheinungen in den Beinen klagt?<br>
		<textarea cols="20" name="frage14" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage14'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>
			<table class="antworttabelle">
			<tr>
				<td>1. Hilfe:</td>
				<td>Mit 100% Sauerstoff beatmen, REGA 1414 Stichwort: 
				Tauchnufall</td>
			</tr>
			<tr>
				<td>2. Hilfe: </td>
				<td>Transport in einsetzbereite Duckkammer</td>
			</tr>
			</table>
		
		</span>
		
		<?php }?></td>
	</tr>
</table>


<!-- Ab hier nichts Aendern -->
	<div style="text-align:center">
		<button name="Abutton1">zum Antworten anzeigen klicken</button>
	</div>

</form>
