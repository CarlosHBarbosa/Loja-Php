<?php
  $categoria = $_POST["categoria"];
  $subcategoria = $_POST["subcategoria"];
  include("../../includes/conexao.php");

  $gravar = mysqli_query($conexao, "insert into tb_subcategorias VALUES(0, '$categoria', '$subcategoria')");
  if ($gravar){
	 echo "<script>alert('Subcategoria Gravada com sucesso!')</script>" ; 
	 echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=SubCategorias">';
  }else{
	  echo "ERRO";
  }
   
?>