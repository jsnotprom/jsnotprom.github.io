<?php
$products = [
  [
    "name" => "Apple iPhone 15",
    "price" => 36590,
    "image" => "https://down-ph.img.susercontent.com/file/ph-11134201-7rask-m6qk65f3vw8v3a.webp",
    "description" => "iPhone 15 brings you Dynamic Island, a 48MP Main camera, and USB-C — all in a durable color-infused glass and aluminum design.",
  ],
  [
    "name" => "Apple Watch Series 10 (GPS) Sport Band",
    "price" => 24390,
    "image" => "https://down-ph.img.susercontent.com/file/ph-11134201-7rasa-m6qk79azipcd8d.webp",
    "description" => "Meet Apple Watch Series 10. A bigger display with more screen area and a thinner, lighter design. Get advanced fitness and health features, plus faster charging.",
  ],
  [
    "name" => "Tylex XP201 Powerbank 20000mah Battery Capacity",
    "price" => 399,
    "image" => "https://down-ph.img.susercontent.com/file/ph-11134207-7rasm-m3u61se3igvub1.webp",
    "description" => "Tylex XP201 Powerbank 20000mah Battery Capacity Built-in Cable Portable Boarding Intelligent Charging Air Allowable Super Fast Charge Power Bank LED Digital Display. ",
  ],
  [
    "name" => "Soundcore by Anker R50i, True Wireless Earbuds",
    "price" => 725,
    "image" => "https://down-ph.img.susercontent.com/file/ph-11134207-7rasl-m0ydcelsnzj7f0.webp",
    "description" => "Soundcore by Anker R50i, Bluetooth 5.3 Earphones, IPX5, BassUp EQ, 30 hour Playtime, Fast Charging - A3949H12",
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
