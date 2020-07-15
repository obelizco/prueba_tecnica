
 <form name="form_ajax_redir_1" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_outra_jan">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>
 <form name="form_ajax_redir_2" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_url_saida">
  <input type="hidden" name="script_case_init">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>

 <SCRIPT>
<?php
sajax_show_javascript();
?>

  function scCenterElement(oElem)
  {
    var $oElem    = $(oElem),
        $oWindow  = $(this),
        iElemTop  = Math.round(($oWindow.height() - $oElem.height()) / 2),
        iElemLeft = Math.round(($oWindow.width()  - $oElem.width())  / 2);

    $oElem.offset({top: iElemTop, left: iElemLeft});
  } // scCenterElement

  function scAjaxHideAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "none";
    }
  } // scAjaxHideAutocomp

  function scAjaxShowAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "";
      document.getElementById("id_ac_" + sFrameId).focus();
    }
  } // scAjaxShowAutocomp

  function scAjaxHideDebug()
  {
    if (document.getElementById("id_debug_window"))
    {
      document.getElementById("id_debug_window").style.display = "none";
      document.getElementById("id_debug_text").innerHTML = "";
    }
  } // scAjaxHideDebug

  function scAjaxShowDebug(oTemp)
  {
    if (!document.getElementById("id_debug_window"))
    {
      return;
    }
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["htmOutput"] && "" != oResp["htmOutput"])
    {
      document.getElementById("id_debug_window").style.display = "";
      document.getElementById("id_debug_text").innerHTML = scAjaxFormatDebug(oResp["htmOutput"]) + document.getElementById("id_debug_text").innerHTML;
      scCenterElement(document.getElementById("id_debug_window"));
    }
  } // scAjaxShowDebug

  function scAjaxFormatDebug(sDebugMsg)
  {
    return "<table class=\"scFormMessageTable\" style=\"margin: 1px; width: 100%\"><tr><td class=\"scFormMessageMessage\">" + scAjaxSpecCharParser(sDebugMsg) + "</td></tr></table>";
  } // scAjaxFormatDebug

  function scAjaxHideErrorDisplay_default(sErrorId, bForce)
  {
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
        document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "none";
        document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = "";
        if (null == bForce)
        {
            bForce = true;
        }
        if (bForce)
        {
            var $oField = $('#id_sc_field_' + sErrorId);
            if (0 < $oField.length)
            {
                $oField.removeClass(sc_css_status);
            }
        }
    }
    if (document.getElementById("id_error_display_fixed"))
    {
        document.getElementById("id_error_display_fixed").style.display = "none";
    }
  } // scAjaxHideErrorDisplay_default

  function scAjaxShowErrorDisplay_default(sErrorId, sErrorMsg)
  {
    if (oResp && oResp['redirExitInfo'])
    {
      sErrorMsg += "<br /><input type=\"button\" onClick=\"window.location='" + oResp['redirExitInfo']['action'] + "'\" value=\"Ok\">";
    }
    sErrorMsg = scAjaxErrorSql(sErrorMsg);
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "";
      document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = sErrorMsg;
      if ("table" == sErrorId)
      {
        scCenterElement(document.getElementById("id_error_display_" + sErrorId + "_frame"));
      }
      var $oField = $('#id_sc_field_' + sErrorId);
      if (0 < $oField.length)
      {
        $oField.addClass(sc_css_status);
      }
    }
    if (ajax_error_list && ajax_error_list[sErrorId] && ajax_error_list[sErrorId]["timeout"] && 0 < ajax_error_list[sErrorId]["timeout"])
    {
      setTimeout("scAjaxHideErrorDisplay('" + sErrorId + "', false)", ajax_error_list[sErrorId]["timeout"] * 1000);
    }
  } // scAjaxShowErrorDisplay_default

  var iErrorSqlId = 1;

  function scAjaxErrorSql(sErrorMsg)
  {
    var iTmpPos = sErrorMsg.indexOf("{SC_DB_ERROR_INI}"),
        sTmpId;
    while (-1 < iTmpPos)
    {
      sTmpId    = "sc_id_error_sql_" + iErrorSqlId;
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><span style=\"text-decoration: underline\" onClick=\"$('#" + sTmpId + "').show(); scCenterElement(document.getElementById('" + sTmpId + "'))\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_MID}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span><table class=\"scFormErrorTable\" id=\"" + sTmpId + "\" style=\"display: none; position: absolute\"><tr><td>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_CLS}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><br /><span onClick=\"$('#" + sTmpId + "').hide()\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_END}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span></td></tr></table>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_INI}");
      iErrorSqlId++;
    }
    return sErrorMsg;
  } // scAjaxErrorSql

  function scAjaxHideMessage_default()
  {
    if (document.getElementById("id_message_display_frame"))
    {
      document.getElementById("id_message_display_frame").style.display = "none";
      document.getElementById("id_message_display_text").innerHTML = "";
    }
  } // scAjaxHideMessage

  function scAjaxShowMessage_default()
  {
    if (!oResp["msgDisplay"] || !oResp["msgDisplay"]["msgText"])
    {
      return;
    }
    _scAjaxShowMessage_default({title: scMsgDefTitle, message: oResp["msgDisplay"]["msgText"], isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: false, toastPos: ""});
  } // scAjaxShowMessage

  var scMsgDefClose = "";

  function _scAjaxShowMessage_default(params) {
	var sTitle = params["title"],
		sMessage = params["message"],
		bModal = params["isModal"],
		iTimeout = params["timeout"],
		bButton = params["showButton"],
		sButton = params["buttonLabel"],
		iTop = params["topPos"],
		iLeft = params["leftPos"],
		iWidth = params["width"],
		iHeight = params["height"],
		sRedir = params["redirUrl"],
		sTarget = params["redirTarget"],
		sParam = params["redirParam"],
		bClose = params["showClose"],
		bBodyIcon = params["showBodyIcon"],
		bToast = params["isToast"],
		sToastPos = params["toastPos"];
    if ("" == sMessage) {
      if (bModal) {
        scMsgDefClick = "close_modal";
      }
      else {
        scMsgDefClick = "close";
      }
      _scAjaxMessageBtnClick();
      document.getElementById("id_message_display_title").innerHTML = scMsgDefTitle;
      document.getElementById("id_message_display_text").innerHTML = "";
      document.getElementById("id_message_display_buttone").value = scMsgDefButton;
      document.getElementById("id_message_display_buttond").style.display = "none";
    }
    else {
      document.getElementById("id_message_display_title").innerHTML = scAjaxSpecCharParser(sTitle);
      document.getElementById("id_message_display_text").innerHTML = scAjaxSpecCharParser(sMessage);
      document.getElementById("id_message_display_buttone").value = sButton;
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_title_line").style.display = (bClose || "" != sTitle) ? "" : "none";
      document.getElementById("id_message_display_close_icon").style.display = bClose ? "" : "none";
      if (document.getElementById("id_message_display_body_icon")) {
        document.getElementById("id_message_display_body_icon").style.display = bBodyIcon ? "" : "none";
      }
      $("#id_message_display_content").css('width', (0 < iWidth ? iWidth + 'px' : ''));
      $("#id_message_display_content").css('height', (0 < iHeight ? iHeight + 'px' : ''));
      if (bModal) {
        iWidth = iWidth || 250;
        iHeight = iHeight || 200;
        scMsgDefClose = "close_modal";
        tb_show('', '#TB_inline?height=' + (iHeight + 6) + '&width=' + (iWidth + 4) + '&inlineId=id_message_display_frame&modal=true', '');
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2_modal";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close_modal";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close_modal";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
      else
      {
        scMsgDefClose = "close";
        $("#id_message_display_frame").css('top', (0 < iTop ? iTop + 'px' : ''));
        $("#id_message_display_frame").css('left', (0 < iLeft ? iLeft + 'px' : ''));
        document.getElementById("id_message_display_frame").style.display = "";
        if (0 == iTop && 0 == iLeft) {
          scCenterElement(document.getElementById("id_message_display_frame"));
        }
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
    }
  } // _scAjaxShowMessage_default

  function _scAjaxMessageBtnClose() {
    switch (scMsgDefClose) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function _scAjaxMessageBtnClick() {
    switch (scMsgDefClick) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
      case "dismiss":
        scAjaxHideMessage();
        break;
      case "redir1":
        document.form_ajax_redir_1.submit();
        break;
      case "redir2":
        document.form_ajax_redir_2.submit();
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "redir2_modal":
        document.form_ajax_redir_2.submit();
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function scAjaxHasError()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "ERROR" == oResp["result"];
  } // scAjaxHasError

  function scAjaxIsOk()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "OK" == oResp["result"] || "SET" == oResp["result"];
  } // scAjaxIsOk

  function scAjaxIsSet()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "SET" == oResp["result"];
  } // scAjaxIsSet

  function scAjaxCalendarReload()
  {
    if (oResp["calendarReload"] && "OK" == oResp["calendarReload"])
    {
      self.parent.calendar_reload();
      self.parent.tb_remove();
    }
  } // scCalendarReload

  function scAjaxUpdateErrors(sType)
  {
    ajax_error_geral = "";
    oFieldErrors     = {};
    if (oResp["errList"])
    {
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if ("geral_form_activos" == sTestField)
        {
          if (ajax_error_geral != '') { ajax_error_geral += '<br>';}
          ajax_error_geral += scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
        else
        {
          if (scFocusFirstErrorField && '' == scFocusFirstErrorName)
          {
            scFocusFirstErrorName = sTestField;
          }
          if (oResp["errList"][iFieldErrors]["numLinha"])
          {
            sTestField += oResp["errList"][iFieldErrors]["numLinha"];
          }
          if (!oFieldErrors[sTestField])
          {
            oFieldErrors[sTestField] = new Array();
          }
          oFieldErrors[sTestField][oFieldErrors[sTestField].length] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
      }
    }
    for (iUpdateErrors = 0; iUpdateErrors < ajax_field_list.length; iUpdateErrors++)
    {
      sTestField = ajax_field_list[iUpdateErrors];
      if (oFieldErrors[sTestField])
      {
        ajax_error_list[sTestField][sType] = oFieldErrors[sTestField];
      }
    }
  } // scAjaxUpdateErrors

  function scAjaxUpdateFieldErrors(sField, sType)
  {
    aFieldErrors = new Array();
    if (oResp["errList"])
    {
      iErrorPos  = 0;
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if (oResp["errList"][iFieldErrors]["numLinha"])
        {
          sTestField += oResp["errList"][iFieldErrors]["numLinha"];
        }
        if (sField == sTestField)
        {
          aFieldErrors[iErrorPos] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
          iErrorPos++;
        }
      }
    }
        if (ajax_error_list[sField])
        {
        ajax_error_list[sField][sType] = aFieldErrors;
        }
  } // scAjaxUpdateFieldErrors

  function scAjaxListErrors(bLabel)
  {
    bFirst        = false;
    sAppErrorText = "";
    if ("" != ajax_error_geral)
    {
      bFirst         = true;
      sAppErrorText += ajax_error_geral;
    }
    for (iFieldList = 0; iFieldList < ajax_field_list.length; iFieldList++)
    {
      sFieldError = scAjaxListFieldErrors(ajax_field_list[iFieldList], bLabel);
      if ("" != sFieldError)
      {
        if (bFirst)
        {
          bFirst         = false
          sAppErrorText += "<hr size=\"1\" width=\"80%\" />";
        }
        sAppErrorText += sFieldError;
      }
    }
    return sAppErrorText;
  } // scAjaxListErrors

  function scAjaxListFieldErrors(sField, bLabel)
  {
    sErrorText = "";
    for (iErrorType = 0; iErrorType < ajax_error_type.length; iErrorType++)
    {
      if (ajax_error_list[sField])
      {
        for (iListErrors = 0; iListErrors < ajax_error_list[sField][ajax_error_type[iErrorType]].length; iListErrors++)
        {
          if (bLabel)
          {
            sErrorText += ajax_error_list[sField]["label"] + ": ";
          }
          sErrorText += ajax_error_list[sField][ajax_error_type[iErrorType]][iListErrors] + "<br />";
        }
      }
    }
    return sErrorText;
  } // scAjaxListFieldErrors

	function scAjaxClearErrors() {
		var fieldName;

		for (fieldName in ajax_error_list) {
            if (null != ajax_error_list[fieldName]) {
                ajax_error_list[fieldName]["valid"] = new Array();
                ajax_error_list[fieldName]["onblur"] = new Array();
                ajax_error_list[fieldName]["onchange"] = new Array();
                ajax_error_list[fieldName]["onclick"] = new Array();
                ajax_error_list[fieldName]["onfocus"] = new Array();
            }
		}
	} // scAjaxClearErrors

  function scAjaxSetVariables()
  {
    if (!oResp["varList"])
    {
      return true;
    }
    for (var iVarFields = 0; iVarFields < oResp["varList"].length; iVarFields++)
    {
      var sVarName  = oResp["varList"][iVarFields]["index"];
      var sVarValue = oResp["varList"][iVarFields]["value"];
	  eval(sVarName + " = \"" + sVarValue + "\";");
	}
  } // scAjaxSetVariables

  function scAjaxSetFields()
  {
    if (!oResp["fldList"])
    {
      return true;
    }
    for (iSetFields = 0; iSetFields < oResp["fldList"].length; iSetFields++)
    {
      var sFieldName = oResp["fldList"][iSetFields]["fldName"];
      var sFieldType = oResp["fldList"][iSetFields]["fldType"];

      if ("selectdd" == sFieldType)
      {
        var bSelectDD = true;
        sFieldType = "select";
      }
      else
      {
        var bSelectDD = false;
      }
      if ("select2_ac" == sFieldType)
      {
        var bSelect2AC = true;
        sFieldType = "select";
      }
      else
      {
        var bSelect2AC = false;
      }
      if (oResp["fldList"][iSetFields]["valList"])
      {
        var oFieldValues = oResp["fldList"][iSetFields]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (oResp["fldList"][iSetFields]["optList"])
      {
        var oFieldOptions = oResp["fldList"][iSetFields]["optList"];
      }
      else
      {
        var oFieldOptions = null;
      }
/*
      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)) &&
          oFieldValues[0]['value'])
      {
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = oFieldValues[0]['value'];
      }
*/

      if ("corhtml" == sFieldType)
      {
        sFieldType = 'text';

        /*sCor = (oFieldValues[0]['value']) ? oFieldValues[0]['value'] : "";
        setaCorPaleta(sFieldName, sCor);*/
      }

      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)))
      {
          sLabel_auto_Comp = (oFieldValues[0]['value']) ? oFieldValues[0]['value'] : "";
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = sLabel_auto_Comp;
      }


      if (oResp["fldList"][iSetFields]["colNum"])
      {
        var iColNum = oResp["fldList"][iSetFields]["colNum"];
      }
      else
      {
        var iColNum = 1;
      }
      if (oResp["fldList"][iSetFields]["row"])
      {
        var iRow = oResp["fldList"][iSetFields]["row"];
		var thisRow = oResp["fldList"][iSetFields]["row"];
      }
      else
      {
        var iRow = 1;
		var thisRow = "";
      }
      if (oResp["fldList"][iSetFields]["htmComp"])
      {
        var sHtmComp = oResp["fldList"][iSetFields]["htmComp"];
        sHtmComp     = sHtmComp.replace(/__AD__/gi, '"');
        sHtmComp     = sHtmComp.replace(/__AS__/gi, "'");
      }
      else
      {
        var sHtmComp = null;
      }
      if (oResp["fldList"][iSetFields]["imgFile"])
      {
        var sImgFile = oResp["fldList"][iSetFields]["imgFile"];
      }
      else
      {
        var sImgFile = "";
      }
      if (oResp["fldList"][iSetFields]["imgOrig"])
      {
        var sImgOrig = oResp["fldList"][iSetFields]["imgOrig"];
      }
      else
      {
        var sImgOrig = "";
      }
      if (oResp["fldList"][iSetFields]["keepImg"])
      {
        var sKeepImg = oResp["fldList"][iSetFields]["keepImg"];
      }
      else
      {
        var sKeepImg = "N";
      }
      if (oResp["fldList"][iSetFields]["hideName"])
      {
        var sHideName = oResp["fldList"][iSetFields]["hideName"];
      }
      else
      {
        var sHideName = "N";
      }
      if (oResp["fldList"][iSetFields]["imgLink"])
      {
        var sImgLink = oResp["fldList"][iSetFields]["imgLink"];
      }
      else
      {
        var sImgLink = null;
      }
      if (oResp["fldList"][iSetFields]["docLink"])
      {
        var sDocLink = oResp["fldList"][iSetFields]["docLink"];
      }
      else
      {
        var sDocLink = "";
      }
      if (oResp["fldList"][iSetFields]["docIcon"])
      {
        var sDocIcon = oResp["fldList"][iSetFields]["docIcon"];
      }
      else
      {
        var sDocIcon = "";
      }

      if (oResp["fldList"][iSetFields]["docReadonly"])
      {
        var sDocReadonly = oResp["fldList"][iSetFields]["docReadonly"];
      }
      else
      {
        var sDocReadonly = "";
      }

      if (oResp["fldList"][iSetFields]["optComp"])
      {
        var sOptComp = oResp["fldList"][iSetFields]["optComp"];
      }
      else
      {
        var sOptComp = "";
      }
      if (oResp["fldList"][iSetFields]["optClass"])
      {
        var sOptClass = oResp["fldList"][iSetFields]["optClass"];
      }
      else
      {
        var sOptClass = "";
      }
      if (oResp["fldList"][iSetFields]["optMulti"])
      {
        var sOptMulti = oResp["fldList"][iSetFields]["optMulti"];
      }
      else
      {
        var sOptMulti = "";
      }
      if (oResp["fldList"][iSetFields]["imgHtml"])
      {
        var sImgHtml = oResp["fldList"][iSetFields]["imgHtml"];
      }
      else
      {
        var sImgHtml = "";
      }
      if (oResp["fldList"][iSetFields]["mulHtml"])
      {
        var sMULHtml = oResp["fldList"][iSetFields]["mulHtml"];
      }
      else
      {
        var sMULHtml = "";
      }
      if (oResp["fldList"][iSetFields]["updInnerHtml"])
      {
        var sInnerHtml = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["updInnerHtml"]);
      }
      else
      {
        var sInnerHtml = null;
      }
      if (oResp["fldList"][iSetFields]["lookupCons"])
      {
        var sLookupCons = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["lookupCons"]);
      }
      else
      {
        var sLookupCons = "";
      }
      if (oResp["clearUpload"])
      {
        var sClearUpload = scAjaxSpecCharParser(oResp["clearUpload"]);
      }
      else
      {
        var sClearUpload = "N";
      }
      if (oResp["eventField"])
      {
        var sEventField = scAjaxSpecCharParser(oResp["eventField"]);
      }
      else
      {
        var sEventField = "__SC_NO_FIELD";
      }
      if (oResp["fldList"][iSetFields]["switch"])
      {
        var bSwitch = true == oResp["fldList"][iSetFields]["switch"];
      }
      else
      {
        var bSwitch = false;
      }
      if ("checkbox" == sFieldType)
      {
        scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti, bSwitch, sEventField);
      }
      else if ("duplosel" == sFieldType)
      {
        scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions);
      }
      else if ("imagem" == sFieldType)
      {
        scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName);
      }
      else if ("documento" == sFieldType)
      {
        scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload, sDocReadonly);
      }
      else if ("label" == sFieldType)
      {
        scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons);
      }
      else if ("radio" == sFieldType)
      {
        scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, bSwitch, sEventField);
      }
      else if ("select" == sFieldType)
      {
        scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, bSelect2AC, iRow, sEventField, thisRow);
      }
      else if ("text" == sFieldType)
      {
        scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons, thisRow, sEventField);
      }
      else if ("color_palette" == sFieldType)
      {
        scAjaxSetFieldColorPalette(sFieldName, oFieldValues);
      }
      else if ("editor_html" == sFieldType)
      {
        scAjaxSetFieldEditorHtml(sFieldName, oFieldValues);
      }
      else if ("imagehtml" == sFieldType)
      {
        scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml);
      }
      else if ("innerhtml" == sFieldType)
      {
        scAjaxSetFieldInnerHtml(sFieldName, oFieldValues);
      }
      else if ("multi_upload" == sFieldType)
      {
        scAjaxSetFieldMultiUpload(sFieldName, sMULHtml);
      }
      else if ("recur_info" == sFieldType)
      {
        scAjaxSetFieldRecurInfo(sFieldName, sMULHtml);
      }
      else if ("signature" == sFieldType)
      {
        scAjaxSetFieldSignature(sFieldName, oFieldValues);
      }
      else if ("rating" == sFieldType)
      {
        scAjaxSetFieldRating(sFieldName, oFieldValues, thisRow);
      }
      scAjaxUpdateHeaderFooter(sFieldName, oFieldValues);
    }
  } // scAjaxSetFields

  function scAjaxUpdateHeaderFooter(sFieldName, oFieldValues)
  {
    if (self.updateHeaderFooter)
    {
      if (null == oFieldValues)
      {
        sNewValue = '';
      }
      else if (oFieldValues[0]["label"])
      {
        sNewValue = oFieldValues[0]["label"];
      }
      else
      {
        sNewValue = oFieldValues[0]["value"];
      }
      updateHeaderFooter(sFieldName, scAjaxSpecCharParser(sNewValue));
    }
  } // scAjaxUpdateHeaderFooter

  function scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons, thisRow, sEventField)
  {
    if (document.F1.elements[sFieldName])
    {
      var jqField = $("#id_sc_field_" + sFieldName),
          Temp_text = scAjaxReturnBreakLine(scAjaxSpecCharParser(scAjaxProtectBreakLine(oFieldValues[0]['value'])));
      if (jqField.length)
      {
        jqField.val(Temp_text);
        if (sEventField != sFieldName && sEventField != "__SC_NO_FIELD" && sEventField != "")
        {
          //jqField.trigger("change");
        }
      }
      else
      {
        eval("document.F1." + sFieldName + ".value = Temp_text");
      }
      if (scEventControl_data[sFieldName]) {
        scEventControl_data[sFieldName]["calculated"] = Temp_text;
      }
    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    if (oFieldValues[0]['label'])
    {
      scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues);
    }
    else
    {
      oFieldValues[0]['value'] = scAjaxBreakLine(oFieldValues[0]['value']);
      scAjaxSetReadonlyValue(sFieldName, oFieldValues[0]['value']);
    }
	scAjaxSetSliderValue(sFieldName, thisRow);
  } // scAjaxSetFieldText

  function scAjaxSetSliderValue(fieldName, thisRow)
  {
	  var sliderObject = $("#sc-ui-slide-" + fieldName);
	  if (!sliderObject.length) {
		  return;
	  }
	  scJQSlideValue(fieldName, thisRow);
  } // scAjaxSetSliderValue

  function scAjaxSetFieldColorPalette(sFieldName, oFieldValues)
  {
    if (document.F1.elements[sFieldName])
    {
        var Temp_text = scAjaxReturnBreakLine(scAjaxSpecCharParser(scAjaxProtectBreakLine(oFieldValues[0]['value'])));
        eval ("document.F1." + sFieldName + ".value = Temp_text");
    }
    if (oFieldValues[0]['label'])
    {
      scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues);
    }
    else
    {
      oFieldValues[0]['value'] = scAjaxBreakLine(oFieldValues[0]['value']);
	  setaCorPaleta(sFieldName, oFieldValues[0]['value']);
      scAjaxSetReadonlyValue(sFieldName, oFieldValues[0]['value']);
    }
  } // scAjaxSetFieldColorPalette

  function scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, bSelect2AC, iRow, sEventField, thisRow)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if (bSelectDD)
    {
        $("#id_sc_field_" + sFieldName).dropdownchecklist("destroy");
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      scAjaxSetFieldText(sFieldNameHtml, oFieldValues, "", "", sEventField);
      return;
    }

    if (null != oFieldOptions)
    {
      $("#id_sc_field_" + sFieldName).children().remove()
      if ("<select" != oFieldOptions.substr(0, 7))
      {
        var $oField = $("#id_sc_field_" + sFieldName);
        if (0 < $oField.length)
        {
          $oField.html(oFieldOptions);
        }
        else
        {
          document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
        }
      }
      else
      {
        document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
      }
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    var oFormField = $("#id_sc_field_" + sFieldName);
    for (iFieldSelect = 0; iFieldSelect < oFormField[0].length; iFieldSelect++)
    {
      if (scAjaxInArray(oFormField[0].options[iFieldSelect].value, aValues))
      {
        oFormField[0].options[iFieldSelect].selected = true;
      }
      else
      {
        oFormField[0].options[iFieldSelect].selected = false;
      }
    }
	scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
    if (bSelectDD)
    {
        scJQDDCheckBoxAdd(thisRow, true);
    }
	if (bSelect2AC)
	{
		var newOption = new Option(oFieldValues[0]["label"], oFieldValues[0]["value"], true, true);
		$("#id_ac_" + sFieldName).append(newOption);
		$("#id_sc_field_" + sFieldName).val(oFieldValues[0]["value"]);
	}
	else if (oFormField.hasClass("select2-hidden-accessible"))
	{
        $("#id_sc_field_" + sFieldName).select2("destroy");
		var select2Field = sFieldName;
		if ("" != thisRow) {
			select2Field = select2Field.substr(0, select2Field.length - thisRow.toString().length);
		}
        scJQSelect2Add(thisRow, select2Field);
	}
  } // scAjaxSetFieldSelect

  function scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions)
  {
    var sFieldNameOrig = sFieldName + "_orig";
    var sFieldNameDest = sFieldName + "_dest";
    var oFormFieldOrig = document.F1.elements[sFieldNameOrig];
    var oFormFieldDest = document.F1.elements[sFieldNameDest];

    if (null != oFieldOptions)
    {
      scAjaxClearSelect(sFieldNameOrig);
      for (iFieldSelect = 0; iFieldSelect < oFieldOptions.length; iFieldSelect++)
      {
        oFormFieldOrig.options[iFieldSelect] = new Option(scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["label"]), scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["value"]));
      }
    }
    while (oFormFieldDest.length > 0)
    {
      oFormFieldDest.options[0] = null;
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        sNewOptionLabel = oFieldValues[iFieldSelect]["label"] ? scAjaxSpecCharParser(oFieldValues[iFieldSelect]["label"]) : scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        sNewOptionValue = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        if (sNewOptionValue.substr(0, 8) == "@NMorder")
        {
           sNewOptionValue                      = sNewOptionValue.substr(8);
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
           sNewOptionValue                      = sNewOptionValue.substr(1);
           aValues[iFieldSelect]                = sNewOptionValue;
        }
        else
        {
           aValues[iFieldSelect]                = sNewOptionValue;
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
        }
      }
    }
    for (iFieldSelect = 0; iFieldSelect < oFormFieldOrig.length; iFieldSelect++)
    {
      oFormFieldOrig.options[iFieldSelect].selected = false;
      if (scAjaxInArray(oFormFieldOrig.options[iFieldSelect].value, aValues))
      {
        oFormFieldOrig.options[iFieldSelect].disabled    = true;
        oFormFieldOrig.options[iFieldSelect].style.color = "#A0A0A0";
      }
      else
      {
        oFormFieldOrig.options[iFieldSelect].disabled = false;
      }
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldDuplosel

  function scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti, bSwitch, sEventField)
  {
	if (null == bSwitch)
	{
	  bSwitch = false;
	}
    if (document.getElementById("idAjaxCheckbox_" + sFieldName) && null != sInnerHtml)
    {
      document.getElementById("idAjaxCheckbox_" + sFieldName).innerHTML = sInnerHtml;
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearCheckbox(sFieldName);
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues, "", "", sEventField);
      return;
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearCheckbox(sFieldName); */
      scAjaxRecreateOptions("Checkbox", "checkbox", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti, bSwitch);
    }
    else
    {
      scAjaxSetCheckboxOptions(sFieldName, oFieldValues);
    }
	scAjaxSetSwitchOptions(sFieldName, "checkbox");
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldCheckbox

  function scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, bSwitch, sEventField)
  {
	if (null == bSwitch)
	{
	  bSwitch = false;
	}
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues, "", "", sEventField);
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearRadio(sFieldName);
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearRadio(sFieldName); */
      scAjaxRecreateOptions("Radio", "radio", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, "", "", bSwitch);
    }
    else
    {
      scAjaxSetRadioOptions(sFieldName, oFieldValues);
    }
	scAjaxSetSwitchOptions(sFieldName, "radio");
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldRadio

  function scAjaxSetSwitchOptions(fieldName, fieldType)
  {
	var fieldOptions = $(".sc-ui-" + fieldType + "-" + fieldName + ".lc-switch");
	if (!fieldOptions.length) {
		return;
	}
	for (var i = 0; i < fieldOptions.length; i++) {
		if ($(fieldOptions[i]).prop("checked")) {
			$(fieldOptions[i]).lcs_on();
		}
		else {
			$(fieldOptions[i]).lcs_off();
		}
	}
  }

  function scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons)
  {
    sFieldValue = oFieldValues[0]["value"];
    sFieldLabel = oFieldValues[0]["value"];
    sFieldLabel = scAjaxBreakLine(sFieldLabel);
    if (null != oFieldOptions)
    {
      for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
      {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        if (sFieldValue == sOptText)
        {
          sFieldLabel = sOptValue;
        }
      }
    }
    if (document.getElementById("id_ajax_label_" + sFieldName))
    {
      document.getElementById("id_ajax_label_" + sFieldName).innerHTML = scAjaxSpecCharParser(sFieldLabel);
    }
    if (document.F1.elements[sFieldName])
    {
//      document.F1.elements[sFieldName].value = scAjaxSpecCharParser(sFieldValue);
        Temp_text = scAjaxProtectBreakLine(sFieldValue);
        Temp_text = scAjaxSpecCharParser(Temp_text);
        document.F1.elements[sFieldName].value = scAjaxReturnBreakLine(Temp_text);

    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(sFieldLabel));
  } // scAjaxSetFieldLabel

  function scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if ("N" == sKeepImg && document.getElementById("id_ajax_img_"  + sFieldName))
    {
      document.getElementById("id_ajax_img_"  + sFieldName).src           = scAjaxSpecCharParser(sImgFile);
      document.getElementById("id_ajax_img_"  + sFieldName).style.display = ("" == sImgFile) ? "none" : "";
    }
    if (document.getElementById("id_ajax_link_" + sFieldName) && null != sImgLink)
    {
      document.getElementById("id_ajax_link_" + sFieldName).innerHTML = oFieldValues[0]["value"];
      document.getElementById("id_ajax_link_" + sFieldName).href      = scAjaxSpecCharParser(sImgLink);
    }
    if (document.getElementById("chk_ajax_img_" + sFieldName))
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"]) ? "none" : "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("N" == sKeepImg && document.getElementById("txt_ajax_img_" + sFieldName))
    {
      document.getElementById("txt_ajax_img_" + sFieldName).innerHTML     = oFieldValues[0]["value"];
      document.getElementById("txt_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"] || "S" == sHideName) ? "none" : "";
    }
    if ("" != sImgOrig)
    {
      eval("if (var_ajax_img_" + sFieldName + ") var_ajax_img_" + sFieldName + " = '" + sImgOrig + "';");
      if (document.F1.elements["temp_out1_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgFile;
        document.F1.elements["temp_out1_" + sFieldName].value = sImgOrig;
      }
      else if (document.F1.elements["temp_out_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgOrig;
      }
    }
    if ("" != oFieldValues[0]["value"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = oFieldValues[0]["value"];
    }
    else if (oResp && oResp["ajaxRequest"] && "navigate_form" == oResp["ajaxRequest"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = "";
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldImage

  function scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload, sDocReadonly)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    document.getElementById("id_ajax_doc_"  + sFieldName).innerHTML = scAjaxSpecCharParser(sDocLink);
    if (document.getElementById("id_ajax_doc_icon_"  + sFieldName))
    {
      document.getElementById("id_ajax_doc_icon_"  + sFieldName).src = scAjaxSpecCharParser(sDocIcon);
    }
    if ("" == oFieldValues[0]["value"])
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "none";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "none";
    }
    else
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("S" == sClearUpload && document.F1.elements[sFieldName + "_ul_name"])
    {
      document.F1.elements[sFieldName + "_ul_name"].value = "";
    }
    if ("" != sDocLink && sDocReadonly == "S")
    {
      scAjaxSetReadonlyValue(sFieldName, sDocLink);
    }
    else
    {
      scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
    }
  } // scAjaxSetFieldDocument

  function scAjaxSetFieldInnerHtml(sFieldName, oFieldValues)
  {
    if (document.getElementById(sFieldName))
    {
      document.getElementById(sFieldName).innerHTML = scAjaxSpecCharParser(oFieldValues[0]["value"]);
    }
  } // scAjaxSetFieldInnerHtml

  function scAjaxSetFieldMultiUpload(sFieldName, sMULHtml)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    $("#id_sc_loaded_" + sFieldName).html(scAjaxSpecCharParser(sMULHtml));
  } // scAjaxSetFieldMultiUpload

  function scAjaxExecFieldEditorHtml(strOption, bolUI, oField)
  {
	  	if(tinymce.majorVersion > 3)
		{
			if(strOption == 'mceAddControl')
			{
				tinymce.execCommand('mceAddEditor', bolUI, oField);
			}else
			if(strOption == 'mceRemoveControl')
			{
				tinymce.execCommand('mceRemoveEditor', bolUI, oField);
			}
		}
		else
		{
			tinyMCE.execCommand(strOption, bolUI, oField);
		}
  }

  function scAjaxSetFieldEditorHtml(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
	if(tinymce.majorVersion > 3)
	{
		var oFormField = tinyMCE.get(sFieldName);
	}
	else
	{
		var oFormField = tinyMCE.getInstanceById(sFieldName);
	}
    oFormField.setContent(scAjaxSpecCharParser(oFieldValues[0]["value"]));
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml)
  {
    if (document.getElementById("id_imghtml_" + sFieldName))
    {
      document.getElementById("id_imghtml_" + sFieldName).innerHTML = scAjaxSpecCharParser(sImgHtml);
    }
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetFieldRecurInfo(sFieldName, oFieldValues)
  {
	  var jsonData = "" != oFieldValues[0]["value"]
	               ? JSON.parse(oFieldValues[0]["value"])
				   : { repeat: "1", endon: "E", endafter: "", endin: ""};
	  $("#id_rinf_repeat_" + sFieldName).val(jsonData.repeat);
	  $(".cl_rinf_endon_" + sFieldName).filter(function(index) {return $(this).val() == jsonData.endon}).prop("checked", true),
	  $("#id_rinf_endafter_" + sFieldName).val(jsonData.endafter);
	  $("#id_rinf_endin_" + sFieldName).val(jsonData.endin);
	  scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldRecurInfo

  function scAjaxSetFieldSignature(sFieldName, oFieldValues)
  {
	var fieldValue = scAjaxSpecCharParser(oFieldValues[0]['value']);
	if ("data:image/png;base64," != fieldValue.substr(0, 22) && "data:image/jsignature;base30," != fieldValue.substr(0, 29))
	{
		scJQSignatureClear(sFieldName);
		return;
	}
	$("#id_sc_field_" + sFieldName).val(fieldValue);
	scJQSignatureRedraw(sFieldName);
  } // scAjaxSetFieldSignature

  function scAjaxSetFieldRating(sFieldName, oFieldValues, thisRow)
  {
	$("#id_sc_field_" + sFieldName).val(oFieldValues[0]['value']);
	if ("" != thisRow) {
      sFieldName = sFieldName.substr(0, sFieldName.lastIndexOf("_") + 1);
	}
	scJQRatingRedraw(sFieldName, thisRow);
  } // scAjaxSetFieldRating

  function scAjaxSetCheckboxOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return;
    }
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheckbox = 0; iFieldCheckbox < oFormField.length; iFieldCheckbox++)
        {
          if (scAjaxInArray(oFormField[iFieldCheckbox].value, aValues))
          {
            oFormField[iFieldCheckbox].checked = true;
          }
          else
          {
            oFormField[iFieldCheckbox].checked = false;
          }
        }
      }
      else
      {
        if (scAjaxInArray(oFormField.value, aValues))
        {
          oFormField.checked = true;
        }
        else
        {
          oFormField.checked = false;
        }
      }
    }
    else if (document.F1.elements[sFieldName + "[0]"])
    {
      for (iFieldCheckbox = 0; iFieldCheckbox < document.F1.elements.length; iFieldCheckbox++)
      {
        oFormElement = document.F1.elements[iFieldCheckbox];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && scAjaxInArray(oFormElement.value, aValues))
        {
          oFormElement.checked = true;
        }
        else if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1))
        {
          oFormElement.checked = false;
        }
      }
    }
    else
    {
      oFormElement = document.F1.elements[sFieldName];
      if (scAjaxInArray(oFormElement.value, aValues))
      {
        oFormElement.checked = true;
      }
      else
      {
        oFormElement.checked = false;
      }
    }
  } // scAjaxSetCheckboxOptions

  function scAjaxSetRadioOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
    var oFormField = document.F1.elements[sFieldName];
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
    {
      oFormField[iFieldRadio].checked = false;
    }
    for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
    {
      if (scAjaxInArray(oFormField[iFieldRadio].value, aValues))
      {
        oFormField[iFieldRadio].checked = true;
      }
    }
  } // scAjaxSetRadioOptions

  function scAjaxSetReadonlyValue(sFieldName, sFieldValue)
  {
    if (document.getElementById("id_read_on_" + sFieldName))
    {
      document.getElementById("id_read_on_" + sFieldName).innerHTML = sFieldValue;
    }
  } // scAjaxSetReadonlyValue

  function scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, sDelim)
  {
    if (null == oFieldValues)
    {
      return;
    }
    if (null == sDelim)
    {
      sDelim = " ";
    }
    sReadLabel = "";
    for (iReadArray = 0; iReadArray < oFieldValues.length; iReadArray++)
    {
      if (oFieldValues[iReadArray]["label"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["label"];
      }
      else if (oFieldValues[iReadArray]["value"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["value"];
      }
    }
    scAjaxSetReadonlyValue(sFieldName, sReadLabel);
  } // scAjaxSetReadonlyArrayValue

  function scAjaxGetFieldValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        if (1 == oFieldValues.length)
        {
          sValue = scAjaxSpecCharParser(oFieldValues[0]["value"]);
        }
        else
        {
          sValue = new Array();
          for (jFieldValue = 0; jFieldValue < oFieldValues.length; jFieldValue++)
          {
            sValue[jFieldValue] = scAjaxSpecCharParser(oFieldValues[jFieldValue]["value"]);
          }
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldValue

  function scAjaxGetKeyValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iKeyValue = 0; iKeyValue < oResp["fldList"].length; iKeyValue++)
    {
      var sFieldName = oResp["fldList"][iKeyValue]["fldName"];
      if (sFieldGet == sFieldName)
      {
        if (oResp["fldList"][iKeyValue]["keyVal"])
        {
          return scAjaxSpecCharParser(oResp["fldList"][iKeyValue]["keyVal"]);
        }
        else
        {
          return scAjaxGetFieldValue(sFieldGet);
        }
      }
    }
    return sValue;
  } // scAjaxGetKeyValue

  function scAjaxGetLineNumber()
  {
    sLineNumber = "";
    if (oResp["errList"])
    {
      for (iLineNumber = 0; iLineNumber < oResp["errList"].length; iLineNumber++)
      {
        if (oResp["errList"][iLineNumber]["numLinha"])
        {
          sLineNumber = oResp["errList"][iLineNumber]["numLinha"];
        }
      }
      return sLineNumber;
    }
    if (oResp["fldList"])
    {
      return oResp["fldList"][0]["numLinha"];
    }
    if (oResp["msgDisplay"])
    {
      return oResp["msgDisplay"]["numLinha"];
    }
    return sLineNumber;
  } // scAjaxGetLineNumber

  function scAjaxFieldExists(sFieldGet)
  {
    bExists = false;
    if (!oResp["fldList"])
    {
      return bExists;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        bExists = true;
      }
    }
    return bExists;
  } // scAjaxFieldExists

  function scAjaxGetFieldText(sFieldName)
  {
    $oHidden = $("input[name='" + sFieldName + "']");
    if (!$oHidden.length)
    {
      $oHidden = $("input[name='" + sFieldName + "_']");
    }
    if ($oHidden.length)
    {
      for (var i = 0; i < $oHidden.length; i++)
      {
        if ("hidden" == $oHidden[i].type && $oHidden[i].form && $oHidden[i].form.name && "F1" == $oHidden[i].form.name)
        {
          return scAjaxSpecCharProtect($oHidden[i].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    $oField = $("#id_sc_field_" + sFieldName);
    if(!$oField.length)
    {
      $oField = $("#id_sc_field_" + sFieldName + "_");
    }
    if ($oField.length && "select" != $oField[0].type.substr(0, 6))
    {
      return scAjaxSpecCharProtect($oField.val());//.replace(/[+]/g, "__NM_PLUS__");
    }
    else if (document.F1.elements[sFieldName])
    {
      return scAjaxSpecCharProtect(document.F1.elements[sFieldName].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else if (document.F1.elements[sFieldName + '_'])
    {
      return scAjaxSpecCharProtect(document.F1.elements[sFieldName + '_'].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return '';
    }
  } // scAjaxGetFieldText

  function scAjaxGetFieldHidden(sFieldName)
  {
    for( i= 0; i < document.F1.elements.length; i++)
    {
       if (document.F1.elements[i].name == sFieldName)
       {
          return scAjaxSpecCharProtect(document.F1.elements[i].value);//.replace(/[+]/g, "__NM_PLUS__");
       }
    }
//    return document.F1.elements[sFieldName].value.replace(/[+]/g, "__NM_PLUS__");
  } // scAjaxGetFieldHidden

  function scAjaxGetFieldSelect(sFieldName)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return "";
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var iSelected  = oFormField.selectedIndex;
    if (-1 < iSelected)
    {
      return scAjaxSpecCharProtect(oFormField.options[iSelected].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return "";
    }
  } // scAjaxGetFieldSelect

  function scAjaxGetFieldSelectMult(sFieldName, sFieldDelim)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var sFieldVals = "";
    for (iFieldSelect = 0; iFieldSelect < oFormField.length; iFieldSelect++)
    {
      if (oFormField[iFieldSelect].selected)
      {
        if ("" != sFieldVals)
        {
          sFieldVals += sFieldDelim;
        }
        sFieldVals += scAjaxSpecCharProtect(oFormField[iFieldSelect].value);//.replace(/[+]/g, "__NM_PLUS__");
      }
    }
    return sFieldVals;
  } // scAjaxGetFieldSelectMult

  function scAjaxGetFieldCheckbox(sFieldName, sDelim)
  {
    var aValues = new Array();
    var sValue  = "";
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return sValue;
    }
    if (document.F1.elements[sFieldName + "[]"] && "hidden" == document.F1.elements[sFieldName + "[]"].type)
    {
      return scAjaxGetFieldHidden(sFieldName + "[]");
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheck = 0; iFieldCheck < oFormField.length; iFieldCheck++)
        {
          if (oFormField[iFieldCheck].checked)
          {
            aValues[aValues.length] = oFormField[iFieldCheck].value;
          }
        }
      }
      else
      {
        if (oFormField.checked)
        {
          aValues[aValues.length] = oFormField.value;
        }
      }
    }
    else
    {
      for (iFieldCheck = 0; iFieldCheck < document.F1.elements.length; iFieldCheck++)
      {
        oFormElement = document.F1.elements[iFieldCheck];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
        else if (sFieldName == oFormElement.name && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
      }
    }
    for (iFieldCheck = 0; iFieldCheck < aValues.length; iFieldCheck++)
    {
      sValue += scAjaxSpecCharProtect(aValues[iFieldCheck]);//.replace(/[+]/g, "__NM_PLUS__");
      if (iFieldCheck + 1 != aValues.length)
      {
        sValue += sDelim;
      }
    }
    return sValue;
  } // scAjaxGetFieldCheckbox

  function scAjaxGetFieldRadio(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }
    var oFormField = document.F1.elements[sFieldName];
    if (!oFormField.length)
    {
        var sc_cmp_radio = eval("document.F1." + sFieldName);
        if (sc_cmp_radio.checked)
        {
           sValue = scAjaxSpecCharProtect(sc_cmp_radio.value);//.replace(/[+]/g, "__NM_PLUS__");
        }
    }
    else
    {
      for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
      {
        if (oFormField[iFieldRadio].checked)
        {
          sValue = scAjaxSpecCharProtect(oFormField[iFieldRadio].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldRadio

  function scAjaxGetFieldEditorHtml(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }

	if(tinymce.majorVersion > 3)
	{
		var oFormField = tinyMCE.get(sFieldName);
	}
	else
	{
		var oFormField = tinyMCE.getInstanceById(sFieldName);
	}
    return scAjaxSpecCharParser(scAjaxSpecCharProtect(oFormField.getContent()));//.replace(/[+]/g, "__NM_PLUS__"));
  } // scAjaxGetFieldEditorHtml

  function scAjaxGetFieldSignature(sFieldName)
  {
    var signatureData = $("#sc-id-sign-" + sFieldName).jSignature("getData", "base30");
	$("#id_sc_field_" + sFieldName).val("data:" + signatureData[0] + "," + signatureData[1]);
	return $("#id_sc_field_" + sFieldName).val();
  } // scAjaxGetFieldEditorHtml

  function scAjaxGetFieldRecurInfo(sFieldName)
  {
	  var repeatInList = $(".cl_rinf_repeatin_" + sFieldName).filter(":checked"), repeatInValues = [], jsonData, i;
	  for (i = 0; i < repeatInList.length; i++) {
		  repeatInValues.push($(repeatInList[i]).val());
	  }
	  jsonData = {
		  repeat: $("#id_rinf_repeat_" + sFieldName).val(),
		  repeatin: repeatInValues.join(";"),
		  endon: $(".cl_rinf_endon_" + sFieldName).filter(":checked").val(),
		  endafter: $("#id_rinf_endafter_" + sFieldName).val(),
		  endin: $("#id_rinf_endin_" + sFieldName).val()
	  };
	  return JSON.stringify(jsonData);
  } // scAjaxGetFieldRecurInfo

  function scAjaxDoNothing(e)
  {
  } // scAjaxDoNothing

  function scAjaxInArray(mVal, aList)
  {
    for (iInArray = 0; iInArray < aList.length; iInArray++)
    {
      if (aList[iInArray] == mVal)
      {
        return true;
      }
    }
    return false;
  } // scAjaxInArray

  function scAjaxSpecCharParser(sParseString)
  {
    if (null == sParseString) {
      return "";
    }
    var ta = document.createElement("textarea");
    ta.innerHTML = sParseString.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    return ta.value;
  } // scAjaxSpecCharParser

  function scAjaxSpecCharProtect(sOriginal)
  {
        var sProtected;
        sProtected = sOriginal.replace(/[+]/g, "__NM_PLUS__");
        sProtected = sProtected.replace(/[%]/g, "__NM_PERC__");
        return sProtected;
  } // scAjaxSpecCharProtect

  function scAjaxRecreateOptions(sFieldType, sHtmlType, sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti, bSwitch)
  {
    var sSuffix  = ("checkbox" == sHtmlType) ? "[]" : "";
    var sDivName = "idAjax" + sFieldType + "_" + sFieldName;
    var sDivText = "";
    var iCntLine = 0;
    var aValues  = new Array();
    var sClass;
    if (null != oFieldValues)
    {
      for (iRecreate = 0; iRecreate < oFieldValues.length; iRecreate++)
      {
        aValues[iRecreate] = scAjaxSpecCharParser(oFieldValues[iRecreate]["value"]);
      }
    }
    sDivText += "<table border=0>";
    for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
    {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        if (0 == iCntLine)
        {
            sDivText += "<tr>";
        }
        iCntLine++;
        if ("" != sOptClass)
        {
            sClass = " class=\"" + sOptClass;
            if ("" != sOptMulti)
            {
                sClass += " " + sOptClass + sOptMulti;
            }
            sClass += "\"";
        }
        if (sHtmComp == null)
        {
            sHtmComp = "";
        }
        sChecked  = (scAjaxInArray(sOptValue, aValues)) ? " checked" : "";
        sDivText += "<td class=\"scFormDataFontOdd\">";
		if (bSwitch)
		{
			sDivText += "<div class=\"sc ";
			if ("Checkbox" == sFieldType)
			{
				sDivText += "switch";
			}
			else
			{
				sDivText += "radio";
			}
			sDivText += "\">";
		}
        sDivText += "<input id=\"id-opt-" + sFieldName + "-"  + iRecreate + "\" type=\"" + sHtmlType + "\" name=\"" + sFieldName + sSuffix + "\" value=\"" + sOptValue + "\"" + sChecked + " " + sHtmComp + " " + sOptComp + sClass + ">";
		if (bSwitch)
		{
			sDivText += "<span></span>";
		}
        sDivText += "<label for=\"id-opt-" + sFieldName + "-"  + iRecreate + "\">" + sOptText + "</label>";
		if (bSwitch)
		{
			sDivText += "</div>";
		}
        sDivText += "</td>";
        if (iColNum == iCntLine)
        {
            sDivText += "</tr>";
            iCntLine  = 0;
        }
    }
    sDivText += "</table>";
    document.getElementById(sDivName).innerHTML = sDivText;
  } // scAjaxRecreateOptions

  function scAjaxProcOn(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.blockUI && !bForce)
      {
        $.blockUI({
          message: $("#id_div_process_block"),
          overlayCSS: { backgroundColor: sc_ajaxBg },
          css: {
            borderColor: sc_ajaxBordC,
            borderStyle: sc_ajaxBordS,
            borderWidth: sc_ajaxBordW
          }
        });
      }
      else
      {
        document.getElementById("id_div_process").style.display = "";
        document.getElementById("id_fatal_error").style.display = "none";
        if (null != scCenterElement)
        {
          scCenterElement(document.getElementById("id_div_process"));
        }
      }
    }
  } // scAjaxProcOn

  function scAjaxProcOff(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.unblockUI && !bForce)
      {
        $.unblockUI();
      }
      else
      {
        document.getElementById("id_div_process").style.display = "none";
      }
    }
  } // scAjaxProcOff

  function scAjaxSetMaster()
  {
    if (!oResp["masterValue"])
    {
      return;
    }
	if (scMasterDetailParentIframe && "" != scMasterDetailParentIframe)
	{
      var dbParentFrame = $(parent.document).find("[name='" + scMasterDetailParentIframe + "']");
	  if (!dbParentFrame || !dbParentFrame[0] || !dbParentFrame[0].contentWindow.scAjaxDetailValue)
	  {
		return;
	  }
      for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
      {
        dbParentFrame[0].contentWindow.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
      }
	}
    if (!parent || !parent.scAjaxDetailValue)
    {
      return;
    }
    for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
    {
      parent.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
    }
  } // scAjaxSetMaster

  function scAjaxSetFocus()
  {
    if (!oResp["setFocus"] && '' == scFocusFirstErrorName)
    {
      return;
    }
    sFieldName = oResp["setFocus"];
    if (document.F1.elements[sFieldName])
    {
        scFocusField(sFieldName);
    }
    scAjaxFocusError();
  } // scAjaxSetFocus

  function scAjaxFocusError()
  {
    if ('' != scFocusFirstErrorName)
    {
      scFocusField(scFocusFirstErrorName);
      scFocusFirstErrorName = '';
    }
  } // scAjaxFocusError

  function scAjaxSetNavStatus(sBarPos)
  {
    if (!oResp["navStatus"])
    {
      return;
    }
    sNavRet = "S";
    sNavAva = "S";
    if (oResp["navStatus"]["ret"])
    {
      sNavRet = oResp["navStatus"]["ret"];
    }
    if (oResp["navStatus"]["ava"])
    {
      sNavAva = oResp["navStatus"]["ava"];
    }
    if ("S" != sNavRet && "N" != sNavRet)
    {
      sNavRet = "S";
    }
    if ("S" != sNavAva && "N" != sNavAva)
    {
      sNavAva = "S";
    }
    Nav_permite_ret = sNavRet;
    Nav_permite_ava = sNavAva;
    nav_atualiza(Nav_permite_ret, Nav_permite_ava, sBarPos);
  } // scAjaxSetNavStatus

  function scAjaxSetSummary()
  {
    if (!oResp["navSummary"])
    {
      return;
    }
    sreg_ini = oResp["navSummary"].reg_ini;
    sreg_qtd = oResp["navSummary"].reg_qtd;
    sreg_tot = oResp["navSummary"].reg_tot;
    summary_atualiza(sreg_ini, sreg_qtd, sreg_tot);
  } // scAjaxSetSummary

  function scAjaxSetNavpage()
  {
    navpage_atualiza(oResp["navPage"]);
  } // scAjaxSetNavpage


  function scAjaxRedir(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (!oResp["redirInfo"])
    {
      return;
    }
    sMetodo = oResp["redirInfo"]["metodo"];
    sAction = oResp["redirInfo"]["action"];
    if ("location" == sMetodo)
    {
      if ("parent.parent" == oResp["redirInfo"]["target"])
      {
        parent.parent.location = sAction;
      }
      else if ("parent" == oResp["redirInfo"]["target"])
      {
        parent.location = sAction;
      }
      else if ("_blank" == oResp["redirInfo"]["target"])
      {
        window.open(sAction, "_blank");
      }
      else
      {
        document.location = sAction;
      }
    }
    else if ("html" == sMetodo)
    {
        document.write(scAjaxSpecCharParser(oResp["redirInfo"]["action"]));
    }
    else
    {
      if (oResp["redirInfo"]["target"] == "modal")
      {
          tb_show('', sAction + '?script_case_init=' +  oResp["redirInfo"]["script_case_init"] + '&script_case_session=<?php echo session_id() ?>&nmgp_parms=' + oResp["redirInfo"]["nmgp_parms"] + '&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&TB_iframe=true&modal=true&height=' +  oResp["redirInfo"]["h_modal"] + '&width=' + oResp["redirInfo"]["w_modal"], '');
          return;
      }
      sFormRedir = (oResp["redirInfo"]["nmgp_outra_jan"]) ? "form_ajax_redir_1" : "form_ajax_redir_2";
      document.forms[sFormRedir].action           = sAction;
      document.forms[sFormRedir].target           = oResp["redirInfo"]["target"];
      document.forms[sFormRedir].nmgp_parms.value = oResp["redirInfo"]["nmgp_parms"];
      if ("form_ajax_redir_1" == sFormRedir)
      {
        document.forms[sFormRedir].nmgp_outra_jan.value = oResp["redirInfo"]["nmgp_outra_jan"];
      }
      else
      {
        document.forms[sFormRedir].nmgp_url_saida.value   = oResp["redirInfo"]["nmgp_url_saida"];
        document.forms[sFormRedir].script_case_init.value = oResp["redirInfo"]["script_case_init"];
      }
      document.forms[sFormRedir].submit();
    }
  } // scAjaxRedir

  function scAjaxSetDisplay(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    var aDispData = new Array();
    var aDispCont = {};
    var vertButton;
    if (bReset)
    {
      for (iDisplay = 0; iDisplay < ajax_block_list.length; iDisplay++)
      {
        aDispCont[ajax_block_list[iDisplay]] = aDispData.length;
        aDispData[aDispData.length] = new Array(ajax_block_id[ajax_block_list[iDisplay]], "on");
      }
      for (iDisplay = 0; iDisplay < ajax_field_list.length; iDisplay++)
      {
        if (ajax_field_id[ajax_field_list[iDisplay]])
        {
          aFieldIds = ajax_field_id[ajax_field_list[iDisplay]];
          for (iDisplay2 = 0; iDisplay2 < aFieldIds.length; iDisplay2++)
          {
            aDispCont[aFieldIds[iDisplay2]] = aDispData.length;
            aDispData[aDispData.length] = new Array(aFieldIds[iDisplay2], "on");
          }
        }
      }
    }
	var blockDisplay = {};
    if (oResp["blockDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["blockDisplay"].length; iDisplay++)
      {
        if (bReset)
        {
          aDispData[ aDispCont[ oResp["blockDisplay"][iDisplay][0] ] ][1] = oResp["blockDisplay"][iDisplay][1];
        }
        else
        {
          aDispData[aDispData.length] = new Array(ajax_block_id[ oResp["blockDisplay"][iDisplay][0] ], oResp["blockDisplay"][iDisplay][1]);
        }
		blockDisplay[ oResp["blockDisplay"][iDisplay][0] ] = oResp["blockDisplay"][iDisplay][1];
      }
	  //scCheckPagesWithoutBlock();
    }
	var fieldDisplay = {};
    if (oResp["fieldDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["fieldDisplay"].length; iDisplay++)
      {
        for (iDisplay2 = 1; iDisplay2 < ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ].length; iDisplay2++)
        {
          aFieldIds = ajax_field_id[ ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ][iDisplay2] ];
          for (iDisplay3 = 0; iDisplay3 < aFieldIds.length; iDisplay3++)
          {
            if (bReset)
            {
              aDispData[ aDispCont[ aFieldIds[iDisplay3] ] ][1] = oResp["fieldDisplay"][iDisplay][1];
            }
            else
            {
              aDispData[aDispData.length] = new Array(aFieldIds[iDisplay3], oResp["fieldDisplay"][iDisplay][1]);
            }
			if ("hidden_field_data_" == aFieldIds[iDisplay3].substr(0, 18)) {
			  fieldDisplay[ aFieldIds[iDisplay3].substr(18) ] = oResp["fieldDisplay"][iDisplay][1];
			}
          }
        }
      }
    }
    if (oResp["buttonDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["buttonDisplay"].length; iDisplay++)
      {
        var sBtnName2 = "";
        switch (oResp["buttonDisplay"][iDisplay][0])
        {
          case "first": var sBtnName = "sc_b_ini"; break;
          case "back": var sBtnName = "sc_b_ret"; break;
          case "forward": var sBtnName = "sc_b_avc"; break;
          case "last": var sBtnName = "sc_b_fim"; break;
          case "insert": var sBtnName = "sc_b_ins"; break;
          case "update": var sBtnName = "sc_b_upd"; break;
          case "delete": var sBtnName = "sc_b_del"; break;
          default: var sBtnName = "sc_b_" + oResp["buttonDisplay"][iDisplay][0]; sBtnName2 = "sc_" + oResp["buttonDisplay"][iDisplay][0]; sBtnName3 = "gbl_sc_" + oResp["buttonDisplay"][iDisplay][0]; break;
        }
        if ("sc_b_ini" == sBtnName || "sc_b_ret" == sBtnName || "sc_b_avc" == sBtnName || "sc_b_fim" == sBtnName)
        {
          scAjaxNavigateButtonDisplay(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
        }
        else
        {
          aDispData[aDispData.length] = new Array(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName + "_t", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName + "_b", oResp["buttonDisplay"][iDisplay][1]);
        }
        if ("" != sBtnName2)
        {
          aDispData[aDispData.length] = new Array(sBtnName2, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_top", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_bot", oResp["buttonDisplay"][iDisplay][1]);
        }
        if ("" != sBtnName3)
        {
          aDispData[aDispData.length] = new Array(sBtnName3, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName3 + "_top", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName3 + "_bot", oResp["buttonDisplay"][iDisplay][1]);
        }
      }
    }
    if (oResp["buttonDisplayVert"])
    {
      for (iDisplay = 0; iDisplay < oResp["buttonDisplayVert"].length; iDisplay++)
      {
        vertButton = oResp["buttonDisplayVert"][iDisplay];
        aDispData[aDispData.length] = new Array("sc_exc_line_" + vertButton.seq, vertButton.delete);
        if (vertButton.gridView)
        {
          aDispData[aDispData.length] = new Array("sc_open_line_" + vertButton.seq, vertButton.update);
        }
        else
        {
          aDispData[aDispData.length] = new Array("sc_upd_line_" + vertButton.seq, vertButton.update);
        }
      }
    }
    for (iDisplay = 0; iDisplay < aDispData.length; iDisplay++)
    {
      scAjaxElementDisplay(aDispData[iDisplay][0], aDispData[iDisplay][1]);
    }
	for (var blockId in blockDisplay) {
		displayChange_block(blockId, blockDisplay[blockId]);
	}
	for (var fieldId in fieldDisplay) {
		displayChange_field(fieldId, "", fieldDisplay[fieldId]);
	}
  } // scAjaxSetDisplay

  function scAjaxNavigateButtonDisplay(sButton, sStatus)
  {
    sButton2 = sButton + "_off";

    if ("off" == sStatus)
    {
      sStatus2 = "off";
    }
    else
    {
      if ("sc_b_ini" == sButton || "sc_b_ret" == sButton)
      {
        if ("S" == Nav_permite_ret)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
      else
      {
        if ("S" == Nav_permite_ava)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
    }

    scAjaxElementDisplay(sButton        , sStatus);
    scAjaxElementDisplay(sButton + "_t" , sStatus);
    scAjaxElementDisplay(sButton + "_b" , sStatus);
    scAjaxElementDisplay(sButton2       , sStatus2);
    scAjaxElementDisplay(sButton2 + "_t", sStatus2);
    scAjaxElementDisplay(sButton2 + "_b", sStatus2);
  } // scAjaxNavigateButtonDisplay

  function scAjaxElementDisplay(sElement, sAction)
  {
    if (ajax_block_tab && ajax_block_tab[sElement] && "" != ajax_block_tab[sElement])
    {
      scAjaxElementDisplay(ajax_block_tab[sElement], sAction);
    }
    if (document.getElementById(sElement))
    {

      if("off" == sAction)
      {
        $('#' + sElement).hide();
      }
      else
      {
        $('#' + sElement).show();
      }
      if (document.getElementById(sElement + "_dumb"))
      {
        if("off" == sAction)
        {
          $('#' + sElement + "_dumb").hide();
        }
        else
        {
          $('#' + sElement + "_dumb").show();
        }
      }
    }
  } // scAjaxElementDisplay

  function scAjaxSetLabel(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iLabel = 0; iLabel < ajax_field_list.length; iLabel++)
      {
        if (ajax_field_list[iLabel] && ajax_error_list[ajax_field_list[iLabel]])
        {
          scAjaxFieldLabel(ajax_field_list[iLabel], ajax_error_list[ajax_field_list[iLabel]]["label"]);
        }
      }
    }
    if (oResp["fieldLabel"])
    {
      for (iLabel = 0; iLabel < oResp["fieldLabel"].length; iLabel++)
      {
        scAjaxFieldLabel(oResp["fieldLabel"][iLabel][0], scAjaxSpecCharParser(oResp["fieldLabel"][iLabel][1]));
      }
    }
  } // scAjaxSetLabel

  function scAjaxFieldLabel(sField, sLabel)
  {
    if (document.getElementById("id_label_" + sField) && document.getElementById("id_label_" + sField).innerHTML != sLabel)
    {
      document.getElementById("id_label_" + sField).innerHTML = sLabel;
    }
    if (document.getElementById("hidden_field_label_" + sField) && document.getElementById("hidden_field_label_" + sField).innerHTML != sLabel)
    {
      document.getElementById("hidden_field_label_" + sField).innerHTML = sLabel;
    }
  } // scAjaxFieldLabel

  function scAjaxSetReadonly(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iRead = 0; iRead < ajax_field_list.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_list[iRead], ajax_read_only[ajax_field_list[iRead]]);
      }
      for (iRead = 0; iRead < ajax_field_Dt_Hr.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_Dt_Hr[iRead], ajax_read_only[ajax_field_Dt_Hr[iRead]]);
      }
    }
    if (oResp["readOnly"])
    {
      for (iRead = 0; iRead < oResp["readOnly"].length; iRead++)
      {
        if (ajax_read_only[ oResp["readOnly"][iRead][0] ])
        {
          scAjaxFieldRead(oResp["readOnly"][iRead][0], oResp["readOnly"][iRead][1]);
        }
        else if (oResp["rsSize"])
        {
          for (var i = 0; i <= oResp["rsSize"]; i++)
          {
            if (ajax_read_only[ oResp["readOnly"][iRead][0] + i ])
            {
              scAjaxFieldRead(oResp["readOnly"][iRead][0] + i, oResp["readOnly"][iRead][1]);
            }
          }
        }
      }
    }
  } // scAjaxSetReadonly

  function scAjaxFieldRead(sField, sStatus)
  {
    if ("on" == sStatus)
    {
      var sDisplayOff = "none";
      var sDisplayOn  = "";
    }
    else
    {
      var sDisplayOff = "";
      var sDisplayOn  = "none";
    }
    if (document.getElementById("id_read_off_" + sField))
    {
      document.getElementById("id_read_off_" + sField).style.display = sDisplayOff;
    }
    if (document.getElementById("id_read_on_" + sField))
    {
      document.getElementById("id_read_on_" + sField).style.display = sDisplayOn;
    }
  } // scAjaxFieldRead

  function scAjaxSetBtnVars()
  {
    if (oResp["btnVars"])
    {
      for (iBtn = 0; iBtn < oResp["btnVars"].length; iBtn++)
      {
        eval(oResp["btnVars"][iBtn][0] + " = scAjaxSpecCharParser('" + oResp["btnVars"][iBtn][1] + "');");
      }
    }
  } // scAjaxSetBtnVars

  function scAjaxClearText(sFormField)
  {
    document.F1.elements[sFormField].value = "";
  } // scAjaxClearText

  function scAjaxClearLabel(sFormField)
  {
    document.getElementById("id_ajax_label_" + sFormField).innerHTML = "";
  } // scAjaxClearLabel

  function scAjaxClearSelect(sFormField)
  {
    document.F1.elements[sFormField].length = 0;
  } // scAjaxClearSelect

  function scAjaxClearCheckbox(sFormField)
  {
    document.getElementById("idAjaxCheckbox_" + sFormField).innerHTML = "";
  } // scAjaxClearCheckbox

  function scAjaxClearRadio(sFormField)
  {
    document.getElementById("idAjaxRadio_" + sFormField).innerHTML = "";
  } // scAjaxClearRadio

  function scAjaxClearEditorHtml(sFormField)
  {
    if(tinymce.majorVersion > 3)
        {
                var oFormField = tinyMCE.get(sFieldName);
        }
        else
        {
                var oFormField = tinyMCE.getInstanceById(sFieldName);
        }
    oFormField.setContent("");
  } // scAjaxClearEditorHtml

  function scCheckPagesWithoutBlock()
  {
	var page_id, block_id, has_block_shown;
    for (page_id in ajax_page_blocks) {
	  has_block_shown = false;
      for (block_id in ajax_page_blocks[page_id]) {
		console.log(page_id + ' ' + ajax_page_blocks[page_id][block_id]);
		console.log($("#div_" + ajax_block_id[ajax_page_blocks[page_id][block_id]]).css('display'));
        //$("#div_" + ajax_block_id[block_id]);
      }
    }
  }

  function scAjaxJavascript()
  {
    if (oResp["ajaxJavascript"])
    {
      var sJsFunc = "";
      for (var i = 0; i < oResp["ajaxJavascript"].length; i++)
      {
        sJsFunc = scAjaxSpecCharParser(oResp["ajaxJavascript"][i][0]);
        if ("" != sJsFunc)
        {
          var aParam = new Array();
          if (oResp["ajaxJavascript"][i][1] && 0 < oResp["ajaxJavascript"][i][1].length)
          {
            for (var j = 0; j < oResp["ajaxJavascript"][i][1].length; j++)
            {
              aParam.push("'" + oResp["ajaxJavascript"][i][1][j] + "'");
            }
          }
          eval("if (" + sJsFunc + ") { " + sJsFunc + "(" + aParam.join(", ") + ") }");
        }
      }
    }
  } // scAjaxJavascript

  function scAjaxAlert(callbackOk)
  {
    if (oResp["ajaxAlert"] && oResp["ajaxAlert"]["message"] && "" != oResp["ajaxAlert"]["message"])
    {
      scJs_alert(oResp["ajaxAlert"]["message"], callbackOk, oResp["ajaxAlert"]["params"]);
    }
    else
    {
      callbackOk();
    }
  } // scAjaxAlert

	function scJs_alert_default(message, callbackOk) {
		alert(message);
		if (typeof callbackOk == "function") {
			callbackOk();
		}
	} // scJs_alert_default

	function scJs_confirm_default(message, callbackOk, callbackCancel) {
		if (confirm(message)) {
			callbackOk();
		}
		else {
			callbackCancel();
		}
	} // scJs_confirm_default

  function scAjaxMessage(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["ajaxMessage"] && oResp["ajaxMessage"]["message"] && "" != oResp["ajaxMessage"]["message"])
    {
      var sTitle    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["title"])        ? oResp["ajaxMessage"]["title"]               : scMsgDefTitle,
          bModal    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["modal"])        ? ("Y" == oResp["ajaxMessage"]["modal"])      : false,
          iTimeout  = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["timeout"])      ? parseInt(oResp["ajaxMessage"]["timeout"])   : 0,
          bButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button"])       ? ("Y" == oResp["ajaxMessage"]["button"])     : false,
          sButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button_label"]) ? oResp["ajaxMessage"]["button_label"]        : "Ok",
          iTop      = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["top"])          ? parseInt(oResp["ajaxMessage"]["top"])       : 0,
          iLeft     = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["left"])         ? parseInt(oResp["ajaxMessage"]["left"])      : 0,
          iWidth    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["width"])        ? parseInt(oResp["ajaxMessage"]["width"])     : 0,
          iHeight   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["height"])       ? parseInt(oResp["ajaxMessage"]["height"])    : 0,
          bClose    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["show_close"])   ? ("Y" == oResp["ajaxMessage"]["show_close"]) : true,
          bBodyIcon = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["body_icon"])    ? ("Y" == oResp["ajaxMessage"]["body_icon"])  : true,
          sRedir    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir"])        ? oResp["ajaxMessage"]["redir"]               : "",
          sTarget   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_target"]) ? oResp["ajaxMessage"]["redir_target"]        : "",
          sParam    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_par"])    ? oResp["ajaxMessage"]["redir_par"]           : "",
          bToast    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["toast"])        ? ("Y" == oResp["ajaxMessage"]["toast"])      : false,
          sToastPos = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["toast_pos"])    ? oResp["ajaxMessage"]["toast_pos"]           : "",
          sType     = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["type"])         ? oResp["ajaxMessage"]["type"]                : "";
      if (typeof scDisplayUserMessage == "function") {
        scDisplayUserMessage(oResp["ajaxMessage"]["message"]);
      }
      else {
		  var params = {
			  title: sTitle,
			  message: oResp["ajaxMessage"]["message"],
			  isModal: bModal,
			  timeout: iTimeout,
			  showButton: bButton,
			  buttonLabel: sButton,
			  topPos: iTop,
			  leftPos: iLeft,
			  width: iWidth,
			  height: iHeight,
			  redirUrl: sRedir,
			  redirTarget: sTarget,
			  redirParam: sParam,
			  showClose: bClose,
			  showBodyIcon: bBodyIcon,
			  isToast: bToast,
			  toastPos: sToastPos,
			  type: sType
		  };
        _scAjaxShowMessage(params);
      }
    }
  } // scAjaxMessage

  function scAjaxResponse(sResp)
  {
    eval("var oResp = " + sResp);
    return oResp;
  } // scAjaxResponse

  function scAjaxBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      input += "";
      while (input.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input = input.replace(String.fromCharCode(10), '<br>');
      }
      return input;
  } // scAjaxBreakLine

  function scAjaxProtectBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      var input1 = input + "";
      while (input1.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input1 = input1.replace(String.fromCharCode(10), '#@NM#@');
      }
      return input1;
  } // scAjaxProtectBreakLine

  function scAjaxReturnBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      while (input.lastIndexOf('#@NM#@') > -1)
      {
         input = input.replace('#@NM#@', String.fromCharCode(10));
      }
      return input;
  } // scAjaxReturnBreakLine

  function scOpenMasterDetail(widget, url)
  {
	  var iframe = $(parent.document).find("[name='" +  widget+ "']");
	  iframe.attr("src", url);
  } // scOpenMasterDetail

  function scMoveMasterDetail(widget)
  {
	  var iframe = $(parent.document).find("[name='" +  widget+ "']");
	  iframe[0].contentWindow.nm_move("apl_detalhe", true);
  } // scMoveMasterDetail

	function scAjaxError_markList() {
	    if ('undefined' == typeof oResp.errList) {
	        return;
	    }
		var i, fieldName, fieldList = new Array();
		for (i = 0; i < oResp.errList.length; i++) {
			fieldName = oResp.errList[i]["fldName"];
			if (oResp.errList[i]["numLinha"]) {
				fieldName += oResp.errList[i]["numLinha"];
			}
            fieldList.push(fieldName);
		}
		scAjaxError_markFieldList(fieldList);
	} // scAjaxError_markList

	function scAjaxError_markFieldList(fieldList) {
		var i;
		for (i = 0; i < fieldList.length; i++) {
            scAjaxError_markField(fieldList[i]);
		}
	} // scAjaxError_markFieldList

	function scAjaxError_unmarkList() {
		var i;
		for (i = 0; i < ajax_field_list.length; i++) {
            scAjaxError_unmarkField(ajax_field_list[i]);
		}
	} // scAjaxError_unmarkList

	function scAjaxError_markField(fieldName) {
		var $oField = $("#id_sc_field_" + fieldName);
		if (0 < $oField.length) {
			$oField.addClass(sc_css_status);
		}
	} // scAjaxError_markField

	function scAjaxError_unmarkField(fieldName) {
		var $oField = $("#id_sc_field_" + fieldName);
		if (0 < $oField.length) {
			$oField.removeClass(sc_css_status);
		}
	} // scAjaxError_unmarkField

	function scAjax_displayEmptyForm() {
        $("#sc-ui-empty-form").show();
        $(".sc-ui-page-tab-line").hide();
        $("#sc-id-required-row").hide();
        sc_hide_form_activos_form();
	}

  // ---------- Validate id_actvo
  function do_ajax_form_activos_validate_id_actvo()
  {
    var nomeCampo_id_actvo = "id_actvo";
    var var_id_actvo = scAjaxGetFieldHidden(nomeCampo_id_actvo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_actvo(var_id_actvo, var_script_case_init, do_ajax_form_activos_validate_id_actvo_cb);
  } // do_ajax_form_activos_validate_id_actvo

  function do_ajax_form_activos_validate_id_actvo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_actvo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_actvo_cb

  // ---------- Validate nmbre
  function do_ajax_form_activos_validate_nmbre()
  {
    var nomeCampo_nmbre = "nmbre";
    var var_nmbre = scAjaxGetFieldText(nomeCampo_nmbre);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_nmbre(var_nmbre, var_script_case_init, do_ajax_form_activos_validate_nmbre_cb);
  } // do_ajax_form_activos_validate_nmbre

  function do_ajax_form_activos_validate_nmbre_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "nmbre";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_nmbre_cb

  // ---------- Validate cdgo
  function do_ajax_form_activos_validate_cdgo()
  {
    var nomeCampo_cdgo = "cdgo";
    var var_cdgo = scAjaxGetFieldText(nomeCampo_cdgo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_cdgo(var_cdgo, var_script_case_init, do_ajax_form_activos_validate_cdgo_cb);
  } // do_ajax_form_activos_validate_cdgo

  function do_ajax_form_activos_validate_cdgo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "cdgo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_cdgo_cb

  // ---------- Validate rfrncia
  function do_ajax_form_activos_validate_rfrncia()
  {
    var nomeCampo_rfrncia = "rfrncia";
    var var_rfrncia = scAjaxGetFieldText(nomeCampo_rfrncia);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_rfrncia(var_rfrncia, var_script_case_init, do_ajax_form_activos_validate_rfrncia_cb);
  } // do_ajax_form_activos_validate_rfrncia

  function do_ajax_form_activos_validate_rfrncia_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "rfrncia";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_rfrncia_cb

  // ---------- Validate srial
  function do_ajax_form_activos_validate_srial()
  {
    var nomeCampo_srial = "srial";
    var var_srial = scAjaxGetFieldText(nomeCampo_srial);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_srial(var_srial, var_script_case_init, do_ajax_form_activos_validate_srial_cb);
  } // do_ajax_form_activos_validate_srial

  function do_ajax_form_activos_validate_srial_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "srial";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_srial_cb

  // ---------- Validate nmro_actvo
  function do_ajax_form_activos_validate_nmro_actvo()
  {
    var nomeCampo_nmro_actvo = "nmro_actvo";
    var var_nmro_actvo = scAjaxGetFieldText(nomeCampo_nmro_actvo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_nmro_actvo(var_nmro_actvo, var_script_case_init, do_ajax_form_activos_validate_nmro_actvo_cb);
  } // do_ajax_form_activos_validate_nmro_actvo

  function do_ajax_form_activos_validate_nmro_actvo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "nmro_actvo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_nmro_actvo_cb

  // ---------- Validate alias
  function do_ajax_form_activos_validate_alias()
  {
    var nomeCampo_alias = "alias";
    var var_alias = scAjaxGetFieldText(nomeCampo_alias);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_alias(var_alias, var_script_case_init, do_ajax_form_activos_validate_alias_cb);
  } // do_ajax_form_activos_validate_alias

  function do_ajax_form_activos_validate_alias_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "alias";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_alias_cb

  // ---------- Validate cdgo_qr
  function do_ajax_form_activos_validate_cdgo_qr()
  {
    var nomeCampo_cdgo_qr = "cdgo_qr";
    var var_cdgo_qr = scAjaxGetFieldText(nomeCampo_cdgo_qr);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_cdgo_qr(var_cdgo_qr, var_script_case_init, do_ajax_form_activos_validate_cdgo_qr_cb);
  } // do_ajax_form_activos_validate_cdgo_qr

  function do_ajax_form_activos_validate_cdgo_qr_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "cdgo_qr";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_cdgo_qr_cb

  // ---------- Validate cdgo_brras
  function do_ajax_form_activos_validate_cdgo_brras()
  {
    var nomeCampo_cdgo_brras = "cdgo_brras";
    var var_cdgo_brras = scAjaxGetFieldText(nomeCampo_cdgo_brras);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_cdgo_brras(var_cdgo_brras, var_script_case_init, do_ajax_form_activos_validate_cdgo_brras_cb);
  } // do_ajax_form_activos_validate_cdgo_brras

  function do_ajax_form_activos_validate_cdgo_brras_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "cdgo_brras";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_cdgo_brras_cb

  // ---------- Validate cdgo_rfid
  function do_ajax_form_activos_validate_cdgo_rfid()
  {
    var nomeCampo_cdgo_rfid = "cdgo_rfid";
    var var_cdgo_rfid = scAjaxGetFieldText(nomeCampo_cdgo_rfid);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_cdgo_rfid(var_cdgo_rfid, var_script_case_init, do_ajax_form_activos_validate_cdgo_rfid_cb);
  } // do_ajax_form_activos_validate_cdgo_rfid

  function do_ajax_form_activos_validate_cdgo_rfid_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "cdgo_rfid";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_cdgo_rfid_cb

  // ---------- Validate cmpsto
  function do_ajax_form_activos_validate_cmpsto()
  {
    var nomeCampo_cmpsto = "cmpsto";
    var var_cmpsto = scAjaxGetFieldSelect(nomeCampo_cmpsto);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_cmpsto(var_cmpsto, var_script_case_init, do_ajax_form_activos_validate_cmpsto_cb);
  } // do_ajax_form_activos_validate_cmpsto

  function do_ajax_form_activos_validate_cmpsto_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "cmpsto";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_cmpsto_cb

  // ---------- Validate id_estdo
  function do_ajax_form_activos_validate_id_estdo()
  {
    var nomeCampo_id_estdo = "id_estdo";
    var var_id_estdo = scAjaxGetFieldSelect(nomeCampo_id_estdo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_estdo(var_id_estdo, var_script_case_init, do_ajax_form_activos_validate_id_estdo_cb);
  } // do_ajax_form_activos_validate_id_estdo

  function do_ajax_form_activos_validate_id_estdo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_estdo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_estdo_cb

  // ---------- Validate id_clse
  function do_ajax_form_activos_validate_id_clse()
  {
    var nomeCampo_id_clse = "id_clse";
    var var_id_clse = scAjaxGetFieldSelect(nomeCampo_id_clse);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_clse(var_id_clse, var_script_case_init, do_ajax_form_activos_validate_id_clse_cb);
  } // do_ajax_form_activos_validate_id_clse

  function do_ajax_form_activos_validate_id_clse_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_clse";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_clse_cb

  // ---------- Validate id_tpo
  function do_ajax_form_activos_validate_id_tpo()
  {
    var nomeCampo_id_tpo = "id_tpo";
    var var_id_tpo = scAjaxGetFieldSelect(nomeCampo_id_tpo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_tpo(var_id_tpo, var_script_case_init, do_ajax_form_activos_validate_id_tpo_cb);
  } // do_ajax_form_activos_validate_id_tpo

  function do_ajax_form_activos_validate_id_tpo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_tpo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_tpo_cb

  // ---------- Validate id_mrca
  function do_ajax_form_activos_validate_id_mrca()
  {
    var nomeCampo_id_mrca = "id_mrca";
    var var_id_mrca = scAjaxGetFieldSelect(nomeCampo_id_mrca);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_mrca(var_id_mrca, var_script_case_init, do_ajax_form_activos_validate_id_mrca_cb);
  } // do_ajax_form_activos_validate_id_mrca

  function do_ajax_form_activos_validate_id_mrca_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_mrca";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_mrca_cb

  // ---------- Validate mdlo
  function do_ajax_form_activos_validate_mdlo()
  {
    var nomeCampo_mdlo = "mdlo";
    var var_mdlo = scAjaxGetFieldText(nomeCampo_mdlo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_mdlo(var_mdlo, var_script_case_init, do_ajax_form_activos_validate_mdlo_cb);
  } // do_ajax_form_activos_validate_mdlo

  function do_ajax_form_activos_validate_mdlo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "mdlo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_mdlo_cb

  // ---------- Validate id_fbrcnte
  function do_ajax_form_activos_validate_id_fbrcnte()
  {
    var nomeCampo_id_fbrcnte = "id_fbrcnte";
    var var_id_fbrcnte = scAjaxGetFieldSelect(nomeCampo_id_fbrcnte);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_fbrcnte(var_id_fbrcnte, var_script_case_init, do_ajax_form_activos_validate_id_fbrcnte_cb);
  } // do_ajax_form_activos_validate_id_fbrcnte

  function do_ajax_form_activos_validate_id_fbrcnte_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_fbrcnte";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_fbrcnte_cb

  // ---------- Validate cnfbldad
  function do_ajax_form_activos_validate_cnfbldad()
  {
    var nomeCampo_cnfbldad = "cnfbldad";
    var var_cnfbldad = scAjaxGetFieldText(nomeCampo_cnfbldad);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_cnfbldad(var_cnfbldad, var_script_case_init, do_ajax_form_activos_validate_cnfbldad_cb);
  } // do_ajax_form_activos_validate_cnfbldad

  function do_ajax_form_activos_validate_cnfbldad_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "cnfbldad";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_cnfbldad_cb

  // ---------- Validate id_nit_prvdor
  function do_ajax_form_activos_validate_id_nit_prvdor()
  {
    var nomeCampo_id_nit_prvdor = "id_nit_prvdor";
    var var_id_nit_prvdor = scAjaxGetFieldSelect(nomeCampo_id_nit_prvdor);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_nit_prvdor(var_id_nit_prvdor, var_script_case_init, do_ajax_form_activos_validate_id_nit_prvdor_cb);
  } // do_ajax_form_activos_validate_id_nit_prvdor

  function do_ajax_form_activos_validate_id_nit_prvdor_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_nit_prvdor";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_nit_prvdor_cb

  // ---------- Validate fcha_cmpra
  function do_ajax_form_activos_validate_fcha_cmpra()
  {
    var nomeCampo_fcha_cmpra = "fcha_cmpra";
    var var_fcha_cmpra = scAjaxGetFieldText(nomeCampo_fcha_cmpra);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fcha_cmpra(var_fcha_cmpra, var_script_case_init, do_ajax_form_activos_validate_fcha_cmpra_cb);
  } // do_ajax_form_activos_validate_fcha_cmpra

  function do_ajax_form_activos_validate_fcha_cmpra_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fcha_cmpra";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fcha_cmpra_cb

  // ---------- Validate fcha_arrnque
  function do_ajax_form_activos_validate_fcha_arrnque()
  {
    var nomeCampo_fcha_arrnque = "fcha_arrnque";
    var var_fcha_arrnque = scAjaxGetFieldText(nomeCampo_fcha_arrnque);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fcha_arrnque(var_fcha_arrnque, var_script_case_init, do_ajax_form_activos_validate_fcha_arrnque_cb);
  } // do_ajax_form_activos_validate_fcha_arrnque

  function do_ajax_form_activos_validate_fcha_arrnque_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fcha_arrnque";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fcha_arrnque_cb

  // ---------- Validate fcha_fin_grntia
  function do_ajax_form_activos_validate_fcha_fin_grntia()
  {
    var nomeCampo_fcha_fin_grntia = "fcha_fin_grntia";
    var var_fcha_fin_grntia = scAjaxGetFieldText(nomeCampo_fcha_fin_grntia);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fcha_fin_grntia(var_fcha_fin_grntia, var_script_case_init, do_ajax_form_activos_validate_fcha_fin_grntia_cb);
  } // do_ajax_form_activos_validate_fcha_fin_grntia

  function do_ajax_form_activos_validate_fcha_fin_grntia_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fcha_fin_grntia";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fcha_fin_grntia_cb

  // ---------- Validate vlor_cmpra1
  function do_ajax_form_activos_validate_vlor_cmpra1()
  {
    var nomeCampo_vlor_cmpra1 = "vlor_cmpra1";
    var var_vlor_cmpra1 = scAjaxGetFieldText(nomeCampo_vlor_cmpra1);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_vlor_cmpra1(var_vlor_cmpra1, var_script_case_init, do_ajax_form_activos_validate_vlor_cmpra1_cb);
  } // do_ajax_form_activos_validate_vlor_cmpra1

  function do_ajax_form_activos_validate_vlor_cmpra1_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "vlor_cmpra1";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_vlor_cmpra1_cb

  // ---------- Validate id_mnda_cmpra1
  function do_ajax_form_activos_validate_id_mnda_cmpra1()
  {
    var nomeCampo_id_mnda_cmpra1 = "id_mnda_cmpra1";
    var var_id_mnda_cmpra1 = scAjaxGetFieldSelect(nomeCampo_id_mnda_cmpra1);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_mnda_cmpra1(var_id_mnda_cmpra1, var_script_case_init, do_ajax_form_activos_validate_id_mnda_cmpra1_cb);
  } // do_ajax_form_activos_validate_id_mnda_cmpra1

  function do_ajax_form_activos_validate_id_mnda_cmpra1_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_mnda_cmpra1";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_mnda_cmpra1_cb

  // ---------- Validate vlor_cmpra2
  function do_ajax_form_activos_validate_vlor_cmpra2()
  {
    var nomeCampo_vlor_cmpra2 = "vlor_cmpra2";
    var var_vlor_cmpra2 = scAjaxGetFieldText(nomeCampo_vlor_cmpra2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_vlor_cmpra2(var_vlor_cmpra2, var_script_case_init, do_ajax_form_activos_validate_vlor_cmpra2_cb);
  } // do_ajax_form_activos_validate_vlor_cmpra2

  function do_ajax_form_activos_validate_vlor_cmpra2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "vlor_cmpra2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_vlor_cmpra2_cb

  // ---------- Validate id_mnda_cmpra2
  function do_ajax_form_activos_validate_id_mnda_cmpra2()
  {
    var nomeCampo_id_mnda_cmpra2 = "id_mnda_cmpra2";
    var var_id_mnda_cmpra2 = scAjaxGetFieldSelect(nomeCampo_id_mnda_cmpra2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_mnda_cmpra2(var_id_mnda_cmpra2, var_script_case_init, do_ajax_form_activos_validate_id_mnda_cmpra2_cb);
  } // do_ajax_form_activos_validate_id_mnda_cmpra2

  function do_ajax_form_activos_validate_id_mnda_cmpra2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_mnda_cmpra2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_mnda_cmpra2_cb

  // ---------- Validate id_area
  function do_ajax_form_activos_validate_id_area()
  {
    var nomeCampo_id_area = "id_area";
    var var_id_area = scAjaxGetFieldSelect(nomeCampo_id_area);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_area(var_id_area, var_script_case_init, do_ajax_form_activos_validate_id_area_cb);
  } // do_ajax_form_activos_validate_id_area

  function do_ajax_form_activos_validate_id_area_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_area";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_area_cb

  // ---------- Validate id_cntro_csto
  function do_ajax_form_activos_validate_id_cntro_csto()
  {
    var nomeCampo_id_cntro_csto = "id_cntro_csto";
    var var_id_cntro_csto = scAjaxGetFieldText(nomeCampo_id_cntro_csto);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_cntro_csto(var_id_cntro_csto, var_script_case_init, do_ajax_form_activos_validate_id_cntro_csto_cb);
  } // do_ajax_form_activos_validate_id_cntro_csto

  function do_ajax_form_activos_validate_id_cntro_csto_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_cntro_csto";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_cntro_csto_cb

  // ---------- Validate id_ubccion
  function do_ajax_form_activos_validate_id_ubccion()
  {
    var nomeCampo_id_ubccion = "id_ubccion";
    var var_id_ubccion = scAjaxGetFieldSelect(nomeCampo_id_ubccion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_ubccion(var_id_ubccion, var_script_case_init, do_ajax_form_activos_validate_id_ubccion_cb);
  } // do_ajax_form_activos_validate_id_ubccion

  function do_ajax_form_activos_validate_id_ubccion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_ubccion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_ubccion_cb

  // ---------- Validate id_nit_rspnsble
  function do_ajax_form_activos_validate_id_nit_rspnsble()
  {
    var nomeCampo_id_nit_rspnsble = "id_nit_rspnsble";
    var var_id_nit_rspnsble = scAjaxGetFieldSelect(nomeCampo_id_nit_rspnsble);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_nit_rspnsble(var_id_nit_rspnsble, var_script_case_init, do_ajax_form_activos_validate_id_nit_rspnsble_cb);
  } // do_ajax_form_activos_validate_id_nit_rspnsble

  function do_ajax_form_activos_validate_id_nit_rspnsble_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_nit_rspnsble";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_nit_rspnsble_cb

  // ---------- Validate id_cntdor
  function do_ajax_form_activos_validate_id_cntdor()
  {
    var nomeCampo_id_cntdor = "id_cntdor";
    var var_id_cntdor = scAjaxGetFieldSelect(nomeCampo_id_cntdor);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_cntdor(var_id_cntdor, var_script_case_init, do_ajax_form_activos_validate_id_cntdor_cb);
  } // do_ajax_form_activos_validate_id_cntdor

  function do_ajax_form_activos_validate_id_cntdor_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_cntdor";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_cntdor_cb

  // ---------- Validate vlor_actual
  function do_ajax_form_activos_validate_vlor_actual()
  {
    var nomeCampo_vlor_actual = "vlor_actual";
    var var_vlor_actual = scAjaxGetFieldText(nomeCampo_vlor_actual);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_vlor_actual(var_vlor_actual, var_script_case_init, do_ajax_form_activos_validate_vlor_actual_cb);
  } // do_ajax_form_activos_validate_vlor_actual

  function do_ajax_form_activos_validate_vlor_actual_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "vlor_actual";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_vlor_actual_cb

  // ---------- Validate fcha_lctra
  function do_ajax_form_activos_validate_fcha_lctra()
  {
    var nomeCampo_fcha_lctra = "fcha_lctra";
    var var_fcha_lctra = scAjaxGetFieldText(nomeCampo_fcha_lctra);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fcha_lctra(var_fcha_lctra, var_script_case_init, do_ajax_form_activos_validate_fcha_lctra_cb);
  } // do_ajax_form_activos_validate_fcha_lctra

  function do_ajax_form_activos_validate_fcha_lctra_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fcha_lctra";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fcha_lctra_cb

  // ---------- Validate vlor_estndar
  function do_ajax_form_activos_validate_vlor_estndar()
  {
    var nomeCampo_vlor_estndar = "vlor_estndar";
    var var_vlor_estndar = scAjaxGetFieldText(nomeCampo_vlor_estndar);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_vlor_estndar(var_vlor_estndar, var_script_case_init, do_ajax_form_activos_validate_vlor_estndar_cb);
  } // do_ajax_form_activos_validate_vlor_estndar

  function do_ajax_form_activos_validate_vlor_estndar_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "vlor_estndar";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_vlor_estndar_cb

  // ---------- Validate id_tpo_mdcion
  function do_ajax_form_activos_validate_id_tpo_mdcion()
  {
    var nomeCampo_id_tpo_mdcion = "id_tpo_mdcion";
    var var_id_tpo_mdcion = scAjaxGetFieldSelect(nomeCampo_id_tpo_mdcion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_tpo_mdcion(var_id_tpo_mdcion, var_script_case_init, do_ajax_form_activos_validate_id_tpo_mdcion_cb);
  } // do_ajax_form_activos_validate_id_tpo_mdcion

  function do_ajax_form_activos_validate_id_tpo_mdcion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_tpo_mdcion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_tpo_mdcion_cb

  // ---------- Validate fto1
  function do_ajax_form_activos_validate_fto1()
  {
    var nomeCampo_fto1 = "fto1";
    var var_fto1 = scAjaxGetFieldText(nomeCampo_fto1);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fto1(var_fto1, var_script_case_init, do_ajax_form_activos_validate_fto1_cb);
  } // do_ajax_form_activos_validate_fto1

  function do_ajax_form_activos_validate_fto1_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fto1";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fto1_cb

  // ---------- Validate fto2
  function do_ajax_form_activos_validate_fto2()
  {
    var nomeCampo_fto2 = "fto2";
    var var_fto2 = scAjaxGetFieldText(nomeCampo_fto2);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fto2(var_fto2, var_script_case_init, do_ajax_form_activos_validate_fto2_cb);
  } // do_ajax_form_activos_validate_fto2

  function do_ajax_form_activos_validate_fto2_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fto2";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fto2_cb

  // ---------- Validate fto3
  function do_ajax_form_activos_validate_fto3()
  {
    var nomeCampo_fto3 = "fto3";
    var var_fto3 = scAjaxGetFieldText(nomeCampo_fto3);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fto3(var_fto3, var_script_case_init, do_ajax_form_activos_validate_fto3_cb);
  } // do_ajax_form_activos_validate_fto3

  function do_ajax_form_activos_validate_fto3_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fto3";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fto3_cb

  // ---------- Validate fto4
  function do_ajax_form_activos_validate_fto4()
  {
    var nomeCampo_fto4 = "fto4";
    var var_fto4 = scAjaxGetFieldText(nomeCampo_fto4);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fto4(var_fto4, var_script_case_init, do_ajax_form_activos_validate_fto4_cb);
  } // do_ajax_form_activos_validate_fto4

  function do_ajax_form_activos_validate_fto4_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fto4";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fto4_cb

  // ---------- Validate fto5
  function do_ajax_form_activos_validate_fto5()
  {
    var nomeCampo_fto5 = "fto5";
    var var_fto5 = scAjaxGetFieldText(nomeCampo_fto5);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fto5(var_fto5, var_script_case_init, do_ajax_form_activos_validate_fto5_cb);
  } // do_ajax_form_activos_validate_fto5

  function do_ajax_form_activos_validate_fto5_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fto5";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fto5_cb

  // ---------- Validate fto6
  function do_ajax_form_activos_validate_fto6()
  {
    var nomeCampo_fto6 = "fto6";
    var var_fto6 = scAjaxGetFieldText(nomeCampo_fto6);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fto6(var_fto6, var_script_case_init, do_ajax_form_activos_validate_fto6_cb);
  } // do_ajax_form_activos_validate_fto6

  function do_ajax_form_activos_validate_fto6_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fto6";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fto6_cb

  // ---------- Validate prmtro_oprcion
  function do_ajax_form_activos_validate_prmtro_oprcion()
  {
    var nomeCampo_prmtro_oprcion = "prmtro_oprcion";
    var var_prmtro_oprcion = scAjaxGetFieldText(nomeCampo_prmtro_oprcion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_prmtro_oprcion(var_prmtro_oprcion, var_script_case_init, do_ajax_form_activos_validate_prmtro_oprcion_cb);
  } // do_ajax_form_activos_validate_prmtro_oprcion

  function do_ajax_form_activos_validate_prmtro_oprcion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "prmtro_oprcion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_prmtro_oprcion_cb

  // ---------- Validate nmbre_archvo_po
  function do_ajax_form_activos_validate_nmbre_archvo_po()
  {
    var nomeCampo_nmbre_archvo_po = "nmbre_archvo_po";
    var var_nmbre_archvo_po = scAjaxGetFieldText(nomeCampo_nmbre_archvo_po);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_nmbre_archvo_po(var_nmbre_archvo_po, var_script_case_init, do_ajax_form_activos_validate_nmbre_archvo_po_cb);
  } // do_ajax_form_activos_validate_nmbre_archvo_po

  function do_ajax_form_activos_validate_nmbre_archvo_po_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "nmbre_archvo_po";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_nmbre_archvo_po_cb

  // ---------- Validate tmno_po
  function do_ajax_form_activos_validate_tmno_po()
  {
    var nomeCampo_tmno_po = "tmno_po";
    var var_tmno_po = scAjaxGetFieldText(nomeCampo_tmno_po);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_tmno_po(var_tmno_po, var_script_case_init, do_ajax_form_activos_validate_tmno_po_cb);
  } // do_ajax_form_activos_validate_tmno_po

  function do_ajax_form_activos_validate_tmno_po_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "tmno_po";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_tmno_po_cb

  // ---------- Validate fcha_rgstro
  function do_ajax_form_activos_validate_fcha_rgstro()
  {
    var nomeCampo_fcha_rgstro = "fcha_rgstro";
    var var_fcha_rgstro = scAjaxGetFieldText(nomeCampo_fcha_rgstro);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fcha_rgstro(var_fcha_rgstro, var_script_case_init, do_ajax_form_activos_validate_fcha_rgstro_cb);
  } // do_ajax_form_activos_validate_fcha_rgstro

  function do_ajax_form_activos_validate_fcha_rgstro_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fcha_rgstro";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fcha_rgstro_cb

  // ---------- Validate id_usrio
  function do_ajax_form_activos_validate_id_usrio()
  {
    var nomeCampo_id_usrio = "id_usrio";
    var var_id_usrio = scAjaxGetFieldSelect(nomeCampo_id_usrio);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_usrio(var_id_usrio, var_script_case_init, do_ajax_form_activos_validate_id_usrio_cb);
  } // do_ajax_form_activos_validate_id_usrio

  function do_ajax_form_activos_validate_id_usrio_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_usrio";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_usrio_cb

  // ---------- Validate fcha_actlzcion
  function do_ajax_form_activos_validate_fcha_actlzcion()
  {
    var nomeCampo_fcha_actlzcion = "fcha_actlzcion";
    var var_fcha_actlzcion = scAjaxGetFieldText(nomeCampo_fcha_actlzcion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_fcha_actlzcion(var_fcha_actlzcion, var_script_case_init, do_ajax_form_activos_validate_fcha_actlzcion_cb);
  } // do_ajax_form_activos_validate_fcha_actlzcion

  function do_ajax_form_activos_validate_fcha_actlzcion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "fcha_actlzcion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_fcha_actlzcion_cb

  // ---------- Validate id_usrio_actlzcion
  function do_ajax_form_activos_validate_id_usrio_actlzcion()
  {
    var nomeCampo_id_usrio_actlzcion = "id_usrio_actlzcion";
    var var_id_usrio_actlzcion = scAjaxGetFieldText(nomeCampo_id_usrio_actlzcion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_activos_validate_id_usrio_actlzcion(var_id_usrio_actlzcion, var_script_case_init, do_ajax_form_activos_validate_id_usrio_actlzcion_cb);
  } // do_ajax_form_activos_validate_id_usrio_actlzcion

  function do_ajax_form_activos_validate_id_usrio_actlzcion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "id_usrio_actlzcion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_activos_validate_id_usrio_actlzcion_cb
function scAjaxShowErrorDisplay(sErrorId, sErrorMsg) {
	if ("table" != sErrorId && !$("id_error_display_" + sErrorId + "_frame").hasClass('scFormToastDivFixed')) {
		scAjaxShowErrorDisplay_default(sErrorId, sErrorMsg);
	}
	else {
		scAjaxShowErrorDisplay_toast(sErrorId, sErrorMsg);
	}
} // scAjaxShowErrorDisplay

function scAjaxHideErrorDisplay(sErrorId, sErrorMsg) {
	if ("table" != sErrorId && !$("id_error_display_" + sErrorId + "_frame").hasClass('scFormToastDivFixed')) {
		scAjaxHideErrorDisplay_default(sErrorId, sErrorMsg);
	}
	else {
		scAjaxHideErrorDisplay_toast(sErrorId, sErrorMsg);
	}
} // scAjaxHideErrorDisplay

function scAjaxShowErrorDisplay_toast(sErrorId, sErrorMsg) {
	params = {type: 'error'};
	scJs_alert_sweetalert(sErrorMsg, function() { scAjaxHideErrorDisplay(sErrorId, sErrorMsg); }, scJs_sweetalert_params(params));
} // scAjaxShowErrorDisplay_toast

function scAjaxHideErrorDisplay_toast(sErrorId, bForce) {
	if (document.getElementById("id_error_display_" + sErrorId + "_frame")) {
		if (null == bForce) {
			bForce = true;
		}
		if (bForce) {
			var $oField = $('#id_sc_field_' + sErrorId);
			if (0 < $oField.length) {
				$oField.removeClass(sc_css_status);
			}
		}
	}
} // scAjaxHideErrorDisplay_toast

function scAjaxShowMessage(messageType) {
	scAjaxShowMessage_toast(true, messageType);
} // scAjaxShowMessage_toast

function scAjaxHideMessage() {
} // scAjaxHideMessage_toast

function scAjaxShowMessage_toast(isToast, messageType) {
	if (!oResp["msgDisplay"] || !oResp["msgDisplay"]["msgText"]) {
		return;
	}

	if (oResp["msgDisplay"]["toast"] || isToast) {
		_scAjaxShowMessageToast({title: scMsgDefTitle, message: oResp["msgDisplay"]["msgText"], isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, toastPos: "", type: messageType});
	}
	else {
		scJs_alert(oResp["msgDisplay"]["msgText"], scForm_cancel, {});
	}
} // scAjaxShowMessage_toast

function _scAjaxShowMessageToast(params) {
	var sweetAlertParams = {toast: true, showConfirmButton: false};

	if ("" != params["type"]) {
		sweetAlertParams["type"] = params["type"];
	}

	if ("" != params["title"]) {
		sweetAlertParams["title"] = scAjaxSpecCharParser(params["title"]);
	}

	if ("" != params["toastPos"]) {
		sweetAlertParams["position"] = params["toastPos"];
	}

	if (null == sweetAlertParams["position"]) {
		sweetAlertParams["position"] = "top-end";
	}

	if (null == sweetAlertParams["timer"]) {
		sweetAlertParams["timer"] = 3000;
	}

	scJs_alert_sweetalert(scAjaxSpecCharParser(params["message"]), scForm_cancel, scJs_sweetalert_params(sweetAlertParams));
} // _scAjaxShowMessageToast

function _scAjaxShowMessage(params) {
	if (params["isToast"]) {
		_scAjaxShowMessageToast(params);
	}
	else {
		if ("" != params["redirUrl"] && "" != params["redirTarget"]) {
            document.form_ajax_redir_2.action = params["redirUrl"];
            document.form_ajax_redir_2.target = params["redirTarget"];
            document.form_ajax_redir_2.nmgp_parms.value = params["redirParams"];
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
			callbackOk = function() { document.form_ajax_redir_2.submit(); };
		}
		else if ("" != params["redirUrl"] && "" == params["redirTarget"]) {
            document.form_ajax_redir_1.action = params["redirUrl"];
            document.form_ajax_redir_1.nmgp_parms.value = params["redirParams"];
			callbackOk = function() { document.form_ajax_redir_1.submit(); };
		}
		else {
			callbackOk = scForm_cancel;
		}

		var alertParams = {title: params["title"]};
		if (0 < params["width"]) {
			alertParams["width"] = params["width"];
		}
		if (0 < params["timeout"]) {
			alertParams["timer"] = params["timeout"] * 1000;
		}
		if (!params["showButton"]) {
			alertParams["showConfirmButton"] = false;
		}
		if ("" != params["buttonLabel"]) {
			alertParams["confirmButtonText"] = params["buttonLabel"];
		}
		if ("" != params["type"]) {
			alertParams["type"] = params["type"];
		}

		scJs_alert_sweetalert(params["message"], callbackOk, scJs_sweetalert_params(alertParams));
	}
} // _scAjaxShowMessage

<?php
$confirmButtonClass = '';
$cancelButtonClass  = '';
$confirmButtonFA    = '';
$cancelButtonFA     = '';
$confirmButtonFAPos = '';
$cancelButtonFAPos  = '';
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['style']) && '' != $this->arr_buttons['bsweetalert_ok']['style']) {
	$confirmButtonClass = 'scButton_' . $this->arr_buttons['bsweetalert_ok']['style'];
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['style']) && '' != $this->arr_buttons['bsweetalert_cancel']['style']) {
	$cancelButtonClass = 'scButton_' . $this->arr_buttons['bsweetalert_cancel']['style'];
}
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['fontawesomeicon']) && '' != $this->arr_buttons['bsweetalert_ok']['fontawesomeicon']) {
	$confirmButtonFA = $this->arr_buttons['bsweetalert_ok']['fontawesomeicon'];
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['fontawesomeicon']) && '' != $this->arr_buttons['bsweetalert_cancel']['fontawesomeicon']) {
	$cancelButtonFA = $this->arr_buttons['bsweetalert_cancel']['fontawesomeicon'];
}
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['display_position']) && 'img_right' != $this->arr_buttons['bsweetalert_ok']['display_position']) {
	$confirmButtonFAPos = 'text_right';
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['display_position']) && 'img_right' != $this->arr_buttons['bsweetalert_cancel']['display_position']) {
	$cancelButtonFAPos = 'text_right';
}
?>
function scJs_alert(message, callbackOk, params) {
	scJs_alert_sweetalert(message, callbackOk, scJs_sweetalert_params(params));
} // scJs_alert

function scJs_confirm(message, callbackOk, callbackCancel) {
	scJs_confirm_sweetalert(message, callbackOk, callbackCancel);
} // scJs_confirm

function scJs_alert_sweetalert(message, callbackOk, params) {
	var sweetAlertConfig;

	if (null == params) {
		params = {};
	}

	params['html'] = message;

	sweetAlertConfig = params;

	Swal.fire(sweetAlertConfig).then(function (result) {
		if (result.value) {
			if (typeof callbackOk == "function") {
				callbackOk();
			}
		}
		else if (result.dismiss == Swal.DismissReason.timer || result.dismiss == Swal.DismissReason.close) {
			Swal.close();
            $(".swal2-container.swal2-center.swal2-fade.swal2-shown").remove();
		}
        else {
            console.log(result.dismiss);
        }
	});
} // scJs_alert_sweetalert

function scJs_confirm_sweetalert(message, callbackOk, callbackCancel) {
	var sweetAlertConfig, params = {};

	params['html'] = message;
	params['type'] = 'question';
	params['showCancelButton'] = true;

	sweetAlertConfig = scJs_sweetalert_params(params);

	Swal.fire(sweetAlertConfig).then(function (result) {
		if (result.value) {
			callbackOk();
		}
		else if (result.dismiss === Swal.DismissReason.backdrop || result.dismiss === Swal.DismissReason.cancel || result.dismiss === Swal.DismissReason.esc) {
			callbackCancel();
		}
	});
} // scJs_confirm_sweetalert

function scJs_sweetalert_params(params) {
	var parName, confirmText, confirmFA, confirmPos, cancelText, cancelFA, cancelPos, sweetAlertConfig;

	sweetAlertConfig = {
		customClass: {
			popup: 'scSweetAlertPopup',
			header: 'scSweetAlertHeader',
			content: 'scSweetAlertMessage',
			confirmButton: '<?php echo $confirmButtonClass; ?>',
			cancelButton: '<?php echo $cancelButtonClass; ?>'
		}
	};

	confirmText = '<?php echo isset($this->arr_buttons['bsweetalert_ok']['value']) ? $this->arr_buttons['bsweetalert_ok']['value'] : $this->Ini->Nm_lang['lang_btns_cfrm'] ?>';
	confirmFA = '<?php echo $confirmButtonFA ?>';
	confirmPos = '<?php echo $confirmButtonFAPos ?>';
	cancelText = '<?php echo isset($this->arr_buttons['bsweetalert_cancel']['value']) ? $this->arr_buttons['bsweetalert_cancel']['value'] : $this->Ini->Nm_lang['lang_btns_cncl'] ?>';
	cancelFA = '<?php echo $cancelButtonFA ?>';
	cancelPos = '<?php echo $cancelButtonFAPos ?>';

	for (parName in params) {
		if ('confirmButtonText' == parName) {
			confirmText = params[parName];
		}
		else if ('confirmButtonFA' == parName) {
			confirmFA = params[parName];
		}
		else if ('confirmButtonFAPos' == parName) {
			confirmPos = params[parName];
		}
		else if ('cancelButtonText' == parName) {
			cancelText = params[parName];
		}
		else if ('cancelButtonFA' == parName) {
			cancelFA = params[parName];
		}
		else if ('cancelButtonFAPos' == parName) {
			cancelPos = params[parName];
		}
		else {
			sweetAlertConfig[parName] = params[parName];
		}
	}

	if ('' != confirmFA) {
		if ('text_right' == confirmPos) {
			confirmText = '<i class="fas ' + confirmFA + '"></i> ' + confirmText;
		}
		else {
			confirmText += ' <i class="fas ' + confirmFA + '"></i>';
		}
	}
	if ('' != cancelFA) {
		if ('text_right' == cancelPos) {
			cancelText = '<i class="fas ' + cancelFA + '"></i> ' + cancelText;
		}
		else {
			cancelText += ' <i class="fas ' + cancelFA + '"></i>';
		}
	}

	sweetAlertConfig['confirmButtonText'] = confirmText;
	sweetAlertConfig['cancelButtonText'] = cancelText;

	if (sweetAlertConfig['toast']) {
		sweetAlertConfig['showConfirmButton'] = false;
		sweetAlertConfig['showCancelButton'] = false;
		sweetAlertConfig['customClass']['popup'] = 'scToastPopup';
		sweetAlertConfig['customClass']['header'] = 'scToastHeader';
		sweetAlertConfig['customClass']['content'] = 'scToastMessage';
		if (null == sweetAlertConfig['timer']) {
			sweetAlertConfig['timer'] = 3000;
		}
		if (null == sweetAlertConfig["position"]) {
			sweetAlertConfig["position"] = "top-end";
		}
	}

	return sweetAlertConfig;
} // scJs_sweetalert_params

  // ---------- Form
  function do_ajax_form_activos_submit_form()
  {
    if (scEventControl_active("")) {
      setTimeout(function() { do_ajax_form_activos_submit_form(); }, 500);
      return;
    }
    scAjaxHideMessage();
    var var_id_actvo = scAjaxGetFieldHidden("id_actvo");
    var var_nmbre = scAjaxGetFieldText("nmbre");
    var var_cdgo = scAjaxGetFieldText("cdgo");
    var var_rfrncia = scAjaxGetFieldText("rfrncia");
    var var_srial = scAjaxGetFieldText("srial");
    var var_nmro_actvo = scAjaxGetFieldText("nmro_actvo");
    var var_alias = scAjaxGetFieldText("alias");
    var var_cdgo_qr = scAjaxGetFieldText("cdgo_qr");
    var var_cdgo_brras = scAjaxGetFieldText("cdgo_brras");
    var var_cdgo_rfid = scAjaxGetFieldText("cdgo_rfid");
    var var_cmpsto = scAjaxGetFieldSelect("cmpsto");
    var var_id_estdo = scAjaxGetFieldSelect("id_estdo");
    var var_id_clse = scAjaxGetFieldSelect("id_clse");
    var var_id_tpo = scAjaxGetFieldSelect("id_tpo");
    var var_id_mrca = scAjaxGetFieldSelect("id_mrca");
    var var_mdlo = scAjaxGetFieldText("mdlo");
    var var_id_fbrcnte = scAjaxGetFieldSelect("id_fbrcnte");
    var var_cnfbldad = scAjaxGetFieldText("cnfbldad");
    var var_id_nit_prvdor = scAjaxGetFieldSelect("id_nit_prvdor");
    var var_fcha_cmpra = scAjaxGetFieldText("fcha_cmpra");
    var var_fcha_arrnque = scAjaxGetFieldText("fcha_arrnque");
    var var_fcha_fin_grntia = scAjaxGetFieldText("fcha_fin_grntia");
    var var_vlor_cmpra1 = scAjaxGetFieldText("vlor_cmpra1");
    var var_id_mnda_cmpra1 = scAjaxGetFieldSelect("id_mnda_cmpra1");
    var var_vlor_cmpra2 = scAjaxGetFieldText("vlor_cmpra2");
    var var_id_mnda_cmpra2 = scAjaxGetFieldSelect("id_mnda_cmpra2");
    var var_id_area = scAjaxGetFieldSelect("id_area");
    var var_id_cntro_csto = scAjaxGetFieldText("id_cntro_csto");
    var var_id_ubccion = scAjaxGetFieldSelect("id_ubccion");
    var var_id_nit_rspnsble = scAjaxGetFieldSelect("id_nit_rspnsble");
    var var_id_cntdor = scAjaxGetFieldSelect("id_cntdor");
    var var_vlor_actual = scAjaxGetFieldText("vlor_actual");
    var var_fcha_lctra = scAjaxGetFieldText("fcha_lctra");
    var var_vlor_estndar = scAjaxGetFieldText("vlor_estndar");
    var var_id_tpo_mdcion = scAjaxGetFieldSelect("id_tpo_mdcion");
    var var_fto1 = scAjaxGetFieldText("fto1");
    var var_fto2 = scAjaxGetFieldText("fto2");
    var var_fto3 = scAjaxGetFieldText("fto3");
    var var_fto4 = scAjaxGetFieldText("fto4");
    var var_fto5 = scAjaxGetFieldText("fto5");
    var var_fto6 = scAjaxGetFieldText("fto6");
    var var_prmtro_oprcion = scAjaxGetFieldText("prmtro_oprcion");
    var var_nmbre_archvo_po = scAjaxGetFieldText("nmbre_archvo_po");
    var var_tmno_po = scAjaxGetFieldText("tmno_po");
    var var_fcha_rgstro = scAjaxGetFieldText("fcha_rgstro");
    var var_id_usrio = scAjaxGetFieldSelect("id_usrio");
    var var_fcha_actlzcion = scAjaxGetFieldText("fcha_actlzcion");
    var var_id_usrio_actlzcion = scAjaxGetFieldText("id_usrio_actlzcion");
    var var_fto1_ul_name = scAjaxSpecCharProtect(document.F1.fto1_ul_name.value);//.replace(/[+]/g, "__NM_PLUS__");
    var var_fto1_ul_type = document.F1.fto1_ul_type.value;
    var var_fto2_ul_name = scAjaxSpecCharProtect(document.F1.fto2_ul_name.value);//.replace(/[+]/g, "__NM_PLUS__");
    var var_fto2_ul_type = document.F1.fto2_ul_type.value;
    var var_fto3_ul_name = scAjaxSpecCharProtect(document.F1.fto3_ul_name.value);//.replace(/[+]/g, "__NM_PLUS__");
    var var_fto3_ul_type = document.F1.fto3_ul_type.value;
    var var_fto4_ul_name = scAjaxSpecCharProtect(document.F1.fto4_ul_name.value);//.replace(/[+]/g, "__NM_PLUS__");
    var var_fto4_ul_type = document.F1.fto4_ul_type.value;
    var var_fto5_ul_name = scAjaxSpecCharProtect(document.F1.fto5_ul_name.value);//.replace(/[+]/g, "__NM_PLUS__");
    var var_fto5_ul_type = document.F1.fto5_ul_type.value;
    var var_fto6_ul_name = scAjaxSpecCharProtect(document.F1.fto6_ul_name.value);//.replace(/[+]/g, "__NM_PLUS__");
    var var_fto6_ul_type = document.F1.fto6_ul_type.value;
    var var_prmtro_oprcion_ul_name = scAjaxSpecCharProtect(document.F1.prmtro_oprcion_ul_name.value);//.replace(/[+]/g, "__NM_PLUS__");
    var var_prmtro_oprcion_ul_type = document.F1.prmtro_oprcion_ul_type.value;
    var var_fto1_limpa = document.F1.fto1_limpa.checked ? "S" : "N";
    var var_fto2_limpa = document.F1.fto2_limpa.checked ? "S" : "N";
    var var_fto3_limpa = document.F1.fto3_limpa.checked ? "S" : "N";
    var var_fto4_limpa = document.F1.fto4_limpa.checked ? "S" : "N";
    var var_fto5_limpa = document.F1.fto5_limpa.checked ? "S" : "N";
    var var_fto6_limpa = document.F1.fto6_limpa.checked ? "S" : "N";
    var var_prmtro_oprcion_limpa = document.F1.prmtro_oprcion_limpa.checked ? "S" : "N";
    var var_nm_form_submit = document.F1.nm_form_submit.value;
    var var_nmgp_url_saida = document.F1.nmgp_url_saida.value;
    var var_nmgp_opcao = document.F1.nmgp_opcao.value;
    var var_nmgp_ancora = document.F1.nmgp_ancora.value;
    var var_nmgp_num_form = document.F1.nmgp_num_form.value;
    var var_nmgp_parms = document.F1.nmgp_parms.value;
    var var_script_case_init = document.F1.script_case_init.value;
    var var_csrf_token = scAjaxGetFieldText("csrf_token");
    scAjaxProcOn();
    x_ajax_form_activos_submit_form(var_id_actvo, var_nmbre, var_cdgo, var_rfrncia, var_srial, var_nmro_actvo, var_alias, var_cdgo_qr, var_cdgo_brras, var_cdgo_rfid, var_cmpsto, var_id_estdo, var_id_clse, var_id_tpo, var_id_mrca, var_mdlo, var_id_fbrcnte, var_cnfbldad, var_id_nit_prvdor, var_fcha_cmpra, var_fcha_arrnque, var_fcha_fin_grntia, var_vlor_cmpra1, var_id_mnda_cmpra1, var_vlor_cmpra2, var_id_mnda_cmpra2, var_id_area, var_id_cntro_csto, var_id_ubccion, var_id_nit_rspnsble, var_id_cntdor, var_vlor_actual, var_fcha_lctra, var_vlor_estndar, var_id_tpo_mdcion, var_fto1, var_fto2, var_fto3, var_fto4, var_fto5, var_fto6, var_prmtro_oprcion, var_nmbre_archvo_po, var_tmno_po, var_fcha_rgstro, var_id_usrio, var_fcha_actlzcion, var_id_usrio_actlzcion, var_fto1_ul_name, var_fto1_ul_type, var_fto2_ul_name, var_fto2_ul_type, var_fto3_ul_name, var_fto3_ul_type, var_fto4_ul_name, var_fto4_ul_type, var_fto5_ul_name, var_fto5_ul_type, var_fto6_ul_name, var_fto6_ul_type, var_prmtro_oprcion_ul_name, var_prmtro_oprcion_ul_type, var_fto1_limpa, var_fto2_limpa, var_fto3_limpa, var_fto4_limpa, var_fto5_limpa, var_fto6_limpa, var_prmtro_oprcion_limpa, var_nm_form_submit, var_nmgp_url_saida, var_nmgp_opcao, var_nmgp_ancora, var_nmgp_num_form, var_nmgp_parms, var_script_case_init, var_csrf_token, do_ajax_form_activos_submit_form_cb);
  } // do_ajax_form_activos_submit_form

  function do_ajax_form_activos_submit_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    scAjaxCalendarReload();
    scAjaxUpdateErrors("valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors || "menu_link" == document.F1.nmgp_opcao.value)
    {
      $('.sc-js-ui-statusimg').css('display', 'none');
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxError_markList();
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (scAjaxIsOk())
    {
      scAjaxShowMessage("success");
      scAjaxHideErrorDisplay("table");
      scAjaxHideErrorDisplay("id_actvo");
      scAjaxHideErrorDisplay("nmbre");
      scAjaxHideErrorDisplay("cdgo");
      scAjaxHideErrorDisplay("rfrncia");
      scAjaxHideErrorDisplay("srial");
      scAjaxHideErrorDisplay("nmro_actvo");
      scAjaxHideErrorDisplay("alias");
      scAjaxHideErrorDisplay("cdgo_qr");
      scAjaxHideErrorDisplay("cdgo_brras");
      scAjaxHideErrorDisplay("cdgo_rfid");
      scAjaxHideErrorDisplay("cmpsto");
      scAjaxHideErrorDisplay("id_estdo");
      scAjaxHideErrorDisplay("id_clse");
      scAjaxHideErrorDisplay("id_tpo");
      scAjaxHideErrorDisplay("id_mrca");
      scAjaxHideErrorDisplay("mdlo");
      scAjaxHideErrorDisplay("id_fbrcnte");
      scAjaxHideErrorDisplay("cnfbldad");
      scAjaxHideErrorDisplay("id_nit_prvdor");
      scAjaxHideErrorDisplay("fcha_cmpra");
      scAjaxHideErrorDisplay("fcha_arrnque");
      scAjaxHideErrorDisplay("fcha_fin_grntia");
      scAjaxHideErrorDisplay("vlor_cmpra1");
      scAjaxHideErrorDisplay("id_mnda_cmpra1");
      scAjaxHideErrorDisplay("vlor_cmpra2");
      scAjaxHideErrorDisplay("id_mnda_cmpra2");
      scAjaxHideErrorDisplay("id_area");
      scAjaxHideErrorDisplay("id_cntro_csto");
      scAjaxHideErrorDisplay("id_ubccion");
      scAjaxHideErrorDisplay("id_nit_rspnsble");
      scAjaxHideErrorDisplay("id_cntdor");
      scAjaxHideErrorDisplay("vlor_actual");
      scAjaxHideErrorDisplay("fcha_lctra");
      scAjaxHideErrorDisplay("vlor_estndar");
      scAjaxHideErrorDisplay("id_tpo_mdcion");
      scAjaxHideErrorDisplay("fto1");
      scAjaxHideErrorDisplay("fto2");
      scAjaxHideErrorDisplay("fto3");
      scAjaxHideErrorDisplay("fto4");
      scAjaxHideErrorDisplay("fto5");
      scAjaxHideErrorDisplay("fto6");
      scAjaxHideErrorDisplay("prmtro_oprcion");
      scAjaxHideErrorDisplay("nmbre_archvo_po");
      scAjaxHideErrorDisplay("tmno_po");
      scAjaxHideErrorDisplay("fcha_rgstro");
      scAjaxHideErrorDisplay("id_usrio");
      scAjaxHideErrorDisplay("fcha_actlzcion");
      scAjaxHideErrorDisplay("id_usrio_actlzcion");
      scLigEditLookupCall();
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['under_dashboard']) {
?>
      var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['parent_widget']; ?>']");
      if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.nm_gp_move) {
        dbParentFrame[0].contentWindow.nm_gp_move("igual");
      }
<?php
}
?>
    }
    Nm_Proc_Atualiz = false;
    if (!scAjaxHasError())
    {
      scAjaxSetFields(false);
      scAjaxSetVariables();
      scAjaxSetMaster();
      if (scInlineFormSend())
      {
        self.parent.tb_remove();
        return;
      }
      if (document.F1.fto1_limpa && document.F1.fto1_limpa.checked)
      {
        var oImgTemp = {0: {"value" : ""}};
        scAjaxSetFieldImage("fto1", oImgTemp, "", "", "", "N");
      }
      if (document.F1.fto2_limpa && document.F1.fto2_limpa.checked)
      {
        var oImgTemp = {0: {"value" : ""}};
        scAjaxSetFieldImage("fto2", oImgTemp, "", "", "", "N");
      }
      if (document.F1.fto3_limpa && document.F1.fto3_limpa.checked)
      {
        var oImgTemp = {0: {"value" : ""}};
        scAjaxSetFieldImage("fto3", oImgTemp, "", "", "", "N");
      }
      if (document.F1.fto4_limpa && document.F1.fto4_limpa.checked)
      {
        var oImgTemp = {0: {"value" : ""}};
        scAjaxSetFieldImage("fto4", oImgTemp, "", "", "", "N");
      }
      if (document.F1.fto5_limpa && document.F1.fto5_limpa.checked)
      {
        var oImgTemp = {0: {"value" : ""}};
        scAjaxSetFieldImage("fto5", oImgTemp, "", "", "", "N");
      }
      if (document.F1.fto6_limpa && document.F1.fto6_limpa.checked)
      {
        var oImgTemp = {0: {"value" : ""}};
        scAjaxSetFieldImage("fto6", oImgTemp, "", "", "", "N");
      }
      if (document.F1.prmtro_oprcion_limpa && document.F1.prmtro_oprcion_limpa.checked)
      {
        var oImgTemp = {0: {"value" : ""}};
        scAjaxSetFieldImage("prmtro_oprcion", oImgTemp, "", "", "", "N");
      }
    document.F1.fto1_ul_name.value = '';
    document.F1.fto1_ul_type.value = '';
    document.F1.fto2_ul_name.value = '';
    document.F1.fto2_ul_type.value = '';
    document.F1.fto3_ul_name.value = '';
    document.F1.fto3_ul_type.value = '';
    document.F1.fto4_ul_name.value = '';
    document.F1.fto4_ul_type.value = '';
    document.F1.fto5_ul_name.value = '';
    document.F1.fto5_ul_type.value = '';
    document.F1.fto6_ul_name.value = '';
    document.F1.fto6_ul_type.value = '';
    document.F1.prmtro_oprcion_ul_name.value = '';
    document.F1.prmtro_oprcion_ul_type.value = '';
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxAlert(do_ajax_form_activos_submit_form_cb_after_alert);
  } // do_ajax_form_activos_submit_form_cb
  function do_ajax_form_activos_submit_form_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
  } // do_ajax_form_activos_submit_form_cb_after_alert

  var scStatusDetail = {};

  function do_ajax_form_activos_navigate_form()
  {
    if (scRefreshTable())
    {
      return;
    }
    scAjaxHideMessage();
    scAjaxHideErrorDisplay("table");
    scAjaxHideErrorDisplay("id_actvo");
    scAjaxHideErrorDisplay("nmbre");
    scAjaxHideErrorDisplay("cdgo");
    scAjaxHideErrorDisplay("rfrncia");
    scAjaxHideErrorDisplay("srial");
    scAjaxHideErrorDisplay("nmro_actvo");
    scAjaxHideErrorDisplay("alias");
    scAjaxHideErrorDisplay("cdgo_qr");
    scAjaxHideErrorDisplay("cdgo_brras");
    scAjaxHideErrorDisplay("cdgo_rfid");
    scAjaxHideErrorDisplay("cmpsto");
    scAjaxHideErrorDisplay("id_estdo");
    scAjaxHideErrorDisplay("id_clse");
    scAjaxHideErrorDisplay("id_tpo");
    scAjaxHideErrorDisplay("id_mrca");
    scAjaxHideErrorDisplay("mdlo");
    scAjaxHideErrorDisplay("id_fbrcnte");
    scAjaxHideErrorDisplay("cnfbldad");
    scAjaxHideErrorDisplay("id_nit_prvdor");
    scAjaxHideErrorDisplay("fcha_cmpra");
    scAjaxHideErrorDisplay("fcha_arrnque");
    scAjaxHideErrorDisplay("fcha_fin_grntia");
    scAjaxHideErrorDisplay("vlor_cmpra1");
    scAjaxHideErrorDisplay("id_mnda_cmpra1");
    scAjaxHideErrorDisplay("vlor_cmpra2");
    scAjaxHideErrorDisplay("id_mnda_cmpra2");
    scAjaxHideErrorDisplay("id_area");
    scAjaxHideErrorDisplay("id_cntro_csto");
    scAjaxHideErrorDisplay("id_ubccion");
    scAjaxHideErrorDisplay("id_nit_rspnsble");
    scAjaxHideErrorDisplay("id_cntdor");
    scAjaxHideErrorDisplay("vlor_actual");
    scAjaxHideErrorDisplay("fcha_lctra");
    scAjaxHideErrorDisplay("vlor_estndar");
    scAjaxHideErrorDisplay("id_tpo_mdcion");
    scAjaxHideErrorDisplay("fto1");
    scAjaxHideErrorDisplay("fto2");
    scAjaxHideErrorDisplay("fto3");
    scAjaxHideErrorDisplay("fto4");
    scAjaxHideErrorDisplay("fto5");
    scAjaxHideErrorDisplay("fto6");
    scAjaxHideErrorDisplay("prmtro_oprcion");
    scAjaxHideErrorDisplay("nmbre_archvo_po");
    scAjaxHideErrorDisplay("tmno_po");
    scAjaxHideErrorDisplay("fcha_rgstro");
    scAjaxHideErrorDisplay("id_usrio");
    scAjaxHideErrorDisplay("fcha_actlzcion");
    scAjaxHideErrorDisplay("id_usrio_actlzcion");
    var var_id_actvo = document.F2.id_actvo.value;
    var var_nm_form_submit = document.F2.nm_form_submit.value;
    var var_nmgp_opcao = document.F2.nmgp_opcao.value;
    var var_nmgp_ordem = document.F2.nmgp_ordem.value;
    var var_nmgp_fast_search = document.F2.nmgp_fast_search.value;
    var var_nmgp_cond_fast_search = document.F2.nmgp_cond_fast_search.value;
    var var_nmgp_arg_fast_search = document.F2.nmgp_arg_fast_search.value;
    var var_nmgp_arg_dyn_search = document.F2.nmgp_arg_dyn_search.value;
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn();
    x_ajax_form_activos_navigate_form(var_id_actvo, var_nm_form_submit, var_nmgp_opcao, var_nmgp_ordem, var_nmgp_fast_search,  var_nmgp_cond_fast_search,  var_nmgp_arg_fast_search, var_nmgp_arg_dyn_search, var_script_case_init, do_ajax_form_activos_navigate_form_cb);
  } // do_ajax_form_activos_navigate_form

  var scMasterDetailParentIframe = "<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['dashboard_info']['parent_widget'] ?>";
  var scMasterDetailIframe = {};
<?php
foreach ($this->Ini->sc_lig_iframe as $tmp_i => $tmp_v)
{
?>
  scMasterDetailIframe["<?php echo $tmp_i; ?>"] = "<?php echo $tmp_v; ?>";
<?php
}
?>
  function do_ajax_form_activos_navigate_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    if (oResp['empty_filter'] && oResp['empty_filter'] == "ok")
    {
        document.F5.nmgp_opcao.value = "inicio";
        document.F5.nmgp_parms.value = "";
        document.F5.submit();
    }
    if ("ERROR" == oResp.result)
    {
        scAjaxShowErrorDisplay("table", oResp.errList[0].msgText);
        scAjaxProcOff();
        return;
    }
    else if (oResp["navSummary"].reg_tot == 0)
    {
       scAjax_displayEmptyForm();
    }
    scAjaxClearErrors()
    sc_mupload_ok = true;
    scAjaxSetFields(false);
    scAjaxSetVariables();
    document.F2.id_actvo.value = scAjaxGetKeyValue("id_actvo");
    scAjaxSetSummary();
    scAjaxSetNavpage();
    scAjaxShowDebug();
    scAjaxSetLabel(true);
    scAjaxSetReadonly(true);
    scAjaxSetMaster();
    scAjaxSetNavStatus("t");
    scAjaxSetNavStatus("b");
    scAjaxSetDisplay(true);
    document.F1.fto1_ul_name.value = '';
    document.F1.fto1_ul_type.value = '';
    document.F1.fto2_ul_name.value = '';
    document.F1.fto2_ul_type.value = '';
    document.F1.fto3_ul_name.value = '';
    document.F1.fto3_ul_type.value = '';
    document.F1.fto4_ul_name.value = '';
    document.F1.fto4_ul_type.value = '';
    document.F1.fto5_ul_name.value = '';
    document.F1.fto5_ul_type.value = '';
    document.F1.fto6_ul_name.value = '';
    document.F1.fto6_ul_type.value = '';
    document.F1.prmtro_oprcion_ul_name.value = '';
    document.F1.prmtro_oprcion_ul_type.value = '';
    scAjaxSetBtnVars();
    $('.sc-js-ui-statusimg').css('display', 'none');
    scAjaxAlert(do_ajax_form_activos_navigate_form_cb_after_alert);
  } // do_ajax_form_activos_navigate_form_cb
  function do_ajax_form_activos_navigate_form_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scQSInit = true;
    scQSInitVal = $("#SC_fast_search_t").val();
    scQuickSearchKeyUp('t', null);
    $('#SC_fast_search_t').blur();
    scQuickSearchInit(true, '');
    scQSInit = false;
    scAjaxSetFocus();
<?php
if ($this->Embutida_form)
{
?>
    do_ajax_form_activos_restore_buttons();
<?php
}
?>
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
  } // do_ajax_form_activos_navigate_form_cb_after_alert
  function sc_hide_form_activos_form()
  {
    for (var block_id in ajax_block_id) {
      $("#div_" + ajax_block_id[block_id]).hide();
    }
  } // sc_hide_form_activos_form


  function scAjaxDetailProc()
  {
    return true;
  } // scAjaxDetailProc


  var ajax_error_geral = "";

  var ajax_error_type = new Array("valid", "onblur", "onchange", "onclick", "onfocus");

  var ajax_field_list = new Array();
  var ajax_field_Dt_Hr = new Array();
  ajax_field_list[0] = "id_actvo";
  ajax_field_list[1] = "nmbre";
  ajax_field_list[2] = "cdgo";
  ajax_field_list[3] = "rfrncia";
  ajax_field_list[4] = "srial";
  ajax_field_list[5] = "nmro_actvo";
  ajax_field_list[6] = "alias";
  ajax_field_list[7] = "cdgo_qr";
  ajax_field_list[8] = "cdgo_brras";
  ajax_field_list[9] = "cdgo_rfid";
  ajax_field_list[10] = "cmpsto";
  ajax_field_list[11] = "id_estdo";
  ajax_field_list[12] = "id_clse";
  ajax_field_list[13] = "id_tpo";
  ajax_field_list[14] = "id_mrca";
  ajax_field_list[15] = "mdlo";
  ajax_field_list[16] = "id_fbrcnte";
  ajax_field_list[17] = "cnfbldad";
  ajax_field_list[18] = "id_nit_prvdor";
  ajax_field_list[19] = "fcha_cmpra";
  ajax_field_list[20] = "fcha_arrnque";
  ajax_field_list[21] = "fcha_fin_grntia";
  ajax_field_list[22] = "vlor_cmpra1";
  ajax_field_list[23] = "id_mnda_cmpra1";
  ajax_field_list[24] = "vlor_cmpra2";
  ajax_field_list[25] = "id_mnda_cmpra2";
  ajax_field_list[26] = "id_area";
  ajax_field_list[27] = "id_cntro_csto";
  ajax_field_list[28] = "id_ubccion";
  ajax_field_list[29] = "id_nit_rspnsble";
  ajax_field_list[30] = "id_cntdor";
  ajax_field_list[31] = "vlor_actual";
  ajax_field_list[32] = "fcha_lctra";
  ajax_field_list[33] = "vlor_estndar";
  ajax_field_list[34] = "id_tpo_mdcion";
  ajax_field_list[35] = "fto1";
  ajax_field_list[36] = "fto2";
  ajax_field_list[37] = "fto3";
  ajax_field_list[38] = "fto4";
  ajax_field_list[39] = "fto5";
  ajax_field_list[40] = "fto6";
  ajax_field_list[41] = "prmtro_oprcion";
  ajax_field_list[42] = "nmbre_archvo_po";
  ajax_field_list[43] = "tmno_po";
  ajax_field_list[44] = "fcha_rgstro";
  ajax_field_list[45] = "id_usrio";
  ajax_field_list[46] = "fcha_actlzcion";
  ajax_field_list[47] = "id_usrio_actlzcion";

  var ajax_block_list = new Array();
  ajax_block_list[0] = "0";

  var ajax_error_list = {
    "id_actvo": {"label": "ID ACTVO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nmbre": {"label": "NMBRE", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cdgo": {"label": "CDGO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "rfrncia": {"label": "RFRNCIA", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "srial": {"label": "SRIAL", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nmro_actvo": {"label": "NMRO ACTVO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "alias": {"label": "ALIAS", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cdgo_qr": {"label": "CDGO QR", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cdgo_brras": {"label": "CDGO BRRAS", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cdgo_rfid": {"label": "CDGO RFID", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cmpsto": {"label": "CMPSTO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_estdo": {"label": "ID ESTDO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_clse": {"label": "ID CLSE", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_tpo": {"label": "ID TPO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_mrca": {"label": "ID MRCA", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "mdlo": {"label": "MDLO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_fbrcnte": {"label": "ID FBRCNTE", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cnfbldad": {"label": "CNFBLDAD", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_nit_prvdor": {"label": "ID NIT PRVDOR", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fcha_cmpra": {"label": "FCHA CMPRA", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fcha_arrnque": {"label": "FCHA ARRNQUE", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fcha_fin_grntia": {"label": "FCHA FIN GRNTIA", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "vlor_cmpra1": {"label": "VLOR CMPRA1", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_mnda_cmpra1": {"label": "ID MNDA CMPRA1", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "vlor_cmpra2": {"label": "VLOR CMPRA2", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_mnda_cmpra2": {"label": "ID MNDA CMPRA2", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_area": {"label": "ID AREA", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_cntro_csto": {"label": "ID CNTRO CSTO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_ubccion": {"label": "ID UBCCION", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_nit_rspnsble": {"label": "ID NIT RSPNSBLE", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_cntdor": {"label": "ID CNTDOR", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "vlor_actual": {"label": "VLOR ACTUAL", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fcha_lctra": {"label": "FCHA LCTRA", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "vlor_estndar": {"label": "VLOR ESTNDAR", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_tpo_mdcion": {"label": "ID TPO MDCION", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fto1": {"label": "FTO1", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fto2": {"label": "FTO2", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fto3": {"label": "FTO3", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fto4": {"label": "FTO4", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fto5": {"label": "FTO5", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fto6": {"label": "FTO6", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "prmtro_oprcion": {"label": "PRMTRO OPRCION", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nmbre_archvo_po": {"label": "NMBRE ARCHVO PO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "tmno_po": {"label": "TMNO PO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fcha_rgstro": {"label": "FCHA RGSTRO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_usrio": {"label": "ID USRIO", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "fcha_actlzcion": {"label": "FCHA ACTLZCION", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_usrio_actlzcion": {"label": "ID USRIO ACTLZCION", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5}
  };
  var ajax_error_timeout = 5;

  var ajax_block_id = {
    "0": "hidden_bloco_0"
  };

  var ajax_block_tab = {
    "hidden_bloco_0": ""
  };

  var ajax_field_mult = {
    "id_actvo": new Array(),
    "nmbre": new Array(),
    "cdgo": new Array(),
    "rfrncia": new Array(),
    "srial": new Array(),
    "nmro_actvo": new Array(),
    "alias": new Array(),
    "cdgo_qr": new Array(),
    "cdgo_brras": new Array(),
    "cdgo_rfid": new Array(),
    "cmpsto": new Array(),
    "id_estdo": new Array(),
    "id_clse": new Array(),
    "id_tpo": new Array(),
    "id_mrca": new Array(),
    "mdlo": new Array(),
    "id_fbrcnte": new Array(),
    "cnfbldad": new Array(),
    "id_nit_prvdor": new Array(),
    "fcha_cmpra": new Array(),
    "fcha_arrnque": new Array(),
    "fcha_fin_grntia": new Array(),
    "vlor_cmpra1": new Array(),
    "id_mnda_cmpra1": new Array(),
    "vlor_cmpra2": new Array(),
    "id_mnda_cmpra2": new Array(),
    "id_area": new Array(),
    "id_cntro_csto": new Array(),
    "id_ubccion": new Array(),
    "id_nit_rspnsble": new Array(),
    "id_cntdor": new Array(),
    "vlor_actual": new Array(),
    "fcha_lctra": new Array(),
    "vlor_estndar": new Array(),
    "id_tpo_mdcion": new Array(),
    "fto1": new Array(),
    "fto2": new Array(),
    "fto3": new Array(),
    "fto4": new Array(),
    "fto5": new Array(),
    "fto6": new Array(),
    "prmtro_oprcion": new Array(),
    "nmbre_archvo_po": new Array(),
    "tmno_po": new Array(),
    "fcha_rgstro": new Array(),
    "id_usrio": new Array(),
    "fcha_actlzcion": new Array(),
    "id_usrio_actlzcion": new Array()
  };
  ajax_field_mult["id_actvo"][1] = "id_actvo";
  ajax_field_mult["nmbre"][1] = "nmbre";
  ajax_field_mult["cdgo"][1] = "cdgo";
  ajax_field_mult["rfrncia"][1] = "rfrncia";
  ajax_field_mult["srial"][1] = "srial";
  ajax_field_mult["nmro_actvo"][1] = "nmro_actvo";
  ajax_field_mult["alias"][1] = "alias";
  ajax_field_mult["cdgo_qr"][1] = "cdgo_qr";
  ajax_field_mult["cdgo_brras"][1] = "cdgo_brras";
  ajax_field_mult["cdgo_rfid"][1] = "cdgo_rfid";
  ajax_field_mult["cmpsto"][1] = "cmpsto";
  ajax_field_mult["id_estdo"][1] = "id_estdo";
  ajax_field_mult["id_clse"][1] = "id_clse";
  ajax_field_mult["id_tpo"][1] = "id_tpo";
  ajax_field_mult["id_mrca"][1] = "id_mrca";
  ajax_field_mult["mdlo"][1] = "mdlo";
  ajax_field_mult["id_fbrcnte"][1] = "id_fbrcnte";
  ajax_field_mult["cnfbldad"][1] = "cnfbldad";
  ajax_field_mult["id_nit_prvdor"][1] = "id_nit_prvdor";
  ajax_field_mult["fcha_cmpra"][1] = "fcha_cmpra";
  ajax_field_mult["fcha_arrnque"][1] = "fcha_arrnque";
  ajax_field_mult["fcha_fin_grntia"][1] = "fcha_fin_grntia";
  ajax_field_mult["vlor_cmpra1"][1] = "vlor_cmpra1";
  ajax_field_mult["id_mnda_cmpra1"][1] = "id_mnda_cmpra1";
  ajax_field_mult["vlor_cmpra2"][1] = "vlor_cmpra2";
  ajax_field_mult["id_mnda_cmpra2"][1] = "id_mnda_cmpra2";
  ajax_field_mult["id_area"][1] = "id_area";
  ajax_field_mult["id_cntro_csto"][1] = "id_cntro_csto";
  ajax_field_mult["id_ubccion"][1] = "id_ubccion";
  ajax_field_mult["id_nit_rspnsble"][1] = "id_nit_rspnsble";
  ajax_field_mult["id_cntdor"][1] = "id_cntdor";
  ajax_field_mult["vlor_actual"][1] = "vlor_actual";
  ajax_field_mult["fcha_lctra"][1] = "fcha_lctra";
  ajax_field_mult["vlor_estndar"][1] = "vlor_estndar";
  ajax_field_mult["id_tpo_mdcion"][1] = "id_tpo_mdcion";
  ajax_field_mult["fto1"][1] = "fto1";
  ajax_field_mult["fto2"][1] = "fto2";
  ajax_field_mult["fto3"][1] = "fto3";
  ajax_field_mult["fto4"][1] = "fto4";
  ajax_field_mult["fto5"][1] = "fto5";
  ajax_field_mult["fto6"][1] = "fto6";
  ajax_field_mult["prmtro_oprcion"][1] = "prmtro_oprcion";
  ajax_field_mult["nmbre_archvo_po"][1] = "nmbre_archvo_po";
  ajax_field_mult["tmno_po"][1] = "tmno_po";
  ajax_field_mult["fcha_rgstro"][1] = "fcha_rgstro";
  ajax_field_mult["id_usrio"][1] = "id_usrio";
  ajax_field_mult["fcha_actlzcion"][1] = "fcha_actlzcion";
  ajax_field_mult["id_usrio_actlzcion"][1] = "id_usrio_actlzcion";

  var ajax_field_id = {
    "id_actvo": new Array("hidden_field_label_id_actvo", "hidden_field_data_id_actvo"),
    "nmbre": new Array("hidden_field_label_nmbre", "hidden_field_data_nmbre"),
    "cdgo": new Array("hidden_field_label_cdgo", "hidden_field_data_cdgo"),
    "rfrncia": new Array("hidden_field_label_rfrncia", "hidden_field_data_rfrncia"),
    "srial": new Array("hidden_field_label_srial", "hidden_field_data_srial"),
    "nmro_actvo": new Array("hidden_field_label_nmro_actvo", "hidden_field_data_nmro_actvo"),
    "alias": new Array("hidden_field_label_alias", "hidden_field_data_alias"),
    "cdgo_qr": new Array("hidden_field_label_cdgo_qr", "hidden_field_data_cdgo_qr"),
    "cdgo_brras": new Array("hidden_field_label_cdgo_brras", "hidden_field_data_cdgo_brras"),
    "cdgo_rfid": new Array("hidden_field_label_cdgo_rfid", "hidden_field_data_cdgo_rfid"),
    "cmpsto": new Array("hidden_field_label_cmpsto", "hidden_field_data_cmpsto"),
    "id_estdo": new Array("hidden_field_label_id_estdo", "hidden_field_data_id_estdo"),
    "id_clse": new Array("hidden_field_label_id_clse", "hidden_field_data_id_clse"),
    "id_tpo": new Array("hidden_field_label_id_tpo", "hidden_field_data_id_tpo"),
    "id_mrca": new Array("hidden_field_label_id_mrca", "hidden_field_data_id_mrca"),
    "mdlo": new Array("hidden_field_label_mdlo", "hidden_field_data_mdlo"),
    "id_fbrcnte": new Array("hidden_field_label_id_fbrcnte", "hidden_field_data_id_fbrcnte"),
    "cnfbldad": new Array("hidden_field_label_cnfbldad", "hidden_field_data_cnfbldad"),
    "id_nit_prvdor": new Array("hidden_field_label_id_nit_prvdor", "hidden_field_data_id_nit_prvdor"),
    "fcha_cmpra": new Array("hidden_field_label_fcha_cmpra", "hidden_field_data_fcha_cmpra"),
    "fcha_arrnque": new Array("hidden_field_label_fcha_arrnque", "hidden_field_data_fcha_arrnque"),
    "fcha_fin_grntia": new Array("hidden_field_label_fcha_fin_grntia", "hidden_field_data_fcha_fin_grntia"),
    "vlor_cmpra1": new Array("hidden_field_label_vlor_cmpra1", "hidden_field_data_vlor_cmpra1"),
    "id_mnda_cmpra1": new Array("hidden_field_label_id_mnda_cmpra1", "hidden_field_data_id_mnda_cmpra1"),
    "vlor_cmpra2": new Array("hidden_field_label_vlor_cmpra2", "hidden_field_data_vlor_cmpra2"),
    "id_mnda_cmpra2": new Array("hidden_field_label_id_mnda_cmpra2", "hidden_field_data_id_mnda_cmpra2"),
    "id_area": new Array("hidden_field_label_id_area", "hidden_field_data_id_area"),
    "id_cntro_csto": new Array("hidden_field_label_id_cntro_csto", "hidden_field_data_id_cntro_csto"),
    "id_ubccion": new Array("hidden_field_label_id_ubccion", "hidden_field_data_id_ubccion"),
    "id_nit_rspnsble": new Array("hidden_field_label_id_nit_rspnsble", "hidden_field_data_id_nit_rspnsble"),
    "id_cntdor": new Array("hidden_field_label_id_cntdor", "hidden_field_data_id_cntdor"),
    "vlor_actual": new Array("hidden_field_label_vlor_actual", "hidden_field_data_vlor_actual"),
    "fcha_lctra": new Array("hidden_field_label_fcha_lctra", "hidden_field_data_fcha_lctra"),
    "vlor_estndar": new Array("hidden_field_label_vlor_estndar", "hidden_field_data_vlor_estndar"),
    "id_tpo_mdcion": new Array("hidden_field_label_id_tpo_mdcion", "hidden_field_data_id_tpo_mdcion"),
    "fto1": new Array("hidden_field_label_fto1", "hidden_field_data_fto1"),
    "fto2": new Array("hidden_field_label_fto2", "hidden_field_data_fto2"),
    "fto3": new Array("hidden_field_label_fto3", "hidden_field_data_fto3"),
    "fto4": new Array("hidden_field_label_fto4", "hidden_field_data_fto4"),
    "fto5": new Array("hidden_field_label_fto5", "hidden_field_data_fto5"),
    "fto6": new Array("hidden_field_label_fto6", "hidden_field_data_fto6"),
    "prmtro_oprcion": new Array("hidden_field_label_prmtro_oprcion", "hidden_field_data_prmtro_oprcion"),
    "nmbre_archvo_po": new Array("hidden_field_label_nmbre_archvo_po", "hidden_field_data_nmbre_archvo_po"),
    "tmno_po": new Array("hidden_field_label_tmno_po", "hidden_field_data_tmno_po"),
    "fcha_rgstro": new Array("hidden_field_label_fcha_rgstro", "hidden_field_data_fcha_rgstro"),
    "id_usrio": new Array("hidden_field_label_id_usrio", "hidden_field_data_id_usrio"),
    "fcha_actlzcion": new Array("hidden_field_label_fcha_actlzcion", "hidden_field_data_fcha_actlzcion"),
    "id_usrio_actlzcion": new Array("hidden_field_label_id_usrio_actlzcion", "hidden_field_data_id_usrio_actlzcion")
  };

  var ajax_read_only = {
    "id_actvo": "on",
    "nmbre": "off",
    "cdgo": "off",
    "rfrncia": "off",
    "srial": "off",
    "nmro_actvo": "off",
    "alias": "off",
    "cdgo_qr": "off",
    "cdgo_brras": "off",
    "cdgo_rfid": "off",
    "cmpsto": "off",
    "id_estdo": "off",
    "id_clse": "off",
    "id_tpo": "off",
    "id_mrca": "off",
    "mdlo": "off",
    "id_fbrcnte": "off",
    "cnfbldad": "off",
    "id_nit_prvdor": "off",
    "fcha_cmpra": "off",
    "fcha_arrnque": "off",
    "fcha_fin_grntia": "off",
    "vlor_cmpra1": "off",
    "id_mnda_cmpra1": "off",
    "vlor_cmpra2": "off",
    "id_mnda_cmpra2": "off",
    "id_area": "off",
    "id_cntro_csto": "off",
    "id_ubccion": "off",
    "id_nit_rspnsble": "off",
    "id_cntdor": "off",
    "vlor_actual": "off",
    "fcha_lctra": "off",
    "vlor_estndar": "off",
    "id_tpo_mdcion": "off",
    "fto1": "off",
    "fto2": "off",
    "fto3": "off",
    "fto4": "off",
    "fto5": "off",
    "fto6": "off",
    "prmtro_oprcion": "off",
    "nmbre_archvo_po": "off",
    "tmno_po": "off",
    "fcha_rgstro": "off",
    "id_usrio": "off",
    "fcha_actlzcion": "off",
    "id_usrio_actlzcion": "off"
  };
  var bRefreshTable = false;
  function scRefreshTable()
  {
    return false;
  }

  function scAjaxDetailValue(sIndex, sValue)
  {
    var aValue = new Array();
    aValue[0] = {"value" : sValue};
    if ("id_actvo" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("nmbre" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("cdgo" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("rfrncia" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("srial" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("nmro_actvo" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("alias" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("cdgo_qr" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("cdgo_brras" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("cdgo_rfid" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("cmpsto" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_estdo" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_clse" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_tpo" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_mrca" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("mdlo" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_fbrcnte" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("cnfbldad" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_nit_prvdor" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fcha_cmpra" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fcha_arrnque" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fcha_fin_grntia" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("vlor_cmpra1" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_mnda_cmpra1" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("vlor_cmpra2" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_mnda_cmpra2" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_area" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_cntro_csto" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_ubccion" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_nit_rspnsble" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_cntdor" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("vlor_actual" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fcha_lctra" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("vlor_estndar" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_tpo_mdcion" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fto1" == sIndex)
    {
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fto2" == sIndex)
    {
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fto3" == sIndex)
    {
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fto4" == sIndex)
    {
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fto5" == sIndex)
    {
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fto6" == sIndex)
    {
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("prmtro_oprcion" == sIndex)
    {
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("nmbre_archvo_po" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("tmno_po" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fcha_rgstro" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_usrio" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("fcha_actlzcion" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("id_usrio_actlzcion" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    scAjaxSetFieldInnerHtml(sIndex, aValue);
  }
 </SCRIPT>
