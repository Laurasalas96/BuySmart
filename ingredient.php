<?php
require_once("partial/header.php");
require_once("partial/navigation.php");
?>

<main role="main" class="col-md-9">
    <h1 class="h3 mb-3 font-weight-normal">Rechercher un produit</h1>
    <label for="inputProduct" class="sr-only">Product :</label>
    <input type="text" id="inputProduct" class="form-control" placeholder="Product" name="product" required="true" autofocus="true">
    <button class="btn btn-lg btn-primary" type="submit" id="search">Search</button>
    <div id="info-product" style="display: none">
        <div>
            <p>Type :</p>
            <input type="text" class="form-control" id="product-type" name="product-type" readonly="true">
        </div>
        <div>
            <p>Unit :</p>
            <input type="text" class="form-control" id="product-unit" name="product-unit" readonly="true">
        </div>
        <div>
            <p>Weight :</p>
            <input type="text" class="form-control" id="product-weight" name="product-weight" readonly="true">
        </div>
        <div>
            <p>Carbon print :</p>
            <input type="text" class="form-control" id="product-carbon" name="product-carbon" readonly="true">
        </div>
        <div>
            <p>Water print :</p>
            <input type="text" class="form-control" id="product-water" name="product-water" readonly="true">
        </div>
        <button type="submit" class="btn btn-submit" id="addToList">Add to lists</button>
    </div>
</main>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/ingredient.js"></script>
</body>