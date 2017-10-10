
<html>

<head><title>

Truncate example

</title></head>

<body>


<b>Original Output data </b>
{$firstname} </BR>

<b>Original Output size: </b>
{$firstname|count_characters}


</BR>

<b>Truncate Output data </b>
{$firstname|truncate:10:""}

<br>
<b>Truncate Output size </b>
{$firstname|truncate:10:""|count_characters}





</body></html>


