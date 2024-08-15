<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
</head>
<body>
<?php
// Cria um objeto DateTime que representa a data e hora atual
$data = new DateTime();
echo "Data e hora atual: " . $data->format('Y-m-d H:i:s') . "\n";
// Exemplo de saída esperada: Data e hora atual: 2024-08-15 14:23:45

// Obtém o ano da data atual
$ano = $data->format('Y');
echo "Ano: " . $ano . "\n";
// Exemplo de saída esperada: Ano: 2024

// Obtém o mês da data atual. A função format('n') retorna o mês como um número (1 a 12).
// Subtrai 1 para ajustar o índice para o array de meses (0 a 11).
$mes = $data->format('n') - 1;
echo "Mês: " . $mes . "\n";
// Exemplo de saída esperada: Mês: 7 (se o mês atual for agosto)

// Array que contém os nomes abreviados dos meses
$mesArray = [
    "JAN", 
    "FEV", 
    "MAR", 
    "ABR", 
    "MAI", 
    "JUN", 
    "JUL", 
    "AGO", 
    "SET", 
    "OUT", 
    "NOV", 
    "DEZ"
];
// Obtém o nome abreviado do mês atual usando o índice ajustado
$mesMostrar = $mesArray[$data->format('n') - 1];
echo "Mês otimizado: " . $mesMostrar . "\n";
// Exemplo de saída esperada: Mês otimizado: AGO (se o mês atual for agosto)

// Obtém o dia do mês da data atual
$dia = $data->format('j');
echo "Dia: " . $dia . "\n";
// Exemplo de saída esperada: Dia: 15 (se o dia atual for 15)

// Obtém o dia da semana da data atual. O formato 'N' retorna um número de 1 (segunda-feira) a 7 (domingo).
// Subtrai 1 para ajustar o índice para começar em 0 (segunda-feira como 0).
$semana = $data->format('N') - 1;
echo "Dia da semana: " . $semana . "\n";
// Exemplo de saída esperada: Dia da semana: 3 (se hoje for quarta-feira)

// Obtém a hora atual no formato 24 horas
$hora = $data->format('H');
echo "Hora: " . $hora . "\n";
// Exemplo de saída esperada: Hora: 14 (se a hora atual for 14:00)

// Obtém o minuto atual
$minuto = $data->format('i');
echo "Minuto: " . $minuto . "\n";
// Exemplo de saída esperada: Minuto: 23 (se o minuto atual for 23)

// Obtém os segundos atuais
$segundo = $data->format('s');
echo "Segundos: " . $segundo . "\n";
// Exemplo de saída esperada: Segundos: 45 (se os segundos atuais forem 45)

// Obtém os microsegundos atuais e converte para milissegundos
$milissegundo = (int)($data->format('u') / 1000); // 'u' retorna microsegundos
echo "Milissegundos: " . $milissegundo . "\n";
// Exemplo de saída esperada: Milissegundos: 123 (se o microsegundo atual for 123000)

// Formata a data e hora atual no formato brasileiro completo (dd/mm/aaaa hh:mm:ss)
$dataBr1 = $data->format('d/m/Y H:i:s');
echo "Data brasileira 00/00/0000 00:00:00: " . $dataBr1 . "\n";
// Exemplo de saída esperada: Data brasileira 00/00/0000 00:00:00: 15/08/2024 14:23:45

// Formata a data atual no formato brasileiro (dd/mm/aaaa)
$dataBr2 = $data->format('d/m/Y');
echo "Data brasileira 00/00/0000: " . $dataBr2 . "\n";
// Exemplo de saída esperada: Data brasileira 00/00/0000: 15/08/2024

// Formata a hora atual no formato brasileiro (hh:mm:ss)
$dataBr3 = $data->format('H:i:s');
echo "Tempo brasileiro 00:00:00: " . $dataBr3 . "\n";
// Exemplo de saída esperada: Tempo brasileiro 00:00:00: 14:23:45

// Compara a data atual com uma data de vencimento
$hoje = new DateTime();
$vencimento = new DateTime('2023-02-01');
echo ($hoje > $vencimento) ? "Venceu\n" : "No prazo\n";
// Exemplo de saída esperada: No prazo (se a data atual for posterior a 1º de fevereiro de 2023)

// Calcula a diferença em dias entre duas datas
$dataInicial = new DateTime();
$dataFinal = new DateTime('2023-12-31');
// Obtém a diferença em segundos e converte para dias
$diferencaTempo = $dataFinal->getTimestamp() - $dataInicial->getTimestamp();
$diferencaDias = ceil($diferencaTempo / (24 * 60 * 60));
echo "Diferença em dias: " . $diferencaDias . "\n";
// Exemplo de saída esperada: Diferença em dias: 138 (se a data inicial for 15 de agosto de 2024)
?>

</body>
</html>