

<section class="section">
<div class="container">
<!-- course list -->
<div class="row justify-content-center">


<div class="row">
<div class="col-md-4">
<h1 class="text-center force-form-title">Dados Sócio-econômicos</h1>
</div>
<div class="row subforms-standard-margin">
<div class="col-md-8 col-md-offset-5">
<form role="form" class="new_user" id="new_user" enctype="multipart/form-data" action="/management/users" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="Bq14ud6/eosSj9FRcj3lcsb8A8hsbNJjyVm0UTGyu3z150EPjnvoDpby+u++/uTSdxy9lbkKxYqeWcaBKHoPlQ==" />

<div class="form-group"><label class="control-label required" for="user_name">Nome</label><input class="form-control" type="text" name="user[name]" id="user_name" /></div>
<div class="form-group"><label class="control-label required" for="user_email">E-mail</label><input class="form-control" type="text" name="user[email]" id="user_email" /></div>
<div class="form-group"><label class="control-label" for="user_email_confirmation">Confirmação do e-mail</label><input class="form-control" type="text" name="user[email_confirmation]" id="user_email_confirmation" /></div>


<div style="position: relative">
<div class="form-group"><label class="control-label required" for="user_password">Senha</label><input maxlength="72" class="form-control" size="72" type="password" name="user[password]" id="user_password" /></div>
<i id="togglePassword" class="fa fa-eye fa-eye-slash" style="position: absolute; right: 12px; top: 34px; cursor: pointer"></i>
</div>

<div style="position: relative">
<div class="form-group"><label class="control-label required" for="user_password_confirmation">Confirmação da senha</label><input maxlength="72" class="form-control" size="72" type="password" name="user[password_confirmation]" id="user_password_confirmation" /></div>
<i id="togglePasswordConfirmation" class="fa fa-eye fa-eye-slash" style="position: absolute; right: 12px; top: 34px; cursor: pointer"></i>
</div>



<div class="form-group">
<label class="control-label" for="user_parental_control">Controle parental</label>
<div><div class="checkbox"><label for="user_parental_control_enabled"><input name="user[parental_control_enabled]" type="hidden" value="0" /><input type="checkbox" value="1" name="user[parental_control_enabled]" id="user_parental_control_enabled" /> </label></div></div>
<div style="margin-left: 25px; margin-top: -28px">Restringir conteúdo com senha a partir da classificação indicativa</div>
<div style="display: none" id="parental_control_controls">
<div style="width: 97%">
  <div class="form-group"><label class="sr-only control-label" for="user_parental_control">Controle parental</label><input data-provider="slider" data-slider-ticks="[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21]" data-slider-ticks-labels="[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21]" data-slider-min="1" data-slider-max="21" data-slider-step="1" data-slider-value="21" data-slider-tooltip="hide" style="width: 100%;" class="form-control" type="text" value="0" name="user[parental_control]" id="user_parental_control" /></div>
</div>
<div style="position: relative">
  <div class="form-group"><label class="control-label" for="user_parental_control_pin">PIN</label><input maxlength="4" class="form-control" size="4" type="password" name="user[parental_control_pin]" id="user_parental_control_pin" /></div>
    <i id="togglePin" class="fa fa-eye fa-eye-slash" style="position: absolute; right: 12px; top: 34px; cursor: pointer"></i>
</div>
</div>
</div>

<div class="form-group"><label class="control-label" for="user_cpf">CPF(Este será seu login)</label><input class="form-control" type="text" name="user[cpf]" id="user_cpf" /></div>

<label for="user_Idioma">Idioma</label>
<div class="form-group">
<div style="margin-left: 25px">English</div>
<div style="margin-top: -22px; margin-left: -5px"><div class="radio"><label for="user_language_en"><input type="radio" value="en" name="user[language]" id="user_language_en" /> </label></div></div>
<div style="margin-left: 25px">Português</div>
<div style="margin-top: -22px; margin-left: -5px"><div class="radio"><label for="user_language_pt"><input type="radio" value="pt" checked="checked" name="user[language]" id="user_language_pt" /> </label></div></div>
<div style="margin-left: 25px">Español</div>
<div style="margin-top: -22px; margin-left: -5px"><div class="radio"><label for="user_language_es"><input type="radio" value="es" name="user[language]" id="user_language_es" /> </label></div></div>
<div style="margin-left: 25px">Deutsch</div>
<div style="margin-top: -22px; margin-left: -5px"><div class="radio"><label for="user_language_de"><input type="radio" value="de" name="user[language]" id="user_language_de" /> </label></div></div>
</div>
<div class="form-group"><label class="control-label" for="user_user_file">Imagem do Perfil (800x800)</label><input label="Imagem do Perfil (800x800)" class="btn btn-default" style="width: 100%;" data-toggle="tooltip" data-placement="top" title="Tipos permitidos: jpg, jpeg, png" type="file" name="user[user_file]" id="user_user_file" /></div>


<div class="form-group"><label class="control-label required" for="user_properties_attributes_0_value">RG</label><input class="form-control" type="text" name="user[properties_attributes][0][value]" id="user_properties_attributes_0_value" /></div>
<input type="hidden" value="38" name="user[properties_attributes][0][custom_field_id]" id="user_properties_attributes_0_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_1_value">Sexo</label>
<div class="radio"><label for="user_properties_attributes_1_value_1"><input type="radio" value="1" name="user[properties_attributes][1][value]" id="user_properties_attributes_1_value_1" /> Feminino</label></div>
<div class="radio"><label for="user_properties_attributes_1_value_2"><input type="radio" value="2" name="user[properties_attributes][1][value]" id="user_properties_attributes_1_value_2" /> Masculino</label></div>
<div class="radio"><label for="user_properties_attributes_1_value_3"><input type="radio" value="3" name="user[properties_attributes][1][value]" id="user_properties_attributes_1_value_3" /> Prefiro não dizer</label></div>
</div><input type="hidden" value="59" name="user[properties_attributes][1][custom_field_id]" id="user_properties_attributes_1_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_2_value">Data de Nascimento</label>
<div class="input-group">
<input class="form-control" id="date_picker_40" name="date_picker_40" type="text">
<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
</div>
<input id="hidden_40_value" type="hidden" name="user[properties_attributes][2][value]" />
</div><input type="hidden" value="40" name="user[properties_attributes][2][custom_field_id]" id="user_properties_attributes_2_custom_field_id" />

<script type="text/javascript">
var defaultDate = "";


value_datepicker = $(date_picker_40).parent();
value_datepicker.datetimepicker({pickTime: false, defaultDate: defaultDate, format: 'DD/MM/YYYY', language: 'pt'});

value_datepicker.on("dp.change", function(e) {
var formatted_value = $("input[id^='date_picker_40']").val();
if (isDate(formatted_value,  "dd/MM/yyyy")) {
var value = formatDate(new Date(getDateFromFormat(formatted_value, "dd/MM/yyyy")), "yyyy-MM-dd");
$("#hidden_40_value").val(value);
} else {
$("#hidden_40_value").val("");
}
});

$("input[id^='date_picker_40']").on("propertychange change keyup paste input", function() {
var formatted_value = $(this).val();
if (isDate(formatted_value,  "dd/MM/yyyy")) {
var value = formatDate(new Date(getDateFromFormat(formatted_value, "dd/MM/yyyy")), "yyyy-MM-dd");
$("#hidden_40_value").val(value);
} else {
$("#hidden_40_value").val("");
}
});
</script>


<div class="form-group"><label class="control-label required" for="user_properties_attributes_3_value">Nome da Mãe</label><input class="form-control" type="text" name="user[properties_attributes][3][value]" id="user_properties_attributes_3_value" /></div>
<input type="hidden" value="41" name="user[properties_attributes][3][custom_field_id]" id="user_properties_attributes_3_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_4_value">Telefone (com o DDD)</label><input class="form-control" type="text" name="user[properties_attributes][4][value]" id="user_properties_attributes_4_value" /></div>
<input type="hidden" value="39" name="user[properties_attributes][4][custom_field_id]" id="user_properties_attributes_4_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_5_value">CEP da sua Residência</label><input class="form-control" type="text" name="user[properties_attributes][5][value]" id="user_properties_attributes_5_value" /></div>
<input type="hidden" value="46" name="user[properties_attributes][5][custom_field_id]" id="user_properties_attributes_5_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_6_value">Endereço </label><input class="form-control" type="text" name="user[properties_attributes][6][value]" id="user_properties_attributes_6_value" /></div>
<input type="hidden" value="47" name="user[properties_attributes][6][custom_field_id]" id="user_properties_attributes_6_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_7_value">Bairro </label><input class="form-control" type="text" name="user[properties_attributes][7][value]" id="user_properties_attributes_7_value" /></div>
<input type="hidden" value="48" name="user[properties_attributes][7][custom_field_id]" id="user_properties_attributes_7_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_8_value">Qual seu nível de Escolaridade?</label><select class="form-control" name="user[properties_attributes][8][value]" id="user_properties_attributes_8_value"><option value=""></option>
<option value="1">Ensino Fundamental</option>
<option value="2">Ensino Fundamental Incompleto</option>
<option value="3">Ensino Médio</option>
<option value="4">Ensino Médio Incompleto</option>
<option value="5">Ensino Superior</option>
<option value="6">Ensino Superior Incompleto</option>
<option value="7">Pós Graduação</option>
<option value="8">Pós Graduação Incompleto</option></select></div>
<input type="hidden" value="37" name="user[properties_attributes][8][custom_field_id]" id="user_properties_attributes_8_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_9_value">Cidade</label><input class="form-control" type="text" name="user[properties_attributes][9][value]" id="user_properties_attributes_9_value" /></div>
<input type="hidden" value="49" name="user[properties_attributes][9][custom_field_id]" id="user_properties_attributes_9_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_10_value">Atualmente, você está empregado?</label><select class="form-control" name="user[properties_attributes][10][value]" id="user_properties_attributes_10_value"><option value=""></option>
<option value="1">Sim</option>
<option value="2">Não </option></select></div>
<input type="hidden" value="42" name="user[properties_attributes][10][custom_field_id]" id="user_properties_attributes_10_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_11_value">Estado</label><select class="form-control" name="user[properties_attributes][11][value]" id="user_properties_attributes_11_value"><option value=""></option>
<option value="1">Acre (AC)</option>
<option value="2">Alagoas (AL)</option>
<option value="3">Amapá (AP)</option>
<option value="4">Amazonas (AM)</option>
<option value="5">Bahia (BA)</option>
<option value="6">Ceará (CE)</option>
<option value="7">Distrito Federal (DF)</option>
<option value="8">Espírito Santo (ES)</option>
<option value="9">Goiás (GO)</option>
<option value="10">Maranhão (MA)</option>
<option value="11">Mato Grosso (MT)</option>
<option value="12">Mato Grosso do Sul (MS)</option>
<option value="13">Minas Gerais (MG)</option>
<option value="14">Pará (PA)</option>
<option value="15">Paraíba (PB)</option>
<option value="16">Paraná (PR)</option>
<option value="17">Pernambuco (PE)</option>
<option value="18">Piauí (PI)</option>
<option value="19">Rio de Janeiro (RJ)</option>
<option value="20">Rio Grande do Norte (RN)</option>
<option value="21">Rio Grande do Sul (RS)</option>
<option value="22">Rondônia (RO)</option>
<option value="23">Roraima (RR)</option>
<option value="24">Santa Catarina (SC)</option>
<option value="25">São Paulo (SP)</option>
<option value="26">Sergipe (SE)</option>
<option value="27">Tocantins (TO)</option></select></div>
<input type="hidden" value="50" name="user[properties_attributes][11][custom_field_id]" id="user_properties_attributes_11_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_12_value">Qual cargo você ocupa?</label><input class="form-control" type="text" name="user[properties_attributes][12][value]" id="user_properties_attributes_12_value" /></div>
<input type="hidden" value="44" name="user[properties_attributes][12][custom_field_id]" id="user_properties_attributes_12_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_13_value">Caso esteja empregado, qual o nome da empresa?</label><input class="form-control" type="text" name="user[properties_attributes][13][value]" id="user_properties_attributes_13_value" /></div>
<input type="hidden" value="43" name="user[properties_attributes][13][custom_field_id]" id="user_properties_attributes_13_custom_field_id" />


<div class="form-group"><label class="control-label required" for="user_properties_attributes_14_value">A empresa que você trabalha é de qual setor?</label><select class="form-control" name="user[properties_attributes][14][value]" id="user_properties_attributes_14_value"><option value=""></option>
<option value="1">Público</option>
<option value="2">Privado</option></select></div>
<input type="hidden" value="45" name="user[properties_attributes][14][custom_field_id]" id="user_properties_attributes_14_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_15_value">Como você terá acesso à internet para acessar os cursos?</label><select class="form-control" name="user[properties_attributes][15][value]" id="user_properties_attributes_15_value"><option value=""></option>
<option value="1">Pacote de dados do celular</option>
<option value="2">Possuo conexão de internet wi-fi em minha casa</option>
<option value="3">Utilizo wi-fi de outras pessoas</option>
<option value="4">Não possuo internet e não sei como vou acessar</option></select></div>
<input type="hidden" value="51" name="user[properties_attributes][15][custom_field_id]" id="user_properties_attributes_15_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_16_value">Qual o dispositivo que você irá utilizar para acessar o seu curso?</label><select class="form-control" name="user[properties_attributes][16][value]" id="user_properties_attributes_16_value"><option value=""></option>
<option value="1">Ainda não sei como irei fazer para assistir as video aulas</option>
<option value="2">Celular / smartphone (emprestado de outra pessoa)</option>
<option value="3">Computador (emprestado de outra pessoa) </option>
<option value="4">Seu celular / smartphone</option>
<option value="5">Seu computador</option>
<option value="6">Seu tablet</option>
<option value="7">Tablet (emprestado de outra pessoa)</option></select></div>
<input type="hidden" value="52" name="user[properties_attributes][16][custom_field_id]" id="user_properties_attributes_16_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_17_value">Você já fez algum curso na Escola do Legislativo?</label><select class="form-control" name="user[properties_attributes][17][value]" id="user_properties_attributes_17_value"><option value=""></option>
<option value="1">Não fiz nenhum curso da escola do legislativo</option>
<option value="2">Sim. Já fiz curso presencial e também curso on-line</option>
<option value="3">Sim. Somente curso on-line</option>
<option value="4">Sim. Somente curso presencial</option></select></div>
<input type="hidden" value="53" name="user[properties_attributes][17][custom_field_id]" id="user_properties_attributes_17_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_18_value">Quantas pessoas moram com você? (incluindo filhos, irmãos, parentes e amigos)</label><select class="form-control" name="user[properties_attributes][18][value]" id="user_properties_attributes_18_value"><option value=""></option>
<option value="1">Moro sozinho</option>
<option value="2">Uma a três</option>
<option value="3">Quatro a sete</option>
<option value="4">Oito a dez</option>
<option value="5">Mais de dez</option></select></div>
<input type="hidden" value="54" name="user[properties_attributes][18][custom_field_id]" id="user_properties_attributes_18_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_19_value">A casa onde você mora é?</label><select class="form-control" name="user[properties_attributes][19][value]" id="user_properties_attributes_19_value"><option value=""></option>
<option value="1">Alugada</option>
<option value="2">Cedida</option>
<option value="3">Própria</option></select></div>
<input type="hidden" value="55" name="user[properties_attributes][19][custom_field_id]" id="user_properties_attributes_19_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_20_value">Sua casa está localizada em?</label><select class="form-control" name="user[properties_attributes][20][value]" id="user_properties_attributes_20_value"><option value=""></option>
<option value="1">Zona Rural</option>
<option value="2">Zona Urbana</option></select></div>
<input type="hidden" value="56" name="user[properties_attributes][20][custom_field_id]" id="user_properties_attributes_20_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_21_value">Há quanto tempo você não participa de um curso de qualificação profissional?</label><select class="form-control" name="user[properties_attributes][21][value]" id="user_properties_attributes_21_value"><option value=""></option>
<option value="1">Há menos de 6 meses</option>
<option value="2">Entre 6 meses e 1 ano</option>
<option value="3">Entre 1 e 3 anos</option>
<option value="4">Entre 4 e 7 anos</option>
<option value="5">Mais de 7 anos</option></select></div>
<input type="hidden" value="57" name="user[properties_attributes][21][custom_field_id]" id="user_properties_attributes_21_custom_field_id" />




<div class="form-group"><label class="control-label required" for="user_properties_attributes_22_value">Em caso de curso presencial você conseguiria custear seu deslocamento para realizá-lo?</label><select class="form-control" name="user[properties_attributes][22][value]" id="user_properties_attributes_22_value"><option value=""></option>
<option value="1">Sim</option>
<option value="2">Não</option></select></div>
<input type="hidden" value="58" name="user[properties_attributes][22][custom_field_id]" id="user_properties_attributes_22_custom_field_id" />




<div class="checkbox">
<input id="checkbox_terms" type="checkbox">
<label for="checkbox_terms">Eu li e aceito os <a data-toggle="modal" data-target="#termsModal"> termos de serviço </a></label>
</div>
<div class="checkbox">
<input id="checkbox_privacy" type="checkbox">
<label for="checkbox_privacy">Eu li e aceito a <a data-toggle="modal" data-target="#privacyModal"> política de privacidade </a></label>
</div>

<div id="recaptcha_div"></div>

<a class="btn btn-default pull-right force-btn-cancel" style="margin-bottom: 20px" href="/">Cancelar</a>
<input type="submit" name="commit" value="Criar usuário" class="btn btn-primary pull-right disabled" id="button_submit" style="margin-bottom: 20px" data-disable-with="Criar usuário" />



</form>
</div>
</div>
</section>


