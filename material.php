<?php
?>
<form action="?id=material&&check=4321" method="post">


<table class="tabelle">
	<tr>
		<td class="spallte1"><span>1. Worauf achtest du beim Kauf einer Taucherbrille?</span><br>
		<textarea cols="20" name="frage1" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage1'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><span><?php if(isset($_GET['check'])){?>Sicherheitsglas, gut zugänglicher Nasenerker, gute 
		Passform, nicht zu grosses Volumen<?php }?></span></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1"><span>2. Welcher der folgenden Ausrüstungsgegenständen 
		ist für einen Tauchgang unverzichtbar?<br>
<table class="checkboxtabelle">
	<tr>
		<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
		<td class="checktabelleSpalte2">
		<input class="checkbox" name="2-1" value="1" type="checkbox" <?php if(isset($_POST['2-1'])){ echo ("checked=") ;} ?> ></td>
		<td class="checktabelleSpalte3" >Taucheruhr</td>
	</tr>
	<tr>
		<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png" class="checkimg"><?php }?></td>
		<td class="checktabelleSpalte2">
		<input class="checkbox" name="2-2" value="2" type="checkbox" <?php if(isset($_POST['2-2'])){ echo ("checked=") ;} ?> ></td>
		<td class="checktabelleSpalte3" >Trockentauchanzug</td>
	</tr>
	<tr>
		<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png" class="checkimg"><?php }?></td>
		<td class="checktabelleSpalte2">
		<input class="checkbox" name="2-3" value="3" type="checkbox" <?php if(isset($_POST['2-3'])){ echo ("checked=") ;} ?> ></td>
		<td class="checktabelleSpalte3" >Stirnlamp</td>
	</tr>
	<tr>
		<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png" class="checkimg"><?php }?></td>
		<td class="checktabelleSpalte2">
		<input class="checkbox" name="2-4" value="4" type="checkbox" <?php if(isset($_POST['2-4'])){ echo ("checked=") ;} ?> ></td>
		<td class="checktabelleSpalte3">Finimeter</td>
	</tr>
</table>		
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1"><span>3. Auf welhe Kriterien achtest du beim Kauf von Geräteflossen?</span><br>
		<textarea cols="20" name="frage3" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage3'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><span><?php if(isset($_GET['check'])){?>Länge und Härte der Flossen sollten dem 
		Trainingsstand angepasst sein.<?php }?></span> </td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">4. Was ist unwichtig beim Kauf einer Tauchermaske?<br>
<table class="checkboxtabelle">
	<tr>
		<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
		<td class="checktabelleSpalte2">
		<input name="4-1" value="1" type="checkbox" <?php if(isset($_POST['4-1'])){ echo ("checked=") ;} ?>></td>
		<td class="checktabelleSpalte3">Sicherheitsglas</td>
	</tr>
	<tr>
		<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
		<td class="checktabelleSpalte2">
		<input name="4-2" value="1" type="checkbox" <?php if(isset($_POST['4-2'])){ echo ("checked=") ;} ?>></td>
		<td class="checktabelleSpalte3">Nasenerker</td>
	</tr>
	<tr>
		<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
		<td class="checktabelleSpalte2">
		<input name="4-3" value="1" type="checkbox" <?php if(isset($_POST['4-3'])){ echo ("checked=") ;} ?>></td>
		<td class="checktabelleSpalte3">Gute Passform</td>
	</tr>
	<tr>
		<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
		<td class="checktabelleSpalte2">
		<input name="4-4" value="1" type="checkbox" <?php if(isset($_POST['4-4'])){ echo ("checked=") ;} ?>></td>
		<td class="checktabelleSpalte3">Ausblasventil</td>
	</tr>
</table>
		</td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">5. Welche Masse muss ein Schnorchel aufweisen?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="5-1" value="1" type="checkbox" <?php if(isset($_POST['5-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Max. 40 cm 
				lang und max. 3.0 cm &Oslash, leuchtfarbend </td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="5-2" value="1" type="checkbox" <?php if(isset($_POST['5-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3" ><span>Max. 
				35 cm 
				lang und max. 2.5 cm &Oslash, leuchtfarbend
		</span></td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="5-3" value="1" type="checkbox" <?php if(isset($_POST['5-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3"><span>Max. 
				30 cm 
				lang und max. 3.5 cm &Oslash, leuchtfarbend
		</span></td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="5-4" value="1" type="checkbox" <?php if(isset($_POST['5-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3"><span>Max. 45 cm 
				lang und max. 2.0 cm &Oslash, leuchtfarbend
		</span></td>
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
		<td class="spallte1">6. Erkläre das Prinzip eines Nasstauchanzuges:<br>
		<textarea cols="20" name="frage6" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage6'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><span><?php if(isset($_GET['check'])){?>Das 
		zwischen Anzug und Haut eindringende Wasser erwärmt sich und bildet 
		einen Isolierenden Wasserfilm auf der Haut. Zusätzlich halten auch die 
		eingeschlossenen Gasblasen im Neopren die Kälte ab.<?php } ?></span></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">7. <span>Was für eine Funktion hat eine erste 
		Stufe?<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="7-1" value="1" type="checkbox" <?php if(isset($_POST['7-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Erhöht den Flaschendruck auf den 
				Umgebungsdruck</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="7-2" value="1" type="checkbox" <?php if(isset($_POST['7-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Erhöht den Flaschendruck auf den 
				Wasserdruck</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="7-3" value="1" type="checkbox" <?php if(isset($_POST['7-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Vermindert den Flaschendruck auf 
				den Umgebungsdruck</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="7-4" value="1" type="checkbox" <?php if(isset($_POST['7-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3"><span>Vermindert den 
				Flaschendruck auf den Wasserdruck</span></td>
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
		<td class="spallte1">8. Der Inflator fördert Luft mit<span> ...<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="8-1" value="1" type="checkbox" <?php if(isset($_POST['8-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Hochdruck (HD)</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="8-2" value="1" type="checkbox" <?php if(isset($_POST['8-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Umgebungsdruck</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="8-3" value="1" type="checkbox" <?php if(isset($_POST['8-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Flaschendruck</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="8-4" value="1" type="checkbox" <?php if(isset($_POST['8-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Mitteldruck (MD)</td>
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
		<td class="spallte1">9. Welche Aussage üfer das Finimeter ist NICHT 
		korrekt? <span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="9-1" value="1" type="checkbox" <?php if(isset($_POST['9-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Es dient der Kontrolle des 
				Flaschendruckes</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="9-2" value="1" type="checkbox" <?php if(isset($_POST['9-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Eine Instumentenkontrolle kann 
				am Finischlauch befestigt sein</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="9-3" value="1" type="checkbox" <?php if(isset($_POST['9-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Der Finicheck sollte alle paar 
				Minuten durchgeführt werden</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="9-4" value="1" type="checkbox" <?php if(isset($_POST['9-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Spätestens beim Erreichen von 30 
				bar muss der Finicheck druchgeführt werden</td>
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
		<td class="spallte1">10. In welchen Abständen und auf welchem Druck muss 
		eine Tauchfalsche aus Stahl vom EGI geprüft werden?<br>
		<textarea cols="20" name="frage10" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage10'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>Alle 2&frac12; 
		Jahre Sichtprüfung und alle 5 Jahre mit 300 bar Druckprüfung</span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">11. Zähle alle Ausrüstungsgegenstände auf, die du 
		für einen Tauchgang benötigst.<br>
		<textarea cols="20" name="frage11" rows="3" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage11'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>
		<table class="antworttabelle" >
			<tr>
				<td>Tauchanzug</td>
				<td>Kopfhaube</td>
				<td>Maske</td>
			</tr>
			<tr>
				<td>Schnorchel</td>
				<td>Messer</td>
				<td>Blei</td>
			</tr>
			<tr>
				<td>Tauchflasche</td>
				<td>Jacket</td>
				<td>Finimeter</td>
			</tr>
			<tr>
				<td>Tiefenmesser</td>
				<td>Tauchcomputer</td>
				<td>Kompass</td>
			</tr>
			<tr>
				<td>Lungenautomaten</td>
				<td>Tauchlampe</td>
				<td>Tauchtabelle</td>
			</tr>
			<tr>
				<td>Taucheruhr</td>
				<td>Tauchflagge</td>
				<td>&nbsp;</td>
			</tr>
		</table></span><?php }?>
		</td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">12. Welche Aussage trifft NICHT auf <span>einen 
		Nasstauchanzug zu?<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="-1" value="1" type="checkbox" <?php if(isset($_POST['-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Der Nasstauchanzug bewirkt einen 
				positiven Auftrieb</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="-2" value="1" type="checkbox" <?php if(isset($_POST['-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Der Nasstauchanzug verfügt über 
				einen Mitteldurckanschluss (MD)</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="-3" value="1" type="checkbox" <?php if(isset($_POST['-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Schützt vor Kälte</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="-4" value="1" type="checkbox" <?php if(isset($_POST['-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Ist unempfindlich gegen 
				Sonnenstrahlen</td>
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
		<td class="spallte1">13. Was muss ein Bleigurt unbedingt aufweisen?<br>
		<textarea cols="20" name="frage13" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage13'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>Eine Schnellabwurfschnalle</span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">14. In welchem periodischen Abständen muss eine 
		Tauchflasche aus Stahl vom EGI geprüft werden?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="14-1" value="1" type="checkbox" <?php if(isset($_POST['14-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Sichtprüfung alle 2 Jahre, 
				Druckprüfung alle 4 Jahre</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="14-2" value="1" type="checkbox" <?php if(isset($_POST['14-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Sicht- und Druckprüfung alle 2 
				Jahre</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="14-3" value="1" type="checkbox" <?php if(isset($_POST['14-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Sichtprüfung alle 2&frac12; 
				Jahre, Druckprüfung alle 5 Jahre</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="14-4" value="1" type="checkbox" <?php if(isset($_POST['14-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Sichtprüfung alle 5 Jahre, 
				Druckprüfung alle 10 Jahre</td>
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
		<td class="spallte1">15. Wie viele Liter Luft enthält eine 
		Pressluftflasche mit deinem Volumen von 12 Litern un<span>d einem 
		Fülldruck von 210 bar?<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="15-1" value="1" type="checkbox" <?php if(isset($_POST['15-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">2'520 lt Sauerstoff</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="15-2" value="1" type="checkbox" <?php if(isset($_POST['15-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">3'000 lt Luft</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="15-3" value="1" type="checkbox" <?php if(isset($_POST['15-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">2'400 lt Luft</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="15-4" value="1" type="checkbox" <?php if(isset($_POST['15-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">2'520 lt Luft</td>
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
		<td class="spallte1">16. Welche Peilung stellst du grundsätzlich zu 
		Beginn des Tauchganges am Kompass ein?<br>
		<textarea cols="20" name="frage16" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage16'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>Grundsätzlich Peilung: Richtung Land </span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">17. Für was ist ein Tauchmesser NICHT vorgesehen?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="17-1" value="1" type="checkbox" <?php if(isset($_POST['17-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Als Waffe</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="17-2" value="1" type="checkbox" <?php if(isset($_POST['17-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Als Schneidewerkzeug</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="17-3" value="1" type="checkbox" <?php if(isset($_POST['17-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Zum Befreien aus Fischernezten</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="17-4" value="1" type="checkbox" <?php if(isset($_POST['17-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Als allgemeines Werkzeug</td>
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
		<td class="spallte1">18. Auf welchem Druck wird eine Stahlflasche bei 
		dem EGI geprüft?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="18-1" value="1" type="checkbox" <?php if(isset($_POST['18-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">600 bar</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="18-2" value="1" type="checkbox" <?php if(isset($_POST['18-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">200 bar</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="18-3" value="1" type="checkbox" <?php if(isset($_POST['18-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">300 bar</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="18-4" value="1" type="checkbox" <?php if(isset($_POST['18-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">450 bar</td>
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
		<td class="spallte1">19. Auf was ist bei der Handhabung eines Kompasses 
		speziell zu achten?<br>
		<textarea cols="20" name="frage19" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage19'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>Genügend 
		Abstand zu Metall, Tauchlampen und magnetischen Teilen halten </span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">20. Wie wird der Kompass zu Beginn des Tauchganges 
		eingestellt?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="20-1" value="1" type="checkbox" <?php if(isset($_POST['20-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">In die Richtung, in die ich 
				tauchen möchte</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="20-2" value="1" type="checkbox" <?php if(isset($_POST['20-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Ich peile die Himmelrichtung an </td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="20-3" value="1" type="checkbox" <?php if(isset($_POST['20-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Brauche ich nur bei 
				Bootstauchgängen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="20-4" value="1" type="checkbox" <?php if(isset($_POST['20-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Grundsätzlich wird Richtung Land 
				eingestellt</td>
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
		<td class="spallte1">21. Das wichtigste Merkmal eines Bleigurtes ist:<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="21-1" value="1" type="checkbox" <?php if(isset($_POST['21-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">dass er leicht verstellbar ist</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="21-2" value="1" type="checkbox" <?php if(isset($_POST['21-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">dass er von der gleichen Marke 
				ist wie der Tauchanzug</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="21-3" value="1" type="checkbox" <?php if(isset($_POST['21-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">dass er eine gut zugängliche 
				Schnellabwurfschnalle besitzt</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="21-4" value="1" type="checkbox" <?php if(isset($_POST['21-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">das der Gurt mit Bleistoppern 
				versehen ist</td>
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
		<td class="spallte1">22. Nach welchen Kriterien würdest du eine 
		Tarierweste kaufen?<br>
		<textarea cols="20" name="frage22" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage22'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>
		<table class="antworttabelle">
			<tr>
				<td>Guter Sitz und Passform</td>
			</tr>
			<tr>
				<td>Angemessenes Luftvolumen</td>
			</tr>
			<tr>
				<td>Genügend Taschen und &Ouml;sen zum Befestigen</td>
			</tr>
			<tr>
				<td>Gut zu bedienender Inflator (Power oder Soft)</td>
			</tr>
			<tr>
				<td>Zwekmässige Vergurtung</td>
			</tr>
		</table>
		</span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">23. Wieso müssen wir vor dem Tauchgang eine 
		Tauchflagge aufstellen?<br>
		<textarea cols="20" name="frage23" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage23'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>Aus rechtlichen und sicherheitestechnischen Gründen </span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1"><span>24. Weshalb benötigen wir einen Tauchanzug?</span><br>
		<textarea cols="20" name="frage24" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage24'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>Der Tauchanzug schützt vor Kälte, Unterkühlung und Verletzungen </span><?php }?></td>
	</tr>
</table>

<table class="tabelle">
	<tr>
		<td class="spallte1">25. Mit welchen Instrumenten<span> kann ich eine 
		Dekostufe berechenen?<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="25-1" value="1" type="checkbox" <?php if(isset($_POST['25-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Tauchcomputer</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="25-2" value="1" type="checkbox" <?php if(isset($_POST['25-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Tiefenmesser, Uhr, Kompass</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="25-3" value="1" type="checkbox" <?php if(isset($_POST['25-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Tiefenmesser, Uhr, Tauchtabelle</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="25-4" value="1" type="checkbox" <?php if(isset($_POST['25-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Lame, Uhr, Tauchtabelle</td>
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
		<td class="spallte1">26.Welche Vor- und Nachteile hat ein Tauchcomputer 
		gegenüber einem manuellen Instrument?<br>
		<textarea cols="20" name="frage26" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage26'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>
		<table class="antworttabelle">
		<tr>
			<td>Vorteil:</td>
			<td>sehr genau, keine Wartung</td>
		</tr>
		<tr>
			<td>Nachteil:</td>
			<td>sehr empfindlich auf Schläge, Totalausfall möglich</td>
		</tr>
	</table>
		</span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">27. Weshalb ist ein Tauchermesser ein sehr 
		wichtiger Ausrüstungsgegenstand?<br>
		<textarea cols="20" name="frage27" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage27'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>Das Messer ist unerlässlich für den Fall, 
		dass sich ein Taucher in Fischernetzen oder Angelschnüren verfängt </span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">28. Was sollte ich bei der Pflege eines 
		Tauchanzuges unterlassen?<span><br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="28-1" value="1" type="checkbox" <?php if(isset($_POST['28-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Als Gleitmittel für 
				Reisverschlüsse Silikonspray verwenden</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="28-2" value="1" type="checkbox" <?php if(isset($_POST['28-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Waschen mit der Waschmaschine</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="28-3" value="1" type="checkbox" <?php if(isset($_POST['28-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Zum Trockenen an die Sonne 
				hängen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="28-4" value="1" type="checkbox" <?php if(isset($_POST['28-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Aufbewahren an einem kühlen Ort</td>
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
		<td class="spallte1">29. Welche Farben muss eine Tauchflagge in der 
		Schweiz aufweisen?<br>
		<textarea cols="20" name="frage29" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage29'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>Weiss-blaue Flagge "A" der internationalen Flaggenalphabetes </span><?php }?></td>
	</tr>
</table>


<table class="tabelle">
	<tr>
		<td class="spallte1">30. Aus welche<span>m Material sind Nass- und 
		Halbtrockenanzüge hergestellt?<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name=30"-1" value="1" type="checkbox" <?php if(isset($_POST['30-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Leinen</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="30-2" value="1" type="checkbox" <?php if(isset($_POST['30-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Natur Kautschuk</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/ok.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="30-3" value="1" type="checkbox" <?php if(isset($_POST['30-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Neopren</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="30-4" value="1" type="checkbox" <?php if(isset($_POST['30-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">Kunststoffgewebe</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>
	




<!-- Ab hier nichts Aendern -->
	<div style="text-align:center">
		<button name="Abutton1">zum Antworten anzeigen klicken</button>
	</div>



</form>
