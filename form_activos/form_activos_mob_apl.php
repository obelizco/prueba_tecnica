<?php
//
class form_activos_mob_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'navSummary'        => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $id_actvo;
   var $nmbre;
   var $cdgo;
   var $rfrncia;
   var $srial;
   var $nmro_actvo;
   var $alias;
   var $cdgo_qr;
   var $cdgo_brras;
   var $cdgo_rfid;
   var $cmpsto;
   var $cmpsto_1;
   var $id_estdo;
   var $id_estdo_1;
   var $id_clse;
   var $id_clse_1;
   var $id_tpo;
   var $id_tpo_1;
   var $id_mrca;
   var $id_mrca_1;
   var $mdlo;
   var $id_fbrcnte;
   var $id_fbrcnte_1;
   var $cnfbldad;
   var $id_nit_prvdor;
   var $id_nit_prvdor_1;
   var $fcha_cmpra;
   var $fcha_arrnque;
   var $fcha_fin_grntia;
   var $vlor_cmpra1;
   var $id_mnda_cmpra1;
   var $id_mnda_cmpra1_1;
   var $vlor_cmpra2;
   var $id_mnda_cmpra2;
   var $id_mnda_cmpra2_1;
   var $id_area;
   var $id_area_1;
   var $id_cntro_csto;
   var $id_ubccion;
   var $id_ubccion_1;
   var $id_nit_rspnsble;
   var $id_nit_rspnsble_1;
   var $id_cntdor;
   var $id_cntdor_1;
   var $vlor_actual;
   var $fcha_lctra;
   var $vlor_estndar;
   var $id_tpo_mdcion;
   var $id_tpo_mdcion_1;
   var $fto1;
   var $fto1_scfile_name;
   var $fto1_ul_name;
   var $fto1_scfile_type;
   var $fto1_ul_type;
   var $fto1_limpa;
   var $fto1_salva;
   var $out_fto1;
   var $fto2;
   var $fto2_scfile_name;
   var $fto2_ul_name;
   var $fto2_scfile_type;
   var $fto2_ul_type;
   var $fto2_limpa;
   var $fto2_salva;
   var $out_fto2;
   var $fto3;
   var $fto3_scfile_name;
   var $fto3_ul_name;
   var $fto3_scfile_type;
   var $fto3_ul_type;
   var $fto3_limpa;
   var $fto3_salva;
   var $out_fto3;
   var $fto4;
   var $fto4_scfile_name;
   var $fto4_ul_name;
   var $fto4_scfile_type;
   var $fto4_ul_type;
   var $fto4_limpa;
   var $fto4_salva;
   var $out_fto4;
   var $fto5;
   var $fto5_scfile_name;
   var $fto5_ul_name;
   var $fto5_scfile_type;
   var $fto5_ul_type;
   var $fto5_limpa;
   var $fto5_salva;
   var $out_fto5;
   var $fto6;
   var $fto6_scfile_name;
   var $fto6_ul_name;
   var $fto6_scfile_type;
   var $fto6_ul_type;
   var $fto6_limpa;
   var $fto6_salva;
   var $out_fto6;
   var $prmtro_oprcion;
   var $prmtro_oprcion_scfile_name;
   var $prmtro_oprcion_ul_name;
   var $prmtro_oprcion_scfile_type;
   var $prmtro_oprcion_ul_type;
   var $prmtro_oprcion_limpa;
   var $prmtro_oprcion_salva;
   var $out_prmtro_oprcion;
   var $nmbre_archvo_po;
   var $tmno_po;
   var $fcha_rgstro;
   var $id_usrio;
   var $id_usrio_1;
   var $fcha_actlzcion;
   var $fcha_actlzcion_hora;
   var $id_usrio_actlzcion;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['alias']))
          {
              $this->alias = $this->NM_ajax_info['param']['alias'];
          }
          if (isset($this->NM_ajax_info['param']['cdgo']))
          {
              $this->cdgo = $this->NM_ajax_info['param']['cdgo'];
          }
          if (isset($this->NM_ajax_info['param']['cdgo_brras']))
          {
              $this->cdgo_brras = $this->NM_ajax_info['param']['cdgo_brras'];
          }
          if (isset($this->NM_ajax_info['param']['cdgo_qr']))
          {
              $this->cdgo_qr = $this->NM_ajax_info['param']['cdgo_qr'];
          }
          if (isset($this->NM_ajax_info['param']['cdgo_rfid']))
          {
              $this->cdgo_rfid = $this->NM_ajax_info['param']['cdgo_rfid'];
          }
          if (isset($this->NM_ajax_info['param']['cmpsto']))
          {
              $this->cmpsto = $this->NM_ajax_info['param']['cmpsto'];
          }
          if (isset($this->NM_ajax_info['param']['cnfbldad']))
          {
              $this->cnfbldad = $this->NM_ajax_info['param']['cnfbldad'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['fcha_actlzcion']))
          {
              $this->fcha_actlzcion = $this->NM_ajax_info['param']['fcha_actlzcion'];
          }
          if (isset($this->NM_ajax_info['param']['fcha_arrnque']))
          {
              $this->fcha_arrnque = $this->NM_ajax_info['param']['fcha_arrnque'];
          }
          if (isset($this->NM_ajax_info['param']['fcha_cmpra']))
          {
              $this->fcha_cmpra = $this->NM_ajax_info['param']['fcha_cmpra'];
          }
          if (isset($this->NM_ajax_info['param']['fcha_fin_grntia']))
          {
              $this->fcha_fin_grntia = $this->NM_ajax_info['param']['fcha_fin_grntia'];
          }
          if (isset($this->NM_ajax_info['param']['fcha_lctra']))
          {
              $this->fcha_lctra = $this->NM_ajax_info['param']['fcha_lctra'];
          }
          if (isset($this->NM_ajax_info['param']['fcha_rgstro']))
          {
              $this->fcha_rgstro = $this->NM_ajax_info['param']['fcha_rgstro'];
          }
          if (isset($this->NM_ajax_info['param']['fto1']))
          {
              $this->fto1 = $this->NM_ajax_info['param']['fto1'];
          }
          if (isset($this->NM_ajax_info['param']['fto1_limpa']))
          {
              $this->fto1_limpa = $this->NM_ajax_info['param']['fto1_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fto1_ul_name']))
          {
              $this->fto1_ul_name = $this->NM_ajax_info['param']['fto1_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fto1_ul_type']))
          {
              $this->fto1_ul_type = $this->NM_ajax_info['param']['fto1_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['fto2']))
          {
              $this->fto2 = $this->NM_ajax_info['param']['fto2'];
          }
          if (isset($this->NM_ajax_info['param']['fto2_limpa']))
          {
              $this->fto2_limpa = $this->NM_ajax_info['param']['fto2_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fto2_ul_name']))
          {
              $this->fto2_ul_name = $this->NM_ajax_info['param']['fto2_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fto2_ul_type']))
          {
              $this->fto2_ul_type = $this->NM_ajax_info['param']['fto2_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['fto3']))
          {
              $this->fto3 = $this->NM_ajax_info['param']['fto3'];
          }
          if (isset($this->NM_ajax_info['param']['fto3_limpa']))
          {
              $this->fto3_limpa = $this->NM_ajax_info['param']['fto3_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fto3_ul_name']))
          {
              $this->fto3_ul_name = $this->NM_ajax_info['param']['fto3_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fto3_ul_type']))
          {
              $this->fto3_ul_type = $this->NM_ajax_info['param']['fto3_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['fto4']))
          {
              $this->fto4 = $this->NM_ajax_info['param']['fto4'];
          }
          if (isset($this->NM_ajax_info['param']['fto4_limpa']))
          {
              $this->fto4_limpa = $this->NM_ajax_info['param']['fto4_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fto4_ul_name']))
          {
              $this->fto4_ul_name = $this->NM_ajax_info['param']['fto4_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fto4_ul_type']))
          {
              $this->fto4_ul_type = $this->NM_ajax_info['param']['fto4_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['fto5']))
          {
              $this->fto5 = $this->NM_ajax_info['param']['fto5'];
          }
          if (isset($this->NM_ajax_info['param']['fto5_limpa']))
          {
              $this->fto5_limpa = $this->NM_ajax_info['param']['fto5_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fto5_ul_name']))
          {
              $this->fto5_ul_name = $this->NM_ajax_info['param']['fto5_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fto5_ul_type']))
          {
              $this->fto5_ul_type = $this->NM_ajax_info['param']['fto5_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['fto6']))
          {
              $this->fto6 = $this->NM_ajax_info['param']['fto6'];
          }
          if (isset($this->NM_ajax_info['param']['fto6_limpa']))
          {
              $this->fto6_limpa = $this->NM_ajax_info['param']['fto6_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fto6_ul_name']))
          {
              $this->fto6_ul_name = $this->NM_ajax_info['param']['fto6_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fto6_ul_type']))
          {
              $this->fto6_ul_type = $this->NM_ajax_info['param']['fto6_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['id_actvo']))
          {
              $this->id_actvo = $this->NM_ajax_info['param']['id_actvo'];
          }
          if (isset($this->NM_ajax_info['param']['id_area']))
          {
              $this->id_area = $this->NM_ajax_info['param']['id_area'];
          }
          if (isset($this->NM_ajax_info['param']['id_clse']))
          {
              $this->id_clse = $this->NM_ajax_info['param']['id_clse'];
          }
          if (isset($this->NM_ajax_info['param']['id_cntdor']))
          {
              $this->id_cntdor = $this->NM_ajax_info['param']['id_cntdor'];
          }
          if (isset($this->NM_ajax_info['param']['id_cntro_csto']))
          {
              $this->id_cntro_csto = $this->NM_ajax_info['param']['id_cntro_csto'];
          }
          if (isset($this->NM_ajax_info['param']['id_estdo']))
          {
              $this->id_estdo = $this->NM_ajax_info['param']['id_estdo'];
          }
          if (isset($this->NM_ajax_info['param']['id_fbrcnte']))
          {
              $this->id_fbrcnte = $this->NM_ajax_info['param']['id_fbrcnte'];
          }
          if (isset($this->NM_ajax_info['param']['id_mnda_cmpra1']))
          {
              $this->id_mnda_cmpra1 = $this->NM_ajax_info['param']['id_mnda_cmpra1'];
          }
          if (isset($this->NM_ajax_info['param']['id_mnda_cmpra2']))
          {
              $this->id_mnda_cmpra2 = $this->NM_ajax_info['param']['id_mnda_cmpra2'];
          }
          if (isset($this->NM_ajax_info['param']['id_mrca']))
          {
              $this->id_mrca = $this->NM_ajax_info['param']['id_mrca'];
          }
          if (isset($this->NM_ajax_info['param']['id_nit_prvdor']))
          {
              $this->id_nit_prvdor = $this->NM_ajax_info['param']['id_nit_prvdor'];
          }
          if (isset($this->NM_ajax_info['param']['id_nit_rspnsble']))
          {
              $this->id_nit_rspnsble = $this->NM_ajax_info['param']['id_nit_rspnsble'];
          }
          if (isset($this->NM_ajax_info['param']['id_tpo']))
          {
              $this->id_tpo = $this->NM_ajax_info['param']['id_tpo'];
          }
          if (isset($this->NM_ajax_info['param']['id_tpo_mdcion']))
          {
              $this->id_tpo_mdcion = $this->NM_ajax_info['param']['id_tpo_mdcion'];
          }
          if (isset($this->NM_ajax_info['param']['id_ubccion']))
          {
              $this->id_ubccion = $this->NM_ajax_info['param']['id_ubccion'];
          }
          if (isset($this->NM_ajax_info['param']['id_usrio']))
          {
              $this->id_usrio = $this->NM_ajax_info['param']['id_usrio'];
          }
          if (isset($this->NM_ajax_info['param']['id_usrio_actlzcion']))
          {
              $this->id_usrio_actlzcion = $this->NM_ajax_info['param']['id_usrio_actlzcion'];
          }
          if (isset($this->NM_ajax_info['param']['mdlo']))
          {
              $this->mdlo = $this->NM_ajax_info['param']['mdlo'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmbre']))
          {
              $this->nmbre = $this->NM_ajax_info['param']['nmbre'];
          }
          if (isset($this->NM_ajax_info['param']['nmbre_archvo_po']))
          {
              $this->nmbre_archvo_po = $this->NM_ajax_info['param']['nmbre_archvo_po'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nmro_actvo']))
          {
              $this->nmro_actvo = $this->NM_ajax_info['param']['nmro_actvo'];
          }
          if (isset($this->NM_ajax_info['param']['prmtro_oprcion']))
          {
              $this->prmtro_oprcion = $this->NM_ajax_info['param']['prmtro_oprcion'];
          }
          if (isset($this->NM_ajax_info['param']['prmtro_oprcion_limpa']))
          {
              $this->prmtro_oprcion_limpa = $this->NM_ajax_info['param']['prmtro_oprcion_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['prmtro_oprcion_ul_name']))
          {
              $this->prmtro_oprcion_ul_name = $this->NM_ajax_info['param']['prmtro_oprcion_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['prmtro_oprcion_ul_type']))
          {
              $this->prmtro_oprcion_ul_type = $this->NM_ajax_info['param']['prmtro_oprcion_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['rfrncia']))
          {
              $this->rfrncia = $this->NM_ajax_info['param']['rfrncia'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['srial']))
          {
              $this->srial = $this->NM_ajax_info['param']['srial'];
          }
          if (isset($this->NM_ajax_info['param']['tmno_po']))
          {
              $this->tmno_po = $this->NM_ajax_info['param']['tmno_po'];
          }
          if (isset($this->NM_ajax_info['param']['vlor_actual']))
          {
              $this->vlor_actual = $this->NM_ajax_info['param']['vlor_actual'];
          }
          if (isset($this->NM_ajax_info['param']['vlor_cmpra1']))
          {
              $this->vlor_cmpra1 = $this->NM_ajax_info['param']['vlor_cmpra1'];
          }
          if (isset($this->NM_ajax_info['param']['vlor_cmpra2']))
          {
              $this->vlor_cmpra2 = $this->NM_ajax_info['param']['vlor_cmpra2'];
          }
          if (isset($this->NM_ajax_info['param']['vlor_estndar']))
          {
              $this->vlor_estndar = $this->NM_ajax_info['param']['vlor_estndar'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_activos_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_activos_mob']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_activos_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_activos_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_activos_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['nm_run_menu'] = 1;
      } 
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->fcha_actlzcion);
          $this->fcha_actlzcion      = $aDtParts[0];
          $this->fcha_actlzcion_hora = $aDtParts[1];
      }
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_activos_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_activos_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_activos'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['upload_field_info']['fto1'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_activos_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['upload_field_info']['fto2'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_activos_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['upload_field_info']['fto3'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_activos_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['upload_field_info']['fto4'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_activos_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['upload_field_info']['fto5'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_activos_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['upload_field_info']['fto6'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_activos_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_activos_mob']['upload_field_info']['prmtro_oprcion'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_activos_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_activos_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_activos_mob'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_activos_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_activos_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_activos_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_activos_mob']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " activos";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_activos_mob")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';


      $this->arr_buttons['group_group_2']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_options'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_options'] . "",
          'type'             => "button",
          'display'          => "text_fontawesomeicon",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__gear.png",
          'fontawesomeicon'  => "fas fa-cog",
          'has_fa'           => true,
          'content_icons'    => false,
          'style'            => "default",
      );


      $_SESSION['scriptcase']['error_icon']['form_activos_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_activos_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['fto1_ul_name']) && '' != $this->NM_ajax_info['param']['fto1_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto1_ul_name]))
          {
              $this->NM_ajax_info['param']['fto1_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto1_ul_name];
          }
          $this->fto1 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fto1_ul_name'];
          $this->fto1_scfile_name = substr($this->NM_ajax_info['param']['fto1_ul_name'], 12);
          $this->fto1_scfile_type = $this->NM_ajax_info['param']['fto1_ul_type'];
          $this->fto1_ul_name = $this->NM_ajax_info['param']['fto1_ul_name'];
          $this->fto1_ul_type = $this->NM_ajax_info['param']['fto1_ul_type'];
      }
      elseif (isset($this->fto1_ul_name) && '' != $this->fto1_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto1_ul_name]))
          {
              $this->fto1_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto1_ul_name];
          }
          $this->fto1 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto1_ul_name;
          $this->fto1_scfile_name = substr($this->fto1_ul_name, 12);
          $this->fto1_scfile_type = $this->fto1_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['fto2_ul_name']) && '' != $this->NM_ajax_info['param']['fto2_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto2_ul_name]))
          {
              $this->NM_ajax_info['param']['fto2_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto2_ul_name];
          }
          $this->fto2 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fto2_ul_name'];
          $this->fto2_scfile_name = substr($this->NM_ajax_info['param']['fto2_ul_name'], 12);
          $this->fto2_scfile_type = $this->NM_ajax_info['param']['fto2_ul_type'];
          $this->fto2_ul_name = $this->NM_ajax_info['param']['fto2_ul_name'];
          $this->fto2_ul_type = $this->NM_ajax_info['param']['fto2_ul_type'];
      }
      elseif (isset($this->fto2_ul_name) && '' != $this->fto2_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto2_ul_name]))
          {
              $this->fto2_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto2_ul_name];
          }
          $this->fto2 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto2_ul_name;
          $this->fto2_scfile_name = substr($this->fto2_ul_name, 12);
          $this->fto2_scfile_type = $this->fto2_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['fto3_ul_name']) && '' != $this->NM_ajax_info['param']['fto3_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto3_ul_name]))
          {
              $this->NM_ajax_info['param']['fto3_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto3_ul_name];
          }
          $this->fto3 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fto3_ul_name'];
          $this->fto3_scfile_name = substr($this->NM_ajax_info['param']['fto3_ul_name'], 12);
          $this->fto3_scfile_type = $this->NM_ajax_info['param']['fto3_ul_type'];
          $this->fto3_ul_name = $this->NM_ajax_info['param']['fto3_ul_name'];
          $this->fto3_ul_type = $this->NM_ajax_info['param']['fto3_ul_type'];
      }
      elseif (isset($this->fto3_ul_name) && '' != $this->fto3_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto3_ul_name]))
          {
              $this->fto3_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto3_ul_name];
          }
          $this->fto3 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto3_ul_name;
          $this->fto3_scfile_name = substr($this->fto3_ul_name, 12);
          $this->fto3_scfile_type = $this->fto3_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['fto4_ul_name']) && '' != $this->NM_ajax_info['param']['fto4_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto4_ul_name]))
          {
              $this->NM_ajax_info['param']['fto4_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto4_ul_name];
          }
          $this->fto4 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fto4_ul_name'];
          $this->fto4_scfile_name = substr($this->NM_ajax_info['param']['fto4_ul_name'], 12);
          $this->fto4_scfile_type = $this->NM_ajax_info['param']['fto4_ul_type'];
          $this->fto4_ul_name = $this->NM_ajax_info['param']['fto4_ul_name'];
          $this->fto4_ul_type = $this->NM_ajax_info['param']['fto4_ul_type'];
      }
      elseif (isset($this->fto4_ul_name) && '' != $this->fto4_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto4_ul_name]))
          {
              $this->fto4_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto4_ul_name];
          }
          $this->fto4 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto4_ul_name;
          $this->fto4_scfile_name = substr($this->fto4_ul_name, 12);
          $this->fto4_scfile_type = $this->fto4_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['fto5_ul_name']) && '' != $this->NM_ajax_info['param']['fto5_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto5_ul_name]))
          {
              $this->NM_ajax_info['param']['fto5_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto5_ul_name];
          }
          $this->fto5 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fto5_ul_name'];
          $this->fto5_scfile_name = substr($this->NM_ajax_info['param']['fto5_ul_name'], 12);
          $this->fto5_scfile_type = $this->NM_ajax_info['param']['fto5_ul_type'];
          $this->fto5_ul_name = $this->NM_ajax_info['param']['fto5_ul_name'];
          $this->fto5_ul_type = $this->NM_ajax_info['param']['fto5_ul_type'];
      }
      elseif (isset($this->fto5_ul_name) && '' != $this->fto5_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto5_ul_name]))
          {
              $this->fto5_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto5_ul_name];
          }
          $this->fto5 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto5_ul_name;
          $this->fto5_scfile_name = substr($this->fto5_ul_name, 12);
          $this->fto5_scfile_type = $this->fto5_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['fto6_ul_name']) && '' != $this->NM_ajax_info['param']['fto6_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto6_ul_name]))
          {
              $this->NM_ajax_info['param']['fto6_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto6_ul_name];
          }
          $this->fto6 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fto6_ul_name'];
          $this->fto6_scfile_name = substr($this->NM_ajax_info['param']['fto6_ul_name'], 12);
          $this->fto6_scfile_type = $this->NM_ajax_info['param']['fto6_ul_type'];
          $this->fto6_ul_name = $this->NM_ajax_info['param']['fto6_ul_name'];
          $this->fto6_ul_type = $this->NM_ajax_info['param']['fto6_ul_type'];
      }
      elseif (isset($this->fto6_ul_name) && '' != $this->fto6_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto6_ul_name]))
          {
              $this->fto6_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->fto6_ul_name];
          }
          $this->fto6 = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto6_ul_name;
          $this->fto6_scfile_name = substr($this->fto6_ul_name, 12);
          $this->fto6_scfile_type = $this->fto6_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['prmtro_oprcion_ul_name']) && '' != $this->NM_ajax_info['param']['prmtro_oprcion_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->prmtro_oprcion_ul_name]))
          {
              $this->NM_ajax_info['param']['prmtro_oprcion_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->prmtro_oprcion_ul_name];
          }
          $this->prmtro_oprcion = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['prmtro_oprcion_ul_name'];
          $this->prmtro_oprcion_scfile_name = substr($this->NM_ajax_info['param']['prmtro_oprcion_ul_name'], 12);
          $this->prmtro_oprcion_scfile_type = $this->NM_ajax_info['param']['prmtro_oprcion_ul_type'];
          $this->prmtro_oprcion_ul_name = $this->NM_ajax_info['param']['prmtro_oprcion_ul_name'];
          $this->prmtro_oprcion_ul_type = $this->NM_ajax_info['param']['prmtro_oprcion_ul_type'];
      }
      elseif (isset($this->prmtro_oprcion_ul_name) && '' != $this->prmtro_oprcion_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->prmtro_oprcion_ul_name]))
          {
              $this->prmtro_oprcion_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_field_ul_name'][$this->prmtro_oprcion_ul_name];
          }
          $this->prmtro_oprcion = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->prmtro_oprcion_ul_name;
          $this->prmtro_oprcion_scfile_name = substr($this->prmtro_oprcion_ul_name, 12);
          $this->prmtro_oprcion_scfile_type = $this->prmtro_oprcion_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "on";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_activos_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_activos_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_activos_mob'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_activos_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_activos/form_activos_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_activos_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_activos_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_activos_mob_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_activos/form_activos_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_activos_mob_erro.class.php"); 
      }
      $this->Erro      = new form_activos_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao']))
         { 
             if ($this->id_actvo != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_activos_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
      if (isset($this->id_actvo)) { $this->nm_limpa_alfa($this->id_actvo); }
      if (isset($this->nmbre)) { $this->nm_limpa_alfa($this->nmbre); }
      if (isset($this->cdgo)) { $this->nm_limpa_alfa($this->cdgo); }
      if (isset($this->rfrncia)) { $this->nm_limpa_alfa($this->rfrncia); }
      if (isset($this->srial)) { $this->nm_limpa_alfa($this->srial); }
      if (isset($this->nmro_actvo)) { $this->nm_limpa_alfa($this->nmro_actvo); }
      if (isset($this->alias)) { $this->nm_limpa_alfa($this->alias); }
      if (isset($this->cdgo_qr)) { $this->nm_limpa_alfa($this->cdgo_qr); }
      if (isset($this->cdgo_brras)) { $this->nm_limpa_alfa($this->cdgo_brras); }
      if (isset($this->cdgo_rfid)) { $this->nm_limpa_alfa($this->cdgo_rfid); }
      if (isset($this->cmpsto)) { $this->nm_limpa_alfa($this->cmpsto); }
      if (isset($this->id_estdo)) { $this->nm_limpa_alfa($this->id_estdo); }
      if (isset($this->id_clse)) { $this->nm_limpa_alfa($this->id_clse); }
      if (isset($this->id_tpo)) { $this->nm_limpa_alfa($this->id_tpo); }
      if (isset($this->id_mrca)) { $this->nm_limpa_alfa($this->id_mrca); }
      if (isset($this->mdlo)) { $this->nm_limpa_alfa($this->mdlo); }
      if (isset($this->id_fbrcnte)) { $this->nm_limpa_alfa($this->id_fbrcnte); }
      if (isset($this->cnfbldad)) { $this->nm_limpa_alfa($this->cnfbldad); }
      if (isset($this->id_nit_prvdor)) { $this->nm_limpa_alfa($this->id_nit_prvdor); }
      if (isset($this->vlor_cmpra1)) { $this->nm_limpa_alfa($this->vlor_cmpra1); }
      if (isset($this->id_mnda_cmpra1)) { $this->nm_limpa_alfa($this->id_mnda_cmpra1); }
      if (isset($this->vlor_cmpra2)) { $this->nm_limpa_alfa($this->vlor_cmpra2); }
      if (isset($this->id_mnda_cmpra2)) { $this->nm_limpa_alfa($this->id_mnda_cmpra2); }
      if (isset($this->id_area)) { $this->nm_limpa_alfa($this->id_area); }
      if (isset($this->id_cntro_csto)) { $this->nm_limpa_alfa($this->id_cntro_csto); }
      if (isset($this->id_ubccion)) { $this->nm_limpa_alfa($this->id_ubccion); }
      if (isset($this->id_nit_rspnsble)) { $this->nm_limpa_alfa($this->id_nit_rspnsble); }
      if (isset($this->id_cntdor)) { $this->nm_limpa_alfa($this->id_cntdor); }
      if (isset($this->vlor_actual)) { $this->nm_limpa_alfa($this->vlor_actual); }
      if (isset($this->vlor_estndar)) { $this->nm_limpa_alfa($this->vlor_estndar); }
      if (isset($this->id_tpo_mdcion)) { $this->nm_limpa_alfa($this->id_tpo_mdcion); }
      if (isset($this->nmbre_archvo_po)) { $this->nm_limpa_alfa($this->nmbre_archvo_po); }
      if (isset($this->tmno_po)) { $this->nm_limpa_alfa($this->tmno_po); }
      if (isset($this->id_usrio)) { $this->nm_limpa_alfa($this->id_usrio); }
      if (isset($this->id_usrio_actlzcion)) { $this->nm_limpa_alfa($this->id_usrio_actlzcion); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- id_actvo
      $this->field_config['id_actvo']               = array();
      $this->field_config['id_actvo']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id_actvo']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id_actvo']['symbol_dec'] = '';
      $this->field_config['id_actvo']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id_actvo']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- cnfbldad
      $this->field_config['cnfbldad']               = array();
      $this->field_config['cnfbldad']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['cnfbldad']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['cnfbldad']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['cnfbldad']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['cnfbldad']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fcha_cmpra
      $this->field_config['fcha_cmpra']                 = array();
      $this->field_config['fcha_cmpra']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fcha_cmpra']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fcha_cmpra']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fcha_cmpra');
      //-- fcha_arrnque
      $this->field_config['fcha_arrnque']                 = array();
      $this->field_config['fcha_arrnque']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fcha_arrnque']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fcha_arrnque']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fcha_arrnque');
      //-- fcha_fin_grntia
      $this->field_config['fcha_fin_grntia']                 = array();
      $this->field_config['fcha_fin_grntia']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fcha_fin_grntia']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fcha_fin_grntia']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fcha_fin_grntia');
      //-- vlor_cmpra1
      $this->field_config['vlor_cmpra1']               = array();
      $this->field_config['vlor_cmpra1']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['vlor_cmpra1']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['vlor_cmpra1']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['vlor_cmpra1']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['vlor_cmpra1']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- vlor_cmpra2
      $this->field_config['vlor_cmpra2']               = array();
      $this->field_config['vlor_cmpra2']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['vlor_cmpra2']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['vlor_cmpra2']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['vlor_cmpra2']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['vlor_cmpra2']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- id_cntro_csto
      $this->field_config['id_cntro_csto']               = array();
      $this->field_config['id_cntro_csto']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id_cntro_csto']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id_cntro_csto']['symbol_dec'] = '';
      $this->field_config['id_cntro_csto']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id_cntro_csto']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- vlor_actual
      $this->field_config['vlor_actual']               = array();
      $this->field_config['vlor_actual']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['vlor_actual']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['vlor_actual']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['vlor_actual']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['vlor_actual']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fcha_lctra
      $this->field_config['fcha_lctra']                 = array();
      $this->field_config['fcha_lctra']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fcha_lctra']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fcha_lctra']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fcha_lctra');
      //-- vlor_estndar
      $this->field_config['vlor_estndar']               = array();
      $this->field_config['vlor_estndar']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['vlor_estndar']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['vlor_estndar']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['vlor_estndar']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['vlor_estndar']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fcha_rgstro
      $this->field_config['fcha_rgstro']                 = array();
      $this->field_config['fcha_rgstro']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fcha_rgstro']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fcha_rgstro']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fcha_rgstro');
      //-- fcha_actlzcion
      $this->field_config['fcha_actlzcion']                 = array();
      $this->field_config['fcha_actlzcion']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['fcha_actlzcion']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fcha_actlzcion']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['fcha_actlzcion']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'fcha_actlzcion');
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_id_actvo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_actvo');
          }
          if ('validate_nmbre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nmbre');
          }
          if ('validate_cdgo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cdgo');
          }
          if ('validate_rfrncia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rfrncia');
          }
          if ('validate_srial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'srial');
          }
          if ('validate_nmro_actvo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nmro_actvo');
          }
          if ('validate_alias' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'alias');
          }
          if ('validate_cdgo_qr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cdgo_qr');
          }
          if ('validate_cdgo_brras' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cdgo_brras');
          }
          if ('validate_cdgo_rfid' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cdgo_rfid');
          }
          if ('validate_cmpsto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cmpsto');
          }
          if ('validate_id_estdo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_estdo');
          }
          if ('validate_id_clse' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_clse');
          }
          if ('validate_id_tpo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_tpo');
          }
          if ('validate_id_mrca' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_mrca');
          }
          if ('validate_mdlo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mdlo');
          }
          if ('validate_id_fbrcnte' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_fbrcnte');
          }
          if ('validate_cnfbldad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cnfbldad');
          }
          if ('validate_id_nit_prvdor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_nit_prvdor');
          }
          if ('validate_fcha_cmpra' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fcha_cmpra');
          }
          if ('validate_fcha_arrnque' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fcha_arrnque');
          }
          if ('validate_fcha_fin_grntia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fcha_fin_grntia');
          }
          if ('validate_vlor_cmpra1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'vlor_cmpra1');
          }
          if ('validate_id_mnda_cmpra1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_mnda_cmpra1');
          }
          if ('validate_vlor_cmpra2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'vlor_cmpra2');
          }
          if ('validate_id_mnda_cmpra2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_mnda_cmpra2');
          }
          if ('validate_id_area' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_area');
          }
          if ('validate_id_cntro_csto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_cntro_csto');
          }
          if ('validate_id_ubccion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_ubccion');
          }
          if ('validate_id_nit_rspnsble' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_nit_rspnsble');
          }
          if ('validate_id_cntdor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_cntdor');
          }
          if ('validate_vlor_actual' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'vlor_actual');
          }
          if ('validate_fcha_lctra' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fcha_lctra');
          }
          if ('validate_vlor_estndar' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'vlor_estndar');
          }
          if ('validate_id_tpo_mdcion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_tpo_mdcion');
          }
          if ('validate_fto1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fto1');
          }
          if ('validate_fto2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fto2');
          }
          if ('validate_fto3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fto3');
          }
          if ('validate_fto4' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fto4');
          }
          if ('validate_fto5' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fto5');
          }
          if ('validate_fto6' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fto6');
          }
          if ('validate_prmtro_oprcion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'prmtro_oprcion');
          }
          if ('validate_nmbre_archvo_po' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nmbre_archvo_po');
          }
          if ('validate_tmno_po' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tmno_po');
          }
          if ('validate_fcha_rgstro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fcha_rgstro');
          }
          if ('validate_id_usrio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_usrio');
          }
          if ('validate_fcha_actlzcion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fcha_actlzcion');
          }
          if ('validate_id_usrio_actlzcion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_usrio_actlzcion');
          }
          form_activos_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_activos_mob_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_activos_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_activos_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, 4);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_activos_mob_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_activos_mob_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_activos_mob.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
           {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           if (!empty($str_zip)) {
               exec($str_zip);
           }
           // ----- ZIP log
           $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
           if ($fp)
           {
               @fwrite($fp, $str_zip . "\r\n\r\n");
               @fclose($fp);
           }
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               if (!empty($str_zip)) {
                   exec($str_zip);
               }
               // ----- ZIP log
               $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
               if ($fp)
               {
                   @fwrite($fp, $str_zip . "\r\n\r\n");
                   @fclose($fp);
               }
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " activos") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="form_activos_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_activos_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_activos_mob.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'id_actvo':
               return "ID ACTVO";
               break;
           case 'nmbre':
               return "NMBRE";
               break;
           case 'cdgo':
               return "CDGO";
               break;
           case 'rfrncia':
               return "RFRNCIA";
               break;
           case 'srial':
               return "SRIAL";
               break;
           case 'nmro_actvo':
               return "NMRO ACTVO";
               break;
           case 'alias':
               return "ALIAS";
               break;
           case 'cdgo_qr':
               return "CDGO QR";
               break;
           case 'cdgo_brras':
               return "CDGO BRRAS";
               break;
           case 'cdgo_rfid':
               return "CDGO RFID";
               break;
           case 'cmpsto':
               return "CMPSTO";
               break;
           case 'id_estdo':
               return "ID ESTDO";
               break;
           case 'id_clse':
               return "ID CLSE";
               break;
           case 'id_tpo':
               return "ID TPO";
               break;
           case 'id_mrca':
               return "ID MRCA";
               break;
           case 'mdlo':
               return "MDLO";
               break;
           case 'id_fbrcnte':
               return "ID FBRCNTE";
               break;
           case 'cnfbldad':
               return "CNFBLDAD";
               break;
           case 'id_nit_prvdor':
               return "ID NIT PRVDOR";
               break;
           case 'fcha_cmpra':
               return "FCHA CMPRA";
               break;
           case 'fcha_arrnque':
               return "FCHA ARRNQUE";
               break;
           case 'fcha_fin_grntia':
               return "FCHA FIN GRNTIA";
               break;
           case 'vlor_cmpra1':
               return "VLOR CMPRA1";
               break;
           case 'id_mnda_cmpra1':
               return "ID MNDA CMPRA1";
               break;
           case 'vlor_cmpra2':
               return "VLOR CMPRA2";
               break;
           case 'id_mnda_cmpra2':
               return "ID MNDA CMPRA2";
               break;
           case 'id_area':
               return "ID AREA";
               break;
           case 'id_cntro_csto':
               return "ID CNTRO CSTO";
               break;
           case 'id_ubccion':
               return "ID UBCCION";
               break;
           case 'id_nit_rspnsble':
               return "ID NIT RSPNSBLE";
               break;
           case 'id_cntdor':
               return "ID CNTDOR";
               break;
           case 'vlor_actual':
               return "VLOR ACTUAL";
               break;
           case 'fcha_lctra':
               return "FCHA LCTRA";
               break;
           case 'vlor_estndar':
               return "VLOR ESTNDAR";
               break;
           case 'id_tpo_mdcion':
               return "ID TPO MDCION";
               break;
           case 'fto1':
               return "FTO1";
               break;
           case 'fto2':
               return "FTO2";
               break;
           case 'fto3':
               return "FTO3";
               break;
           case 'fto4':
               return "FTO4";
               break;
           case 'fto5':
               return "FTO5";
               break;
           case 'fto6':
               return "FTO6";
               break;
           case 'prmtro_oprcion':
               return "PRMTRO OPRCION";
               break;
           case 'nmbre_archvo_po':
               return "NMBRE ARCHVO PO";
               break;
           case 'tmno_po':
               return "TMNO PO";
               break;
           case 'fcha_rgstro':
               return "FCHA RGSTRO";
               break;
           case 'id_usrio':
               return "ID USRIO";
               break;
           case 'fcha_actlzcion':
               return "FCHA ACTLZCION";
               break;
           case 'id_usrio_actlzcion':
               return "ID USRIO ACTLZCION";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_activos_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_activos_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_activos_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_activos_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'id_actvo' == $filtro)
        $this->ValidateField_id_actvo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nmbre' == $filtro)
        $this->ValidateField_nmbre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cdgo' == $filtro)
        $this->ValidateField_cdgo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rfrncia' == $filtro)
        $this->ValidateField_rfrncia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'srial' == $filtro)
        $this->ValidateField_srial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nmro_actvo' == $filtro)
        $this->ValidateField_nmro_actvo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'alias' == $filtro)
        $this->ValidateField_alias($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cdgo_qr' == $filtro)
        $this->ValidateField_cdgo_qr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cdgo_brras' == $filtro)
        $this->ValidateField_cdgo_brras($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cdgo_rfid' == $filtro)
        $this->ValidateField_cdgo_rfid($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cmpsto' == $filtro)
        $this->ValidateField_cmpsto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_estdo' == $filtro)
        $this->ValidateField_id_estdo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_clse' == $filtro)
        $this->ValidateField_id_clse($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_tpo' == $filtro)
        $this->ValidateField_id_tpo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_mrca' == $filtro)
        $this->ValidateField_id_mrca($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mdlo' == $filtro)
        $this->ValidateField_mdlo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_fbrcnte' == $filtro)
        $this->ValidateField_id_fbrcnte($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cnfbldad' == $filtro)
        $this->ValidateField_cnfbldad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_nit_prvdor' == $filtro)
        $this->ValidateField_id_nit_prvdor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fcha_cmpra' == $filtro)
        $this->ValidateField_fcha_cmpra($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fcha_arrnque' == $filtro)
        $this->ValidateField_fcha_arrnque($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fcha_fin_grntia' == $filtro)
        $this->ValidateField_fcha_fin_grntia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'vlor_cmpra1' == $filtro)
        $this->ValidateField_vlor_cmpra1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_mnda_cmpra1' == $filtro)
        $this->ValidateField_id_mnda_cmpra1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'vlor_cmpra2' == $filtro)
        $this->ValidateField_vlor_cmpra2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_mnda_cmpra2' == $filtro)
        $this->ValidateField_id_mnda_cmpra2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_area' == $filtro)
        $this->ValidateField_id_area($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_cntro_csto' == $filtro)
        $this->ValidateField_id_cntro_csto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_ubccion' == $filtro)
        $this->ValidateField_id_ubccion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_nit_rspnsble' == $filtro)
        $this->ValidateField_id_nit_rspnsble($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_cntdor' == $filtro)
        $this->ValidateField_id_cntdor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'vlor_actual' == $filtro)
        $this->ValidateField_vlor_actual($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fcha_lctra' == $filtro)
        $this->ValidateField_fcha_lctra($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'vlor_estndar' == $filtro)
        $this->ValidateField_vlor_estndar($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_tpo_mdcion' == $filtro)
        $this->ValidateField_id_tpo_mdcion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fto1' == $filtro)
        $this->ValidateField_fto1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fto2' == $filtro)
        $this->ValidateField_fto2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fto3' == $filtro)
        $this->ValidateField_fto3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fto4' == $filtro)
        $this->ValidateField_fto4($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fto5' == $filtro)
        $this->ValidateField_fto5($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fto6' == $filtro)
        $this->ValidateField_fto6($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'prmtro_oprcion' == $filtro)
        $this->ValidateField_prmtro_oprcion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nmbre_archvo_po' == $filtro)
        $this->ValidateField_nmbre_archvo_po($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tmno_po' == $filtro)
        $this->ValidateField_tmno_po($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fcha_rgstro' == $filtro)
        $this->ValidateField_fcha_rgstro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_usrio' == $filtro)
        $this->ValidateField_id_usrio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fcha_actlzcion' == $filtro)
        $this->ValidateField_fcha_actlzcion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_usrio_actlzcion' == $filtro)
        $this->ValidateField_id_usrio_actlzcion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
//-- converter datas   
          $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_id_actvo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->id_actvo === "" || is_null($this->id_actvo))  
      { 
          $this->id_actvo = 0;
      } 
      nm_limpa_numero($this->id_actvo, $this->field_config['id_actvo']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->id_actvo != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->id_actvo) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "ID ACTVO: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['id_actvo']))
                  {
                      $Campos_Erros['id_actvo'] = array();
                  }
                  $Campos_Erros['id_actvo'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['id_actvo']) || !is_array($this->NM_ajax_info['errList']['id_actvo']))
                  {
                      $this->NM_ajax_info['errList']['id_actvo'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_actvo'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->id_actvo, 11, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "ID ACTVO; " ; 
                  if (!isset($Campos_Erros['id_actvo']))
                  {
                      $Campos_Erros['id_actvo'] = array();
                  }
                  $Campos_Erros['id_actvo'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['id_actvo']) || !is_array($this->NM_ajax_info['errList']['id_actvo']))
                  {
                      $this->NM_ajax_info['errList']['id_actvo'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_actvo'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_actvo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_actvo

    function ValidateField_nmbre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nmbre) > 150) 
          { 
              $hasError = true;
              $Campos_Crit .= "NMBRE " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nmbre']))
              {
                  $Campos_Erros['nmbre'] = array();
              }
              $Campos_Erros['nmbre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nmbre']) || !is_array($this->NM_ajax_info['errList']['nmbre']))
              {
                  $this->NM_ajax_info['errList']['nmbre'] = array();
              }
              $this->NM_ajax_info['errList']['nmbre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nmbre';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nmbre

    function ValidateField_cdgo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cdgo) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "CDGO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cdgo']))
              {
                  $Campos_Erros['cdgo'] = array();
              }
              $Campos_Erros['cdgo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cdgo']) || !is_array($this->NM_ajax_info['errList']['cdgo']))
              {
                  $this->NM_ajax_info['errList']['cdgo'] = array();
              }
              $this->NM_ajax_info['errList']['cdgo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cdgo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cdgo

    function ValidateField_rfrncia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->rfrncia) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "RFRNCIA " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['rfrncia']))
              {
                  $Campos_Erros['rfrncia'] = array();
              }
              $Campos_Erros['rfrncia'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['rfrncia']) || !is_array($this->NM_ajax_info['errList']['rfrncia']))
              {
                  $this->NM_ajax_info['errList']['rfrncia'] = array();
              }
              $this->NM_ajax_info['errList']['rfrncia'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'rfrncia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_rfrncia

    function ValidateField_srial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->srial) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "SRIAL " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['srial']))
              {
                  $Campos_Erros['srial'] = array();
              }
              $Campos_Erros['srial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['srial']) || !is_array($this->NM_ajax_info['errList']['srial']))
              {
                  $this->NM_ajax_info['errList']['srial'] = array();
              }
              $this->NM_ajax_info['errList']['srial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'srial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_srial

    function ValidateField_nmro_actvo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nmro_actvo) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "NMRO ACTVO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nmro_actvo']))
              {
                  $Campos_Erros['nmro_actvo'] = array();
              }
              $Campos_Erros['nmro_actvo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nmro_actvo']) || !is_array($this->NM_ajax_info['errList']['nmro_actvo']))
              {
                  $this->NM_ajax_info['errList']['nmro_actvo'] = array();
              }
              $this->NM_ajax_info['errList']['nmro_actvo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nmro_actvo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nmro_actvo

    function ValidateField_alias(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->alias) > 120) 
          { 
              $hasError = true;
              $Campos_Crit .= "ALIAS " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['alias']))
              {
                  $Campos_Erros['alias'] = array();
              }
              $Campos_Erros['alias'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['alias']) || !is_array($this->NM_ajax_info['errList']['alias']))
              {
                  $this->NM_ajax_info['errList']['alias'] = array();
              }
              $this->NM_ajax_info['errList']['alias'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'alias';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_alias

    function ValidateField_cdgo_qr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cdgo_qr) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "CDGO QR " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cdgo_qr']))
              {
                  $Campos_Erros['cdgo_qr'] = array();
              }
              $Campos_Erros['cdgo_qr'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cdgo_qr']) || !is_array($this->NM_ajax_info['errList']['cdgo_qr']))
              {
                  $this->NM_ajax_info['errList']['cdgo_qr'] = array();
              }
              $this->NM_ajax_info['errList']['cdgo_qr'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cdgo_qr';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cdgo_qr

    function ValidateField_cdgo_brras(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cdgo_brras) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "CDGO BRRAS " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cdgo_brras']))
              {
                  $Campos_Erros['cdgo_brras'] = array();
              }
              $Campos_Erros['cdgo_brras'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cdgo_brras']) || !is_array($this->NM_ajax_info['errList']['cdgo_brras']))
              {
                  $this->NM_ajax_info['errList']['cdgo_brras'] = array();
              }
              $this->NM_ajax_info['errList']['cdgo_brras'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cdgo_brras';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cdgo_brras

    function ValidateField_cdgo_rfid(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cdgo_rfid) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "CDGO RFID " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cdgo_rfid']))
              {
                  $Campos_Erros['cdgo_rfid'] = array();
              }
              $Campos_Erros['cdgo_rfid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cdgo_rfid']) || !is_array($this->NM_ajax_info['errList']['cdgo_rfid']))
              {
                  $this->NM_ajax_info['errList']['cdgo_rfid'] = array();
              }
              $this->NM_ajax_info['errList']['cdgo_rfid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cdgo_rfid';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cdgo_rfid

    function ValidateField_cmpsto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->cmpsto) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto']) && !in_array($this->cmpsto, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['cmpsto']))
                   {
                       $Campos_Erros['cmpsto'] = array();
                   }
                   $Campos_Erros['cmpsto'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['cmpsto']) || !is_array($this->NM_ajax_info['errList']['cmpsto']))
                   {
                       $this->NM_ajax_info['errList']['cmpsto'] = array();
                   }
                   $this->NM_ajax_info['errList']['cmpsto'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cmpsto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cmpsto

    function ValidateField_id_estdo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_estdo) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo']) && !in_array($this->id_estdo, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_estdo']))
                   {
                       $Campos_Erros['id_estdo'] = array();
                   }
                   $Campos_Erros['id_estdo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_estdo']) || !is_array($this->NM_ajax_info['errList']['id_estdo']))
                   {
                       $this->NM_ajax_info['errList']['id_estdo'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_estdo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_estdo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_estdo

    function ValidateField_id_clse(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_clse) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse']) && !in_array($this->id_clse, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_clse']))
                   {
                       $Campos_Erros['id_clse'] = array();
                   }
                   $Campos_Erros['id_clse'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_clse']) || !is_array($this->NM_ajax_info['errList']['id_clse']))
                   {
                       $this->NM_ajax_info['errList']['id_clse'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_clse'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_clse';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_clse

    function ValidateField_id_tpo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_tpo) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo']) && !in_array($this->id_tpo, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_tpo']))
                   {
                       $Campos_Erros['id_tpo'] = array();
                   }
                   $Campos_Erros['id_tpo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_tpo']) || !is_array($this->NM_ajax_info['errList']['id_tpo']))
                   {
                       $this->NM_ajax_info['errList']['id_tpo'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_tpo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_tpo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_tpo

    function ValidateField_id_mrca(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_mrca) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca']) && !in_array($this->id_mrca, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_mrca']))
                   {
                       $Campos_Erros['id_mrca'] = array();
                   }
                   $Campos_Erros['id_mrca'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_mrca']) || !is_array($this->NM_ajax_info['errList']['id_mrca']))
                   {
                       $this->NM_ajax_info['errList']['id_mrca'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_mrca'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_mrca';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_mrca

    function ValidateField_mdlo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->mdlo) > 120) 
          { 
              $hasError = true;
              $Campos_Crit .= "MDLO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['mdlo']))
              {
                  $Campos_Erros['mdlo'] = array();
              }
              $Campos_Erros['mdlo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['mdlo']) || !is_array($this->NM_ajax_info['errList']['mdlo']))
              {
                  $this->NM_ajax_info['errList']['mdlo'] = array();
              }
              $this->NM_ajax_info['errList']['mdlo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'mdlo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_mdlo

    function ValidateField_id_fbrcnte(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_fbrcnte) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte']) && !in_array($this->id_fbrcnte, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_fbrcnte']))
                   {
                       $Campos_Erros['id_fbrcnte'] = array();
                   }
                   $Campos_Erros['id_fbrcnte'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_fbrcnte']) || !is_array($this->NM_ajax_info['errList']['id_fbrcnte']))
                   {
                       $this->NM_ajax_info['errList']['id_fbrcnte'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_fbrcnte'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_fbrcnte';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_fbrcnte

    function ValidateField_cnfbldad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->cnfbldad === "" || is_null($this->cnfbldad))  
      { 
          $this->cnfbldad = 0;
          $this->sc_force_zero[] = 'cnfbldad';
      } 
      }
      if (!empty($this->field_config['cnfbldad']['symbol_dec']))
      {
          nm_limpa_valor($this->cnfbldad, $this->field_config['cnfbldad']['symbol_dec'], $this->field_config['cnfbldad']['symbol_grp']) ; 
          if ('.' == substr($this->cnfbldad, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->cnfbldad, 1)))
              {
                  $this->cnfbldad = '';
              }
              else
              {
                  $this->cnfbldad = '0' . $this->cnfbldad;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->cnfbldad != '')  
          { 
              $iTestSize = 21;
              if (strlen($this->cnfbldad) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "CNFBLDAD: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['cnfbldad']))
                  {
                      $Campos_Erros['cnfbldad'] = array();
                  }
                  $Campos_Erros['cnfbldad'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['cnfbldad']) || !is_array($this->NM_ajax_info['errList']['cnfbldad']))
                  {
                      $this->NM_ajax_info['errList']['cnfbldad'] = array();
                  }
                  $this->NM_ajax_info['errList']['cnfbldad'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->cnfbldad, 14, 6, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "CNFBLDAD; " ; 
                  if (!isset($Campos_Erros['cnfbldad']))
                  {
                      $Campos_Erros['cnfbldad'] = array();
                  }
                  $Campos_Erros['cnfbldad'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cnfbldad']) || !is_array($this->NM_ajax_info['errList']['cnfbldad']))
                  {
                      $this->NM_ajax_info['errList']['cnfbldad'] = array();
                  }
                  $this->NM_ajax_info['errList']['cnfbldad'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cnfbldad';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cnfbldad

    function ValidateField_id_nit_prvdor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_nit_prvdor) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor']) && !in_array($this->id_nit_prvdor, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_nit_prvdor']))
                   {
                       $Campos_Erros['id_nit_prvdor'] = array();
                   }
                   $Campos_Erros['id_nit_prvdor'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_nit_prvdor']) || !is_array($this->NM_ajax_info['errList']['id_nit_prvdor']))
                   {
                       $this->NM_ajax_info['errList']['id_nit_prvdor'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_nit_prvdor'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_nit_prvdor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_nit_prvdor

    function ValidateField_fcha_cmpra(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fcha_cmpra, $this->field_config['fcha_cmpra']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fcha_cmpra']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fcha_cmpra']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fcha_cmpra']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fcha_cmpra']['date_sep']) ; 
          if (trim($this->fcha_cmpra) != "")  
          { 
              if ($teste_validade->Data($this->fcha_cmpra, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "FCHA CMPRA; " ; 
                  if (!isset($Campos_Erros['fcha_cmpra']))
                  {
                      $Campos_Erros['fcha_cmpra'] = array();
                  }
                  $Campos_Erros['fcha_cmpra'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fcha_cmpra']) || !is_array($this->NM_ajax_info['errList']['fcha_cmpra']))
                  {
                      $this->NM_ajax_info['errList']['fcha_cmpra'] = array();
                  }
                  $this->NM_ajax_info['errList']['fcha_cmpra'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fcha_cmpra']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fcha_cmpra';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fcha_cmpra

    function ValidateField_fcha_arrnque(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fcha_arrnque, $this->field_config['fcha_arrnque']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fcha_arrnque']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fcha_arrnque']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fcha_arrnque']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fcha_arrnque']['date_sep']) ; 
          if (trim($this->fcha_arrnque) != "")  
          { 
              if ($teste_validade->Data($this->fcha_arrnque, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "FCHA ARRNQUE; " ; 
                  if (!isset($Campos_Erros['fcha_arrnque']))
                  {
                      $Campos_Erros['fcha_arrnque'] = array();
                  }
                  $Campos_Erros['fcha_arrnque'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fcha_arrnque']) || !is_array($this->NM_ajax_info['errList']['fcha_arrnque']))
                  {
                      $this->NM_ajax_info['errList']['fcha_arrnque'] = array();
                  }
                  $this->NM_ajax_info['errList']['fcha_arrnque'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fcha_arrnque']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fcha_arrnque';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fcha_arrnque

    function ValidateField_fcha_fin_grntia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fcha_fin_grntia, $this->field_config['fcha_fin_grntia']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fcha_fin_grntia']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fcha_fin_grntia']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fcha_fin_grntia']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fcha_fin_grntia']['date_sep']) ; 
          if (trim($this->fcha_fin_grntia) != "")  
          { 
              if ($teste_validade->Data($this->fcha_fin_grntia, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "FCHA FIN GRNTIA; " ; 
                  if (!isset($Campos_Erros['fcha_fin_grntia']))
                  {
                      $Campos_Erros['fcha_fin_grntia'] = array();
                  }
                  $Campos_Erros['fcha_fin_grntia'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fcha_fin_grntia']) || !is_array($this->NM_ajax_info['errList']['fcha_fin_grntia']))
                  {
                      $this->NM_ajax_info['errList']['fcha_fin_grntia'] = array();
                  }
                  $this->NM_ajax_info['errList']['fcha_fin_grntia'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fcha_fin_grntia']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fcha_fin_grntia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fcha_fin_grntia

    function ValidateField_vlor_cmpra1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->vlor_cmpra1 === "" || is_null($this->vlor_cmpra1))  
      { 
          $this->vlor_cmpra1 = 0;
          $this->sc_force_zero[] = 'vlor_cmpra1';
      } 
      }
      if (!empty($this->field_config['vlor_cmpra1']['symbol_dec']))
      {
          nm_limpa_valor($this->vlor_cmpra1, $this->field_config['vlor_cmpra1']['symbol_dec'], $this->field_config['vlor_cmpra1']['symbol_grp']) ; 
          if ('.' == substr($this->vlor_cmpra1, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->vlor_cmpra1, 1)))
              {
                  $this->vlor_cmpra1 = '';
              }
              else
              {
                  $this->vlor_cmpra1 = '0' . $this->vlor_cmpra1;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->vlor_cmpra1 != '')  
          { 
              $iTestSize = 21;
              if (strlen($this->vlor_cmpra1) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VLOR CMPRA1: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['vlor_cmpra1']))
                  {
                      $Campos_Erros['vlor_cmpra1'] = array();
                  }
                  $Campos_Erros['vlor_cmpra1'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['vlor_cmpra1']) || !is_array($this->NM_ajax_info['errList']['vlor_cmpra1']))
                  {
                      $this->NM_ajax_info['errList']['vlor_cmpra1'] = array();
                  }
                  $this->NM_ajax_info['errList']['vlor_cmpra1'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->vlor_cmpra1, 14, 6, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VLOR CMPRA1; " ; 
                  if (!isset($Campos_Erros['vlor_cmpra1']))
                  {
                      $Campos_Erros['vlor_cmpra1'] = array();
                  }
                  $Campos_Erros['vlor_cmpra1'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['vlor_cmpra1']) || !is_array($this->NM_ajax_info['errList']['vlor_cmpra1']))
                  {
                      $this->NM_ajax_info['errList']['vlor_cmpra1'] = array();
                  }
                  $this->NM_ajax_info['errList']['vlor_cmpra1'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'vlor_cmpra1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_vlor_cmpra1

    function ValidateField_id_mnda_cmpra1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_mnda_cmpra1) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1']) && !in_array($this->id_mnda_cmpra1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_mnda_cmpra1']))
                   {
                       $Campos_Erros['id_mnda_cmpra1'] = array();
                   }
                   $Campos_Erros['id_mnda_cmpra1'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_mnda_cmpra1']) || !is_array($this->NM_ajax_info['errList']['id_mnda_cmpra1']))
                   {
                       $this->NM_ajax_info['errList']['id_mnda_cmpra1'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_mnda_cmpra1'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_mnda_cmpra1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_mnda_cmpra1

    function ValidateField_vlor_cmpra2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->vlor_cmpra2 === "" || is_null($this->vlor_cmpra2))  
      { 
          $this->vlor_cmpra2 = 0;
          $this->sc_force_zero[] = 'vlor_cmpra2';
      } 
      }
      if (!empty($this->field_config['vlor_cmpra2']['symbol_dec']))
      {
          nm_limpa_valor($this->vlor_cmpra2, $this->field_config['vlor_cmpra2']['symbol_dec'], $this->field_config['vlor_cmpra2']['symbol_grp']) ; 
          if ('.' == substr($this->vlor_cmpra2, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->vlor_cmpra2, 1)))
              {
                  $this->vlor_cmpra2 = '';
              }
              else
              {
                  $this->vlor_cmpra2 = '0' . $this->vlor_cmpra2;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->vlor_cmpra2 != '')  
          { 
              $iTestSize = 21;
              if (strlen($this->vlor_cmpra2) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VLOR CMPRA2: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['vlor_cmpra2']))
                  {
                      $Campos_Erros['vlor_cmpra2'] = array();
                  }
                  $Campos_Erros['vlor_cmpra2'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['vlor_cmpra2']) || !is_array($this->NM_ajax_info['errList']['vlor_cmpra2']))
                  {
                      $this->NM_ajax_info['errList']['vlor_cmpra2'] = array();
                  }
                  $this->NM_ajax_info['errList']['vlor_cmpra2'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->vlor_cmpra2, 14, 6, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VLOR CMPRA2; " ; 
                  if (!isset($Campos_Erros['vlor_cmpra2']))
                  {
                      $Campos_Erros['vlor_cmpra2'] = array();
                  }
                  $Campos_Erros['vlor_cmpra2'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['vlor_cmpra2']) || !is_array($this->NM_ajax_info['errList']['vlor_cmpra2']))
                  {
                      $this->NM_ajax_info['errList']['vlor_cmpra2'] = array();
                  }
                  $this->NM_ajax_info['errList']['vlor_cmpra2'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'vlor_cmpra2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_vlor_cmpra2

    function ValidateField_id_mnda_cmpra2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_mnda_cmpra2) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2']) && !in_array($this->id_mnda_cmpra2, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_mnda_cmpra2']))
                   {
                       $Campos_Erros['id_mnda_cmpra2'] = array();
                   }
                   $Campos_Erros['id_mnda_cmpra2'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_mnda_cmpra2']) || !is_array($this->NM_ajax_info['errList']['id_mnda_cmpra2']))
                   {
                       $this->NM_ajax_info['errList']['id_mnda_cmpra2'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_mnda_cmpra2'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_mnda_cmpra2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_mnda_cmpra2

    function ValidateField_id_area(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_area) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area']) && !in_array($this->id_area, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_area']))
                   {
                       $Campos_Erros['id_area'] = array();
                   }
                   $Campos_Erros['id_area'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_area']) || !is_array($this->NM_ajax_info['errList']['id_area']))
                   {
                       $this->NM_ajax_info['errList']['id_area'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_area'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_area';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_area

    function ValidateField_id_cntro_csto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->id_cntro_csto === "" || is_null($this->id_cntro_csto))  
      { 
          $this->id_cntro_csto = 0;
          $this->sc_force_zero[] = 'id_cntro_csto';
      } 
      nm_limpa_numero($this->id_cntro_csto, $this->field_config['id_cntro_csto']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->id_cntro_csto != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->id_cntro_csto) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "ID CNTRO CSTO: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['id_cntro_csto']))
                  {
                      $Campos_Erros['id_cntro_csto'] = array();
                  }
                  $Campos_Erros['id_cntro_csto'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['id_cntro_csto']) || !is_array($this->NM_ajax_info['errList']['id_cntro_csto']))
                  {
                      $this->NM_ajax_info['errList']['id_cntro_csto'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_cntro_csto'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->id_cntro_csto, 11, 0, -0, 99999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "ID CNTRO CSTO; " ; 
                  if (!isset($Campos_Erros['id_cntro_csto']))
                  {
                      $Campos_Erros['id_cntro_csto'] = array();
                  }
                  $Campos_Erros['id_cntro_csto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['id_cntro_csto']) || !is_array($this->NM_ajax_info['errList']['id_cntro_csto']))
                  {
                      $this->NM_ajax_info['errList']['id_cntro_csto'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_cntro_csto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_cntro_csto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_cntro_csto

    function ValidateField_id_ubccion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_ubccion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion']) && !in_array($this->id_ubccion, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_ubccion']))
                   {
                       $Campos_Erros['id_ubccion'] = array();
                   }
                   $Campos_Erros['id_ubccion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_ubccion']) || !is_array($this->NM_ajax_info['errList']['id_ubccion']))
                   {
                       $this->NM_ajax_info['errList']['id_ubccion'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_ubccion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_ubccion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_ubccion

    function ValidateField_id_nit_rspnsble(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_nit_rspnsble) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble']) && !in_array($this->id_nit_rspnsble, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_nit_rspnsble']))
                   {
                       $Campos_Erros['id_nit_rspnsble'] = array();
                   }
                   $Campos_Erros['id_nit_rspnsble'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_nit_rspnsble']) || !is_array($this->NM_ajax_info['errList']['id_nit_rspnsble']))
                   {
                       $this->NM_ajax_info['errList']['id_nit_rspnsble'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_nit_rspnsble'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_nit_rspnsble';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_nit_rspnsble

    function ValidateField_id_cntdor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_cntdor) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor']) && !in_array($this->id_cntdor, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_cntdor']))
                   {
                       $Campos_Erros['id_cntdor'] = array();
                   }
                   $Campos_Erros['id_cntdor'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_cntdor']) || !is_array($this->NM_ajax_info['errList']['id_cntdor']))
                   {
                       $this->NM_ajax_info['errList']['id_cntdor'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_cntdor'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_cntdor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_cntdor

    function ValidateField_vlor_actual(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->vlor_actual === "" || is_null($this->vlor_actual))  
      { 
          $this->vlor_actual = 0;
          $this->sc_force_zero[] = 'vlor_actual';
      } 
      }
      if (!empty($this->field_config['vlor_actual']['symbol_dec']))
      {
          nm_limpa_valor($this->vlor_actual, $this->field_config['vlor_actual']['symbol_dec'], $this->field_config['vlor_actual']['symbol_grp']) ; 
          if ('.' == substr($this->vlor_actual, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->vlor_actual, 1)))
              {
                  $this->vlor_actual = '';
              }
              else
              {
                  $this->vlor_actual = '0' . $this->vlor_actual;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->vlor_actual != '')  
          { 
              $iTestSize = 21;
              if (strlen($this->vlor_actual) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VLOR ACTUAL: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['vlor_actual']))
                  {
                      $Campos_Erros['vlor_actual'] = array();
                  }
                  $Campos_Erros['vlor_actual'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['vlor_actual']) || !is_array($this->NM_ajax_info['errList']['vlor_actual']))
                  {
                      $this->NM_ajax_info['errList']['vlor_actual'] = array();
                  }
                  $this->NM_ajax_info['errList']['vlor_actual'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->vlor_actual, 14, 6, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VLOR ACTUAL; " ; 
                  if (!isset($Campos_Erros['vlor_actual']))
                  {
                      $Campos_Erros['vlor_actual'] = array();
                  }
                  $Campos_Erros['vlor_actual'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['vlor_actual']) || !is_array($this->NM_ajax_info['errList']['vlor_actual']))
                  {
                      $this->NM_ajax_info['errList']['vlor_actual'] = array();
                  }
                  $this->NM_ajax_info['errList']['vlor_actual'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'vlor_actual';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_vlor_actual

    function ValidateField_fcha_lctra(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fcha_lctra, $this->field_config['fcha_lctra']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fcha_lctra']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fcha_lctra']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fcha_lctra']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fcha_lctra']['date_sep']) ; 
          if (trim($this->fcha_lctra) != "")  
          { 
              if ($teste_validade->Data($this->fcha_lctra, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "FCHA LCTRA; " ; 
                  if (!isset($Campos_Erros['fcha_lctra']))
                  {
                      $Campos_Erros['fcha_lctra'] = array();
                  }
                  $Campos_Erros['fcha_lctra'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fcha_lctra']) || !is_array($this->NM_ajax_info['errList']['fcha_lctra']))
                  {
                      $this->NM_ajax_info['errList']['fcha_lctra'] = array();
                  }
                  $this->NM_ajax_info['errList']['fcha_lctra'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fcha_lctra']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fcha_lctra';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fcha_lctra

    function ValidateField_vlor_estndar(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->vlor_estndar === "" || is_null($this->vlor_estndar))  
      { 
          $this->vlor_estndar = 0;
          $this->sc_force_zero[] = 'vlor_estndar';
      } 
      }
      if (!empty($this->field_config['vlor_estndar']['symbol_dec']))
      {
          nm_limpa_valor($this->vlor_estndar, $this->field_config['vlor_estndar']['symbol_dec'], $this->field_config['vlor_estndar']['symbol_grp']) ; 
          if ('.' == substr($this->vlor_estndar, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->vlor_estndar, 1)))
              {
                  $this->vlor_estndar = '';
              }
              else
              {
                  $this->vlor_estndar = '0' . $this->vlor_estndar;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->vlor_estndar != '')  
          { 
              $iTestSize = 21;
              if (strlen($this->vlor_estndar) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VLOR ESTNDAR: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['vlor_estndar']))
                  {
                      $Campos_Erros['vlor_estndar'] = array();
                  }
                  $Campos_Erros['vlor_estndar'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['vlor_estndar']) || !is_array($this->NM_ajax_info['errList']['vlor_estndar']))
                  {
                      $this->NM_ajax_info['errList']['vlor_estndar'] = array();
                  }
                  $this->NM_ajax_info['errList']['vlor_estndar'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->vlor_estndar, 14, 6, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VLOR ESTNDAR; " ; 
                  if (!isset($Campos_Erros['vlor_estndar']))
                  {
                      $Campos_Erros['vlor_estndar'] = array();
                  }
                  $Campos_Erros['vlor_estndar'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['vlor_estndar']) || !is_array($this->NM_ajax_info['errList']['vlor_estndar']))
                  {
                      $this->NM_ajax_info['errList']['vlor_estndar'] = array();
                  }
                  $this->NM_ajax_info['errList']['vlor_estndar'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'vlor_estndar';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_vlor_estndar

    function ValidateField_id_tpo_mdcion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_tpo_mdcion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion']) && !in_array($this->id_tpo_mdcion, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_tpo_mdcion']))
                   {
                       $Campos_Erros['id_tpo_mdcion'] = array();
                   }
                   $Campos_Erros['id_tpo_mdcion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_tpo_mdcion']) || !is_array($this->NM_ajax_info['errList']['id_tpo_mdcion']))
                   {
                       $this->NM_ajax_info['errList']['id_tpo_mdcion'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_tpo_mdcion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_tpo_mdcion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_tpo_mdcion

    function ValidateField_fto1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fto1;
            if ("" != $this->fto1 && "S" != $this->fto1_limpa && !$teste_validade->ArqExtensao($this->fto1, array()))
            {
                $hasError = true;
                $Campos_Crit .= "FTO1: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fto1']))
                {
                    $Campos_Erros['fto1'] = array();
                }
                $Campos_Erros['fto1'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fto1']) || !is_array($this->NM_ajax_info['errList']['fto1']))
                {
                    $this->NM_ajax_info['errList']['fto1'] = array();
                }
                $this->NM_ajax_info['errList']['fto1'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fto1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fto1

    function ValidateField_fto2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fto2;
            if ("" != $this->fto2 && "S" != $this->fto2_limpa && !$teste_validade->ArqExtensao($this->fto2, array()))
            {
                $hasError = true;
                $Campos_Crit .= "FTO2: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fto2']))
                {
                    $Campos_Erros['fto2'] = array();
                }
                $Campos_Erros['fto2'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fto2']) || !is_array($this->NM_ajax_info['errList']['fto2']))
                {
                    $this->NM_ajax_info['errList']['fto2'] = array();
                }
                $this->NM_ajax_info['errList']['fto2'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fto2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fto2

    function ValidateField_fto3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fto3;
            if ("" != $this->fto3 && "S" != $this->fto3_limpa && !$teste_validade->ArqExtensao($this->fto3, array()))
            {
                $hasError = true;
                $Campos_Crit .= "FTO3: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fto3']))
                {
                    $Campos_Erros['fto3'] = array();
                }
                $Campos_Erros['fto3'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fto3']) || !is_array($this->NM_ajax_info['errList']['fto3']))
                {
                    $this->NM_ajax_info['errList']['fto3'] = array();
                }
                $this->NM_ajax_info['errList']['fto3'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fto3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fto3

    function ValidateField_fto4(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fto4;
            if ("" != $this->fto4 && "S" != $this->fto4_limpa && !$teste_validade->ArqExtensao($this->fto4, array()))
            {
                $hasError = true;
                $Campos_Crit .= "FTO4: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fto4']))
                {
                    $Campos_Erros['fto4'] = array();
                }
                $Campos_Erros['fto4'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fto4']) || !is_array($this->NM_ajax_info['errList']['fto4']))
                {
                    $this->NM_ajax_info['errList']['fto4'] = array();
                }
                $this->NM_ajax_info['errList']['fto4'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fto4';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fto4

    function ValidateField_fto5(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fto5;
            if ("" != $this->fto5 && "S" != $this->fto5_limpa && !$teste_validade->ArqExtensao($this->fto5, array()))
            {
                $hasError = true;
                $Campos_Crit .= "FTO5: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fto5']))
                {
                    $Campos_Erros['fto5'] = array();
                }
                $Campos_Erros['fto5'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fto5']) || !is_array($this->NM_ajax_info['errList']['fto5']))
                {
                    $this->NM_ajax_info['errList']['fto5'] = array();
                }
                $this->NM_ajax_info['errList']['fto5'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fto5';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fto5

    function ValidateField_fto6(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fto6;
            if ("" != $this->fto6 && "S" != $this->fto6_limpa && !$teste_validade->ArqExtensao($this->fto6, array()))
            {
                $hasError = true;
                $Campos_Crit .= "FTO6: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fto6']))
                {
                    $Campos_Erros['fto6'] = array();
                }
                $Campos_Erros['fto6'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fto6']) || !is_array($this->NM_ajax_info['errList']['fto6']))
                {
                    $this->NM_ajax_info['errList']['fto6'] = array();
                }
                $this->NM_ajax_info['errList']['fto6'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fto6';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fto6

    function ValidateField_prmtro_oprcion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->prmtro_oprcion;
            if ("" != $this->prmtro_oprcion && "S" != $this->prmtro_oprcion_limpa && !$teste_validade->ArqExtensao($this->prmtro_oprcion, array()))
            {
                $hasError = true;
                $Campos_Crit .= "PRMTRO OPRCION: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['prmtro_oprcion']))
                {
                    $Campos_Erros['prmtro_oprcion'] = array();
                }
                $Campos_Erros['prmtro_oprcion'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['prmtro_oprcion']) || !is_array($this->NM_ajax_info['errList']['prmtro_oprcion']))
                {
                    $this->NM_ajax_info['errList']['prmtro_oprcion'] = array();
                }
                $this->NM_ajax_info['errList']['prmtro_oprcion'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'prmtro_oprcion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_prmtro_oprcion

    function ValidateField_nmbre_archvo_po(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nmbre_archvo_po) > 120) 
          { 
              $hasError = true;
              $Campos_Crit .= "NMBRE ARCHVO PO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nmbre_archvo_po']))
              {
                  $Campos_Erros['nmbre_archvo_po'] = array();
              }
              $Campos_Erros['nmbre_archvo_po'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nmbre_archvo_po']) || !is_array($this->NM_ajax_info['errList']['nmbre_archvo_po']))
              {
                  $this->NM_ajax_info['errList']['nmbre_archvo_po'] = array();
              }
              $this->NM_ajax_info['errList']['nmbre_archvo_po'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 120 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nmbre_archvo_po';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nmbre_archvo_po

    function ValidateField_tmno_po(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->tmno_po) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "TMNO PO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['tmno_po']))
              {
                  $Campos_Erros['tmno_po'] = array();
              }
              $Campos_Erros['tmno_po'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['tmno_po']) || !is_array($this->NM_ajax_info['errList']['tmno_po']))
              {
                  $this->NM_ajax_info['errList']['tmno_po'] = array();
              }
              $this->NM_ajax_info['errList']['tmno_po'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tmno_po';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tmno_po

    function ValidateField_fcha_rgstro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fcha_rgstro, $this->field_config['fcha_rgstro']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fcha_rgstro']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fcha_rgstro']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fcha_rgstro']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fcha_rgstro']['date_sep']) ; 
          if (trim($this->fcha_rgstro) != "")  
          { 
              if ($teste_validade->Data($this->fcha_rgstro, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "FCHA RGSTRO; " ; 
                  if (!isset($Campos_Erros['fcha_rgstro']))
                  {
                      $Campos_Erros['fcha_rgstro'] = array();
                  }
                  $Campos_Erros['fcha_rgstro'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fcha_rgstro']) || !is_array($this->NM_ajax_info['errList']['fcha_rgstro']))
                  {
                      $this->NM_ajax_info['errList']['fcha_rgstro'] = array();
                  }
                  $this->NM_ajax_info['errList']['fcha_rgstro'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fcha_rgstro']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fcha_rgstro';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fcha_rgstro

    function ValidateField_id_usrio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->id_usrio) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio']) && !in_array($this->id_usrio, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_usrio']))
                   {
                       $Campos_Erros['id_usrio'] = array();
                   }
                   $Campos_Erros['id_usrio'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_usrio']) || !is_array($this->NM_ajax_info['errList']['id_usrio']))
                   {
                       $this->NM_ajax_info['errList']['id_usrio'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_usrio'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_usrio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_usrio

    function ValidateField_fcha_actlzcion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fcha_actlzcion, $this->field_config['fcha_actlzcion']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fcha_actlzcion']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fcha_actlzcion']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fcha_actlzcion']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fcha_actlzcion']['date_sep']) ; 
          if (trim($this->fcha_actlzcion) != "")  
          { 
              if ($teste_validade->Data($this->fcha_actlzcion, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "FCHA ACTLZCION; " ; 
                  if (!isset($Campos_Erros['fcha_actlzcion']))
                  {
                      $Campos_Erros['fcha_actlzcion'] = array();
                  }
                  $Campos_Erros['fcha_actlzcion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fcha_actlzcion']) || !is_array($this->NM_ajax_info['errList']['fcha_actlzcion']))
                  {
                      $this->NM_ajax_info['errList']['fcha_actlzcion'] = array();
                  }
                  $this->NM_ajax_info['errList']['fcha_actlzcion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fcha_actlzcion']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fcha_actlzcion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
      nm_limpa_hora($this->fcha_actlzcion_hora, $this->field_config['fcha_actlzcion_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['fcha_actlzcion_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['fcha_actlzcion_hora']['time_sep']) ; 
          if (trim($this->fcha_actlzcion_hora) != "")  
          { 
              if ($teste_validade->Hora($this->fcha_actlzcion_hora, $Format_Hora) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "FCHA ACTLZCION; " ; 
                  if (!isset($Campos_Erros['fcha_actlzcion_hora']))
                  {
                      $Campos_Erros['fcha_actlzcion_hora'] = array();
                  }
                  $Campos_Erros['fcha_actlzcion_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fcha_actlzcion']) || !is_array($this->NM_ajax_info['errList']['fcha_actlzcion']))
                  {
                      $this->NM_ajax_info['errList']['fcha_actlzcion'] = array();
                  }
                  $this->NM_ajax_info['errList']['fcha_actlzcion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if (isset($Campos_Erros['fcha_actlzcion']) && isset($Campos_Erros['fcha_actlzcion_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['fcha_actlzcion'], $Campos_Erros['fcha_actlzcion_hora']);
          if (empty($Campos_Erros['fcha_actlzcion_hora']))
          {
              unset($Campos_Erros['fcha_actlzcion_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['fcha_actlzcion']))
          {
              $this->NM_ajax_info['errList']['fcha_actlzcion'] = array_unique($this->NM_ajax_info['errList']['fcha_actlzcion']);
          }
      }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fcha_actlzcion_hora';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fcha_actlzcion_hora

    function ValidateField_id_usrio_actlzcion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->id_usrio_actlzcion) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "ID USRIO ACTLZCION " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['id_usrio_actlzcion']))
              {
                  $Campos_Erros['id_usrio_actlzcion'] = array();
              }
              $Campos_Erros['id_usrio_actlzcion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['id_usrio_actlzcion']) || !is_array($this->NM_ajax_info['errList']['id_usrio_actlzcion']))
              {
                  $this->NM_ajax_info['errList']['id_usrio_actlzcion'] = array();
              }
              $this->NM_ajax_info['errList']['id_usrio_actlzcion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'id_usrio_actlzcion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_id_usrio_actlzcion
//
//--------------------------------------------------------------------------------------
   function upload_img_doc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros) 
   {
     global $nm_browser;
     if (!empty($Campos_Crit) || !empty($Campos_Falta))
     {
          return;
     }
      if ($this->nmgp_opcao == "incluir" && $this->fto1 == "" &&  $this->fto1_limpa != "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto1']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto1']))
      { 
          $this->fto1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto1'];
      } 
      elseif ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fto1 == "none") 
          { 
              $this->fto1 = ""; 
          } 
          if ($this->fto1 != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_activos_mob_doc_name.php';
              }
              $this->fto1 = sc_upload_unprotect_chars($this->fto1);
              $this->fto1_scfile_name = sc_upload_unprotect_chars($this->fto1_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fto1_scfile_type = substr($this->fto1_scfile_type, 0, strpos($this->fto1_scfile_type, ";")) ; 
              } 
              if ($this->fto1_scfile_type == "image/pjpeg" || $this->fto1_scfile_type == "image/jpeg" || $this->fto1_scfile_type == "image/gif" ||  
                  $this->fto1_scfile_type == "image/png" || $this->fto1_scfile_type == "image/x-png" || $this->fto1_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fto1))  
                  { 
                      $reg_fto1 = file_get_contents($this->fto1); 
                      $this->fto1 = $reg_fto1; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "FTO1 " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fto1 = "";
                      if (!isset($Campos_Erros['fto1']))
                      {
                          $Campos_Erros['fto1'] = array();
                      }
                      $Campos_Erros['fto1'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fto1']) || !is_array($this->NM_ajax_info['errList']['fto1']))
                      {
                          $this->NM_ajax_info['errList']['fto1'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto1'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fto1 = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "FTO1 " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['fto1']))
                      {
                          $Campos_Erros['fto1'] = array();
                      }
                      $Campos_Erros['fto1'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['fto1']) || !is_array($this->NM_ajax_info['errList']['fto1']))
                      {
                          $this->NM_ajax_info['errList']['fto1'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto1'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto1']) && $this->fto1_limpa != "S")
          {
              $this->fto1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto1'];
          }
      } 
      if ($this->nmgp_opcao == "incluir" && $this->fto2 == "" &&  $this->fto2_limpa != "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto2']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto2']))
      { 
          $this->fto2 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto2'];
      } 
      elseif ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fto2 == "none") 
          { 
              $this->fto2 = ""; 
          } 
          if ($this->fto2 != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_activos_mob_doc_name.php';
              }
              $this->fto2 = sc_upload_unprotect_chars($this->fto2);
              $this->fto2_scfile_name = sc_upload_unprotect_chars($this->fto2_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fto2_scfile_type = substr($this->fto2_scfile_type, 0, strpos($this->fto2_scfile_type, ";")) ; 
              } 
              if ($this->fto2_scfile_type == "image/pjpeg" || $this->fto2_scfile_type == "image/jpeg" || $this->fto2_scfile_type == "image/gif" ||  
                  $this->fto2_scfile_type == "image/png" || $this->fto2_scfile_type == "image/x-png" || $this->fto2_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fto2))  
                  { 
                      $reg_fto2 = file_get_contents($this->fto2); 
                      $this->fto2 = $reg_fto2; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "FTO2 " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fto2 = "";
                      if (!isset($Campos_Erros['fto2']))
                      {
                          $Campos_Erros['fto2'] = array();
                      }
                      $Campos_Erros['fto2'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fto2']) || !is_array($this->NM_ajax_info['errList']['fto2']))
                      {
                          $this->NM_ajax_info['errList']['fto2'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto2'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fto2 = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "FTO2 " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['fto2']))
                      {
                          $Campos_Erros['fto2'] = array();
                      }
                      $Campos_Erros['fto2'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['fto2']) || !is_array($this->NM_ajax_info['errList']['fto2']))
                      {
                          $this->NM_ajax_info['errList']['fto2'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto2'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto2']) && $this->fto2_limpa != "S")
          {
              $this->fto2 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto2'];
          }
      } 
      if ($this->nmgp_opcao == "incluir" && $this->fto3 == "" &&  $this->fto3_limpa != "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto3']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto3']))
      { 
          $this->fto3 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto3'];
      } 
      elseif ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fto3 == "none") 
          { 
              $this->fto3 = ""; 
          } 
          if ($this->fto3 != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_activos_mob_doc_name.php';
              }
              $this->fto3 = sc_upload_unprotect_chars($this->fto3);
              $this->fto3_scfile_name = sc_upload_unprotect_chars($this->fto3_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fto3_scfile_type = substr($this->fto3_scfile_type, 0, strpos($this->fto3_scfile_type, ";")) ; 
              } 
              if ($this->fto3_scfile_type == "image/pjpeg" || $this->fto3_scfile_type == "image/jpeg" || $this->fto3_scfile_type == "image/gif" ||  
                  $this->fto3_scfile_type == "image/png" || $this->fto3_scfile_type == "image/x-png" || $this->fto3_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fto3))  
                  { 
                      $reg_fto3 = file_get_contents($this->fto3); 
                      $this->fto3 = $reg_fto3; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "FTO3 " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fto3 = "";
                      if (!isset($Campos_Erros['fto3']))
                      {
                          $Campos_Erros['fto3'] = array();
                      }
                      $Campos_Erros['fto3'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fto3']) || !is_array($this->NM_ajax_info['errList']['fto3']))
                      {
                          $this->NM_ajax_info['errList']['fto3'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto3'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fto3 = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "FTO3 " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['fto3']))
                      {
                          $Campos_Erros['fto3'] = array();
                      }
                      $Campos_Erros['fto3'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['fto3']) || !is_array($this->NM_ajax_info['errList']['fto3']))
                      {
                          $this->NM_ajax_info['errList']['fto3'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto3'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto3']) && $this->fto3_limpa != "S")
          {
              $this->fto3 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto3'];
          }
      } 
      if ($this->nmgp_opcao == "incluir" && $this->fto4 == "" &&  $this->fto4_limpa != "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto4']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto4']))
      { 
          $this->fto4 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto4'];
      } 
      elseif ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fto4 == "none") 
          { 
              $this->fto4 = ""; 
          } 
          if ($this->fto4 != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_activos_mob_doc_name.php';
              }
              $this->fto4 = sc_upload_unprotect_chars($this->fto4);
              $this->fto4_scfile_name = sc_upload_unprotect_chars($this->fto4_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fto4_scfile_type = substr($this->fto4_scfile_type, 0, strpos($this->fto4_scfile_type, ";")) ; 
              } 
              if ($this->fto4_scfile_type == "image/pjpeg" || $this->fto4_scfile_type == "image/jpeg" || $this->fto4_scfile_type == "image/gif" ||  
                  $this->fto4_scfile_type == "image/png" || $this->fto4_scfile_type == "image/x-png" || $this->fto4_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fto4))  
                  { 
                      $reg_fto4 = file_get_contents($this->fto4); 
                      $this->fto4 = $reg_fto4; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "FTO4 " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fto4 = "";
                      if (!isset($Campos_Erros['fto4']))
                      {
                          $Campos_Erros['fto4'] = array();
                      }
                      $Campos_Erros['fto4'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fto4']) || !is_array($this->NM_ajax_info['errList']['fto4']))
                      {
                          $this->NM_ajax_info['errList']['fto4'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto4'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fto4 = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "FTO4 " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['fto4']))
                      {
                          $Campos_Erros['fto4'] = array();
                      }
                      $Campos_Erros['fto4'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['fto4']) || !is_array($this->NM_ajax_info['errList']['fto4']))
                      {
                          $this->NM_ajax_info['errList']['fto4'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto4'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto4']) && $this->fto4_limpa != "S")
          {
              $this->fto4 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto4'];
          }
      } 
      if ($this->nmgp_opcao == "incluir" && $this->fto5 == "" &&  $this->fto5_limpa != "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto5']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto5']))
      { 
          $this->fto5 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto5'];
      } 
      elseif ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fto5 == "none") 
          { 
              $this->fto5 = ""; 
          } 
          if ($this->fto5 != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_activos_mob_doc_name.php';
              }
              $this->fto5 = sc_upload_unprotect_chars($this->fto5);
              $this->fto5_scfile_name = sc_upload_unprotect_chars($this->fto5_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fto5_scfile_type = substr($this->fto5_scfile_type, 0, strpos($this->fto5_scfile_type, ";")) ; 
              } 
              if ($this->fto5_scfile_type == "image/pjpeg" || $this->fto5_scfile_type == "image/jpeg" || $this->fto5_scfile_type == "image/gif" ||  
                  $this->fto5_scfile_type == "image/png" || $this->fto5_scfile_type == "image/x-png" || $this->fto5_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fto5))  
                  { 
                      $reg_fto5 = file_get_contents($this->fto5); 
                      $this->fto5 = $reg_fto5; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "FTO5 " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fto5 = "";
                      if (!isset($Campos_Erros['fto5']))
                      {
                          $Campos_Erros['fto5'] = array();
                      }
                      $Campos_Erros['fto5'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fto5']) || !is_array($this->NM_ajax_info['errList']['fto5']))
                      {
                          $this->NM_ajax_info['errList']['fto5'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto5'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fto5 = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "FTO5 " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['fto5']))
                      {
                          $Campos_Erros['fto5'] = array();
                      }
                      $Campos_Erros['fto5'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['fto5']) || !is_array($this->NM_ajax_info['errList']['fto5']))
                      {
                          $this->NM_ajax_info['errList']['fto5'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto5'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto5']) && $this->fto5_limpa != "S")
          {
              $this->fto5 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto5'];
          }
      } 
      if ($this->nmgp_opcao == "incluir" && $this->fto6 == "" &&  $this->fto6_limpa != "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto6']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto6']))
      { 
          $this->fto6 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto6'];
      } 
      elseif ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fto6 == "none") 
          { 
              $this->fto6 = ""; 
          } 
          if ($this->fto6 != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_activos_mob_doc_name.php';
              }
              $this->fto6 = sc_upload_unprotect_chars($this->fto6);
              $this->fto6_scfile_name = sc_upload_unprotect_chars($this->fto6_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fto6_scfile_type = substr($this->fto6_scfile_type, 0, strpos($this->fto6_scfile_type, ";")) ; 
              } 
              if ($this->fto6_scfile_type == "image/pjpeg" || $this->fto6_scfile_type == "image/jpeg" || $this->fto6_scfile_type == "image/gif" ||  
                  $this->fto6_scfile_type == "image/png" || $this->fto6_scfile_type == "image/x-png" || $this->fto6_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fto6))  
                  { 
                      $reg_fto6 = file_get_contents($this->fto6); 
                      $this->fto6 = $reg_fto6; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "FTO6 " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fto6 = "";
                      if (!isset($Campos_Erros['fto6']))
                      {
                          $Campos_Erros['fto6'] = array();
                      }
                      $Campos_Erros['fto6'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fto6']) || !is_array($this->NM_ajax_info['errList']['fto6']))
                      {
                          $this->NM_ajax_info['errList']['fto6'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto6'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fto6 = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "FTO6 " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['fto6']))
                      {
                          $Campos_Erros['fto6'] = array();
                      }
                      $Campos_Erros['fto6'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['fto6']) || !is_array($this->NM_ajax_info['errList']['fto6']))
                      {
                          $this->NM_ajax_info['errList']['fto6'] = array();
                      }
                      $this->NM_ajax_info['errList']['fto6'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto6']) && $this->fto6_limpa != "S")
          {
              $this->fto6 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['fto6'];
          }
      } 
      if ($this->nmgp_opcao == "incluir" && $this->prmtro_oprcion == "" &&  $this->prmtro_oprcion_limpa != "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['prmtro_oprcion']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['prmtro_oprcion']))
      { 
          $this->prmtro_oprcion = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['prmtro_oprcion'];
      } 
      elseif ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->prmtro_oprcion == "none") 
          { 
              $this->prmtro_oprcion = ""; 
          } 
          if ($this->prmtro_oprcion != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_activos_mob_doc_name.php';
              }
              $this->prmtro_oprcion = sc_upload_unprotect_chars($this->prmtro_oprcion);
              $this->prmtro_oprcion_scfile_name = sc_upload_unprotect_chars($this->prmtro_oprcion_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->prmtro_oprcion_scfile_type = substr($this->prmtro_oprcion_scfile_type, 0, strpos($this->prmtro_oprcion_scfile_type, ";")) ; 
              } 
              if ($this->prmtro_oprcion_scfile_type == "image/pjpeg" || $this->prmtro_oprcion_scfile_type == "image/jpeg" || $this->prmtro_oprcion_scfile_type == "image/gif" ||  
                  $this->prmtro_oprcion_scfile_type == "image/png" || $this->prmtro_oprcion_scfile_type == "image/x-png" || $this->prmtro_oprcion_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->prmtro_oprcion))  
                  { 
                      $reg_prmtro_oprcion = file_get_contents($this->prmtro_oprcion); 
                      $this->prmtro_oprcion = $reg_prmtro_oprcion; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "PRMTRO OPRCION " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->prmtro_oprcion = "";
                      if (!isset($Campos_Erros['prmtro_oprcion']))
                      {
                          $Campos_Erros['prmtro_oprcion'] = array();
                      }
                      $Campos_Erros['prmtro_oprcion'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['prmtro_oprcion']) || !is_array($this->NM_ajax_info['errList']['prmtro_oprcion']))
                      {
                          $this->NM_ajax_info['errList']['prmtro_oprcion'] = array();
                      }
                      $this->NM_ajax_info['errList']['prmtro_oprcion'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->prmtro_oprcion = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "PRMTRO OPRCION " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['prmtro_oprcion']))
                      {
                          $Campos_Erros['prmtro_oprcion'] = array();
                      }
                      $Campos_Erros['prmtro_oprcion'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['prmtro_oprcion']) || !is_array($this->NM_ajax_info['errList']['prmtro_oprcion']))
                      {
                          $this->NM_ajax_info['errList']['prmtro_oprcion'] = array();
                      }
                      $this->NM_ajax_info['errList']['prmtro_oprcion'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['prmtro_oprcion']) && $this->prmtro_oprcion_limpa != "S")
          {
              $this->prmtro_oprcion = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form']['prmtro_oprcion'];
          }
      } 
   }

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['id_actvo'] = $this->id_actvo;
    $this->nmgp_dados_form['nmbre'] = $this->nmbre;
    $this->nmgp_dados_form['cdgo'] = $this->cdgo;
    $this->nmgp_dados_form['rfrncia'] = $this->rfrncia;
    $this->nmgp_dados_form['srial'] = $this->srial;
    $this->nmgp_dados_form['nmro_actvo'] = $this->nmro_actvo;
    $this->nmgp_dados_form['alias'] = $this->alias;
    $this->nmgp_dados_form['cdgo_qr'] = $this->cdgo_qr;
    $this->nmgp_dados_form['cdgo_brras'] = $this->cdgo_brras;
    $this->nmgp_dados_form['cdgo_rfid'] = $this->cdgo_rfid;
    $this->nmgp_dados_form['cmpsto'] = $this->cmpsto;
    $this->nmgp_dados_form['id_estdo'] = $this->id_estdo;
    $this->nmgp_dados_form['id_clse'] = $this->id_clse;
    $this->nmgp_dados_form['id_tpo'] = $this->id_tpo;
    $this->nmgp_dados_form['id_mrca'] = $this->id_mrca;
    $this->nmgp_dados_form['mdlo'] = $this->mdlo;
    $this->nmgp_dados_form['id_fbrcnte'] = $this->id_fbrcnte;
    $this->nmgp_dados_form['cnfbldad'] = $this->cnfbldad;
    $this->nmgp_dados_form['id_nit_prvdor'] = $this->id_nit_prvdor;
    $this->nmgp_dados_form['fcha_cmpra'] = (strlen(trim($this->fcha_cmpra)) > 19) ? str_replace(".", ":", $this->fcha_cmpra) : trim($this->fcha_cmpra);
    $this->nmgp_dados_form['fcha_arrnque'] = (strlen(trim($this->fcha_arrnque)) > 19) ? str_replace(".", ":", $this->fcha_arrnque) : trim($this->fcha_arrnque);
    $this->nmgp_dados_form['fcha_fin_grntia'] = (strlen(trim($this->fcha_fin_grntia)) > 19) ? str_replace(".", ":", $this->fcha_fin_grntia) : trim($this->fcha_fin_grntia);
    $this->nmgp_dados_form['vlor_cmpra1'] = $this->vlor_cmpra1;
    $this->nmgp_dados_form['id_mnda_cmpra1'] = $this->id_mnda_cmpra1;
    $this->nmgp_dados_form['vlor_cmpra2'] = $this->vlor_cmpra2;
    $this->nmgp_dados_form['id_mnda_cmpra2'] = $this->id_mnda_cmpra2;
    $this->nmgp_dados_form['id_area'] = $this->id_area;
    $this->nmgp_dados_form['id_cntro_csto'] = $this->id_cntro_csto;
    $this->nmgp_dados_form['id_ubccion'] = $this->id_ubccion;
    $this->nmgp_dados_form['id_nit_rspnsble'] = $this->id_nit_rspnsble;
    $this->nmgp_dados_form['id_cntdor'] = $this->id_cntdor;
    $this->nmgp_dados_form['vlor_actual'] = $this->vlor_actual;
    $this->nmgp_dados_form['fcha_lctra'] = (strlen(trim($this->fcha_lctra)) > 19) ? str_replace(".", ":", $this->fcha_lctra) : trim($this->fcha_lctra);
    $this->nmgp_dados_form['vlor_estndar'] = $this->vlor_estndar;
    $this->nmgp_dados_form['id_tpo_mdcion'] = $this->id_tpo_mdcion;
    if (empty($this->fto1))
    {
        $this->fto1 = $this->nmgp_dados_form['fto1'];
    }
    $this->nmgp_dados_form['fto1'] = $this->fto1;
    $this->nmgp_dados_form['fto1_limpa'] = $this->fto1_limpa;
    if (empty($this->fto2))
    {
        $this->fto2 = $this->nmgp_dados_form['fto2'];
    }
    $this->nmgp_dados_form['fto2'] = $this->fto2;
    $this->nmgp_dados_form['fto2_limpa'] = $this->fto2_limpa;
    if (empty($this->fto3))
    {
        $this->fto3 = $this->nmgp_dados_form['fto3'];
    }
    $this->nmgp_dados_form['fto3'] = $this->fto3;
    $this->nmgp_dados_form['fto3_limpa'] = $this->fto3_limpa;
    if (empty($this->fto4))
    {
        $this->fto4 = $this->nmgp_dados_form['fto4'];
    }
    $this->nmgp_dados_form['fto4'] = $this->fto4;
    $this->nmgp_dados_form['fto4_limpa'] = $this->fto4_limpa;
    if (empty($this->fto5))
    {
        $this->fto5 = $this->nmgp_dados_form['fto5'];
    }
    $this->nmgp_dados_form['fto5'] = $this->fto5;
    $this->nmgp_dados_form['fto5_limpa'] = $this->fto5_limpa;
    if (empty($this->fto6))
    {
        $this->fto6 = $this->nmgp_dados_form['fto6'];
    }
    $this->nmgp_dados_form['fto6'] = $this->fto6;
    $this->nmgp_dados_form['fto6_limpa'] = $this->fto6_limpa;
    if (empty($this->prmtro_oprcion))
    {
        $this->prmtro_oprcion = $this->nmgp_dados_form['prmtro_oprcion'];
    }
    $this->nmgp_dados_form['prmtro_oprcion'] = $this->prmtro_oprcion;
    $this->nmgp_dados_form['prmtro_oprcion_limpa'] = $this->prmtro_oprcion_limpa;
    $this->nmgp_dados_form['nmbre_archvo_po'] = $this->nmbre_archvo_po;
    $this->nmgp_dados_form['tmno_po'] = $this->tmno_po;
    $this->nmgp_dados_form['fcha_rgstro'] = (strlen(trim($this->fcha_rgstro)) > 19) ? str_replace(".", ":", $this->fcha_rgstro) : trim($this->fcha_rgstro);
    $this->nmgp_dados_form['id_usrio'] = $this->id_usrio;
    $this->nmgp_dados_form['fcha_actlzcion'] = (strlen(trim($this->fcha_actlzcion)) > 19) ? str_replace(".", ":", $this->fcha_actlzcion) : trim($this->fcha_actlzcion);
    $this->nmgp_dados_form['id_usrio_actlzcion'] = $this->id_usrio_actlzcion;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['id_actvo'] = $this->id_actvo;
      nm_limpa_numero($this->id_actvo, $this->field_config['id_actvo']['symbol_grp']) ; 
      $this->Before_unformat['cnfbldad'] = $this->cnfbldad;
      if (!empty($this->field_config['cnfbldad']['symbol_dec']))
      {
         nm_limpa_valor($this->cnfbldad, $this->field_config['cnfbldad']['symbol_dec'], $this->field_config['cnfbldad']['symbol_grp']);
      }
      $this->Before_unformat['fcha_cmpra'] = $this->fcha_cmpra;
      nm_limpa_data($this->fcha_cmpra, $this->field_config['fcha_cmpra']['date_sep']) ; 
      $this->Before_unformat['fcha_arrnque'] = $this->fcha_arrnque;
      nm_limpa_data($this->fcha_arrnque, $this->field_config['fcha_arrnque']['date_sep']) ; 
      $this->Before_unformat['fcha_fin_grntia'] = $this->fcha_fin_grntia;
      nm_limpa_data($this->fcha_fin_grntia, $this->field_config['fcha_fin_grntia']['date_sep']) ; 
      $this->Before_unformat['vlor_cmpra1'] = $this->vlor_cmpra1;
      if (!empty($this->field_config['vlor_cmpra1']['symbol_dec']))
      {
         nm_limpa_valor($this->vlor_cmpra1, $this->field_config['vlor_cmpra1']['symbol_dec'], $this->field_config['vlor_cmpra1']['symbol_grp']);
      }
      $this->Before_unformat['vlor_cmpra2'] = $this->vlor_cmpra2;
      if (!empty($this->field_config['vlor_cmpra2']['symbol_dec']))
      {
         nm_limpa_valor($this->vlor_cmpra2, $this->field_config['vlor_cmpra2']['symbol_dec'], $this->field_config['vlor_cmpra2']['symbol_grp']);
      }
      $this->Before_unformat['id_cntro_csto'] = $this->id_cntro_csto;
      nm_limpa_numero($this->id_cntro_csto, $this->field_config['id_cntro_csto']['symbol_grp']) ; 
      $this->Before_unformat['vlor_actual'] = $this->vlor_actual;
      if (!empty($this->field_config['vlor_actual']['symbol_dec']))
      {
         nm_limpa_valor($this->vlor_actual, $this->field_config['vlor_actual']['symbol_dec'], $this->field_config['vlor_actual']['symbol_grp']);
      }
      $this->Before_unformat['fcha_lctra'] = $this->fcha_lctra;
      nm_limpa_data($this->fcha_lctra, $this->field_config['fcha_lctra']['date_sep']) ; 
      $this->Before_unformat['vlor_estndar'] = $this->vlor_estndar;
      if (!empty($this->field_config['vlor_estndar']['symbol_dec']))
      {
         nm_limpa_valor($this->vlor_estndar, $this->field_config['vlor_estndar']['symbol_dec'], $this->field_config['vlor_estndar']['symbol_grp']);
      }
      $this->Before_unformat['fcha_rgstro'] = $this->fcha_rgstro;
      nm_limpa_data($this->fcha_rgstro, $this->field_config['fcha_rgstro']['date_sep']) ; 
      $this->Before_unformat['fcha_actlzcion'] = $this->fcha_actlzcion;
      nm_limpa_data($this->fcha_actlzcion, $this->field_config['fcha_actlzcion']['date_sep']) ; 
      nm_limpa_hora($this->fcha_actlzcion_hora, $this->field_config['fcha_actlzcion']['time_sep']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "id_actvo")
      {
          nm_limpa_numero($this->id_actvo, $this->field_config['id_actvo']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cnfbldad")
      {
          if (!empty($this->field_config['cnfbldad']['symbol_dec']))
          {
             nm_limpa_valor($this->cnfbldad, $this->field_config['cnfbldad']['symbol_dec'], $this->field_config['cnfbldad']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "vlor_cmpra1")
      {
          if (!empty($this->field_config['vlor_cmpra1']['symbol_dec']))
          {
             nm_limpa_valor($this->vlor_cmpra1, $this->field_config['vlor_cmpra1']['symbol_dec'], $this->field_config['vlor_cmpra1']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "vlor_cmpra2")
      {
          if (!empty($this->field_config['vlor_cmpra2']['symbol_dec']))
          {
             nm_limpa_valor($this->vlor_cmpra2, $this->field_config['vlor_cmpra2']['symbol_dec'], $this->field_config['vlor_cmpra2']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "id_cntro_csto")
      {
          nm_limpa_numero($this->id_cntro_csto, $this->field_config['id_cntro_csto']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "vlor_actual")
      {
          if (!empty($this->field_config['vlor_actual']['symbol_dec']))
          {
             nm_limpa_valor($this->vlor_actual, $this->field_config['vlor_actual']['symbol_dec'], $this->field_config['vlor_actual']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "vlor_estndar")
      {
          if (!empty($this->field_config['vlor_estndar']['symbol_dec']))
          {
             nm_limpa_valor($this->vlor_estndar, $this->field_config['vlor_estndar']['symbol_dec'], $this->field_config['vlor_estndar']['symbol_grp']);
          }
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ('' !== $this->id_actvo || (!empty($format_fields) && isset($format_fields['id_actvo'])))
      {
          nmgp_Form_Num_Val($this->id_actvo, $this->field_config['id_actvo']['symbol_grp'], $this->field_config['id_actvo']['symbol_dec'], "0", "S", $this->field_config['id_actvo']['format_neg'], "", "", "-", $this->field_config['id_actvo']['symbol_fmt']) ; 
      }
      if ('' !== $this->cnfbldad || (!empty($format_fields) && isset($format_fields['cnfbldad'])))
      {
          nmgp_Form_Num_Val($this->cnfbldad, $this->field_config['cnfbldad']['symbol_grp'], $this->field_config['cnfbldad']['symbol_dec'], "6", "S", $this->field_config['cnfbldad']['format_neg'], "", "", "-", $this->field_config['cnfbldad']['symbol_fmt']) ; 
      }
      if ((!empty($this->fcha_cmpra) && 'null' != $this->fcha_cmpra) || (!empty($format_fields) && isset($format_fields['fcha_cmpra'])))
      {
          nm_volta_data($this->fcha_cmpra, $this->field_config['fcha_cmpra']['date_format']) ; 
          nmgp_Form_Datas($this->fcha_cmpra, $this->field_config['fcha_cmpra']['date_format'], $this->field_config['fcha_cmpra']['date_sep']) ;  
      }
      elseif ('null' == $this->fcha_cmpra || '' == $this->fcha_cmpra)
      {
          $this->fcha_cmpra = '';
      }
      if ((!empty($this->fcha_arrnque) && 'null' != $this->fcha_arrnque) || (!empty($format_fields) && isset($format_fields['fcha_arrnque'])))
      {
          nm_volta_data($this->fcha_arrnque, $this->field_config['fcha_arrnque']['date_format']) ; 
          nmgp_Form_Datas($this->fcha_arrnque, $this->field_config['fcha_arrnque']['date_format'], $this->field_config['fcha_arrnque']['date_sep']) ;  
      }
      elseif ('null' == $this->fcha_arrnque || '' == $this->fcha_arrnque)
      {
          $this->fcha_arrnque = '';
      }
      if ((!empty($this->fcha_fin_grntia) && 'null' != $this->fcha_fin_grntia) || (!empty($format_fields) && isset($format_fields['fcha_fin_grntia'])))
      {
          nm_volta_data($this->fcha_fin_grntia, $this->field_config['fcha_fin_grntia']['date_format']) ; 
          nmgp_Form_Datas($this->fcha_fin_grntia, $this->field_config['fcha_fin_grntia']['date_format'], $this->field_config['fcha_fin_grntia']['date_sep']) ;  
      }
      elseif ('null' == $this->fcha_fin_grntia || '' == $this->fcha_fin_grntia)
      {
          $this->fcha_fin_grntia = '';
      }
      if ('' !== $this->vlor_cmpra1 || (!empty($format_fields) && isset($format_fields['vlor_cmpra1'])))
      {
          nmgp_Form_Num_Val($this->vlor_cmpra1, $this->field_config['vlor_cmpra1']['symbol_grp'], $this->field_config['vlor_cmpra1']['symbol_dec'], "6", "S", $this->field_config['vlor_cmpra1']['format_neg'], "", "", "-", $this->field_config['vlor_cmpra1']['symbol_fmt']) ; 
      }
      if ('' !== $this->vlor_cmpra2 || (!empty($format_fields) && isset($format_fields['vlor_cmpra2'])))
      {
          nmgp_Form_Num_Val($this->vlor_cmpra2, $this->field_config['vlor_cmpra2']['symbol_grp'], $this->field_config['vlor_cmpra2']['symbol_dec'], "6", "S", $this->field_config['vlor_cmpra2']['format_neg'], "", "", "-", $this->field_config['vlor_cmpra2']['symbol_fmt']) ; 
      }
      if ('' !== $this->id_cntro_csto || (!empty($format_fields) && isset($format_fields['id_cntro_csto'])))
      {
          nmgp_Form_Num_Val($this->id_cntro_csto, $this->field_config['id_cntro_csto']['symbol_grp'], $this->field_config['id_cntro_csto']['symbol_dec'], "0", "S", $this->field_config['id_cntro_csto']['format_neg'], "", "", "-", $this->field_config['id_cntro_csto']['symbol_fmt']) ; 
      }
      if ('' !== $this->vlor_actual || (!empty($format_fields) && isset($format_fields['vlor_actual'])))
      {
          nmgp_Form_Num_Val($this->vlor_actual, $this->field_config['vlor_actual']['symbol_grp'], $this->field_config['vlor_actual']['symbol_dec'], "6", "S", $this->field_config['vlor_actual']['format_neg'], "", "", "-", $this->field_config['vlor_actual']['symbol_fmt']) ; 
      }
      if ((!empty($this->fcha_lctra) && 'null' != $this->fcha_lctra) || (!empty($format_fields) && isset($format_fields['fcha_lctra'])))
      {
          nm_volta_data($this->fcha_lctra, $this->field_config['fcha_lctra']['date_format']) ; 
          nmgp_Form_Datas($this->fcha_lctra, $this->field_config['fcha_lctra']['date_format'], $this->field_config['fcha_lctra']['date_sep']) ;  
      }
      elseif ('null' == $this->fcha_lctra || '' == $this->fcha_lctra)
      {
          $this->fcha_lctra = '';
      }
      if ('' !== $this->vlor_estndar || (!empty($format_fields) && isset($format_fields['vlor_estndar'])))
      {
          nmgp_Form_Num_Val($this->vlor_estndar, $this->field_config['vlor_estndar']['symbol_grp'], $this->field_config['vlor_estndar']['symbol_dec'], "6", "S", $this->field_config['vlor_estndar']['format_neg'], "", "", "-", $this->field_config['vlor_estndar']['symbol_fmt']) ; 
      }
      if ((!empty($this->fcha_rgstro) && 'null' != $this->fcha_rgstro) || (!empty($format_fields) && isset($format_fields['fcha_rgstro'])))
      {
          nm_volta_data($this->fcha_rgstro, $this->field_config['fcha_rgstro']['date_format']) ; 
          nmgp_Form_Datas($this->fcha_rgstro, $this->field_config['fcha_rgstro']['date_format'], $this->field_config['fcha_rgstro']['date_sep']) ;  
      }
      elseif ('null' == $this->fcha_rgstro || '' == $this->fcha_rgstro)
      {
          $this->fcha_rgstro = '';
      }
      if ((!empty($this->fcha_actlzcion) && 'null' != $this->fcha_actlzcion) || (!empty($format_fields) && isset($format_fields['fcha_actlzcion'])))
      {
          $nm_separa_data = strpos($this->field_config['fcha_actlzcion']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['fcha_actlzcion']['date_format'];
          $this->field_config['fcha_actlzcion']['date_format'] = substr($this->field_config['fcha_actlzcion']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->fcha_actlzcion, " ") ; 
          $this->fcha_actlzcion_hora = substr($this->fcha_actlzcion, $separador + 1) ; 
          $this->fcha_actlzcion = substr($this->fcha_actlzcion, 0, $separador) ; 
          nm_volta_data($this->fcha_actlzcion, $this->field_config['fcha_actlzcion']['date_format']) ; 
          nmgp_Form_Datas($this->fcha_actlzcion, $this->field_config['fcha_actlzcion']['date_format'], $this->field_config['fcha_actlzcion']['date_sep']) ;  
          $this->field_config['fcha_actlzcion']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->fcha_actlzcion_hora, $this->field_config['fcha_actlzcion']['date_format']) ; 
          nmgp_Form_Hora($this->fcha_actlzcion_hora, $this->field_config['fcha_actlzcion']['date_format'], $this->field_config['fcha_actlzcion']['time_sep']) ;  
          $this->field_config['fcha_actlzcion']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->fcha_actlzcion || '' == $this->fcha_actlzcion)
      {
          $this->fcha_actlzcion_hora = '';
          $this->fcha_actlzcion = '';
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['fcha_cmpra']['date_format'];
      if ($this->fcha_cmpra != "")  
      { 
          nm_conv_data($this->fcha_cmpra, $this->field_config['fcha_cmpra']['date_format']) ; 
          $this->fcha_cmpra_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fcha_cmpra_hora = substr($this->fcha_cmpra_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fcha_cmpra_hora = substr($this->fcha_cmpra_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fcha_cmpra_hora = substr($this->fcha_cmpra_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fcha_cmpra_hora = substr($this->fcha_cmpra_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fcha_cmpra_hora = substr($this->fcha_cmpra_hora, 0, -4);
          }
      } 
      if ($this->fcha_cmpra == "" && $use_null)  
      { 
          $this->fcha_cmpra = "null" ; 
      } 
      $this->field_config['fcha_cmpra']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fcha_arrnque']['date_format'];
      if ($this->fcha_arrnque != "")  
      { 
          nm_conv_data($this->fcha_arrnque, $this->field_config['fcha_arrnque']['date_format']) ; 
          $this->fcha_arrnque_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fcha_arrnque_hora = substr($this->fcha_arrnque_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fcha_arrnque_hora = substr($this->fcha_arrnque_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fcha_arrnque_hora = substr($this->fcha_arrnque_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fcha_arrnque_hora = substr($this->fcha_arrnque_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fcha_arrnque_hora = substr($this->fcha_arrnque_hora, 0, -4);
          }
      } 
      if ($this->fcha_arrnque == "" && $use_null)  
      { 
          $this->fcha_arrnque = "null" ; 
      } 
      $this->field_config['fcha_arrnque']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fcha_fin_grntia']['date_format'];
      if ($this->fcha_fin_grntia != "")  
      { 
          nm_conv_data($this->fcha_fin_grntia, $this->field_config['fcha_fin_grntia']['date_format']) ; 
          $this->fcha_fin_grntia_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fcha_fin_grntia_hora = substr($this->fcha_fin_grntia_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fcha_fin_grntia_hora = substr($this->fcha_fin_grntia_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fcha_fin_grntia_hora = substr($this->fcha_fin_grntia_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fcha_fin_grntia_hora = substr($this->fcha_fin_grntia_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fcha_fin_grntia_hora = substr($this->fcha_fin_grntia_hora, 0, -4);
          }
      } 
      if ($this->fcha_fin_grntia == "" && $use_null)  
      { 
          $this->fcha_fin_grntia = "null" ; 
      } 
      $this->field_config['fcha_fin_grntia']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fcha_lctra']['date_format'];
      if ($this->fcha_lctra != "")  
      { 
          nm_conv_data($this->fcha_lctra, $this->field_config['fcha_lctra']['date_format']) ; 
          $this->fcha_lctra_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fcha_lctra_hora = substr($this->fcha_lctra_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fcha_lctra_hora = substr($this->fcha_lctra_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fcha_lctra_hora = substr($this->fcha_lctra_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fcha_lctra_hora = substr($this->fcha_lctra_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fcha_lctra_hora = substr($this->fcha_lctra_hora, 0, -4);
          }
      } 
      if ($this->fcha_lctra == "" && $use_null)  
      { 
          $this->fcha_lctra = "null" ; 
      } 
      $this->field_config['fcha_lctra']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fcha_rgstro']['date_format'];
      if ($this->fcha_rgstro != "")  
      { 
          nm_conv_data($this->fcha_rgstro, $this->field_config['fcha_rgstro']['date_format']) ; 
          $this->fcha_rgstro_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fcha_rgstro_hora = substr($this->fcha_rgstro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fcha_rgstro_hora = substr($this->fcha_rgstro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fcha_rgstro_hora = substr($this->fcha_rgstro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fcha_rgstro_hora = substr($this->fcha_rgstro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fcha_rgstro_hora = substr($this->fcha_rgstro_hora, 0, -4);
          }
      } 
      if ($this->fcha_rgstro == "" && $use_null)  
      { 
          $this->fcha_rgstro = "null" ; 
      } 
      $this->field_config['fcha_rgstro']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fcha_actlzcion']['date_format'];
      if ($this->fcha_actlzcion != "")  
      { 
          $nm_separa_data = strpos($this->field_config['fcha_actlzcion']['date_format'], ";") ;
          $this->field_config['fcha_actlzcion']['date_format'] = substr($this->field_config['fcha_actlzcion']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->fcha_actlzcion, $this->field_config['fcha_actlzcion']['date_format']) ; 
          if ('pdo_sqlsrv' == strtolower($this->Ini->nm_tpbanco) || 'pdo_dblib' == strtolower($this->Ini->nm_tpbanco))
          {
              $this->fcha_actlzcion = str_replace('-', '', $this->fcha_actlzcion);
          }
          $this->field_config['fcha_actlzcion']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->fcha_actlzcion_hora, $this->field_config['fcha_actlzcion']['date_format']) ; 
          if ($this->fcha_actlzcion_hora == "" )  
          { 
              $this->fcha_actlzcion_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          {
              $this->fcha_actlzcion_hora = substr($this->fcha_actlzcion_hora, 0, -4) . "." . substr($this->fcha_actlzcion_hora, -3);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fcha_actlzcion_hora = substr($this->fcha_actlzcion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fcha_actlzcion_hora = substr($this->fcha_actlzcion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fcha_actlzcion_hora = substr($this->fcha_actlzcion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fcha_actlzcion_hora = substr($this->fcha_actlzcion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fcha_actlzcion_hora = substr($this->fcha_actlzcion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $this->fcha_actlzcion_hora = substr($this->fcha_actlzcion_hora, 0, -4);
          }
          if ($this->fcha_actlzcion != "")  
          { 
              $this->fcha_actlzcion .= " " . $this->fcha_actlzcion_hora ; 
          }
      } 
      if ($this->fcha_actlzcion == "" && $use_null)  
      { 
          $this->fcha_actlzcion = "null" ; 
      } 
      $this->field_config['fcha_actlzcion']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_id_actvo();
          $this->ajax_return_values_nmbre();
          $this->ajax_return_values_cdgo();
          $this->ajax_return_values_rfrncia();
          $this->ajax_return_values_srial();
          $this->ajax_return_values_nmro_actvo();
          $this->ajax_return_values_alias();
          $this->ajax_return_values_cdgo_qr();
          $this->ajax_return_values_cdgo_brras();
          $this->ajax_return_values_cdgo_rfid();
          $this->ajax_return_values_cmpsto();
          $this->ajax_return_values_id_estdo();
          $this->ajax_return_values_id_clse();
          $this->ajax_return_values_id_tpo();
          $this->ajax_return_values_id_mrca();
          $this->ajax_return_values_mdlo();
          $this->ajax_return_values_id_fbrcnte();
          $this->ajax_return_values_cnfbldad();
          $this->ajax_return_values_id_nit_prvdor();
          $this->ajax_return_values_fcha_cmpra();
          $this->ajax_return_values_fcha_arrnque();
          $this->ajax_return_values_fcha_fin_grntia();
          $this->ajax_return_values_vlor_cmpra1();
          $this->ajax_return_values_id_mnda_cmpra1();
          $this->ajax_return_values_vlor_cmpra2();
          $this->ajax_return_values_id_mnda_cmpra2();
          $this->ajax_return_values_id_area();
          $this->ajax_return_values_id_cntro_csto();
          $this->ajax_return_values_id_ubccion();
          $this->ajax_return_values_id_nit_rspnsble();
          $this->ajax_return_values_id_cntdor();
          $this->ajax_return_values_vlor_actual();
          $this->ajax_return_values_fcha_lctra();
          $this->ajax_return_values_vlor_estndar();
          $this->ajax_return_values_id_tpo_mdcion();
          $this->ajax_return_values_fto1();
          $this->ajax_return_values_fto2();
          $this->ajax_return_values_fto3();
          $this->ajax_return_values_fto4();
          $this->ajax_return_values_fto5();
          $this->ajax_return_values_fto6();
          $this->ajax_return_values_prmtro_oprcion();
          $this->ajax_return_values_nmbre_archvo_po();
          $this->ajax_return_values_tmno_po();
          $this->ajax_return_values_fcha_rgstro();
          $this->ajax_return_values_id_usrio();
          $this->ajax_return_values_fcha_actlzcion();
          $this->ajax_return_values_id_usrio_actlzcion();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id_actvo']['keyVal'] = form_activos_mob_pack_protect_string($this->nmgp_dados_form['id_actvo']);
          }
   } // ajax_return_values

          //----- id_actvo
   function ajax_return_values_id_actvo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_actvo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_actvo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['id_actvo'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nmbre
   function ajax_return_values_nmbre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nmbre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nmbre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nmbre'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cdgo
   function ajax_return_values_cdgo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cdgo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cdgo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cdgo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- rfrncia
   function ajax_return_values_rfrncia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rfrncia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rfrncia);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rfrncia'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- srial
   function ajax_return_values_srial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("srial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->srial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['srial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nmro_actvo
   function ajax_return_values_nmro_actvo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nmro_actvo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nmro_actvo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nmro_actvo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- alias
   function ajax_return_values_alias($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("alias", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->alias);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['alias'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cdgo_qr
   function ajax_return_values_cdgo_qr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cdgo_qr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cdgo_qr);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cdgo_qr'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cdgo_brras
   function ajax_return_values_cdgo_brras($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cdgo_brras", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cdgo_brras);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cdgo_brras'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cdgo_rfid
   function ajax_return_values_cdgo_rfid($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cdgo_rfid", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cdgo_rfid);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cdgo_rfid'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cmpsto
   function ajax_return_values_cmpsto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cmpsto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cmpsto);
              $aLookup = array();
              $this->_tmp_lookup_cmpsto = $this->cmpsto;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"cmpsto\"";
          if (isset($this->NM_ajax_info['select_html']['cmpsto']) && !empty($this->NM_ajax_info['select_html']['cmpsto']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['cmpsto'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->cmpsto == $sValue)
                  {
                      $this->_tmp_lookup_cmpsto = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['cmpsto'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['cmpsto']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['cmpsto']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['cmpsto']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['cmpsto']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['cmpsto']['labList'] = $aLabel;
          }
   }

          //----- id_estdo
   function ajax_return_values_id_estdo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_estdo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_estdo);
              $aLookup = array();
              $this->_tmp_lookup_id_estdo = $this->id_estdo;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_estdo\"";
          if (isset($this->NM_ajax_info['select_html']['id_estdo']) && !empty($this->NM_ajax_info['select_html']['id_estdo']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_estdo'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_estdo == $sValue)
                  {
                      $this->_tmp_lookup_id_estdo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_estdo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_estdo']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_estdo']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_estdo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_estdo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_estdo']['labList'] = $aLabel;
          }
   }

          //----- id_clse
   function ajax_return_values_id_clse($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_clse", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_clse);
              $aLookup = array();
              $this->_tmp_lookup_id_clse = $this->id_clse;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_clse\"";
          if (isset($this->NM_ajax_info['select_html']['id_clse']) && !empty($this->NM_ajax_info['select_html']['id_clse']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_clse'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_clse == $sValue)
                  {
                      $this->_tmp_lookup_id_clse = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_clse'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_clse']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_clse']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_clse']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_clse']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_clse']['labList'] = $aLabel;
          }
   }

          //----- id_tpo
   function ajax_return_values_id_tpo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_tpo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_tpo);
              $aLookup = array();
              $this->_tmp_lookup_id_tpo = $this->id_tpo;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_tpo\"";
          if (isset($this->NM_ajax_info['select_html']['id_tpo']) && !empty($this->NM_ajax_info['select_html']['id_tpo']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_tpo'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_tpo == $sValue)
                  {
                      $this->_tmp_lookup_id_tpo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_tpo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_tpo']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_tpo']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_tpo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_tpo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_tpo']['labList'] = $aLabel;
          }
   }

          //----- id_mrca
   function ajax_return_values_id_mrca($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_mrca", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_mrca);
              $aLookup = array();
              $this->_tmp_lookup_id_mrca = $this->id_mrca;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_mrca\"";
          if (isset($this->NM_ajax_info['select_html']['id_mrca']) && !empty($this->NM_ajax_info['select_html']['id_mrca']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_mrca'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_mrca == $sValue)
                  {
                      $this->_tmp_lookup_id_mrca = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_mrca'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_mrca']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_mrca']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_mrca']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_mrca']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_mrca']['labList'] = $aLabel;
          }
   }

          //----- mdlo
   function ajax_return_values_mdlo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mdlo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mdlo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mdlo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- id_fbrcnte
   function ajax_return_values_id_fbrcnte($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_fbrcnte", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_fbrcnte);
              $aLookup = array();
              $this->_tmp_lookup_id_fbrcnte = $this->id_fbrcnte;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_fbrcnte\"";
          if (isset($this->NM_ajax_info['select_html']['id_fbrcnte']) && !empty($this->NM_ajax_info['select_html']['id_fbrcnte']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_fbrcnte'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_fbrcnte == $sValue)
                  {
                      $this->_tmp_lookup_id_fbrcnte = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_fbrcnte'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_fbrcnte']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_fbrcnte']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_fbrcnte']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_fbrcnte']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_fbrcnte']['labList'] = $aLabel;
          }
   }

          //----- cnfbldad
   function ajax_return_values_cnfbldad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cnfbldad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cnfbldad);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cnfbldad'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- id_nit_prvdor
   function ajax_return_values_id_nit_prvdor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_nit_prvdor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_nit_prvdor);
              $aLookup = array();
              $this->_tmp_lookup_id_nit_prvdor = $this->id_nit_prvdor;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_nit_prvdor\"";
          if (isset($this->NM_ajax_info['select_html']['id_nit_prvdor']) && !empty($this->NM_ajax_info['select_html']['id_nit_prvdor']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_nit_prvdor'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_nit_prvdor == $sValue)
                  {
                      $this->_tmp_lookup_id_nit_prvdor = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_nit_prvdor'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_nit_prvdor']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_nit_prvdor']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_nit_prvdor']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_nit_prvdor']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_nit_prvdor']['labList'] = $aLabel;
          }
   }

          //----- fcha_cmpra
   function ajax_return_values_fcha_cmpra($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fcha_cmpra", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fcha_cmpra);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fcha_cmpra'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fcha_arrnque
   function ajax_return_values_fcha_arrnque($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fcha_arrnque", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fcha_arrnque);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fcha_arrnque'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fcha_fin_grntia
   function ajax_return_values_fcha_fin_grntia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fcha_fin_grntia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fcha_fin_grntia);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fcha_fin_grntia'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- vlor_cmpra1
   function ajax_return_values_vlor_cmpra1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("vlor_cmpra1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->vlor_cmpra1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['vlor_cmpra1'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- id_mnda_cmpra1
   function ajax_return_values_id_mnda_cmpra1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_mnda_cmpra1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_mnda_cmpra1);
              $aLookup = array();
              $this->_tmp_lookup_id_mnda_cmpra1 = $this->id_mnda_cmpra1;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_mnda_cmpra1\"";
          if (isset($this->NM_ajax_info['select_html']['id_mnda_cmpra1']) && !empty($this->NM_ajax_info['select_html']['id_mnda_cmpra1']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_mnda_cmpra1'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_mnda_cmpra1 == $sValue)
                  {
                      $this->_tmp_lookup_id_mnda_cmpra1 = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_mnda_cmpra1'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_mnda_cmpra1']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_mnda_cmpra1']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_mnda_cmpra1']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_mnda_cmpra1']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_mnda_cmpra1']['labList'] = $aLabel;
          }
   }

          //----- vlor_cmpra2
   function ajax_return_values_vlor_cmpra2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("vlor_cmpra2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->vlor_cmpra2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['vlor_cmpra2'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- id_mnda_cmpra2
   function ajax_return_values_id_mnda_cmpra2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_mnda_cmpra2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_mnda_cmpra2);
              $aLookup = array();
              $this->_tmp_lookup_id_mnda_cmpra2 = $this->id_mnda_cmpra2;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_mnda_cmpra2\"";
          if (isset($this->NM_ajax_info['select_html']['id_mnda_cmpra2']) && !empty($this->NM_ajax_info['select_html']['id_mnda_cmpra2']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_mnda_cmpra2'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_mnda_cmpra2 == $sValue)
                  {
                      $this->_tmp_lookup_id_mnda_cmpra2 = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_mnda_cmpra2'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_mnda_cmpra2']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_mnda_cmpra2']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_mnda_cmpra2']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_mnda_cmpra2']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_mnda_cmpra2']['labList'] = $aLabel;
          }
   }

          //----- id_area
   function ajax_return_values_id_area($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_area", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_area);
              $aLookup = array();
              $this->_tmp_lookup_id_area = $this->id_area;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_area\"";
          if (isset($this->NM_ajax_info['select_html']['id_area']) && !empty($this->NM_ajax_info['select_html']['id_area']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_area'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_area == $sValue)
                  {
                      $this->_tmp_lookup_id_area = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_area'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_area']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_area']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_area']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_area']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_area']['labList'] = $aLabel;
          }
   }

          //----- id_cntro_csto
   function ajax_return_values_id_cntro_csto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_cntro_csto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_cntro_csto);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['id_cntro_csto'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- id_ubccion
   function ajax_return_values_id_ubccion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_ubccion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_ubccion);
              $aLookup = array();
              $this->_tmp_lookup_id_ubccion = $this->id_ubccion;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_ubccion\"";
          if (isset($this->NM_ajax_info['select_html']['id_ubccion']) && !empty($this->NM_ajax_info['select_html']['id_ubccion']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_ubccion'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_ubccion == $sValue)
                  {
                      $this->_tmp_lookup_id_ubccion = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_ubccion'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_ubccion']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_ubccion']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_ubccion']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_ubccion']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_ubccion']['labList'] = $aLabel;
          }
   }

          //----- id_nit_rspnsble
   function ajax_return_values_id_nit_rspnsble($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_nit_rspnsble", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_nit_rspnsble);
              $aLookup = array();
              $this->_tmp_lookup_id_nit_rspnsble = $this->id_nit_rspnsble;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_nit_rspnsble\"";
          if (isset($this->NM_ajax_info['select_html']['id_nit_rspnsble']) && !empty($this->NM_ajax_info['select_html']['id_nit_rspnsble']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_nit_rspnsble'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_nit_rspnsble == $sValue)
                  {
                      $this->_tmp_lookup_id_nit_rspnsble = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_nit_rspnsble'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_nit_rspnsble']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_nit_rspnsble']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_nit_rspnsble']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_nit_rspnsble']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_nit_rspnsble']['labList'] = $aLabel;
          }
   }

          //----- id_cntdor
   function ajax_return_values_id_cntdor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_cntdor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_cntdor);
              $aLookup = array();
              $this->_tmp_lookup_id_cntdor = $this->id_cntdor;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_cntdor\"";
          if (isset($this->NM_ajax_info['select_html']['id_cntdor']) && !empty($this->NM_ajax_info['select_html']['id_cntdor']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_cntdor'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_cntdor == $sValue)
                  {
                      $this->_tmp_lookup_id_cntdor = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_cntdor'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_cntdor']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_cntdor']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_cntdor']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_cntdor']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_cntdor']['labList'] = $aLabel;
          }
   }

          //----- vlor_actual
   function ajax_return_values_vlor_actual($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("vlor_actual", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->vlor_actual);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['vlor_actual'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fcha_lctra
   function ajax_return_values_fcha_lctra($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fcha_lctra", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fcha_lctra);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fcha_lctra'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- vlor_estndar
   function ajax_return_values_vlor_estndar($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("vlor_estndar", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->vlor_estndar);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['vlor_estndar'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- id_tpo_mdcion
   function ajax_return_values_id_tpo_mdcion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_tpo_mdcion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_tpo_mdcion);
              $aLookup = array();
              $this->_tmp_lookup_id_tpo_mdcion = $this->id_tpo_mdcion;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_tpo_mdcion\"";
          if (isset($this->NM_ajax_info['select_html']['id_tpo_mdcion']) && !empty($this->NM_ajax_info['select_html']['id_tpo_mdcion']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_tpo_mdcion'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_tpo_mdcion == $sValue)
                  {
                      $this->_tmp_lookup_id_tpo_mdcion = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_tpo_mdcion'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_tpo_mdcion']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_tpo_mdcion']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_tpo_mdcion']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_tpo_mdcion']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_tpo_mdcion']['labList'] = $aLabel;
          }
   }

          //----- fto1
   function ajax_return_values_fto1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fto1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fto1);
              $aLookup = array();
   $out_fto1 = '';
   $out1_fto1 = '';
   if ('' != $this->fto1_ul_name && @is_file($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto1_ul_name))
   {
       $this->fto1 = @file_get_contents($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto1_ul_name);
   }
   if ($this->fto1 != "" && $this->fto1 != "none")   
   { 
       $out_fto1 = $this->Ini->path_imag_temp . "/sc_fto1_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_fto1 = $out_fto1; 
       $arq_fto1 = fopen($this->Ini->root . $out_fto1, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto1, 0, 12));
           if (substr($this->fto1, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto1 = nm_conv_img_access($this->fto1);
           } 
       } 
       if (substr($this->fto1, 0, 4) == "*nm*") 
       { 
           $this->fto1 = substr($this->fto1, 4) ; 
           $this->fto1 = base64_decode($this->fto1) ; 
       } 
       $img_pos_bm = strpos($this->fto1, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto1 = substr($this->fto1, $img_pos_bm) ; 
       } 
       fwrite($arq_fto1, $this->fto1) ;  
       fclose($arq_fto1) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto1, true);
       $this->nmgp_return_img['fto1'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto1'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fto1'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_fto1,
               'imgOrig' => $out1_fto1,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- fto2
   function ajax_return_values_fto2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fto2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fto2);
              $aLookup = array();
   $out_fto2 = '';
   $out1_fto2 = '';
   if ('' != $this->fto2_ul_name && @is_file($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto2_ul_name))
   {
       $this->fto2 = @file_get_contents($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto2_ul_name);
   }
   if ($this->fto2 != "" && $this->fto2 != "none")   
   { 
       $out_fto2 = $this->Ini->path_imag_temp . "/sc_fto2_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_fto2 = $out_fto2; 
       $arq_fto2 = fopen($this->Ini->root . $out_fto2, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto2, 0, 12));
           if (substr($this->fto2, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto2 = nm_conv_img_access($this->fto2);
           } 
       } 
       if (substr($this->fto2, 0, 4) == "*nm*") 
       { 
           $this->fto2 = substr($this->fto2, 4) ; 
           $this->fto2 = base64_decode($this->fto2) ; 
       } 
       $img_pos_bm = strpos($this->fto2, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto2 = substr($this->fto2, $img_pos_bm) ; 
       } 
       fwrite($arq_fto2, $this->fto2) ;  
       fclose($arq_fto2) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto2, true);
       $this->nmgp_return_img['fto2'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto2'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fto2'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_fto2,
               'imgOrig' => $out1_fto2,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- fto3
   function ajax_return_values_fto3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fto3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fto3);
              $aLookup = array();
   $out_fto3 = '';
   $out1_fto3 = '';
   if ('' != $this->fto3_ul_name && @is_file($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto3_ul_name))
   {
       $this->fto3 = @file_get_contents($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto3_ul_name);
   }
   if ($this->fto3 != "" && $this->fto3 != "none")   
   { 
       $out_fto3 = $this->Ini->path_imag_temp . "/sc_fto3_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_fto3 = $out_fto3; 
       $arq_fto3 = fopen($this->Ini->root . $out_fto3, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto3, 0, 12));
           if (substr($this->fto3, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto3 = nm_conv_img_access($this->fto3);
           } 
       } 
       if (substr($this->fto3, 0, 4) == "*nm*") 
       { 
           $this->fto3 = substr($this->fto3, 4) ; 
           $this->fto3 = base64_decode($this->fto3) ; 
       } 
       $img_pos_bm = strpos($this->fto3, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto3 = substr($this->fto3, $img_pos_bm) ; 
       } 
       fwrite($arq_fto3, $this->fto3) ;  
       fclose($arq_fto3) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto3, true);
       $this->nmgp_return_img['fto3'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto3'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fto3'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_fto3,
               'imgOrig' => $out1_fto3,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- fto4
   function ajax_return_values_fto4($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fto4", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fto4);
              $aLookup = array();
   $out_fto4 = '';
   $out1_fto4 = '';
   if ('' != $this->fto4_ul_name && @is_file($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto4_ul_name))
   {
       $this->fto4 = @file_get_contents($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto4_ul_name);
   }
   if ($this->fto4 != "" && $this->fto4 != "none")   
   { 
       $out_fto4 = $this->Ini->path_imag_temp . "/sc_fto4_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_fto4 = $out_fto4; 
       $arq_fto4 = fopen($this->Ini->root . $out_fto4, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto4, 0, 12));
           if (substr($this->fto4, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto4 = nm_conv_img_access($this->fto4);
           } 
       } 
       if (substr($this->fto4, 0, 4) == "*nm*") 
       { 
           $this->fto4 = substr($this->fto4, 4) ; 
           $this->fto4 = base64_decode($this->fto4) ; 
       } 
       $img_pos_bm = strpos($this->fto4, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto4 = substr($this->fto4, $img_pos_bm) ; 
       } 
       fwrite($arq_fto4, $this->fto4) ;  
       fclose($arq_fto4) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto4, true);
       $this->nmgp_return_img['fto4'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto4'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fto4'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_fto4,
               'imgOrig' => $out1_fto4,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- fto5
   function ajax_return_values_fto5($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fto5", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fto5);
              $aLookup = array();
   $out_fto5 = '';
   $out1_fto5 = '';
   if ('' != $this->fto5_ul_name && @is_file($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto5_ul_name))
   {
       $this->fto5 = @file_get_contents($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto5_ul_name);
   }
   if ($this->fto5 != "" && $this->fto5 != "none")   
   { 
       $out_fto5 = $this->Ini->path_imag_temp . "/sc_fto5_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_fto5 = $out_fto5; 
       $arq_fto5 = fopen($this->Ini->root . $out_fto5, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto5, 0, 12));
           if (substr($this->fto5, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto5 = nm_conv_img_access($this->fto5);
           } 
       } 
       if (substr($this->fto5, 0, 4) == "*nm*") 
       { 
           $this->fto5 = substr($this->fto5, 4) ; 
           $this->fto5 = base64_decode($this->fto5) ; 
       } 
       $img_pos_bm = strpos($this->fto5, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto5 = substr($this->fto5, $img_pos_bm) ; 
       } 
       fwrite($arq_fto5, $this->fto5) ;  
       fclose($arq_fto5) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto5, true);
       $this->nmgp_return_img['fto5'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto5'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fto5'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_fto5,
               'imgOrig' => $out1_fto5,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- fto6
   function ajax_return_values_fto6($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fto6", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fto6);
              $aLookup = array();
   $out_fto6 = '';
   $out1_fto6 = '';
   if ('' != $this->fto6_ul_name && @is_file($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto6_ul_name))
   {
       $this->fto6 = @file_get_contents($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fto6_ul_name);
   }
   if ($this->fto6 != "" && $this->fto6 != "none")   
   { 
       $out_fto6 = $this->Ini->path_imag_temp . "/sc_fto6_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_fto6 = $out_fto6; 
       $arq_fto6 = fopen($this->Ini->root . $out_fto6, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto6, 0, 12));
           if (substr($this->fto6, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto6 = nm_conv_img_access($this->fto6);
           } 
       } 
       if (substr($this->fto6, 0, 4) == "*nm*") 
       { 
           $this->fto6 = substr($this->fto6, 4) ; 
           $this->fto6 = base64_decode($this->fto6) ; 
       } 
       $img_pos_bm = strpos($this->fto6, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto6 = substr($this->fto6, $img_pos_bm) ; 
       } 
       fwrite($arq_fto6, $this->fto6) ;  
       fclose($arq_fto6) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto6, true);
       $this->nmgp_return_img['fto6'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto6'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fto6'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_fto6,
               'imgOrig' => $out1_fto6,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- prmtro_oprcion
   function ajax_return_values_prmtro_oprcion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("prmtro_oprcion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->prmtro_oprcion);
              $aLookup = array();
   $out_prmtro_oprcion = '';
   $out1_prmtro_oprcion = '';
   if ('' != $this->prmtro_oprcion_ul_name && @is_file($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->prmtro_oprcion_ul_name))
   {
       $this->prmtro_oprcion = @file_get_contents($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->prmtro_oprcion_ul_name);
   }
   if ($this->prmtro_oprcion != "" && $this->prmtro_oprcion != "none")   
   { 
       $out_prmtro_oprcion = $this->Ini->path_imag_temp . "/sc_prmtro_oprcion_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_prmtro_oprcion = $out_prmtro_oprcion; 
       $arq_prmtro_oprcion = fopen($this->Ini->root . $out_prmtro_oprcion, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->prmtro_oprcion, 0, 12));
           if (substr($this->prmtro_oprcion, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->prmtro_oprcion = nm_conv_img_access($this->prmtro_oprcion);
           } 
       } 
       if (substr($this->prmtro_oprcion, 0, 4) == "*nm*") 
       { 
           $this->prmtro_oprcion = substr($this->prmtro_oprcion, 4) ; 
           $this->prmtro_oprcion = base64_decode($this->prmtro_oprcion) ; 
       } 
       $img_pos_bm = strpos($this->prmtro_oprcion, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->prmtro_oprcion = substr($this->prmtro_oprcion, $img_pos_bm) ; 
       } 
       fwrite($arq_prmtro_oprcion, $this->prmtro_oprcion) ;  
       fclose($arq_prmtro_oprcion) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_prmtro_oprcion, true);
       $this->nmgp_return_img['prmtro_oprcion'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['prmtro_oprcion'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['prmtro_oprcion'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_prmtro_oprcion,
               'imgOrig' => $out1_prmtro_oprcion,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- nmbre_archvo_po
   function ajax_return_values_nmbre_archvo_po($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nmbre_archvo_po", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nmbre_archvo_po);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nmbre_archvo_po'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- tmno_po
   function ajax_return_values_tmno_po($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tmno_po", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tmno_po);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tmno_po'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fcha_rgstro
   function ajax_return_values_fcha_rgstro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fcha_rgstro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fcha_rgstro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fcha_rgstro'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- id_usrio
   function ajax_return_values_id_usrio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_usrio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_usrio);
              $aLookup = array();
              $this->_tmp_lookup_id_usrio = $this->id_usrio;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_activos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_usrio\"";
          if (isset($this->NM_ajax_info['select_html']['id_usrio']) && !empty($this->NM_ajax_info['select_html']['id_usrio']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_usrio'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_usrio == $sValue)
                  {
                      $this->_tmp_lookup_id_usrio = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_usrio'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_usrio']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_usrio']['valList'][$i] = form_activos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_usrio']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_usrio']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_usrio']['labList'] = $aLabel;
          }
   }

          //----- fcha_actlzcion
   function ajax_return_values_fcha_actlzcion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fcha_actlzcion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fcha_actlzcion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fcha_actlzcion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->fcha_actlzcion . ' ' . $this->fcha_actlzcion_hora),
              );
          }
   }

          //----- id_usrio_actlzcion
   function ajax_return_values_id_usrio_actlzcion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_usrio_actlzcion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_usrio_actlzcion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['id_usrio_actlzcion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//
   function nm_troca_decimal($sc_parm1, $sc_parm2) 
   { 
      $this->cnfbldad = str_replace($sc_parm1, $sc_parm2, $this->cnfbldad); 
      $this->vlor_cmpra1 = str_replace($sc_parm1, $sc_parm2, $this->vlor_cmpra1); 
      $this->vlor_cmpra2 = str_replace($sc_parm1, $sc_parm2, $this->vlor_cmpra2); 
      $this->vlor_actual = str_replace($sc_parm1, $sc_parm2, $this->vlor_actual); 
      $this->vlor_estndar = str_replace($sc_parm1, $sc_parm2, $this->vlor_estndar); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->cnfbldad = "'" . $this->cnfbldad . "'";
      $this->vlor_cmpra1 = "'" . $this->vlor_cmpra1 . "'";
      $this->vlor_cmpra2 = "'" . $this->vlor_cmpra2 . "'";
      $this->vlor_actual = "'" . $this->vlor_actual . "'";
      $this->vlor_estndar = "'" . $this->vlor_estndar . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->cnfbldad = str_replace("'", "", $this->cnfbldad); 
      $this->vlor_cmpra1 = str_replace("'", "", $this->vlor_cmpra1); 
      $this->vlor_cmpra2 = str_replace("'", "", $this->vlor_cmpra2); 
      $this->vlor_actual = str_replace("'", "", $this->vlor_actual); 
      $this->vlor_estndar = str_replace("'", "", $this->vlor_estndar); 
   } 
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros
    function handleDbErrorMessage(&$dbErrorMessage, $dbErrorCode)
    {
        if (1267 == $dbErrorCode) {
            $dbErrorMessage = $this->Ini->Nm_lang['lang_errm_db_invalid_collation'];
        }
    }


   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if ($this->nmgp_opcao != "incluir")  
      {
           unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto1']);
           unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto2']);
           unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto3']);
           unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto4']);
           unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto5']);
           unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto6']);
           unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['prmtro_oprcion']);
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
    if ("excluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_activos_mob']['contr_erro'] = 'on';
             /* actvos_btcra */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_btcra WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_btcra WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_btcra WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_btcra WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_btcra WHERE ID_ACTVO = " . $this->id_actvo ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_actvos_btcra = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->dataset_actvos_btcra[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_actvos_btcra = false;
          $this->dataset_actvos_btcra_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_actvos_btcra[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_activos_mob' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* actvos_mnles */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_mnles WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_mnles WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_mnles WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_mnles WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM actvos_mnles WHERE ID_ACTVO = " . $this->id_actvo ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_actvos_mnles = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->dataset_actvos_mnles[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_actvos_mnles = false;
          $this->dataset_actvos_mnles_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_actvos_mnles[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_activos_mob' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* ot_prgrmcion */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM ot_prgrmcion WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM ot_prgrmcion WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM ot_prgrmcion WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM ot_prgrmcion WHERE ID_ACTVO = " . $this->id_actvo ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM ot_prgrmcion WHERE ID_ACTVO = " . $this->id_actvo ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_ot_prgrmcion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->dataset_ot_prgrmcion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_ot_prgrmcion = false;
          $this->dataset_ot_prgrmcion_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_ot_prgrmcion[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_activos_mob' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }
$_SESSION['scriptcase']['form_activos_mob']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $this->nmgp_opcao ; 
          if ($this->nmgp_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          else
          { 
              $this->sc_evento = ""; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->NM_rollback_db(); 
          $this->Campos_Mens_erro = ""; 
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Ini->sc_tem_trans_banco = $this->Db->BeginTrans(); 
      } 
      $NM_val_form['id_actvo'] = $this->id_actvo;
      $NM_val_form['nmbre'] = $this->nmbre;
      $NM_val_form['cdgo'] = $this->cdgo;
      $NM_val_form['rfrncia'] = $this->rfrncia;
      $NM_val_form['srial'] = $this->srial;
      $NM_val_form['nmro_actvo'] = $this->nmro_actvo;
      $NM_val_form['alias'] = $this->alias;
      $NM_val_form['cdgo_qr'] = $this->cdgo_qr;
      $NM_val_form['cdgo_brras'] = $this->cdgo_brras;
      $NM_val_form['cdgo_rfid'] = $this->cdgo_rfid;
      $NM_val_form['cmpsto'] = $this->cmpsto;
      $NM_val_form['id_estdo'] = $this->id_estdo;
      $NM_val_form['id_clse'] = $this->id_clse;
      $NM_val_form['id_tpo'] = $this->id_tpo;
      $NM_val_form['id_mrca'] = $this->id_mrca;
      $NM_val_form['mdlo'] = $this->mdlo;
      $NM_val_form['id_fbrcnte'] = $this->id_fbrcnte;
      $NM_val_form['cnfbldad'] = $this->cnfbldad;
      $NM_val_form['id_nit_prvdor'] = $this->id_nit_prvdor;
      $NM_val_form['fcha_cmpra'] = $this->fcha_cmpra;
      $NM_val_form['fcha_arrnque'] = $this->fcha_arrnque;
      $NM_val_form['fcha_fin_grntia'] = $this->fcha_fin_grntia;
      $NM_val_form['vlor_cmpra1'] = $this->vlor_cmpra1;
      $NM_val_form['id_mnda_cmpra1'] = $this->id_mnda_cmpra1;
      $NM_val_form['vlor_cmpra2'] = $this->vlor_cmpra2;
      $NM_val_form['id_mnda_cmpra2'] = $this->id_mnda_cmpra2;
      $NM_val_form['id_area'] = $this->id_area;
      $NM_val_form['id_cntro_csto'] = $this->id_cntro_csto;
      $NM_val_form['id_ubccion'] = $this->id_ubccion;
      $NM_val_form['id_nit_rspnsble'] = $this->id_nit_rspnsble;
      $NM_val_form['id_cntdor'] = $this->id_cntdor;
      $NM_val_form['vlor_actual'] = $this->vlor_actual;
      $NM_val_form['fcha_lctra'] = $this->fcha_lctra;
      $NM_val_form['vlor_estndar'] = $this->vlor_estndar;
      $NM_val_form['id_tpo_mdcion'] = $this->id_tpo_mdcion;
      $NM_val_form['fto1'] = $this->fto1;
      $NM_val_form['fto2'] = $this->fto2;
      $NM_val_form['fto3'] = $this->fto3;
      $NM_val_form['fto4'] = $this->fto4;
      $NM_val_form['fto5'] = $this->fto5;
      $NM_val_form['fto6'] = $this->fto6;
      $NM_val_form['prmtro_oprcion'] = $this->prmtro_oprcion;
      $NM_val_form['nmbre_archvo_po'] = $this->nmbre_archvo_po;
      $NM_val_form['tmno_po'] = $this->tmno_po;
      $NM_val_form['fcha_rgstro'] = $this->fcha_rgstro;
      $NM_val_form['id_usrio'] = $this->id_usrio;
      $NM_val_form['fcha_actlzcion'] = $this->fcha_actlzcion;
      $NM_val_form['id_usrio_actlzcion'] = $this->id_usrio_actlzcion;
      if ($this->id_actvo === "" || is_null($this->id_actvo))  
      { 
          $this->id_actvo = 0;
      } 
      if ($this->id_estdo === "" || is_null($this->id_estdo))  
      { 
          $this->id_estdo = 0;
          $this->sc_force_zero[] = 'id_estdo';
      } 
      if ($this->id_clse === "" || is_null($this->id_clse))  
      { 
          $this->id_clse = 0;
          $this->sc_force_zero[] = 'id_clse';
      } 
      if ($this->id_tpo === "" || is_null($this->id_tpo))  
      { 
          $this->id_tpo = 0;
          $this->sc_force_zero[] = 'id_tpo';
      } 
      if ($this->id_mrca === "" || is_null($this->id_mrca))  
      { 
          $this->id_mrca = 0;
          $this->sc_force_zero[] = 'id_mrca';
      } 
      if ($this->id_fbrcnte === "" || is_null($this->id_fbrcnte))  
      { 
          $this->id_fbrcnte = 0;
          $this->sc_force_zero[] = 'id_fbrcnte';
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->cnfbldad === "" || is_null($this->cnfbldad))  
      { 
          $this->cnfbldad = 0;
          $this->sc_force_zero[] = 'cnfbldad';
      } 
      }
      if ($this->id_nit_prvdor === "" || is_null($this->id_nit_prvdor))  
      { 
          $this->id_nit_prvdor = 0;
          $this->sc_force_zero[] = 'id_nit_prvdor';
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->vlor_cmpra1 === "" || is_null($this->vlor_cmpra1))  
      { 
          $this->vlor_cmpra1 = 0;
          $this->sc_force_zero[] = 'vlor_cmpra1';
      } 
      }
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->vlor_cmpra2 === "" || is_null($this->vlor_cmpra2))  
      { 
          $this->vlor_cmpra2 = 0;
          $this->sc_force_zero[] = 'vlor_cmpra2';
      } 
      }
      if ($this->id_area === "" || is_null($this->id_area))  
      { 
          $this->id_area = 0;
          $this->sc_force_zero[] = 'id_area';
      } 
      if ($this->id_cntro_csto === "" || is_null($this->id_cntro_csto))  
      { 
          $this->id_cntro_csto = 0;
          $this->sc_force_zero[] = 'id_cntro_csto';
      } 
      if ($this->id_ubccion === "" || is_null($this->id_ubccion))  
      { 
          $this->id_ubccion = 0;
          $this->sc_force_zero[] = 'id_ubccion';
      } 
      if ($this->id_nit_rspnsble === "" || is_null($this->id_nit_rspnsble))  
      { 
          $this->id_nit_rspnsble = 0;
          $this->sc_force_zero[] = 'id_nit_rspnsble';
      } 
      if ($this->id_cntdor === "" || is_null($this->id_cntdor))  
      { 
          $this->id_cntdor = 0;
          $this->sc_force_zero[] = 'id_cntdor';
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->vlor_actual === "" || is_null($this->vlor_actual))  
      { 
          $this->vlor_actual = 0;
          $this->sc_force_zero[] = 'vlor_actual';
      } 
      }
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->vlor_estndar === "" || is_null($this->vlor_estndar))  
      { 
          $this->vlor_estndar = 0;
          $this->sc_force_zero[] = 'vlor_estndar';
      } 
      }
      if ($this->id_tpo_mdcion === "" || is_null($this->id_tpo_mdcion))  
      { 
          $this->id_tpo_mdcion = 0;
          $this->sc_force_zero[] = 'id_tpo_mdcion';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->nmbre_before_qstr = $this->nmbre;
          $this->nmbre = substr($this->Db->qstr($this->nmbre), 1, -1); 
          if ($this->nmbre == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nmbre = "null"; 
              $NM_val_null[] = "nmbre";
          } 
          $this->cdgo_before_qstr = $this->cdgo;
          $this->cdgo = substr($this->Db->qstr($this->cdgo), 1, -1); 
          if ($this->cdgo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cdgo = "null"; 
              $NM_val_null[] = "cdgo";
          } 
          $this->rfrncia_before_qstr = $this->rfrncia;
          $this->rfrncia = substr($this->Db->qstr($this->rfrncia), 1, -1); 
          if ($this->rfrncia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rfrncia = "null"; 
              $NM_val_null[] = "rfrncia";
          } 
          $this->srial_before_qstr = $this->srial;
          $this->srial = substr($this->Db->qstr($this->srial), 1, -1); 
          if ($this->srial == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->srial = "null"; 
              $NM_val_null[] = "srial";
          } 
          $this->nmro_actvo_before_qstr = $this->nmro_actvo;
          $this->nmro_actvo = substr($this->Db->qstr($this->nmro_actvo), 1, -1); 
          if ($this->nmro_actvo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nmro_actvo = "null"; 
              $NM_val_null[] = "nmro_actvo";
          } 
          $this->alias_before_qstr = $this->alias;
          $this->alias = substr($this->Db->qstr($this->alias), 1, -1); 
          if ($this->alias == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->alias = "null"; 
              $NM_val_null[] = "alias";
          } 
          $this->cdgo_qr_before_qstr = $this->cdgo_qr;
          $this->cdgo_qr = substr($this->Db->qstr($this->cdgo_qr), 1, -1); 
          if ($this->cdgo_qr == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cdgo_qr = "null"; 
              $NM_val_null[] = "cdgo_qr";
          } 
          $this->cdgo_brras_before_qstr = $this->cdgo_brras;
          $this->cdgo_brras = substr($this->Db->qstr($this->cdgo_brras), 1, -1); 
          if ($this->cdgo_brras == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cdgo_brras = "null"; 
              $NM_val_null[] = "cdgo_brras";
          } 
          $this->cdgo_rfid_before_qstr = $this->cdgo_rfid;
          $this->cdgo_rfid = substr($this->Db->qstr($this->cdgo_rfid), 1, -1); 
          if ($this->cdgo_rfid == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cdgo_rfid = "null"; 
              $NM_val_null[] = "cdgo_rfid";
          } 
          $this->cmpsto_before_qstr = $this->cmpsto;
          $this->cmpsto = substr($this->Db->qstr($this->cmpsto), 1, -1); 
          if ($this->cmpsto == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cmpsto = "null"; 
              $NM_val_null[] = "cmpsto";
          } 
          $this->mdlo_before_qstr = $this->mdlo;
          $this->mdlo = substr($this->Db->qstr($this->mdlo), 1, -1); 
          if ($this->mdlo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mdlo = "null"; 
              $NM_val_null[] = "mdlo";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->fcha_cmpra == "")  
          { 
              $this->fcha_cmpra = "null"; 
              $NM_val_null[] = "fcha_cmpra";
          } 
          if ($this->fcha_arrnque == "")  
          { 
              $this->fcha_arrnque = "null"; 
              $NM_val_null[] = "fcha_arrnque";
          } 
          if ($this->fcha_fin_grntia == "")  
          { 
              $this->fcha_fin_grntia = "null"; 
              $NM_val_null[] = "fcha_fin_grntia";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          $this->id_mnda_cmpra1_before_qstr = $this->id_mnda_cmpra1;
          $this->id_mnda_cmpra1 = substr($this->Db->qstr($this->id_mnda_cmpra1), 1, -1); 
          if ($this->id_mnda_cmpra1 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->id_mnda_cmpra1 = "null"; 
              $NM_val_null[] = "id_mnda_cmpra1";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          $this->id_mnda_cmpra2_before_qstr = $this->id_mnda_cmpra2;
          $this->id_mnda_cmpra2 = substr($this->Db->qstr($this->id_mnda_cmpra2), 1, -1); 
          if ($this->id_mnda_cmpra2 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->id_mnda_cmpra2 = "null"; 
              $NM_val_null[] = "id_mnda_cmpra2";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->fcha_lctra == "")  
          { 
              $this->fcha_lctra = "null"; 
              $NM_val_null[] = "fcha_lctra";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->fto1, 0, 12));
              if (substr($this->fto1, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->fto1 = nm_conv_img_access($this->fto1);
              } 
              if (!empty($this->fto1) && $this->fto1 != 'null' && substr($this->fto1, 0, 4) != "*nm*") 
              { 
                  $this->fto1 = "*nm*" . base64_encode($this->fto1) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->fto1) && $this->fto1 != 'null' && substr($this->fto1, 0, 4) != "*nm*") 
              { 
                  $this->fto1 = "*nm*" . base64_encode($this->fto1) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->fto1) && $this->fto1 != 'null' && substr($this->fto1, 0, 4) != "*nm*") 
              { 
                  $this->fto1 = "*nm*" . base64_encode($this->fto1) ; 
              } 
          } 
          else
          { 
              $this->fto1 =  substr($this->Db->qstr($this->fto1), 1, -1);
          } 
          if ($this->fto1 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fto1 = "null"; 
              $NM_val_null[] = "fto1";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->fto2, 0, 12));
              if (substr($this->fto2, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->fto2 = nm_conv_img_access($this->fto2);
              } 
              if (!empty($this->fto2) && $this->fto2 != 'null' && substr($this->fto2, 0, 4) != "*nm*") 
              { 
                  $this->fto2 = "*nm*" . base64_encode($this->fto2) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->fto2) && $this->fto2 != 'null' && substr($this->fto2, 0, 4) != "*nm*") 
              { 
                  $this->fto2 = "*nm*" . base64_encode($this->fto2) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->fto2) && $this->fto2 != 'null' && substr($this->fto2, 0, 4) != "*nm*") 
              { 
                  $this->fto2 = "*nm*" . base64_encode($this->fto2) ; 
              } 
          } 
          else
          { 
              $this->fto2 =  substr($this->Db->qstr($this->fto2), 1, -1);
          } 
          if ($this->fto2 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fto2 = "null"; 
              $NM_val_null[] = "fto2";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->fto3, 0, 12));
              if (substr($this->fto3, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->fto3 = nm_conv_img_access($this->fto3);
              } 
              if (!empty($this->fto3) && $this->fto3 != 'null' && substr($this->fto3, 0, 4) != "*nm*") 
              { 
                  $this->fto3 = "*nm*" . base64_encode($this->fto3) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->fto3) && $this->fto3 != 'null' && substr($this->fto3, 0, 4) != "*nm*") 
              { 
                  $this->fto3 = "*nm*" . base64_encode($this->fto3) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->fto3) && $this->fto3 != 'null' && substr($this->fto3, 0, 4) != "*nm*") 
              { 
                  $this->fto3 = "*nm*" . base64_encode($this->fto3) ; 
              } 
          } 
          else
          { 
              $this->fto3 =  substr($this->Db->qstr($this->fto3), 1, -1);
          } 
          if ($this->fto3 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fto3 = "null"; 
              $NM_val_null[] = "fto3";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->fto4, 0, 12));
              if (substr($this->fto4, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->fto4 = nm_conv_img_access($this->fto4);
              } 
              if (!empty($this->fto4) && $this->fto4 != 'null' && substr($this->fto4, 0, 4) != "*nm*") 
              { 
                  $this->fto4 = "*nm*" . base64_encode($this->fto4) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->fto4) && $this->fto4 != 'null' && substr($this->fto4, 0, 4) != "*nm*") 
              { 
                  $this->fto4 = "*nm*" . base64_encode($this->fto4) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->fto4) && $this->fto4 != 'null' && substr($this->fto4, 0, 4) != "*nm*") 
              { 
                  $this->fto4 = "*nm*" . base64_encode($this->fto4) ; 
              } 
          } 
          else
          { 
              $this->fto4 =  substr($this->Db->qstr($this->fto4), 1, -1);
          } 
          if ($this->fto4 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fto4 = "null"; 
              $NM_val_null[] = "fto4";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->fto5, 0, 12));
              if (substr($this->fto5, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->fto5 = nm_conv_img_access($this->fto5);
              } 
              if (!empty($this->fto5) && $this->fto5 != 'null' && substr($this->fto5, 0, 4) != "*nm*") 
              { 
                  $this->fto5 = "*nm*" . base64_encode($this->fto5) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->fto5) && $this->fto5 != 'null' && substr($this->fto5, 0, 4) != "*nm*") 
              { 
                  $this->fto5 = "*nm*" . base64_encode($this->fto5) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->fto5) && $this->fto5 != 'null' && substr($this->fto5, 0, 4) != "*nm*") 
              { 
                  $this->fto5 = "*nm*" . base64_encode($this->fto5) ; 
              } 
          } 
          else
          { 
              $this->fto5 =  substr($this->Db->qstr($this->fto5), 1, -1);
          } 
          if ($this->fto5 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fto5 = "null"; 
              $NM_val_null[] = "fto5";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->fto6, 0, 12));
              if (substr($this->fto6, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->fto6 = nm_conv_img_access($this->fto6);
              } 
              if (!empty($this->fto6) && $this->fto6 != 'null' && substr($this->fto6, 0, 4) != "*nm*") 
              { 
                  $this->fto6 = "*nm*" . base64_encode($this->fto6) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->fto6) && $this->fto6 != 'null' && substr($this->fto6, 0, 4) != "*nm*") 
              { 
                  $this->fto6 = "*nm*" . base64_encode($this->fto6) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->fto6) && $this->fto6 != 'null' && substr($this->fto6, 0, 4) != "*nm*") 
              { 
                  $this->fto6 = "*nm*" . base64_encode($this->fto6) ; 
              } 
          } 
          else
          { 
              $this->fto6 =  substr($this->Db->qstr($this->fto6), 1, -1);
          } 
          if ($this->fto6 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fto6 = "null"; 
              $NM_val_null[] = "fto6";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->prmtro_oprcion, 0, 12));
              if (substr($this->prmtro_oprcion, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->prmtro_oprcion = nm_conv_img_access($this->prmtro_oprcion);
              } 
              if (!empty($this->prmtro_oprcion) && $this->prmtro_oprcion != 'null' && substr($this->prmtro_oprcion, 0, 4) != "*nm*") 
              { 
                  $this->prmtro_oprcion = "*nm*" . base64_encode($this->prmtro_oprcion) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->prmtro_oprcion) && $this->prmtro_oprcion != 'null' && substr($this->prmtro_oprcion, 0, 4) != "*nm*") 
              { 
                  $this->prmtro_oprcion = "*nm*" . base64_encode($this->prmtro_oprcion) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->prmtro_oprcion) && $this->prmtro_oprcion != 'null' && substr($this->prmtro_oprcion, 0, 4) != "*nm*") 
              { 
                  $this->prmtro_oprcion = "*nm*" . base64_encode($this->prmtro_oprcion) ; 
              } 
          } 
          else
          { 
              $this->prmtro_oprcion =  substr($this->Db->qstr($this->prmtro_oprcion), 1, -1);
          } 
          if ($this->prmtro_oprcion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->prmtro_oprcion = "null"; 
              $NM_val_null[] = "prmtro_oprcion";
          } 
          $this->nmbre_archvo_po_before_qstr = $this->nmbre_archvo_po;
          $this->nmbre_archvo_po = substr($this->Db->qstr($this->nmbre_archvo_po), 1, -1); 
          if ($this->nmbre_archvo_po == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nmbre_archvo_po = "null"; 
              $NM_val_null[] = "nmbre_archvo_po";
          } 
          $this->tmno_po_before_qstr = $this->tmno_po;
          $this->tmno_po = substr($this->Db->qstr($this->tmno_po), 1, -1); 
          if ($this->tmno_po == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tmno_po = "null"; 
              $NM_val_null[] = "tmno_po";
          } 
          if ($this->fcha_rgstro == "")  
          { 
              $this->fcha_rgstro = "null"; 
              $NM_val_null[] = "fcha_rgstro";
          } 
          $this->id_usrio_before_qstr = $this->id_usrio;
          $this->id_usrio = substr($this->Db->qstr($this->id_usrio), 1, -1); 
          if ($this->id_usrio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->id_usrio = "null"; 
              $NM_val_null[] = "id_usrio";
          } 
          if ($this->fcha_actlzcion == "")  
          { 
              $this->fcha_actlzcion = "null"; 
              $NM_val_null[] = "fcha_actlzcion";
          } 
          $this->id_usrio_actlzcion_before_qstr = $this->id_usrio_actlzcion;
          $this->id_usrio_actlzcion = substr($this->Db->qstr($this->id_usrio_actlzcion), 1, -1); 
          if ($this->id_usrio_actlzcion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->id_usrio_actlzcion = "null"; 
              $NM_val_null[] = "id_usrio_actlzcion";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_activos_mob_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "NMBRE = '$this->nmbre', CDGO = '$this->cdgo', RFRNCIA = '$this->rfrncia', SRIAL = '$this->srial', NMRO_ACTVO = '$this->nmro_actvo', ALIAS = '$this->alias', CDGO_QR = '$this->cdgo_qr', CDGO_BRRAS = '$this->cdgo_brras', CDGO_RFID = '$this->cdgo_rfid', CMPSTO = '$this->cmpsto', ID_ESTDO = $this->id_estdo, ID_CLSE = $this->id_clse, ID_TPO = $this->id_tpo, ID_MRCA = $this->id_mrca, MDLO = '$this->mdlo', ID_FBRCNTE = $this->id_fbrcnte, CNFBLDAD = $this->cnfbldad, ID_NIT_PRVDOR = $this->id_nit_prvdor, FCHA_CMPRA = #$this->fcha_cmpra#, FCHA_ARRNQUE = #$this->fcha_arrnque#, FCHA_FIN_GRNTIA = #$this->fcha_fin_grntia#, VLOR_CMPRA1 = $this->vlor_cmpra1, ID_MNDA_CMPRA1 = '$this->id_mnda_cmpra1', VLOR_CMPRA2 = $this->vlor_cmpra2, ID_MNDA_CMPRA2 = '$this->id_mnda_cmpra2', ID_AREA = $this->id_area, ID_CNTRO_CSTO = $this->id_cntro_csto, ID_UBCCION = $this->id_ubccion, ID_NIT_RSPNSBLE = $this->id_nit_rspnsble, ID_CNTDOR = $this->id_cntdor, VLOR_ACTUAL = $this->vlor_actual, FCHA_LCTRA = #$this->fcha_lctra#, VLOR_ESTNDAR = $this->vlor_estndar, ID_TPO_MDCION = $this->id_tpo_mdcion, NMBRE_ARCHVO_PO = '$this->nmbre_archvo_po', TMNO_PO = '$this->tmno_po', FCHA_RGSTRO = #$this->fcha_rgstro#, ID_USRIO = '$this->id_usrio', FCHA_ACTLZCION = #$this->fcha_actlzcion#, ID_USRIO_ACTLZCION = '$this->id_usrio_actlzcion'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "NMBRE = '$this->nmbre', CDGO = '$this->cdgo', RFRNCIA = '$this->rfrncia', SRIAL = '$this->srial', NMRO_ACTVO = '$this->nmro_actvo', ALIAS = '$this->alias', CDGO_QR = '$this->cdgo_qr', CDGO_BRRAS = '$this->cdgo_brras', CDGO_RFID = '$this->cdgo_rfid', CMPSTO = '$this->cmpsto', ID_ESTDO = $this->id_estdo, ID_CLSE = $this->id_clse, ID_TPO = $this->id_tpo, ID_MRCA = $this->id_mrca, MDLO = '$this->mdlo', ID_FBRCNTE = $this->id_fbrcnte, CNFBLDAD = $this->cnfbldad, ID_NIT_PRVDOR = $this->id_nit_prvdor, FCHA_CMPRA = " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", FCHA_ARRNQUE = " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", FCHA_FIN_GRNTIA = " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", VLOR_CMPRA1 = $this->vlor_cmpra1, ID_MNDA_CMPRA1 = '$this->id_mnda_cmpra1', VLOR_CMPRA2 = $this->vlor_cmpra2, ID_MNDA_CMPRA2 = '$this->id_mnda_cmpra2', ID_AREA = $this->id_area, ID_CNTRO_CSTO = $this->id_cntro_csto, ID_UBCCION = $this->id_ubccion, ID_NIT_RSPNSBLE = $this->id_nit_rspnsble, ID_CNTDOR = $this->id_cntdor, VLOR_ACTUAL = $this->vlor_actual, FCHA_LCTRA = " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", VLOR_ESTNDAR = $this->vlor_estndar, ID_TPO_MDCION = $this->id_tpo_mdcion, NMBRE_ARCHVO_PO = '$this->nmbre_archvo_po', TMNO_PO = '$this->tmno_po', FCHA_RGSTRO = " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", ID_USRIO = '$this->id_usrio', FCHA_ACTLZCION = " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", ID_USRIO_ACTLZCION = '$this->id_usrio_actlzcion'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "NMBRE = '$this->nmbre', CDGO = '$this->cdgo', RFRNCIA = '$this->rfrncia', SRIAL = '$this->srial', NMRO_ACTVO = '$this->nmro_actvo', ALIAS = '$this->alias', CDGO_QR = '$this->cdgo_qr', CDGO_BRRAS = '$this->cdgo_brras', CDGO_RFID = '$this->cdgo_rfid', CMPSTO = '$this->cmpsto', ID_ESTDO = $this->id_estdo, ID_CLSE = $this->id_clse, ID_TPO = $this->id_tpo, ID_MRCA = $this->id_mrca, MDLO = '$this->mdlo', ID_FBRCNTE = $this->id_fbrcnte, CNFBLDAD = $this->cnfbldad, ID_NIT_PRVDOR = $this->id_nit_prvdor, FCHA_CMPRA = " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", FCHA_ARRNQUE = " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", FCHA_FIN_GRNTIA = " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", VLOR_CMPRA1 = $this->vlor_cmpra1, ID_MNDA_CMPRA1 = '$this->id_mnda_cmpra1', VLOR_CMPRA2 = $this->vlor_cmpra2, ID_MNDA_CMPRA2 = '$this->id_mnda_cmpra2', ID_AREA = $this->id_area, ID_CNTRO_CSTO = $this->id_cntro_csto, ID_UBCCION = $this->id_ubccion, ID_NIT_RSPNSBLE = $this->id_nit_rspnsble, ID_CNTDOR = $this->id_cntdor, VLOR_ACTUAL = $this->vlor_actual, FCHA_LCTRA = " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", VLOR_ESTNDAR = $this->vlor_estndar, ID_TPO_MDCION = $this->id_tpo_mdcion, NMBRE_ARCHVO_PO = '$this->nmbre_archvo_po', TMNO_PO = '$this->tmno_po', FCHA_RGSTRO = " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", ID_USRIO = '$this->id_usrio', FCHA_ACTLZCION = " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", ID_USRIO_ACTLZCION = '$this->id_usrio_actlzcion'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "NMBRE = '$this->nmbre', CDGO = '$this->cdgo', RFRNCIA = '$this->rfrncia', SRIAL = '$this->srial', NMRO_ACTVO = '$this->nmro_actvo', ALIAS = '$this->alias', CDGO_QR = '$this->cdgo_qr', CDGO_BRRAS = '$this->cdgo_brras', CDGO_RFID = '$this->cdgo_rfid', CMPSTO = '$this->cmpsto', ID_ESTDO = $this->id_estdo, ID_CLSE = $this->id_clse, ID_TPO = $this->id_tpo, ID_MRCA = $this->id_mrca, MDLO = '$this->mdlo', ID_FBRCNTE = $this->id_fbrcnte, CNFBLDAD = $this->cnfbldad, ID_NIT_PRVDOR = $this->id_nit_prvdor, FCHA_CMPRA = EXTEND('$this->fcha_cmpra', YEAR TO DAY), FCHA_ARRNQUE = EXTEND('$this->fcha_arrnque', YEAR TO DAY), FCHA_FIN_GRNTIA = EXTEND('$this->fcha_fin_grntia', YEAR TO DAY), VLOR_CMPRA1 = $this->vlor_cmpra1, ID_MNDA_CMPRA1 = '$this->id_mnda_cmpra1', VLOR_CMPRA2 = $this->vlor_cmpra2, ID_MNDA_CMPRA2 = '$this->id_mnda_cmpra2', ID_AREA = $this->id_area, ID_CNTRO_CSTO = $this->id_cntro_csto, ID_UBCCION = $this->id_ubccion, ID_NIT_RSPNSBLE = $this->id_nit_rspnsble, ID_CNTDOR = $this->id_cntdor, VLOR_ACTUAL = $this->vlor_actual, FCHA_LCTRA = EXTEND('$this->fcha_lctra', YEAR TO DAY), VLOR_ESTNDAR = $this->vlor_estndar, ID_TPO_MDCION = $this->id_tpo_mdcion, NMBRE_ARCHVO_PO = '$this->nmbre_archvo_po', TMNO_PO = '$this->tmno_po', FCHA_RGSTRO = EXTEND('$this->fcha_rgstro', YEAR TO DAY), ID_USRIO = '$this->id_usrio', FCHA_ACTLZCION = EXTEND('$this->fcha_actlzcion', YEAR TO FRACTION), ID_USRIO_ACTLZCION = '$this->id_usrio_actlzcion'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "NMBRE = '$this->nmbre', CDGO = '$this->cdgo', RFRNCIA = '$this->rfrncia', SRIAL = '$this->srial', NMRO_ACTVO = '$this->nmro_actvo', ALIAS = '$this->alias', CDGO_QR = '$this->cdgo_qr', CDGO_BRRAS = '$this->cdgo_brras', CDGO_RFID = '$this->cdgo_rfid', CMPSTO = '$this->cmpsto', ID_ESTDO = $this->id_estdo, ID_CLSE = $this->id_clse, ID_TPO = $this->id_tpo, ID_MRCA = $this->id_mrca, MDLO = '$this->mdlo', ID_FBRCNTE = $this->id_fbrcnte, CNFBLDAD = $this->cnfbldad, ID_NIT_PRVDOR = $this->id_nit_prvdor, FCHA_CMPRA = " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", FCHA_ARRNQUE = " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", FCHA_FIN_GRNTIA = " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", VLOR_CMPRA1 = $this->vlor_cmpra1, ID_MNDA_CMPRA1 = '$this->id_mnda_cmpra1', VLOR_CMPRA2 = $this->vlor_cmpra2, ID_MNDA_CMPRA2 = '$this->id_mnda_cmpra2', ID_AREA = $this->id_area, ID_CNTRO_CSTO = $this->id_cntro_csto, ID_UBCCION = $this->id_ubccion, ID_NIT_RSPNSBLE = $this->id_nit_rspnsble, ID_CNTDOR = $this->id_cntdor, VLOR_ACTUAL = $this->vlor_actual, FCHA_LCTRA = " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", VLOR_ESTNDAR = $this->vlor_estndar, ID_TPO_MDCION = $this->id_tpo_mdcion, NMBRE_ARCHVO_PO = '$this->nmbre_archvo_po', TMNO_PO = '$this->tmno_po', FCHA_RGSTRO = " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", ID_USRIO = '$this->id_usrio', FCHA_ACTLZCION = " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", ID_USRIO_ACTLZCION = '$this->id_usrio_actlzcion'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "NMBRE = '$this->nmbre', CDGO = '$this->cdgo', RFRNCIA = '$this->rfrncia', SRIAL = '$this->srial', NMRO_ACTVO = '$this->nmro_actvo', ALIAS = '$this->alias', CDGO_QR = '$this->cdgo_qr', CDGO_BRRAS = '$this->cdgo_brras', CDGO_RFID = '$this->cdgo_rfid', CMPSTO = '$this->cmpsto', ID_ESTDO = $this->id_estdo, ID_CLSE = $this->id_clse, ID_TPO = $this->id_tpo, ID_MRCA = $this->id_mrca, MDLO = '$this->mdlo', ID_FBRCNTE = $this->id_fbrcnte, CNFBLDAD = $this->cnfbldad, ID_NIT_PRVDOR = $this->id_nit_prvdor, FCHA_CMPRA = " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", FCHA_ARRNQUE = " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", FCHA_FIN_GRNTIA = " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", VLOR_CMPRA1 = $this->vlor_cmpra1, ID_MNDA_CMPRA1 = '$this->id_mnda_cmpra1', VLOR_CMPRA2 = $this->vlor_cmpra2, ID_MNDA_CMPRA2 = '$this->id_mnda_cmpra2', ID_AREA = $this->id_area, ID_CNTRO_CSTO = $this->id_cntro_csto, ID_UBCCION = $this->id_ubccion, ID_NIT_RSPNSBLE = $this->id_nit_rspnsble, ID_CNTDOR = $this->id_cntdor, VLOR_ACTUAL = $this->vlor_actual, FCHA_LCTRA = " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", VLOR_ESTNDAR = $this->vlor_estndar, ID_TPO_MDCION = $this->id_tpo_mdcion, NMBRE_ARCHVO_PO = '$this->nmbre_archvo_po', TMNO_PO = '$this->tmno_po', FCHA_RGSTRO = " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", ID_USRIO = '$this->id_usrio', FCHA_ACTLZCION = " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", ID_USRIO_ACTLZCION = '$this->id_usrio_actlzcion'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "NMBRE = '$this->nmbre', CDGO = '$this->cdgo', RFRNCIA = '$this->rfrncia', SRIAL = '$this->srial', NMRO_ACTVO = '$this->nmro_actvo', ALIAS = '$this->alias', CDGO_QR = '$this->cdgo_qr', CDGO_BRRAS = '$this->cdgo_brras', CDGO_RFID = '$this->cdgo_rfid', CMPSTO = '$this->cmpsto', ID_ESTDO = $this->id_estdo, ID_CLSE = $this->id_clse, ID_TPO = $this->id_tpo, ID_MRCA = $this->id_mrca, MDLO = '$this->mdlo', ID_FBRCNTE = $this->id_fbrcnte, CNFBLDAD = $this->cnfbldad, ID_NIT_PRVDOR = $this->id_nit_prvdor, FCHA_CMPRA = " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", FCHA_ARRNQUE = " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", FCHA_FIN_GRNTIA = " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", VLOR_CMPRA1 = $this->vlor_cmpra1, ID_MNDA_CMPRA1 = '$this->id_mnda_cmpra1', VLOR_CMPRA2 = $this->vlor_cmpra2, ID_MNDA_CMPRA2 = '$this->id_mnda_cmpra2', ID_AREA = $this->id_area, ID_CNTRO_CSTO = $this->id_cntro_csto, ID_UBCCION = $this->id_ubccion, ID_NIT_RSPNSBLE = $this->id_nit_rspnsble, ID_CNTDOR = $this->id_cntdor, VLOR_ACTUAL = $this->vlor_actual, FCHA_LCTRA = " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", VLOR_ESTNDAR = $this->vlor_estndar, ID_TPO_MDCION = $this->id_tpo_mdcion, NMBRE_ARCHVO_PO = '$this->nmbre_archvo_po', TMNO_PO = '$this->tmno_po', FCHA_RGSTRO = " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", ID_USRIO = '$this->id_usrio', FCHA_ACTLZCION = " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", ID_USRIO_ACTLZCION = '$this->id_usrio_actlzcion'"; 
              } 
              $aDoNotUpdate = array();
              $temp_cmd_sql = "";
              if ($this->fto1_limpa == "S")
              {
                  if ($this->fto1 != "null")
                  {
                      $this->fto1 = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "FTO1 = '" . $this->fto1 . "'";
                  }
                  $this->fto1 = "";
              }
              else
              {
                  if ($this->fto1 != "none" && $this->fto1 != "")
                  {
                      $NM_conteudo =  $this->fto1;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " FTO1 = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "fto1";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $temp_cmd_sql = "";
              if ($this->fto2_limpa == "S")
              {
                  if ($this->fto2 != "null")
                  {
                      $this->fto2 = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "FTO2 = '" . $this->fto2 . "'";
                  }
                  $this->fto2 = "";
              }
              else
              {
                  if ($this->fto2 != "none" && $this->fto2 != "")
                  {
                      $NM_conteudo =  $this->fto2;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " FTO2 = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "fto2";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $temp_cmd_sql = "";
              if ($this->fto3_limpa == "S")
              {
                  if ($this->fto3 != "null")
                  {
                      $this->fto3 = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "FTO3 = '" . $this->fto3 . "'";
                  }
                  $this->fto3 = "";
              }
              else
              {
                  if ($this->fto3 != "none" && $this->fto3 != "")
                  {
                      $NM_conteudo =  $this->fto3;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " FTO3 = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "fto3";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $temp_cmd_sql = "";
              if ($this->fto4_limpa == "S")
              {
                  if ($this->fto4 != "null")
                  {
                      $this->fto4 = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "FTO4 = '" . $this->fto4 . "'";
                  }
                  $this->fto4 = "";
              }
              else
              {
                  if ($this->fto4 != "none" && $this->fto4 != "")
                  {
                      $NM_conteudo =  $this->fto4;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " FTO4 = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "fto4";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $temp_cmd_sql = "";
              if ($this->fto5_limpa == "S")
              {
                  if ($this->fto5 != "null")
                  {
                      $this->fto5 = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "FTO5 = '" . $this->fto5 . "'";
                  }
                  $this->fto5 = "";
              }
              else
              {
                  if ($this->fto5 != "none" && $this->fto5 != "")
                  {
                      $NM_conteudo =  $this->fto5;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " FTO5 = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "fto5";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $temp_cmd_sql = "";
              if ($this->fto6_limpa == "S")
              {
                  if ($this->fto6 != "null")
                  {
                      $this->fto6 = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "FTO6 = '" . $this->fto6 . "'";
                  }
                  $this->fto6 = "";
              }
              else
              {
                  if ($this->fto6 != "none" && $this->fto6 != "")
                  {
                      $NM_conteudo =  $this->fto6;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " FTO6 = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "fto6";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $temp_cmd_sql = "";
              if ($this->prmtro_oprcion_limpa == "S")
              {
                  if ($this->prmtro_oprcion != "null")
                  {
                      $this->prmtro_oprcion = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "PRMTRO_OPRCION = '" . $this->prmtro_oprcion . "'";
                  }
                  $this->prmtro_oprcion = "";
              }
              else
              {
                  if ($this->prmtro_oprcion != "none" && $this->prmtro_oprcion != "")
                  {
                      $NM_conteudo =  $this->prmtro_oprcion;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " PRMTRO_OPRCION = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "prmtro_oprcion";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              if ($this->fto1_limpa == "S" || ($this->fto1 != "none" && $this->fto1 != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "FTO1 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "FTO1 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "FTO1 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "FTO1 = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "FTO1 = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "FTO1 = empty_blob()"; 
                  } 
              } 
              if ($this->fto2_limpa == "S" || ($this->fto2 != "none" && $this->fto2 != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "FTO2 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "FTO2 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "FTO2 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "FTO2 = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "FTO2 = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "FTO2 = empty_blob()"; 
                  } 
              } 
              if ($this->fto3_limpa == "S" || ($this->fto3 != "none" && $this->fto3 != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "FTO3 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "FTO3 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "FTO3 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "FTO3 = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "FTO3 = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "FTO3 = empty_blob()"; 
                  } 
              } 
              if ($this->fto4_limpa == "S" || ($this->fto4 != "none" && $this->fto4 != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "FTO4 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "FTO4 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "FTO4 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "FTO4 = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "FTO4 = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "FTO4 = empty_blob()"; 
                  } 
              } 
              if ($this->fto5_limpa == "S" || ($this->fto5 != "none" && $this->fto5 != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "FTO5 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "FTO5 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "FTO5 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "FTO5 = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "FTO5 = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "FTO5 = empty_blob()"; 
                  } 
              } 
              if ($this->fto6_limpa == "S" || ($this->fto6 != "none" && $this->fto6 != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "FTO6 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "FTO6 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "FTO6 = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "FTO6 = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "FTO6 = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "FTO6 = empty_blob()"; 
                  } 
              } 
              if ($this->prmtro_oprcion_limpa == "S" || ($this->prmtro_oprcion != "none" && $this->prmtro_oprcion != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "PRMTRO_OPRCION = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "PRMTRO_OPRCION = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "PRMTRO_OPRCION = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "PRMTRO_OPRCION = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "PRMTRO_OPRCION = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "PRMTRO_OPRCION = empty_blob()"; 
                  } 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE ID_ACTVO = $this->id_actvo ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE ID_ACTVO = $this->id_actvo ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE ID_ACTVO = $this->id_actvo ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE ID_ACTVO = $this->id_actvo ";  
              }  
              else  
              {
                  $comando .= " WHERE ID_ACTVO = $this->id_actvo ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $useUpdateProcedure = false;
              if (!empty($SC_fields_update) || $useUpdateProcedure)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $dbErrorMessage = $this->Db->ErrorMsg();
                          $dbErrorCode = $this->Db->ErrorNo();
                          $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $dbErrorMessage;
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_activos_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if ($this->fto1_limpa == "S" && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO1\", \"\",  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO1", "",  "ID_ACTVO = $this->id_actvo"); 
                  } 
                  else 
                  { 
                      if ($this->fto1 != "none" && $this->fto1 != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO1\", $this->fto1,  \"ID_ACTVO = $this->id_actvo\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO1", $this->fto1,  "ID_ACTVO = $this->id_actvo"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                      }
                      exit;  
                  }   
                  if ($this->fto2_limpa == "S" && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO2\", \"\",  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO2", "",  "ID_ACTVO = $this->id_actvo"); 
                  } 
                  else 
                  { 
                      if ($this->fto2 != "none" && $this->fto2 != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO2\", $this->fto2,  \"ID_ACTVO = $this->id_actvo\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO2", $this->fto2,  "ID_ACTVO = $this->id_actvo"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                      }
                      exit;  
                  }   
                  if ($this->fto3_limpa == "S" && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO3\", \"\",  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO3", "",  "ID_ACTVO = $this->id_actvo"); 
                  } 
                  else 
                  { 
                      if ($this->fto3 != "none" && $this->fto3 != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO3\", $this->fto3,  \"ID_ACTVO = $this->id_actvo\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO3", $this->fto3,  "ID_ACTVO = $this->id_actvo"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                      }
                      exit;  
                  }   
                  if ($this->fto4_limpa == "S" && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO4\", \"\",  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO4", "",  "ID_ACTVO = $this->id_actvo"); 
                  } 
                  else 
                  { 
                      if ($this->fto4 != "none" && $this->fto4 != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO4\", $this->fto4,  \"ID_ACTVO = $this->id_actvo\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO4", $this->fto4,  "ID_ACTVO = $this->id_actvo"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                      }
                      exit;  
                  }   
                  if ($this->fto5_limpa == "S" && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO5\", \"\",  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO5", "",  "ID_ACTVO = $this->id_actvo"); 
                  } 
                  else 
                  { 
                      if ($this->fto5 != "none" && $this->fto5 != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO5\", $this->fto5,  \"ID_ACTVO = $this->id_actvo\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO5", $this->fto5,  "ID_ACTVO = $this->id_actvo"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                      }
                      exit;  
                  }   
                  if ($this->fto6_limpa == "S" && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO6\", \"\",  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO6", "",  "ID_ACTVO = $this->id_actvo"); 
                  } 
                  else 
                  { 
                      if ($this->fto6 != "none" && $this->fto6 != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"FTO6\", $this->fto6,  \"ID_ACTVO = $this->id_actvo\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO6", $this->fto6,  "ID_ACTVO = $this->id_actvo"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                      }
                      exit;  
                  }   
                  if ($this->prmtro_oprcion_limpa == "S" && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"PRMTRO_OPRCION\", \"\",  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "PRMTRO_OPRCION", "",  "ID_ACTVO = $this->id_actvo"); 
                  } 
                  else 
                  { 
                      if ($this->prmtro_oprcion != "none" && $this->prmtro_oprcion != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"PRMTRO_OPRCION\", $this->prmtro_oprcion,  \"ID_ACTVO = $this->id_actvo\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "PRMTRO_OPRCION", $this->prmtro_oprcion,  "ID_ACTVO = $this->id_actvo"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                      }
                      exit;  
                  }   
              }   
              if ($this->fto1_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fto1_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->fto2_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fto2_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->fto3_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fto3_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->fto4_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fto4_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->fto5_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fto5_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->fto6_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fto6_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->prmtro_oprcion_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['prmtro_oprcion_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              $this->nmbre = $this->nmbre_before_qstr;
              $this->cdgo = $this->cdgo_before_qstr;
              $this->rfrncia = $this->rfrncia_before_qstr;
              $this->srial = $this->srial_before_qstr;
              $this->nmro_actvo = $this->nmro_actvo_before_qstr;
              $this->alias = $this->alias_before_qstr;
              $this->cdgo_qr = $this->cdgo_qr_before_qstr;
              $this->cdgo_brras = $this->cdgo_brras_before_qstr;
              $this->cdgo_rfid = $this->cdgo_rfid_before_qstr;
              $this->cmpsto = $this->cmpsto_before_qstr;
              $this->mdlo = $this->mdlo_before_qstr;
              $this->id_mnda_cmpra1 = $this->id_mnda_cmpra1_before_qstr;
              $this->id_mnda_cmpra2 = $this->id_mnda_cmpra2_before_qstr;
              $this->nmbre_archvo_po = $this->nmbre_archvo_po_before_qstr;
              $this->tmno_po = $this->tmno_po_before_qstr;
              $this->id_usrio = $this->id_usrio_before_qstr;
              $this->id_usrio_actlzcion = $this->id_usrio_actlzcion_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['id_actvo'])) { $this->id_actvo = $NM_val_form['id_actvo']; }
              elseif (isset($this->id_actvo)) { $this->nm_limpa_alfa($this->id_actvo); }
              if     (isset($NM_val_form) && isset($NM_val_form['nmbre'])) { $this->nmbre = $NM_val_form['nmbre']; }
              elseif (isset($this->nmbre)) { $this->nm_limpa_alfa($this->nmbre); }
              if     (isset($NM_val_form) && isset($NM_val_form['cdgo'])) { $this->cdgo = $NM_val_form['cdgo']; }
              elseif (isset($this->cdgo)) { $this->nm_limpa_alfa($this->cdgo); }
              if     (isset($NM_val_form) && isset($NM_val_form['rfrncia'])) { $this->rfrncia = $NM_val_form['rfrncia']; }
              elseif (isset($this->rfrncia)) { $this->nm_limpa_alfa($this->rfrncia); }
              if     (isset($NM_val_form) && isset($NM_val_form['srial'])) { $this->srial = $NM_val_form['srial']; }
              elseif (isset($this->srial)) { $this->nm_limpa_alfa($this->srial); }
              if     (isset($NM_val_form) && isset($NM_val_form['nmro_actvo'])) { $this->nmro_actvo = $NM_val_form['nmro_actvo']; }
              elseif (isset($this->nmro_actvo)) { $this->nm_limpa_alfa($this->nmro_actvo); }
              if     (isset($NM_val_form) && isset($NM_val_form['alias'])) { $this->alias = $NM_val_form['alias']; }
              elseif (isset($this->alias)) { $this->nm_limpa_alfa($this->alias); }
              if     (isset($NM_val_form) && isset($NM_val_form['cdgo_qr'])) { $this->cdgo_qr = $NM_val_form['cdgo_qr']; }
              elseif (isset($this->cdgo_qr)) { $this->nm_limpa_alfa($this->cdgo_qr); }
              if     (isset($NM_val_form) && isset($NM_val_form['cdgo_brras'])) { $this->cdgo_brras = $NM_val_form['cdgo_brras']; }
              elseif (isset($this->cdgo_brras)) { $this->nm_limpa_alfa($this->cdgo_brras); }
              if     (isset($NM_val_form) && isset($NM_val_form['cdgo_rfid'])) { $this->cdgo_rfid = $NM_val_form['cdgo_rfid']; }
              elseif (isset($this->cdgo_rfid)) { $this->nm_limpa_alfa($this->cdgo_rfid); }
              if     (isset($NM_val_form) && isset($NM_val_form['cmpsto'])) { $this->cmpsto = $NM_val_form['cmpsto']; }
              elseif (isset($this->cmpsto)) { $this->nm_limpa_alfa($this->cmpsto); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_estdo'])) { $this->id_estdo = $NM_val_form['id_estdo']; }
              elseif (isset($this->id_estdo)) { $this->nm_limpa_alfa($this->id_estdo); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_clse'])) { $this->id_clse = $NM_val_form['id_clse']; }
              elseif (isset($this->id_clse)) { $this->nm_limpa_alfa($this->id_clse); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_tpo'])) { $this->id_tpo = $NM_val_form['id_tpo']; }
              elseif (isset($this->id_tpo)) { $this->nm_limpa_alfa($this->id_tpo); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_mrca'])) { $this->id_mrca = $NM_val_form['id_mrca']; }
              elseif (isset($this->id_mrca)) { $this->nm_limpa_alfa($this->id_mrca); }
              if     (isset($NM_val_form) && isset($NM_val_form['mdlo'])) { $this->mdlo = $NM_val_form['mdlo']; }
              elseif (isset($this->mdlo)) { $this->nm_limpa_alfa($this->mdlo); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_fbrcnte'])) { $this->id_fbrcnte = $NM_val_form['id_fbrcnte']; }
              elseif (isset($this->id_fbrcnte)) { $this->nm_limpa_alfa($this->id_fbrcnte); }
              if     (isset($NM_val_form) && isset($NM_val_form['cnfbldad'])) { $this->cnfbldad = $NM_val_form['cnfbldad']; }
              elseif (isset($this->cnfbldad)) { $this->nm_limpa_alfa($this->cnfbldad); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_nit_prvdor'])) { $this->id_nit_prvdor = $NM_val_form['id_nit_prvdor']; }
              elseif (isset($this->id_nit_prvdor)) { $this->nm_limpa_alfa($this->id_nit_prvdor); }
              if     (isset($NM_val_form) && isset($NM_val_form['vlor_cmpra1'])) { $this->vlor_cmpra1 = $NM_val_form['vlor_cmpra1']; }
              elseif (isset($this->vlor_cmpra1)) { $this->nm_limpa_alfa($this->vlor_cmpra1); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_mnda_cmpra1'])) { $this->id_mnda_cmpra1 = $NM_val_form['id_mnda_cmpra1']; }
              elseif (isset($this->id_mnda_cmpra1)) { $this->nm_limpa_alfa($this->id_mnda_cmpra1); }
              if     (isset($NM_val_form) && isset($NM_val_form['vlor_cmpra2'])) { $this->vlor_cmpra2 = $NM_val_form['vlor_cmpra2']; }
              elseif (isset($this->vlor_cmpra2)) { $this->nm_limpa_alfa($this->vlor_cmpra2); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_mnda_cmpra2'])) { $this->id_mnda_cmpra2 = $NM_val_form['id_mnda_cmpra2']; }
              elseif (isset($this->id_mnda_cmpra2)) { $this->nm_limpa_alfa($this->id_mnda_cmpra2); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_area'])) { $this->id_area = $NM_val_form['id_area']; }
              elseif (isset($this->id_area)) { $this->nm_limpa_alfa($this->id_area); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_cntro_csto'])) { $this->id_cntro_csto = $NM_val_form['id_cntro_csto']; }
              elseif (isset($this->id_cntro_csto)) { $this->nm_limpa_alfa($this->id_cntro_csto); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_ubccion'])) { $this->id_ubccion = $NM_val_form['id_ubccion']; }
              elseif (isset($this->id_ubccion)) { $this->nm_limpa_alfa($this->id_ubccion); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_nit_rspnsble'])) { $this->id_nit_rspnsble = $NM_val_form['id_nit_rspnsble']; }
              elseif (isset($this->id_nit_rspnsble)) { $this->nm_limpa_alfa($this->id_nit_rspnsble); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_cntdor'])) { $this->id_cntdor = $NM_val_form['id_cntdor']; }
              elseif (isset($this->id_cntdor)) { $this->nm_limpa_alfa($this->id_cntdor); }
              if     (isset($NM_val_form) && isset($NM_val_form['vlor_actual'])) { $this->vlor_actual = $NM_val_form['vlor_actual']; }
              elseif (isset($this->vlor_actual)) { $this->nm_limpa_alfa($this->vlor_actual); }
              if     (isset($NM_val_form) && isset($NM_val_form['vlor_estndar'])) { $this->vlor_estndar = $NM_val_form['vlor_estndar']; }
              elseif (isset($this->vlor_estndar)) { $this->nm_limpa_alfa($this->vlor_estndar); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_tpo_mdcion'])) { $this->id_tpo_mdcion = $NM_val_form['id_tpo_mdcion']; }
              elseif (isset($this->id_tpo_mdcion)) { $this->nm_limpa_alfa($this->id_tpo_mdcion); }
              if     (isset($NM_val_form) && isset($NM_val_form['nmbre_archvo_po'])) { $this->nmbre_archvo_po = $NM_val_form['nmbre_archvo_po']; }
              elseif (isset($this->nmbre_archvo_po)) { $this->nm_limpa_alfa($this->nmbre_archvo_po); }
              if     (isset($NM_val_form) && isset($NM_val_form['tmno_po'])) { $this->tmno_po = $NM_val_form['tmno_po']; }
              elseif (isset($this->tmno_po)) { $this->nm_limpa_alfa($this->tmno_po); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_usrio'])) { $this->id_usrio = $NM_val_form['id_usrio']; }
              elseif (isset($this->id_usrio)) { $this->nm_limpa_alfa($this->id_usrio); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_usrio_actlzcion'])) { $this->id_usrio_actlzcion = $NM_val_form['id_usrio_actlzcion']; }
              elseif (isset($this->id_usrio_actlzcion)) { $this->nm_limpa_alfa($this->id_usrio_actlzcion); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('id_actvo', 'nmbre', 'cdgo', 'rfrncia', 'srial', 'nmro_actvo', 'alias', 'cdgo_qr', 'cdgo_brras', 'cdgo_rfid', 'cmpsto', 'id_estdo', 'id_clse', 'id_tpo', 'id_mrca', 'mdlo', 'id_fbrcnte', 'cnfbldad', 'id_nit_prvdor', 'fcha_cmpra', 'fcha_arrnque', 'fcha_fin_grntia', 'vlor_cmpra1', 'id_mnda_cmpra1', 'vlor_cmpra2', 'id_mnda_cmpra2', 'id_area', 'id_cntro_csto', 'id_ubccion', 'id_nit_rspnsble', 'id_cntdor', 'vlor_actual', 'fcha_lctra', 'vlor_estndar', 'id_tpo_mdcion', 'fto1', 'fto2', 'fto3', 'fto4', 'fto5', 'fto6', 'prmtro_oprcion', 'nmbre_archvo_po', 'tmno_po', 'fcha_rgstro', 'id_usrio', 'fcha_actlzcion', 'id_usrio_actlzcion'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "ID_ACTVO, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_activos_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $_test_file = $this->fetchUniqueUploadName($this->fto1_scfile_name, $dir_file, "fto1");
              if (trim($this->fto1_scfile_name) != $_test_file)
              {
                  $this->fto1_scfile_name = $_test_file;
                  $this->fto1 = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->fto2_scfile_name, $dir_file, "fto2");
              if (trim($this->fto2_scfile_name) != $_test_file)
              {
                  $this->fto2_scfile_name = $_test_file;
                  $this->fto2 = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->fto3_scfile_name, $dir_file, "fto3");
              if (trim($this->fto3_scfile_name) != $_test_file)
              {
                  $this->fto3_scfile_name = $_test_file;
                  $this->fto3 = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->fto4_scfile_name, $dir_file, "fto4");
              if (trim($this->fto4_scfile_name) != $_test_file)
              {
                  $this->fto4_scfile_name = $_test_file;
                  $this->fto4 = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->fto5_scfile_name, $dir_file, "fto5");
              if (trim($this->fto5_scfile_name) != $_test_file)
              {
                  $this->fto5_scfile_name = $_test_file;
                  $this->fto5 = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->fto6_scfile_name, $dir_file, "fto6");
              if (trim($this->fto6_scfile_name) != $_test_file)
              {
                  $this->fto6_scfile_name = $_test_file;
                  $this->fto6 = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->prmtro_oprcion_scfile_name, $dir_file, "prmtro_oprcion");
              if (trim($this->prmtro_oprcion_scfile_name) != $_test_file)
              {
                  $this->prmtro_oprcion_scfile_name = $_test_file;
                  $this->prmtro_oprcion = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES ('$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, #$this->fcha_cmpra#, #$this->fcha_arrnque#, #$this->fcha_fin_grntia#, '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, #$this->fcha_lctra#, $this->id_tpo_mdcion, '$this->fto1', '$this->fto2', '$this->fto3', '$this->fto4', '$this->fto5', '$this->fto6', '$this->prmtro_oprcion', '$this->nmbre_archvo_po', '$this->tmno_po', #$this->fcha_rgstro#, '$this->id_usrio', #$this->fcha_actlzcion#, '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif ($this->Ini->nm_tpbanco == "pdo_sqlsrv")
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES ('$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, '', '', '', '', '', '', '', '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES ('$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, '$this->fto1', '$this->fto2', '$this->fto3', '$this->fto4', '$this->fto5', '$this->fto6', '$this->prmtro_oprcion', '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES ('$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, '$this->fto1', '$this->fto2', '$this->fto3', '$this->fto4', '$this->fto5', '$this->fto6', '$this->prmtro_oprcion', '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES (" . $NM_seq_auto . "'$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES (" . $NM_seq_auto . "'$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, EXTEND('$this->fcha_cmpra', YEAR TO DAY), EXTEND('$this->fcha_arrnque', YEAR TO DAY), EXTEND('$this->fcha_fin_grntia', YEAR TO DAY), '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, EXTEND('$this->fcha_lctra', YEAR TO DAY), $this->id_tpo_mdcion, null, null, null, null, null, null, null, '$this->nmbre_archvo_po', '$this->tmno_po', EXTEND('$this->fcha_rgstro', YEAR TO DAY), '$this->id_usrio', EXTEND('$this->fcha_actlzcion', YEAR TO FRACTION), '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES (" . $NM_seq_auto . "'$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, '', '', '', '', '', '', '', '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES (" . $NM_seq_auto . "'$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, '', '', '', '', '', '', '', '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES (" . $NM_seq_auto . "'$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, '', '', '', '', '', '', '', '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              elseif ($this->Ini->nm_tpbanco =='pdo_ibm')
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES (" . $NM_seq_auto . "'$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), EMPTY_BLOB(), '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              else
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->cnfbldad != "")
                  { 
                       $compl_insert     .= ", CNFBLDAD";
                       $compl_insert_val .= ", $this->cnfbldad";
                  } 
                  if ($this->vlor_cmpra1 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA1";
                       $compl_insert_val .= ", $this->vlor_cmpra1";
                  } 
                  if ($this->vlor_cmpra2 != "")
                  { 
                       $compl_insert     .= ", VLOR_CMPRA2";
                       $compl_insert_val .= ", $this->vlor_cmpra2";
                  } 
                  if ($this->vlor_actual != "")
                  { 
                       $compl_insert     .= ", VLOR_ACTUAL";
                       $compl_insert_val .= ", $this->vlor_actual";
                  } 
                  if ($this->vlor_estndar != "")
                  { 
                       $compl_insert     .= ", VLOR_ESTNDAR";
                       $compl_insert_val .= ", $this->vlor_estndar";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, ID_MNDA_CMPRA1, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, FCHA_LCTRA, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION $compl_insert) VALUES (" . $NM_seq_auto . "'$this->nmbre', '$this->cdgo', '$this->rfrncia', '$this->srial', '$this->nmro_actvo', '$this->alias', '$this->cdgo_qr', '$this->cdgo_brras', '$this->cdgo_rfid', '$this->cmpsto', $this->id_estdo, $this->id_clse, $this->id_tpo, $this->id_mrca, '$this->mdlo', $this->id_fbrcnte, $this->id_nit_prvdor, " . $this->Ini->date_delim . $this->fcha_cmpra . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_arrnque . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fcha_fin_grntia . $this->Ini->date_delim1 . ", '$this->id_mnda_cmpra1', '$this->id_mnda_cmpra2', $this->id_area, $this->id_cntro_csto, $this->id_ubccion, $this->id_nit_rspnsble, $this->id_cntdor, " . $this->Ini->date_delim . $this->fcha_lctra . $this->Ini->date_delim1 . ", $this->id_tpo_mdcion, '$this->fto1', '$this->fto2', '$this->fto3', '$this->fto4', '$this->fto5', '$this->fto6', '$this->prmtro_oprcion', '$this->nmbre_archvo_po', '$this->tmno_po', " . $this->Ini->date_delim . $this->fcha_rgstro . $this->Ini->date_delim1 . ", '$this->id_usrio', " . $this->Ini->date_delim . $this->fcha_actlzcion . $this->Ini->date_delim1 . ", '$this->id_usrio_actlzcion' $compl_insert_val)"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $dbErrorMessage = $this->Db->ErrorMsg();
                      $dbErrorCode = $this->Db->ErrorNo();
                      $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                      { 
                          $this->sc_erro_insert = $dbErrorMessage;
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_activos_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->id_actvo =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_actvo = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT dbinfo('sqlca.sqlerrd1') FROM " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_actvo = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select .currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_actvo = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $str_tabela = "SYSIBM.SYSDUMMY1"; 
                  if($this->Ini->nm_con_use_schema == "N") 
                  { 
                          $str_tabela = "SYSDUMMY1"; 
                  } 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT IDENTITY_VAL_LOCAL() FROM " . $str_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_actvo = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_actvo = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_actvo = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_actvo = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if (trim($this->fto1 ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  FTO1 , $this->fto1,  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO1", $this->fto1,  "ID_ACTVO = $this->id_actvo"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_activos_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
                  if (trim($this->fto2 ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  FTO2 , $this->fto2,  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO2", $this->fto2,  "ID_ACTVO = $this->id_actvo"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_activos_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
                  if (trim($this->fto3 ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  FTO3 , $this->fto3,  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO3", $this->fto3,  "ID_ACTVO = $this->id_actvo"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_activos_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
                  if (trim($this->fto4 ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  FTO4 , $this->fto4,  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO4", $this->fto4,  "ID_ACTVO = $this->id_actvo"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_activos_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
                  if (trim($this->fto5 ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  FTO5 , $this->fto5,  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO5", $this->fto5,  "ID_ACTVO = $this->id_actvo"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_activos_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
                  if (trim($this->fto6 ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  FTO6 , $this->fto6,  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "FTO6", $this->fto6,  "ID_ACTVO = $this->id_actvo"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_activos_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
                  if (trim($this->prmtro_oprcion ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  PRMTRO_OPRCION , $this->prmtro_oprcion,  \"ID_ACTVO = $this->id_actvo\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "PRMTRO_OPRCION", $this->prmtro_oprcion,  "ID_ACTVO = $this->id_actvo"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_activos_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
              }  
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->nmbre = $this->nmbre_before_qstr;
              $this->cdgo = $this->cdgo_before_qstr;
              $this->rfrncia = $this->rfrncia_before_qstr;
              $this->srial = $this->srial_before_qstr;
              $this->nmro_actvo = $this->nmro_actvo_before_qstr;
              $this->alias = $this->alias_before_qstr;
              $this->cdgo_qr = $this->cdgo_qr_before_qstr;
              $this->cdgo_brras = $this->cdgo_brras_before_qstr;
              $this->cdgo_rfid = $this->cdgo_rfid_before_qstr;
              $this->cmpsto = $this->cmpsto_before_qstr;
              $this->mdlo = $this->mdlo_before_qstr;
              $this->id_mnda_cmpra1 = $this->id_mnda_cmpra1_before_qstr;
              $this->id_mnda_cmpra2 = $this->id_mnda_cmpra2_before_qstr;
              $this->nmbre_archvo_po = $this->nmbre_archvo_po_before_qstr;
              $this->tmno_po = $this->tmno_po_before_qstr;
              $this->id_usrio = $this->id_usrio_before_qstr;
              $this->id_usrio_actlzcion = $this->id_usrio_actlzcion_before_qstr;
              $this->sc_insert_on = true; 
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id_actvo = substr($this->Db->qstr($this->id_actvo), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where ID_ACTVO = $this->id_actvo "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_activos_mob_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              if (empty($this->sc_erro_delete)) {
                  $this->record_delete_ok = true;
              }
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['parms'] = "id_actvo?#?$this->id_actvo?@?"; 
      }
      $this->nmgp_dados_form['fto1'] = ""; 
      $this->fto1_limpa = ""; 
      $this->fto1_salva = ""; 
      $this->nmgp_dados_form['fto2'] = ""; 
      $this->fto2_limpa = ""; 
      $this->fto2_salva = ""; 
      $this->nmgp_dados_form['fto3'] = ""; 
      $this->fto3_limpa = ""; 
      $this->fto3_salva = ""; 
      $this->nmgp_dados_form['fto4'] = ""; 
      $this->fto4_limpa = ""; 
      $this->fto4_salva = ""; 
      $this->nmgp_dados_form['fto5'] = ""; 
      $this->fto5_limpa = ""; 
      $this->fto5_salva = ""; 
      $this->nmgp_dados_form['fto6'] = ""; 
      $this->fto6_limpa = ""; 
      $this->fto6_salva = ""; 
      $this->nmgp_dados_form['prmtro_oprcion'] = ""; 
      $this->prmtro_oprcion_limpa = ""; 
      $this->prmtro_oprcion_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id_actvo = null === $this->id_actvo ? null : substr($this->Db->qstr($this->id_actvo), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->id_actvo)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->id_actvo) == "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total']))
      { 
          $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_activos_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total'] = $qt_geral_reg_form_activos_mob;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->id_actvo))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "ID_ACTVO < $this->id_actvo "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "ID_ACTVO < $this->id_actvo "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "ID_ACTVO < $this->id_actvo "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "ID_ACTVO < $this->id_actvo "; 
              }
              else  
              {
                  $Key_Where = "ID_ACTVO < $this->id_actvo "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_activos_mob = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] > $qt_geral_reg_form_activos_mob)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] = $qt_geral_reg_form_activos_mob; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] = $qt_geral_reg_form_activos_mob; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total'] + 1; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT ID_ACTVO, NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, CNFBLDAD, ID_NIT_PRVDOR, str_replace (convert(char(10),FCHA_CMPRA,102), '.', '-') + ' ' + convert(char(8),FCHA_CMPRA,20), str_replace (convert(char(10),FCHA_ARRNQUE,102), '.', '-') + ' ' + convert(char(8),FCHA_ARRNQUE,20), str_replace (convert(char(10),FCHA_FIN_GRNTIA,102), '.', '-') + ' ' + convert(char(8),FCHA_FIN_GRNTIA,20), VLOR_CMPRA1, ID_MNDA_CMPRA1, VLOR_CMPRA2, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, VLOR_ACTUAL, str_replace (convert(char(10),FCHA_LCTRA,102), '.', '-') + ' ' + convert(char(8),FCHA_LCTRA,20), VLOR_ESTNDAR, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, str_replace (convert(char(10),FCHA_RGSTRO,102), '.', '-') + ' ' + convert(char(8),FCHA_RGSTRO,20), ID_USRIO, str_replace (convert(char(10),FCHA_ACTLZCION,102), '.', '-') + ' ' + convert(char(8),FCHA_ACTLZCION,20), ID_USRIO_ACTLZCION from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT ID_ACTVO, NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, CNFBLDAD, ID_NIT_PRVDOR, convert(char(23),FCHA_CMPRA,121), convert(char(23),FCHA_ARRNQUE,121), convert(char(23),FCHA_FIN_GRNTIA,121), VLOR_CMPRA1, ID_MNDA_CMPRA1, VLOR_CMPRA2, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, VLOR_ACTUAL, convert(char(23),FCHA_LCTRA,121), VLOR_ESTNDAR, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, convert(char(23),FCHA_RGSTRO,121), ID_USRIO, convert(char(23),FCHA_ACTLZCION,121), ID_USRIO_ACTLZCION from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT ID_ACTVO, NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, CNFBLDAD, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, VLOR_CMPRA1, ID_MNDA_CMPRA1, VLOR_CMPRA2, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, VLOR_ACTUAL, FCHA_LCTRA, VLOR_ESTNDAR, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT ID_ACTVO, NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, CNFBLDAD, ID_NIT_PRVDOR, EXTEND(FCHA_CMPRA, YEAR TO DAY), EXTEND(FCHA_ARRNQUE, YEAR TO DAY), EXTEND(FCHA_FIN_GRNTIA, YEAR TO DAY), VLOR_CMPRA1, ID_MNDA_CMPRA1, VLOR_CMPRA2, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, VLOR_ACTUAL, EXTEND(FCHA_LCTRA, YEAR TO DAY), VLOR_ESTNDAR, ID_TPO_MDCION, LOTOFILE(FTO1, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_FTO1', 'client'), LOTOFILE(FTO2, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_FTO2', 'client'), LOTOFILE(FTO3, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_FTO3', 'client'), LOTOFILE(FTO4, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_FTO4', 'client'), LOTOFILE(FTO5, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_FTO5', 'client'), LOTOFILE(FTO6, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_FTO6', 'client'), LOTOFILE(PRMTRO_OPRCION, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_PRMTRO_OPRCION', 'client'), NMBRE_ARCHVO_PO, TMNO_PO, EXTEND(FCHA_RGSTRO, YEAR TO DAY), ID_USRIO, EXTEND(FCHA_ACTLZCION, YEAR TO FRACTION), ID_USRIO_ACTLZCION from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT ID_ACTVO, NMBRE, CDGO, RFRNCIA, SRIAL, NMRO_ACTVO, ALIAS, CDGO_QR, CDGO_BRRAS, CDGO_RFID, CMPSTO, ID_ESTDO, ID_CLSE, ID_TPO, ID_MRCA, MDLO, ID_FBRCNTE, CNFBLDAD, ID_NIT_PRVDOR, FCHA_CMPRA, FCHA_ARRNQUE, FCHA_FIN_GRNTIA, VLOR_CMPRA1, ID_MNDA_CMPRA1, VLOR_CMPRA2, ID_MNDA_CMPRA2, ID_AREA, ID_CNTRO_CSTO, ID_UBCCION, ID_NIT_RSPNSBLE, ID_CNTDOR, VLOR_ACTUAL, FCHA_LCTRA, VLOR_ESTNDAR, ID_TPO_MDCION, FTO1, FTO2, FTO3, FTO4, FTO5, FTO6, PRMTRO_OPRCION, NMBRE_ARCHVO_PO, TMNO_PO, FCHA_RGSTRO, ID_USRIO, FCHA_ACTLZCION, ID_USRIO_ACTLZCION from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "ID_ACTVO = $this->id_actvo"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "ID_ACTVO = $this->id_actvo"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "ID_ACTVO = $this->id_actvo"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "ID_ACTVO = $this->id_actvo"; 
              }  
              else  
              {
                  $aWhere[] = "ID_ACTVO = $this->id_actvo"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "ID_ACTVO";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start']) ;  
              } 
          } 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->id_actvo = $rs->fields[0] ; 
              $this->nmgp_dados_select['id_actvo'] = $this->id_actvo;
              $this->nmbre = $rs->fields[1] ; 
              $this->nmgp_dados_select['nmbre'] = $this->nmbre;
              $this->cdgo = $rs->fields[2] ; 
              $this->nmgp_dados_select['cdgo'] = $this->cdgo;
              $this->rfrncia = $rs->fields[3] ; 
              $this->nmgp_dados_select['rfrncia'] = $this->rfrncia;
              $this->srial = $rs->fields[4] ; 
              $this->nmgp_dados_select['srial'] = $this->srial;
              $this->nmro_actvo = $rs->fields[5] ; 
              $this->nmgp_dados_select['nmro_actvo'] = $this->nmro_actvo;
              $this->alias = $rs->fields[6] ; 
              $this->nmgp_dados_select['alias'] = $this->alias;
              $this->cdgo_qr = $rs->fields[7] ; 
              $this->nmgp_dados_select['cdgo_qr'] = $this->cdgo_qr;
              $this->cdgo_brras = $rs->fields[8] ; 
              $this->nmgp_dados_select['cdgo_brras'] = $this->cdgo_brras;
              $this->cdgo_rfid = $rs->fields[9] ; 
              $this->nmgp_dados_select['cdgo_rfid'] = $this->cdgo_rfid;
              $this->cmpsto = $rs->fields[10] ; 
              $this->nmgp_dados_select['cmpsto'] = $this->cmpsto;
              $this->id_estdo = $rs->fields[11] ; 
              $this->nmgp_dados_select['id_estdo'] = $this->id_estdo;
              $this->id_clse = $rs->fields[12] ; 
              $this->nmgp_dados_select['id_clse'] = $this->id_clse;
              $this->id_tpo = $rs->fields[13] ; 
              $this->nmgp_dados_select['id_tpo'] = $this->id_tpo;
              $this->id_mrca = $rs->fields[14] ; 
              $this->nmgp_dados_select['id_mrca'] = $this->id_mrca;
              $this->mdlo = $rs->fields[15] ; 
              $this->nmgp_dados_select['mdlo'] = $this->mdlo;
              $this->id_fbrcnte = $rs->fields[16] ; 
              $this->nmgp_dados_select['id_fbrcnte'] = $this->id_fbrcnte;
              $this->cnfbldad = $rs->fields[17] ; 
              $this->nmgp_dados_select['cnfbldad'] = $this->cnfbldad;
              $this->id_nit_prvdor = $rs->fields[18] ; 
              $this->nmgp_dados_select['id_nit_prvdor'] = $this->id_nit_prvdor;
              $this->fcha_cmpra = $rs->fields[19] ; 
              $this->nmgp_dados_select['fcha_cmpra'] = $this->fcha_cmpra;
              $this->fcha_arrnque = $rs->fields[20] ; 
              $this->nmgp_dados_select['fcha_arrnque'] = $this->fcha_arrnque;
              $this->fcha_fin_grntia = $rs->fields[21] ; 
              $this->nmgp_dados_select['fcha_fin_grntia'] = $this->fcha_fin_grntia;
              $this->vlor_cmpra1 = $rs->fields[22] ; 
              $this->nmgp_dados_select['vlor_cmpra1'] = $this->vlor_cmpra1;
              $this->id_mnda_cmpra1 = $rs->fields[23] ; 
              $this->nmgp_dados_select['id_mnda_cmpra1'] = $this->id_mnda_cmpra1;
              $this->vlor_cmpra2 = $rs->fields[24] ; 
              $this->nmgp_dados_select['vlor_cmpra2'] = $this->vlor_cmpra2;
              $this->id_mnda_cmpra2 = $rs->fields[25] ; 
              $this->nmgp_dados_select['id_mnda_cmpra2'] = $this->id_mnda_cmpra2;
              $this->id_area = $rs->fields[26] ; 
              $this->nmgp_dados_select['id_area'] = $this->id_area;
              $this->id_cntro_csto = $rs->fields[27] ; 
              $this->nmgp_dados_select['id_cntro_csto'] = $this->id_cntro_csto;
              $this->id_ubccion = $rs->fields[28] ; 
              $this->nmgp_dados_select['id_ubccion'] = $this->id_ubccion;
              $this->id_nit_rspnsble = $rs->fields[29] ; 
              $this->nmgp_dados_select['id_nit_rspnsble'] = $this->id_nit_rspnsble;
              $this->id_cntdor = $rs->fields[30] ; 
              $this->nmgp_dados_select['id_cntdor'] = $this->id_cntdor;
              $this->vlor_actual = $rs->fields[31] ; 
              $this->nmgp_dados_select['vlor_actual'] = $this->vlor_actual;
              $this->fcha_lctra = $rs->fields[32] ; 
              $this->nmgp_dados_select['fcha_lctra'] = $this->fcha_lctra;
              $this->vlor_estndar = $rs->fields[33] ; 
              $this->nmgp_dados_select['vlor_estndar'] = $this->vlor_estndar;
              $this->id_tpo_mdcion = $rs->fields[34] ; 
              $this->nmgp_dados_select['id_tpo_mdcion'] = $this->id_tpo_mdcion;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->fto1 = $this->Db->BlobDecode($rs->fields[35]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->fto1 = $this->Db->BlobDecode($rs->fields[35]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[35]) && !empty($rs->fields[35]) && is_file($rs->fields[35])) 
                  { 
                     $this->fto1 = file_get_contents($rs->fields[35]);
                  }else 
                  { 
                     $this->fto1 = ''; 
                  } 
              } 
              else
              { 
                  $this->fto1 = $rs->fields[35] ; 
              } 
              $this->nmgp_dados_select['fto1'] = $this->fto1;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->fto2 = $this->Db->BlobDecode($rs->fields[36]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->fto2 = $this->Db->BlobDecode($rs->fields[36]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[36]) && !empty($rs->fields[36]) && is_file($rs->fields[36])) 
                  { 
                     $this->fto2 = file_get_contents($rs->fields[36]);
                  }else 
                  { 
                     $this->fto2 = ''; 
                  } 
              } 
              else
              { 
                  $this->fto2 = $rs->fields[36] ; 
              } 
              $this->nmgp_dados_select['fto2'] = $this->fto2;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->fto3 = $this->Db->BlobDecode($rs->fields[37]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->fto3 = $this->Db->BlobDecode($rs->fields[37]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[37]) && !empty($rs->fields[37]) && is_file($rs->fields[37])) 
                  { 
                     $this->fto3 = file_get_contents($rs->fields[37]);
                  }else 
                  { 
                     $this->fto3 = ''; 
                  } 
              } 
              else
              { 
                  $this->fto3 = $rs->fields[37] ; 
              } 
              $this->nmgp_dados_select['fto3'] = $this->fto3;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->fto4 = $this->Db->BlobDecode($rs->fields[38]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->fto4 = $this->Db->BlobDecode($rs->fields[38]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[38]) && !empty($rs->fields[38]) && is_file($rs->fields[38])) 
                  { 
                     $this->fto4 = file_get_contents($rs->fields[38]);
                  }else 
                  { 
                     $this->fto4 = ''; 
                  } 
              } 
              else
              { 
                  $this->fto4 = $rs->fields[38] ; 
              } 
              $this->nmgp_dados_select['fto4'] = $this->fto4;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->fto5 = $this->Db->BlobDecode($rs->fields[39]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->fto5 = $this->Db->BlobDecode($rs->fields[39]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[39]) && !empty($rs->fields[39]) && is_file($rs->fields[39])) 
                  { 
                     $this->fto5 = file_get_contents($rs->fields[39]);
                  }else 
                  { 
                     $this->fto5 = ''; 
                  } 
              } 
              else
              { 
                  $this->fto5 = $rs->fields[39] ; 
              } 
              $this->nmgp_dados_select['fto5'] = $this->fto5;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->fto6 = $this->Db->BlobDecode($rs->fields[40]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->fto6 = $this->Db->BlobDecode($rs->fields[40]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[40]) && !empty($rs->fields[40]) && is_file($rs->fields[40])) 
                  { 
                     $this->fto6 = file_get_contents($rs->fields[40]);
                  }else 
                  { 
                     $this->fto6 = ''; 
                  } 
              } 
              else
              { 
                  $this->fto6 = $rs->fields[40] ; 
              } 
              $this->nmgp_dados_select['fto6'] = $this->fto6;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->prmtro_oprcion = $this->Db->BlobDecode($rs->fields[41]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->prmtro_oprcion = $this->Db->BlobDecode($rs->fields[41]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[41]) && !empty($rs->fields[41]) && is_file($rs->fields[41])) 
                  { 
                     $this->prmtro_oprcion = file_get_contents($rs->fields[41]);
                  }else 
                  { 
                     $this->prmtro_oprcion = ''; 
                  } 
              } 
              else
              { 
                  $this->prmtro_oprcion = $rs->fields[41] ; 
              } 
              $this->nmgp_dados_select['prmtro_oprcion'] = $this->prmtro_oprcion;
              $this->nmbre_archvo_po = $rs->fields[42] ; 
              $this->nmgp_dados_select['nmbre_archvo_po'] = $this->nmbre_archvo_po;
              $this->tmno_po = $rs->fields[43] ; 
              $this->nmgp_dados_select['tmno_po'] = $this->tmno_po;
              $this->fcha_rgstro = $rs->fields[44] ; 
              $this->nmgp_dados_select['fcha_rgstro'] = $this->fcha_rgstro;
              $this->id_usrio = $rs->fields[45] ; 
              $this->nmgp_dados_select['id_usrio'] = $this->id_usrio;
              $this->fcha_actlzcion = $rs->fields[46] ; 
              if (substr($this->fcha_actlzcion, 10, 1) == "-") 
              { 
                 $this->fcha_actlzcion = substr($this->fcha_actlzcion, 0, 10) . " " . substr($this->fcha_actlzcion, 11);
              } 
              if (substr($this->fcha_actlzcion, 13, 1) == ".") 
              { 
                 $this->fcha_actlzcion = substr($this->fcha_actlzcion, 0, 13) . ":" . substr($this->fcha_actlzcion, 14, 2) . ":" . substr($this->fcha_actlzcion, 17);
              } 
              $this->nmgp_dados_select['fcha_actlzcion'] = $this->fcha_actlzcion;
              $this->id_usrio_actlzcion = $rs->fields[47] ; 
              $this->nmgp_dados_select['id_usrio_actlzcion'] = $this->id_usrio_actlzcion;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->id_actvo = (string)$this->id_actvo; 
              $this->id_estdo = (string)$this->id_estdo; 
              $this->id_clse = (string)$this->id_clse; 
              $this->id_tpo = (string)$this->id_tpo; 
              $this->id_mrca = (string)$this->id_mrca; 
              $this->id_fbrcnte = (string)$this->id_fbrcnte; 
              $this->cnfbldad = (string)$this->cnfbldad; 
              $this->id_nit_prvdor = (string)$this->id_nit_prvdor; 
              $this->vlor_cmpra1 = (string)$this->vlor_cmpra1; 
              $this->vlor_cmpra2 = (string)$this->vlor_cmpra2; 
              $this->id_area = (string)$this->id_area; 
              $this->id_cntro_csto = (string)$this->id_cntro_csto; 
              $this->id_ubccion = (string)$this->id_ubccion; 
              $this->id_nit_rspnsble = (string)$this->id_nit_rspnsble; 
              $this->id_cntdor = (string)$this->id_cntdor; 
              $this->vlor_actual = (string)$this->vlor_actual; 
              $this->vlor_estndar = (string)$this->vlor_estndar; 
              $this->id_tpo_mdcion = (string)$this->id_tpo_mdcion; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['parms'] = "id_actvo?#?$this->id_actvo?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sub_dir'][0]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sub_dir'][1]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sub_dir'][2]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sub_dir'][3]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sub_dir'][4]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sub_dir'][5]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sub_dir'][6]  = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['reg_start'] < $qt_geral_reg_form_activos_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->id_actvo = "";  
              $this->nmgp_dados_form["id_actvo"] = $this->id_actvo;
              $this->nmbre = "";  
              $this->nmgp_dados_form["nmbre"] = $this->nmbre;
              $this->cdgo = "";  
              $this->nmgp_dados_form["cdgo"] = $this->cdgo;
              $this->rfrncia = "";  
              $this->nmgp_dados_form["rfrncia"] = $this->rfrncia;
              $this->srial = "";  
              $this->nmgp_dados_form["srial"] = $this->srial;
              $this->nmro_actvo = "";  
              $this->nmgp_dados_form["nmro_actvo"] = $this->nmro_actvo;
              $this->alias = "";  
              $this->nmgp_dados_form["alias"] = $this->alias;
              $this->cdgo_qr = "";  
              $this->nmgp_dados_form["cdgo_qr"] = $this->cdgo_qr;
              $this->cdgo_brras = "";  
              $this->nmgp_dados_form["cdgo_brras"] = $this->cdgo_brras;
              $this->cdgo_rfid = "";  
              $this->nmgp_dados_form["cdgo_rfid"] = $this->cdgo_rfid;
              $this->cmpsto = "";  
              $this->nmgp_dados_form["cmpsto"] = $this->cmpsto;
              $this->id_estdo = "";  
              $this->nmgp_dados_form["id_estdo"] = $this->id_estdo;
              $this->id_clse = "";  
              $this->nmgp_dados_form["id_clse"] = $this->id_clse;
              $this->id_tpo = "";  
              $this->nmgp_dados_form["id_tpo"] = $this->id_tpo;
              $this->id_mrca = "";  
              $this->nmgp_dados_form["id_mrca"] = $this->id_mrca;
              $this->mdlo = "";  
              $this->nmgp_dados_form["mdlo"] = $this->mdlo;
              $this->id_fbrcnte = "";  
              $this->nmgp_dados_form["id_fbrcnte"] = $this->id_fbrcnte;
              $this->cnfbldad = "";  
              $this->nmgp_dados_form["cnfbldad"] = $this->cnfbldad;
              $this->id_nit_prvdor = "";  
              $this->nmgp_dados_form["id_nit_prvdor"] = $this->id_nit_prvdor;
              $this->fcha_cmpra = "";  
              $this->fcha_cmpra_hora = "" ;  
              $this->nmgp_dados_form["fcha_cmpra"] = $this->fcha_cmpra;
              $this->fcha_arrnque = "";  
              $this->fcha_arrnque_hora = "" ;  
              $this->nmgp_dados_form["fcha_arrnque"] = $this->fcha_arrnque;
              $this->fcha_fin_grntia = "";  
              $this->fcha_fin_grntia_hora = "" ;  
              $this->nmgp_dados_form["fcha_fin_grntia"] = $this->fcha_fin_grntia;
              $this->vlor_cmpra1 = "";  
              $this->nmgp_dados_form["vlor_cmpra1"] = $this->vlor_cmpra1;
              $this->id_mnda_cmpra1 = "";  
              $this->nmgp_dados_form["id_mnda_cmpra1"] = $this->id_mnda_cmpra1;
              $this->vlor_cmpra2 = "";  
              $this->nmgp_dados_form["vlor_cmpra2"] = $this->vlor_cmpra2;
              $this->id_mnda_cmpra2 = "";  
              $this->nmgp_dados_form["id_mnda_cmpra2"] = $this->id_mnda_cmpra2;
              $this->id_area = "";  
              $this->nmgp_dados_form["id_area"] = $this->id_area;
              $this->id_cntro_csto = "";  
              $this->nmgp_dados_form["id_cntro_csto"] = $this->id_cntro_csto;
              $this->id_ubccion = "";  
              $this->nmgp_dados_form["id_ubccion"] = $this->id_ubccion;
              $this->id_nit_rspnsble = "";  
              $this->nmgp_dados_form["id_nit_rspnsble"] = $this->id_nit_rspnsble;
              $this->id_cntdor = "";  
              $this->nmgp_dados_form["id_cntdor"] = $this->id_cntdor;
              $this->vlor_actual = "";  
              $this->nmgp_dados_form["vlor_actual"] = $this->vlor_actual;
              $this->fcha_lctra = "";  
              $this->fcha_lctra_hora = "" ;  
              $this->nmgp_dados_form["fcha_lctra"] = $this->fcha_lctra;
              $this->vlor_estndar = "";  
              $this->nmgp_dados_form["vlor_estndar"] = $this->vlor_estndar;
              $this->id_tpo_mdcion = "";  
              $this->nmgp_dados_form["id_tpo_mdcion"] = $this->id_tpo_mdcion;
              $this->fto1 = "";  
              $this->fto1_ul_name = "" ;  
              $this->fto1_ul_type = "" ;  
              $this->nmgp_dados_form["fto1"] = $this->fto1;
              $this->fto2 = "";  
              $this->fto2_ul_name = "" ;  
              $this->fto2_ul_type = "" ;  
              $this->nmgp_dados_form["fto2"] = $this->fto2;
              $this->fto3 = "";  
              $this->fto3_ul_name = "" ;  
              $this->fto3_ul_type = "" ;  
              $this->nmgp_dados_form["fto3"] = $this->fto3;
              $this->fto4 = "";  
              $this->fto4_ul_name = "" ;  
              $this->fto4_ul_type = "" ;  
              $this->nmgp_dados_form["fto4"] = $this->fto4;
              $this->fto5 = "";  
              $this->fto5_ul_name = "" ;  
              $this->fto5_ul_type = "" ;  
              $this->nmgp_dados_form["fto5"] = $this->fto5;
              $this->fto6 = "";  
              $this->fto6_ul_name = "" ;  
              $this->fto6_ul_type = "" ;  
              $this->nmgp_dados_form["fto6"] = $this->fto6;
              $this->prmtro_oprcion = "";  
              $this->prmtro_oprcion_ul_name = "" ;  
              $this->prmtro_oprcion_ul_type = "" ;  
              $this->nmgp_dados_form["prmtro_oprcion"] = $this->prmtro_oprcion;
              $this->nmbre_archvo_po = "";  
              $this->nmgp_dados_form["nmbre_archvo_po"] = $this->nmbre_archvo_po;
              $this->tmno_po = "";  
              $this->nmgp_dados_form["tmno_po"] = $this->tmno_po;
              $this->fcha_rgstro = "";  
              $this->fcha_rgstro_hora = "" ;  
              $this->nmgp_dados_form["fcha_rgstro"] = $this->fcha_rgstro;
              $this->id_usrio = "";  
              $this->nmgp_dados_form["id_usrio"] = $this->id_usrio;
              $this->fcha_actlzcion = "";  
              $this->fcha_actlzcion_hora = "" ;  
              $this->nmgp_dados_form["fcha_actlzcion"] = $this->fcha_actlzcion;
              $this->id_usrio_actlzcion = "";  
              $this->nmgp_dados_form["id_usrio_actlzcion"] = $this->id_usrio_actlzcion;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
              if ($this->nmgp_clone != "S")
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto1']);  
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto2']);  
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto3']);  
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto4']);  
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto5']);  
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto6']);  
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['prmtro_oprcion']);  
              }
              if ($this->nmgp_clone == "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_select']))
              {
                  $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_select'];
                  $this->nmbre = $this->nmgp_dados_select['nmbre'];  
                  $this->cdgo = $this->nmgp_dados_select['cdgo'];  
                  $this->rfrncia = $this->nmgp_dados_select['rfrncia'];  
                  $this->srial = $this->nmgp_dados_select['srial'];  
                  $this->nmro_actvo = $this->nmgp_dados_select['nmro_actvo'];  
                  $this->alias = $this->nmgp_dados_select['alias'];  
                  $this->cdgo_qr = $this->nmgp_dados_select['cdgo_qr'];  
                  $this->cdgo_brras = $this->nmgp_dados_select['cdgo_brras'];  
                  $this->cdgo_rfid = $this->nmgp_dados_select['cdgo_rfid'];  
                  $this->cmpsto = $this->nmgp_dados_select['cmpsto'];  
                  $this->id_estdo = $this->nmgp_dados_select['id_estdo'];  
                  $this->id_clse = $this->nmgp_dados_select['id_clse'];  
                  $this->id_tpo = $this->nmgp_dados_select['id_tpo'];  
                  $this->id_mrca = $this->nmgp_dados_select['id_mrca'];  
                  $this->mdlo = $this->nmgp_dados_select['mdlo'];  
                  $this->id_fbrcnte = $this->nmgp_dados_select['id_fbrcnte'];  
                  $this->cnfbldad = $this->nmgp_dados_select['cnfbldad'];  
                  $this->id_nit_prvdor = $this->nmgp_dados_select['id_nit_prvdor'];  
                  $this->fcha_cmpra = $this->nmgp_dados_select['fcha_cmpra'];  
                  $this->fcha_arrnque = $this->nmgp_dados_select['fcha_arrnque'];  
                  $this->fcha_fin_grntia = $this->nmgp_dados_select['fcha_fin_grntia'];  
                  $this->vlor_cmpra1 = $this->nmgp_dados_select['vlor_cmpra1'];  
                  $this->id_mnda_cmpra1 = $this->nmgp_dados_select['id_mnda_cmpra1'];  
                  $this->vlor_cmpra2 = $this->nmgp_dados_select['vlor_cmpra2'];  
                  $this->id_mnda_cmpra2 = $this->nmgp_dados_select['id_mnda_cmpra2'];  
                  $this->id_area = $this->nmgp_dados_select['id_area'];  
                  $this->id_cntro_csto = $this->nmgp_dados_select['id_cntro_csto'];  
                  $this->id_ubccion = $this->nmgp_dados_select['id_ubccion'];  
                  $this->id_nit_rspnsble = $this->nmgp_dados_select['id_nit_rspnsble'];  
                  $this->id_cntdor = $this->nmgp_dados_select['id_cntdor'];  
                  $this->vlor_actual = $this->nmgp_dados_select['vlor_actual'];  
                  $this->fcha_lctra = $this->nmgp_dados_select['fcha_lctra'];  
                  $this->vlor_estndar = $this->nmgp_dados_select['vlor_estndar'];  
                  $this->id_tpo_mdcion = $this->nmgp_dados_select['id_tpo_mdcion'];  
                  $this->fto1 = $this->nmgp_dados_select['fto1'];  
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto1'] = $this->nmgp_dados_select['fto1'];  
                  $this->fto2 = $this->nmgp_dados_select['fto2'];  
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto2'] = $this->nmgp_dados_select['fto2'];  
                  $this->fto3 = $this->nmgp_dados_select['fto3'];  
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto3'] = $this->nmgp_dados_select['fto3'];  
                  $this->fto4 = $this->nmgp_dados_select['fto4'];  
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto4'] = $this->nmgp_dados_select['fto4'];  
                  $this->fto5 = $this->nmgp_dados_select['fto5'];  
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto5'] = $this->nmgp_dados_select['fto5'];  
                  $this->fto6 = $this->nmgp_dados_select['fto6'];  
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['fto6'] = $this->nmgp_dados_select['fto6'];  
                  $this->prmtro_oprcion = $this->nmgp_dados_select['prmtro_oprcion'];  
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dados_clone']['prmtro_oprcion'] = $this->nmgp_dados_select['prmtro_oprcion'];  
                  $this->nmbre_archvo_po = $this->nmgp_dados_select['nmbre_archvo_po'];  
                  $this->tmno_po = $this->nmgp_dados_select['tmno_po'];  
                  $this->fcha_rgstro = $this->nmgp_dados_select['fcha_rgstro'];  
                  $this->id_usrio = $this->nmgp_dados_select['id_usrio'];  
                  $this->fcha_actlzcion = $this->nmgp_dados_select['fcha_actlzcion'];  
                  $this->id_usrio_actlzcion = $this->nmgp_dados_select['id_usrio_actlzcion'];  
              }
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
  }
// 
//-- 
   function nm_db_retorna($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO < $this->id_actvo" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->id_actvo = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "inicio";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_avanca($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " where ID_ACTVO > $this->id_actvo" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->id_actvo = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "final";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_inicio($str_where_param = '') 
   {   
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela; 
     $rs = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela);
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if ($rs->fields[0] == 0) 
     { 
         $this->nmgp_opcao = "novo"; 
         $this->nm_flag_saida_novo = "S"; 
         $rs->Close(); 
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return;
     }
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter']))
         { 
             $rs->Close();  
             return ; 
         } 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->id_actvo = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_final($str_where_param = '') 
   { 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(ID_ACTVO) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->id_actvo = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_activos_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
   if ($this->nmgp_opcao == "novo")
   { 
       $out_fto1 = "";  
   } 
   else 
   { 
       $out_fto1 = $this->fto1;  
   } 
   if ($this->fto1 != "" && $this->fto1 != "none")   
   { 
       $out_fto1 = $this->Ini->path_imag_temp . "/sc_fto1_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_fto1 = fopen($this->Ini->root . $out_fto1, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto1, 0, 12));
           if (substr($this->fto1, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto1 = nm_conv_img_access($this->fto1);
           } 
       } 
       if (substr($this->fto1, 0, 4) == "*nm*") 
       { 
           $this->fto1 = substr($this->fto1, 4) ; 
           $this->fto1 = base64_decode($this->fto1) ; 
       } 
       $img_pos_bm = strpos($this->fto1, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto1 = substr($this->fto1, $img_pos_bm) ; 
       } 
       fwrite($arq_fto1, $this->fto1) ;  
       fclose($arq_fto1) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto1, true);
       $this->nmgp_return_img['fto1'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto1'][1] = $sc_obj_img->getWidth();
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_fto1;
           $out_fto1 = str_replace($this->Ini->path_imag_temp . "/", "", $out_fto1);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fto1;
       if (isset($temp_out_fto1))
       {
           $out_fto1 = $temp_out_fto1;
       }
   }
   if ($this->nmgp_opcao == "novo")
   { 
       $out_fto2 = "";  
   } 
   else 
   { 
       $out_fto2 = $this->fto2;  
   } 
   if ($this->fto2 != "" && $this->fto2 != "none")   
   { 
       $out_fto2 = $this->Ini->path_imag_temp . "/sc_fto2_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_fto2 = fopen($this->Ini->root . $out_fto2, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto2, 0, 12));
           if (substr($this->fto2, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto2 = nm_conv_img_access($this->fto2);
           } 
       } 
       if (substr($this->fto2, 0, 4) == "*nm*") 
       { 
           $this->fto2 = substr($this->fto2, 4) ; 
           $this->fto2 = base64_decode($this->fto2) ; 
       } 
       $img_pos_bm = strpos($this->fto2, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto2 = substr($this->fto2, $img_pos_bm) ; 
       } 
       fwrite($arq_fto2, $this->fto2) ;  
       fclose($arq_fto2) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto2, true);
       $this->nmgp_return_img['fto2'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto2'][1] = $sc_obj_img->getWidth();
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_fto2;
           $out_fto2 = str_replace($this->Ini->path_imag_temp . "/", "", $out_fto2);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fto2;
       if (isset($temp_out_fto2))
       {
           $out_fto2 = $temp_out_fto2;
       }
   }
   if ($this->nmgp_opcao == "novo")
   { 
       $out_fto3 = "";  
   } 
   else 
   { 
       $out_fto3 = $this->fto3;  
   } 
   if ($this->fto3 != "" && $this->fto3 != "none")   
   { 
       $out_fto3 = $this->Ini->path_imag_temp . "/sc_fto3_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_fto3 = fopen($this->Ini->root . $out_fto3, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto3, 0, 12));
           if (substr($this->fto3, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto3 = nm_conv_img_access($this->fto3);
           } 
       } 
       if (substr($this->fto3, 0, 4) == "*nm*") 
       { 
           $this->fto3 = substr($this->fto3, 4) ; 
           $this->fto3 = base64_decode($this->fto3) ; 
       } 
       $img_pos_bm = strpos($this->fto3, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto3 = substr($this->fto3, $img_pos_bm) ; 
       } 
       fwrite($arq_fto3, $this->fto3) ;  
       fclose($arq_fto3) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto3, true);
       $this->nmgp_return_img['fto3'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto3'][1] = $sc_obj_img->getWidth();
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_fto3;
           $out_fto3 = str_replace($this->Ini->path_imag_temp . "/", "", $out_fto3);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fto3;
       if (isset($temp_out_fto3))
       {
           $out_fto3 = $temp_out_fto3;
       }
   }
   if ($this->nmgp_opcao == "novo")
   { 
       $out_fto4 = "";  
   } 
   else 
   { 
       $out_fto4 = $this->fto4;  
   } 
   if ($this->fto4 != "" && $this->fto4 != "none")   
   { 
       $out_fto4 = $this->Ini->path_imag_temp . "/sc_fto4_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_fto4 = fopen($this->Ini->root . $out_fto4, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto4, 0, 12));
           if (substr($this->fto4, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto4 = nm_conv_img_access($this->fto4);
           } 
       } 
       if (substr($this->fto4, 0, 4) == "*nm*") 
       { 
           $this->fto4 = substr($this->fto4, 4) ; 
           $this->fto4 = base64_decode($this->fto4) ; 
       } 
       $img_pos_bm = strpos($this->fto4, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto4 = substr($this->fto4, $img_pos_bm) ; 
       } 
       fwrite($arq_fto4, $this->fto4) ;  
       fclose($arq_fto4) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto4, true);
       $this->nmgp_return_img['fto4'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto4'][1] = $sc_obj_img->getWidth();
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_fto4;
           $out_fto4 = str_replace($this->Ini->path_imag_temp . "/", "", $out_fto4);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fto4;
       if (isset($temp_out_fto4))
       {
           $out_fto4 = $temp_out_fto4;
       }
   }
   if ($this->nmgp_opcao == "novo")
   { 
       $out_fto5 = "";  
   } 
   else 
   { 
       $out_fto5 = $this->fto5;  
   } 
   if ($this->fto5 != "" && $this->fto5 != "none")   
   { 
       $out_fto5 = $this->Ini->path_imag_temp . "/sc_fto5_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_fto5 = fopen($this->Ini->root . $out_fto5, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto5, 0, 12));
           if (substr($this->fto5, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto5 = nm_conv_img_access($this->fto5);
           } 
       } 
       if (substr($this->fto5, 0, 4) == "*nm*") 
       { 
           $this->fto5 = substr($this->fto5, 4) ; 
           $this->fto5 = base64_decode($this->fto5) ; 
       } 
       $img_pos_bm = strpos($this->fto5, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto5 = substr($this->fto5, $img_pos_bm) ; 
       } 
       fwrite($arq_fto5, $this->fto5) ;  
       fclose($arq_fto5) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto5, true);
       $this->nmgp_return_img['fto5'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto5'][1] = $sc_obj_img->getWidth();
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_fto5;
           $out_fto5 = str_replace($this->Ini->path_imag_temp . "/", "", $out_fto5);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fto5;
       if (isset($temp_out_fto5))
       {
           $out_fto5 = $temp_out_fto5;
       }
   }
   if ($this->nmgp_opcao == "novo")
   { 
       $out_fto6 = "";  
   } 
   else 
   { 
       $out_fto6 = $this->fto6;  
   } 
   if ($this->fto6 != "" && $this->fto6 != "none")   
   { 
       $out_fto6 = $this->Ini->path_imag_temp . "/sc_fto6_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_fto6 = fopen($this->Ini->root . $out_fto6, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->fto6, 0, 12));
           if (substr($this->fto6, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->fto6 = nm_conv_img_access($this->fto6);
           } 
       } 
       if (substr($this->fto6, 0, 4) == "*nm*") 
       { 
           $this->fto6 = substr($this->fto6, 4) ; 
           $this->fto6 = base64_decode($this->fto6) ; 
       } 
       $img_pos_bm = strpos($this->fto6, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->fto6 = substr($this->fto6, $img_pos_bm) ; 
       } 
       fwrite($arq_fto6, $this->fto6) ;  
       fclose($arq_fto6) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fto6, true);
       $this->nmgp_return_img['fto6'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['fto6'][1] = $sc_obj_img->getWidth();
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_fto6;
           $out_fto6 = str_replace($this->Ini->path_imag_temp . "/", "", $out_fto6);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fto6;
       if (isset($temp_out_fto6))
       {
           $out_fto6 = $temp_out_fto6;
       }
   }
   if ($this->nmgp_opcao == "novo")
   { 
       $out_prmtro_oprcion = "";  
   } 
   else 
   { 
       $out_prmtro_oprcion = $this->prmtro_oprcion;  
   } 
   if ($this->prmtro_oprcion != "" && $this->prmtro_oprcion != "none")   
   { 
       $out_prmtro_oprcion = $this->Ini->path_imag_temp . "/sc_prmtro_oprcion_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_prmtro_oprcion = fopen($this->Ini->root . $out_prmtro_oprcion, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->prmtro_oprcion, 0, 12));
           if (substr($this->prmtro_oprcion, 0, 4) != "*nm*" && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->prmtro_oprcion = nm_conv_img_access($this->prmtro_oprcion);
           } 
       } 
       if (substr($this->prmtro_oprcion, 0, 4) == "*nm*") 
       { 
           $this->prmtro_oprcion = substr($this->prmtro_oprcion, 4) ; 
           $this->prmtro_oprcion = base64_decode($this->prmtro_oprcion) ; 
       } 
       $img_pos_bm = strpos($this->prmtro_oprcion, "BM") ; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->prmtro_oprcion = substr($this->prmtro_oprcion, $img_pos_bm) ; 
       } 
       fwrite($arq_prmtro_oprcion, $this->prmtro_oprcion) ;  
       fclose($arq_prmtro_oprcion) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_prmtro_oprcion, true);
       $this->nmgp_return_img['prmtro_oprcion'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['prmtro_oprcion'][1] = $sc_obj_img->getWidth();
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_prmtro_oprcion;
           $out_prmtro_oprcion = str_replace($this->Ini->path_imag_temp . "/", "", $out_prmtro_oprcion);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_prmtro_oprcion;
       if (isset($temp_out_prmtro_oprcion))
       {
           $out_prmtro_oprcion = $temp_out_prmtro_oprcion;
       }
   }
        $this->initFormPages();
    include_once("form_activos_mob_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       $sImage = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalendario']['display'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalculadora']['display'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return '' == $sImage ? '' : $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile

   function jqueryFAFile($sModule)
   {
       $sFA = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
           {
               $sFA = $this->arr_buttons['bcalendario']['fontawesomeicon'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
           {
               $sFA = $this->arr_buttons['bcalculadora']['fontawesomeicon'];
           }
       }

       return '' == $sFA ? '' : "<span class='scButton_fontawesome " . $sFA . "'></span>";
   } // jqueryFAFile

   function jqueryButtonText($sModule)
   {
       $sClass = '';
       $sText  = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalendario']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalendario']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalendario']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i>";
                   }
               }
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalculadora']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalculadora']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalculadora']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> ";
                   }
               }
           }
       }

       return '' == $sText ? array('', '') : array($sText, $sClass);
   } // jqueryButtonText


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_cmpsto()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_cmpsto'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_estdo()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_estdo'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_clse()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_clse'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_tpo()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_mrca()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mrca'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_fbrcnte()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_fbrcnte'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_nit_prvdor()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_prvdor'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_mnda_cmpra1()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra1'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_mnda_cmpra2()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_mnda_cmpra2'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_area()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_area'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_ubccion()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_ubccion'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_nit_rspnsble()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_nit_rspnsble'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_cntdor()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_cntdor'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_tpo_mdcion()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_tpo_mdcion'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_id_usrio()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['Lookup_id_usrio'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function SC_fast_search($field, $arg_search, $data_search)
   {
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_activos_mob_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ID_ACTVO", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "NMBRE", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "CDGO", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "RFRNCIA", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "SRIAL", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "NMRO_ACTVO", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ALIAS", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "CDGO_QR", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "CDGO_BRRAS", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "CDGO_RFID", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cmpsto($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "CMPSTO", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_estdo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_ESTDO", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_clse($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_CLSE", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_tpo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_TPO", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_mrca($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_MRCA", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "MDLO", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_fbrcnte($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_FBRCNTE", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "CNFBLDAD", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_nit_prvdor($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_NIT_PRVDOR", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "VLOR_CMPRA1", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_mnda_cmpra1($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_MNDA_CMPRA1", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "VLOR_CMPRA2", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_mnda_cmpra2($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_MNDA_CMPRA2", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_area($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_AREA", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ID_CNTRO_CSTO", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_ubccion($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_UBCCION", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_nit_rspnsble($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_NIT_RSPNSBLE", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_cntdor($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_CNTDOR", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "VLOR_ACTUAL", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "VLOR_ESTNDAR", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_tpo_mdcion($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_TPO_MDCION", $arg_search, $data_lookup);
          }
      }
      {
          $this->SC_monta_condicao($comando, "FTO1", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "FTO2", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "FTO3", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "FTO4", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "FTO5", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "FTO6", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "PRMTRO_OPRCION", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "NMBRE_ARCHVO_PO", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "TMNO_PO", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_usrio($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "ID_USRIO", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ID_USRIO_ACTLZCION", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_activos_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['total'] = $qt_geral_reg_form_activos_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_activos_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_activos_mob_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "id_actvo";$nm_numeric[] = "id_estdo";$nm_numeric[] = "id_clse";$nm_numeric[] = "id_tpo";$nm_numeric[] = "id_mrca";$nm_numeric[] = "id_fbrcnte";$nm_numeric[] = "cnfbldad";$nm_numeric[] = "id_nit_prvdor";$nm_numeric[] = "vlor_cmpra1";$nm_numeric[] = "vlor_cmpra2";$nm_numeric[] = "id_area";$nm_numeric[] = "id_cntro_csto";$nm_numeric[] = "id_ubccion";$nm_numeric[] = "id_nit_rspnsble";$nm_numeric[] = "id_cntdor";$nm_numeric[] = "vlor_actual";$nm_numeric[] = "vlor_estndar";$nm_numeric[] = "id_tpo_mdcion";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas['fcha_cmpra'] = "date";$Nm_datas['fcha_arrnque'] = "date";$Nm_datas['fcha_fin_grntia'] = "date";$Nm_datas['fcha_lctra'] = "date";$Nm_datas['fcha_rgstro'] = "date";$Nm_datas['fcha_actlzcion'] = "datetime";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_ini_lower . $nm_aspas . $Cmp . $nm_aspas1 . $nm_fim_lower;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $cond_tst = strtoupper($condicao);
         if ($cond_tst == "II" || $cond_tst == "QP" || $cond_tst == "NP")
         {
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
             {
                 $op_like      = " ilike ";
                 $nm_ini_lower = "";
                 $nm_fim_lower = "";
             }
             else
             {
                 $op_like = " like ";
             }
         }
         switch ($cond_tst)
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . $op_like . $nm_ini_lower . "'" . $campo . "%'" . $nm_fim_lower;
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . $op_like . $nm_ini_lower . "'%" . $campo . "%'" . $nm_fim_lower;
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " not" . $op_like . $nm_ini_lower . "'%" . $campo . "%'" . $nm_fim_lower;
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
         }
   }
   function SC_lookup_cmpsto($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT ESTDO, ESTDO FROM s_tpo_dcsion WHERE (ESTDO LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_estdo($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_ESTDO, ID_ESTDO FROM actvos_estdos WHERE (CAST (ID_ESTDO AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_ESTDO, ID_ESTDO FROM actvos_estdos WHERE (ID_ESTDO LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_clse($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_CLSE, ID_CLSE FROM actvos_clse WHERE (CAST (ID_CLSE AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_CLSE, ID_CLSE FROM actvos_clse WHERE (ID_CLSE LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_tpo($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_TPO, ID_TPO FROM actvos_tpos WHERE (CAST (ID_TPO AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_TPO, ID_TPO FROM actvos_tpos WHERE (ID_TPO LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_mrca($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_MRCA, ID_MRCA FROM actvos_mrcas WHERE (CAST (ID_MRCA AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_MRCA, ID_MRCA FROM actvos_mrcas WHERE (ID_MRCA LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_fbrcnte($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_FBRCNTE, ID_FBRCNTE FROM actvos_fbrcnte WHERE (CAST (ID_FBRCNTE AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_FBRCNTE, ID_FBRCNTE FROM actvos_fbrcnte WHERE (ID_FBRCNTE LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_nit_prvdor($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_NIT, ID_NIT FROM s_nits WHERE (CAST (ID_NIT AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_NIT, ID_NIT FROM s_nits WHERE (ID_NIT LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_mnda_cmpra1($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT ID_MNDA, ID_MNDA FROM s_mndas WHERE (ID_MNDA LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_mnda_cmpra2($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT ID_MNDA, ID_MNDA FROM s_mndas WHERE (ID_MNDA LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_area($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_AREA, ID_AREA FROM s_areas WHERE (CAST (ID_AREA AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_AREA, ID_AREA FROM s_areas WHERE (ID_AREA LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_ubccion($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_UBCCION, ID_UBCCION FROM s_ubccnes WHERE (CAST (ID_UBCCION AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_UBCCION, ID_UBCCION FROM s_ubccnes WHERE (ID_UBCCION LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_nit_rspnsble($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_NIT, ID_NIT FROM s_nits WHERE (CAST (ID_NIT AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_NIT, ID_NIT FROM s_nits WHERE (ID_NIT LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_cntdor($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_CNTDOR, ID_CNTDOR FROM actvos_cntdres WHERE (CAST (ID_CNTDOR AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_CNTDOR, ID_CNTDOR FROM actvos_cntdres WHERE (ID_CNTDOR LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_tpo_mdcion($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ID_TPO_MDCION, ID_TPO_MDCION FROM s_tpo_mdcnes WHERE (CAST (ID_TPO_MDCION AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT ID_TPO_MDCION, ID_TPO_MDCION FROM s_tpo_mdcnes WHERE (ID_TPO_MDCION LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_usrio($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT login, login FROM sec_users WHERE (login LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_activos_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_activos_mob_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_activos_mob_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_activos_mob']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>
