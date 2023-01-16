<?php
include('parts/addb.php');
//  menus active kawal de home double click ki masla da aw div ki masla da
?>

<!-- Page Header-->
<div class="page-header no-margin-bottom">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Update Home</h2>
  </div>
</div>
<!-- Breadcrumb-->
<div class="container-fluid">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="/mashal/admin/#home_profile">Home</a></li>
    <li class="breadcrumb-item active">Updates</li>
  </ul>
</div>

<div class="container table-responsive py-5">
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">iD</th>
        <th scope="col">Image</th>
        <th scope="col">Edite</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php
      $body = mysqli_query($connect, "select * from herosection");
      $counter = mysqli_num_rows($body);
      $count = 0;
      while ($row = mysqli_fetch_assoc($body)) {

        $id = $row['id'];
        $title = $row['title'];
        $image = $row['image'];
        $desc = $row['description'];

        $count++;
      ?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <td><img style="height:60px; width:70px" src='../assets/img/<?php echo $image; ?>'></td>
          <td><?php echo $title; ?></td>
          <td><?php echo $desc; ?></td>
          <!-- <td><a href="image_delete_list.php?info=<?php echo $id; ?>" class="btn btn-primary" role="button">Delete</a></td> -->
          <td><a href="home_update.php?info=<?php echo $id; ?>" class="btn btn-primary" role="button">Edit</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>