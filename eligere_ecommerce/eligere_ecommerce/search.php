<?php
require_once 'shopping.php';

if (isset($_GET['query'])) {
  $search_query = $_GET['query'];
  $sql_get_items = "SELECT * FROM `items` WHERE `item_status`='A' AND (`item_name` LIKE '%$search_query%' OR `item_desc` LIKE '%$search_query%') ORDER BY `items_id` DESC";
  $get_result = mysqli_query($conn, $sql_get_items);
?>
  <h2 class="text-center">Search Results for "<?php echo $search_query;?>"</h2>
  <div class="container">
    <div class="row justify-content-center">
      <?php while ($row = mysqli_fetch_assoc($get_result)) {?>
        <!-- display each item -->
        <div class="col-md-3 mb-3">
        <style>
            .card-img {
              transition: transform 0.9s, box-shadow 0.5s;                          
              }
            .card-img:hover {
              transform: scale(1.1);
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
              cursor: pointer;
             }
        </style>
          <div class="card text-center">
            <img src="./images/<?php echo $row['item_img'];?>" width="100px" class="card-img">
            <div class="card-body">
              <h3 class="card-title">
                <?php echo $row['item_name'];?>
              </h3>
              <p class="card-text"><?php echo $row['item_desc'];?></p>
              <blockquote class="blockquote mb-0">
                <p><?php echo "Php ". number_format($row['item_price'],2);?></p>
              </blockquote>
            </div>
          </div>
          <!-- add to cart form -->
          <form action="process_add_to_cart.php" method="get" style="margin: 1rem;">
            <div class="input-group">
              <input type="text" hidden class="form-control" name="item_id" value="<?php echo $row['items_id'];?>">
              <input type="number" min="1" value="1" class="form-control" placeholder=1 name="cart_qty">
              <input type="submit" value="Add to Cart" class="btn btn-primary">
              <style>
                  .btn-primary {
                    background-color: #a37251;
                    border: none;
                    }             
             </style>
            </div>
          </form>
        </div>
      <?php }?>
    </div>
  </div>
<?php } else {?>
  <!-- display a message if no search query is provided -->
  <h2 class="text-center">No search query provided</h2>
<?php }?>