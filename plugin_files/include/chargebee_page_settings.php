<div class='wrap'> <h2>Plan Page Settings </h2> 
<hr>
<div class="description"> 
</div>
<form action="" method=post>
<?php  wp_nonce_field("wp-action-cb-plugin-page-setting","nonce-cb-wordpress-action") ?>
<table class="form-table">
 <tr scope="row" valign="top">
   <th scope="row" valign="top">
      <label for="cb[plan_page]"> Plan Listing Page  </label>
   </th>
   <td>
     <?php
       wp_dropdown_pages(array("name"=>"cb[plan_page]", "show_option_none"=>"-- Choose One --" , 
                               "selected" => isset($cboptions["plan_page"]) ? $cboptions["plan_page"] : ""));
     ?> <br/>
     <span class="description"> The page where all your available plans are listed. </span>
  </td>
 </tr> 
 <?php if( isset($cboptions['plan_page_generated']) && $cboptions['plan_page_generated'] == "true" ) { ?>
 <tr valign="top">
    <th scope="row">
             <label for="currency"> Currency Symbol</label>
    </th>
     <td>
        <input type="text" name='cb[currency]' size='2' value='<?php echo ( isset($cboptions["currency"]) ? $cboptions["currency"] : "" ) ?>'  />
         <br/>
        <span class="description"> If you're using the plugin generated plan listing page, specify the currency symbol that should appear there. </span>
     </td>
   </tr>
 <?php } ?>
</table>
<br/>
<h2>Display Messages</h2> 
<h4>  Messages displayed during plan change </h4> 
<hr/>
<br/>
<table class="form-table">
   <tr valign="top">
            <th scope="row">
                   <label for="cb[checkout_success_msg]"> Success Message </label>
            </th>
            <td>
               <textarea name="cb[checkout_success_msg]" rows='3' cols='50'><?php echo htmlspecialchars($cboptions["checkout_success_msg"]) ?></textarea>
               <br/>
               <span class="description"> This message will be displayed when the plan change succeeds. </span>
            </td>
         </tr>
         <tr valign="top">
            <th scope="row">
                   <label for="cb[checkout_failure_msg]"> Failure Message </label>
            </th>
            <td>
               <textarea name="cb[checkout_failure_msg]" rows='3' cols='50'><?php echo htmlspecialchars($cboptions["checkout_failure_msg"]) ?></textarea>
               <br/>
               <span class="description"> This message will be displayed when the plan change fails. </span>
            </td>
         </tr>
    </table>
<br/>
<h4>Access control messages</h4>
<hr/>
<div class="description"> Configure the messages displayed to users when they try to access restricted content. </div>
   <table class="form-table">
       <tr valign="top">
           <th scope="row">
                <label for="cb[not_logged_in_msg]">'Not logged in' Message:</label>
           </th>
            <td>
                <textarea name='cb[not_logged_in_msg]' rows='3' cols='50'><?php echo htmlspecialchars($cboptions["not_logged_in_msg"]) ?></textarea>
                <br/>
                <span class="description">This message will be displayed when a customer who has not 'Logged in' is trying to access restriced content. </span>
           </td>
       </tr>
       <tr valign="top">
           <th scope="row">
                <label for="tablecell">'No Access' Message</label>
           </th>
           <td>
                <textarea name='cb[no_access_msg]' rows='3' cols='50'><?php echo htmlspecialchars($cboptions["no_access_msg"]) ?></textarea>
                <br/>
                <span class="description">This message will be displayed when a customer who has 'Logged in' is trying to access restriced content. </span>
           </td>
       </tr>
        <tr valign="top">
           <th scope="row">
                <label for="cb[cancel_msg]">'Canceled' Message</label>
           </th>
           <td>
                <textarea name='cb[cancel_msg]' rows='3' cols='50'><?php echo htmlspecialchars($cboptions["cancel_msg"]) ?></textarea>
                <br/>
               <span class="description">This message will be displayed when the customer subscription is canceled.</span>
           </td>
       </tr>
      </table>
<p class="submit">
<input type="submit" value="Submit" class="button-primary">
</p>
<br>
</form>
</div>
