var Accum = 0;
var FlagNewNum = false;
var PendingOp = ""; 

//Abaixo estamos adcionando os valores de cada botão ao parametro Num
function NumPressed(Num) {
  if (FlagNewNum) {
    document.frm_calc.txt_01.value  = Num;
    FlagNewNum = false;
    }
  else {
    if (document.frm_calc.txt_01.value == "0")
      document.frm_calc.txt_01.value = Num;
    else
      document.frm_calc.txt_01.value += Num;
    }
}

//Valores de exibição quando apertado o botão igual
function Operation(Op) {
  if (document.frm_calc.txt_01.value == ""){
    alert("O Campo esta vázio digite um valor");
    document.frm_calc.txt_01.value ="0"; }
  else{
    if (FlagNewNum && PendingOp != "=");
    else  {
      FlagNewNum = true;
      if ( '+' == PendingOp )
        Accum += parseFloat(document.frm_calc.txt_01.value);
        else if ( '-' == PendingOp )
        Accum -= parseFloat(document.frm_calc.txt_01.value);
        else if ( '/' == PendingOp )
        Accum /= parseFloat(document.frm_calc.txt_01.value);
        else if ( '*' == PendingOp )
        Accum *= parseFloat(document.frm_calc.txt_01.value);
      else
        Accum = parseFloat(document.frm_calc.txt_01.value);
        document.frm_calc.txt_01.value = Accum;
        PendingOp = Op;
    }
    }
}

//Atribuindo o ponto( . ) aos valores numéricos
function Ponto() {
  var curtxt_01 = document.frm_calc.txt_01.value;
  if (FlagNewNum) {
    curtxt_01 = "0.";
    FlagNewNum = false;
    }
  else {
  if (curtxt_01.indexOf(".") == -1)
    curtxt_01 += ".";
    }
  document.frm_calc.txt_01.value = curtxt_01;
}