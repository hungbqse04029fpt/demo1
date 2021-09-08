<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hello cac ban</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
        $arr = array(0=>'zero',1=>'one',2=>'two',3=>'three');
        $arr2 = array(
            array('hung','hung2','hung3'),
            array(20,21,22)
        );
        $sizearr = count($arr2[0]);
    ?>
    <!--
    @foreach($arr as $k=>$v)
        {{ $k.'='.$v }}
    @endforeach
    -->
    <!--
    @foreach($arr2 as $arrd)
        @foreach($arrd as $arrd2)
            {{$arrd2}}
        @endforeach
    @endforeach
    -->
    <h1>{{$sizearr}}</h1>
</body>

</html>