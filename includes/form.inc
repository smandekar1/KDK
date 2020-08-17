			<table cellpadding="0" cellspacing="0" width="100%">
			<form method="POST" action="http://www.kdkforging.com/thank_you.php" name="theForm" onSubmit="return ValidateInput();">
			<tr><td align="center" class="formheader" colspan="2">Request More Info Today!</td></tr>
			<tr><td class="formfields">First Name</td><td><? if ($T1cookie == "") { ?> <input type="text" name="T1" size="20"> <? } else { ?> <input type="text" name="T1" size="20" value="<?=$T1cookie?>"> <? } ?> </td></tr>
			<tr><td class="formfields">Last Name</td><td><? if ($T1cookie == "") { ?> <input type="text" name="T2" size="20"> <? } else { ?> <input type="text" name="T2" size="20" value="<?=$T2cookie?>"> <? } ?> </td></tr>
			<tr><td class="formfields">Company</td><td><? if ($T1cookie == "") { ?> <input type="text" name="T3" size="20"> <? } else { ?> <input type="text" name="T3" size="20" value="<?=$T3cookie?>"> <? } ?> </td></tr>
			<tr><td class="formfields">Email</td><td><? if ($T1cookie == "") { ?> <input type="text" name="T4" size="20"> <? } else { ?> <input type="text" name="T4" size="20" value="<?=$T4cookie?>"> <? } ?> </td></tr>
			<tr><td class="formfields">Phone</td><td><? if ($T1cookie == "") { ?> <input type="text" name="T5" size="20"> <? } else { ?> <input type="text" name="T5" size="20" value="<?=$T5cookie?>"> <? } ?> </td></tr>
			<tr><td class="formfields" colspan="2">Comments</td></tr>
			<tr><td colspan="2" style="line-height:10;"><? if ($T1cookie == "") { ?> <textarea rows="4" name="S1" cols="24"></textarea> <? } else { ?> <textarea rows="4" name="S1" cols="24"> <?=$S1cookie?> </textarea> <? } ?> </td></tr>
			<input name="currurl" value="http://www.kdkforging.com" type="hidden">
			<tr><td class="formfields" colspan="2"><? MathGuard::insertQuestion(); ?></td></tr>
			<tr><td colspan="2" height="5"></td></tr>
			<tr><td class="formfields" colspan="2" align="center"><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"></td></tr>
			</form>			
			</table>