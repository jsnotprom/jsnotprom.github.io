<?php
$products = [
  [
    "name" => "Regal Collection Embroidered Conceit Logo Tee",
    "price" => 499,
    "image" => "https://down-ph.img.susercontent.com/file/sg-11134201-7rbml-m5qs39a0lie055@resize_w900_nl.webp",
    "description" => "Elevate your casual wardrobe with the Regal Collection Embroidered Conceit Logo Tee, a perfect blend of style and comfort.",
  ],
  [
    "name" => "CONCEIT HomeCourt Cropped Shirt",
    "price" => 550,
    "image" => "https://down-ph.img.susercontent.com/file/ph-11134207-7rasb-m7qgaroa4gwuef.webp",
    "description" => "This sleek black cropped tee features bold, modern graphics with the 'CONCEIT You. Elevate.' branding across the front, giving it an eye-catching appeal. ",
  ],
  [
    "name" => "CONCEIT Embroidered Baseball Cap",
    "price" => 449,
    "image" => "https://down-ph.img.susercontent.com/file/ph-11134207-7rask-m2gjq30evmv655.webp",
    "description" => "This cap features a minimalist design with three color options: black, green, and blue. It has a simple and clean look, with the word Conceit embroidered in an elegant, cursive font on the front. ",
  ],
  [
    "name" => "Regal Collection Conceit Parachute Leather Pants",
    "price" => 1920,
    "image" => "https://down-ph.img.susercontent.com/file/sg-11134201-7rblj-m5qrz7xlajh30f.webp",
    "description" => "Elevate your look with these PU leather pants, featuring a trendy baggy fit and a unique vintage wash on the edges for a worn-in, retro vibe. ",
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
