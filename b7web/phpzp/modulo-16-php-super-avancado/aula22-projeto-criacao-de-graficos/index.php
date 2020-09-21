<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto Gráficos</title>
</head>
<body>
    <div style="width: 500px;">
        <canvas id="grafico"></canvas>
    </div>
    <?php
        $vendas = [10,1,90,50];
        $custos = [5,2,100,60];
    ?>
    <script type="text/javascript" src="Chart.min.js"></script>
    <script type="text/javascript">
        window.onload = function (){
            var contexto = document.getElementById('grafico').getContext('2d');
            var grafico = new Chart(contexto,{
                type: 'line',
                data: {
                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril'],
                    datasets: [{
                        label: 'Vendas',
                        backgroundColor: '#ff0000',
                        borderColor: '#d48181',
                        data: [<?= implode(',',$vendas) ?>],
                        fill:false
                    },{
                        label: 'Custos',
                        backgroundColor: '#12540e',
                        borderColor: '#9bf594',
                        data: [<?= implode(',',$custos) ?>],
                        fill:false
                    }]
                }
            });
        }

    </script>
</body>
</html>