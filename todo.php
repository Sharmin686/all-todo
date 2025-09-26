<?php
include"./layout/header.php";
?>


<div class="col-lg-4 mx-auto mt-5">
  <div class="card">
  <div class="card header">add todos</div>
  <div class="card_body">
      <form action="./controller/AddToDoController.php" method="POST">
<br>
        <div class="form-group">
            <input name="TITLE" type="text" placeholder="title" class="form-control">
        </div>
<br>
        <div class="form-group">
            <textarea name="DESCRIPTION" class="from-control" placeholder="discription"></textarea>
        </div>

        <div class="form-group">
          <label for="">deadline</label> <br>
            <input name="DATE" type="date" class="form control">
        </div>
<br>
        <div>
          <button class=btn-primary w-100 mt-3>submit</button>
        </div>
      </form>
  </div>
</div>
</div>


<?php
include"./layout/footer.php";
?>
