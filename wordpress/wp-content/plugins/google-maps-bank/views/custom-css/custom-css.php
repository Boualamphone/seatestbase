<?php
/**
 * This Template is used for managing directions.
 *
 * @author  Tech Banker
 * @package google-maps-bank/views/custom-css
 * @version 2.0.0
 */
if (!defined("ABSPATH")) {
   exit;
} // Exit if accessed directly
if (!is_user_logged_in()) {
   return;
} else {
   $access_granted = false;
   foreach ($user_role_permission as $permission) {
      if (current_user_can($permission)) {
         $access_granted = true;
         break;
      }
   }
   if (!$access_granted) {
      return;
   } else if (custom_css_google_map == "1") {
      ?>
      <div class="page-bar">
         <ul class="page-breadcrumb">
            <li>
               <i class="icon-custom-home"></i>
               <a href="admin.php?page=gmb_google_maps">
                  <?php echo $google_maps_bank; ?>
               </a>
               <span>></span>
            </li>
            <li>
               <span>
                  <?php echo $gm_custom_css; ?>
               </span>
            </li>
         </ul>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="portlet box vivid-green">
               <div class="portlet-title">
                  <div class="caption">
                     <i class="icon-custom-pencil"></i>
                     <?php echo $gm_custom_css; ?>
                  </div>
                   <p class="premium-editions-google-maps-bank">
                     <?php echo $gm_upgrade_kanow_about;?> <a href="<?php echo tech_banker_site_url;?>" target="_blank" class="premium-editions-documentation"><?php echo $gm_full_features;?></a> <?php echo $gm_chek_our;?> <a href="<?php echo tech_banker_site_url;?>frontend-demos" target="_blank" class="premium-editions-documentation"><?php echo $gm_online_demos;?></a>
                  </p>
               </div>
               <div class="portlet-body form">
                  <form id="ux_frm_custom_css">
                     <div class="form-body">
                        <div class="form-group">
                           <label class="control-label">
                              <?php echo $gm_custom_css; ?> :
                              <i class="icon-custom-question tooltips" data-original-title="<?php echo $gm_custom_css_tooltips; ?>" data-placement="right"></i>
                              <span class="required" aria-required="true"> <?php echo "( " . $gm_premium_edition_label . " )" ?> </span>
                           </label>
                           <textarea rows="20" class="form-control" name="ux_txt_custom_css" id="ux_txt_custom_css" placeholder="<?php echo $gm_custom_css_placeholder; ?>"></textarea>
                        </div>
                        <div class="line-separator"></div>
                        <div class="form-actions">
                           <div class="pull-right">
                              <input type="submit" class="btn vivid-green" name="ux_btn_custom_css" id="ux_btn_custom_css" value="<?php echo $gm_save_changes; ?>">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php
   } else {
      ?>
      <div class="page-bar">
         <ul class="page-breadcrumb">
            <li>
               <i class="icon-custom-home"></i>
               <a href="admin.php?page=gmb_google_maps">
                  <?php echo $google_maps_bank; ?>
               </a>
               <span>></span>
            </li>
            <li>
               <span>
                  <?php echo $gm_custom_css; ?>
               </span>
            </li>
         </ul>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="portlet box vivid-green">
               <div class="portlet-title">
                  <div class="caption">
                     <i class="icon-custom-pencil"></i>
                     <?php echo $gm_custom_css; ?>
                  </div>
               </div>
               <div class="portlet-body form">
                  <div class="form-body">
                     <strong><?php echo $gm_user_access_message; ?></strong>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
   }
}