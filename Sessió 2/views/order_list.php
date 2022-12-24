<div class='order'>
    <div class ='order-dates'>
        <p>Order placed on <?php echo date("F j, Y", strtotime($order['date'])); ?>.</p>
    
        <p>Order will arrive on <?php echo date("F j, Y", strtotime(date("d-m-Y", strtotime($order['date'].'+10 days')))); ?>.</p>
    </div>

    <div class='order-products'>
        <?php foreach($sub_order as $sub){?>
            <p>x<?php echo $sub['quantity']; ?> <?php echo $sub['name']; ?> $<?php echo $sub['amount']; ?></p>
        <?php } ?>
    </div>

    <div class = 'order-total'>
        <h2>Total: $<?php echo $order['total']?></h2>
    </div>
</div>