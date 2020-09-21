<?php
ob_start();
?>
<h1>Relatório de vendas</h1>
<table border="1" width="100%">
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Data</th>
    </tr>
    <tr>
        <td>Rogerio</td>
        <td>R$ 1000,00</td>
        <td>21/09/2020</td>
    </tr>
    <tr>
        <td>Rogerio</td>
        <td>R$ 1000,00</td>
        <td>21/09/2020</td>
    </tr>
    <tr>
        <td>Rogerio</td>
        <td>R$ 1000,00</td>
        <td>21/09/2020</td>
    </tr>
    <tr>
        <td>Rogerio</td>
        <td>R$ 1000,00</td>
        <td>21/09/2020</td>
    </tr>
    <tr>
        <td>Rogerio</td>
        <td>R$ 1000,00</td>
        <td>21/09/2020</td>
    </tr>
</table>
<?php
$html = ob_get_contents();
ob_end_clean();

require_once __DIR__.'/vendor/autoload.php';

$arquivo = md5(time().rand(1,100)).'.pdf';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output($arquivo, 'F');

$link = 'http://localhost/cursos/backend/b7web/phpzp/modulo-16-php-super-avancado/aula21-projeto-relatorios-em-pdf/'.$arquivo;
echo $link;

?>
