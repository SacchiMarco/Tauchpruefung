<!-- 
<?php if(isset($_GET['check'])){echo $_GET[''];} ?> 
<?php if(isset($_POST[''])){ if($_POST['']==''){ echo ("checked=");}} ?>

<?php if(isset($_POST['frage2-1'])){ echo ("checked=") ;} ?>
<?php if(isset($_POST['frage2-1'])){?> checked="" <?php } ?>

-->


<head>
<meta content="de-ch" http-equiv="Content-Language">
<style type="text/css">
.tabelle {
	width:880px;
	margin:10px 0 10px 0;
	border-collapse: collapse;
	border-spacing:0;
}
.spallte1{
	width:850px;
	text-align:left;
	padding-left:10px;
}
.spallte2{
	width:850px;
	text-align:left;
	padding-left:10px;
	background-color:#99FF99;

}
.spallte2 span{
	background-color:#99FF99;
}


.checkboxtabelle{
	width:800px;
	text-align:left;
	border-collapse: collapse;
	border-spacing:0;
	margin-left:20px;
	margin-top:10px;

}
.checktabelleSpalte1{
	width:30px;
}
.checktabelleSpalte2{
	width:30px;
}
.checktabelleSpalte3{
	width:740px;
}
.checkimg{
	width:20px;
	height:20px;
}

</style>
</head>
<!-- ************************************ TABELLE ZUM KOPIEREN *********************************** -->
<table class="tabelle">
	<tr>
		<td class="spallte1"><span>frage<br>
		<table class="checkboxtabelle">
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="-1" value="1" type="checkbox" <?php if(isset($_POST['-1'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">1</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="-2" value="1" type="checkbox" <?php if(isset($_POST['-2'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">2</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="-3" value="1" type="checkbox" <?php if(isset($_POST['-3'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">3</td>
			</tr>
			<tr>
				<td class="checktabelleSpalte1"><?php if(isset($_GET['check'])){?><img src="pic/falsch.png"  class="checkimg"><?php }?></td>
				<td class="checktabelleSpalte2">
				<input name="-4" value="1" type="checkbox" <?php if(isset($_POST['-4'])){ echo ("checked=") ;} ?>></td>
				<td class="checktabelleSpalte3">4</td>
			</tr>
		</table>
		</span></td>
	</tr>
	<tr>
		<td class="spallte2"><span></span></td>
	</tr>
</table>


<!-- ************************************ TABELLE ZUM KOPIEREN *********************************** -->
<table class="tabelle">
	<tr>
		<td class="spallte1"><span>frage</span><br>
		<textarea cols="20" name="frage" rows="2" style="width:800px"><?php if(isset($_GET['check'])){echo $_POST['frage'];} ?></textarea></td>
	</tr>
	<tr>
		<td class="spallte2"><?php if(isset($_GET['check'])){?><span>antwort </span><?php }?></td>
	</tr>
</table>
<!-- ************************************ TABELLE ZUM KOPIEREN *********************************** -->






