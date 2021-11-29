<?php
include_once "./conexao.php";
?>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/theme.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
      function postaNome(){
          var getnome = document.getElementById('nome').value;
            $.ajax({
                url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
                method:"POST", //METODO UTILIZADO
                dataType:'html',//TIPO DE DADO QUE SERA RETORNADO PELA PAGINA REQUISITADA
                data:{getnome}, //DADOS UTILIZADOS PARA ENVIO
                success: function(data){//FUNCAO QUE LEVARA A MSG DE RETORNO
                  //$("#resultcerto1").html(data);
                }
            });
              document.getElementById("coletaNome").style.display = 'none';
              document.getElementById("question-1").style.display = 'block';
        };  
  </script>


  <script>
    function postaq1(){      
        var q1 = $('input[name="q1"]:checked').val();
        if(q1 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto1').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado1').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q1}, //DADOS UTILIZADOS PARA ENVIO
            
          }); 
          document.getElementById("proxquestao1").style.display = "block";
          document.getElementById('submit1').style.display = 'none';
      };
      function proxq1(){ 
        document.getElementById("question-1").style.display = 'none';
        document.getElementById("question-2").style.display = 'block';
      };
  </script>



  <script>
    function postaq2(){      
        var q2 = $('input[name="q2"]:checked').val();
        if(q2 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto2').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado2').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q2}, //DADOS UTILIZADOS PARA ENVIO
              
          }); 
        document.getElementById("proxquestao2").style.display = "block";
        document.getElementById('submit2').style.display = 'none';
      };
      function proxq2(){ 
        document.getElementById("question-2").style.display = 'none';
        document.getElementById("question-3").style.display = 'block';
      };
  </script>


  <script>
     function postaq3(){      
        var q3 = $('input[name="q3"]:checked').val();
        if(q3 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto3').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado3').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q3}, //DADOS UTILIZADOS PARA ENVIO
              
          }); 
        document.getElementById("proxquestao3").style.display = "block";
        document.getElementById('submit3').style.display = 'none';
      };
      function proxq3(){ 
        document.getElementById("question-3").style.display = 'none';
        document.getElementById("question-4").style.display = 'block';
      };
  </script>

  
  <script>
     function postaq4(){      
        var q4 = $('input[name="q4"]:checked').val();
        if(q4 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto4').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado4').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q4}, //DADOS UTILIZADOS PARA ENVIO
           
          }); 
        document.getElementById("proxquestao4").style.display = "block";
        document.getElementById('submit4').style.display = 'none';
      };
      function proxq4(){ 
        document.getElementById("question-4").style.display = 'none';
        document.getElementById("question-5").style.display = 'block';
      }
  </script>
  <script>
     function postaq5(){      
        var q5 = $('input[name="q5"]:checked').val();
        if(q5 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto5').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado5').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q5}, //DADOS UTILIZADOS PARA ENVIO
              
          }); 
        document.getElementById("proxquestao5").style.display = "block";
        document.getElementById('submit5').style.display = 'none';
      };
      function proxq5(){ 
        document.getElementById("question-5").style.display = 'none';
        document.getElementById("question-6").style.display = 'block';
      }
  </script>

  <script>
     function postaq6(){      
        var q6 = $('input[name="q6"]:checked').val();
        if(q6 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto6').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado6').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q6}, //DADOS UTILIZADOS PARA ENVIO
              
          }); 
        document.getElementById("proxquestao6").style.display = "block";
        document.getElementById('submit6').style.display = 'none';
      };
      function proxq6(){ 
        document.getElementById("question-6").style.display = 'none';
        document.getElementById("question-7").style.display = 'block';
      }
  </script>

  <script>
     function postaq7(){      
        var q7 = $('input[name="q7"]:checked').val();
        if(q7 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto7').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado7').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q7}, //DADOS UTILIZADOS PARA ENVIO
              
          }); 
        document.getElementById("proxquestao7").style.display = "block";
        document.getElementById('submit7').style.display = 'none';
      };
      function proxq7(){ 
        document.getElementById("question-7").style.display = 'none';
        document.getElementById("question-8").style.display = 'block';
      }
  </script>


  <script>
     function postaq8(){      
        var q8 = $('input[name="q8"]:checked').val();
        if(q8 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto8').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado8').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q8}, //DADOS UTILIZADOS PARA ENVIO
    
          }); 
        document.getElementById("proxquestao8").style.display = "block";
        document.getElementById('submit8').style.display = 'none';
      };
      function proxq8(){ 
        document.getElementById("question-8").style.display = 'none';
        document.getElementById("question-9").style.display = 'block';
      }
  </script>


  <script>
     function postaq9(){      
        var q9 = $('input[name="q9"]:checked').val();
        if(q9 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto9').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado9').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q9}, //DADOS UTILIZADOS PARA ENVIO
          }); 
        document.getElementById("proxquestao9").style.display = "block";
        document.getElementById('submit9').style.display = 'none';
      };
      function proxq9(){ 
        document.getElementById("question-9").style.display = 'none';
        document.getElementById("question-10").style.display = 'block';
      }
  </script>
  <script>
     function postaq10(){      
        var q10 = $('input[name="q10"]:checked').val();
        if(q10 == 'c'){
          var x ="PARABÉNS, VOCÊ ACERTOU!!!!";
        document.getElementById('resultcerto10').innerHTML=x;
        }else{
        var y ='PARABENS PELA RESPOSTA, CONTINUE TENTANDO!!!!!';
        document.getElementById('resulterrado10').innerHTML=y;
        }
          $.ajax({
              url:"conexao.php", //PAGINA QUE ESTA SENDO SOLICITADA
              method:"POST", //METODO UTILIZADO
              data:{q10}, //DADOS UTILIZADOS PARA ENVIO
             
          }); 
        document.getElementById("proxquestao10").style.display = "block";
        document.getElementById('submit10').style.display = 'none';
      };
      function proxq10(){ 
        document.getElementById("question-10").style.display = 'none';
        document.getElementById("question-11").style.display = 'block';
      }
  </script>
</head>



<body>  
  <div class="container">	
    <div class="row">
  	  <div class="two-thirds column">
        <div id="progress_bar"></div>
  	  	<div class="questions_box">
          
          <div id="coletaNome">
            <form name="cad-usuario" method="POST" target="frames">
              <h2>PRECISAMOS SABER QUAL SEU NOME</h2>
              <h3>INSIRA SEU NOME: </h3>
              <input id='nome' type="text" name="nome" placeholder="DIGITE AQUI SEU NOME"><br>
              <input type="submit" value='ENVIAR' class='button' name="submitNome" id="submitNome" onclick="postaNome();"/>
            </form> 
          </div>

            <div id="question-1"style="display:none">
              <form name="quest1" method="POST" target="frames">
              <h2>Questão 1</h2>
              <img src="imagens/1.png" alt="some text" width="300" ><br>
  	  			  <h3>Marque a ordem que completa os desenhos.</h3>
  	  			  <div>
              <input type="radio" name="q1" value='e'> 
              <img src="imagens/1.1.png" alt="some text" width="100" height=100>
              <img src="imagens/1.2.png" alt="some text" width="100" height=100>
              <img src="imagens/1.3.png" alt="some text" width="100" height=100>
  				    </div>
              <div>
              <input type="radio" name="q1" value='e'> 
              <img src="imagens/1.3.png" alt="some text" width="100" height=100>
              <img src="imagens/1.1.png" alt="some text" width="100" height=100>
              <img src="imagens/1.2.png" alt="some text" width="100" height=100>
              </div>
  				    <div>
              <input type="radio" name="q1" value='e'> 
              <img src="imagens/1.2.png" alt="some text" width="100" height=100>
              <img src="imagens/1.1.png" alt="some text" width="100" height=100>
              <img src="imagens/1.3.png" alt="some text" width="100" height=100> 
              </div>
              <div>
              <input type="radio" name="q1" value='c'> 
              <img src="imagens/1.2.png" alt="some text" width="100" height=100>
              <img src="imagens/1.3.png" alt="some text" width="100" height=100>
              <img src="imagens/1.1.png" alt="some text" width="100" height=100> 
  				    </div>
              
              <p id="resultcerto1" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado1" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao1" class="button" onclick="proxq1();"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit1" id="submit1" onclick="postaq1();"/>
              <div class="clearfix"></div>
              </form>
  			    </div>



  			    <div id="question-2"style="display:none">
  				    <h2>Questão 2</h2>
              <video width="320" height="240" controls>
              <source src="video/felicidade.mp4" type="video/mp4"><br>
            </video>

  				  <h3>Assinale qual opção representa o sentimento que o video mostra. </h3>
  	  		    <input type="radio" name="q2" value="e"> Triste<br>
  				    <input type="radio" name="q2" value="e"> Assustada<br>
  				    <input type="radio" name="q2" value="e"> Vergonha<br>
  				    <input type="radio" name="q2" value="c"> Feliz<br>
              <input type="radio" name="q2" value="e"> Zangada<br>
              <p id="resultcerto2" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado2" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao2" class="button"onclick="proxq2();"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit2" id="submit2" onclick="postaq2();"/>
              <div class="clearfix"></div>
  			    </div>
  			
  			    <div id="question-3"style="display:none">	
  				    <h2>Questão 3</h2>
              <img src="imagens/pato.jpg" alt="some text" width="300" ><br>
  				    <h3>Que nome damos para essa figura?</h3>
  	  		    <input type="radio" name="q3" value="e"> GATO<br>
  				    <input type="radio" name="q3" value="c"> PATO<br>
  				    <input type="radio" name="q3" value="e"> SAPO<br>
              <input type="radio" name="q3" value="e"> RATO<br>
              <input type="radio" name="q3" value="e"> MATO<br>
              <p id="resultcerto3" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado3" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao3" class="button"onclick="proxq3();"> PRÓXIMA QUESTÃO</div>
  				    <input type="submit" value='RESPONDER' class='button' name="submit3" id="submit3" onclick="postaq3();"/>
              <div class="clearfix"></div>
  			    </div>

            <div id="question-4"style="display:none">
              <h2>Questão 4</h2>
              <h3>O aplicativo tem a fução de escolher a cor da tela, qual dessas imagens faz essa função?</h3>
              <input type="radio" name="q4" value="e"> <img src="imagens/quest.jpg" alt="some text" width="120" height=50><br><br>
              <input type="radio" name="q4" value="e"> <img src="imagens/video.jpg" alt="some text" width="120" height=50><br><br>
              <input type="radio" name="q4" value="c"> <img src="imagens/escuro.jpg" alt="some text" width="120" height=50><br><br>
              <input type="radio" name="q4" value="e"> <img src="imagens/textoaud.jpg" alt="some text" width="120" height=50><br><br>
              <p id="resultcerto4" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado4" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao4" class="button"onclick="proxq4();"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit4" id="submit4" onclick="postaq4();"/>
              <div class="clearfix"></div>
            </div>

            <div id="question-5"style="display:none">
              <h2>Questão 5</h2>
              <img src="imagens/conta.jpg" alt="some text" width="300" ><br>

              <h3>Qual o valor total da soma de gatos e porcos?</h3>
              <input type="radio" name="q5" value="e"> 11<br>
              <input type="radio" name="q5" value="e"> 10<br>
              <input type="radio" name="q5" value="e"> 12<br>
              <input type="radio" name="q5" value="c"> 13<br>
              <input type="radio" name="q5" value="e"> 15<br>
              <p id="resultcerto5" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado5" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao5" class="button"onclick="proxq5();"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit5" id="submit5" onclick="postaq5();"/>
              <div class="clearfix"></div>
            </div>
            

            <div id="question-6" style="display:none">
  				    <h2>Questão 6</h2>
              <video width="500"  controls>
              <source src="video/a arvore sem folhas.mp4" type="video/mp4"><br>
              </video>

  				    <h3>Na História, quem colocou corações na árvore?</h3>
  	  		    <input type="radio" name="q6" value="e"> Nuvem<br>
  				    <input type="radio" name="q6" value="e"> Sol<br>
  				    <input type="radio" name="q6" value="e"> Vento<br>
  				    <input type="radio" name="q6" value="e"> Adultos<br>
              <input type="radio" name="q6" value="c"> Crianças<br>
              <p id="resultcerto6" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado6" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao6" class="button"onclick="proxq6();"style="display:none"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit6" id="submit6" onclick="postaq6();"/>
              <div class="clearfix"></div>
  		      </div>
                               
            <div id="question-7" style="display:none">
  				    <h2>Questão 7</h2> <br>
              <img src="imagens/ursinho/quebra.jpg" alt="some text" width="300" ><br>

  				    <h3>No quebra cabeça acima, qual peça está faltando?</h3>
              <input type="radio" name="q1" value='0'> <img src="imagens/ursinho/1.jpg" alt="some text" width="120" height=100><br><br>
  				    <input type="radio" name="q1" value='0'> <img src="imagens/ursinho/2.jpg" alt="some text" width="120" height=100><br><br>
  				    <input type="radio" name="q1" value='1'> <img src="imagens/ursinho/3.jpg" alt="some text" width="120" height=100><br><br>
  				    <input type="radio" name="q1" value='0'> <img src="imagens/ursinho/4.jpg" alt="some text" width="120" height=100><br><br>
  				    <input type="radio" name="q1" value='0'> <img src="imagens/ursinho/5.jpg" alt="some text" width="120" height=100><br><br>
              <p id="resultcerto7" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado7" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao7" class="button"onclick="proxq7();" style="display:none"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit7" id="submit7" onclick="postaq7();"/>
              <div class="clearfix"></div>
              </form>
  			    </div>


            <div id="question-8" style="display:none">
              <h2>Questão 8</h2>
              <img src="imagens/forca.jpg" alt="some text" width="400" ><br>

              <h3>Qual letra da palavra está faltando?</h3>
              <input type="radio" name="q8" value="e"> A<br>
              <input type="radio" name="q8" value="e"> U<br>
              <input type="radio" name="q8" value="e"> E<br>
              <input type="radio" name="q8" value="c"> I<br>
              <input type="radio" name="q8" value="e"> O<br>
              <p id="resultcerto8" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado8" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao8" class="button"onclick="proxq8();"style="display:none"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit8" id="submit8" onclick="postaq8();"/>
              <div class="clearfix"></div>
            </div>


            <div id="question-9" style="display:none">
              <h2>Questão 9</h2>
              <h3>Carol quer comer pizza, mas só encontrou hambúrguer. Qual é a reação de Carol?</h3>
  	  			  <input type="radio" name="q1" value='0'> <img src="imagens/confusa.jpg" alt="some text" width="120" height=100><br><br>
  				    <input type="radio" name="q1" value='1'> <img src="imagens/alegre.jpg" alt="some text" width="120" height=100><br><br>
  				    <input type="radio" name="q1" value='1'> <img src="imagens/triste.jpg" alt="some text" width="120" height=100><br><br>
  				    <input type="radio" name="q1" value='0'> <img src="imagens/nervosa.jpg" alt="some text" width="120" height=100><br><br>
  				    <input type="radio" name="q1" value='0'> <img src="imagens/dormindo.jpg" alt="some text" width="120" height=100><br><br>
              <p id="resultcerto9" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado9" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao9" class="button"onclick="proxq9();"style="display:none"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit9" id="submit9" onclick="postaq9();"/>
              <div class="clearfix"></div>
            </div>


            <div id="question-10" style="display:none">
              <h2>Questão 10</h2>
              <!-- Oratlas começa -->
              <img src="imagens/ouro.jpg" alt="some text" width="400" ><br>

              <h3>Qual a quantidade de quadradinhos na figura acima?</h3>
              <input type="radio" name="q10" value="c"> 23<br>
              <input type="radio" name="q10" value="e"> 20<br>
              <input type="radio" name="q10" value="e"> 19<br>
              <input type="radio" name="q10" value="e"> 24<br>
              <input type="radio" name="q10" value="e"> 25<br>
              <p id="resultcerto10" style="color: seashell; background-color: green;"></p>
              <p id="resulterrado10" style="color: seashell; background-color: red;"></p>
              <div id="proxquestao10" class="button"onclick="proxq10();"style="display:none"> PRÓXIMA QUESTÃO</div>
              <input type="submit" value='RESPONDER' class='button' name="submit10" id="submit10" onclick="postaq10();"/>
              <div class="clearfix"></div>
            </div>


            <div id="question-11" style="display:none"> 
              <h2>PARABENS!!!!!<br> VOCÊ RESPONDEU TODAS AS QUESTÕES!!</h2>
            </div>	

            <iframe name="frames" style="display:none"></iframe>
  	    </div>
      </div>
    </div>
  </div>
    <script src="jquery/jquery.js"></script>          
</body>
</html>
