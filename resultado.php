<?php
include ('helpers/url.php');
class Algarismos
{
    private $romanos = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,











    ];
    public function RomaNizador($arabe)
    {
        $romanos = $this->romanos;
        $romeno = '';
        foreach ($romanos as $chaveamentor => $valorado) {
            while ($arabe >= $valorado) {
                $romeno .= $chaveamentor;
                $arabe -= $chaveamentor;
            }
        }
        return $romeno;
    }
}
$inicializar = new Algarismos();
$numero = $_POST['numero'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php $BASE_URL ?>css/romaneio.css">
    <title>Resultado</title>
</head>

<body>
    <div class="content-container">
        <div class="content-display">
            <h1>Numero convertido</h1>
            <p><?= $inicializar->RomaNizador($numero) ?></p>
            <a class="home" href="<?= $HOME ?>exercicio/index.html">inicio</a>
        </div>
    </div>


</body>

</html>