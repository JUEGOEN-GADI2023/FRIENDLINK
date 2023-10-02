<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
    <?php include('navbar.php'); ?>
    <div id="masthead">
        <div class="container">
            <?php include('heading.php'); ?>
        </div><!-- /cont -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-spacer"></div>
                </div>
            </div>
        </div><!-- /cont -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <!--/stories-->
                        <div class="row">
                            <br>
                            <?php
                            // Supongo que tienes una conexión a la base de datos llamada $conn
                            $query = $conn->prepare("SELECT members.member_id, members.firstname, members.lastname, members.image, friends.friends_id
                                FROM members
                                INNER JOIN friends ON (members.member_id = friends.my_id AND friends.my_friend_id = ?) OR (members.member_id = friends.my_friend_id AND friends.my_id = ?)");
                            $query->execute([$session_id, $session_id]);

                            while ($row = $query->fetch()) {
                                $friend_name = $row['firstname'] . " " . $row['lastname'];
                                $friend_image = $row['image'];
                                $id = $row['friends_id'];
                                ?>
                                <div class="row">
                                    <div class="col-md-2 text-center">
                                        <img src="<?php echo $friend_image; ?>" style="width:100px;height:100px" class="img-circle">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="pull-right"><a href="delete_friend.php?id=<?php echo $id; ?>" class="btn btn-danger"><i class="icon-remove"></i> No es mi amigo </a></div>
                                        <div class="alert"><?php echo $friend_name; ?></div>
                                    </div>
                                </div>
                                <hr>
                                <br><br>
                            <?php } ?>
                        </div>
                        <hr>
                    </div>
                </div>
            </div><!--/col-12-->
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
