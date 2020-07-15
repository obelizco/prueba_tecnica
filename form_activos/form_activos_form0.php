<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " activos"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " activos"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php
header("X-XSS-Protection: 1; mode=block");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
<input type="hidden" id="sc-mobile-lock" value='true' />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_fcha_cmpra button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_fcha_arrnque button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_fcha_fin_grntia button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_fcha_lctra button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_fcha_rgstro button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_fcha_actlzcion button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_activos/form_activos_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_activos_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_activos_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>
<script type="text/javascript" src="../_lib/lib/js/hotkeys.inc.js"></script>
<script type="text/javascript" src="../_lib/lib/js/hotkeys_setup.js"></script>
<script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
<script type="text/javascript">
function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   var fixedQuickSearchSize = {};
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     if ("boolean" == typeof fixedQuickSearchSize[sIdInput] && fixedQuickSearchSize[sIdInput]) {
       return;
     }
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     if (0 != oInput.height()) {
       oInput.css({
         'height': Math.max(oInput.height(), 16) + 'px',
       });
     }
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     fixedQuickSearchSize[sIdInput] = true;
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_activos_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" enctype="multipart/form-data" 
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_activos'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_activos'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " activos"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " activos"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"><?php echo date($this->dateDefaultFormat()); ?></div>
</div></td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-1", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-2", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-3", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-4", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-5", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-6", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><input type="hidden" name="fto1_ul_name" id="id_sc_field_fto1_ul_name" value="<?php echo $this->form_encode_input($this->fto1_ul_name);?>">
<input type="hidden" name="fto1_ul_type" id="id_sc_field_fto1_ul_type" value="<?php echo $this->form_encode_input($this->fto1_ul_type);?>">
<input type="hidden" name="fto2_ul_name" id="id_sc_field_fto2_ul_name" value="<?php echo $this->form_encode_input($this->fto2_ul_name);?>">
<input type="hidden" name="fto2_ul_type" id="id_sc_field_fto2_ul_type" value="<?php echo $this->form_encode_input($this->fto2_ul_type);?>">
<input type="hidden" name="fto3_ul_name" id="id_sc_field_fto3_ul_name" value="<?php echo $this->form_encode_input($this->fto3_ul_name);?>">
<input type="hidden" name="fto3_ul_type" id="id_sc_field_fto3_ul_type" value="<?php echo $this->form_encode_input($this->fto3_ul_type);?>">
<input type="hidden" name="fto4_ul_name" id="id_sc_field_fto4_ul_name" value="<?php echo $this->form_encode_input($this->fto4_ul_name);?>">
<input type="hidden" name="fto4_ul_type" id="id_sc_field_fto4_ul_type" value="<?php echo $this->form_encode_input($this->fto4_ul_type);?>">
<input type="hidden" name="fto5_ul_name" id="id_sc_field_fto5_ul_name" value="<?php echo $this->form_encode_input($this->fto5_ul_name);?>">
<input type="hidden" name="fto5_ul_type" id="id_sc_field_fto5_ul_type" value="<?php echo $this->form_encode_input($this->fto5_ul_type);?>">
<input type="hidden" name="fto6_ul_name" id="id_sc_field_fto6_ul_name" value="<?php echo $this->form_encode_input($this->fto6_ul_name);?>">
<input type="hidden" name="fto6_ul_type" id="id_sc_field_fto6_ul_type" value="<?php echo $this->form_encode_input($this->fto6_ul_type);?>">
<input type="hidden" name="prmtro_oprcion_ul_name" id="id_sc_field_prmtro_oprcion_ul_name" value="<?php echo $this->form_encode_input($this->prmtro_oprcion_ul_name);?>">
<input type="hidden" name="prmtro_oprcion_ul_type" id="id_sc_field_prmtro_oprcion_ul_type" value="<?php echo $this->form_encode_input($this->prmtro_oprcion_ul_type);?>">
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_actvo']))
           {
               $this->nmgp_cmp_readonly['id_actvo'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_actvo']))
    {
        $this->nm_new_label['id_actvo'] = "ID ACTVO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_actvo = $this->id_actvo;
   $sStyleHidden_id_actvo = '';
   if (isset($this->nmgp_cmp_hidden['id_actvo']) && $this->nmgp_cmp_hidden['id_actvo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_actvo']);
       $sStyleHidden_id_actvo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_actvo = 'display: none;';
   $sStyleReadInp_id_actvo = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_actvo"]) &&  $this->nmgp_cmp_readonly["id_actvo"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_actvo']);
       $sStyleReadLab_id_actvo = '';
       $sStyleReadInp_id_actvo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_actvo']) && $this->nmgp_cmp_hidden['id_actvo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_actvo" value="<?php echo $this->form_encode_input($id_actvo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_actvo_label" id="hidden_field_label_id_actvo" style="<?php echo $sStyleHidden_id_actvo; ?>"><span id="id_label_id_actvo"><?php echo $this->nm_new_label['id_actvo']; ?></span></TD>
    <TD class="scFormDataOdd css_id_actvo_line" id="hidden_field_data_id_actvo" style="<?php echo $sStyleHidden_id_actvo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_actvo_line" style="vertical-align: top;padding: 0px"><span id="id_read_on_id_actvo" class="css_id_actvo_line" style="<?php echo $sStyleReadLab_id_actvo; ?>"><?php echo $this->form_encode_input($this->id_actvo); ?></span><span id="id_read_off_id_actvo" class="css_read_off_id_actvo" style="<?php echo $sStyleReadInp_id_actvo; ?>"><input type="hidden" name="id_actvo" value="<?php echo $this->form_encode_input($id_actvo) . "\">"?><span id="id_ajax_label_id_actvo"><?php echo nl2br($id_actvo); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_actvo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_actvo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nmbre']))
    {
        $this->nm_new_label['nmbre'] = "NMBRE";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nmbre = $this->nmbre;
   $sStyleHidden_nmbre = '';
   if (isset($this->nmgp_cmp_hidden['nmbre']) && $this->nmgp_cmp_hidden['nmbre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nmbre']);
       $sStyleHidden_nmbre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nmbre = 'display: none;';
   $sStyleReadInp_nmbre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nmbre']) && $this->nmgp_cmp_readonly['nmbre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nmbre']);
       $sStyleReadLab_nmbre = '';
       $sStyleReadInp_nmbre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nmbre']) && $this->nmgp_cmp_hidden['nmbre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nmbre" value="<?php echo $this->form_encode_input($nmbre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nmbre_label" id="hidden_field_label_nmbre" style="<?php echo $sStyleHidden_nmbre; ?>"><span id="id_label_nmbre"><?php echo $this->nm_new_label['nmbre']; ?></span></TD>
    <TD class="scFormDataOdd css_nmbre_line" id="hidden_field_data_nmbre" style="<?php echo $sStyleHidden_nmbre; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nmbre_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nmbre"]) &&  $this->nmgp_cmp_readonly["nmbre"] == "on") { 

 ?>
<input type="hidden" name="nmbre" value="<?php echo $this->form_encode_input($nmbre) . "\">" . $nmbre . ""; ?>
<?php } else { ?>
<span id="id_read_on_nmbre" class="sc-ui-readonly-nmbre css_nmbre_line" style="<?php echo $sStyleReadLab_nmbre; ?>"><?php echo $this->nmbre; ?></span><span id="id_read_off_nmbre" class="css_read_off_nmbre" style="white-space: nowrap;<?php echo $sStyleReadInp_nmbre; ?>">
 <input class="sc-js-input scFormObjectOdd css_nmbre_obj" style="" id="id_sc_field_nmbre" type=text name="nmbre" value="<?php echo $this->form_encode_input($nmbre) ?>"
 size=50 maxlength=150 alt="{datatype: 'text', maxLength: 150, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nmbre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nmbre_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cdgo']))
    {
        $this->nm_new_label['cdgo'] = "CDGO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cdgo = $this->cdgo;
   $sStyleHidden_cdgo = '';
   if (isset($this->nmgp_cmp_hidden['cdgo']) && $this->nmgp_cmp_hidden['cdgo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cdgo']);
       $sStyleHidden_cdgo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cdgo = 'display: none;';
   $sStyleReadInp_cdgo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cdgo']) && $this->nmgp_cmp_readonly['cdgo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cdgo']);
       $sStyleReadLab_cdgo = '';
       $sStyleReadInp_cdgo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cdgo']) && $this->nmgp_cmp_hidden['cdgo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cdgo" value="<?php echo $this->form_encode_input($cdgo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cdgo_label" id="hidden_field_label_cdgo" style="<?php echo $sStyleHidden_cdgo; ?>"><span id="id_label_cdgo"><?php echo $this->nm_new_label['cdgo']; ?></span></TD>
    <TD class="scFormDataOdd css_cdgo_line" id="hidden_field_data_cdgo" style="<?php echo $sStyleHidden_cdgo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cdgo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cdgo"]) &&  $this->nmgp_cmp_readonly["cdgo"] == "on") { 

 ?>
<input type="hidden" name="cdgo" value="<?php echo $this->form_encode_input($cdgo) . "\">" . $cdgo . ""; ?>
<?php } else { ?>
<span id="id_read_on_cdgo" class="sc-ui-readonly-cdgo css_cdgo_line" style="<?php echo $sStyleReadLab_cdgo; ?>"><?php echo $this->cdgo; ?></span><span id="id_read_off_cdgo" class="css_read_off_cdgo" style="white-space: nowrap;<?php echo $sStyleReadInp_cdgo; ?>">
 <input class="sc-js-input scFormObjectOdd css_cdgo_obj" style="" id="id_sc_field_cdgo" type=text name="cdgo" value="<?php echo $this->form_encode_input($cdgo) ?>"
 size=30 maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cdgo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cdgo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rfrncia']))
    {
        $this->nm_new_label['rfrncia'] = "RFRNCIA";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rfrncia = $this->rfrncia;
   $sStyleHidden_rfrncia = '';
   if (isset($this->nmgp_cmp_hidden['rfrncia']) && $this->nmgp_cmp_hidden['rfrncia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rfrncia']);
       $sStyleHidden_rfrncia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rfrncia = 'display: none;';
   $sStyleReadInp_rfrncia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rfrncia']) && $this->nmgp_cmp_readonly['rfrncia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rfrncia']);
       $sStyleReadLab_rfrncia = '';
       $sStyleReadInp_rfrncia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rfrncia']) && $this->nmgp_cmp_hidden['rfrncia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rfrncia" value="<?php echo $this->form_encode_input($rfrncia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_rfrncia_label" id="hidden_field_label_rfrncia" style="<?php echo $sStyleHidden_rfrncia; ?>"><span id="id_label_rfrncia"><?php echo $this->nm_new_label['rfrncia']; ?></span></TD>
    <TD class="scFormDataOdd css_rfrncia_line" id="hidden_field_data_rfrncia" style="<?php echo $sStyleHidden_rfrncia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rfrncia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rfrncia"]) &&  $this->nmgp_cmp_readonly["rfrncia"] == "on") { 

 ?>
<input type="hidden" name="rfrncia" value="<?php echo $this->form_encode_input($rfrncia) . "\">" . $rfrncia . ""; ?>
<?php } else { ?>
<span id="id_read_on_rfrncia" class="sc-ui-readonly-rfrncia css_rfrncia_line" style="<?php echo $sStyleReadLab_rfrncia; ?>"><?php echo $this->rfrncia; ?></span><span id="id_read_off_rfrncia" class="css_read_off_rfrncia" style="white-space: nowrap;<?php echo $sStyleReadInp_rfrncia; ?>">
 <input class="sc-js-input scFormObjectOdd css_rfrncia_obj" style="" id="id_sc_field_rfrncia" type=text name="rfrncia" value="<?php echo $this->form_encode_input($rfrncia) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rfrncia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rfrncia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['srial']))
    {
        $this->nm_new_label['srial'] = "SRIAL";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $srial = $this->srial;
   $sStyleHidden_srial = '';
   if (isset($this->nmgp_cmp_hidden['srial']) && $this->nmgp_cmp_hidden['srial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['srial']);
       $sStyleHidden_srial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_srial = 'display: none;';
   $sStyleReadInp_srial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['srial']) && $this->nmgp_cmp_readonly['srial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['srial']);
       $sStyleReadLab_srial = '';
       $sStyleReadInp_srial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['srial']) && $this->nmgp_cmp_hidden['srial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="srial" value="<?php echo $this->form_encode_input($srial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_srial_label" id="hidden_field_label_srial" style="<?php echo $sStyleHidden_srial; ?>"><span id="id_label_srial"><?php echo $this->nm_new_label['srial']; ?></span></TD>
    <TD class="scFormDataOdd css_srial_line" id="hidden_field_data_srial" style="<?php echo $sStyleHidden_srial; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_srial_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["srial"]) &&  $this->nmgp_cmp_readonly["srial"] == "on") { 

 ?>
<input type="hidden" name="srial" value="<?php echo $this->form_encode_input($srial) . "\">" . $srial . ""; ?>
<?php } else { ?>
<span id="id_read_on_srial" class="sc-ui-readonly-srial css_srial_line" style="<?php echo $sStyleReadLab_srial; ?>"><?php echo $this->srial; ?></span><span id="id_read_off_srial" class="css_read_off_srial" style="white-space: nowrap;<?php echo $sStyleReadInp_srial; ?>">
 <input class="sc-js-input scFormObjectOdd css_srial_obj" style="" id="id_sc_field_srial" type=text name="srial" value="<?php echo $this->form_encode_input($srial) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_srial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_srial_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nmro_actvo']))
    {
        $this->nm_new_label['nmro_actvo'] = "NMRO ACTVO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nmro_actvo = $this->nmro_actvo;
   $sStyleHidden_nmro_actvo = '';
   if (isset($this->nmgp_cmp_hidden['nmro_actvo']) && $this->nmgp_cmp_hidden['nmro_actvo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nmro_actvo']);
       $sStyleHidden_nmro_actvo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nmro_actvo = 'display: none;';
   $sStyleReadInp_nmro_actvo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nmro_actvo']) && $this->nmgp_cmp_readonly['nmro_actvo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nmro_actvo']);
       $sStyleReadLab_nmro_actvo = '';
       $sStyleReadInp_nmro_actvo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nmro_actvo']) && $this->nmgp_cmp_hidden['nmro_actvo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nmro_actvo" value="<?php echo $this->form_encode_input($nmro_actvo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nmro_actvo_label" id="hidden_field_label_nmro_actvo" style="<?php echo $sStyleHidden_nmro_actvo; ?>"><span id="id_label_nmro_actvo"><?php echo $this->nm_new_label['nmro_actvo']; ?></span></TD>
    <TD class="scFormDataOdd css_nmro_actvo_line" id="hidden_field_data_nmro_actvo" style="<?php echo $sStyleHidden_nmro_actvo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nmro_actvo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nmro_actvo"]) &&  $this->nmgp_cmp_readonly["nmro_actvo"] == "on") { 

 ?>
<input type="hidden" name="nmro_actvo" value="<?php echo $this->form_encode_input($nmro_actvo) . "\">" . $nmro_actvo . ""; ?>
<?php } else { ?>
<span id="id_read_on_nmro_actvo" class="sc-ui-readonly-nmro_actvo css_nmro_actvo_line" style="<?php echo $sStyleReadLab_nmro_actvo; ?>"><?php echo $this->nmro_actvo; ?></span><span id="id_read_off_nmro_actvo" class="css_read_off_nmro_actvo" style="white-space: nowrap;<?php echo $sStyleReadInp_nmro_actvo; ?>">
 <input class="sc-js-input scFormObjectOdd css_nmro_actvo_obj" style="" id="id_sc_field_nmro_actvo" type=text name="nmro_actvo" value="<?php echo $this->form_encode_input($nmro_actvo) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nmro_actvo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nmro_actvo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['alias']))
    {
        $this->nm_new_label['alias'] = "ALIAS";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $alias = $this->alias;
   $sStyleHidden_alias = '';
   if (isset($this->nmgp_cmp_hidden['alias']) && $this->nmgp_cmp_hidden['alias'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['alias']);
       $sStyleHidden_alias = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_alias = 'display: none;';
   $sStyleReadInp_alias = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['alias']) && $this->nmgp_cmp_readonly['alias'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['alias']);
       $sStyleReadLab_alias = '';
       $sStyleReadInp_alias = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['alias']) && $this->nmgp_cmp_hidden['alias'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="alias" value="<?php echo $this->form_encode_input($alias) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_alias_label" id="hidden_field_label_alias" style="<?php echo $sStyleHidden_alias; ?>"><span id="id_label_alias"><?php echo $this->nm_new_label['alias']; ?></span></TD>
    <TD class="scFormDataOdd css_alias_line" id="hidden_field_data_alias" style="<?php echo $sStyleHidden_alias; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_alias_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["alias"]) &&  $this->nmgp_cmp_readonly["alias"] == "on") { 

 ?>
<input type="hidden" name="alias" value="<?php echo $this->form_encode_input($alias) . "\">" . $alias . ""; ?>
<?php } else { ?>
<span id="id_read_on_alias" class="sc-ui-readonly-alias css_alias_line" style="<?php echo $sStyleReadLab_alias; ?>"><?php echo $this->alias; ?></span><span id="id_read_off_alias" class="css_read_off_alias" style="white-space: nowrap;<?php echo $sStyleReadInp_alias; ?>">
 <input class="sc-js-input scFormObjectOdd css_alias_obj" style="" id="id_sc_field_alias" type=text name="alias" value="<?php echo $this->form_encode_input($alias) ?>"
 size=50 maxlength=120 alt="{datatype: 'text', maxLength: 120, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_alias_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_alias_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cdgo_qr']))
    {
        $this->nm_new_label['cdgo_qr'] = "CDGO QR";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cdgo_qr = $this->cdgo_qr;
   $sStyleHidden_cdgo_qr = '';
   if (isset($this->nmgp_cmp_hidden['cdgo_qr']) && $this->nmgp_cmp_hidden['cdgo_qr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cdgo_qr']);
       $sStyleHidden_cdgo_qr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cdgo_qr = 'display: none;';
   $sStyleReadInp_cdgo_qr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cdgo_qr']) && $this->nmgp_cmp_readonly['cdgo_qr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cdgo_qr']);
       $sStyleReadLab_cdgo_qr = '';
       $sStyleReadInp_cdgo_qr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cdgo_qr']) && $this->nmgp_cmp_hidden['cdgo_qr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cdgo_qr" value="<?php echo $this->form_encode_input($cdgo_qr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cdgo_qr_label" id="hidden_field_label_cdgo_qr" style="<?php echo $sStyleHidden_cdgo_qr; ?>"><span id="id_label_cdgo_qr"><?php echo $this->nm_new_label['cdgo_qr']; ?></span></TD>
    <TD class="scFormDataOdd css_cdgo_qr_line" id="hidden_field_data_cdgo_qr" style="<?php echo $sStyleHidden_cdgo_qr; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cdgo_qr_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cdgo_qr"]) &&  $this->nmgp_cmp_readonly["cdgo_qr"] == "on") { 

 ?>
<input type="hidden" name="cdgo_qr" value="<?php echo $this->form_encode_input($cdgo_qr) . "\">" . $cdgo_qr . ""; ?>
<?php } else { ?>
<span id="id_read_on_cdgo_qr" class="sc-ui-readonly-cdgo_qr css_cdgo_qr_line" style="<?php echo $sStyleReadLab_cdgo_qr; ?>"><?php echo $this->cdgo_qr; ?></span><span id="id_read_off_cdgo_qr" class="css_read_off_cdgo_qr" style="white-space: nowrap;<?php echo $sStyleReadInp_cdgo_qr; ?>">
 <input class="sc-js-input scFormObjectOdd css_cdgo_qr_obj" style="" id="id_sc_field_cdgo_qr" type=text name="cdgo_qr" value="<?php echo $this->form_encode_input($cdgo_qr) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cdgo_qr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cdgo_qr_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cdgo_brras']))
    {
        $this->nm_new_label['cdgo_brras'] = "CDGO BRRAS";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cdgo_brras = $this->cdgo_brras;
   $sStyleHidden_cdgo_brras = '';
   if (isset($this->nmgp_cmp_hidden['cdgo_brras']) && $this->nmgp_cmp_hidden['cdgo_brras'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cdgo_brras']);
       $sStyleHidden_cdgo_brras = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cdgo_brras = 'display: none;';
   $sStyleReadInp_cdgo_brras = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cdgo_brras']) && $this->nmgp_cmp_readonly['cdgo_brras'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cdgo_brras']);
       $sStyleReadLab_cdgo_brras = '';
       $sStyleReadInp_cdgo_brras = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cdgo_brras']) && $this->nmgp_cmp_hidden['cdgo_brras'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cdgo_brras" value="<?php echo $this->form_encode_input($cdgo_brras) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cdgo_brras_label" id="hidden_field_label_cdgo_brras" style="<?php echo $sStyleHidden_cdgo_brras; ?>"><span id="id_label_cdgo_brras"><?php echo $this->nm_new_label['cdgo_brras']; ?></span></TD>
    <TD class="scFormDataOdd css_cdgo_brras_line" id="hidden_field_data_cdgo_brras" style="<?php echo $sStyleHidden_cdgo_brras; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cdgo_brras_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cdgo_brras"]) &&  $this->nmgp_cmp_readonly["cdgo_brras"] == "on") { 

 ?>
<input type="hidden" name="cdgo_brras" value="<?php echo $this->form_encode_input($cdgo_brras) . "\">" . $cdgo_brras . ""; ?>
<?php } else { ?>
<span id="id_read_on_cdgo_brras" class="sc-ui-readonly-cdgo_brras css_cdgo_brras_line" style="<?php echo $sStyleReadLab_cdgo_brras; ?>"><?php echo $this->cdgo_brras; ?></span><span id="id_read_off_cdgo_brras" class="css_read_off_cdgo_brras" style="white-space: nowrap;<?php echo $sStyleReadInp_cdgo_brras; ?>">
 <input class="sc-js-input scFormObjectOdd css_cdgo_brras_obj" style="" id="id_sc_field_cdgo_brras" type=text name="cdgo_brras" value="<?php echo $this->form_encode_input($cdgo_brras) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cdgo_brras_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cdgo_brras_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cdgo_rfid']))
    {
        $this->nm_new_label['cdgo_rfid'] = "CDGO RFID";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cdgo_rfid = $this->cdgo_rfid;
   $sStyleHidden_cdgo_rfid = '';
   if (isset($this->nmgp_cmp_hidden['cdgo_rfid']) && $this->nmgp_cmp_hidden['cdgo_rfid'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cdgo_rfid']);
       $sStyleHidden_cdgo_rfid = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cdgo_rfid = 'display: none;';
   $sStyleReadInp_cdgo_rfid = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cdgo_rfid']) && $this->nmgp_cmp_readonly['cdgo_rfid'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cdgo_rfid']);
       $sStyleReadLab_cdgo_rfid = '';
       $sStyleReadInp_cdgo_rfid = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cdgo_rfid']) && $this->nmgp_cmp_hidden['cdgo_rfid'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cdgo_rfid" value="<?php echo $this->form_encode_input($cdgo_rfid) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cdgo_rfid_label" id="hidden_field_label_cdgo_rfid" style="<?php echo $sStyleHidden_cdgo_rfid; ?>"><span id="id_label_cdgo_rfid"><?php echo $this->nm_new_label['cdgo_rfid']; ?></span></TD>
    <TD class="scFormDataOdd css_cdgo_rfid_line" id="hidden_field_data_cdgo_rfid" style="<?php echo $sStyleHidden_cdgo_rfid; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cdgo_rfid_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cdgo_rfid"]) &&  $this->nmgp_cmp_readonly["cdgo_rfid"] == "on") { 

 ?>
<input type="hidden" name="cdgo_rfid" value="<?php echo $this->form_encode_input($cdgo_rfid) . "\">" . $cdgo_rfid . ""; ?>
<?php } else { ?>
<span id="id_read_on_cdgo_rfid" class="sc-ui-readonly-cdgo_rfid css_cdgo_rfid_line" style="<?php echo $sStyleReadLab_cdgo_rfid; ?>"><?php echo $this->cdgo_rfid; ?></span><span id="id_read_off_cdgo_rfid" class="css_read_off_cdgo_rfid" style="white-space: nowrap;<?php echo $sStyleReadInp_cdgo_rfid; ?>">
 <input class="sc-js-input scFormObjectOdd css_cdgo_rfid_obj" style="" id="id_sc_field_cdgo_rfid" type=text name="cdgo_rfid" value="<?php echo $this->form_encode_input($cdgo_rfid) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cdgo_rfid_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cdgo_rfid_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cmpsto']))
   {
       $this->nm_new_label['cmpsto'] = "CMPSTO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cmpsto = $this->cmpsto;
   $sStyleHidden_cmpsto = '';
   if (isset($this->nmgp_cmp_hidden['cmpsto']) && $this->nmgp_cmp_hidden['cmpsto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cmpsto']);
       $sStyleHidden_cmpsto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cmpsto = 'display: none;';
   $sStyleReadInp_cmpsto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cmpsto']) && $this->nmgp_cmp_readonly['cmpsto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cmpsto']);
       $sStyleReadLab_cmpsto = '';
       $sStyleReadInp_cmpsto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cmpsto']) && $this->nmgp_cmp_hidden['cmpsto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cmpsto" value="<?php echo $this->form_encode_input($this->cmpsto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cmpsto_label" id="hidden_field_label_cmpsto" style="<?php echo $sStyleHidden_cmpsto; ?>"><span id="id_label_cmpsto"><?php echo $this->nm_new_label['cmpsto']; ?></span></TD>
    <TD class="scFormDataOdd css_cmpsto_line" id="hidden_field_data_cmpsto" style="<?php echo $sStyleHidden_cmpsto; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cmpsto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cmpsto"]) &&  $this->nmgp_cmp_readonly["cmpsto"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ESTDO, ESTDO FROM s_tpo_dcsion ORDER BY ESTDO";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_cmpsto'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $cmpsto_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cmpsto_1))
          {
              foreach ($this->cmpsto_1 as $tmp_cmpsto)
              {
                  if (trim($tmp_cmpsto) === trim($cadaselect[1])) { $cmpsto_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cmpsto) === trim($cadaselect[1])) { $cmpsto_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="cmpsto" value="<?php echo $this->form_encode_input($cmpsto) . "\">" . $cmpsto_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_cmpsto();
   $x = 0 ; 
   $cmpsto_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cmpsto_1))
          {
              foreach ($this->cmpsto_1 as $tmp_cmpsto)
              {
                  if (trim($tmp_cmpsto) === trim($cadaselect[1])) { $cmpsto_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cmpsto) === trim($cadaselect[1])) { $cmpsto_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($cmpsto_look))
          {
              $cmpsto_look = $this->cmpsto;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_cmpsto\" class=\"css_cmpsto_line\" style=\"" .  $sStyleReadLab_cmpsto . "\">" . $this->form_encode_input($cmpsto_look) . "</span><span id=\"id_read_off_cmpsto\" class=\"css_read_off_cmpsto\" style=\"white-space: nowrap; " . $sStyleReadInp_cmpsto . "\">";
   echo " <span id=\"idAjaxSelect_cmpsto\"><select class=\"sc-js-input scFormObjectOdd css_cmpsto_obj\" style=\"\" id=\"id_sc_field_cmpsto\" name=\"cmpsto\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cmpsto) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cmpsto)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cmpsto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cmpsto_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_estdo']))
   {
       $this->nm_new_label['id_estdo'] = "ID ESTDO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_estdo = $this->id_estdo;
   $sStyleHidden_id_estdo = '';
   if (isset($this->nmgp_cmp_hidden['id_estdo']) && $this->nmgp_cmp_hidden['id_estdo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_estdo']);
       $sStyleHidden_id_estdo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_estdo = 'display: none;';
   $sStyleReadInp_id_estdo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_estdo']) && $this->nmgp_cmp_readonly['id_estdo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_estdo']);
       $sStyleReadLab_id_estdo = '';
       $sStyleReadInp_id_estdo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_estdo']) && $this->nmgp_cmp_hidden['id_estdo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_estdo" value="<?php echo $this->form_encode_input($this->id_estdo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_estdo_label" id="hidden_field_label_id_estdo" style="<?php echo $sStyleHidden_id_estdo; ?>"><span id="id_label_id_estdo"><?php echo $this->nm_new_label['id_estdo']; ?></span></TD>
    <TD class="scFormDataOdd css_id_estdo_line" id="hidden_field_data_id_estdo" style="<?php echo $sStyleHidden_id_estdo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_estdo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_estdo"]) &&  $this->nmgp_cmp_readonly["id_estdo"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_ESTDO, ID_ESTDO FROM actvos_estdos ORDER BY ID_ESTDO";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_estdo'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_estdo_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_estdo_1))
          {
              foreach ($this->id_estdo_1 as $tmp_id_estdo)
              {
                  if (trim($tmp_id_estdo) === trim($cadaselect[1])) { $id_estdo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_estdo) === trim($cadaselect[1])) { $id_estdo_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_estdo" value="<?php echo $this->form_encode_input($id_estdo) . "\">" . $id_estdo_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_estdo();
   $x = 0 ; 
   $id_estdo_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_estdo_1))
          {
              foreach ($this->id_estdo_1 as $tmp_id_estdo)
              {
                  if (trim($tmp_id_estdo) === trim($cadaselect[1])) { $id_estdo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_estdo) === trim($cadaselect[1])) { $id_estdo_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_estdo_look))
          {
              $id_estdo_look = $this->id_estdo;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_estdo\" class=\"css_id_estdo_line\" style=\"" .  $sStyleReadLab_id_estdo . "\">" . $this->form_encode_input($id_estdo_look) . "</span><span id=\"id_read_off_id_estdo\" class=\"css_read_off_id_estdo\" style=\"white-space: nowrap; " . $sStyleReadInp_id_estdo . "\">";
   echo " <span id=\"idAjaxSelect_id_estdo\"><select class=\"sc-js-input scFormObjectOdd css_id_estdo_obj\" style=\"\" id=\"id_sc_field_id_estdo\" name=\"id_estdo\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_estdo) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_estdo)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_estdo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_estdo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_clse']))
   {
       $this->nm_new_label['id_clse'] = "ID CLSE";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_clse = $this->id_clse;
   $sStyleHidden_id_clse = '';
   if (isset($this->nmgp_cmp_hidden['id_clse']) && $this->nmgp_cmp_hidden['id_clse'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_clse']);
       $sStyleHidden_id_clse = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_clse = 'display: none;';
   $sStyleReadInp_id_clse = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_clse']) && $this->nmgp_cmp_readonly['id_clse'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_clse']);
       $sStyleReadLab_id_clse = '';
       $sStyleReadInp_id_clse = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_clse']) && $this->nmgp_cmp_hidden['id_clse'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_clse" value="<?php echo $this->form_encode_input($this->id_clse) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_clse_label" id="hidden_field_label_id_clse" style="<?php echo $sStyleHidden_id_clse; ?>"><span id="id_label_id_clse"><?php echo $this->nm_new_label['id_clse']; ?></span></TD>
    <TD class="scFormDataOdd css_id_clse_line" id="hidden_field_data_id_clse" style="<?php echo $sStyleHidden_id_clse; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_clse_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_clse"]) &&  $this->nmgp_cmp_readonly["id_clse"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_CLSE, ID_CLSE FROM actvos_clse ORDER BY ID_CLSE";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_clse'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_clse_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_clse_1))
          {
              foreach ($this->id_clse_1 as $tmp_id_clse)
              {
                  if (trim($tmp_id_clse) === trim($cadaselect[1])) { $id_clse_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_clse) === trim($cadaselect[1])) { $id_clse_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_clse" value="<?php echo $this->form_encode_input($id_clse) . "\">" . $id_clse_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_clse();
   $x = 0 ; 
   $id_clse_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_clse_1))
          {
              foreach ($this->id_clse_1 as $tmp_id_clse)
              {
                  if (trim($tmp_id_clse) === trim($cadaselect[1])) { $id_clse_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_clse) === trim($cadaselect[1])) { $id_clse_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_clse_look))
          {
              $id_clse_look = $this->id_clse;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_clse\" class=\"css_id_clse_line\" style=\"" .  $sStyleReadLab_id_clse . "\">" . $this->form_encode_input($id_clse_look) . "</span><span id=\"id_read_off_id_clse\" class=\"css_read_off_id_clse\" style=\"white-space: nowrap; " . $sStyleReadInp_id_clse . "\">";
   echo " <span id=\"idAjaxSelect_id_clse\"><select class=\"sc-js-input scFormObjectOdd css_id_clse_obj\" style=\"\" id=\"id_sc_field_id_clse\" name=\"id_clse\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_clse) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_clse)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_clse_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_clse_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_tpo']))
   {
       $this->nm_new_label['id_tpo'] = "ID TPO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_tpo = $this->id_tpo;
   $sStyleHidden_id_tpo = '';
   if (isset($this->nmgp_cmp_hidden['id_tpo']) && $this->nmgp_cmp_hidden['id_tpo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_tpo']);
       $sStyleHidden_id_tpo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_tpo = 'display: none;';
   $sStyleReadInp_id_tpo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_tpo']) && $this->nmgp_cmp_readonly['id_tpo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_tpo']);
       $sStyleReadLab_id_tpo = '';
       $sStyleReadInp_id_tpo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_tpo']) && $this->nmgp_cmp_hidden['id_tpo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_tpo" value="<?php echo $this->form_encode_input($this->id_tpo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_tpo_label" id="hidden_field_label_id_tpo" style="<?php echo $sStyleHidden_id_tpo; ?>"><span id="id_label_id_tpo"><?php echo $this->nm_new_label['id_tpo']; ?></span></TD>
    <TD class="scFormDataOdd css_id_tpo_line" id="hidden_field_data_id_tpo" style="<?php echo $sStyleHidden_id_tpo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_tpo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_tpo"]) &&  $this->nmgp_cmp_readonly["id_tpo"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_TPO, ID_TPO FROM actvos_tpos ORDER BY ID_TPO";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_tpo_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tpo_1))
          {
              foreach ($this->id_tpo_1 as $tmp_id_tpo)
              {
                  if (trim($tmp_id_tpo) === trim($cadaselect[1])) { $id_tpo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tpo) === trim($cadaselect[1])) { $id_tpo_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_tpo" value="<?php echo $this->form_encode_input($id_tpo) . "\">" . $id_tpo_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_tpo();
   $x = 0 ; 
   $id_tpo_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tpo_1))
          {
              foreach ($this->id_tpo_1 as $tmp_id_tpo)
              {
                  if (trim($tmp_id_tpo) === trim($cadaselect[1])) { $id_tpo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tpo) === trim($cadaselect[1])) { $id_tpo_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_tpo_look))
          {
              $id_tpo_look = $this->id_tpo;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_tpo\" class=\"css_id_tpo_line\" style=\"" .  $sStyleReadLab_id_tpo . "\">" . $this->form_encode_input($id_tpo_look) . "</span><span id=\"id_read_off_id_tpo\" class=\"css_read_off_id_tpo\" style=\"white-space: nowrap; " . $sStyleReadInp_id_tpo . "\">";
   echo " <span id=\"idAjaxSelect_id_tpo\"><select class=\"sc-js-input scFormObjectOdd css_id_tpo_obj\" style=\"\" id=\"id_sc_field_id_tpo\" name=\"id_tpo\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_tpo) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_tpo)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_tpo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_tpo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_mrca']))
   {
       $this->nm_new_label['id_mrca'] = "ID MRCA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_mrca = $this->id_mrca;
   $sStyleHidden_id_mrca = '';
   if (isset($this->nmgp_cmp_hidden['id_mrca']) && $this->nmgp_cmp_hidden['id_mrca'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_mrca']);
       $sStyleHidden_id_mrca = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_mrca = 'display: none;';
   $sStyleReadInp_id_mrca = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_mrca']) && $this->nmgp_cmp_readonly['id_mrca'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_mrca']);
       $sStyleReadLab_id_mrca = '';
       $sStyleReadInp_id_mrca = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_mrca']) && $this->nmgp_cmp_hidden['id_mrca'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_mrca" value="<?php echo $this->form_encode_input($this->id_mrca) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_mrca_label" id="hidden_field_label_id_mrca" style="<?php echo $sStyleHidden_id_mrca; ?>"><span id="id_label_id_mrca"><?php echo $this->nm_new_label['id_mrca']; ?></span></TD>
    <TD class="scFormDataOdd css_id_mrca_line" id="hidden_field_data_id_mrca" style="<?php echo $sStyleHidden_id_mrca; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_mrca_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_mrca"]) &&  $this->nmgp_cmp_readonly["id_mrca"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_MRCA, ID_MRCA FROM actvos_mrcas ORDER BY ID_MRCA";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mrca'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_mrca_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_mrca_1))
          {
              foreach ($this->id_mrca_1 as $tmp_id_mrca)
              {
                  if (trim($tmp_id_mrca) === trim($cadaselect[1])) { $id_mrca_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_mrca) === trim($cadaselect[1])) { $id_mrca_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_mrca" value="<?php echo $this->form_encode_input($id_mrca) . "\">" . $id_mrca_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_mrca();
   $x = 0 ; 
   $id_mrca_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_mrca_1))
          {
              foreach ($this->id_mrca_1 as $tmp_id_mrca)
              {
                  if (trim($tmp_id_mrca) === trim($cadaselect[1])) { $id_mrca_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_mrca) === trim($cadaselect[1])) { $id_mrca_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_mrca_look))
          {
              $id_mrca_look = $this->id_mrca;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_mrca\" class=\"css_id_mrca_line\" style=\"" .  $sStyleReadLab_id_mrca . "\">" . $this->form_encode_input($id_mrca_look) . "</span><span id=\"id_read_off_id_mrca\" class=\"css_read_off_id_mrca\" style=\"white-space: nowrap; " . $sStyleReadInp_id_mrca . "\">";
   echo " <span id=\"idAjaxSelect_id_mrca\"><select class=\"sc-js-input scFormObjectOdd css_id_mrca_obj\" style=\"\" id=\"id_sc_field_id_mrca\" name=\"id_mrca\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_mrca) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_mrca)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_mrca_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_mrca_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mdlo']))
    {
        $this->nm_new_label['mdlo'] = "MDLO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mdlo = $this->mdlo;
   $sStyleHidden_mdlo = '';
   if (isset($this->nmgp_cmp_hidden['mdlo']) && $this->nmgp_cmp_hidden['mdlo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mdlo']);
       $sStyleHidden_mdlo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mdlo = 'display: none;';
   $sStyleReadInp_mdlo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mdlo']) && $this->nmgp_cmp_readonly['mdlo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mdlo']);
       $sStyleReadLab_mdlo = '';
       $sStyleReadInp_mdlo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mdlo']) && $this->nmgp_cmp_hidden['mdlo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mdlo" value="<?php echo $this->form_encode_input($mdlo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_mdlo_label" id="hidden_field_label_mdlo" style="<?php echo $sStyleHidden_mdlo; ?>"><span id="id_label_mdlo"><?php echo $this->nm_new_label['mdlo']; ?></span></TD>
    <TD class="scFormDataOdd css_mdlo_line" id="hidden_field_data_mdlo" style="<?php echo $sStyleHidden_mdlo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mdlo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mdlo"]) &&  $this->nmgp_cmp_readonly["mdlo"] == "on") { 

 ?>
<input type="hidden" name="mdlo" value="<?php echo $this->form_encode_input($mdlo) . "\">" . $mdlo . ""; ?>
<?php } else { ?>
<span id="id_read_on_mdlo" class="sc-ui-readonly-mdlo css_mdlo_line" style="<?php echo $sStyleReadLab_mdlo; ?>"><?php echo $this->mdlo; ?></span><span id="id_read_off_mdlo" class="css_read_off_mdlo" style="white-space: nowrap;<?php echo $sStyleReadInp_mdlo; ?>">
 <input class="sc-js-input scFormObjectOdd css_mdlo_obj" style="" id="id_sc_field_mdlo" type=text name="mdlo" value="<?php echo $this->form_encode_input($mdlo) ?>"
 size=50 maxlength=120 alt="{datatype: 'text', maxLength: 120, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mdlo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mdlo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_fbrcnte']))
   {
       $this->nm_new_label['id_fbrcnte'] = "ID FBRCNTE";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_fbrcnte = $this->id_fbrcnte;
   $sStyleHidden_id_fbrcnte = '';
   if (isset($this->nmgp_cmp_hidden['id_fbrcnte']) && $this->nmgp_cmp_hidden['id_fbrcnte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_fbrcnte']);
       $sStyleHidden_id_fbrcnte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_fbrcnte = 'display: none;';
   $sStyleReadInp_id_fbrcnte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_fbrcnte']) && $this->nmgp_cmp_readonly['id_fbrcnte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_fbrcnte']);
       $sStyleReadLab_id_fbrcnte = '';
       $sStyleReadInp_id_fbrcnte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_fbrcnte']) && $this->nmgp_cmp_hidden['id_fbrcnte'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_fbrcnte" value="<?php echo $this->form_encode_input($this->id_fbrcnte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_fbrcnte_label" id="hidden_field_label_id_fbrcnte" style="<?php echo $sStyleHidden_id_fbrcnte; ?>"><span id="id_label_id_fbrcnte"><?php echo $this->nm_new_label['id_fbrcnte']; ?></span></TD>
    <TD class="scFormDataOdd css_id_fbrcnte_line" id="hidden_field_data_id_fbrcnte" style="<?php echo $sStyleHidden_id_fbrcnte; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_fbrcnte_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_fbrcnte"]) &&  $this->nmgp_cmp_readonly["id_fbrcnte"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_FBRCNTE, ID_FBRCNTE FROM actvos_fbrcnte ORDER BY ID_FBRCNTE";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_fbrcnte'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_fbrcnte_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_fbrcnte_1))
          {
              foreach ($this->id_fbrcnte_1 as $tmp_id_fbrcnte)
              {
                  if (trim($tmp_id_fbrcnte) === trim($cadaselect[1])) { $id_fbrcnte_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_fbrcnte) === trim($cadaselect[1])) { $id_fbrcnte_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_fbrcnte" value="<?php echo $this->form_encode_input($id_fbrcnte) . "\">" . $id_fbrcnte_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_fbrcnte();
   $x = 0 ; 
   $id_fbrcnte_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_fbrcnte_1))
          {
              foreach ($this->id_fbrcnte_1 as $tmp_id_fbrcnte)
              {
                  if (trim($tmp_id_fbrcnte) === trim($cadaselect[1])) { $id_fbrcnte_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_fbrcnte) === trim($cadaselect[1])) { $id_fbrcnte_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_fbrcnte_look))
          {
              $id_fbrcnte_look = $this->id_fbrcnte;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_fbrcnte\" class=\"css_id_fbrcnte_line\" style=\"" .  $sStyleReadLab_id_fbrcnte . "\">" . $this->form_encode_input($id_fbrcnte_look) . "</span><span id=\"id_read_off_id_fbrcnte\" class=\"css_read_off_id_fbrcnte\" style=\"white-space: nowrap; " . $sStyleReadInp_id_fbrcnte . "\">";
   echo " <span id=\"idAjaxSelect_id_fbrcnte\"><select class=\"sc-js-input scFormObjectOdd css_id_fbrcnte_obj\" style=\"\" id=\"id_sc_field_id_fbrcnte\" name=\"id_fbrcnte\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_fbrcnte) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_fbrcnte)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_fbrcnte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_fbrcnte_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cnfbldad']))
    {
        $this->nm_new_label['cnfbldad'] = "CNFBLDAD";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cnfbldad = $this->cnfbldad;
   $sStyleHidden_cnfbldad = '';
   if (isset($this->nmgp_cmp_hidden['cnfbldad']) && $this->nmgp_cmp_hidden['cnfbldad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cnfbldad']);
       $sStyleHidden_cnfbldad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cnfbldad = 'display: none;';
   $sStyleReadInp_cnfbldad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cnfbldad']) && $this->nmgp_cmp_readonly['cnfbldad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cnfbldad']);
       $sStyleReadLab_cnfbldad = '';
       $sStyleReadInp_cnfbldad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cnfbldad']) && $this->nmgp_cmp_hidden['cnfbldad'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cnfbldad" value="<?php echo $this->form_encode_input($cnfbldad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cnfbldad_label" id="hidden_field_label_cnfbldad" style="<?php echo $sStyleHidden_cnfbldad; ?>"><span id="id_label_cnfbldad"><?php echo $this->nm_new_label['cnfbldad']; ?></span></TD>
    <TD class="scFormDataOdd css_cnfbldad_line" id="hidden_field_data_cnfbldad" style="<?php echo $sStyleHidden_cnfbldad; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cnfbldad_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cnfbldad"]) &&  $this->nmgp_cmp_readonly["cnfbldad"] == "on") { 

 ?>
<input type="hidden" name="cnfbldad" value="<?php echo $this->form_encode_input($cnfbldad) . "\">" . $cnfbldad . ""; ?>
<?php } else { ?>
<span id="id_read_on_cnfbldad" class="sc-ui-readonly-cnfbldad css_cnfbldad_line" style="<?php echo $sStyleReadLab_cnfbldad; ?>"><?php echo $this->cnfbldad; ?></span><span id="id_read_off_cnfbldad" class="css_read_off_cnfbldad" style="white-space: nowrap;<?php echo $sStyleReadInp_cnfbldad; ?>">
 <input class="sc-js-input scFormObjectOdd css_cnfbldad_obj" style="" id="id_sc_field_cnfbldad" type=text name="cnfbldad" value="<?php echo $this->form_encode_input($cnfbldad) ?>"
 size=20 alt="{datatype: 'decimal', maxLength: 20, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['cnfbldad']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['cnfbldad']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['cnfbldad']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['cnfbldad']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cnfbldad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cnfbldad_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_nit_prvdor']))
   {
       $this->nm_new_label['id_nit_prvdor'] = "ID NIT PRVDOR";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_nit_prvdor = $this->id_nit_prvdor;
   $sStyleHidden_id_nit_prvdor = '';
   if (isset($this->nmgp_cmp_hidden['id_nit_prvdor']) && $this->nmgp_cmp_hidden['id_nit_prvdor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_nit_prvdor']);
       $sStyleHidden_id_nit_prvdor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_nit_prvdor = 'display: none;';
   $sStyleReadInp_id_nit_prvdor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_nit_prvdor']) && $this->nmgp_cmp_readonly['id_nit_prvdor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_nit_prvdor']);
       $sStyleReadLab_id_nit_prvdor = '';
       $sStyleReadInp_id_nit_prvdor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_nit_prvdor']) && $this->nmgp_cmp_hidden['id_nit_prvdor'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_nit_prvdor" value="<?php echo $this->form_encode_input($this->id_nit_prvdor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_nit_prvdor_label" id="hidden_field_label_id_nit_prvdor" style="<?php echo $sStyleHidden_id_nit_prvdor; ?>"><span id="id_label_id_nit_prvdor"><?php echo $this->nm_new_label['id_nit_prvdor']; ?></span></TD>
    <TD class="scFormDataOdd css_id_nit_prvdor_line" id="hidden_field_data_id_nit_prvdor" style="<?php echo $sStyleHidden_id_nit_prvdor; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_nit_prvdor_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_nit_prvdor"]) &&  $this->nmgp_cmp_readonly["id_nit_prvdor"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_NIT, ID_NIT FROM s_nits ORDER BY ID_NIT";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_prvdor'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_nit_prvdor_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_nit_prvdor_1))
          {
              foreach ($this->id_nit_prvdor_1 as $tmp_id_nit_prvdor)
              {
                  if (trim($tmp_id_nit_prvdor) === trim($cadaselect[1])) { $id_nit_prvdor_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_nit_prvdor) === trim($cadaselect[1])) { $id_nit_prvdor_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_nit_prvdor" value="<?php echo $this->form_encode_input($id_nit_prvdor) . "\">" . $id_nit_prvdor_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_nit_prvdor();
   $x = 0 ; 
   $id_nit_prvdor_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_nit_prvdor_1))
          {
              foreach ($this->id_nit_prvdor_1 as $tmp_id_nit_prvdor)
              {
                  if (trim($tmp_id_nit_prvdor) === trim($cadaselect[1])) { $id_nit_prvdor_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_nit_prvdor) === trim($cadaselect[1])) { $id_nit_prvdor_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_nit_prvdor_look))
          {
              $id_nit_prvdor_look = $this->id_nit_prvdor;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_nit_prvdor\" class=\"css_id_nit_prvdor_line\" style=\"" .  $sStyleReadLab_id_nit_prvdor . "\">" . $this->form_encode_input($id_nit_prvdor_look) . "</span><span id=\"id_read_off_id_nit_prvdor\" class=\"css_read_off_id_nit_prvdor\" style=\"white-space: nowrap; " . $sStyleReadInp_id_nit_prvdor . "\">";
   echo " <span id=\"idAjaxSelect_id_nit_prvdor\"><select class=\"sc-js-input scFormObjectOdd css_id_nit_prvdor_obj\" style=\"\" id=\"id_sc_field_id_nit_prvdor\" name=\"id_nit_prvdor\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_nit_prvdor) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_nit_prvdor)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_nit_prvdor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_nit_prvdor_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fcha_cmpra']))
    {
        $this->nm_new_label['fcha_cmpra'] = "FCHA CMPRA";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fcha_cmpra = $this->fcha_cmpra;
   $sStyleHidden_fcha_cmpra = '';
   if (isset($this->nmgp_cmp_hidden['fcha_cmpra']) && $this->nmgp_cmp_hidden['fcha_cmpra'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fcha_cmpra']);
       $sStyleHidden_fcha_cmpra = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fcha_cmpra = 'display: none;';
   $sStyleReadInp_fcha_cmpra = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fcha_cmpra']) && $this->nmgp_cmp_readonly['fcha_cmpra'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fcha_cmpra']);
       $sStyleReadLab_fcha_cmpra = '';
       $sStyleReadInp_fcha_cmpra = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fcha_cmpra']) && $this->nmgp_cmp_hidden['fcha_cmpra'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fcha_cmpra" value="<?php echo $this->form_encode_input($fcha_cmpra) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fcha_cmpra_label" id="hidden_field_label_fcha_cmpra" style="<?php echo $sStyleHidden_fcha_cmpra; ?>"><span id="id_label_fcha_cmpra"><?php echo $this->nm_new_label['fcha_cmpra']; ?></span></TD>
    <TD class="scFormDataOdd css_fcha_cmpra_line" id="hidden_field_data_fcha_cmpra" style="<?php echo $sStyleHidden_fcha_cmpra; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fcha_cmpra_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fcha_cmpra"]) &&  $this->nmgp_cmp_readonly["fcha_cmpra"] == "on") { 

 ?>
<input type="hidden" name="fcha_cmpra" value="<?php echo $this->form_encode_input($fcha_cmpra) . "\">" . $fcha_cmpra . ""; ?>
<?php } else { ?>
<span id="id_read_on_fcha_cmpra" class="sc-ui-readonly-fcha_cmpra css_fcha_cmpra_line" style="<?php echo $sStyleReadLab_fcha_cmpra; ?>"><?php echo $fcha_cmpra; ?></span><span id="id_read_off_fcha_cmpra" class="css_read_off_fcha_cmpra" style="white-space: nowrap;<?php echo $sStyleReadInp_fcha_cmpra; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_fcha_cmpra_obj" style="" id="id_sc_field_fcha_cmpra" type=text name="fcha_cmpra" value="<?php echo $this->form_encode_input($fcha_cmpra) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fcha_cmpra']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fcha_cmpra']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['fcha_cmpra']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fcha_cmpra_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fcha_cmpra_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fcha_arrnque']))
    {
        $this->nm_new_label['fcha_arrnque'] = "FCHA ARRNQUE";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fcha_arrnque = $this->fcha_arrnque;
   $sStyleHidden_fcha_arrnque = '';
   if (isset($this->nmgp_cmp_hidden['fcha_arrnque']) && $this->nmgp_cmp_hidden['fcha_arrnque'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fcha_arrnque']);
       $sStyleHidden_fcha_arrnque = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fcha_arrnque = 'display: none;';
   $sStyleReadInp_fcha_arrnque = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fcha_arrnque']) && $this->nmgp_cmp_readonly['fcha_arrnque'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fcha_arrnque']);
       $sStyleReadLab_fcha_arrnque = '';
       $sStyleReadInp_fcha_arrnque = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fcha_arrnque']) && $this->nmgp_cmp_hidden['fcha_arrnque'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fcha_arrnque" value="<?php echo $this->form_encode_input($fcha_arrnque) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fcha_arrnque_label" id="hidden_field_label_fcha_arrnque" style="<?php echo $sStyleHidden_fcha_arrnque; ?>"><span id="id_label_fcha_arrnque"><?php echo $this->nm_new_label['fcha_arrnque']; ?></span></TD>
    <TD class="scFormDataOdd css_fcha_arrnque_line" id="hidden_field_data_fcha_arrnque" style="<?php echo $sStyleHidden_fcha_arrnque; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fcha_arrnque_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fcha_arrnque"]) &&  $this->nmgp_cmp_readonly["fcha_arrnque"] == "on") { 

 ?>
<input type="hidden" name="fcha_arrnque" value="<?php echo $this->form_encode_input($fcha_arrnque) . "\">" . $fcha_arrnque . ""; ?>
<?php } else { ?>
<span id="id_read_on_fcha_arrnque" class="sc-ui-readonly-fcha_arrnque css_fcha_arrnque_line" style="<?php echo $sStyleReadLab_fcha_arrnque; ?>"><?php echo $fcha_arrnque; ?></span><span id="id_read_off_fcha_arrnque" class="css_read_off_fcha_arrnque" style="white-space: nowrap;<?php echo $sStyleReadInp_fcha_arrnque; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_fcha_arrnque_obj" style="" id="id_sc_field_fcha_arrnque" type=text name="fcha_arrnque" value="<?php echo $this->form_encode_input($fcha_arrnque) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fcha_arrnque']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fcha_arrnque']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['fcha_arrnque']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fcha_arrnque_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fcha_arrnque_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fcha_fin_grntia']))
    {
        $this->nm_new_label['fcha_fin_grntia'] = "FCHA FIN GRNTIA";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fcha_fin_grntia = $this->fcha_fin_grntia;
   $sStyleHidden_fcha_fin_grntia = '';
   if (isset($this->nmgp_cmp_hidden['fcha_fin_grntia']) && $this->nmgp_cmp_hidden['fcha_fin_grntia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fcha_fin_grntia']);
       $sStyleHidden_fcha_fin_grntia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fcha_fin_grntia = 'display: none;';
   $sStyleReadInp_fcha_fin_grntia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fcha_fin_grntia']) && $this->nmgp_cmp_readonly['fcha_fin_grntia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fcha_fin_grntia']);
       $sStyleReadLab_fcha_fin_grntia = '';
       $sStyleReadInp_fcha_fin_grntia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fcha_fin_grntia']) && $this->nmgp_cmp_hidden['fcha_fin_grntia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fcha_fin_grntia" value="<?php echo $this->form_encode_input($fcha_fin_grntia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fcha_fin_grntia_label" id="hidden_field_label_fcha_fin_grntia" style="<?php echo $sStyleHidden_fcha_fin_grntia; ?>"><span id="id_label_fcha_fin_grntia"><?php echo $this->nm_new_label['fcha_fin_grntia']; ?></span></TD>
    <TD class="scFormDataOdd css_fcha_fin_grntia_line" id="hidden_field_data_fcha_fin_grntia" style="<?php echo $sStyleHidden_fcha_fin_grntia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fcha_fin_grntia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fcha_fin_grntia"]) &&  $this->nmgp_cmp_readonly["fcha_fin_grntia"] == "on") { 

 ?>
<input type="hidden" name="fcha_fin_grntia" value="<?php echo $this->form_encode_input($fcha_fin_grntia) . "\">" . $fcha_fin_grntia . ""; ?>
<?php } else { ?>
<span id="id_read_on_fcha_fin_grntia" class="sc-ui-readonly-fcha_fin_grntia css_fcha_fin_grntia_line" style="<?php echo $sStyleReadLab_fcha_fin_grntia; ?>"><?php echo $fcha_fin_grntia; ?></span><span id="id_read_off_fcha_fin_grntia" class="css_read_off_fcha_fin_grntia" style="white-space: nowrap;<?php echo $sStyleReadInp_fcha_fin_grntia; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_fcha_fin_grntia_obj" style="" id="id_sc_field_fcha_fin_grntia" type=text name="fcha_fin_grntia" value="<?php echo $this->form_encode_input($fcha_fin_grntia) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fcha_fin_grntia']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fcha_fin_grntia']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['fcha_fin_grntia']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fcha_fin_grntia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fcha_fin_grntia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['vlor_cmpra1']))
    {
        $this->nm_new_label['vlor_cmpra1'] = "VLOR CMPRA1";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $vlor_cmpra1 = $this->vlor_cmpra1;
   $sStyleHidden_vlor_cmpra1 = '';
   if (isset($this->nmgp_cmp_hidden['vlor_cmpra1']) && $this->nmgp_cmp_hidden['vlor_cmpra1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['vlor_cmpra1']);
       $sStyleHidden_vlor_cmpra1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_vlor_cmpra1 = 'display: none;';
   $sStyleReadInp_vlor_cmpra1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['vlor_cmpra1']) && $this->nmgp_cmp_readonly['vlor_cmpra1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['vlor_cmpra1']);
       $sStyleReadLab_vlor_cmpra1 = '';
       $sStyleReadInp_vlor_cmpra1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['vlor_cmpra1']) && $this->nmgp_cmp_hidden['vlor_cmpra1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="vlor_cmpra1" value="<?php echo $this->form_encode_input($vlor_cmpra1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_vlor_cmpra1_label" id="hidden_field_label_vlor_cmpra1" style="<?php echo $sStyleHidden_vlor_cmpra1; ?>"><span id="id_label_vlor_cmpra1"><?php echo $this->nm_new_label['vlor_cmpra1']; ?></span></TD>
    <TD class="scFormDataOdd css_vlor_cmpra1_line" id="hidden_field_data_vlor_cmpra1" style="<?php echo $sStyleHidden_vlor_cmpra1; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_vlor_cmpra1_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["vlor_cmpra1"]) &&  $this->nmgp_cmp_readonly["vlor_cmpra1"] == "on") { 

 ?>
<input type="hidden" name="vlor_cmpra1" value="<?php echo $this->form_encode_input($vlor_cmpra1) . "\">" . $vlor_cmpra1 . ""; ?>
<?php } else { ?>
<span id="id_read_on_vlor_cmpra1" class="sc-ui-readonly-vlor_cmpra1 css_vlor_cmpra1_line" style="<?php echo $sStyleReadLab_vlor_cmpra1; ?>"><?php echo $this->vlor_cmpra1; ?></span><span id="id_read_off_vlor_cmpra1" class="css_read_off_vlor_cmpra1" style="white-space: nowrap;<?php echo $sStyleReadInp_vlor_cmpra1; ?>">
 <input class="sc-js-input scFormObjectOdd css_vlor_cmpra1_obj" style="" id="id_sc_field_vlor_cmpra1" type=text name="vlor_cmpra1" value="<?php echo $this->form_encode_input($vlor_cmpra1) ?>"
 size=20 alt="{datatype: 'decimal', maxLength: 20, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['vlor_cmpra1']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['vlor_cmpra1']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['vlor_cmpra1']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['vlor_cmpra1']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_vlor_cmpra1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_vlor_cmpra1_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_mnda_cmpra1']))
   {
       $this->nm_new_label['id_mnda_cmpra1'] = "ID MNDA CMPRA1";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_mnda_cmpra1 = $this->id_mnda_cmpra1;
   $sStyleHidden_id_mnda_cmpra1 = '';
   if (isset($this->nmgp_cmp_hidden['id_mnda_cmpra1']) && $this->nmgp_cmp_hidden['id_mnda_cmpra1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_mnda_cmpra1']);
       $sStyleHidden_id_mnda_cmpra1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_mnda_cmpra1 = 'display: none;';
   $sStyleReadInp_id_mnda_cmpra1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_mnda_cmpra1']) && $this->nmgp_cmp_readonly['id_mnda_cmpra1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_mnda_cmpra1']);
       $sStyleReadLab_id_mnda_cmpra1 = '';
       $sStyleReadInp_id_mnda_cmpra1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_mnda_cmpra1']) && $this->nmgp_cmp_hidden['id_mnda_cmpra1'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_mnda_cmpra1" value="<?php echo $this->form_encode_input($this->id_mnda_cmpra1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_mnda_cmpra1_label" id="hidden_field_label_id_mnda_cmpra1" style="<?php echo $sStyleHidden_id_mnda_cmpra1; ?>"><span id="id_label_id_mnda_cmpra1"><?php echo $this->nm_new_label['id_mnda_cmpra1']; ?></span></TD>
    <TD class="scFormDataOdd css_id_mnda_cmpra1_line" id="hidden_field_data_id_mnda_cmpra1" style="<?php echo $sStyleHidden_id_mnda_cmpra1; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_mnda_cmpra1_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_mnda_cmpra1"]) &&  $this->nmgp_cmp_readonly["id_mnda_cmpra1"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_MNDA, ID_MNDA FROM s_mndas ORDER BY ID_MNDA";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra1'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_mnda_cmpra1_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_mnda_cmpra1_1))
          {
              foreach ($this->id_mnda_cmpra1_1 as $tmp_id_mnda_cmpra1)
              {
                  if (trim($tmp_id_mnda_cmpra1) === trim($cadaselect[1])) { $id_mnda_cmpra1_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_mnda_cmpra1) === trim($cadaselect[1])) { $id_mnda_cmpra1_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_mnda_cmpra1" value="<?php echo $this->form_encode_input($id_mnda_cmpra1) . "\">" . $id_mnda_cmpra1_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_mnda_cmpra1();
   $x = 0 ; 
   $id_mnda_cmpra1_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_mnda_cmpra1_1))
          {
              foreach ($this->id_mnda_cmpra1_1 as $tmp_id_mnda_cmpra1)
              {
                  if (trim($tmp_id_mnda_cmpra1) === trim($cadaselect[1])) { $id_mnda_cmpra1_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_mnda_cmpra1) === trim($cadaselect[1])) { $id_mnda_cmpra1_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_mnda_cmpra1_look))
          {
              $id_mnda_cmpra1_look = $this->id_mnda_cmpra1;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_mnda_cmpra1\" class=\"css_id_mnda_cmpra1_line\" style=\"" .  $sStyleReadLab_id_mnda_cmpra1 . "\">" . $this->form_encode_input($id_mnda_cmpra1_look) . "</span><span id=\"id_read_off_id_mnda_cmpra1\" class=\"css_read_off_id_mnda_cmpra1\" style=\"white-space: nowrap; " . $sStyleReadInp_id_mnda_cmpra1 . "\">";
   echo " <span id=\"idAjaxSelect_id_mnda_cmpra1\"><select class=\"sc-js-input scFormObjectOdd css_id_mnda_cmpra1_obj\" style=\"\" id=\"id_sc_field_id_mnda_cmpra1\" name=\"id_mnda_cmpra1\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_mnda_cmpra1) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_mnda_cmpra1)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_mnda_cmpra1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_mnda_cmpra1_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['vlor_cmpra2']))
    {
        $this->nm_new_label['vlor_cmpra2'] = "VLOR CMPRA2";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $vlor_cmpra2 = $this->vlor_cmpra2;
   $sStyleHidden_vlor_cmpra2 = '';
   if (isset($this->nmgp_cmp_hidden['vlor_cmpra2']) && $this->nmgp_cmp_hidden['vlor_cmpra2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['vlor_cmpra2']);
       $sStyleHidden_vlor_cmpra2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_vlor_cmpra2 = 'display: none;';
   $sStyleReadInp_vlor_cmpra2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['vlor_cmpra2']) && $this->nmgp_cmp_readonly['vlor_cmpra2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['vlor_cmpra2']);
       $sStyleReadLab_vlor_cmpra2 = '';
       $sStyleReadInp_vlor_cmpra2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['vlor_cmpra2']) && $this->nmgp_cmp_hidden['vlor_cmpra2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="vlor_cmpra2" value="<?php echo $this->form_encode_input($vlor_cmpra2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_vlor_cmpra2_label" id="hidden_field_label_vlor_cmpra2" style="<?php echo $sStyleHidden_vlor_cmpra2; ?>"><span id="id_label_vlor_cmpra2"><?php echo $this->nm_new_label['vlor_cmpra2']; ?></span></TD>
    <TD class="scFormDataOdd css_vlor_cmpra2_line" id="hidden_field_data_vlor_cmpra2" style="<?php echo $sStyleHidden_vlor_cmpra2; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_vlor_cmpra2_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["vlor_cmpra2"]) &&  $this->nmgp_cmp_readonly["vlor_cmpra2"] == "on") { 

 ?>
<input type="hidden" name="vlor_cmpra2" value="<?php echo $this->form_encode_input($vlor_cmpra2) . "\">" . $vlor_cmpra2 . ""; ?>
<?php } else { ?>
<span id="id_read_on_vlor_cmpra2" class="sc-ui-readonly-vlor_cmpra2 css_vlor_cmpra2_line" style="<?php echo $sStyleReadLab_vlor_cmpra2; ?>"><?php echo $this->vlor_cmpra2; ?></span><span id="id_read_off_vlor_cmpra2" class="css_read_off_vlor_cmpra2" style="white-space: nowrap;<?php echo $sStyleReadInp_vlor_cmpra2; ?>">
 <input class="sc-js-input scFormObjectOdd css_vlor_cmpra2_obj" style="" id="id_sc_field_vlor_cmpra2" type=text name="vlor_cmpra2" value="<?php echo $this->form_encode_input($vlor_cmpra2) ?>"
 size=20 alt="{datatype: 'decimal', maxLength: 20, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['vlor_cmpra2']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['vlor_cmpra2']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['vlor_cmpra2']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['vlor_cmpra2']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_vlor_cmpra2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_vlor_cmpra2_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_mnda_cmpra2']))
   {
       $this->nm_new_label['id_mnda_cmpra2'] = "ID MNDA CMPRA2";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_mnda_cmpra2 = $this->id_mnda_cmpra2;
   $sStyleHidden_id_mnda_cmpra2 = '';
   if (isset($this->nmgp_cmp_hidden['id_mnda_cmpra2']) && $this->nmgp_cmp_hidden['id_mnda_cmpra2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_mnda_cmpra2']);
       $sStyleHidden_id_mnda_cmpra2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_mnda_cmpra2 = 'display: none;';
   $sStyleReadInp_id_mnda_cmpra2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_mnda_cmpra2']) && $this->nmgp_cmp_readonly['id_mnda_cmpra2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_mnda_cmpra2']);
       $sStyleReadLab_id_mnda_cmpra2 = '';
       $sStyleReadInp_id_mnda_cmpra2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_mnda_cmpra2']) && $this->nmgp_cmp_hidden['id_mnda_cmpra2'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_mnda_cmpra2" value="<?php echo $this->form_encode_input($this->id_mnda_cmpra2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_mnda_cmpra2_label" id="hidden_field_label_id_mnda_cmpra2" style="<?php echo $sStyleHidden_id_mnda_cmpra2; ?>"><span id="id_label_id_mnda_cmpra2"><?php echo $this->nm_new_label['id_mnda_cmpra2']; ?></span></TD>
    <TD class="scFormDataOdd css_id_mnda_cmpra2_line" id="hidden_field_data_id_mnda_cmpra2" style="<?php echo $sStyleHidden_id_mnda_cmpra2; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_mnda_cmpra2_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_mnda_cmpra2"]) &&  $this->nmgp_cmp_readonly["id_mnda_cmpra2"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_MNDA, ID_MNDA FROM s_mndas ORDER BY ID_MNDA";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_mnda_cmpra2'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_mnda_cmpra2_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_mnda_cmpra2_1))
          {
              foreach ($this->id_mnda_cmpra2_1 as $tmp_id_mnda_cmpra2)
              {
                  if (trim($tmp_id_mnda_cmpra2) === trim($cadaselect[1])) { $id_mnda_cmpra2_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_mnda_cmpra2) === trim($cadaselect[1])) { $id_mnda_cmpra2_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_mnda_cmpra2" value="<?php echo $this->form_encode_input($id_mnda_cmpra2) . "\">" . $id_mnda_cmpra2_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_mnda_cmpra2();
   $x = 0 ; 
   $id_mnda_cmpra2_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_mnda_cmpra2_1))
          {
              foreach ($this->id_mnda_cmpra2_1 as $tmp_id_mnda_cmpra2)
              {
                  if (trim($tmp_id_mnda_cmpra2) === trim($cadaselect[1])) { $id_mnda_cmpra2_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_mnda_cmpra2) === trim($cadaselect[1])) { $id_mnda_cmpra2_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_mnda_cmpra2_look))
          {
              $id_mnda_cmpra2_look = $this->id_mnda_cmpra2;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_mnda_cmpra2\" class=\"css_id_mnda_cmpra2_line\" style=\"" .  $sStyleReadLab_id_mnda_cmpra2 . "\">" . $this->form_encode_input($id_mnda_cmpra2_look) . "</span><span id=\"id_read_off_id_mnda_cmpra2\" class=\"css_read_off_id_mnda_cmpra2\" style=\"white-space: nowrap; " . $sStyleReadInp_id_mnda_cmpra2 . "\">";
   echo " <span id=\"idAjaxSelect_id_mnda_cmpra2\"><select class=\"sc-js-input scFormObjectOdd css_id_mnda_cmpra2_obj\" style=\"\" id=\"id_sc_field_id_mnda_cmpra2\" name=\"id_mnda_cmpra2\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_mnda_cmpra2) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_mnda_cmpra2)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_mnda_cmpra2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_mnda_cmpra2_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_area']))
   {
       $this->nm_new_label['id_area'] = "ID AREA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_area = $this->id_area;
   $sStyleHidden_id_area = '';
   if (isset($this->nmgp_cmp_hidden['id_area']) && $this->nmgp_cmp_hidden['id_area'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_area']);
       $sStyleHidden_id_area = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_area = 'display: none;';
   $sStyleReadInp_id_area = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_area']) && $this->nmgp_cmp_readonly['id_area'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_area']);
       $sStyleReadLab_id_area = '';
       $sStyleReadInp_id_area = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_area']) && $this->nmgp_cmp_hidden['id_area'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_area" value="<?php echo $this->form_encode_input($this->id_area) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_area_label" id="hidden_field_label_id_area" style="<?php echo $sStyleHidden_id_area; ?>"><span id="id_label_id_area"><?php echo $this->nm_new_label['id_area']; ?></span></TD>
    <TD class="scFormDataOdd css_id_area_line" id="hidden_field_data_id_area" style="<?php echo $sStyleHidden_id_area; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_area_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_area"]) &&  $this->nmgp_cmp_readonly["id_area"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_AREA, ID_AREA FROM s_areas ORDER BY ID_AREA";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_area'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_area_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_area_1))
          {
              foreach ($this->id_area_1 as $tmp_id_area)
              {
                  if (trim($tmp_id_area) === trim($cadaselect[1])) { $id_area_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_area) === trim($cadaselect[1])) { $id_area_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_area" value="<?php echo $this->form_encode_input($id_area) . "\">" . $id_area_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_area();
   $x = 0 ; 
   $id_area_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_area_1))
          {
              foreach ($this->id_area_1 as $tmp_id_area)
              {
                  if (trim($tmp_id_area) === trim($cadaselect[1])) { $id_area_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_area) === trim($cadaselect[1])) { $id_area_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_area_look))
          {
              $id_area_look = $this->id_area;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_area\" class=\"css_id_area_line\" style=\"" .  $sStyleReadLab_id_area . "\">" . $this->form_encode_input($id_area_look) . "</span><span id=\"id_read_off_id_area\" class=\"css_read_off_id_area\" style=\"white-space: nowrap; " . $sStyleReadInp_id_area . "\">";
   echo " <span id=\"idAjaxSelect_id_area\"><select class=\"sc-js-input scFormObjectOdd css_id_area_obj\" style=\"\" id=\"id_sc_field_id_area\" name=\"id_area\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_area) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_area)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_area_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_area_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_cntro_csto']))
    {
        $this->nm_new_label['id_cntro_csto'] = "ID CNTRO CSTO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_cntro_csto = $this->id_cntro_csto;
   $sStyleHidden_id_cntro_csto = '';
   if (isset($this->nmgp_cmp_hidden['id_cntro_csto']) && $this->nmgp_cmp_hidden['id_cntro_csto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_cntro_csto']);
       $sStyleHidden_id_cntro_csto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_cntro_csto = 'display: none;';
   $sStyleReadInp_id_cntro_csto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_cntro_csto']) && $this->nmgp_cmp_readonly['id_cntro_csto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_cntro_csto']);
       $sStyleReadLab_id_cntro_csto = '';
       $sStyleReadInp_id_cntro_csto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_cntro_csto']) && $this->nmgp_cmp_hidden['id_cntro_csto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_cntro_csto" value="<?php echo $this->form_encode_input($id_cntro_csto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_cntro_csto_label" id="hidden_field_label_id_cntro_csto" style="<?php echo $sStyleHidden_id_cntro_csto; ?>"><span id="id_label_id_cntro_csto"><?php echo $this->nm_new_label['id_cntro_csto']; ?></span></TD>
    <TD class="scFormDataOdd css_id_cntro_csto_line" id="hidden_field_data_id_cntro_csto" style="<?php echo $sStyleHidden_id_cntro_csto; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_cntro_csto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_cntro_csto"]) &&  $this->nmgp_cmp_readonly["id_cntro_csto"] == "on") { 

 ?>
<input type="hidden" name="id_cntro_csto" value="<?php echo $this->form_encode_input($id_cntro_csto) . "\">" . $id_cntro_csto . ""; ?>
<?php } else { ?>
<span id="id_read_on_id_cntro_csto" class="sc-ui-readonly-id_cntro_csto css_id_cntro_csto_line" style="<?php echo $sStyleReadLab_id_cntro_csto; ?>"><?php echo $this->id_cntro_csto; ?></span><span id="id_read_off_id_cntro_csto" class="css_read_off_id_cntro_csto" style="white-space: nowrap;<?php echo $sStyleReadInp_id_cntro_csto; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_cntro_csto_obj" style="" id="id_sc_field_id_cntro_csto" type=text name="id_cntro_csto" value="<?php echo $this->form_encode_input($id_cntro_csto) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['id_cntro_csto']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['id_cntro_csto']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['id_cntro_csto']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_cntro_csto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_cntro_csto_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_ubccion']))
   {
       $this->nm_new_label['id_ubccion'] = "ID UBCCION";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_ubccion = $this->id_ubccion;
   $sStyleHidden_id_ubccion = '';
   if (isset($this->nmgp_cmp_hidden['id_ubccion']) && $this->nmgp_cmp_hidden['id_ubccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_ubccion']);
       $sStyleHidden_id_ubccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_ubccion = 'display: none;';
   $sStyleReadInp_id_ubccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_ubccion']) && $this->nmgp_cmp_readonly['id_ubccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_ubccion']);
       $sStyleReadLab_id_ubccion = '';
       $sStyleReadInp_id_ubccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_ubccion']) && $this->nmgp_cmp_hidden['id_ubccion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_ubccion" value="<?php echo $this->form_encode_input($this->id_ubccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_ubccion_label" id="hidden_field_label_id_ubccion" style="<?php echo $sStyleHidden_id_ubccion; ?>"><span id="id_label_id_ubccion"><?php echo $this->nm_new_label['id_ubccion']; ?></span></TD>
    <TD class="scFormDataOdd css_id_ubccion_line" id="hidden_field_data_id_ubccion" style="<?php echo $sStyleHidden_id_ubccion; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_ubccion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_ubccion"]) &&  $this->nmgp_cmp_readonly["id_ubccion"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_UBCCION, ID_UBCCION FROM s_ubccnes ORDER BY ID_UBCCION";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_ubccion'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_ubccion_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_ubccion_1))
          {
              foreach ($this->id_ubccion_1 as $tmp_id_ubccion)
              {
                  if (trim($tmp_id_ubccion) === trim($cadaselect[1])) { $id_ubccion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_ubccion) === trim($cadaselect[1])) { $id_ubccion_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_ubccion" value="<?php echo $this->form_encode_input($id_ubccion) . "\">" . $id_ubccion_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_ubccion();
   $x = 0 ; 
   $id_ubccion_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_ubccion_1))
          {
              foreach ($this->id_ubccion_1 as $tmp_id_ubccion)
              {
                  if (trim($tmp_id_ubccion) === trim($cadaselect[1])) { $id_ubccion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_ubccion) === trim($cadaselect[1])) { $id_ubccion_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_ubccion_look))
          {
              $id_ubccion_look = $this->id_ubccion;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_ubccion\" class=\"css_id_ubccion_line\" style=\"" .  $sStyleReadLab_id_ubccion . "\">" . $this->form_encode_input($id_ubccion_look) . "</span><span id=\"id_read_off_id_ubccion\" class=\"css_read_off_id_ubccion\" style=\"white-space: nowrap; " . $sStyleReadInp_id_ubccion . "\">";
   echo " <span id=\"idAjaxSelect_id_ubccion\"><select class=\"sc-js-input scFormObjectOdd css_id_ubccion_obj\" style=\"\" id=\"id_sc_field_id_ubccion\" name=\"id_ubccion\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_ubccion) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_ubccion)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_ubccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_ubccion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_nit_rspnsble']))
   {
       $this->nm_new_label['id_nit_rspnsble'] = "ID NIT RSPNSBLE";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_nit_rspnsble = $this->id_nit_rspnsble;
   $sStyleHidden_id_nit_rspnsble = '';
   if (isset($this->nmgp_cmp_hidden['id_nit_rspnsble']) && $this->nmgp_cmp_hidden['id_nit_rspnsble'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_nit_rspnsble']);
       $sStyleHidden_id_nit_rspnsble = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_nit_rspnsble = 'display: none;';
   $sStyleReadInp_id_nit_rspnsble = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_nit_rspnsble']) && $this->nmgp_cmp_readonly['id_nit_rspnsble'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_nit_rspnsble']);
       $sStyleReadLab_id_nit_rspnsble = '';
       $sStyleReadInp_id_nit_rspnsble = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_nit_rspnsble']) && $this->nmgp_cmp_hidden['id_nit_rspnsble'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_nit_rspnsble" value="<?php echo $this->form_encode_input($this->id_nit_rspnsble) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_nit_rspnsble_label" id="hidden_field_label_id_nit_rspnsble" style="<?php echo $sStyleHidden_id_nit_rspnsble; ?>"><span id="id_label_id_nit_rspnsble"><?php echo $this->nm_new_label['id_nit_rspnsble']; ?></span></TD>
    <TD class="scFormDataOdd css_id_nit_rspnsble_line" id="hidden_field_data_id_nit_rspnsble" style="<?php echo $sStyleHidden_id_nit_rspnsble; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_nit_rspnsble_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_nit_rspnsble"]) &&  $this->nmgp_cmp_readonly["id_nit_rspnsble"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_NIT, ID_NIT FROM s_nits ORDER BY ID_NIT";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_nit_rspnsble'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_nit_rspnsble_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_nit_rspnsble_1))
          {
              foreach ($this->id_nit_rspnsble_1 as $tmp_id_nit_rspnsble)
              {
                  if (trim($tmp_id_nit_rspnsble) === trim($cadaselect[1])) { $id_nit_rspnsble_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_nit_rspnsble) === trim($cadaselect[1])) { $id_nit_rspnsble_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_nit_rspnsble" value="<?php echo $this->form_encode_input($id_nit_rspnsble) . "\">" . $id_nit_rspnsble_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_nit_rspnsble();
   $x = 0 ; 
   $id_nit_rspnsble_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_nit_rspnsble_1))
          {
              foreach ($this->id_nit_rspnsble_1 as $tmp_id_nit_rspnsble)
              {
                  if (trim($tmp_id_nit_rspnsble) === trim($cadaselect[1])) { $id_nit_rspnsble_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_nit_rspnsble) === trim($cadaselect[1])) { $id_nit_rspnsble_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_nit_rspnsble_look))
          {
              $id_nit_rspnsble_look = $this->id_nit_rspnsble;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_nit_rspnsble\" class=\"css_id_nit_rspnsble_line\" style=\"" .  $sStyleReadLab_id_nit_rspnsble . "\">" . $this->form_encode_input($id_nit_rspnsble_look) . "</span><span id=\"id_read_off_id_nit_rspnsble\" class=\"css_read_off_id_nit_rspnsble\" style=\"white-space: nowrap; " . $sStyleReadInp_id_nit_rspnsble . "\">";
   echo " <span id=\"idAjaxSelect_id_nit_rspnsble\"><select class=\"sc-js-input scFormObjectOdd css_id_nit_rspnsble_obj\" style=\"\" id=\"id_sc_field_id_nit_rspnsble\" name=\"id_nit_rspnsble\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_nit_rspnsble) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_nit_rspnsble)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_nit_rspnsble_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_nit_rspnsble_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_cntdor']))
   {
       $this->nm_new_label['id_cntdor'] = "ID CNTDOR";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_cntdor = $this->id_cntdor;
   $sStyleHidden_id_cntdor = '';
   if (isset($this->nmgp_cmp_hidden['id_cntdor']) && $this->nmgp_cmp_hidden['id_cntdor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_cntdor']);
       $sStyleHidden_id_cntdor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_cntdor = 'display: none;';
   $sStyleReadInp_id_cntdor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_cntdor']) && $this->nmgp_cmp_readonly['id_cntdor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_cntdor']);
       $sStyleReadLab_id_cntdor = '';
       $sStyleReadInp_id_cntdor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_cntdor']) && $this->nmgp_cmp_hidden['id_cntdor'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_cntdor" value="<?php echo $this->form_encode_input($this->id_cntdor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_cntdor_label" id="hidden_field_label_id_cntdor" style="<?php echo $sStyleHidden_id_cntdor; ?>"><span id="id_label_id_cntdor"><?php echo $this->nm_new_label['id_cntdor']; ?></span></TD>
    <TD class="scFormDataOdd css_id_cntdor_line" id="hidden_field_data_id_cntdor" style="<?php echo $sStyleHidden_id_cntdor; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_cntdor_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_cntdor"]) &&  $this->nmgp_cmp_readonly["id_cntdor"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_CNTDOR, ID_CNTDOR FROM actvos_cntdres ORDER BY ID_CNTDOR";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_cntdor'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_cntdor_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_cntdor_1))
          {
              foreach ($this->id_cntdor_1 as $tmp_id_cntdor)
              {
                  if (trim($tmp_id_cntdor) === trim($cadaselect[1])) { $id_cntdor_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_cntdor) === trim($cadaselect[1])) { $id_cntdor_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_cntdor" value="<?php echo $this->form_encode_input($id_cntdor) . "\">" . $id_cntdor_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_cntdor();
   $x = 0 ; 
   $id_cntdor_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_cntdor_1))
          {
              foreach ($this->id_cntdor_1 as $tmp_id_cntdor)
              {
                  if (trim($tmp_id_cntdor) === trim($cadaselect[1])) { $id_cntdor_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_cntdor) === trim($cadaselect[1])) { $id_cntdor_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_cntdor_look))
          {
              $id_cntdor_look = $this->id_cntdor;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_cntdor\" class=\"css_id_cntdor_line\" style=\"" .  $sStyleReadLab_id_cntdor . "\">" . $this->form_encode_input($id_cntdor_look) . "</span><span id=\"id_read_off_id_cntdor\" class=\"css_read_off_id_cntdor\" style=\"white-space: nowrap; " . $sStyleReadInp_id_cntdor . "\">";
   echo " <span id=\"idAjaxSelect_id_cntdor\"><select class=\"sc-js-input scFormObjectOdd css_id_cntdor_obj\" style=\"\" id=\"id_sc_field_id_cntdor\" name=\"id_cntdor\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_cntdor) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_cntdor)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_cntdor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_cntdor_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['vlor_actual']))
    {
        $this->nm_new_label['vlor_actual'] = "VLOR ACTUAL";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $vlor_actual = $this->vlor_actual;
   $sStyleHidden_vlor_actual = '';
   if (isset($this->nmgp_cmp_hidden['vlor_actual']) && $this->nmgp_cmp_hidden['vlor_actual'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['vlor_actual']);
       $sStyleHidden_vlor_actual = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_vlor_actual = 'display: none;';
   $sStyleReadInp_vlor_actual = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['vlor_actual']) && $this->nmgp_cmp_readonly['vlor_actual'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['vlor_actual']);
       $sStyleReadLab_vlor_actual = '';
       $sStyleReadInp_vlor_actual = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['vlor_actual']) && $this->nmgp_cmp_hidden['vlor_actual'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="vlor_actual" value="<?php echo $this->form_encode_input($vlor_actual) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_vlor_actual_label" id="hidden_field_label_vlor_actual" style="<?php echo $sStyleHidden_vlor_actual; ?>"><span id="id_label_vlor_actual"><?php echo $this->nm_new_label['vlor_actual']; ?></span></TD>
    <TD class="scFormDataOdd css_vlor_actual_line" id="hidden_field_data_vlor_actual" style="<?php echo $sStyleHidden_vlor_actual; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_vlor_actual_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["vlor_actual"]) &&  $this->nmgp_cmp_readonly["vlor_actual"] == "on") { 

 ?>
<input type="hidden" name="vlor_actual" value="<?php echo $this->form_encode_input($vlor_actual) . "\">" . $vlor_actual . ""; ?>
<?php } else { ?>
<span id="id_read_on_vlor_actual" class="sc-ui-readonly-vlor_actual css_vlor_actual_line" style="<?php echo $sStyleReadLab_vlor_actual; ?>"><?php echo $this->vlor_actual; ?></span><span id="id_read_off_vlor_actual" class="css_read_off_vlor_actual" style="white-space: nowrap;<?php echo $sStyleReadInp_vlor_actual; ?>">
 <input class="sc-js-input scFormObjectOdd css_vlor_actual_obj" style="" id="id_sc_field_vlor_actual" type=text name="vlor_actual" value="<?php echo $this->form_encode_input($vlor_actual) ?>"
 size=20 alt="{datatype: 'decimal', maxLength: 20, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['vlor_actual']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['vlor_actual']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['vlor_actual']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['vlor_actual']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_vlor_actual_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_vlor_actual_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fcha_lctra']))
    {
        $this->nm_new_label['fcha_lctra'] = "FCHA LCTRA";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fcha_lctra = $this->fcha_lctra;
   $sStyleHidden_fcha_lctra = '';
   if (isset($this->nmgp_cmp_hidden['fcha_lctra']) && $this->nmgp_cmp_hidden['fcha_lctra'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fcha_lctra']);
       $sStyleHidden_fcha_lctra = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fcha_lctra = 'display: none;';
   $sStyleReadInp_fcha_lctra = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fcha_lctra']) && $this->nmgp_cmp_readonly['fcha_lctra'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fcha_lctra']);
       $sStyleReadLab_fcha_lctra = '';
       $sStyleReadInp_fcha_lctra = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fcha_lctra']) && $this->nmgp_cmp_hidden['fcha_lctra'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fcha_lctra" value="<?php echo $this->form_encode_input($fcha_lctra) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fcha_lctra_label" id="hidden_field_label_fcha_lctra" style="<?php echo $sStyleHidden_fcha_lctra; ?>"><span id="id_label_fcha_lctra"><?php echo $this->nm_new_label['fcha_lctra']; ?></span></TD>
    <TD class="scFormDataOdd css_fcha_lctra_line" id="hidden_field_data_fcha_lctra" style="<?php echo $sStyleHidden_fcha_lctra; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fcha_lctra_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fcha_lctra"]) &&  $this->nmgp_cmp_readonly["fcha_lctra"] == "on") { 

 ?>
<input type="hidden" name="fcha_lctra" value="<?php echo $this->form_encode_input($fcha_lctra) . "\">" . $fcha_lctra . ""; ?>
<?php } else { ?>
<span id="id_read_on_fcha_lctra" class="sc-ui-readonly-fcha_lctra css_fcha_lctra_line" style="<?php echo $sStyleReadLab_fcha_lctra; ?>"><?php echo $fcha_lctra; ?></span><span id="id_read_off_fcha_lctra" class="css_read_off_fcha_lctra" style="white-space: nowrap;<?php echo $sStyleReadInp_fcha_lctra; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_fcha_lctra_obj" style="" id="id_sc_field_fcha_lctra" type=text name="fcha_lctra" value="<?php echo $this->form_encode_input($fcha_lctra) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fcha_lctra']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fcha_lctra']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['fcha_lctra']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fcha_lctra_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fcha_lctra_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['vlor_estndar']))
    {
        $this->nm_new_label['vlor_estndar'] = "VLOR ESTNDAR";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $vlor_estndar = $this->vlor_estndar;
   $sStyleHidden_vlor_estndar = '';
   if (isset($this->nmgp_cmp_hidden['vlor_estndar']) && $this->nmgp_cmp_hidden['vlor_estndar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['vlor_estndar']);
       $sStyleHidden_vlor_estndar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_vlor_estndar = 'display: none;';
   $sStyleReadInp_vlor_estndar = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['vlor_estndar']) && $this->nmgp_cmp_readonly['vlor_estndar'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['vlor_estndar']);
       $sStyleReadLab_vlor_estndar = '';
       $sStyleReadInp_vlor_estndar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['vlor_estndar']) && $this->nmgp_cmp_hidden['vlor_estndar'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="vlor_estndar" value="<?php echo $this->form_encode_input($vlor_estndar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_vlor_estndar_label" id="hidden_field_label_vlor_estndar" style="<?php echo $sStyleHidden_vlor_estndar; ?>"><span id="id_label_vlor_estndar"><?php echo $this->nm_new_label['vlor_estndar']; ?></span></TD>
    <TD class="scFormDataOdd css_vlor_estndar_line" id="hidden_field_data_vlor_estndar" style="<?php echo $sStyleHidden_vlor_estndar; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_vlor_estndar_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["vlor_estndar"]) &&  $this->nmgp_cmp_readonly["vlor_estndar"] == "on") { 

 ?>
<input type="hidden" name="vlor_estndar" value="<?php echo $this->form_encode_input($vlor_estndar) . "\">" . $vlor_estndar . ""; ?>
<?php } else { ?>
<span id="id_read_on_vlor_estndar" class="sc-ui-readonly-vlor_estndar css_vlor_estndar_line" style="<?php echo $sStyleReadLab_vlor_estndar; ?>"><?php echo $this->vlor_estndar; ?></span><span id="id_read_off_vlor_estndar" class="css_read_off_vlor_estndar" style="white-space: nowrap;<?php echo $sStyleReadInp_vlor_estndar; ?>">
 <input class="sc-js-input scFormObjectOdd css_vlor_estndar_obj" style="" id="id_sc_field_vlor_estndar" type=text name="vlor_estndar" value="<?php echo $this->form_encode_input($vlor_estndar) ?>"
 size=20 alt="{datatype: 'decimal', maxLength: 20, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['vlor_estndar']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['vlor_estndar']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['vlor_estndar']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['vlor_estndar']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_vlor_estndar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_vlor_estndar_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_tpo_mdcion']))
   {
       $this->nm_new_label['id_tpo_mdcion'] = "ID TPO MDCION";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_tpo_mdcion = $this->id_tpo_mdcion;
   $sStyleHidden_id_tpo_mdcion = '';
   if (isset($this->nmgp_cmp_hidden['id_tpo_mdcion']) && $this->nmgp_cmp_hidden['id_tpo_mdcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_tpo_mdcion']);
       $sStyleHidden_id_tpo_mdcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_tpo_mdcion = 'display: none;';
   $sStyleReadInp_id_tpo_mdcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_tpo_mdcion']) && $this->nmgp_cmp_readonly['id_tpo_mdcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_tpo_mdcion']);
       $sStyleReadLab_id_tpo_mdcion = '';
       $sStyleReadInp_id_tpo_mdcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_tpo_mdcion']) && $this->nmgp_cmp_hidden['id_tpo_mdcion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_tpo_mdcion" value="<?php echo $this->form_encode_input($this->id_tpo_mdcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_tpo_mdcion_label" id="hidden_field_label_id_tpo_mdcion" style="<?php echo $sStyleHidden_id_tpo_mdcion; ?>"><span id="id_label_id_tpo_mdcion"><?php echo $this->nm_new_label['id_tpo_mdcion']; ?></span></TD>
    <TD class="scFormDataOdd css_id_tpo_mdcion_line" id="hidden_field_data_id_tpo_mdcion" style="<?php echo $sStyleHidden_id_tpo_mdcion; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_tpo_mdcion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_tpo_mdcion"]) &&  $this->nmgp_cmp_readonly["id_tpo_mdcion"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT ID_TPO_MDCION, ID_TPO_MDCION FROM s_tpo_mdcnes ORDER BY ID_TPO_MDCION";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_tpo_mdcion'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_tpo_mdcion_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tpo_mdcion_1))
          {
              foreach ($this->id_tpo_mdcion_1 as $tmp_id_tpo_mdcion)
              {
                  if (trim($tmp_id_tpo_mdcion) === trim($cadaselect[1])) { $id_tpo_mdcion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tpo_mdcion) === trim($cadaselect[1])) { $id_tpo_mdcion_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_tpo_mdcion" value="<?php echo $this->form_encode_input($id_tpo_mdcion) . "\">" . $id_tpo_mdcion_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_tpo_mdcion();
   $x = 0 ; 
   $id_tpo_mdcion_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tpo_mdcion_1))
          {
              foreach ($this->id_tpo_mdcion_1 as $tmp_id_tpo_mdcion)
              {
                  if (trim($tmp_id_tpo_mdcion) === trim($cadaselect[1])) { $id_tpo_mdcion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tpo_mdcion) === trim($cadaselect[1])) { $id_tpo_mdcion_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_tpo_mdcion_look))
          {
              $id_tpo_mdcion_look = $this->id_tpo_mdcion;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_tpo_mdcion\" class=\"css_id_tpo_mdcion_line\" style=\"" .  $sStyleReadLab_id_tpo_mdcion . "\">" . $this->form_encode_input($id_tpo_mdcion_look) . "</span><span id=\"id_read_off_id_tpo_mdcion\" class=\"css_read_off_id_tpo_mdcion\" style=\"white-space: nowrap; " . $sStyleReadInp_id_tpo_mdcion . "\">";
   echo " <span id=\"idAjaxSelect_id_tpo_mdcion\"><select class=\"sc-js-input scFormObjectOdd css_id_tpo_mdcion_obj\" style=\"\" id=\"id_sc_field_id_tpo_mdcion\" name=\"id_tpo_mdcion\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_tpo_mdcion) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_tpo_mdcion)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_tpo_mdcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_tpo_mdcion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fto1']))
    {
        $this->nm_new_label['fto1'] = "FTO1";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fto1 = $this->fto1;
   $sStyleHidden_fto1 = '';
   if (isset($this->nmgp_cmp_hidden['fto1']) && $this->nmgp_cmp_hidden['fto1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fto1']);
       $sStyleHidden_fto1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fto1 = 'display: none;';
   $sStyleReadInp_fto1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fto1']) && $this->nmgp_cmp_readonly['fto1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fto1']);
       $sStyleReadLab_fto1 = '';
       $sStyleReadInp_fto1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fto1']) && $this->nmgp_cmp_hidden['fto1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fto1" value="<?php echo $this->form_encode_input($fto1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fto1_label" id="hidden_field_label_fto1" style="<?php echo $sStyleHidden_fto1; ?>"><span id="id_label_fto1"><?php echo $this->nm_new_label['fto1']; ?></span></TD>
    <TD class="scFormDataOdd css_fto1_line" id="hidden_field_data_fto1" style="<?php echo $sStyleHidden_fto1; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fto1_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_fto1" => $out_fto1); ?><script>var var_ajax_img_fto1 = '<?php echo $out_fto1; ?>';</script><input type="hidden" name="temp_out_fto1" value="<?php echo $this->form_encode_input($out_fto1); ?>" /><?php if (!empty($out_fto1)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_fto1, '" . $this->nmgp_return_img['fto1'][0] . "', '" . $this->nmgp_return_img['fto1'][1] . "')\"><img id=\"id_ajax_img_fto1\"  border=\"0\" src=\"$out_fto1\"></a>"; } else {  echo "<img id=\"id_ajax_img_fto1\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fto1"]) &&  $this->nmgp_cmp_readonly["fto1"] == "on") { 

 ?>
<img id=\"fto1_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="fto1" value="<?php echo $this->form_encode_input($fto1) . "\">" . $fto1 . ""; ?>
<?php } else { ?>
<span id="id_read_off_fto1" class="css_read_off_fto1" style="white-space: nowrap;<?php echo $sStyleReadInp_fto1; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-fto1" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_fto1_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="fto1[]" id="id_sc_field_fto1" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_fto1"<?php if ($this->nmgp_opcao == "novo" || empty($fto1)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="fto1_limpa" value="<?php echo $fto1_limpa . '" '; if ($fto1_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="fto1_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_fto1" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_fto1" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_fto1" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fto1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fto1_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fto2']))
    {
        $this->nm_new_label['fto2'] = "FTO2";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fto2 = $this->fto2;
   $sStyleHidden_fto2 = '';
   if (isset($this->nmgp_cmp_hidden['fto2']) && $this->nmgp_cmp_hidden['fto2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fto2']);
       $sStyleHidden_fto2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fto2 = 'display: none;';
   $sStyleReadInp_fto2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fto2']) && $this->nmgp_cmp_readonly['fto2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fto2']);
       $sStyleReadLab_fto2 = '';
       $sStyleReadInp_fto2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fto2']) && $this->nmgp_cmp_hidden['fto2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fto2" value="<?php echo $this->form_encode_input($fto2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fto2_label" id="hidden_field_label_fto2" style="<?php echo $sStyleHidden_fto2; ?>"><span id="id_label_fto2"><?php echo $this->nm_new_label['fto2']; ?></span></TD>
    <TD class="scFormDataOdd css_fto2_line" id="hidden_field_data_fto2" style="<?php echo $sStyleHidden_fto2; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fto2_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_fto2" => $out_fto2); ?><script>var var_ajax_img_fto2 = '<?php echo $out_fto2; ?>';</script><input type="hidden" name="temp_out_fto2" value="<?php echo $this->form_encode_input($out_fto2); ?>" /><?php if (!empty($out_fto2)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_fto2, '" . $this->nmgp_return_img['fto2'][0] . "', '" . $this->nmgp_return_img['fto2'][1] . "')\"><img id=\"id_ajax_img_fto2\"  border=\"0\" src=\"$out_fto2\"></a>"; } else {  echo "<img id=\"id_ajax_img_fto2\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fto2"]) &&  $this->nmgp_cmp_readonly["fto2"] == "on") { 

 ?>
<img id=\"fto2_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="fto2" value="<?php echo $this->form_encode_input($fto2) . "\">" . $fto2 . ""; ?>
<?php } else { ?>
<span id="id_read_off_fto2" class="css_read_off_fto2" style="white-space: nowrap;<?php echo $sStyleReadInp_fto2; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-fto2" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_fto2_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="fto2[]" id="id_sc_field_fto2" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_fto2"<?php if ($this->nmgp_opcao == "novo" || empty($fto2)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="fto2_limpa" value="<?php echo $fto2_limpa . '" '; if ($fto2_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="fto2_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_fto2" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_fto2" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_fto2" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fto2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fto2_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fto3']))
    {
        $this->nm_new_label['fto3'] = "FTO3";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fto3 = $this->fto3;
   $sStyleHidden_fto3 = '';
   if (isset($this->nmgp_cmp_hidden['fto3']) && $this->nmgp_cmp_hidden['fto3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fto3']);
       $sStyleHidden_fto3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fto3 = 'display: none;';
   $sStyleReadInp_fto3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fto3']) && $this->nmgp_cmp_readonly['fto3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fto3']);
       $sStyleReadLab_fto3 = '';
       $sStyleReadInp_fto3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fto3']) && $this->nmgp_cmp_hidden['fto3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fto3" value="<?php echo $this->form_encode_input($fto3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fto3_label" id="hidden_field_label_fto3" style="<?php echo $sStyleHidden_fto3; ?>"><span id="id_label_fto3"><?php echo $this->nm_new_label['fto3']; ?></span></TD>
    <TD class="scFormDataOdd css_fto3_line" id="hidden_field_data_fto3" style="<?php echo $sStyleHidden_fto3; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fto3_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_fto3" => $out_fto3); ?><script>var var_ajax_img_fto3 = '<?php echo $out_fto3; ?>';</script><input type="hidden" name="temp_out_fto3" value="<?php echo $this->form_encode_input($out_fto3); ?>" /><?php if (!empty($out_fto3)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_fto3, '" . $this->nmgp_return_img['fto3'][0] . "', '" . $this->nmgp_return_img['fto3'][1] . "')\"><img id=\"id_ajax_img_fto3\"  border=\"0\" src=\"$out_fto3\"></a>"; } else {  echo "<img id=\"id_ajax_img_fto3\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fto3"]) &&  $this->nmgp_cmp_readonly["fto3"] == "on") { 

 ?>
<img id=\"fto3_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="fto3" value="<?php echo $this->form_encode_input($fto3) . "\">" . $fto3 . ""; ?>
<?php } else { ?>
<span id="id_read_off_fto3" class="css_read_off_fto3" style="white-space: nowrap;<?php echo $sStyleReadInp_fto3; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-fto3" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_fto3_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="fto3[]" id="id_sc_field_fto3" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_fto3"<?php if ($this->nmgp_opcao == "novo" || empty($fto3)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="fto3_limpa" value="<?php echo $fto3_limpa . '" '; if ($fto3_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="fto3_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_fto3" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_fto3" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_fto3" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fto3_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fto3_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fto4']))
    {
        $this->nm_new_label['fto4'] = "FTO4";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fto4 = $this->fto4;
   $sStyleHidden_fto4 = '';
   if (isset($this->nmgp_cmp_hidden['fto4']) && $this->nmgp_cmp_hidden['fto4'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fto4']);
       $sStyleHidden_fto4 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fto4 = 'display: none;';
   $sStyleReadInp_fto4 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fto4']) && $this->nmgp_cmp_readonly['fto4'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fto4']);
       $sStyleReadLab_fto4 = '';
       $sStyleReadInp_fto4 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fto4']) && $this->nmgp_cmp_hidden['fto4'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fto4" value="<?php echo $this->form_encode_input($fto4) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fto4_label" id="hidden_field_label_fto4" style="<?php echo $sStyleHidden_fto4; ?>"><span id="id_label_fto4"><?php echo $this->nm_new_label['fto4']; ?></span></TD>
    <TD class="scFormDataOdd css_fto4_line" id="hidden_field_data_fto4" style="<?php echo $sStyleHidden_fto4; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fto4_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_fto4" => $out_fto4); ?><script>var var_ajax_img_fto4 = '<?php echo $out_fto4; ?>';</script><input type="hidden" name="temp_out_fto4" value="<?php echo $this->form_encode_input($out_fto4); ?>" /><?php if (!empty($out_fto4)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_fto4, '" . $this->nmgp_return_img['fto4'][0] . "', '" . $this->nmgp_return_img['fto4'][1] . "')\"><img id=\"id_ajax_img_fto4\"  border=\"0\" src=\"$out_fto4\"></a>"; } else {  echo "<img id=\"id_ajax_img_fto4\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fto4"]) &&  $this->nmgp_cmp_readonly["fto4"] == "on") { 

 ?>
<img id=\"fto4_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="fto4" value="<?php echo $this->form_encode_input($fto4) . "\">" . $fto4 . ""; ?>
<?php } else { ?>
<span id="id_read_off_fto4" class="css_read_off_fto4" style="white-space: nowrap;<?php echo $sStyleReadInp_fto4; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-fto4" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_fto4_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="fto4[]" id="id_sc_field_fto4" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_fto4"<?php if ($this->nmgp_opcao == "novo" || empty($fto4)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="fto4_limpa" value="<?php echo $fto4_limpa . '" '; if ($fto4_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="fto4_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_fto4" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_fto4" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_fto4" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fto4_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fto4_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fto5']))
    {
        $this->nm_new_label['fto5'] = "FTO5";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fto5 = $this->fto5;
   $sStyleHidden_fto5 = '';
   if (isset($this->nmgp_cmp_hidden['fto5']) && $this->nmgp_cmp_hidden['fto5'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fto5']);
       $sStyleHidden_fto5 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fto5 = 'display: none;';
   $sStyleReadInp_fto5 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fto5']) && $this->nmgp_cmp_readonly['fto5'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fto5']);
       $sStyleReadLab_fto5 = '';
       $sStyleReadInp_fto5 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fto5']) && $this->nmgp_cmp_hidden['fto5'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fto5" value="<?php echo $this->form_encode_input($fto5) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fto5_label" id="hidden_field_label_fto5" style="<?php echo $sStyleHidden_fto5; ?>"><span id="id_label_fto5"><?php echo $this->nm_new_label['fto5']; ?></span></TD>
    <TD class="scFormDataOdd css_fto5_line" id="hidden_field_data_fto5" style="<?php echo $sStyleHidden_fto5; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fto5_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_fto5" => $out_fto5); ?><script>var var_ajax_img_fto5 = '<?php echo $out_fto5; ?>';</script><input type="hidden" name="temp_out_fto5" value="<?php echo $this->form_encode_input($out_fto5); ?>" /><?php if (!empty($out_fto5)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_fto5, '" . $this->nmgp_return_img['fto5'][0] . "', '" . $this->nmgp_return_img['fto5'][1] . "')\"><img id=\"id_ajax_img_fto5\"  border=\"0\" src=\"$out_fto5\"></a>"; } else {  echo "<img id=\"id_ajax_img_fto5\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fto5"]) &&  $this->nmgp_cmp_readonly["fto5"] == "on") { 

 ?>
<img id=\"fto5_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="fto5" value="<?php echo $this->form_encode_input($fto5) . "\">" . $fto5 . ""; ?>
<?php } else { ?>
<span id="id_read_off_fto5" class="css_read_off_fto5" style="white-space: nowrap;<?php echo $sStyleReadInp_fto5; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-fto5" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_fto5_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="fto5[]" id="id_sc_field_fto5" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_fto5"<?php if ($this->nmgp_opcao == "novo" || empty($fto5)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="fto5_limpa" value="<?php echo $fto5_limpa . '" '; if ($fto5_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="fto5_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_fto5" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_fto5" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_fto5" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fto5_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fto5_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fto6']))
    {
        $this->nm_new_label['fto6'] = "FTO6";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fto6 = $this->fto6;
   $sStyleHidden_fto6 = '';
   if (isset($this->nmgp_cmp_hidden['fto6']) && $this->nmgp_cmp_hidden['fto6'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fto6']);
       $sStyleHidden_fto6 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fto6 = 'display: none;';
   $sStyleReadInp_fto6 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fto6']) && $this->nmgp_cmp_readonly['fto6'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fto6']);
       $sStyleReadLab_fto6 = '';
       $sStyleReadInp_fto6 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fto6']) && $this->nmgp_cmp_hidden['fto6'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fto6" value="<?php echo $this->form_encode_input($fto6) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fto6_label" id="hidden_field_label_fto6" style="<?php echo $sStyleHidden_fto6; ?>"><span id="id_label_fto6"><?php echo $this->nm_new_label['fto6']; ?></span></TD>
    <TD class="scFormDataOdd css_fto6_line" id="hidden_field_data_fto6" style="<?php echo $sStyleHidden_fto6; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fto6_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_fto6" => $out_fto6); ?><script>var var_ajax_img_fto6 = '<?php echo $out_fto6; ?>';</script><input type="hidden" name="temp_out_fto6" value="<?php echo $this->form_encode_input($out_fto6); ?>" /><?php if (!empty($out_fto6)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_fto6, '" . $this->nmgp_return_img['fto6'][0] . "', '" . $this->nmgp_return_img['fto6'][1] . "')\"><img id=\"id_ajax_img_fto6\"  border=\"0\" src=\"$out_fto6\"></a>"; } else {  echo "<img id=\"id_ajax_img_fto6\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fto6"]) &&  $this->nmgp_cmp_readonly["fto6"] == "on") { 

 ?>
<img id=\"fto6_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="fto6" value="<?php echo $this->form_encode_input($fto6) . "\">" . $fto6 . ""; ?>
<?php } else { ?>
<span id="id_read_off_fto6" class="css_read_off_fto6" style="white-space: nowrap;<?php echo $sStyleReadInp_fto6; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-fto6" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_fto6_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="fto6[]" id="id_sc_field_fto6" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_fto6"<?php if ($this->nmgp_opcao == "novo" || empty($fto6)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="fto6_limpa" value="<?php echo $fto6_limpa . '" '; if ($fto6_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="fto6_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_fto6" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_fto6" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_fto6" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fto6_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fto6_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prmtro_oprcion']))
    {
        $this->nm_new_label['prmtro_oprcion'] = "PRMTRO OPRCION";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prmtro_oprcion = $this->prmtro_oprcion;
   $sStyleHidden_prmtro_oprcion = '';
   if (isset($this->nmgp_cmp_hidden['prmtro_oprcion']) && $this->nmgp_cmp_hidden['prmtro_oprcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prmtro_oprcion']);
       $sStyleHidden_prmtro_oprcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prmtro_oprcion = 'display: none;';
   $sStyleReadInp_prmtro_oprcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prmtro_oprcion']) && $this->nmgp_cmp_readonly['prmtro_oprcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prmtro_oprcion']);
       $sStyleReadLab_prmtro_oprcion = '';
       $sStyleReadInp_prmtro_oprcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prmtro_oprcion']) && $this->nmgp_cmp_hidden['prmtro_oprcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prmtro_oprcion" value="<?php echo $this->form_encode_input($prmtro_oprcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_prmtro_oprcion_label" id="hidden_field_label_prmtro_oprcion" style="<?php echo $sStyleHidden_prmtro_oprcion; ?>"><span id="id_label_prmtro_oprcion"><?php echo $this->nm_new_label['prmtro_oprcion']; ?></span></TD>
    <TD class="scFormDataOdd css_prmtro_oprcion_line" id="hidden_field_data_prmtro_oprcion" style="<?php echo $sStyleHidden_prmtro_oprcion; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prmtro_oprcion_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_prmtro_oprcion" => $out_prmtro_oprcion); ?><script>var var_ajax_img_prmtro_oprcion = '<?php echo $out_prmtro_oprcion; ?>';</script><input type="hidden" name="temp_out_prmtro_oprcion" value="<?php echo $this->form_encode_input($out_prmtro_oprcion); ?>" /><?php if (!empty($out_prmtro_oprcion)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_prmtro_oprcion, '" . $this->nmgp_return_img['prmtro_oprcion'][0] . "', '" . $this->nmgp_return_img['prmtro_oprcion'][1] . "')\"><img id=\"id_ajax_img_prmtro_oprcion\"  border=\"0\" src=\"$out_prmtro_oprcion\"></a>"; } else {  echo "<img id=\"id_ajax_img_prmtro_oprcion\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prmtro_oprcion"]) &&  $this->nmgp_cmp_readonly["prmtro_oprcion"] == "on") { 

 ?>
<img id=\"prmtro_oprcion_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="prmtro_oprcion" value="<?php echo $this->form_encode_input($prmtro_oprcion) . "\">" . $prmtro_oprcion . ""; ?>
<?php } else { ?>
<span id="id_read_off_prmtro_oprcion" class="css_read_off_prmtro_oprcion" style="white-space: nowrap;<?php echo $sStyleReadInp_prmtro_oprcion; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-prmtro_oprcion" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_prmtro_oprcion_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="prmtro_oprcion[]" id="id_sc_field_prmtro_oprcion" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_prmtro_oprcion"<?php if ($this->nmgp_opcao == "novo" || empty($prmtro_oprcion)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="prmtro_oprcion_limpa" value="<?php echo $prmtro_oprcion_limpa . '" '; if ($prmtro_oprcion_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="prmtro_oprcion_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_prmtro_oprcion" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_prmtro_oprcion" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_prmtro_oprcion" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prmtro_oprcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prmtro_oprcion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nmbre_archvo_po']))
    {
        $this->nm_new_label['nmbre_archvo_po'] = "NMBRE ARCHVO PO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nmbre_archvo_po = $this->nmbre_archvo_po;
   $sStyleHidden_nmbre_archvo_po = '';
   if (isset($this->nmgp_cmp_hidden['nmbre_archvo_po']) && $this->nmgp_cmp_hidden['nmbre_archvo_po'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nmbre_archvo_po']);
       $sStyleHidden_nmbre_archvo_po = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nmbre_archvo_po = 'display: none;';
   $sStyleReadInp_nmbre_archvo_po = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nmbre_archvo_po']) && $this->nmgp_cmp_readonly['nmbre_archvo_po'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nmbre_archvo_po']);
       $sStyleReadLab_nmbre_archvo_po = '';
       $sStyleReadInp_nmbre_archvo_po = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nmbre_archvo_po']) && $this->nmgp_cmp_hidden['nmbre_archvo_po'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nmbre_archvo_po" value="<?php echo $this->form_encode_input($nmbre_archvo_po) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nmbre_archvo_po_label" id="hidden_field_label_nmbre_archvo_po" style="<?php echo $sStyleHidden_nmbre_archvo_po; ?>"><span id="id_label_nmbre_archvo_po"><?php echo $this->nm_new_label['nmbre_archvo_po']; ?></span></TD>
    <TD class="scFormDataOdd css_nmbre_archvo_po_line" id="hidden_field_data_nmbre_archvo_po" style="<?php echo $sStyleHidden_nmbre_archvo_po; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nmbre_archvo_po_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nmbre_archvo_po"]) &&  $this->nmgp_cmp_readonly["nmbre_archvo_po"] == "on") { 

 ?>
<input type="hidden" name="nmbre_archvo_po" value="<?php echo $this->form_encode_input($nmbre_archvo_po) . "\">" . $nmbre_archvo_po . ""; ?>
<?php } else { ?>
<span id="id_read_on_nmbre_archvo_po" class="sc-ui-readonly-nmbre_archvo_po css_nmbre_archvo_po_line" style="<?php echo $sStyleReadLab_nmbre_archvo_po; ?>"><?php echo $this->nmbre_archvo_po; ?></span><span id="id_read_off_nmbre_archvo_po" class="css_read_off_nmbre_archvo_po" style="white-space: nowrap;<?php echo $sStyleReadInp_nmbre_archvo_po; ?>">
 <input class="sc-js-input scFormObjectOdd css_nmbre_archvo_po_obj" style="" id="id_sc_field_nmbre_archvo_po" type=text name="nmbre_archvo_po" value="<?php echo $this->form_encode_input($nmbre_archvo_po) ?>"
 size=50 maxlength=120 alt="{datatype: 'text', maxLength: 120, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nmbre_archvo_po_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nmbre_archvo_po_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tmno_po']))
    {
        $this->nm_new_label['tmno_po'] = "TMNO PO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tmno_po = $this->tmno_po;
   $sStyleHidden_tmno_po = '';
   if (isset($this->nmgp_cmp_hidden['tmno_po']) && $this->nmgp_cmp_hidden['tmno_po'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tmno_po']);
       $sStyleHidden_tmno_po = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tmno_po = 'display: none;';
   $sStyleReadInp_tmno_po = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tmno_po']) && $this->nmgp_cmp_readonly['tmno_po'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tmno_po']);
       $sStyleReadLab_tmno_po = '';
       $sStyleReadInp_tmno_po = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tmno_po']) && $this->nmgp_cmp_hidden['tmno_po'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tmno_po" value="<?php echo $this->form_encode_input($tmno_po) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_tmno_po_label" id="hidden_field_label_tmno_po" style="<?php echo $sStyleHidden_tmno_po; ?>"><span id="id_label_tmno_po"><?php echo $this->nm_new_label['tmno_po']; ?></span></TD>
    <TD class="scFormDataOdd css_tmno_po_line" id="hidden_field_data_tmno_po" style="<?php echo $sStyleHidden_tmno_po; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tmno_po_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tmno_po"]) &&  $this->nmgp_cmp_readonly["tmno_po"] == "on") { 

 ?>
<input type="hidden" name="tmno_po" value="<?php echo $this->form_encode_input($tmno_po) . "\">" . $tmno_po . ""; ?>
<?php } else { ?>
<span id="id_read_on_tmno_po" class="sc-ui-readonly-tmno_po css_tmno_po_line" style="<?php echo $sStyleReadLab_tmno_po; ?>"><?php echo $this->tmno_po; ?></span><span id="id_read_off_tmno_po" class="css_read_off_tmno_po" style="white-space: nowrap;<?php echo $sStyleReadInp_tmno_po; ?>">
 <input class="sc-js-input scFormObjectOdd css_tmno_po_obj" style="" id="id_sc_field_tmno_po" type=text name="tmno_po" value="<?php echo $this->form_encode_input($tmno_po) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tmno_po_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tmno_po_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fcha_rgstro']))
    {
        $this->nm_new_label['fcha_rgstro'] = "FCHA RGSTRO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fcha_rgstro = $this->fcha_rgstro;
   $sStyleHidden_fcha_rgstro = '';
   if (isset($this->nmgp_cmp_hidden['fcha_rgstro']) && $this->nmgp_cmp_hidden['fcha_rgstro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fcha_rgstro']);
       $sStyleHidden_fcha_rgstro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fcha_rgstro = 'display: none;';
   $sStyleReadInp_fcha_rgstro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fcha_rgstro']) && $this->nmgp_cmp_readonly['fcha_rgstro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fcha_rgstro']);
       $sStyleReadLab_fcha_rgstro = '';
       $sStyleReadInp_fcha_rgstro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fcha_rgstro']) && $this->nmgp_cmp_hidden['fcha_rgstro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fcha_rgstro" value="<?php echo $this->form_encode_input($fcha_rgstro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fcha_rgstro_label" id="hidden_field_label_fcha_rgstro" style="<?php echo $sStyleHidden_fcha_rgstro; ?>"><span id="id_label_fcha_rgstro"><?php echo $this->nm_new_label['fcha_rgstro']; ?></span></TD>
    <TD class="scFormDataOdd css_fcha_rgstro_line" id="hidden_field_data_fcha_rgstro" style="<?php echo $sStyleHidden_fcha_rgstro; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fcha_rgstro_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fcha_rgstro"]) &&  $this->nmgp_cmp_readonly["fcha_rgstro"] == "on") { 

 ?>
<input type="hidden" name="fcha_rgstro" value="<?php echo $this->form_encode_input($fcha_rgstro) . "\">" . $fcha_rgstro . ""; ?>
<?php } else { ?>
<span id="id_read_on_fcha_rgstro" class="sc-ui-readonly-fcha_rgstro css_fcha_rgstro_line" style="<?php echo $sStyleReadLab_fcha_rgstro; ?>"><?php echo $fcha_rgstro; ?></span><span id="id_read_off_fcha_rgstro" class="css_read_off_fcha_rgstro" style="white-space: nowrap;<?php echo $sStyleReadInp_fcha_rgstro; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_fcha_rgstro_obj" style="" id="id_sc_field_fcha_rgstro" type=text name="fcha_rgstro" value="<?php echo $this->form_encode_input($fcha_rgstro) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fcha_rgstro']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fcha_rgstro']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['fcha_rgstro']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fcha_rgstro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fcha_rgstro_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_usrio']))
   {
       $this->nm_new_label['id_usrio'] = "ID USRIO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_usrio = $this->id_usrio;
   $sStyleHidden_id_usrio = '';
   if (isset($this->nmgp_cmp_hidden['id_usrio']) && $this->nmgp_cmp_hidden['id_usrio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_usrio']);
       $sStyleHidden_id_usrio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_usrio = 'display: none;';
   $sStyleReadInp_id_usrio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_usrio']) && $this->nmgp_cmp_readonly['id_usrio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_usrio']);
       $sStyleReadLab_id_usrio = '';
       $sStyleReadInp_id_usrio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_usrio']) && $this->nmgp_cmp_hidden['id_usrio'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_usrio" value="<?php echo $this->form_encode_input($this->id_usrio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_usrio_label" id="hidden_field_label_id_usrio" style="<?php echo $sStyleHidden_id_usrio; ?>"><span id="id_label_id_usrio"><?php echo $this->nm_new_label['id_usrio']; ?></span></TD>
    <TD class="scFormDataOdd css_id_usrio_line" id="hidden_field_data_id_usrio" style="<?php echo $sStyleHidden_id_usrio; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_usrio_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_usrio"]) &&  $this->nmgp_cmp_readonly["id_usrio"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio'] = array(); 
    }

   $old_value_id_actvo = $this->id_actvo;
   $old_value_cnfbldad = $this->cnfbldad;
   $old_value_fcha_cmpra = $this->fcha_cmpra;
   $old_value_fcha_arrnque = $this->fcha_arrnque;
   $old_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $old_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $old_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $old_value_id_cntro_csto = $this->id_cntro_csto;
   $old_value_vlor_actual = $this->vlor_actual;
   $old_value_fcha_lctra = $this->fcha_lctra;
   $old_value_vlor_estndar = $this->vlor_estndar;
   $old_value_fcha_rgstro = $this->fcha_rgstro;
   $old_value_fcha_actlzcion = $this->fcha_actlzcion;
   $old_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_actvo = $this->id_actvo;
   $unformatted_value_cnfbldad = $this->cnfbldad;
   $unformatted_value_fcha_cmpra = $this->fcha_cmpra;
   $unformatted_value_fcha_arrnque = $this->fcha_arrnque;
   $unformatted_value_fcha_fin_grntia = $this->fcha_fin_grntia;
   $unformatted_value_vlor_cmpra1 = $this->vlor_cmpra1;
   $unformatted_value_vlor_cmpra2 = $this->vlor_cmpra2;
   $unformatted_value_id_cntro_csto = $this->id_cntro_csto;
   $unformatted_value_vlor_actual = $this->vlor_actual;
   $unformatted_value_fcha_lctra = $this->fcha_lctra;
   $unformatted_value_vlor_estndar = $this->vlor_estndar;
   $unformatted_value_fcha_rgstro = $this->fcha_rgstro;
   $unformatted_value_fcha_actlzcion = $this->fcha_actlzcion;
   $unformatted_value_fcha_actlzcion_hora = $this->fcha_actlzcion_hora;

   $nm_comando = "SELECT login, login FROM sec_users ORDER BY login";

   $this->id_actvo = $old_value_id_actvo;
   $this->cnfbldad = $old_value_cnfbldad;
   $this->fcha_cmpra = $old_value_fcha_cmpra;
   $this->fcha_arrnque = $old_value_fcha_arrnque;
   $this->fcha_fin_grntia = $old_value_fcha_fin_grntia;
   $this->vlor_cmpra1 = $old_value_vlor_cmpra1;
   $this->vlor_cmpra2 = $old_value_vlor_cmpra2;
   $this->id_cntro_csto = $old_value_id_cntro_csto;
   $this->vlor_actual = $old_value_vlor_actual;
   $this->fcha_lctra = $old_value_fcha_lctra;
   $this->vlor_estndar = $old_value_vlor_estndar;
   $this->fcha_rgstro = $old_value_fcha_rgstro;
   $this->fcha_actlzcion = $old_value_fcha_actlzcion;
   $this->fcha_actlzcion_hora = $old_value_fcha_actlzcion_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['Lookup_id_usrio'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $id_usrio_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_usrio_1))
          {
              foreach ($this->id_usrio_1 as $tmp_id_usrio)
              {
                  if (trim($tmp_id_usrio) === trim($cadaselect[1])) { $id_usrio_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_usrio) === trim($cadaselect[1])) { $id_usrio_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_usrio" value="<?php echo $this->form_encode_input($id_usrio) . "\">" . $id_usrio_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_id_usrio();
   $x = 0 ; 
   $id_usrio_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_usrio_1))
          {
              foreach ($this->id_usrio_1 as $tmp_id_usrio)
              {
                  if (trim($tmp_id_usrio) === trim($cadaselect[1])) { $id_usrio_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_usrio) === trim($cadaselect[1])) { $id_usrio_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_usrio_look))
          {
              $id_usrio_look = $this->id_usrio;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_usrio\" class=\"css_id_usrio_line\" style=\"" .  $sStyleReadLab_id_usrio . "\">" . $this->form_encode_input($id_usrio_look) . "</span><span id=\"id_read_off_id_usrio\" class=\"css_read_off_id_usrio\" style=\"white-space: nowrap; " . $sStyleReadInp_id_usrio . "\">";
   echo " <span id=\"idAjaxSelect_id_usrio\"><select class=\"sc-js-input scFormObjectOdd css_id_usrio_obj\" style=\"\" id=\"id_sc_field_id_usrio\" name=\"id_usrio\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_usrio) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_usrio)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_usrio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_usrio_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fcha_actlzcion']))
    {
        $this->nm_new_label['fcha_actlzcion'] = "FCHA ACTLZCION";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_fcha_actlzcion = $this->fcha_actlzcion;
   if (strlen($this->fcha_actlzcion_hora) > 8 ) {$this->fcha_actlzcion_hora = substr($this->fcha_actlzcion_hora, 0, 8);}
   $this->fcha_actlzcion .= ' ' . $this->fcha_actlzcion_hora;
   $fcha_actlzcion = $this->fcha_actlzcion;
   $sStyleHidden_fcha_actlzcion = '';
   if (isset($this->nmgp_cmp_hidden['fcha_actlzcion']) && $this->nmgp_cmp_hidden['fcha_actlzcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fcha_actlzcion']);
       $sStyleHidden_fcha_actlzcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fcha_actlzcion = 'display: none;';
   $sStyleReadInp_fcha_actlzcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fcha_actlzcion']) && $this->nmgp_cmp_readonly['fcha_actlzcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fcha_actlzcion']);
       $sStyleReadLab_fcha_actlzcion = '';
       $sStyleReadInp_fcha_actlzcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fcha_actlzcion']) && $this->nmgp_cmp_hidden['fcha_actlzcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fcha_actlzcion" value="<?php echo $this->form_encode_input($fcha_actlzcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fcha_actlzcion_label" id="hidden_field_label_fcha_actlzcion" style="<?php echo $sStyleHidden_fcha_actlzcion; ?>"><span id="id_label_fcha_actlzcion"><?php echo $this->nm_new_label['fcha_actlzcion']; ?></span></TD>
    <TD class="scFormDataOdd css_fcha_actlzcion_line" id="hidden_field_data_fcha_actlzcion" style="<?php echo $sStyleHidden_fcha_actlzcion; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fcha_actlzcion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fcha_actlzcion"]) &&  $this->nmgp_cmp_readonly["fcha_actlzcion"] == "on") { 

 ?>
<input type="hidden" name="fcha_actlzcion" value="<?php echo $this->form_encode_input($fcha_actlzcion) . "\">" . $fcha_actlzcion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fcha_actlzcion" class="sc-ui-readonly-fcha_actlzcion css_fcha_actlzcion_line" style="<?php echo $sStyleReadLab_fcha_actlzcion; ?>"><?php echo $fcha_actlzcion; ?></span><span id="id_read_off_fcha_actlzcion" class="css_read_off_fcha_actlzcion" style="white-space: nowrap;<?php echo $sStyleReadInp_fcha_actlzcion; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_fcha_actlzcion_obj" style="" id="id_sc_field_fcha_actlzcion" type=text name="fcha_actlzcion" value="<?php echo $this->form_encode_input($fcha_actlzcion) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['fcha_actlzcion']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fcha_actlzcion']['date_format']; ?>', timeSep: '<?php echo $this->field_config['fcha_actlzcion']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['fcha_actlzcion']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fcha_actlzcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fcha_actlzcion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->fcha_actlzcion = $old_dt_fcha_actlzcion;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_usrio_actlzcion']))
    {
        $this->nm_new_label['id_usrio_actlzcion'] = "ID USRIO ACTLZCION";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_usrio_actlzcion = $this->id_usrio_actlzcion;
   $sStyleHidden_id_usrio_actlzcion = '';
   if (isset($this->nmgp_cmp_hidden['id_usrio_actlzcion']) && $this->nmgp_cmp_hidden['id_usrio_actlzcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_usrio_actlzcion']);
       $sStyleHidden_id_usrio_actlzcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_usrio_actlzcion = 'display: none;';
   $sStyleReadInp_id_usrio_actlzcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_usrio_actlzcion']) && $this->nmgp_cmp_readonly['id_usrio_actlzcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_usrio_actlzcion']);
       $sStyleReadLab_id_usrio_actlzcion = '';
       $sStyleReadInp_id_usrio_actlzcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_usrio_actlzcion']) && $this->nmgp_cmp_hidden['id_usrio_actlzcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_usrio_actlzcion" value="<?php echo $this->form_encode_input($id_usrio_actlzcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id_usrio_actlzcion_label" id="hidden_field_label_id_usrio_actlzcion" style="<?php echo $sStyleHidden_id_usrio_actlzcion; ?>"><span id="id_label_id_usrio_actlzcion"><?php echo $this->nm_new_label['id_usrio_actlzcion']; ?></span></TD>
    <TD class="scFormDataOdd css_id_usrio_actlzcion_line" id="hidden_field_data_id_usrio_actlzcion" style="<?php echo $sStyleHidden_id_usrio_actlzcion; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_usrio_actlzcion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_usrio_actlzcion"]) &&  $this->nmgp_cmp_readonly["id_usrio_actlzcion"] == "on") { 

 ?>
<input type="hidden" name="id_usrio_actlzcion" value="<?php echo $this->form_encode_input($id_usrio_actlzcion) . "\">" . $id_usrio_actlzcion . ""; ?>
<?php } else { ?>
<span id="id_read_on_id_usrio_actlzcion" class="sc-ui-readonly-id_usrio_actlzcion css_id_usrio_actlzcion_line" style="<?php echo $sStyleReadLab_id_usrio_actlzcion; ?>"><?php echo $this->id_usrio_actlzcion; ?></span><span id="id_read_off_id_usrio_actlzcion" class="css_read_off_id_usrio_actlzcion" style="white-space: nowrap;<?php echo $sStyleReadInp_id_usrio_actlzcion; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_usrio_actlzcion_obj" style="" id="id_sc_field_id_usrio_actlzcion" type=text name="id_usrio_actlzcion" value="<?php echo $this->form_encode_input($id_usrio_actlzcion) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_usrio_actlzcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_usrio_actlzcion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", "scBtnFn_sys_GridPermiteSeq()", "scBtnFn_sys_GridPermiteSeq()", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-11", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-12", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-13", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-14", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage({title: '', message: "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", isModal: false, timeout: 0, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: true, showBodyIcon: false, isToast: false, toastPos: ""});
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_activos");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_activos");
 parent.scAjaxDetailHeight("form_activos", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_activos", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_activos", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-5").length && $("#sc_b_del_t.sc-unique-btn-5").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq() {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
			nm_navpage(document.F1.nmgp_rec_b.value, 'P'); document.F1.nmgp_rec_b.value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-11").length && $("#sc_b_ini_b.sc-unique-btn-11").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-12").length && $("#sc_b_ret_b.sc-unique-btn-12").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-13").length && $("#sc_b_avc_b.sc-unique-btn-13").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-14").length && $("#sc_b_fim_b.sc-unique-btn-14").is(":visible")) {
			nm_move ('final');
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
