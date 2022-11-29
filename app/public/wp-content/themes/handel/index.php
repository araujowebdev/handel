<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handel</title>
</head>
<body>
<?php
$nome = "Raphael";
  echo get_the_title() . " " . $nome;
?>
<h1><?php echo $nome; ?></h1>
<h1><?= $nome; ?></h1>

<?php
  $produtos = ['Camisetas', 'Bermudas', 'Casacos'];
  echo $produtos[1];
  print_r($produtos);
  var_dump($produtos);
  ?>
  <pre>
    <?= print_r($produtos) ?>
    <?= var_dump($produtos) ?>
  </pre>
  <?php
    $produto = [
      'nome' => 'Camiseta Branca',
      'preco' => 'R$ 59',
      'img' => [
        'src' => './img/camiseta_branca.jpg',
        'alt' => 'Camiseta Branca',
        ]
      ];
      var_dump($produto);
  ?>
  <h2><?= $produto['nome'] ?></h2>
  <p><?= $produto['preco'] ?></p>
  <img src="<?= $produto['img']['src'] ?>;" alt="<?= $produto['img']['alt'] ?>">

  <br>
  <?php
    $categorias = ['Camisetas'];
    var_dump($categorias);
  ?>
  <br>
  <?php
  unset($produto);
  $categorias[] = 'Bermudas';
  var_dump($categorias);
  $produto['estoque'] = '10 itens';
  var_dump($produto);
  echo count($produto);
  ?>
  <br>
  <?php
  $produtos_chaves = array_keys($produtos);
  print_r($produtos_chaves);
  ?>
</body>
</html>
