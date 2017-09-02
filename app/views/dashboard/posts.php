<?php require_once 'site_header.php'; ?>
<main class="site-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-dashboard"></i> Dashboard</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?php echo URL; ?>posts">Posts</a></li>
                        <li class="list-group-item"><a href="<?php echo URL; ?>pages">Pages</a></li>
                        <li class="list-group-item nav-divider"><a href="<?php echo URL; ?>comments">Comments</a></li>
                    </ul>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-users"></i> Users</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?php echo URL; ?>newuser">New User</a></li>
                        <li class="list-group-item"><a href="<?php echo URL; ?>allusers">All Users</a></li>
                    </ul>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-gear"></i> Settings</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?php echo URL; ?>settings">Site Details</a></li>

                    </ul>
                </div>
            </div>
           
        </div>
    </div>
    <!--end of container-->
</main>
<script>
    function deleteData(postID) {
        var conf = confirm("Are you sure ?");
        if (conf) {window.location.href = 'posts/deletepost?pid=' + postID; }
    }
</script>
<?php require_once 'site_footer.php'; ?>