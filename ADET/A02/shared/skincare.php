<?php
$products = [
  [
    "name" => "CETAPHIL Gentle Skin Cleanser 60ml",
    "price" => 185,
    "image" => "https://down-ph.img.susercontent.com/file/fb0ac5f36f482f05d5051831e936cf0c.webp",
    "description" => "Mild, non-irritating formulation for everyday cleansing of even the most sensitive skin. ",
  ],
  [
    "name" => "SKIN1004 Madagascar Centella Ampoule 30ml (Cruelty-Free)",
    "price" => 269,
    "image" => "https://down-ph.img.susercontent.com/file/ph-11134207-7r991-lqwo6igm8u2sb6.webp",
    "description" => "SKIN1004's signature ingredient Madagascar Centella Asiatica Extract ",
  ],
  [
    "name" => "Céleteque Hydration Travel Kit",
    "price" => 172,
    "image" => "https://down-ph.img.susercontent.com/file/f68c7ce451ae95b706b19a66e1002a44.webp",
    "description" => "A convenient travel essential that provides the 3 step skin care system: Cleanse, Tone and Moisturize for healthy, beautiful skin even on-the-go. ",
  ],
  [
    "name" => "SKIN1004 Madagascar Centella Hyalu-Cica Water-Fit Sun Serum SPF50+ PA++++ 50ml",
    "price" => 499,
    "image" => "https://down-ph.img.susercontent.com/file/ph-11134207-7r98t-lnwi20rm0j8p19.webp",
    "description" => "💙SKIN1004 Madagascar Centella Hyalu-Cica Water-Fit Sun Serum SPF50+ PA++++💙",
  ],
];
?>

<style>
  .product-card {
    height: 500px;
    display: flex;
    flex-direction: column;
  }

  .card-body {
    display: flex;
    flex-direction: column;
    flex: 1;
    overflow: hidden;
  }

  .product-description {
    max-height: 60px;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
  <?php foreach ($products as $product): ?>
    <div class="col">
      <div class="card shadow-sm product-card">
        <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['name'] ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $product['name'] ?></h5>
          <p class="card-text small text-muted product-description"><?= $product['description'] ?></p>
          <div class="mt-auto">
            <p class="fw-bold">P<?= number_format($product['price'], 2) ?></p>
            <button class="btn btn-dark w-100">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
