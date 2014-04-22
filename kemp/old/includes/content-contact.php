 
    
    <div id="primaryWrapper">
    	<div id="primaryContent">
        	
            <h1>We&rsquo;d love to hear from you</h1>
            
            <div class="contactForm">
            	
                <h2>Send us a message</h2>
                
                
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                	
                    <table>
                    	<tr>
                        	<td class="tdLabel"><label>Your name*</label></td>
                            <td>
                            	<input type="text" name="enquiryName" value="<?php echo $_SESSION['enquiryName']; ?>" />
                            	<?php echo $errors['enquiryName']; ?>
                            </td>
                        </tr>
                        <tr>
                        	<td><label>Email address*</label></td>
                            <td>
                            	<input type="text" name="enquiryEmail" value="<?php echo $_SESSION['enquiryEmail']; ?>" />
                                <?php echo $errors['enquiryEmail']; ?>
                            </td>
                        </tr>
                        <tr>
                        	<td><label>Telephone number</label></td>
                            <td>
                            	<input type="text" name="enquiryPhone" value="<?php echo $_SESSION['enquiryPhone']; ?>" />
                            </td>
                        </tr>
                        <tr>
                        	<td><label>Message*</label></td>
                            <td>
                            	<textarea name="enquiryMessage"><?php echo $_SESSION['enquiryMessage']; ?></textarea>
                                <?php echo $errors['enquiryMessage']; ?>
                            </td>
                        </tr>
                        <tr>
                        	<td><input name="submitted" type="hidden" id="submitted" value="1" /></td>
                            <td><input type="submit" value="send" id="inputSubmit" /></td>
                        </tr>
                    </table>
                
                </form>
                
            
            </div>
            
            <div class="contactDetails">
            	<h3>Contact details</h3>
                <p><span>e</span> <a href="mailto:">enquiries@iode.co.uk</a></p>
                <p><span>t</span> 0772 586 8647</p>
            </div>
            
        </div>
    </div>
    
    
    
