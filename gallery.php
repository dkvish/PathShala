<?php include 'header.php'; ?>
<body>

<style>
.gallery {
  display: flex;
  flex-wrap: wrap;
}

.gallery-item {
  width: calc(33.33% - 20px);
  margin: 10px;
  box-sizing: border-box;
}

.gallery-image {
  width: 100%;
  height: 200px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  border: 1px solid lightgray;
}

@media (max-width: 767px) {
  .gallery-item {
    width: calc(50% - 20px);
  }
}

@media (max-width: 479px) {
  .gallery-item {
    width: 100%;
  }
}

</style>


This code creates a flexible gallery of items that can adjust their width based on the screen size of the device being used to view the gallery. The .gallery class sets the container to a flexbox layout and uses the flex-wrap property to wrap the items to the next line if the screen size is too small to display all of the items in a single row.

The .gallery-item class sets the width of each item to 33.33% of the container, with a margin of 10px between each item. The .gallery-image class sets the background image of each item and gives it a border.

The media queries adjust the width of the items based on the maximum width of the screen. If the screen width is less than 767px, the item width is set to 50% of the container. If the screen width is less than 479px, the item width is set to 100% of the container, so each item takes up the full width of the screen.

This code is just an example, and you can modify it to suit your specific needs and design preferences.





































</body>
<?php include 'footer.php'; ?>