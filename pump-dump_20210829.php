<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

<?php
        require 'functions.php';
        echo 'PHP start: '.time_now().'<br>';
        require 'vendor/autoload.php';
        require 'environment.php';

        $pair = $_REQUEST["pair"].'BTC';
        $buy_quantity = sprintf('%.8f',$_REQUEST["quantity"]);

        display('Crypto to be pumped is '.$_REQUEST["pair"].' !!!');
        display('Amount to buy is '.$buy_quantity.' !!!');

        $buy_quantity_5 = sprintf('%.8f',
                floor (
                    $buy_quantity/5 * 10000000
                ) / 10000000
            );

        display('Quantité 1/5 : '.$buy_quantity_5);

        $bought_quantity = 0;

        // MARKET BUY ORDERS
        for($i=0;$i<5;$i++) {
            echo 'Market buy '.$i.' starts: '.time_now().'<br>';
            $result_buy = market_buy($pair, $buy_quantity_5);
            echo 'Market buy '.$i.' finished: '.time_now().'<br>';
            display($result_buy);
            $bought_quantity = $bought_quantity + $result_buy['executedQty'];

            // DISPLAY MARKET ORDER
            echo 'Filling table: '.time_now().'<br>';
            $order_table[$pair]['time'] = $result_buy['transactTime'];   // Transaction Time
            $order_table[$pair]['side'] = 'BUY';                            // Side
            $order_table[$pair]['status'] = $result_buy['status'];       // Status
            $order_table[$pair]['orderid'] = $result_buy['orderId'];        // OrderID
            $order_table[$pair]['quantity'] = $buy_quantity_5;             // Quantity Requested
            $order_table[$pair]['price_exec'] = sprintf('%.8f',$result_buy['cummulativeQuoteQty']/$result_buy['executedQty']);  // Executed Price
            $order_table[$pair]['quantity_exec'] = $result_buy['executedQty'];           // Quantity Executed
            $order_table[$pair]['btc_exec'] = $result_buy['cummulativeQuoteQty'];        // BTC Executed
    
            display_order($order_table, $pair);
            export_order ($order_table, $pair);

            display('Sum of bought quantity is: '.$bought_quantity);

            usleep(700000);
        }

        // Récupération des informations de la pair
        echo 'Binance Info API call starts: '.time_now().'<br>';
        $result = binance_info($pair);
        echo 'Binance Info API call ends: '.time_now().'<br>';

        $lotstepsize = $result['symbols'][0]['filters'][2]['stepSize'];
        display('LotStepSize is: '.$lotstepsize);

        $tickSize = $result['symbols'][0]['filters'][0]['tickSize'];
        display('TickSize is: '.$tickSize);

        // Calcul de la quantité à vendre
        $sell_quantity = sprintf('%.8f',
                floor(         // arrondi vers le bas avec le bon nombre de décimales
                    $bought_quantity / $lotstepsize
                ) * $lotstepsize
            );
        
        usleep(11500000);

        // SELL LIMIT ORDER
        echo 'Orderbook API call starts: '.time_now().'<br>';
        $bookPrices = $api->bookPrices();               // librairie PHP

        $bestask = $bookPrices[$pair]['ask'];
        $sellprice = $bestask-$tickSize;      // prix de vente = meilleur ask moins 1

        echo 'Limit sell starts: '.time_now().'<br>';
        $result_sell = $api->sell($pair, $sell_quantity, $sellprice);         // librairie PHP
        display($result_sell);

        display('Best ask is: '.$bestask);
        display('Best ask minus 1 is: '.sprintf('%.8f',$sellprice));

        echo 'Filling table: '.time_now().'<br>';
        // Filling table for LIMIT SELL order
        $order_table[$pair]['time'] = $result_sell['transactTime'];   // Transaction Time
        $order_table[$pair]['side'] = 'SELL';                    // Side
        $order_table[$pair]['status'] = $result_sell['status'];       // Status
        $order_table[$pair]['orderid'] = $result_sell['orderId'];                     // OrderID
        $order_table[$pair]['quantity'] = $sell_quantity;              // Quantity Requested
        $order_table[$pair]['price_exec'] = NULL;
        $order_table[$pair]['quantity_exec'] = NULL;           // Quantity Executed
        $order_table[$pair]['btc_exec'] = $result_sell['cummulativeQuoteQty'];        // BTC Executed

        display_order($order_table, $pair);
        export_order ($order_table, $pair);

?>
    </body>
</html>