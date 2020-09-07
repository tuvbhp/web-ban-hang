<?php
sestion_start(); //sestion can user when insert this paragraph
ob_start();
?>

<html>

<head>
    <title>Bài tập 6</title>
    <meta charset=”utf-8″ />
    <link rel="stylesheet" href="{{ asset('tests/add.css') }}" />
</head>

<body>
    <form action=”” method=”post”>
        <h4>Mua hoa</h4>
        <div>
            <?php
if(isset($_POST[‘submit’]))
{
$id = $_POST[‘id’];
$tenhoa = $_POST[‘ten’];
$soluong = $_POST[‘soluong’];
$gia = $_POST[‘gia’];
if(!isset($_SESSION[‘arMuaHoa’][$id])){
$_SESSION[‘arMuaHoa’][$id] = array(
‘tenhoa’ => $tenhoa,
‘soluong’ => $soluong,
‘gia’ => $gia
);
}else{
$_SESSION[‘arMuaHoa’][$id][‘soluong’] += $soluong;
}
header("LOCATION:CREATE.BLADE.PHP");
}
?>
        </div>
        <div>
            <p><label>ID hoa: </label><input type="text" name="is_dir" value=""></input></p>
            <p><label>Tên hoa: </label><input type="text" name="ten" value=""></input></p>
            <p><label>Số lượng: </label><input type="number" name="soluong" value=""></input></p>
            <p><label>Giá:</label><input type="number" name="gia" value=""></input></p>
            <input type="submit" name="submit" value="Mua Hoa"></input>
        </div>
    </form>
</body>

</html>
<?php
ob_end_flush();
?>