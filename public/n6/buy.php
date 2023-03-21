<?php
    include 'inc/connect.php';
    $conn = new Database;
?>
<?php
    $select = $conn->select("select * from cart");
    if($select!=false)
    {
        while ($row_cart = mysqli_fetch_assoc($select)) {
            $delete_cart = $conn->delete("delete from cart where id_cart = " . $row_cart['id_cart']);
        }
    }
    header('Location:index.php');
?>