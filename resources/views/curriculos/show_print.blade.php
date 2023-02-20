<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo PDF </title>
        <style>
            body{ border-style: dashed; border-radius: 5px; border-color: blue;
				  background-color: white; margin: 2px; padding: 22px; }
						
            h1, p { color: black; text-align: center; } 

            li{
							color: black;
							text-align: left;
							padding: 8px;
							margin-left: 22px;
						}   
        </style>
</head>
<body>
    
    <h1> {{ $curriculo->nome }} </h1>

    <p> {{ $curriculo->email }} </p>
    <p> {{ $curriculo->telefone }} </p>
    <p> {{ $curriculo->idade }} </p>
    <p> {{ $curriculo->cidade }} </p>
	    <hr>  


	<h2> Sobre: </h2>
    <li> {{ $curriculo->sobre }} </li>
	    <hr>

	<h2> Formacao: </h2>
    <li> {{ $curriculo->formacao }} </li>
	    <hr>

    <h2> Conhecimento Complementar: </h2>
    <li> {{ $curriculo->conhecimento_complementar }} </li>
	    <hr>

    <h2> Experiencia: </h2>
    <li> {{ $curriculo->experiencia }} </li>   
    

</body>
</html>    