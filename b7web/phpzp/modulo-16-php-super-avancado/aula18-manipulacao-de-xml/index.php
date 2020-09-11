<?php

function array_to_xml($data, &$xml_data){
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            if (is_numeric($key)) {
                $key = 'item' . $key;
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
        } else {
            if (is_numeric($key)) {
                $key = 'item' . $key;
            }
            $xml_data->addChild($key, htmlspecialchars($value));
        }
    }
}

$data = [
    'nome' => 'Rogerio',
    'sobrenome' => 'Silva',
    'idade' => 30,
    'endereco' => [
            'Cidade' => 'Limeira',
            'Estado' => 'SP'
        ]
];

$xml_data = new SimpleXMLElement('<rogerio/>');

array_to_xml($data,$xml_data);

$result = $xml_data->asXML();

echo $result;



/*$xml = simplexml_load_file('previsao.xml');

echo 'Cidade: '.$xml->nome.'<br><br>';

//echo count($xml->previsao);

for($i = 0; $i < count($xml->previsao); $i++){
    echo 'Dia: '.$xml->previsao[$i]->dia.' - Máxima: '.$xml->previsao[$i]->maxima.'<br>';
}*/
