<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
    body{
        background-color:#f2f2f2;
    }
    .chessboard{
        width: 700px;
        height: 700px;
        margin-left: auto;
        margin-right: auto;
        border: 20px solid #660033;
        background-image: url("./texture_white.jpeg");
        font-size:60px;
        text-align: center;
        color: orange;
    }
    .brown{
        width: 76.5px;
        height: 76.5px;
        background-image: url("./brown_texture.jpeg");
        float: left;
    }
    </style>
</head>
<body class="body">
    <table class="chessboard">
        <tr>
            <td>&#9820;</td>
            <td class="brown">&#9822;</td>
            <td>&#9821;</td>
            <td class="brown">&#9819;</td>
            <td>&#9818;</td>
            <td class="brown">&#9821;</td>
            <td>&#9822;</td>
            <td class="brown">&#9820;</td>
        </tr>
        <tr>
            <td class="brown">&#9823;</td>
            <td>&#9823;</td>
            <td class="brown">&#9823;</td>
            <td >&#9823;</td>
            <td class="brown">&#9823;</td>
            <td >&#9823;</td>
            <td class="brown">&#9823;</td>
            <td>&#9823;</td>
        </tr>
        <tr>
            <td></td>
            <td class="brown"></td>
            <td></td>
            <td class="brown"></td>
            <td></td>
            <td class="brown"></td>
            <td></td>
            <td class="brown"></td>
        </tr>
        <tr>
            <td class="brown"></td>
            <td></td>
            <td class="brown"></td>
            <td ></td>
            <td class="brown"></td>
            <td ></td>
            <td class="brown"></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td class="brown"></td>
            <td></td>
            <td class="brown"></td>
            <td></td>
            <td class="brown"></td>
            <td></td>
            <td class="brown"></td>
        </tr>
        <tr>
            <td class="brown"></td>
            <td></td>
            <td class="brown"></td>
            <td ></td>
            <td class="brown"></td>
            <td ></td>
            <td class="brown"></td>
            <td></td>
        </tr>
        <tr>
            <td>&#9817;</td>
            <td class="brown">&#9817;</td>
            <td>&#9817;</td>
            <td class="brown">&#9817;</td>
            <td>&#9817;</td>
            <td class="brown">&#9817;</td>
            <td>&#9817;</td>
            <td class="brown">&#9817;</td>
        </tr>
        <tr>
            <td class="brown">&#9814;</td>
            <td>&#9816;</td>
            <td class="brown">&#9815;</td>
            <td >&#9813;</td>
            <td class="brown">&#9812;</td>
            <td >&#9815;</td>
            <td class="brown">&#9816;</td>
            <td>&#9814;</td>
        </tr>
    </table>
</body>
</html>