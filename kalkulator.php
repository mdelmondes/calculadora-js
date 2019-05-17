<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Kalkulator</title>
  </head>
  	<style>
		html, body{
			height: 100%;
			margin: 0;
			padding: 0 0;
		} 
		.container-fluid{
			height: 100%;
			display: table;
			width: 100%;
			padding-right: 0;
			padding-left: 0;
		}   
		.row-fluid{
			height: 100%;
			display: table-cell;
			vertical-align: middle;
			width: 100%;
		}
		.centering{
			float: none;
			margin: 0 auto;
		}		
	</style>
  
  <body>
    <script type="text/javascript">

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

</script>
    <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="offset3 span6 centering">
          <form name="frm_calc" acton>
    			<center>
    				<table width="300" cellpadding="20" cellspacing="5" style="color:#FFF; background-color:#FFF; border:2pt solid#000">
              <tr>
              <td colspan="5"align="Center" bgColor="#DCDCDC"><Font Face="Verdana" Size="10" Color="#000000"><b>Kalkulator Pro</b></font></td>
              </tr>
              <tr>
              <td colspan="3" align="center" border:2pt solid#FFF><input type="text" name="txt_01" value="0" style="color:#000000; background-color:#DCDCDC;border:2pt solid#000; height: 60px; width: 250px;"></td>
              <td><center><input type="reset" class="btn btn-danger" value="AC" onclick="" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-success" value="=" name="btn_igual" onclick="Operation('=')" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              </tr>
              <tr>
              <td><center><input type="button" class="btn btn-primary" value="7" name="btn_7" onclick="NumPressed(7)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-primary" value="8" name="btn_8" onclick="NumPressed(8)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-primary" value="9" name="btn_9" onclick="NumPressed(9)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-secondary" value="+" name="btn_soma" onclick="Operation('+')" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-secondary" value="-" name="btn_subt" onclick="Operation('-')" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              </tr>
              <tr>
              <td><center><input type="button" class="btn btn-primary" value="4" name="btn_4" onclick="NumPressed(4)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-primary" value="5" name="btn_5" onclick="NumPressed(5)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-primary" value="6" name="btn_6" onclick="NumPressed(6)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-secondary" value="*" name="btn_mult" onclick="Operation('*')" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-secondary" value="/" name="btn_divi" onclick="Operation('/')" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              </tr>
              <tr>
              <td><center><input type="button" class="btn btn-primary" value="1" name="btn_1" onclick="NumPressed(1)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-primary" value="2" name="btn_2" onclick="NumPressed(2)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-primary" value="3" name="btn_3" onclick="NumPressed(3)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-primary" value="0" name="btn_0" onclick="NumPressed(0)" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              <td><center><input type="button" class="btn btn-secondary" value="." name="btn_pont" onclick="Ponto()" style="color:#FFF; cursor:hand; padding:20px; border:0"></center></td>
              </tr>
            </table>
      			</center>
          </form>
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>