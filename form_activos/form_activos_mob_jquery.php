
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["id_actvo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nmbre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cdgo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["rfrncia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["srial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nmro_actvo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["alias" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cdgo_qr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cdgo_brras" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cdgo_rfid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cmpsto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_estdo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_clse" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_tpo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_mrca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mdlo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_fbrcnte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cnfbldad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_nit_prvdor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fcha_cmpra" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fcha_arrnque" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fcha_fin_grntia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["vlor_cmpra1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_mnda_cmpra1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["vlor_cmpra2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_mnda_cmpra2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_area" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_cntro_csto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_ubccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_nit_rspnsble" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_cntdor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["vlor_actual" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fcha_lctra" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["vlor_estndar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_tpo_mdcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fto1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fto2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fto3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fto4" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fto5" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fto6" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prmtro_oprcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nmbre_archvo_po" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tmno_po" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fcha_rgstro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_usrio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fcha_actlzcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_usrio_actlzcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_actvo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_actvo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nmbre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nmbre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cdgo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cdgo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rfrncia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rfrncia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["srial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["srial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nmro_actvo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nmro_actvo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["alias" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["alias" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cdgo_qr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cdgo_qr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cdgo_brras" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cdgo_brras" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cdgo_rfid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cdgo_rfid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cmpsto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cmpsto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_estdo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_estdo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_clse" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_clse" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_tpo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_tpo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_mrca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_mrca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mdlo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mdlo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_fbrcnte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_fbrcnte" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cnfbldad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cnfbldad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_nit_prvdor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_nit_prvdor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fcha_cmpra" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fcha_cmpra" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fcha_arrnque" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fcha_arrnque" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fcha_fin_grntia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fcha_fin_grntia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["vlor_cmpra1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["vlor_cmpra1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_mnda_cmpra1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_mnda_cmpra1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["vlor_cmpra2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["vlor_cmpra2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_mnda_cmpra2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_mnda_cmpra2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_area" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_area" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_cntro_csto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_cntro_csto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_ubccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_ubccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_nit_rspnsble" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_nit_rspnsble" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_cntdor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_cntdor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["vlor_actual" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["vlor_actual" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fcha_lctra" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fcha_lctra" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["vlor_estndar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["vlor_estndar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_tpo_mdcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_tpo_mdcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nmbre_archvo_po" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nmbre_archvo_po" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tmno_po" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tmno_po" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fcha_rgstro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fcha_rgstro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_usrio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_usrio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fcha_actlzcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fcha_actlzcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_usrio_actlzcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_usrio_actlzcion" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("cmpsto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_estdo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_clse" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_tpo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_mrca" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_fbrcnte" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_nit_prvdor" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_mnda_cmpra1" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_mnda_cmpra2" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_area" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_ubccion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_nit_rspnsble" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_cntdor" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_tpo_mdcion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_usrio" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_id_actvo' + iSeqRow).bind('blur', function() { sc_form_activos_id_actvo_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_activos_id_actvo_onfocus(this, iSeqRow) });
  $('#id_sc_field_nmbre' + iSeqRow).bind('blur', function() { sc_form_activos_nmbre_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_activos_nmbre_onfocus(this, iSeqRow) });
  $('#id_sc_field_cdgo' + iSeqRow).bind('blur', function() { sc_form_activos_cdgo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_activos_cdgo_onfocus(this, iSeqRow) });
  $('#id_sc_field_rfrncia' + iSeqRow).bind('blur', function() { sc_form_activos_rfrncia_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_activos_rfrncia_onfocus(this, iSeqRow) });
  $('#id_sc_field_srial' + iSeqRow).bind('blur', function() { sc_form_activos_srial_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_activos_srial_onfocus(this, iSeqRow) });
  $('#id_sc_field_nmro_actvo' + iSeqRow).bind('blur', function() { sc_form_activos_nmro_actvo_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_activos_nmro_actvo_onfocus(this, iSeqRow) });
  $('#id_sc_field_alias' + iSeqRow).bind('blur', function() { sc_form_activos_alias_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_activos_alias_onfocus(this, iSeqRow) });
  $('#id_sc_field_cdgo_qr' + iSeqRow).bind('blur', function() { sc_form_activos_cdgo_qr_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_activos_cdgo_qr_onfocus(this, iSeqRow) });
  $('#id_sc_field_cdgo_brras' + iSeqRow).bind('blur', function() { sc_form_activos_cdgo_brras_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_activos_cdgo_brras_onfocus(this, iSeqRow) });
  $('#id_sc_field_cdgo_rfid' + iSeqRow).bind('blur', function() { sc_form_activos_cdgo_rfid_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_activos_cdgo_rfid_onfocus(this, iSeqRow) });
  $('#id_sc_field_cmpsto' + iSeqRow).bind('blur', function() { sc_form_activos_cmpsto_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_activos_cmpsto_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_estdo' + iSeqRow).bind('blur', function() { sc_form_activos_id_estdo_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_activos_id_estdo_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_clse' + iSeqRow).bind('blur', function() { sc_form_activos_id_clse_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_activos_id_clse_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_tpo' + iSeqRow).bind('blur', function() { sc_form_activos_id_tpo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_activos_id_tpo_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_mrca' + iSeqRow).bind('blur', function() { sc_form_activos_id_mrca_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_activos_id_mrca_onfocus(this, iSeqRow) });
  $('#id_sc_field_mdlo' + iSeqRow).bind('blur', function() { sc_form_activos_mdlo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_activos_mdlo_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_fbrcnte' + iSeqRow).bind('blur', function() { sc_form_activos_id_fbrcnte_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_activos_id_fbrcnte_onfocus(this, iSeqRow) });
  $('#id_sc_field_cnfbldad' + iSeqRow).bind('blur', function() { sc_form_activos_cnfbldad_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_activos_cnfbldad_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_nit_prvdor' + iSeqRow).bind('blur', function() { sc_form_activos_id_nit_prvdor_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_activos_id_nit_prvdor_onfocus(this, iSeqRow) });
  $('#id_sc_field_fcha_cmpra' + iSeqRow).bind('blur', function() { sc_form_activos_fcha_cmpra_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_activos_fcha_cmpra_onfocus(this, iSeqRow) });
  $('#id_sc_field_fcha_arrnque' + iSeqRow).bind('blur', function() { sc_form_activos_fcha_arrnque_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_activos_fcha_arrnque_onfocus(this, iSeqRow) });
  $('#id_sc_field_fcha_fin_grntia' + iSeqRow).bind('blur', function() { sc_form_activos_fcha_fin_grntia_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_activos_fcha_fin_grntia_onfocus(this, iSeqRow) });
  $('#id_sc_field_vlor_cmpra1' + iSeqRow).bind('blur', function() { sc_form_activos_vlor_cmpra1_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_activos_vlor_cmpra1_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_mnda_cmpra1' + iSeqRow).bind('blur', function() { sc_form_activos_id_mnda_cmpra1_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_activos_id_mnda_cmpra1_onfocus(this, iSeqRow) });
  $('#id_sc_field_vlor_cmpra2' + iSeqRow).bind('blur', function() { sc_form_activos_vlor_cmpra2_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_activos_vlor_cmpra2_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_mnda_cmpra2' + iSeqRow).bind('blur', function() { sc_form_activos_id_mnda_cmpra2_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_activos_id_mnda_cmpra2_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_area' + iSeqRow).bind('blur', function() { sc_form_activos_id_area_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_activos_id_area_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_cntro_csto' + iSeqRow).bind('blur', function() { sc_form_activos_id_cntro_csto_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_activos_id_cntro_csto_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_ubccion' + iSeqRow).bind('blur', function() { sc_form_activos_id_ubccion_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_activos_id_ubccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_nit_rspnsble' + iSeqRow).bind('blur', function() { sc_form_activos_id_nit_rspnsble_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_activos_id_nit_rspnsble_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_cntdor' + iSeqRow).bind('blur', function() { sc_form_activos_id_cntdor_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_activos_id_cntdor_onfocus(this, iSeqRow) });
  $('#id_sc_field_vlor_actual' + iSeqRow).bind('blur', function() { sc_form_activos_vlor_actual_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_activos_vlor_actual_onfocus(this, iSeqRow) });
  $('#id_sc_field_fcha_lctra' + iSeqRow).bind('blur', function() { sc_form_activos_fcha_lctra_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_activos_fcha_lctra_onfocus(this, iSeqRow) });
  $('#id_sc_field_vlor_estndar' + iSeqRow).bind('blur', function() { sc_form_activos_vlor_estndar_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_activos_vlor_estndar_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_tpo_mdcion' + iSeqRow).bind('blur', function() { sc_form_activos_id_tpo_mdcion_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_activos_id_tpo_mdcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_fto1' + iSeqRow).bind('blur', function() { sc_form_activos_fto1_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_activos_fto1_onfocus(this, iSeqRow) });
  $('#id_sc_field_fto2' + iSeqRow).bind('blur', function() { sc_form_activos_fto2_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_activos_fto2_onfocus(this, iSeqRow) });
  $('#id_sc_field_fto3' + iSeqRow).bind('blur', function() { sc_form_activos_fto3_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_activos_fto3_onfocus(this, iSeqRow) });
  $('#id_sc_field_fto4' + iSeqRow).bind('blur', function() { sc_form_activos_fto4_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_activos_fto4_onfocus(this, iSeqRow) });
  $('#id_sc_field_fto5' + iSeqRow).bind('blur', function() { sc_form_activos_fto5_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_activos_fto5_onfocus(this, iSeqRow) });
  $('#id_sc_field_fto6' + iSeqRow).bind('blur', function() { sc_form_activos_fto6_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_activos_fto6_onfocus(this, iSeqRow) });
  $('#id_sc_field_prmtro_oprcion' + iSeqRow).bind('blur', function() { sc_form_activos_prmtro_oprcion_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_activos_prmtro_oprcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_nmbre_archvo_po' + iSeqRow).bind('blur', function() { sc_form_activos_nmbre_archvo_po_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_activos_nmbre_archvo_po_onfocus(this, iSeqRow) });
  $('#id_sc_field_tmno_po' + iSeqRow).bind('blur', function() { sc_form_activos_tmno_po_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_activos_tmno_po_onfocus(this, iSeqRow) });
  $('#id_sc_field_fcha_rgstro' + iSeqRow).bind('blur', function() { sc_form_activos_fcha_rgstro_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_activos_fcha_rgstro_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_usrio' + iSeqRow).bind('blur', function() { sc_form_activos_id_usrio_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_activos_id_usrio_onfocus(this, iSeqRow) });
  $('#id_sc_field_fcha_actlzcion' + iSeqRow).bind('blur', function() { sc_form_activos_fcha_actlzcion_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_activos_fcha_actlzcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_fcha_actlzcion_hora' + iSeqRow).bind('blur', function() { sc_form_activos_fcha_actlzcion_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_activos_fcha_actlzcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_usrio_actlzcion' + iSeqRow).bind('blur', function() { sc_form_activos_id_usrio_actlzcion_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_activos_id_usrio_actlzcion_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_activos_id_actvo_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_actvo();
  scCssBlur(oThis);
}

function sc_form_activos_id_actvo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_nmbre_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_nmbre();
  scCssBlur(oThis);
}

function sc_form_activos_nmbre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_cdgo_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_cdgo();
  scCssBlur(oThis);
}

function sc_form_activos_cdgo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_rfrncia_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_rfrncia();
  scCssBlur(oThis);
}

function sc_form_activos_rfrncia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_srial_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_srial();
  scCssBlur(oThis);
}

function sc_form_activos_srial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_nmro_actvo_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_nmro_actvo();
  scCssBlur(oThis);
}

function sc_form_activos_nmro_actvo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_alias_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_alias();
  scCssBlur(oThis);
}

function sc_form_activos_alias_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_cdgo_qr_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_cdgo_qr();
  scCssBlur(oThis);
}

function sc_form_activos_cdgo_qr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_cdgo_brras_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_cdgo_brras();
  scCssBlur(oThis);
}

function sc_form_activos_cdgo_brras_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_cdgo_rfid_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_cdgo_rfid();
  scCssBlur(oThis);
}

function sc_form_activos_cdgo_rfid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_cmpsto_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_cmpsto();
  scCssBlur(oThis);
}

function sc_form_activos_cmpsto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_estdo_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_estdo();
  scCssBlur(oThis);
}

function sc_form_activos_id_estdo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_clse_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_clse();
  scCssBlur(oThis);
}

function sc_form_activos_id_clse_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_tpo_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_tpo();
  scCssBlur(oThis);
}

function sc_form_activos_id_tpo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_mrca_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_mrca();
  scCssBlur(oThis);
}

function sc_form_activos_id_mrca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_mdlo_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_mdlo();
  scCssBlur(oThis);
}

function sc_form_activos_mdlo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_fbrcnte_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_fbrcnte();
  scCssBlur(oThis);
}

function sc_form_activos_id_fbrcnte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_cnfbldad_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_cnfbldad();
  scCssBlur(oThis);
}

function sc_form_activos_cnfbldad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_nit_prvdor_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_nit_prvdor();
  scCssBlur(oThis);
}

function sc_form_activos_id_nit_prvdor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_fcha_cmpra_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_fcha_cmpra();
  scCssBlur(oThis);
}

function sc_form_activos_fcha_cmpra_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_fcha_arrnque_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_fcha_arrnque();
  scCssBlur(oThis);
}

function sc_form_activos_fcha_arrnque_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_fcha_fin_grntia_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_fcha_fin_grntia();
  scCssBlur(oThis);
}

function sc_form_activos_fcha_fin_grntia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_vlor_cmpra1_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_vlor_cmpra1();
  scCssBlur(oThis);
}

function sc_form_activos_vlor_cmpra1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_mnda_cmpra1_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_mnda_cmpra1();
  scCssBlur(oThis);
}

function sc_form_activos_id_mnda_cmpra1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_vlor_cmpra2_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_vlor_cmpra2();
  scCssBlur(oThis);
}

function sc_form_activos_vlor_cmpra2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_mnda_cmpra2_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_mnda_cmpra2();
  scCssBlur(oThis);
}

function sc_form_activos_id_mnda_cmpra2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_area_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_area();
  scCssBlur(oThis);
}

function sc_form_activos_id_area_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_cntro_csto_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_cntro_csto();
  scCssBlur(oThis);
}

function sc_form_activos_id_cntro_csto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_ubccion_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_ubccion();
  scCssBlur(oThis);
}

function sc_form_activos_id_ubccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_nit_rspnsble_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_nit_rspnsble();
  scCssBlur(oThis);
}

function sc_form_activos_id_nit_rspnsble_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_cntdor_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_cntdor();
  scCssBlur(oThis);
}

function sc_form_activos_id_cntdor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_vlor_actual_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_vlor_actual();
  scCssBlur(oThis);
}

function sc_form_activos_vlor_actual_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_fcha_lctra_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_fcha_lctra();
  scCssBlur(oThis);
}

function sc_form_activos_fcha_lctra_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_vlor_estndar_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_vlor_estndar();
  scCssBlur(oThis);
}

function sc_form_activos_vlor_estndar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_tpo_mdcion_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_tpo_mdcion();
  scCssBlur(oThis);
}

function sc_form_activos_id_tpo_mdcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_fto1_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_activos_fto1_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_activos_fto2_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_activos_fto2_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_activos_fto3_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_activos_fto3_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_activos_fto4_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_activos_fto4_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_activos_fto5_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_activos_fto5_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_activos_fto6_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_activos_fto6_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_activos_prmtro_oprcion_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_activos_prmtro_oprcion_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_activos_nmbre_archvo_po_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_nmbre_archvo_po();
  scCssBlur(oThis);
}

function sc_form_activos_nmbre_archvo_po_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_tmno_po_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_tmno_po();
  scCssBlur(oThis);
}

function sc_form_activos_tmno_po_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_fcha_rgstro_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_fcha_rgstro();
  scCssBlur(oThis);
}

function sc_form_activos_fcha_rgstro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_usrio_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_usrio();
  scCssBlur(oThis);
}

function sc_form_activos_id_usrio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_fcha_actlzcion_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_fcha_actlzcion();
  scCssBlur(oThis);
}

function sc_form_activos_fcha_actlzcion_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_fcha_actlzcion();
  scCssBlur(oThis);
}

function sc_form_activos_fcha_actlzcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_fcha_actlzcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_activos_id_usrio_actlzcion_onblur(oThis, iSeqRow) {
  do_ajax_form_activos_mob_validate_id_usrio_actlzcion();
  scCssBlur(oThis);
}

function sc_form_activos_id_usrio_actlzcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("id_actvo", "", status);
	displayChange_field("nmbre", "", status);
	displayChange_field("cdgo", "", status);
	displayChange_field("rfrncia", "", status);
	displayChange_field("srial", "", status);
	displayChange_field("nmro_actvo", "", status);
	displayChange_field("alias", "", status);
	displayChange_field("cdgo_qr", "", status);
	displayChange_field("cdgo_brras", "", status);
	displayChange_field("cdgo_rfid", "", status);
	displayChange_field("cmpsto", "", status);
	displayChange_field("id_estdo", "", status);
	displayChange_field("id_clse", "", status);
	displayChange_field("id_tpo", "", status);
	displayChange_field("id_mrca", "", status);
	displayChange_field("mdlo", "", status);
	displayChange_field("id_fbrcnte", "", status);
	displayChange_field("cnfbldad", "", status);
	displayChange_field("id_nit_prvdor", "", status);
	displayChange_field("fcha_cmpra", "", status);
	displayChange_field("fcha_arrnque", "", status);
	displayChange_field("fcha_fin_grntia", "", status);
	displayChange_field("vlor_cmpra1", "", status);
	displayChange_field("id_mnda_cmpra1", "", status);
	displayChange_field("vlor_cmpra2", "", status);
	displayChange_field("id_mnda_cmpra2", "", status);
	displayChange_field("id_area", "", status);
	displayChange_field("id_cntro_csto", "", status);
	displayChange_field("id_ubccion", "", status);
	displayChange_field("id_nit_rspnsble", "", status);
	displayChange_field("id_cntdor", "", status);
	displayChange_field("vlor_actual", "", status);
	displayChange_field("fcha_lctra", "", status);
	displayChange_field("vlor_estndar", "", status);
	displayChange_field("id_tpo_mdcion", "", status);
	displayChange_field("fto1", "", status);
	displayChange_field("fto2", "", status);
	displayChange_field("fto3", "", status);
	displayChange_field("fto4", "", status);
	displayChange_field("fto5", "", status);
	displayChange_field("fto6", "", status);
	displayChange_field("prmtro_oprcion", "", status);
	displayChange_field("nmbre_archvo_po", "", status);
	displayChange_field("tmno_po", "", status);
	displayChange_field("fcha_rgstro", "", status);
	displayChange_field("id_usrio", "", status);
	displayChange_field("fcha_actlzcion", "", status);
	displayChange_field("id_usrio_actlzcion", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_id_actvo(row, status);
	displayChange_field_nmbre(row, status);
	displayChange_field_cdgo(row, status);
	displayChange_field_rfrncia(row, status);
	displayChange_field_srial(row, status);
	displayChange_field_nmro_actvo(row, status);
	displayChange_field_alias(row, status);
	displayChange_field_cdgo_qr(row, status);
	displayChange_field_cdgo_brras(row, status);
	displayChange_field_cdgo_rfid(row, status);
	displayChange_field_cmpsto(row, status);
	displayChange_field_id_estdo(row, status);
	displayChange_field_id_clse(row, status);
	displayChange_field_id_tpo(row, status);
	displayChange_field_id_mrca(row, status);
	displayChange_field_mdlo(row, status);
	displayChange_field_id_fbrcnte(row, status);
	displayChange_field_cnfbldad(row, status);
	displayChange_field_id_nit_prvdor(row, status);
	displayChange_field_fcha_cmpra(row, status);
	displayChange_field_fcha_arrnque(row, status);
	displayChange_field_fcha_fin_grntia(row, status);
	displayChange_field_vlor_cmpra1(row, status);
	displayChange_field_id_mnda_cmpra1(row, status);
	displayChange_field_vlor_cmpra2(row, status);
	displayChange_field_id_mnda_cmpra2(row, status);
	displayChange_field_id_area(row, status);
	displayChange_field_id_cntro_csto(row, status);
	displayChange_field_id_ubccion(row, status);
	displayChange_field_id_nit_rspnsble(row, status);
	displayChange_field_id_cntdor(row, status);
	displayChange_field_vlor_actual(row, status);
	displayChange_field_fcha_lctra(row, status);
	displayChange_field_vlor_estndar(row, status);
	displayChange_field_id_tpo_mdcion(row, status);
	displayChange_field_fto1(row, status);
	displayChange_field_fto2(row, status);
	displayChange_field_fto3(row, status);
	displayChange_field_fto4(row, status);
	displayChange_field_fto5(row, status);
	displayChange_field_fto6(row, status);
	displayChange_field_prmtro_oprcion(row, status);
	displayChange_field_nmbre_archvo_po(row, status);
	displayChange_field_tmno_po(row, status);
	displayChange_field_fcha_rgstro(row, status);
	displayChange_field_id_usrio(row, status);
	displayChange_field_fcha_actlzcion(row, status);
	displayChange_field_id_usrio_actlzcion(row, status);
}

function displayChange_field(field, row, status) {
	if ("id_actvo" == field) {
		displayChange_field_id_actvo(row, status);
	}
	if ("nmbre" == field) {
		displayChange_field_nmbre(row, status);
	}
	if ("cdgo" == field) {
		displayChange_field_cdgo(row, status);
	}
	if ("rfrncia" == field) {
		displayChange_field_rfrncia(row, status);
	}
	if ("srial" == field) {
		displayChange_field_srial(row, status);
	}
	if ("nmro_actvo" == field) {
		displayChange_field_nmro_actvo(row, status);
	}
	if ("alias" == field) {
		displayChange_field_alias(row, status);
	}
	if ("cdgo_qr" == field) {
		displayChange_field_cdgo_qr(row, status);
	}
	if ("cdgo_brras" == field) {
		displayChange_field_cdgo_brras(row, status);
	}
	if ("cdgo_rfid" == field) {
		displayChange_field_cdgo_rfid(row, status);
	}
	if ("cmpsto" == field) {
		displayChange_field_cmpsto(row, status);
	}
	if ("id_estdo" == field) {
		displayChange_field_id_estdo(row, status);
	}
	if ("id_clse" == field) {
		displayChange_field_id_clse(row, status);
	}
	if ("id_tpo" == field) {
		displayChange_field_id_tpo(row, status);
	}
	if ("id_mrca" == field) {
		displayChange_field_id_mrca(row, status);
	}
	if ("mdlo" == field) {
		displayChange_field_mdlo(row, status);
	}
	if ("id_fbrcnte" == field) {
		displayChange_field_id_fbrcnte(row, status);
	}
	if ("cnfbldad" == field) {
		displayChange_field_cnfbldad(row, status);
	}
	if ("id_nit_prvdor" == field) {
		displayChange_field_id_nit_prvdor(row, status);
	}
	if ("fcha_cmpra" == field) {
		displayChange_field_fcha_cmpra(row, status);
	}
	if ("fcha_arrnque" == field) {
		displayChange_field_fcha_arrnque(row, status);
	}
	if ("fcha_fin_grntia" == field) {
		displayChange_field_fcha_fin_grntia(row, status);
	}
	if ("vlor_cmpra1" == field) {
		displayChange_field_vlor_cmpra1(row, status);
	}
	if ("id_mnda_cmpra1" == field) {
		displayChange_field_id_mnda_cmpra1(row, status);
	}
	if ("vlor_cmpra2" == field) {
		displayChange_field_vlor_cmpra2(row, status);
	}
	if ("id_mnda_cmpra2" == field) {
		displayChange_field_id_mnda_cmpra2(row, status);
	}
	if ("id_area" == field) {
		displayChange_field_id_area(row, status);
	}
	if ("id_cntro_csto" == field) {
		displayChange_field_id_cntro_csto(row, status);
	}
	if ("id_ubccion" == field) {
		displayChange_field_id_ubccion(row, status);
	}
	if ("id_nit_rspnsble" == field) {
		displayChange_field_id_nit_rspnsble(row, status);
	}
	if ("id_cntdor" == field) {
		displayChange_field_id_cntdor(row, status);
	}
	if ("vlor_actual" == field) {
		displayChange_field_vlor_actual(row, status);
	}
	if ("fcha_lctra" == field) {
		displayChange_field_fcha_lctra(row, status);
	}
	if ("vlor_estndar" == field) {
		displayChange_field_vlor_estndar(row, status);
	}
	if ("id_tpo_mdcion" == field) {
		displayChange_field_id_tpo_mdcion(row, status);
	}
	if ("fto1" == field) {
		displayChange_field_fto1(row, status);
	}
	if ("fto2" == field) {
		displayChange_field_fto2(row, status);
	}
	if ("fto3" == field) {
		displayChange_field_fto3(row, status);
	}
	if ("fto4" == field) {
		displayChange_field_fto4(row, status);
	}
	if ("fto5" == field) {
		displayChange_field_fto5(row, status);
	}
	if ("fto6" == field) {
		displayChange_field_fto6(row, status);
	}
	if ("prmtro_oprcion" == field) {
		displayChange_field_prmtro_oprcion(row, status);
	}
	if ("nmbre_archvo_po" == field) {
		displayChange_field_nmbre_archvo_po(row, status);
	}
	if ("tmno_po" == field) {
		displayChange_field_tmno_po(row, status);
	}
	if ("fcha_rgstro" == field) {
		displayChange_field_fcha_rgstro(row, status);
	}
	if ("id_usrio" == field) {
		displayChange_field_id_usrio(row, status);
	}
	if ("fcha_actlzcion" == field) {
		displayChange_field_fcha_actlzcion(row, status);
	}
	if ("id_usrio_actlzcion" == field) {
		displayChange_field_id_usrio_actlzcion(row, status);
	}
}

function displayChange_field_id_actvo(row, status) {
}

function displayChange_field_nmbre(row, status) {
}

function displayChange_field_cdgo(row, status) {
}

function displayChange_field_rfrncia(row, status) {
}

function displayChange_field_srial(row, status) {
}

function displayChange_field_nmro_actvo(row, status) {
}

function displayChange_field_alias(row, status) {
}

function displayChange_field_cdgo_qr(row, status) {
}

function displayChange_field_cdgo_brras(row, status) {
}

function displayChange_field_cdgo_rfid(row, status) {
}

function displayChange_field_cmpsto(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cmpsto__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cmpsto" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cmpsto");
	}
}

function displayChange_field_id_estdo(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_estdo__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_estdo" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_estdo");
	}
}

function displayChange_field_id_clse(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_clse__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_clse" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_clse");
	}
}

function displayChange_field_id_tpo(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_tpo__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_tpo" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_tpo");
	}
}

function displayChange_field_id_mrca(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_mrca__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_mrca" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_mrca");
	}
}

function displayChange_field_mdlo(row, status) {
}

function displayChange_field_id_fbrcnte(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_fbrcnte__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_fbrcnte" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_fbrcnte");
	}
}

function displayChange_field_cnfbldad(row, status) {
}

function displayChange_field_id_nit_prvdor(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_nit_prvdor__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_nit_prvdor" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_nit_prvdor");
	}
}

function displayChange_field_fcha_cmpra(row, status) {
}

function displayChange_field_fcha_arrnque(row, status) {
}

function displayChange_field_fcha_fin_grntia(row, status) {
}

function displayChange_field_vlor_cmpra1(row, status) {
}

function displayChange_field_id_mnda_cmpra1(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_mnda_cmpra1__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_mnda_cmpra1" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_mnda_cmpra1");
	}
}

function displayChange_field_vlor_cmpra2(row, status) {
}

function displayChange_field_id_mnda_cmpra2(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_mnda_cmpra2__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_mnda_cmpra2" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_mnda_cmpra2");
	}
}

function displayChange_field_id_area(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_area__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_area" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_area");
	}
}

function displayChange_field_id_cntro_csto(row, status) {
}

function displayChange_field_id_ubccion(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_ubccion__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_ubccion" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_ubccion");
	}
}

function displayChange_field_id_nit_rspnsble(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_nit_rspnsble__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_nit_rspnsble" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_nit_rspnsble");
	}
}

function displayChange_field_id_cntdor(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_cntdor__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_cntdor" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_cntdor");
	}
}

function displayChange_field_vlor_actual(row, status) {
}

function displayChange_field_fcha_lctra(row, status) {
}

function displayChange_field_vlor_estndar(row, status) {
}

function displayChange_field_id_tpo_mdcion(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_tpo_mdcion__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_tpo_mdcion" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_tpo_mdcion");
	}
}

function displayChange_field_fto1(row, status) {
}

function displayChange_field_fto2(row, status) {
}

function displayChange_field_fto3(row, status) {
}

function displayChange_field_fto4(row, status) {
}

function displayChange_field_fto5(row, status) {
}

function displayChange_field_fto6(row, status) {
}

function displayChange_field_prmtro_oprcion(row, status) {
}

function displayChange_field_nmbre_archvo_po(row, status) {
}

function displayChange_field_tmno_po(row, status) {
}

function displayChange_field_fcha_rgstro(row, status) {
}

function displayChange_field_id_usrio(row, status) {
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_usrio__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_usrio" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_usrio");
	}
}

function displayChange_field_fcha_actlzcion(row, status) {
}

function displayChange_field_id_usrio_actlzcion(row, status) {
}

function scRecreateSelect2() {
	displayChange_field_cmpsto("all", "on");
	displayChange_field_id_estdo("all", "on");
	displayChange_field_id_clse("all", "on");
	displayChange_field_id_tpo("all", "on");
	displayChange_field_id_mrca("all", "on");
	displayChange_field_id_fbrcnte("all", "on");
	displayChange_field_id_nit_prvdor("all", "on");
	displayChange_field_id_mnda_cmpra1("all", "on");
	displayChange_field_id_mnda_cmpra2("all", "on");
	displayChange_field_id_area("all", "on");
	displayChange_field_id_ubccion("all", "on");
	displayChange_field_id_nit_rspnsble("all", "on");
	displayChange_field_id_cntdor("all", "on");
	displayChange_field_id_tpo_mdcion("all", "on");
	displayChange_field_id_usrio("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_activos_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(24);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fcha_cmpra" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fcha_cmpra" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_activos_mob_validate_fcha_cmpra(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fcha_cmpra']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
  $("#id_sc_field_fcha_arrnque" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fcha_arrnque" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_activos_mob_validate_fcha_arrnque(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fcha_arrnque']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
  $("#id_sc_field_fcha_fin_grntia" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fcha_fin_grntia" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_activos_mob_validate_fcha_fin_grntia(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fcha_fin_grntia']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
  $("#id_sc_field_fcha_lctra" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fcha_lctra" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_activos_mob_validate_fcha_lctra(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fcha_lctra']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
  $("#id_sc_field_fcha_rgstro" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fcha_rgstro" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_activos_mob_validate_fcha_rgstro(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fcha_rgstro']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
  $("#id_sc_field_fcha_actlzcion" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fcha_actlzcion" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['fcha_actlzcion']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fcha_actlzcion']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_activos_mob_validate_fcha_actlzcion(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fcha_actlzcion']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_fto1" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_activos_mob_ul_save.php",
    dropZone: $("#hidden_field_data_fto1" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'fto1'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fto1" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fto1" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_fto1" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fto1" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_fto1" + iSeqRow).val("");
      $("#id_sc_field_fto1_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fto1_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fto1 = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fto1) ? "none" : "";
      $("#id_ajax_img_fto1" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fto1" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fto1) {
        document.F1.temp_out_fto1.value = var_ajax_img_thumb;
        document.F1.temp_out1_fto1.value = var_ajax_img_fto1;
      }
      else if (document.F1.temp_out_fto1) {
        document.F1.temp_out_fto1.value = var_ajax_img_fto1;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fto1" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fto1" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fto1" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_fto1" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_fto2" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_activos_mob_ul_save.php",
    dropZone: $("#hidden_field_data_fto2" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'fto2'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fto2" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fto2" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_fto2" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fto2" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_fto2" + iSeqRow).val("");
      $("#id_sc_field_fto2_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fto2_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fto2 = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fto2) ? "none" : "";
      $("#id_ajax_img_fto2" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fto2" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fto2) {
        document.F1.temp_out_fto2.value = var_ajax_img_thumb;
        document.F1.temp_out1_fto2.value = var_ajax_img_fto2;
      }
      else if (document.F1.temp_out_fto2) {
        document.F1.temp_out_fto2.value = var_ajax_img_fto2;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fto2" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fto2" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fto2" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_fto2" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_fto3" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_activos_mob_ul_save.php",
    dropZone: $("#hidden_field_data_fto3" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'fto3'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fto3" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fto3" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_fto3" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fto3" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_fto3" + iSeqRow).val("");
      $("#id_sc_field_fto3_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fto3_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fto3 = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fto3) ? "none" : "";
      $("#id_ajax_img_fto3" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fto3" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fto3) {
        document.F1.temp_out_fto3.value = var_ajax_img_thumb;
        document.F1.temp_out1_fto3.value = var_ajax_img_fto3;
      }
      else if (document.F1.temp_out_fto3) {
        document.F1.temp_out_fto3.value = var_ajax_img_fto3;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fto3" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fto3" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fto3" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_fto3" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_fto4" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_activos_mob_ul_save.php",
    dropZone: $("#hidden_field_data_fto4" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'fto4'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fto4" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fto4" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_fto4" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fto4" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_fto4" + iSeqRow).val("");
      $("#id_sc_field_fto4_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fto4_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fto4 = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fto4) ? "none" : "";
      $("#id_ajax_img_fto4" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fto4" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fto4) {
        document.F1.temp_out_fto4.value = var_ajax_img_thumb;
        document.F1.temp_out1_fto4.value = var_ajax_img_fto4;
      }
      else if (document.F1.temp_out_fto4) {
        document.F1.temp_out_fto4.value = var_ajax_img_fto4;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fto4" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fto4" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fto4" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_fto4" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_fto5" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_activos_mob_ul_save.php",
    dropZone: $("#hidden_field_data_fto5" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'fto5'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fto5" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fto5" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_fto5" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fto5" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_fto5" + iSeqRow).val("");
      $("#id_sc_field_fto5_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fto5_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fto5 = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fto5) ? "none" : "";
      $("#id_ajax_img_fto5" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fto5" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fto5) {
        document.F1.temp_out_fto5.value = var_ajax_img_thumb;
        document.F1.temp_out1_fto5.value = var_ajax_img_fto5;
      }
      else if (document.F1.temp_out_fto5) {
        document.F1.temp_out_fto5.value = var_ajax_img_fto5;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fto5" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fto5" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fto5" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_fto5" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_fto6" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_activos_mob_ul_save.php",
    dropZone: $("#hidden_field_data_fto6" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'fto6'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fto6" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fto6" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_fto6" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fto6" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_fto6" + iSeqRow).val("");
      $("#id_sc_field_fto6_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fto6_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fto6 = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fto6) ? "none" : "";
      $("#id_ajax_img_fto6" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fto6" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fto6) {
        document.F1.temp_out_fto6.value = var_ajax_img_thumb;
        document.F1.temp_out1_fto6.value = var_ajax_img_fto6;
      }
      else if (document.F1.temp_out_fto6) {
        document.F1.temp_out_fto6.value = var_ajax_img_fto6;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fto6" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fto6" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fto6" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_fto6" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_prmtro_oprcion" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_activos_mob_ul_save.php",
    dropZone: $("#hidden_field_data_prmtro_oprcion" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'prmtro_oprcion'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_prmtro_oprcion" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_prmtro_oprcion" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_prmtro_oprcion" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_prmtro_oprcion" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_prmtro_oprcion" + iSeqRow).val("");
      $("#id_sc_field_prmtro_oprcion_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_prmtro_oprcion_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_prmtro_oprcion = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_prmtro_oprcion) ? "none" : "";
      $("#id_ajax_img_prmtro_oprcion" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_prmtro_oprcion" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_prmtro_oprcion) {
        document.F1.temp_out_prmtro_oprcion.value = var_ajax_img_thumb;
        document.F1.temp_out1_prmtro_oprcion.value = var_ajax_img_prmtro_oprcion;
      }
      else if (document.F1.temp_out_prmtro_oprcion) {
        document.F1.temp_out_prmtro_oprcion.value = var_ajax_img_prmtro_oprcion;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_prmtro_oprcion" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_prmtro_oprcion" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_prmtro_oprcion" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_prmtro_oprcion" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "cmpsto" == specificField) {
    scJQSelect2Add_cmpsto(seqRow);
  }
  if (null == specificField || "id_estdo" == specificField) {
    scJQSelect2Add_id_estdo(seqRow);
  }
  if (null == specificField || "id_clse" == specificField) {
    scJQSelect2Add_id_clse(seqRow);
  }
  if (null == specificField || "id_tpo" == specificField) {
    scJQSelect2Add_id_tpo(seqRow);
  }
  if (null == specificField || "id_mrca" == specificField) {
    scJQSelect2Add_id_mrca(seqRow);
  }
  if (null == specificField || "id_fbrcnte" == specificField) {
    scJQSelect2Add_id_fbrcnte(seqRow);
  }
  if (null == specificField || "id_nit_prvdor" == specificField) {
    scJQSelect2Add_id_nit_prvdor(seqRow);
  }
  if (null == specificField || "id_mnda_cmpra1" == specificField) {
    scJQSelect2Add_id_mnda_cmpra1(seqRow);
  }
  if (null == specificField || "id_mnda_cmpra2" == specificField) {
    scJQSelect2Add_id_mnda_cmpra2(seqRow);
  }
  if (null == specificField || "id_area" == specificField) {
    scJQSelect2Add_id_area(seqRow);
  }
  if (null == specificField || "id_ubccion" == specificField) {
    scJQSelect2Add_id_ubccion(seqRow);
  }
  if (null == specificField || "id_nit_rspnsble" == specificField) {
    scJQSelect2Add_id_nit_rspnsble(seqRow);
  }
  if (null == specificField || "id_cntdor" == specificField) {
    scJQSelect2Add_id_cntdor(seqRow);
  }
  if (null == specificField || "id_tpo_mdcion" == specificField) {
    scJQSelect2Add_id_tpo_mdcion(seqRow);
  }
  if (null == specificField || "id_usrio" == specificField) {
    scJQSelect2Add_id_usrio(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_cmpsto(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cmpsto_obj" : "#id_sc_field_cmpsto" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cmpsto_obj',
      dropdownCssClass: 'css_cmpsto_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_estdo(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_estdo_obj" : "#id_sc_field_id_estdo" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_estdo_obj',
      dropdownCssClass: 'css_id_estdo_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_clse(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_clse_obj" : "#id_sc_field_id_clse" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_clse_obj',
      dropdownCssClass: 'css_id_clse_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_tpo(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_tpo_obj" : "#id_sc_field_id_tpo" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_tpo_obj',
      dropdownCssClass: 'css_id_tpo_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_mrca(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_mrca_obj" : "#id_sc_field_id_mrca" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_mrca_obj',
      dropdownCssClass: 'css_id_mrca_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_fbrcnte(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_fbrcnte_obj" : "#id_sc_field_id_fbrcnte" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_fbrcnte_obj',
      dropdownCssClass: 'css_id_fbrcnte_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_nit_prvdor(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_nit_prvdor_obj" : "#id_sc_field_id_nit_prvdor" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_nit_prvdor_obj',
      dropdownCssClass: 'css_id_nit_prvdor_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_mnda_cmpra1(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_mnda_cmpra1_obj" : "#id_sc_field_id_mnda_cmpra1" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_mnda_cmpra1_obj',
      dropdownCssClass: 'css_id_mnda_cmpra1_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_mnda_cmpra2(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_mnda_cmpra2_obj" : "#id_sc_field_id_mnda_cmpra2" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_mnda_cmpra2_obj',
      dropdownCssClass: 'css_id_mnda_cmpra2_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_area(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_area_obj" : "#id_sc_field_id_area" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_area_obj',
      dropdownCssClass: 'css_id_area_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_ubccion(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_ubccion_obj" : "#id_sc_field_id_ubccion" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_ubccion_obj',
      dropdownCssClass: 'css_id_ubccion_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_nit_rspnsble(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_nit_rspnsble_obj" : "#id_sc_field_id_nit_rspnsble" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_nit_rspnsble_obj',
      dropdownCssClass: 'css_id_nit_rspnsble_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_cntdor(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_cntdor_obj" : "#id_sc_field_id_cntdor" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_cntdor_obj',
      dropdownCssClass: 'css_id_cntdor_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_tpo_mdcion(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_tpo_mdcion_obj" : "#id_sc_field_id_tpo_mdcion" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_tpo_mdcion_obj',
      dropdownCssClass: 'css_id_tpo_mdcion_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_usrio(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_usrio_obj" : "#id_sc_field_id_usrio" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_usrio_obj',
      dropdownCssClass: 'css_id_usrio_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_cmpsto) { displayChange_field_cmpsto(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_estdo) { displayChange_field_id_estdo(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_clse) { displayChange_field_id_clse(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_tpo) { displayChange_field_id_tpo(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_mrca) { displayChange_field_id_mrca(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_fbrcnte) { displayChange_field_id_fbrcnte(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_nit_prvdor) { displayChange_field_id_nit_prvdor(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_mnda_cmpra1) { displayChange_field_id_mnda_cmpra1(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_mnda_cmpra2) { displayChange_field_id_mnda_cmpra2(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_area) { displayChange_field_id_area(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_ubccion) { displayChange_field_id_ubccion(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_nit_rspnsble) { displayChange_field_id_nit_rspnsble(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_cntdor) { displayChange_field_id_cntdor(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_tpo_mdcion) { displayChange_field_id_tpo_mdcion(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_usrio) { displayChange_field_id_usrio(iLine, "on"); } }, 150);
} // scJQElementsAdd

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  if (typeof(scBtnGrpShowMobile) === typeof(function(){})) { return scBtnGrpShowMobile(sGroup); };
  $('#sc_btgp_btn_' + sGroup).addClass('selected');
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    scBtnGrpStatus[sGroup] = '';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  }).mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup, false);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup, bForce) {
  if (bForce || 'over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
    $('#sc_btgp_btn_' + sGroup).addClass('selected');
  }
}
