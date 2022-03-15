<!--inclusion du header et de la navbar -->
<?php include_once 'inc/base.inc.php'; ?>
<?php include_once 'inc/nav.inc.php' ?>
<!--inclusion du header et de la navbar -->

<div class="container">
    <div class="row">
        <div class="col-md-12" style="display: flex; justify-content: center">
            <!--Map -->
            <div class="map">
                <div class="card">
                    <div class="card-body" id="map" style="width:60rem; height: 40rem">
                        <h5 class="card-title">Où nous trouver ?</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47924.55082485269!2d2.133345062769466!3d41.346171142454175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2249e23480d%3A0xe9f67d7ba7b87450!2sPort%20de%20Barcelone!5e0!3m2!1sfr!2sfr!4v1614089099502!5m2!1sfr!2sfr"></iframe>
                    </div>
                </div>
            </div>
            <!--Map -->
        </div>
    </div>
</div>

<?php include_once 'inc/footer.inc.php' ?>

<script>
    document.getElementById('index').className = 'active';
</script>

