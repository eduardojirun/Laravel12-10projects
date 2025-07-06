<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Resume</title>
</head>
<body>
    <div style="margin: 0 auto;display: block;width: 500px;">
        <table width="100%" border="1">
            <tr>
                <td colspan="2">
                    <img src="{{$imagePath}}" style="width:200px;">
                </td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td>{{$name}}</td>
            </tr>
            <tr>
                <td>Dirección:</td>
                <td>{{$address}}</td>
            </tr>
            <tr>
                <td>Número telefónico:</td>
                <td>{{$mobileNumber}}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{$email}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
