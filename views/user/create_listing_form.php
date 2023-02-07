<?php
session_start();
?>
<html>
<div id="header"></div>
<?php
echo $_SESSION['logged_in'];
?>
<body>
    <div class="m-5">
        <form action="create_listing.php" method="POST" class="form-horizontal">
            <input type="text" name="user" id="user" value="<?php $_SESSION['logged_in']?>" hidden>
            <input type="text" name="category" id="category" value="test" hidden>
            <div class="form-group">
                <h3>Creazione Annuncio</h3>
                <div class="col-sm-6">
                    <input type="text" name="title" id="listing-title" class="form-control my-2"
                        placeholder="titolo annuncio" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="description" id="listing-description" class="form-control my-2"
                        placeholder="descrizione" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="price" id="listing-price" class="form-control my-2" placeholder="prezzo"
                        required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Crea Annuncio
                </button>
            </div>
        </form>
    </div>
</body>
<div id="footer"></div>
<script src="..\..\templates\user_template.js"></script>

</html>