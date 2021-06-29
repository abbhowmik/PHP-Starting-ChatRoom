<?php
 include '_navbar.php';
?>

<!-- html -->
<div class="container my-5">
    <form action="/Php_ChatRoom/claim.php" method="post">
        RoomName: <input type="text" id="roomName" name="roomName" placeholder="Enter RoomName here">
        <button type="submit" class="btn btn-primary">Create Room</button>
    </form>
</div>