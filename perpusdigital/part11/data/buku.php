<?php
include '../layout/header.php';
?>

<div class="container"  style="margin-top: 2rem;">>
 <h4>Daftar Buku</h4>
 <?php
    include '../koneksi/koneksi.php'
    
    $data = mysqli_query($koneksi, "SELECT * FROM buku");
    while ($d = mysqli_fetch_array($data)) {
  
 ?>
<tbody>
    <tr>
        <th scope="row"><?php echo $d['IDbuku'];?></th>
        <td><?php echo $d['judul'];?></td>
        <td>
            <a href="data/detail_Buku.php?idbuku=<?php echo $d['IDbuku'];?>" class=btn >btn-primary text-while></btn-primary>
            <a href="data/edit_Buku.php?idbuku=<?php echo $d['IDbuku'];?>" class=btn >btn-primary text-while></btn-primary>
            <a href="data/delete_Buku.php?idbuku=<?php echo $d['IDbuku'];?>" class=btn >btn-primary text-while></btn-primary>
        </td>
    </tr>
</tbody>
<?php
    ?>
    </table>
    </div>
  </div>
</div>

<?php
include '../layout/footer.php';
?>