<!doctype html>
<html lang="en">
<head>

    <script src="assets/vendor/js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){

           $("#btload").click(function(){
             $.get('http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/dados_json.php', function (resultado) {
                 $('#conteudo').html("<li>"+resultado.campus+"</li>");
                 $('#conteudo').append("<li>"+resultado.endereco+"</li>");
                 $('#conteudo').append("<li>"+resultado.ies+"</li>");
                 $('#conteudo').append("<li>"+resultado.municipio+"</li>");
                 $('#conteudo').append("<li>"+resultado.uf+"</li>");
                 $('#conteudo').append("<li>"+resultado.cursos[0]+"</li>");
                 $('#conteudo').append("<li>"+resultado.cursos[1]+"</li>");
                 $('#conteudo').append("<li>"+resultado.cursos[2]+"</li>");


                 
                 
             });
           });

           $("#btGet").click(function (){

           $.get('http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/produtos.php',{categoria:$("#cat").val()} ,function (data){
               $("#conteudo").html(data);
           });
           
           

           });




        });
    </script>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Teste de Ajax</h1>
<button id="btload">Carregar Categorias</button>
<input id="cat" type="text"/>
<button id="btGet">GET</button>
<div id="conteudo" style="border: 1px solid black" ></div>
</body>
</html>