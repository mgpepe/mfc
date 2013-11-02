
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #eaeaea; margin-top:20px;">
  <tr>
    <td>
        <div style="padding:15px; font-family:Arial, Helvetica, sans-serif; display:inline-block; font-size:12px; color:#555555;">
       	  <strong style="color:#333333; font-size:15px;">Contacts</strong><br /><br />
        	<table width="100%" border="0" cellspacing="5" cellpadding="10">
        		 <?php if(!empty($name)) { ?>
					
              <tr>
                <td width="120" valign="top"><strong>Name</strong></td>
                <td valign="top"><?php echo ($name);?></td>
              </tr>
              <?php } ?>
              <tr>
                <td valign="top"><strong>Email</strong></td>
                <td valign="top"><?php echo ($email);?></td>
              </tr>

			  <tr>
                <td valign="top"><strong>Subject</strong></td>
                <td valign="top"><?php echo $message;?></td>
              </tr>

			 </table>

        </div>
    </td>
  </tr>
</table>
